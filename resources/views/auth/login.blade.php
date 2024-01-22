@extends('client.layouts.master')

@section('title', 'Đăng nhập')

@section('main')
    <div class="account-main">
        <div class="form-account">
            <form action="/login" onsubmit="return validateForm()" method="POST">
                @csrf
                <h1 class="form-heading"><b>Đăng nhập</b></h1>
                <div class="form-title">
                    <p>Trở thành thành viên của Gumac <a href="{{ route('register') }}">Đăng ký ngay</a></p>
                </div>
                <div class="form-item">
                    <div><label for="email-sdt-input">Email/Số điện thoại</label></div>
                    <div>
                        <input name="email_or_phone" id="email-sdt-input" type="text">
                        <div id="email-sdt-error" class="form-error"></div>
                    </div>
                </div>
                <div class="form-item password-item">
                    <div><label for="password-input">Mật khẩu</label></div>
                    <div>
                        <input name="password" type="password" id="password-input">
                        <div id="password-error" class="form-error"></div>
                    </div>
                    <img class="password-icon" src="{{ asset('images/icon_image/icon-view-password.svg') }}" alt="">
                </div>
                <div class="form-item form-item-flex">
                    <button class="form-btn-login" type="submit"><b>ĐĂNG NHẬP</b></button>
                    <a href="{{ route('auth.passwords.forgot') }}">Quên mật khẩu</a>
                </div>

                <div class="form-item select-or">
                    <span>Hoặc</span>
                </div>

                <div class="form-item form-item-flex">
                    <a href="{{ route('auth-fb') }}">
                        <div class="btn-fb">
                            <img src="{{ asset('images/icon_image/facebook.png') }}" alt="">
                            <div>Facebook</div>
                        </div>
                    </a>

                    <a href="{{ route('auth-google') }}">
                        <div class="btn-google">
                            <img src="{{ asset('images/icon_image/search.png') }}" alt="">
                            <div>Google</div>
                        </div>
                    </a>
                </div>
            </form>

        </div>
        <script src="{{ asset('auth/js/login.js') }}"></script>
    </div>
@endsection
