<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActiveAccountController extends Controller
{
    // Xử lý logic kích hoạt tài khoản
    public function activateAccount($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        if ($user) {
            if ($user->status == 0) {
                DB::table('users')->where('id', $id)->update(['status' => 1]);
                return view('auth.login');
            } else {
                return dd('Tài khoản kích hoạt thất bại');
            }
        }
        // Đoạn mã xử lý nếu không tìm thấy người dùng
        return dd('emails.activation_error');
    }
}
