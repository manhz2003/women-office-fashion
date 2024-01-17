@extends('client.layouts.master')

@section('title', 'Sản phẩm giảm giá tết')

@section('main')
    <h1 class="product-title">SẢN PHẨM GIẢM GIÁ</h1>
    @include('client.components.product', ['products' => $products])
@endsection
