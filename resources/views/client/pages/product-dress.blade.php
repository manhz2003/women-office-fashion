@extends('client.layouts.master')

@section('title', 'Váy đầm')

@section('main')
    <div class="product-app">
        <div class="product-heading">
            <div class="product-heading-title">Sản phẩm váy đầm</div>
            @include('client.components.sorting')
        </div>

        @include('client.components.product', ['products' => $products])
    </div>
@endsection
