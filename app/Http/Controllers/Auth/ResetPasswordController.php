<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker\Extension\Extension;
use Illuminate\Support\Facades\DB;

class ResetPasswordController extends Controller
{
    public function view()
    {
        return view('auth.passwords.reset');
    }
    public function checkUser(Request $request)
    {
        $email_or_phone = $request->input('email_or_phone');
        $password = $request->input('password');
        $new_password = $request->input('new_password');
        $confirm_new_password = $request->input('confirm_new_password');

        if (empty($email_or_phone) || empty($password) || empty($new_password) || empty($confirm_new_password)) {
            dd('Bạn chưa điền đủ dữ liệu!');
        } else {
            $user = DB::table('users')
                ->where('email', trim($email_or_phone))
                ->orWhere('sdt', trim($email_or_phone))
                ->first();

            if ($user) {
                if ($password === $user->password) {
                    if (trim($new_password) === trim($confirm_new_password)) {
                        DB::table('users')
                            ->where('id', $user->id)
                            ->update(['password' => $new_password]);
                        return redirect()->route('login')->with('success', 'đổi mật khẩu thành công');
                    } else {
                        dd('Mật khẩu nhập lại không khớp với mật khẩu mới!');
                    }
                } else {
                    dd('Mật khẩu cũ không đúng!');
                }
            } else {
                dd('Tài khoản không tồn tại trong hệ thống!');
            }
        }
    }
}
