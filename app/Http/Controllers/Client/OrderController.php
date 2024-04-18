<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function viewOrderSuccess()
    {
        $orderInfo = $this->viewOrder();
        return view('client/pages/order-success', ['orderInfo' => $orderInfo]);
    }

    // public function viewOrder()
    // {
    //     $cookieValue = request()->cookie('user_info');
    //     $orderInfo = [];

    //     if ($cookieValue) {
    //         $userInfo = json_decode($cookieValue, true);
    //         $user_id = $userInfo['id'];
    //         $fullname = $userInfo['fullname'];
    //         $sdt = $userInfo['sdt'];

    //         $latestPayment = DB::table('payments')
    //             ->where('user_id', $user_id)
    //             ->orderByDesc('created_at')
    //             ->first();

    //         if ($latestPayment) {
    //             $orderInfo = [
    //                 'id' => $latestPayment->id,
    //                 'user_address' => $latestPayment->user_address,
    //                 'method_pay' => $latestPayment->method_pay,
    //                 'total' => $latestPayment->total,
    //                 'user_id' => $user_id,
    //                 'fullname' => $fullname,
    //                 'sdt' => $sdt
    //             ];
    //         }
    //     }
    //     return $orderInfo;
    // }

    public function viewOrder(){
    $cookieValue = request()->cookie('user_info');
    $orderInfo = [];

    if (!$cookieValue) {
        throw new \Exception('User info cookie is missing.');
    }

    $userInfo = json_decode($cookieValue, true);
    $user_id = $userInfo['id'];
    $fullname = $userInfo['fullname'];
    $sdt = $userInfo['sdt'];

    $latestPayment = DB::table('payments')
        ->where('user_id', $user_id)
        ->orderByDesc('created_at')
        ->first();

    if ($latestPayment) {
        $orderInfo = [
            'id' => $latestPayment->id,
            'user_address' => $latestPayment->user_address,
            'method_pay' => $latestPayment->method_pay,
            'total' => $latestPayment->total,
            'user_id' => $user_id,
            'fullname' => $fullname,
            'sdt' => $sdt
        ];
    }
    return $orderInfo;
}
}
