@extends('client.layouts.master')

@section('title', 'Sản phẩm mới')

@section('main')
    <div class="product-app">
        <div class="product-heading">
            <div class="product-heading-title">Sản phẩm mới</div>
            @include('client.components.sorting')
        </div>

        @include('client.components.product')
    </div>
@endsection
