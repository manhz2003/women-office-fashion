<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Http\Controllers\Client\ProductFashionController;
use InvalidArgumentException;
use Illuminate\Support\Collection;

class GetSortedProductFashionTest extends TestCase
{
    public function testValidSortParameterDesc()
    {
        $mockDB = \Mockery::mock('alias:DB');
        $mockTable = \Mockery::mock();
        $mockDB->shouldReceive('table')->once()->with('products')->andReturn($mockTable);
        $mockTable->shouldReceive('join')->once()->with('categories', 'products.categorie_id', '=', 'categories.id')->andReturn($mockTable);
        $mockTable->shouldReceive('where')->once()->with('categories.name', 'thời trang')->andReturn($mockTable);
        $mockTable->shouldReceive('orderByRaw')->once()->with('new_price desc')->andReturn($mockTable);
        $mockTable->shouldReceive('take')->once()->with(15)->andReturn($mockTable);
        $mockTable->shouldReceive('get')->once()->andReturn(new Collection());
        $productFashionController = new ProductFashionController();
        $sort = "desc";
        $sortedProducts = $productFashionController->getSortedProductFashion($sort);
        $this->assertInstanceOf(Collection::class, $sortedProducts);
    }

    public function testValidSortParameterAsc()
    {
        $mockDB = \Mockery::mock('alias:DB');
        $mockTable = \Mockery::mock();
        $mockDB->shouldReceive('table')->once()->with('products')->andReturn($mockTable);
        $mockTable->shouldReceive('join')->once()->with('categories', 'products.categorie_id', '=', 'categories.id')->andReturn($mockTable);
        $mockTable->shouldReceive('where')->once()->with('categories.name', 'thời trang')->andReturn($mockTable);
        $mockTable->shouldReceive('orderByRaw')->once()->with('new_price')->andReturn($mockTable);
        $mockTable->shouldReceive('take')->once()->with(15)->andReturn($mockTable);
        $mockTable->shouldReceive('get')->once()->andReturn(new Collection());
        $productFashionController = new ProductFashionController();
        $sort = "asc";
        $sortedProducts = $productFashionController->getSortedProductFashion($sort);
        $this->assertInstanceOf(Collection::class, $sortedProducts);
    }

    public function testInvalidSortParameter()
    {
        $productFashionController = new ProductFashionController();
        $this->expectException(InvalidArgumentException::class);
        $productFashionController->getSortedProductFashion("invalid");
    }
}
