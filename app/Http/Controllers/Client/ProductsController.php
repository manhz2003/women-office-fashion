<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    // lấy ngẫu nhiên 10 sản phẩm từ bảng product cho trang chủ
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

    // lấy ngẫu nhiên 10 váy đầm từ bảng product cho trang váy đầm
    public function productRandomDress()
    {
        $products = DB::table('products')
            ->join('categories', 'products.categorie_id', '=', 'categories.id')
            ->where('categories.name', 'váy đầm')
            ->distinct()
            ->inRandomOrder()
            ->take(15)
            ->get(['products.id', 'products.name', 'products.old_price', 'products.new_price', 'products.thumbnail']);

        return view('client.pages.product-dress', compact('products'));
    }

    // sắp xếp 15 váy đầm từ bảng product cho trang váy đầm
    private function getSortedProductDress($sort)
    {
        $orderBy = ($sort === 'asc') ? 'new_price' : 'new_price desc';
        $sortedProducts = DB::table('products')
            ->join('categories', 'products.categorie_id', '=', 'categories.id')
            ->where('categories.name', 'váy đầm')
            ->orderByRaw($orderBy)
            ->take(15)
            ->get(['products.id', 'products.name', 'products.old_price', 'products.new_price', 'products.thumbnail']);

        return $sortedProducts;
    }

    // lấy ra 15 váy đầm đã sắp xếp
    public function sortProductDress(Request $request, $sort = 'desc')
    {
        $products = $this->getSortedProductDress($sort);

        return view('client.pages.product-dress', compact('products', 'sort'));
    }

    // lấy 15 sản phẩm fashion ngẫu nhiên từ bảng product
    public function productRandomFashion()
    {
        $products = DB::table('products')
            ->join('categories', 'products.categorie_id', '=', 'categories.id')
            ->where('categories.name', 'thời trang')
            ->distinct()
            ->inRandomOrder()
            ->take(15)
            ->get(['products.id', 'products.name', 'products.old_price', 'products.new_price', 'products.thumbnail']);

        return view('client.pages.product-fashion', compact('products'));
    }

    // sắp xếp 15 sản phẩm fashion
    private function getSortedProductFashion($sort)
    {
        $orderBy = ($sort === 'asc') ? 'new_price' : 'new_price desc';
        $sortedProducts = DB::table('products')
            ->join('categories', 'products.categorie_id', '=', 'categories.id')
            ->where('categories.name', 'thời trang')
            ->orderByRaw($orderBy)
            ->take(15)
            ->get(['products.id', 'products.name', 'products.old_price', 'products.new_price', 'products.thumbnail']);

        return $sortedProducts;
    }

    // lấy ra 15 sản phẩm fashion đã sắp xếp
    public function sortProductFashion(Request $request, $sort = 'desc')
    {
        $products = $this->getSortedProductFashion($sort);

        return view('client.pages.product-dress', compact('products', 'sort'));
    }


    // lấy ngẫu nhiên 15 sản phẩm từ bảng product
    public function getProductRandom()
    {
        $products = DB::table('products')
            ->inRandomOrder()
            ->distinct()
            ->select('id', 'name', 'old_price', 'new_price', 'thumbnail')
            ->limit(15)
            ->get();
        return $products;
    }

    // lấy ngẫu nhiên 15 sản phẩm cho trang sản phẩm mới
    public function productRandomNew()
    {
        $products = $this->getProductRandom();
        return view('client.pages.product-new', ['products' => $products]);
    }

    // lấy ngẫu nhiên 15 sản phẩm cho trang sản phẩm giảm giá
    public function productRandomSale()
    {
        $products = $this->getProductRandom();
        return view('client.pages.product-sale', ['products' => $products]);
    }

    // sắp xếp 15 sản phẩm ngẫu nhiên
    private function getSortedProductRandom($sort)
    {
        $orderBy = ($sort === 'asc') ? 'new_price' : 'new_price desc';

        $products = DB::table('products')
            ->orderByRaw($orderBy)
            ->inRandomOrder()
            ->take(15)
            ->get(['products.id', 'products.name', 'products.old_price', 'products.new_price', 'products.thumbnail']);

        return $products;
    }

    // lấy 15 sản phẩm ngẫu nhiên đã sắp xếp cho trang sản phẩm mới
    public function sortProductNew(Request $request, $sort = 'desc')
    {
        $products = $this->getSortedProductRandom($sort);

        return view('client.pages.product-new', compact('products', 'sort'));
    }

    // lấy 15 sản phẩm ngẫu nhiên đã sắp xếp cho trang sản phẩm giảm giá
    public function sortProductSale(Request $request, $sort = 'desc')
    {
        $products = $this->getSortedProductRandom($sort);

        return view('client.pages.product-sale', compact('products', 'sort'));
    }
}
