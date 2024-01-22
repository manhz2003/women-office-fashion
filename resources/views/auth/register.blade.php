@extends('client.layouts.master')

@section('title', 'Đăng ký')

@section('main')
    <div class="account-main">
        <div class="form-account">
            <form action="/register" onsubmit="return validateFormRegister()" method="POST">
                @csrf
                <h1 class="form-heading"><b>Đăng ký</b></h1>

                <div class="form-item">
                    <div>
                        <input placeholder="Họ và tên" name="fullname" id="fullname-input" type="text">
                        <div id="fullname-error" class="form-error"></div>
                    </div>
                </div>

                <div class="form-item">
                    <div>
                        <input placeholder="Email" name="email" id="email-input" type="text" required>
                        <div id="email-error" class="form-error"></div>
                    </div>
                </div>

                <div class="form-item">
                    <div>
                        <input placeholder="Số điện thoại" name="sdt" id="sdt-input" type="text">
                        <div id="sdt-error" class="form-error"></div>
                    </div>
                </div>

                <div class="form-item password-item">
                    <div>
                        <input placeholder="Mật khẩu" name="password" type="password" id="password-input">
                        <div id="password-error" class="form-error"></div>
                    </div>
                    <img class="password-icon-r" src="{{ asset('images/icon_image/icon-view-password.svg') }}"
                        alt="" id="password-icon">
                </div>

                <div class="form-item password-item">
                    <div>
                        <input placeholder="Nhập lại Mật khẩu" name="last_pass" type="password" id="confirm-password-input">
                        <div id="confirm-password-error" class="form-error"></div>
                    </div>
                    <img class="password-icon-r" src="{{ asset('images/icon_image/icon-view-password.svg') }}"
                        alt="" id="confirm-password-icon">
                </div>

                <div class="form-item form-item-flex">
                    <button class="form-btn-login" type="submit"><b>ĐĂNG KÝ</b></button>
                </div>
            </form>
        </div>
        <script src="{{ asset('auth/js/register.js') }}"></script>
    </div>
@endsection
