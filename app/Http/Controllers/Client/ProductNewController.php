<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;

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
    public function getSortedProductNew($sort)
    {
        if ($sort !== 'asc' && $sort !== "desc") {
            throw new InvalidArgumentException("Invalid sort parameter must be asc or desc");
        }

        if ($sort === 'asc') {
            $orderBy = 'new_price';
        } else {
            $orderBy = 'new_price desc';
        }

        $orderBy = ($sort === 'asc') ? 'new_price' : 'new_price desc';
        $sortedProducts = DB::table('products')
            ->join('categories', 'products.categorie_id', '=', 'categories.id')
            ->where('categories.name', 'thời trang')
            ->orderByRaw($orderBy)
            ->take(15)
            ->get(['products.id', 'products.name', 'products.old_price', 'products.new_price', 'products.thumbnail']);

        return $sortedProducts;
    }

    public function sortProductNew(Request $request, $sort = 'desc')
    {
        $products = $this->getSortedProductNew($sort);

        return view('client.pages.product-new', compact('products', 'sort'));
    }
}
