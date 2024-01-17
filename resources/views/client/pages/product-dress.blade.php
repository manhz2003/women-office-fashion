@extends('client.layouts.master')

@section('title', 'Váy đầm')

@section('main')
    @include('client.components.product', ['products' => $products])
@endsection
