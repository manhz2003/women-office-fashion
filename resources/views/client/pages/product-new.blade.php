@extends('client.layouts.master')

@section('title', 'Sản phẩm mới')

@section('main')
    <div class="product-app">
        <div class="product-sort">
            @include('client.components.sorting')
        </div>

        @include('client.components.product')
    </div>
@endsection
