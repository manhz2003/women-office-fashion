<header>
    <div class="logo">
        <a href="{{ route('/') }}"><img src="{{ asset('images/icon_image/gumac-headerlogo.svg') }}" alt=""></a>
    </div>

    <nav class="navigation">
        <ul>
            <li><a href="{{ route('product-sale') }}"
                    class="color-weight @if (request()->is('product-sale*')) active @endif">SALE TẾT
                    70%</a></li>
            <li><a href="{{ route('product-new') }}" class="@if (request()->is('product-new*')) active @endif">HÀNG MỚI</a>
            </li>
            <li><a href="{{ route('product-dress') }}" class="@if (request()->is('product-dress*')) active @endif">VÁY ĐẦM
                    TẾT</a></li>
            <li><a href="{{ route('product-fashion') }}" class="@if (request()->is('product-fashion*')) active @endif">THỜI
                    TRANG</a></li>
            <li><a href="{{ route('sale-off') }}"
                    class="color-weight @if (request()->is('sale-off*')) active @endif">SALE OFF</a>
            </li>
            <li><a href="{{ route('collection') }}" class="@if (request()->is('collection*')) active @endif">ÁO DÀI THIỀU
                    HOA</a></li>
        </ul>
    </nav>

    <div class="action-groups">
        <div class="action-icon">
            <a href="{{ route('login') }}"><img class="size-icon"
                    src="{{ asset('images/icon_image/icon-user.svg') }}"alt=""></a>
        </div>
        <div class="action-icon">
            <a href=""><img class="size-icon"src="{{ asset('images/icon_image/icon-heart-black.svg') }}"
                    alt=""></a>
        </div>
        <div class="action-icon" style="position: relative;">

            <a href="{{ route('cart') }}"><img src="{{ asset('images/icon_image/icon-cart.svg') }}"
                    alt=""></a>
        </div>
    </div>

    <script src="{{ asset('client/js/navigation.js') }}"></script>
</header>
