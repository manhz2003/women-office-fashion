<div class="slide-product">
    @foreach ($products as $product)
        <div class="slide-product-box">
            <div class="slide-thumnail">
                <a href="https://gumac.vn/"><img src="{{ asset($product->thumbnail) }}" alt=""></a>
            </div>
            <div class="slide-content">
                <ul>
                    <li class="icon-color">
                        <div class="icon-color-img icon-item-img icon-color-border">
                            <img src="{{ asset('images/icon_image/color-black.png') }}" alt="">
                        </div>
                        <div class="icon-color-img img-left icon-item-img">
                            <img src="{{ asset('images/icon_image/color-pink.png') }}" alt="">
                        </div>
                        <div class="icon-color-img img-left icon-item-img">
                            <img src="{{ asset('images/icon_image/color-white.png') }}" alt="">
                        </div>
                    </li>
                    <li>
                        <a href="" class="product-name">{{ $product->name }}</a>
                    </li>
                    <li class="product-id">
                        {{ $product->id }}
                    </li>
                    <li class="price">
                        <div class="slide-price-new">
                            {{ number_format($product->new_price, 3) }} đ
                        </div>
                        <div class="slide-price-old">
                            {{ number_format($product->old_price, 3) }} đ
                        </div>
                    </li>
                </ul>
            </div>
            <div class="product-favorite">
                <img class="heart-white" src="{{ asset('images/icon_image/icon-heart-white.svg') }}" alt="">
            </div>
        </div>
    @endforeach
    @include('client.components.page-control')
    <script src="{{ asset('client/js/product.js') }}"></script>
</div>
