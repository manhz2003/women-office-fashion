<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductNewController extends Controller
{
    public function viewProductNew()
    {
        $products = $this->getProductRandom(15);
        return view('client.pages.product-new', ['products' => $products]);
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
    public function getSortedProductRandom($sort, $take)
    {
        $orderBy = ($sort === 'asc') ? 'new_price' : 'new_price desc';

        $products = DB::table('products')
            ->orderByRaw($orderBy)
            ->inRandomOrder()
            ->take($take)
            ->get(['products.id', 'products.name', 'products.old_price', 'products.new_price', 'products.thumbnail']);

        return $products;
    }

    public function sortProductNew(Request $request, $sort = 'desc')
    {
        $products = $this->getSortedProductRandom($sort, 15);

        return view('client.pages.product-new', compact('products', 'sort'));
    }
}
