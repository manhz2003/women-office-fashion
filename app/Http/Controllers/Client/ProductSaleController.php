<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;

class ProductSaleController extends Controller
{
    public function viewProductSale()
    {
        $products = $this->getProductRandom(15);
        return view('client.pages.product-sale', ['products' => $products]);
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

    // sắp xếp 15 sản phẩm ngẫu nhiên
    public function getSortedProductSale($sort)
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

    // lấy 15 sản phẩm ngẫu nhiên đã sắp xếp cho trang sản phẩm giảm giá
    public function sortProductSale(Request $request, $sort = 'desc')
    {
        $products = $this->getSortedProductSale($sort);

        return view('client.pages.product-sale', compact('products', 'sort'));
    }
}
