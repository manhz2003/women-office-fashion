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
                                <span class="voucher-coppy"data-code="{{ $saleOffs[1]->code }}">COPPY MÃ</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="voucher-code">
                    <img src="{{ asset('images/sale_off/voucher-05.png') }}" alt="">
                    <div class="voucher-code-content">
                        <ul>
                            <li>
                                <b>VOUCHER 50K</b>
                            </li>
                            <li>
                                Áp dụng cho đơn hàng từ 299K
                            </li>
                            <li>
                                <span class="voucher-coppy"data-code="{{ $saleOffs[0]->code }}">COPPY MÃ</span>
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
        </div>

        {{-- @php
            $codes = $saleOffs->pluck('code')->toArray();
        @endphp

        @foreach ($codes as $index => $code)
            @if ($index === 0)
                <p>Vị trí 1: {{ $code }}</p>
            @elseif ($index === 1)
                <p>Vị trí 2: {{ $code }}</p>
            @endif
        @endforeach --}}


        @include('client.components.product')
        <script src="{{ asset('client/js/sale-off.js') }}"></script>
    </div>
@endsection
