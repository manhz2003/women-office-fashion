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

                //dd($foundUser);
                if ($foundUser !== null) {
                    $status = $foundUser->status;
                    if ($status === 0) {
                        dd('Bạn chưa kích hoạt tài khoản');
                    }else {
                        $cookieData = [
                            'id' => $foundUser->id,
                            'fullname' => $foundUser->fullname,
                            'sdt' => $foundUser->sdt,
                        ];
                
                        // Kiểm tra xem dữ liệu có tồn tại và không rỗng
                        if (!empty($cookieData['id']) && !empty($cookieData['fullname']) && !empty($cookieData['sdt'])) {
                            // Chuyển đổi mảng thành chuỗi JSON
                            $cookieValue = json_encode($cookieData, JSON_UNESCAPED_UNICODE);
                            //dd($cookieValue);
                            // Kiểm tra xem mã hóa có thành công hay không
                            if ($cookieValue !== false) {
                                // Đặt cookie và chuyển hướng với id xuất hiện trong URL
                                return Redirect::to('/')
                                    ->withCookie('user_info', $cookieValue, (86400 * 2), "/"); // lưu cookie trong 2 ngày
                            } else {
                                // Xử lý lỗi khi mã hóa JSON
                                dd('Lỗi mã hóa JSON');
                            }
                        } else {
                            // Xử lý khi dữ liệu không hợp lệ
                            dd('Xử lý khi dữ liệu không hợp lệ');
                        }
                    }
                }else {
                    dd('Mật khẩu không đúng');
                }
            } else {
                dd('Tài khoản không tồn tại trong hệ thống!');
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
                'fullname' => $name,
                'sdt' => '',
                'password' => '',
                'role_id' => '1'
                // 'password' => Hash::make(rand()) // chưa dùng đến trong cơ sở dữ liệu này
            ]);
            Auth::loginUsingId($userId);
            return redirect()->route('/')->with('ThongBao', 'Đăng nhập thành công!');
        }else {
            // Lấy ID của người dùng đã tồn tại
            $userId = $existingUser->id;
            Auth::loginUsingId($userId);
            return redirect()->route('/')->with('ThongBao', 'Đăng nhập thành công!');
        }
    }

    public function handleGoogleCallback(Request $request)
    {

        $user = Socialite::driver('google')->user();
        //dd($user);
        $email = $user->getEmail();
        $name = $user->getName();

        // Kiểm tra dữ liệu có tồn tại trong cơ sở dữ liệu
        $existingUser = DB::table('users')->where('email', $email)->first();
        if (!$existingUser) {
            // Thêm mới người dùng
            $userId = DB::table('users')->insertGetId([
                'email' => $email,
                'fullname' => $name,
                'sdt' => '',
                'password' => '',
                'role_id' => '1'
                // 'password' => Hash::make(rand()) // chưa dùng đến trong cơ sở dữ liệu này
            ]);
            Auth::loginUsingId($userId);
            return redirect()->route('/')->with('ThongBao', 'Đăng nhập thành công!');
        } else {
            // Lấy ID của người dùng đã tồn tại
            $userId = $existingUser->id;
            Auth::loginUsingId($userId);
            return redirect()->route('/')->with('ThongBao', 'Đăng nhập thành công!');
        }
    }
}
