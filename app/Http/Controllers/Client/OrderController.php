<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function view(){
        // Lấy giá trị của cookie
        $cookieValue = request()->cookie('user_info');
        // Kiểm tra xem cookie có tồn tại không
        if ($cookieValue) {
            // Giải mã chuỗi JSON thành mảng
            $userInfo = json_decode($cookieValue, true);

            // Sử dụng thông tin từ cookie
            $user_id = $userInfo['id'];
            $fullname = $userInfo['fullname'];
            $sdt = $userInfo['sdt'];

            $informations = DB::table('payments')
                            ->where('user_id', trim($user_id))
                            ->orderBy('created_at', 'desc')
                            ->get(); 
            if(empty(trim($user_id)) || empty(trim($fullname)) || empty(trim($sdt))){
                dd('Không tìm thấy thông tin người dùng hoặc có lỗi trong hệ thống.');
            }else{
                if($informations->isNotEmpty()){
                    // Lấy thông tin người dùng gần thời gian hiện tại nhất
                    $user = $informations->first();

                    $id = $user->id;
                    $user_address = $user->user_address;
                    $total = $user->total;
                    dd($id,$fullname,$sdt,$user_address, $total);
                    return view('client/pages/order-success');
                }else{
                    dd('Không tìm thấy thông tin người dùng hoặc có lỗi trong hệ thống.');
                }
            }
        }else {
            dd('Không tìm thấy thông tin người dùng hoặc có lỗi trong hệ thống.');
        }
        //return Redirect::to('order-success');
    }
}
