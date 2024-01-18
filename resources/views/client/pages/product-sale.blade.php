@extends('client.layouts.master')
@section('title', 'Sản phẩm giảm giá tết')

@section('main')
    <div class="product-app">
        <div class="product-heading">
            <div class="product-heading-title">Sản phẩm giảm giá</div>
            @include('client.components.sorting')
        </div>
        @include('client.components.product', ['products' => $products])
    </div>
@endsection
