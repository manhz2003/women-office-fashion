<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function viewCart()
    {
        $products = $this->getProductRandom(5);
        $showCart = $this->showCart();
        return view('client.pages.cart', ['products' => $products, 'showCart' => $showCart]);
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

    // Trong controller của trang shopping cart
    public function showCart()
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

    public function deleteCartItem($cartItemId)
    {
        DB::table('cart_items')->where('id', $cartItemId)->delete();
        return redirect()->route('cart')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
    }

    public function processCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('product_quantity');
        $size = $request->input('product_size');
        $color = $request->input('product_color');
        $thumbnail = $request->input('product_image');

        $cookieValue = request()->cookie('user_info');

        if (!$cookieValue) {
            return redirect()->route('login');
        }

        $userInfo = json_decode($cookieValue, true);
        $user_id = $userInfo['id'];

        $shoppingCart = DB::table('shopping_carts')
            ->where('user_id', $user_id)
            ->first();

        if (!$shoppingCart) {
            $shoppingCartId = DB::table('shopping_carts')
                ->insertGetId([
                    'user_id' => $user_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
        } else {
            $shoppingCartId = $shoppingCart->id;
        }

        $existingCartItem = DB::table('cart_items')
            ->where('shopping_cart_id', $shoppingCartId)
            ->where('product_id', $productId)
            ->where('size', $size)
            ->where('color', $color)
            ->first();

        if ($existingCartItem) {
            DB::table('cart_items')
                ->where('id', $existingCartItem->id)
                ->update(['quantity' => $existingCartItem->quantity + $quantity]);
        } else {
            DB::table('cart_items')->insert([
                'product_id' => $productId,
                'quantity' => $quantity,
                'color' => $color,
                'size' => $size,
                'thumbnail' => $thumbnail,
                'shopping_cart_id' => $shoppingCartId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $userInfo['cart_updated_at'] = now();
            $cookieValue = json_encode($userInfo);
            return redirect()
                ->route('cart.process', ['id' => $productId])
                ->withCookie(cookie()->forever('user_info', $cookieValue));
        }
        return redirect()->route('cart.process', ['id' => $productId])->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
    }
}
