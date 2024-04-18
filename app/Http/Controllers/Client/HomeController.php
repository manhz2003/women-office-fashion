<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;

class HomeController extends Controller
{
    public function getProductRandom($limit)
    {
        if (!is_int($limit) || is_null($limit) || $limit === '') {
            throw new InvalidArgumentException("Limit must be a non-empty integer");
        }

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
