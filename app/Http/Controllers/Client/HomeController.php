<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
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

    public function viewHome()
    {
        $products = $this->getProductRandom(10);
        return view('client.pages.home', compact('products'));
    }
}
