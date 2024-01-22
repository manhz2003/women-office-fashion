<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    // lấy ngẫu nhiên sản phẩm từ bảng product
    public function getProductRandom($limit)
    {
        $products = DB::table('products')
            ->inRandomOrder()
            ->distinct()
            ->select('id', 'name', 'old_price', 'new_price', 'thumbnail')
            ->limit($limit)
            ->get();
        return $products;
    }

    // trả 10 product random cho trang chủ
    public function productRandomHome()
    {
        $products = $this->getProductRandom(10);
        return view('client.pages.home', compact('products'));
    }

    // trả 10 product random cho trang sale-off
    public function productRandomsaleOff()
    {
        $products = $this->getProductRandom(10);
        return view('client.pages.sale-off', ['products' => $products]);
    }

    // trả 15 product random cho trang sản phẩm mới
    public function productRandomNew()
    {
        $products = $this->getProductRandom(15);
        return view('client.pages.product-new', ['products' => $products]);
    }

    // trả 15 product random cho trang sản phẩm giảm giá
    public function productRandomSale()
    {
        $products = $this->getProductRandom(15);
        return view('client.pages.product-sale', ['products' => $products]);
    }

    // trả 5 product random cho trang chi tiết sản phẩm
    public function productRandomDetail()
    {
        $products = $this->getProductRandom(5);
        return view('client.pages.product-detail', ['products' => $products]);
    }

    // trả 5 product random cho trang giỏ hàng
    public function productRandomCart()
    {
        $products = $this->getProductRandom(5);
        return view('client.pages.cart', ['products' => $products]);
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

    // trả 15 váy đầm đã sắp xếp
    public function sortProductDress(Request $request, $sort = 'desc')
    {
        $products = $this->getSortedProductDress($sort);

        return view('client.pages.product-dress', compact('products', 'sort'));
    }

    // trả 15 sản phẩm fashion ngẫu nhiên từ bảng product
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

    // sắp xếp 15 sản phẩm ngẫu nhiên
    private function getSortedProductRandom($sort, $take)
    {
        $orderBy = ($sort === 'asc') ? 'new_price' : 'new_price desc';

        $products = DB::table('products')
            ->orderByRaw($orderBy)
            ->inRandomOrder()
            ->take($take)
            ->get(['products.id', 'products.name', 'products.old_price', 'products.new_price', 'products.thumbnail']);

        return $products;
    }

    // lấy 15 sản phẩm ngẫu nhiên đã sắp xếp cho trang sản phẩm mới
    public function sortProductNew(Request $request, $sort = 'desc')
    {
        $products = $this->getSortedProductRandom($sort, 15);

        return view('client.pages.product-new', compact('products', 'sort'));
    }

    // lấy 15 sản phẩm ngẫu nhiên đã sắp xếp cho trang sản phẩm giảm giá
    public function sortProductSale(Request $request, $sort = 'desc')
    {
        $products = $this->getSortedProductRandom($sort, 15);

        return view('client.pages.product-sale', compact('products', 'sort'));
    }
}
