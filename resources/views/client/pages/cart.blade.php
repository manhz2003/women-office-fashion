@extends('client.layouts.master')

@section('title', 'Giỏ hàng')

@section('main')
    <div class="cart-main">
        <div class="cart-title"><b>Giỏ hàng</b></div>
        <div class="cart-app">
            <div class="cart-info-container">
                <div class="cart-product-list-heading">
                    <div class="product-list-heading-chk">
                        <section class="squaredOne">
                            <div class="checkbox-container">
                                <input type="checkbox" value="None" id="squaredOne_1" name="check" checked />
                                <label for="squaredOne_1"></label>
                            </div>
                        </section>
                    </div>
                    <div class="product-list-heading-info list-heading">
                        Thông tin sản phẩm
                    </div>
                    <div class="product-list-heading-unit-price list-heading">
                        Đơn giá
                    </div>
                    <div class="product-list-heading-quatity list-heading">
                        Số lượng
                    </div>
                    <div class="product-list-heading-total">
                        Tổng cộng
                    </div>
                </div>
                <div class="cart-product-list-content">
                    <div class="cart-product-list-item">
                        <div class="product-list-heading-chk">
                            <section class="squaredOne">
                                <div class="checkbox-container">
                                    <input type="checkbox" value="" id="squaredOne_2" name="check" checked />
                                    <label for="squaredOne_2"></label>
                                </div>
                            </section>
                        </div>

                        <div class="product-list-describe">
                            <a href="">
                                <div class="product-list-img">
                                    <img src="{{ asset('images/product/dresses/dam-a-bau-canh-sen-02.jpg') }}"
                                        alt="">
                                </div>
                                <ul>
                                    <li class="list-describe-color-1">Áo thun lai cuốn biên</li>
                                    <li class="list-describe list-describe-color-1">ATE01066</li>
                                    <li class="list-describe list-describe-color-2 des-mt">Trắng, S</li>
                                    <li class="list-describe list-describe-color-2"><u>Xóa</u></li>
                                </ul>
                            </a>
                        </div>

                        <div class="product-list-unit-price">
                            <div class="price-new">
                                249.000 đ
                            </div>
                            <div class="price-old">
                                265.000 đ
                            </div>
                        </div>

                        <div class="product-list-quantity">
                            <div class="detail-quantity">
                                <span class="left" onclick="changeQuantity(-1)">
                                    &minus;
                                </span>
                                <div class="detail-quantity-item" id="quantity">01</div>
                                <span class="detail-quantity-item right" onclick="changeQuantity(1)">
                                    &plus;
                                </span>
                            </div>
                        </div>

                        <div class="product-list-total">
                            249.000 đ
                        </div>

                    </div>

                    <div class="cart-product-list-item">
                        <div class="product-list-heading-chk">
                            <section class="squaredOne">
                                <div class="checkbox-container">
                                    <input type="checkbox" value="" id="squaredOne_2" name="check" checked />
                                    <label for="squaredOne_2"></label>
                                </div>
                            </section>
                        </div>

                        <div class="product-list-describe">
                            <a href="">
                                <div class="product-list-img">
                                    <img src="{{ asset('images/product/dresses/dam-a-bau-canh-sen-02.jpg') }}"
                                        alt="">
                                </div>
                                <ul>
                                    <li class="list-describe-color-1">Áo thun lai cuốn biên</li>
                                    <li class="list-describe list-describe-color-1">ATE01066</li>
                                    <li class="list-describe list-describe-color-2 des-mt">Trắng, S</li>
                                    <li class="list-describe list-describe-color-2"><u>Xóa</u></li>
                                </ul>
                            </a>
                        </div>

                        <div class="product-list-unit-price">
                            <div class="price-new">
                                249.000 đ
                            </div>
                            <div class="price-old">
                                265.000 đ
                            </div>
                        </div>

                        <div class="product-list-quantity">
                            <div class="detail-quantity">
                                <span class="left" onclick="changeQuantity(-1)">
                                    &minus;
                                </span>
                                <div class="detail-quantity-item" id="quantity">01</div>
                                <span class="detail-quantity-item right" onclick="changeQuantity(1)">
                                    &plus;
                                </span>
                            </div>
                        </div>

                        <div class="product-list-total">
                            249.000 đ
                        </div>
                    </div>

                    <div class="cart-product-list-item">
                        <div class="product-list-heading-chk">
                            <section class="squaredOne">
                                <div class="checkbox-container">
                                    <input type="checkbox" value="" id="squaredOne_2" name="check" checked />
                                    <label for="squaredOne_2"></label>
                                </div>
                            </section>
                        </div>

                        <div class="product-list-describe">
                            <a href="">
                                <div class="product-list-img">
                                    <img src="{{ asset('images/product/dresses/dam-a-bau-canh-sen-02.jpg') }}"
                                        alt="">
                                </div>
                                <ul>
                                    <li class="list-describe-color-1">Áo thun lai cuốn biên</li>
                                    <li class="list-describe list-describe-color-1">ATE01066</li>
                                    <li class="list-describe list-describe-color-2 des-mt">Trắng, S</li>
                                    <li class="list-describe list-describe-color-2"><u>Xóa</u></li>
                                </ul>
                            </a>
                        </div>

                        <div class="product-list-unit-price">
                            <div class="price-new">
                                249.000 đ
                            </div>
                            <div class="price-old">
                                265.000 đ
                            </div>
                        </div>

                        <div class="product-list-quantity">
                            <div class="detail-quantity">
                                <span class="left" onclick="changeQuantity(-1)">
                                    &minus;
                                </span>
                                <div class="detail-quantity-item" id="quantity">01</div>
                                <span class="detail-quantity-item right" onclick="changeQuantity(1)">
                                    &plus;
                                </span>
                            </div>
                        </div>

                        <div class="product-list-total">
                            249.000 đ
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-order-container">
                <form action="">
                    <div class="cart-order-title">
                        <b>Thông tin đơn hàng</b>
                    </div>
                    <div class="cart-order-content">
                        <ul>
                            <li class="cart-order-content-flex">
                                <div class="cart-order-info-total">
                                    Tổng tiền sản phẩm
                                </div>
                                <div class="cart-order-info-price">
                                    586.500 đ
                                </div>
                            </li>
                            <li class="cart-order-content-flex">
                                <div class="cart-order-content-sale">Giảm giá</div>
                                <div class="cart-order-sale-price">-0 đ</div>
                            </li>
                            <li class="cart-order-content-separation"></li>
                            <li>
                                Mã giảm giá
                            </li>
                            <li class="input-sale">
                                <input type="text" placeholder="Nhập mã giảm giá"><br>
                                <div class="btn-sale">ÁP DỤNG</div>
                            </li>
                            <li class="error">
                                Vui lòng nhập mã giảm giá!
                            </li>
                            <li class="cart-order-content-separation"></li>
                            <li class="cart-order-content-flex">
                                <div class="cart-total-payment">Tổng thanh toán</div>
                                <div class="cart-total-price">
                                    <div class="cart-total-color">586.500 </div> <span>đ</span>
                                </div>
                            </li>
                            <li class="order-btn-submit">
                                <button type="submit">
                                    Đặt hàng ngay
                                </button>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>

        <div class="suggest-title">GỢI Ý DÀNH CHO BẠN</div>
        @include('client.components.product')
        <script src="{{ asset('client/js/cart.js') }}"></script>
    </div>
@endsection
