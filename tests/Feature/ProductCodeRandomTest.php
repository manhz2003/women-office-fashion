<?php

use Tests\TestCase;
use App\Http\Controllers\Client\SaleOffController;

class ProductCodeRandomTest extends TestCase
{
    public function testProductRandomsaleOffWithValidLimit()
    {
        $SaleOffController = new SaleOffController();
        $limit = 10;
        $products = $SaleOffController->productRandomsaleOff($limit);
        $this->assertInstanceOf(Illuminate\Support\Collection::class, $products);

        foreach ($products as $product) {
            $this->assertTrue(property_exists($product, 'id'));
            $this->assertTrue(property_exists($product, 'name'));
            $this->assertTrue(property_exists($product, 'old_price'));
            $this->assertTrue(property_exists($product, 'new_price'));
        }
    }

    public function testProductRandomsaleOffWithInvalidLimit()
    {
        $SaleOffController = new SaleOffController();
        $invalidLimit = 'invalid_limit';
        $this->expectException(InvalidArgumentException::class);
        $SaleOffController->productRandomsaleOff($invalidLimit);
    }
}
