<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    public function viewProductDetail($id)
    {
        $productImages = $this->getProductImages($id);
        $products = $this->productRandomDetail();
        $product = $this->showDetail($id);
        return view('client.pages.product-detail', compact('product', 'products', 'productImages'));
    }

    public function showDetail($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        if ($product) {
            return $product;
        } else {
            abort(404);
        }
    }

    // lấy tất cả ảnh
    public function getProductImages($id)
    {
        $images = DB::table('images')
            ->where('product_id', $id)
            ->get();

        return $images;
    }

    public function productRandomDetail()
    {
        $products = $this->getProductRandom(5);
        return $products;
    }

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
}
