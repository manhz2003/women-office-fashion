@extends('client.layouts.master')

@section('title', 'Thời trang')

@section('main')
    <div class="product-app">
        <div class="product-heading">
            <div class="product-heading-title">Sản phẩm thời trang</div>
            @include('client.components.sorting')
        </div>
        @include('client.components.product', ['products' => $products])
    </div>
@endsection
