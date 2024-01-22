<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class ForgotPasswordController extends Controller
{

    public function viewForgotPassword()
    {
        return view('auth.passwords.forgot');
    }

    // quên mật khẩu
    public function forgotPassword(Request $request)
    {
        $email = $request->input('email');
        $user = DB::table('users')->where('email', $email)->first();
        if ($user) {
            if ($user->status === 1) {
                $currentPassword = $user->password;
                try {
                    Mail::send(
                        'auth.email-forgot',
                        ['currentPassword' => $currentPassword],
                        function ($message) use ($email) {
                            $message->subject('Women Office Fashion - Lấy lại mật khẩu');
                            $message->to($email);
                        }
                    );
                    return redirect()->back()->with(dd('success', 'Mật khẩu của bạn đã được gửi đến địa chỉ email.'));
                } catch (Exception $e) {
                    return redirect()->back()->with(dd('error', 'Có lỗi xảy ra khi gửi email. Vui lòng thử lại sau.'));
                }
            } else {
                return redirect()->back()->with(dd('Email của bạn chưa được kích hoạt!'));
            }
        } else {
            return redirect()->back()->with(dd('Email không tồn tại trong hệ thống.'));
        }
    }
}
