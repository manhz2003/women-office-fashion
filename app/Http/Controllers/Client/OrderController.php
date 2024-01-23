<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewOrderSuccess()
    {
        return view('client/pages/order-success');
    }
}
