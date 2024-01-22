<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleOffController extends Controller
{
    public function productSaleOffCode()
    {
        $saleOffs = DB::table('sale_offs')->limit(2)->get();
        return view('client.pages.sale-off', compact('saleOffs'));
    }
}
