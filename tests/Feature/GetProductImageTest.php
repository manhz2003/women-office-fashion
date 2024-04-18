<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Http\Controllers\Client\ProductDetailController;
use InvalidArgumentException;
use Illuminate\Support\Collection;

class GetProductImageTest extends TestCase
{
    // test hàm getProductImages trong ProductDetailController
    public function testValidProductId()
    {
        $mockDB = \Mockery::mock('alias:DB');
        $mockTable = \Mockery::mock();
        $mockDB->shouldReceive('table')->once()->with('images')->andReturn($mockTable);
        $mockTable->shouldReceive('where')->once()->with('product_id', 'AE01010')->andReturn($mockTable);
        $mockTable->shouldReceive('get')->once()->andReturn(Collection::class);
        $productController = new ProductDetailController();
        $productId = "AE01010";
        $validProduct = $productController->getProductImages($productId);
        $this->assertInstanceOf(Collection::class, $validProduct);
    }

    public function testNullProductId()
    {
        $mock = $this->createMock(ProductDetailController::class);
        $mock->method('getProductImages')->will($this->throwException(new InvalidArgumentException));
        $this->expectException(InvalidArgumentException::class);
        $mock->getProductImages(null);
    }

    public function testEmptyProductId()
    {
        $mock = $this->createMock(ProductDetailController::class);
        $mock->method('getProductImages')->will($this->throwException(new InvalidArgumentException));
        $this->expectException(InvalidArgumentException::class);
        $mock->getProductImages("");
    }

    public function testNonExistingProductId()
    {
        $mock = $this->createMock(ProductDetailController::class);
        $mock->method('getProductImages')->willReturn(null);
        $nonExistingProductId = 12345;
        $nonExistingProduct = $mock->getProductImages($nonExistingProductId);
        $this->assertNull($nonExistingProduct);
    }
}
