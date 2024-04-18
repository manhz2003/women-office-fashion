<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function viewPayment()
    {
        $showCart = $this->showOrderPay();
        return view('client/pages/payment',  ['showCart' => $showCart]);
    }

    public function insertPayment(Request $request)
    {

        $cookieValue = request()->cookie('user_info');
        if ($cookieValue) {
            $userInfo = json_decode($cookieValue, true);
            $user_id = $userInfo['id'];

            $id = $this->generateRandomId();

            do {
                $id = strtoupper($this->generateRandomId());
            } while (DB::table('payments')->where('id', $id)->exists());

            DB::table('payments')->insert([
                'id' => $id,
                'user_address' => $request->input('address_detail'),
                'method_pay' => $request->input('payment_method'),
                'total' => $request->input('total_pay'),
                'user_id' => $user_id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        return redirect()->route('order-success');
    }

    private function generateRandomId()
    {
        return strtoupper(Str::random(9));
    }

    public function showOrderPay()
    {
        $cookieValue = request()->cookie('user_info');
        $userInfo = json_decode($cookieValue, true);
        if (!$cookieValue) {
            return redirect()->route('login');
        }

        $user_id = $userInfo['id'];

        $shoppingCart = DB::table('shopping_carts')
            ->where('user_id', $user_id)
            ->first();

        if ($shoppingCart) {
            $cartItems = DB::table('cart_items')
                ->join('products', 'cart_items.product_id', '=', 'products.id')
                ->select('cart_items.*', 'products.name', 'products.old_price', 'products.new_price')
                ->where('cart_items.shopping_cart_id', $shoppingCart->id)
                ->get();

            $totalPrice = 0;
            foreach ($cartItems as $cartItem) {
                $totalPrice += $cartItem->quantity * $cartItem->new_price;
            }

            $totalPayment = 0;

            foreach ($cartItems as $cartItem) {
                $totalPayment += $cartItem->quantity * $cartItem->new_price;
            }

            $showCart = ['cartItems' => $cartItems, 'totalPrice' => $totalPrice, 'totalPayment' => $totalPayment];
            return $showCart;
        }
    }
}
