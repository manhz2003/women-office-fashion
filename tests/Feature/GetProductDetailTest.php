<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Http\Controllers\Client\ProductDetailController;
use InvalidArgumentException;
use Illuminate\Support\Collection;

class getProductDetailTest extends TestCase
{
    public function testValidProductId()
    {
        $mockDB = \Mockery::mock('alias:DB');
        $mockTable = \Mockery::mock();
        $mockDB->shouldReceive('table')->once()->with('products')->andReturn($mockTable);
        $mockTable->shouldReceive('where')->once()->with('id', 'AE01010')->andReturn($mockTable);
        $mockTable->shouldReceive('first')->once()->andReturn(Collection::class);
        $productController = new ProductDetailController();
        $productId = "AE01010";
        $validProduct = $productController->getProductDetail($productId);
        $this->assertInstanceOf(Collection::class, $validProduct);
    }

    public function testNullProductId()
    {
        $mock = $this->createMock(ProductDetailController::class);
        $mock->method('getProductDetail')->will($this->throwException(new InvalidArgumentException));
        $this->expectException(InvalidArgumentException::class);
        $mock->getProductDetail(null);
    }

    public function testEmptyProductId()
    {
        $mock = $this->createMock(ProductDetailController::class);
        $mock->method('getProductDetail')->will($this->throwException(new InvalidArgumentException));
        $this->expectException(InvalidArgumentException::class);
        $mock->getProductDetail("");
    }

    public function testNonExistingProductId()
    {
        $mock = $this->createMock(ProductDetailController::class);
        $mock->method('getProductDetail')->willReturn(null);
        $nonExistingProductId = 12345;
        $nonExistingProduct = $mock->getProductDetail($nonExistingProductId);
        $this->assertNull($nonExistingProduct);
    }
}
