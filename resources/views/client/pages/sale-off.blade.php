@extends('client.layouts.master')

@section('title', 'Giảm giá')

@section('main')
    <div class="sale-app">
        <div class="sale-banner">
            <img src="{{ asset('images/sale_off/banner-sale.jpg') }}" alt="">
        </div>

        <div class="sale-voucher">
            <div class="sale-voucher-code">
                <div class="voucher-code">
                    <img src="{{ asset('images/sale_off/voucher-04.png') }}" alt="">
                    <div class="voucher-code-content">
                        <ul>
                            <li>
                                <b>VOUCHER 100K</b>
                            </li>
                            <li>
                                Áp dụng cho đơn hàng từ 549K
                            </li>
                            <li>
                                <a class="voucher-coppy" href="">COPPY MÃ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="voucher-code">
                    <img src="{{ asset('images/sale_off/voucher-05.png') }}" alt="">
                    <div class="voucher-code-content">
                        <ul>
                            <li>
                                <b>VOUCHER 100K</b>
                            </li>
                            <li>
                                Áp dụng cho đơn hàng từ 549K
                            </li>
                            <li>
                                <a class="voucher-coppy" href="">COPPY MÃ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="sale-voucher-hot">
                <img src="{{ asset('images/sale_off/voucher-01.png') }}" alt="">
                <img src="{{ asset('images/sale_off/voucher-02.png') }}" alt="">
                <img src="{{ asset('images/sale_off/voucher-03.png') }}" alt="">
            </div>

            {{-- <form action="sale-code" method="POST">
                <a href="">
                    @foreach ($saleOffs as $saleOff)
                        <p>
                            {{ $saleOff->code }}
                        </p>
                    @endforeach
                </a>
            </form> --}}

        </div>

        @include('client.components.product')
    </div>
@endsection
