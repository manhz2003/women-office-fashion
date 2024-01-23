@extends('client.layouts.master')

@section('title', 'Chi tiết sản phẩm')

@section('main')
    <div class="product-detail-app">
        <div class="detail-app">
            <div class="slide">
                <div class="slide-list">
                    <div class="row">
                        @for ($index = 0; $index < min(7, count($productImages)); $index++)
                            <div class="column mt-16">
                                <img class="" src="{{ asset($productImages[$index]->path) }}"
                                    onclick="currentSlide({{ $index + 1 }})" alt="">
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="gallery">
                    @foreach ($productImages as $index => $image)
                        <div class="mySlides">
                            <img src="{{ asset($image->path) }}">
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="product-detail-content">
                <div class="name-heading"><b>{{ $product->name }}</b></div>
                <div class="product-info-code">
                    <div class="product-detail-id">{{ $product->id }}</div>
                    <div class="product-detail-list-icon">
                        <ul>
                            <li><img src="{{ asset('images/icon_image/ic-star-orange.svg') }}" alt=""></li>
                            <li><img src="{{ asset('images/icon_image/ic-star-orange.svg') }}" alt=""></li>
                            <li><img src="{{ asset('images/icon_image/ic-star-orange.svg') }}" alt=""></li>
                            <li><img src="{{ asset('images/icon_image/ic-star-orange.svg') }}" alt=""></li>
                            <li><img src="{{ asset('images/icon_image/ic-star-orange.svg') }}" alt=""></li>
                        </ul>
                    </div>
                    <div class="product-detail-separate"></div>
                    <div class="text">Còn hàng</div>
                </div>

                <div class="product-detail-price">
                    <div class="price-new">{{ number_format($product->new_price, 3) }} đ</div>
                    <div class="price-old">{{ number_format($product->old_price, 3) }} đ</div>
                </div>
                <div class="product-detail-size">
                    <div class="size-text">
                        Kích thước
                    </div>
                    <div class="size">
                        <div class="size-s active-size">S</div>
                        <div class="size-l">L</div>
                        <div class="size-m">M</div>
                    </div>
                </div>

                <div class="product-detail-color">
                    <div class="color-text">
                        Màu sắc: Hồng
                    </div>
                    <div class="color">
                        <div class="color-pink icon-color-border">
                            <img src="{{ asset('images/icon_image/color-pink.png') }}" alt="">
                        </div>
                        <div class="color-black">
                            <img src="{{ asset('images/icon_image/color-black.png') }}" alt="">
                        </div>
                        <div class="color-white">
                            <img src="{{ asset('images/icon_image/color-white.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="product-detail-quantity-heart">
                    <div class="detail-quantity">
                        <span class="left" onclick="changeQuantity(-1)">
                            &minus;
                        </span>
                        <div class="detail-quantity-item" id="quantity">01</div>
                        <span class="detail-quantity-item right" onclick="changeQuantity(1)">
                            &plus;
                        </span>
                    </div>
                    <div class="detail-heart" id="heartIcon" onclick="toggleHeart()">
                        <img src="{{ asset('images/icon_image/icon-heart-black.svg') }}" alt="">
                    </div>
                </div>

                <div class="product-detail-button">
                    <a href="">
                        <div class="btn-buy">MUA NGAY</div>
                    </a>
                    <a href="">
                        <div class="btn-cart">THÊM VÀO GIỎ HÀNG</div>
                        <img src="{{ asset('images/icon_image/ic-add-cart.svg') }}" alt="">
                    </a>
                </div>

                <div class="product-detail-separation"></div>

                <div class="product-detail-icon-box">
                    <ul>
                        <li>
                            <img src="{{ asset('images/icon_image/freeship.png') }}" alt="">
                            <div>Miễn phí vận chuyển cho đơn hàng trên 500k</div>
                        </li>
                        <li class="detail-li-ml-52">
                            <img src="{{ asset('images/icon_image/exchange.png') }}" alt="">
                            <div>Đổi trả cực dễ chỉ yêu cầu số điện thoại</div>
                        </li>
                        <li class="detail-li-ml-52">
                            <img src="{{ asset('images/icon_image/hotline.png') }}" alt="">
                            <div>Hotline 18006013 hỗ trợ từ 8h00 - 20h mỗi ngày</div>
                        </li>
                        <li>
                            <img src="{{ asset('images/icon_image/ship.png') }}" alt="">
                            <div>Giao hàng toàn quốc</div>
                        </li>
                        <li class="detail-li-ml-52">
                            <img src="{{ asset('images/icon_image/exchange-time.png') }}" alt="">
                            <div>15 ngày đổi hàng với bất kỳ lý do gì</div>
                        </li>
                        <li class="detail-li-ml-52">
                            <img src="{{ asset('images/icon_image/vip.png') }}" alt="">
                            <div>Tích lũy điểm dễ dàng</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="product-detail-guid">
            <div class="detail-guid-box">
                <div class="detail-outstanding">
                    <span>Đặc điểm nổi bật của sản phẩm</span>
                    <ul>
                        <li>Kiểu dáng chuẩn style girl Hàn</li>
                        <li>Mềm mại, dễ chịu và tôn dáng khi mặc</li>
                        <li>Chất liệu thông thoáng, đem lại sự thoải mái suốt ngày dài</li>
                        <li>Bền đẹp, không nhão, không xù lông khi sử dụng</li>
                        <li>Sản xuất tại xưởng 10 năm kinh nghiệm tại TP Hồ Chí Minh</li>
                    </ul>
                </div>
            </div>
            <div class="detail-bg">
                <img src="{{ asset('images/product/product_details/detail-01.jpg') }}" alt="">
            </div>
        </div>

        <div class="product-detail-comment">
            <div class="comment-btn-list">
                <div class="comment-btn-evaluate btn">
                    <span>Đánh giá sản phẩm</span>
                    <img src="{{ asset('images/icon_image/cmt-1.png') }}" alt="">
                </div>
                <div class="comment-btn-cmt btn">
                    <span>Comment</span>
                    <img src="{{ asset('images/icon_image/cmt-2.png') }}" alt="">
                </div>
            </div>

            <div class="product-detail-evaluate">
                <span><b>Đánh giá</b></span>

                <div class="evaluate-quantity">
                    <span>
                        <b>5</b>
                    </span>
                    <div class="evaluate-quantity-box">
                        <ul>
                            <li><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}" alt=""></li>
                            <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}"
                                    alt=""></li>
                            <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}"
                                    alt=""></li>
                            <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}"
                                    alt=""></li>
                            <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}"
                                    alt=""></li>
                        </ul>
                        <div class="quantity-cmt">0 nhận xét</div>
                    </div>
                </div>

                <div class="evaluate-box-star">
                    <ul>
                        <li>
                            <ul class="evaluate-box-star-rating">
                                <li><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}" alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}"
                                        alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}"
                                        alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}"
                                        alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}"
                                        alt=""></li>
                                <li class="li-ml">
                                    <div class="rating-separation"></div>
                                </li>
                                <li class="li-ml" style="color: rgba(37,36,37,.5);">0</li>
                            </ul>
                        </li>
                        <li>
                            <ul class="evaluate-box-star-rating">
                                <li><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}" alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}"
                                        alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}"
                                        alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}"
                                        alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-white.svg') }}"
                                        alt=""></li>
                                <li class="li-ml">
                                    <div class="rating-separation"></div>
                                </li>
                                <li class="li-ml" style="color: rgba(37,36,37,.5);">0</li>
                            </ul>
                        </li>
                        <li>
                            <ul class="evaluate-box-star-rating">
                                <li><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}" alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}"
                                        alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}"
                                        alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-white.svg') }}"
                                        alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-white.svg') }}"
                                        alt=""></li>
                                <li class="li-ml">
                                    <div class="rating-separation"></div>
                                </li>
                                <li class="li-ml" style="color: rgba(37,36,37,.5);">0</li>
                            </ul>
                        </li>
                        <li>
                            <ul class="evaluate-box-star-rating">
                                <li><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}" alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}"
                                        alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-white.svg') }}"
                                        alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-white.svg') }}"
                                        alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-white.svg') }}"
                                        alt=""></li>
                                <li class="li-ml">
                                    <div class="rating-separation"></div>
                                </li>
                                <li class="li-ml" style="color: rgba(37,36,37,.5);">0</li>
                            </ul>
                        </li>
                        <li>
                            <ul class="evaluate-box-star-rating">
                                <li><img src="{{ asset('images/icon_image/icon-star-blue.svg') }}" alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-white.svg') }}"
                                        alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-white.svg') }}"
                                        alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-white.svg') }}"
                                        alt=""></li>
                                <li class="li-ml"><img src="{{ asset('images/icon_image/icon-star-white.svg') }}"
                                        alt=""></li>
                                <li class="li-ml">
                                    <div class="rating-separation"></div>
                                </li>
                                <li class="li-ml" style="color: rgba(37,36,37,.5);">0</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="detail-suggest">GỢI Ý DÀNH CHO BẠN</div>

        @include('client.components.product')
        <script src="{{ asset('client/js/product-detail.js') }}"></script>
    </div>

@endsection
