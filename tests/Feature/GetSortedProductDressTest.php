<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Http\Controllers\Client\ProductDressController;
use InvalidArgumentException;
use Illuminate\Support\Collection;

class GetSortedProductDressTest extends TestCase
{
    public function testValidSortParameterDesc()
    {
        $mockDB = \Mockery::mock('alias:DB');
        $mockTable = \Mockery::mock();
        $mockDB->shouldReceive('table')->once()->with('products')->andReturn($mockTable);
        $mockTable->shouldReceive('join')->once()->with('categories', 'products.categorie_id', '=', 'categories.id')->andReturn($mockTable);
        $mockTable->shouldReceive('where')->once()->with('categories.name', 'váy đầm')->andReturn($mockTable);
        $mockTable->shouldReceive('orderByRaw')->once()->with('new_price desc')->andReturn($mockTable);
        $mockTable->shouldReceive('take')->once()->with(15)->andReturn($mockTable);
        $mockTable->shouldReceive('get')->once()->andReturn(new Collection());
        $productDressController = new ProductDressController();
        $sort = "desc";
        $sortedProducts = $productDressController->getSortedProductDress($sort);
        $this->assertInstanceOf(Collection::class, $sortedProducts);
    }

    public function testValidSortParameterAsc()
    {
        $mockDB = \Mockery::mock('alias:DB');
        $mockTable = \Mockery::mock();
        $mockDB->shouldReceive('table')->once()->with('products')->andReturn($mockTable);
        $mockTable->shouldReceive('join')->once()->with('categories', 'products.categorie_id', '=', 'categories.id')->andReturn($mockTable);
        $mockTable->shouldReceive('where')->once()->with('categories.name', 'váy đầm')->andReturn($mockTable);
        $mockTable->shouldReceive('orderByRaw')->once()->with('new_price asc')->andReturn($mockTable);
        $mockTable->shouldReceive('take')->once()->with(15)->andReturn($mockTable);
        $mockTable->shouldReceive('get')->once()->andReturn(new Collection());
        $productDressController = new ProductDressController();
        $sort = "asc";
        $sortedProducts = $productDressController->getSortedProductDress($sort);
        $this->assertInstanceOf(Collection::class, $sortedProducts);
    }

    public function testInvalidSortParameter()
    {
        $productDressController = new ProductDressController();
        $this->expectException(InvalidArgumentException::class);
        $productDressController->getSortedProductDress("invalid");
    }
}
