<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleOffController extends Controller
{
    public function viewSaleOff()
    {
        $saleOffs = $this->productSaleOffCode();
        $products = $this->productRandomsaleOff();
        return view('client.pages.sale-off', compact('saleOffs', 'products'));
    }

    // trả sale off code cho trang sale-off
    public function productSaleOffCode()
    {
        $saleOffs = DB::table('sale_offs')->limit(2)->get();
        return $saleOffs;
    }

    // trả 10 product random cho trang sale-off
    public function productRandomsaleOff()
    {
        $products = DB::table('products')
            ->inRandomOrder()
            ->distinct()
            ->select('id', 'name', 'old_price', 'new_price', 'thumbnail')
            ->limit(10)
            ->get();
        return $products;
    }
}
