@extends('client.layouts.master')

@section('title', 'Trang chủ')

@section('main')
    <div class="app">
        @include('client.components.banner')

        {{-- lợi ích khách hàng --}}
        <div class="benefits">
            {{-- free ship --}}
            <div class="freeship mg-l-r">
                <ul>
                    <li>
                        <img src="{{ asset('images/icon_image/icon-01.png') }}" alt="">
                    </li>
                    <li class="benefits-title">FREESHIP</li>
                    <li class="benefits-text">Miễn Phí Vận Chuyển Cho Đơn Hàng Từ 500K</li>
                </ul>
            </div>

            {{-- tư vấn --}}
            <div class="advise mg-l-r">
                <ul>
                    <li>
                        <img src="{{ asset('images/icon_image/icon-04.png') }}" alt="">
                    </li>
                    <li class="benefits-title">TƯ VẤN LỰA CHỌN VÀ MẶC ĐỒ</li>
                    <li class="benefits-text">Đội Ngũ Tư Vấn Tận Tình</li>
                </ul>
            </div>

            {{-- tích điểm --}}
            <div class="point mg-l-r">
                <ul>
                    <li>
                        <img src="{{ asset('images/icon_image/icon-03.png') }}" alt="">
                    </li>
                    <li class="benefits-title">CHÍNH SÁCH TÍCH ĐIỂM</li>
                    <li class="benefits-text">Áp Dụng Tích Điểm Cho Tất Cả Đơn Hàng</li>
                </ul>
            </div>

            {{-- đổi hàng --}}
            <div class="exchange mg-l-r">
                <ul>
                    <li>
                        <img src="{{ asset('images/icon_image/icon-02.png') }}" alt="">
                    </li>
                    <li class="benefits-title">ĐỔI HÀNG TRONG VÒNG 15 NGÀY</li>
                    <li class="benefits-text">Hỗ Trợ Đổi Hàng Trong 15 Ngày</li>
                </ul>
            </div>
        </div>

        {{-- khung ảnh trưng bày --}}
        <div class="display-frame">
            <ul>
                <li>
                    <a href=""><img src="{{ asset('images/homepage/product-sale-01.jpg') }}" alt=""></a>
                </li>
                <li style="margin-top: 32px">
                    <a href=""><img src="{{ asset('images/homepage/product-sale-02.jpg') }}" alt=""></a>
                </li>

                <li>
                    <a href=""><img src="{{ asset('images/homepage/product-sale-03.jpg') }}" alt=""></a>
                </li>

                <li style="margin-top: 32px">
                    <a href=""><img src="{{ asset('images/homepage/product-sale-04.jpg') }}" alt=""></a>
                </li>
            </ul>
        </div>

        {{-- sản phẩm trưng bày --}}

        <div class="product-display">
            <div class="product-thumnail">
                <img src="{{ asset('images/homepage/thumbnail-02.png') }}" alt="">
            </div>

            <div class="product-list">
                <div class="product-list-item">
                    <div class="content">
                        <ul>
                            <Li class="mt-24"><a style="font-size: 20px" href="">Quần lụa ống rộng<br>QD12097
                                </a>
                            </Li>
                            <Li class="mt-24"><a style="color: rgba(37,36,37,.5); font-size: 20px" href="">ÁO
                                    DÀI</a>
                            </Li>
                            <Li class="mt-24" style="font-size: 28px">337.500 đ</Li>
                            <Li class="mt-24" style="display:flex;"><button><a style="color: #00aeef;" href="">Mua
                                        ngay</a></button> <img src="{{ asset('images/icon_image/icon-heart.svg') }}"
                                    alt=""></Li>
                        </ul>
                    </div>
                    <div class="product-img">
                        <img src="{{ asset('images/homepage/thumbnail-02-1.png') }}" alt="">
                    </div>
                </div>

                <div class="product-list-item">
                    <div class="content">
                        <ul>
                            <Li class="mt-24"><a style="font-size: 20px" href="">Áo dài đính hoa<br> QPD12094</a>
                            </Li>
                            <Li class="mt-24"><a style="color: rgba(37,36,37,.5); font-size: 20px" href="">ÁO
                                    DÀI</a>
                            </Li>
                            <Li class="mt-24" style="font-size: 28px">750.000 đ</Li>
                            <Li class="mt-24" style="display:flex;"><button><a style="color: #00aeef;" href="">Mua
                                        ngay</a></button> <img src="{{ asset('images/icon_image/icon-heart.svg') }}"
                                    alt=""></Li>
                        </ul>
                    </div>
                    <div class="product-img">
                        <img src="{{ asset('images/homepage/thumbnail-02-2.png') }}" alt="">
                    </div>
                </div>
            </div>




        </div>

        {{-- khung ảnh trưng bày --}}
        <div class="display-frame">
            <ul>
                <li>
                    <a href=""><img src="{{ asset('images/homepage/impression-01.jpg') }}" alt=""></a>
                </li>
                <li style="margin-top: 32px">
                    <a href=""><img src="{{ asset('images/homepage/impression-02.jpg') }}" alt=""></a>
                </li>

                <li>
                    <a href=""><img src="{{ asset('images/homepage/impression-03.jpg') }}" alt=""></a>
                </li>

                <li style="margin-top: 32px">
                    <a href=""><img src="{{ asset('images/homepage/impression-04.jpg') }}" alt=""></a>
                </li>
            </ul>
        </div>

        {{-- slide sản phẩm --}}
        @include('client.components.product', ['products' => $products])
    </div>

@endsection
