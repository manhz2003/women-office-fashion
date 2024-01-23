@extends('client.layouts.master')

@section('title', 'Thanh toán')

@section('main')
    <div class="payment-app">

        <div class="payment-title">
            <b>thanh toán</b>
        </div>

        <div class="payment-app-content">
            <form action="">
                <div class="payment-app-address">
                    <div class="payment-form-heading">
                        Địa chỉ giao hàng
                    </div>

                    <div class="input-address-detail">
                        <input placeholder="Địa chỉ chi tiết" type="text" name="" id="" required>
                    </div>

                    <div class="input-address-box">
                        <select class="" id="city" aria-label=".form-select-sm" required>
                            <option value="" selected>Tỉnh/Thành phố</option>
                        </select>

                        <select class="from-select-ml-20" id="district" aria-label=".form-select-sm" required>
                            <option value="" selected>Quận/Huyện</option>
                        </select>

                        <select class="from-select-ml-20" id="ward" aria-label=".form-select-sm" required>
                            <option value="" selected>Phường/Xã</option>
                        </select>
                    </div>

                    <div class="payment-form-heading">
                        Hỗ trợ khách hàng
                    </div>

                    <div class="payment-form-note">
                        <textarea placeholder="Ghi chú cho giao hàng"></textarea>
                    </div>

                    <div class="payment-form-note-text">
                        <p>Đơn hàng của quý khách sẽ được GUMAC xác nhận tự động. Hệ thống sẽ gửi tin nhắn SMS hoặc Zalo về
                            thông tin đơn đặt hàng thành công.</p>
                        <p>Với đơn hàng cần tư vấn thêm, nhân viên nhà GU sẽ gọi điện để tư vấn và lên đơn cho quý khách.
                        </p>
                    </div>

                    <div class="payment-form-heading">
                        Phương thức thanh toán
                    </div>

                    <div class="payment-method">
                        <section class="squaredOne">
                            <div class="checkbox-container">
                                <input type="checkbox" value="" id="squaredOne_2" name="check" checked />
                                <label for="squaredOne_2"></label>
                            </div>
                        </section>

                        <img src="{{ asset('images/icon_image/icon-cod.svg') }}" alt="">
                        <span class="span-pay">Thanh toán khi nhận hàng</span>
                    </div>
                </div>
                <div class="payment-info-order">
                    <div class="payment-info-heading">
                        <b>Thông tin đơn hàng</b>
                    </div>
                    <div class="payment-info-order-content">
                        <div class="payment-info-product">
                            <div class="payment-info-product-left">
                                <div class="payment-info-img">
                                    <img src="{{ asset('images/product/dresses/dam-a-bau-canh-sen-01.jpg') }}"
                                        alt="">
                                </div>
                                <ul>
                                    <li>Áo thun tay dài</li>
                                    <li>
                                        <div class="info-size-color">Đen, S</div>
                                        <div class="info-quantity">x 02</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="payment-info-price">
                                <div class="payment-info-price-old">275.000 đ</div>
                                <div class="payment-info-price-new">199.000 đ</div>
                            </div>
                        </div>

                        <div class="payment-info-product">
                            <div class="payment-info-product-left">
                                <div class="payment-info-img">
                                    <img src="{{ asset('images/product/dresses/dam-a-bau-canh-sen-01.jpg') }}"
                                        alt="">
                                </div>
                                <ul>
                                    <li>Áo thun tay dài</li>
                                    <li>
                                        <div class="info-size-color">Đen, S</div>
                                        <div class="info-quantity">x 02</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="payment-info-price">
                                <div class="payment-info-price-old">275.000 đ</div>
                                <div class="payment-info-price-new">199.000 đ</div>
                            </div>
                        </div>

                        <div class="payment-expense">
                            <ul class="payment-expense-title">
                                <li>Tổng tiền sản phẩm</li>
                                <li>Phí giao hàng</li>
                                <li>Giảm giá</li>
                                <li>Tổng thanh toán</li>
                            </ul>
                            <ul class="payment-expense-content">
                                <li>2.852.500 đ</li>
                                <li>0 đ</li>
                                <li>0 đ</li>
                                <li>2.852.500 đ</li>
                            </ul>
                        </div>

                        <div class="payment-btn">
                            <button type="submit">Thanh toán</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
        <script src="{{ asset('client/js/payment.js') }}"></script>
    </div>
@endsection
