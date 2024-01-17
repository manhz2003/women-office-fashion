@extends('client.layouts.master')

@section('title', 'Thời trang')

@section('main')
    {{-- <div style="margin-top: 40px; margin-left: 60px;" class="product-title">THỜI TRANG NỮ</div> --}}
    @include('client.components.product', ['products' => $products])
@endsection
