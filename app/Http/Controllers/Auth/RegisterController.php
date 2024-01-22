<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function viewRegister()
    {
        return view('auth/register');
    }

    // đăng ký tài khoản
    public function createAccout(Request $request)
    {
        $data = $request->except(['_token']);
        $first_pass = $request->input('password');
        $last_pass = $request->input('last_pass');
        if ($first_pass !== $last_pass) {
            dd('Mật khẩu mới và mật khẩu xác nhận không khớp!');
        } else {
            $email = $request->input('email');
            $name = $request->input('fullname');
            $data['role_id'] = 2;
            $data['status'] = 0;
            unset($data['last_pass']);
            $user_id = DB::table('users')->insertGetId($data);
            if ($user_id) {
                $activationLink = url('/activate-account/' . $user_id);
                Mail::send(
                    'auth.email-activate',
                    [
                        'user_id' => $user_id,
                        'activationLink' => $activationLink
                    ],
                    function ($message) use ($email, $name) {
                        $message->subject('Women Office Fashion - Xác nhận tài khoản!');
                        $message->to($email, $name);
                    }
                );
                return view('auth.register');
            } else {
                dd('Lỗi kết nối cơ sở dữ liệu!');
            }
        }
    }
}
