<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;

class ProductDetailController extends Controller
{

    // hiển thị chi tiết sản phẩm
    public function viewProductDetail($id)
    {
        $productImages = $this->getProductImages($id);
        $products = $this->productRandomDetail();
        $product = $this->getProductDetail($id);
        return view('client.pages.product-detail', compact('product', 'products', 'productImages'));
    }

    public function getProductDetail($id)
    {
        if (is_null($id) || empty($id)) {
            throw new InvalidArgumentException("id rỗng hoặc null");
        }

        $product = DB::table('products')->where('id', $id)->first();
        if ($product) {
            return $product;
        } else {
            return null;
        }
    }

    // lấy tất cả ảnh
    public function getProductImages($id)
    {
        if (!is_string($id) || is_null($id) || $id === '') {
            throw new InvalidArgumentException("id must be a non-empty string");
        }

        $images = DB::table('images')->where('product_id', $id)->get();
        if ($images) {
            return $images;
        } else {
            return null;
        }
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
