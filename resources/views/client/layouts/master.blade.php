<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/icon_image/icon-head.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>

    {{-- reset css --}}
    <link rel="stylesheet" href="{{ asset('vendor/reset.css') }}">

    {{-- css layout master --}}
    <link rel="stylesheet" href="{{ asset('client/css/components/master.css') }}">

    {{-- css header --}}
    <link rel="stylesheet" href="{{ asset('client/css/components/header.css') }}">

    {{-- css footer --}}
    <link rel="stylesheet" href="{{ asset('client/css/components/footer.css') }}">

    {{-- css banner --}}
    <link rel="stylesheet" href="{{ asset('client/css/components/banner.css') }}">

    {{-- css product --}}
    <link rel="stylesheet" href="{{ asset('client/css/components/product.css') }}">

    {{-- css sorting --}}
    <link rel="stylesheet" href="{{ asset('client/css/components/sorting.css') }}">

    {{-- css product sidebar --}}
    <link rel="stylesheet" href="{{ asset('client/css/components/sidebar.css') }}">

    {{-- css slide loại product --}}
    <link rel="stylesheet" href="{{ asset('client/css/components/slide-product-type.css') }}">

    {{-- css home pages --}}
    <link rel="stylesheet" href="{{ asset('client/css/pages/home.css') }}">

    {{-- css collection pages --}}
    <link rel="stylesheet" href="{{ asset('client/css/pages/collection.css') }}">

    {{-- css đăng ký, đăng nhập pages --}}
    <link rel="stylesheet" href="{{ asset('client/css/pages/account.css') }}">
</head>

<body>
    @include('client.components.header-nav')
    @yield('main')
    @include('client.components.footer')
</body>

</html>
