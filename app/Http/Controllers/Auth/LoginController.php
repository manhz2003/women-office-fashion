<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker\Extension\Extension;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function viewLogin()
    {
        return view('auth.Login');
    }
    public function checkUser(Request $request)
    {
        try {
            $email_or_phone = $request->input('email_or_phone');
            $users = DB::table('users')
                ->where('email', '=', $email_or_phone)
                ->orWhere('sdt', '=', $email_or_phone)
                ->get();

            if ($users->count() > 0) {
                $password = $request->input('password');
                $foundUser = null;
                foreach ($users as $user) {
                    if (trim($user->password) === trim($password)) {
                        $foundUser = $user;
                        break;
                    }
                }
                if ($foundUser !== null) {
                    $status = $foundUser->status;
                    if ($status === 0) {
                        dd('Bạn chưa kích hoạt tài khoản');
                    } else {
                        return Redirect::to('/');
                    }
                } else {
                    dd('Mật khẩu không đúng');
                }
            } else {
                dd('The account does not exist in the system!');
            }
        } catch (Extension $ex) {
            dd($ex);
        }
    }

    public function handleFacebookCallback(Request $request)
    {

        $user = Socialite::driver('facebook')->user();
        $email = $user->getEmail();
        $name = $user->getName();

        // Kiểm tra dữ liệu có tồn tại trong cơ sở dữ liệu
        $existingUser = DB::table('users')->where('email', $email)->first();

        if (!$existingUser) {
            // Thêm mới người dùng
            $userId = DB::table('users')->insertGetId([
                'email' => $email,
                'last_name' => $name,
                // 'password' => Hash::make(rand()) // chưa dùng đến trong cơ sở dữ liệu này
            ]);
        } else {
            // Lấy ID của người dùng đã tồn tại
            $userId = $existingUser->id;
        }

        Auth::loginUsingId($userId);
        return redirect()->route('Home')->with('ThongBao', 'Đăng nhập thành công!');
        // if ($success) {
        //     return redirect()->route('sinhvien.index')->with('ThongBao', 'Đăng nhập thành công!');
        // } else {
        //     return redirect()->route('sinhvien.index')->with('ThongBao', 'Đăng nhập thất bại!');
        // }
    }

    public function handleGoogleCallback(Request $request)
    {

        $user = Socialite::driver('google')->user();
        $email = $user->getEmail();
        $name = $user->getName();

        // Kiểm tra dữ liệu có tồn tại trong cơ sở dữ liệu
        $existingUser = DB::table('users')->where('email', $email)->first();

        if (!$existingUser) {
            // Thêm mới người dùng
            $userId = DB::table('users')->insertGetId([
                'email' => $email,
                'last_name' => $name,
                // 'password' => Hash::make(rand()) // chưa dùng đến trong cơ sở dữ liệu này
            ]);
        } else {
            // Lấy ID của người dùng đã tồn tại
            $userId = $existingUser->id;
        }

        Auth::loginUsingId($userId);
        return redirect()->route('Home')->with('ThongBao', 'Đăng nhập thành công!');
        // if ($success) {
        //     return redirect()->route('sinhvien.index')->with('ThongBao', 'Đăng nhập thành công!');
        // } else {
        //     return redirect()->route('sinhvien.index')->with('ThongBao', 'Đăng nhập thất bại!');
        // }
    }
}
