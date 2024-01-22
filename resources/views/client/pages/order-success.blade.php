@extends('client.layouts.master')

@section('title', 'Đặt hàng thành công')

@section('main')
    <div class="order-app">
        <div class="order-content">
            <h1>
                <b>Đặt hàng thành công!</b>
            </h1>
            <p class="title">
                Chị yêu ơi, đơn hàng của chị đã được xác nhận! Nhà GU vẫn còn nhiều thiết kế rất hợp với chị, mời chị xem
                thêm nhé!
            </p>

            <p class="info">
                Thông tin đơn hàng
            </p>
            <div class="order-separation"></div>
            <ul class="info-content">
                <li>
                    <ul class="info-content-title">
                        <li>Mã đặt hàng:</li>
                        <li>Người nhận:</li>
                        <li>Số điện thoại:</li>
                        <li class="li-child">Địa chỉ:</li>
                        <li>Tổng tiền:</li>
                        <li>Thanh toán:</li>
                    </ul>
                </li>
                <li>
                    <ul class="info-content-order">
                        <li>GM00030791</li>
                        <li>123</li>
                        <li>0981231231</li>
                        <li class="li-child">hoàng long, tản lĩnh, huyện Ba Vì, Hà Nội </li>
                        <li>357.500 đ</li>
                        <li>COD (Thanh toán khi nhận hàng)</li>
                    </ul>
                </li>

            </ul>
            <a href="{{ route('/') }}"><button>TIẾP TỤC MUA SẮM</button></a>

            <div class="order-separation-position"></div>
        </div>
        <div class="order-img">
            <img src="{{ asset('images/icon_image/order.jpg') }}" alt="">
        </div>
    </div>
@endsection
