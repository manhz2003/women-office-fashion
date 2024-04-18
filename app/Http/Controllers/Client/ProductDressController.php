<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;

class ProductDressController extends Controller
{
    public function viewProductDress()
    {
        $products = $this->productRandomDress();
        return view('client.pages.product-dress', compact('products'));
    }

    // lấy ngẫu nhiên 15 váy đầm từ bảng product cho trang váy đầm
    public function productRandomDress()
    {
        $products = DB::table('products')
            ->join('categories', 'products.categorie_id', '=', 'categories.id')
            ->where('categories.name', 'váy đầm')
            ->distinct()
            ->inRandomOrder()
            ->take(15)
            ->get(['products.id', 'products.name', 'products.old_price', 'products.new_price', 'products.thumbnail']);

        return  $products;
    }

    // sắp xếp 15 váy đầm từ bảng product cho trang váy đầm
    public function getSortedProductDress($sort)
    {
        if ($sort !== 'asc' && $sort !== "desc") {
            throw new InvalidArgumentException("Invalid sort parameter must be asc or desc");
        }

        if ($sort === 'asc') {
            $orderBy = 'new_price';
        } else {
            $orderBy = 'new_price desc';
        }

        $sortedProducts = DB::table('products')
            ->join('categories', 'products.categorie_id', '=', 'categories.id')
            ->where('categories.name', 'váy đầm')
            ->orderByRaw($orderBy)
            ->take(15)
            ->get(['products.id', 'products.name', 'products.old_price', 'products.new_price', 'products.thumbnail']);

        return $sortedProducts;
    }

    // trả 15 váy đầm đã sắp xếp
    public function sortProductDress(Request $request, $sort = 'desc')
    {
        $products = $this->getSortedProductDress($sort);

        return view('client.pages.product-dress', compact('products', 'sort'));
    }
}
