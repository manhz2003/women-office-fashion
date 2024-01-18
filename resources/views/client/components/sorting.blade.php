<div class="product-sorting">
    <div class="sorting-title">
        Sắp xếp
    </div>
    <div class="sorting-option">
        @if (request()->is('product-dress*'))
            <a href="{{ route('product-dress', ['sort' => 'desc']) }}">
                <div class="select">Giá từ cao đến thấp</div>
            </a>
            <a href="{{ route('product-dress', ['sort' => 'asc']) }}">
                <div class="select">Giá từ thấp đến cao</div>
            </a>
        @elseif(request()->is('product-sale*'))
            <a href="{{ route('product-sale', ['sort' => 'desc']) }}">
                <div class="select">Giá từ cao đến thấp</div>
            </a>
            <a href="{{ route('product-sale', ['sort' => 'asc']) }}">
                <div class="select">Giá từ thấp đến cao</div>
            </a>
        @elseif(request()->is('product-fashion*'))
            <a href="{{ route('product-fashion', ['sort' => 'desc']) }}">
                <div class="select">Giá từ cao đến thấp</div>
            </a>
            <a href="{{ route('product-fashion', ['sort' => 'asc']) }}">
                <div class="select">Giá từ thấp đến cao</div>
            </a>
        @elseif(request()->is('product-new*'))
            <a href="{{ route('product-new', ['sort' => 'desc']) }}">
                <div class="select">Giá từ cao đến thấp</div>
            </a>
            <a href="{{ route('product-new', ['sort' => 'asc']) }}">
                <div class="select">Giá từ thấp đến cao</div>
            </a>
        @endif
        <div class="sorting-icon-desc"></div>
        <div class="sorting-icon-asc"></div>
    </div>
</div>
