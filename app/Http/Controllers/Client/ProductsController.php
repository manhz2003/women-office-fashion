<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\categorie;
use Illuminate\Support\Facades\View;

class ProductsController extends Controller
{
    // lấy ra 10 váy đầm hiển thị trên home
    public function ProductDressHome()
    {
        $products = DB::table('products')
            ->inRandomOrder()
            ->distinct()
            ->select('id', 'name', 'old_price', 'new_price', 'thumbnail')
            ->limit(10)
            ->get();
        return view('client.pages.home', compact('products'));
    }

    // lấy ra 20 váy đầm
    public function ProductDressPage()
    {
        $products = DB::table('products')
            ->join('categories', 'products.categorie_id', '=', 'categories.id')
            ->where('categories.name', 'váy đầm')
            ->take(20)
            ->get(['products.id', 'products.name', 'products.old_price', 'products.new_price', 'products.thumbnail']);

        return view('client.pages.product-dress', compact('products'));
    }

    // sản phẩm thời trang
    public function getProductRandom()
    {
        $products = DB::table('products')
            ->inRandomOrder()
            ->distinct()
            ->select('id', 'name', 'old_price', 'new_price', 'thumbnail')
            ->limit(20)
            ->get();

        return $products;
    }

    // trả product cho page product fashion
    public function viewProductFashion()
    {
        $products = $this->getProductRandom();
        return view('client.pages.product-fashion', ['products' => $products]);
    }

    // trả product cho page product fashion
    public function viewProductSale()
    {
        $products = $this->getProductRandom();
        return view('client.pages.product-sale', ['products' => $products]);
    }

    // trả product cho page Product New
    public function viewProductNew()
    {
        $products = $this->getProductRandom();
        return view('client.pages.product-new', ['products' => $products]);
    }
}
