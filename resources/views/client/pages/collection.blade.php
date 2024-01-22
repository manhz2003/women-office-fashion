@extends('client.layouts.master')

@section('title', 'Bộ sưu tập ảnh')

@section('main')
    <div class="collection">
        <div class="collection-banner">
            <img src="{{ asset('images/collection/banner.jpg') }}" alt="">
        </div>
        <div class="collection-bg">

            <div class="collection-content">
                <div class="content-block">
                    <div class="collection-heading">
                        Bộ sưu tập Áo Dài cùng những trang phục thuần Việt
                    </div>
                    <div class="collection-title">
                        THIỀU HOA
                    </div>
                </div>

                <div class="collection-paragraph-box">
                    <p>
                        Áo Dài là di sản văn hóa quý báu của đất nước được gìn giữ và phát triển tốt đẹp qua rất nhiều thế
                        hệ,
                        GUMAC thật hạnh phúc khi được là một trong số đó, được đóng góp công sức cũng như trí tuệ trong công
                        trình bảo tồn những giá trị dân tộc đầy tính tự hào này thông qua BST Thiều Hoa. Thiều Hoa - BST Áo
                        Dài
                        và những sản phẩm thuần Việt mang hơi thở chánh niệm, được tạo ra chắt lọc rất kỹ lưỡng từ những con
                        người thiện lương, những chất liệu thân thiện với môi trường và mang năng lượng chữa lành từ Singing
                        Bowl do chính CEO Minh Phương và team nhà GU thực hiện.
                    </p>
                    <p>
                        Thiều Hoa - các thiết kế là cộng hưởng của hơi thở truyền thống quý giá qua những họa tiết in kì
                        công và
                        tỉ mỉ, cùng với đó là sự bay bổng về form dáng, chất voan, lụa mềm mại đầy xu hướng giúp nàng khoe
                        nét
                        yêu kiều một cách đầy tình tứ. Đối với GU, niềm yêu dành cho Áo Dài không bao giờ cạn, cảm xúc từ
                        thuở
                        ban đầu vẫn luôn vẹn nguyên và chân thành. Sự thành công của BST Thiều Hoa không nằm ở những con số
                        mà
                        là giá trị kết nối văn hoá dân tộc cùng dòng chảy thời trang hiện đại đang hiện hữu. Áo Dài Thiều
                        Hoa sẽ
                        chính thức được GUMAC ra mắt vào tháng 12 trên toàn quốc. Thương mời Nàng ghé đến nhà GU tham quan &
                        mua
                        sắm nhé.
                    </p>
                </div>
            </div>

            <div class="collection-image">
                <ul class="collection-image-box">
                    <li class="img-1 collection-li"><img src="{{ asset('images/collection/thieu-hoa-01.jpg') }}"
                            alt="">
                    </li>
                    <li class="collection-li">
                        <ul>
                            <li class="img-size-1"><img src="{{ asset('images/collection/thieu-hoa-02.jpg') }}"
                                    alt="">
                            </li>
                            <li class="img-size-1 img-size-1-2"><img src="{{ asset('images/collection/thieu-hoa-04.jpg') }}"
                                    alt="">
                            </li>
                        </ul>
                    </li>
                    <li class="collection-li">
                        <ul>
                            <li class="img-size-2 img-size-2-2-1"><img
                                    src="{{ asset('images/collection/thieu-hoa-03.jpg') }}" alt="">
                            </li>
                            <li class="img-size-2 img-size-2-2"><img src="{{ asset('images/collection/thieu-hoa-05.jpg') }}"
                                    alt="">
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="collection-image-frame">
                <ul>
                    <li class="collection-image-1"><img src="{{ asset('images/collection/thieu-hoa-06.jpg') }}"
                            alt=""></li>
                    <li class="collection-image-2"><img src="{{ asset('images/collection/thieu-hoa-07.jpg') }}"
                            alt=""></li>
                    <li class="collection-image-3"><img src="{{ asset('images/collection/thieu-hoa-08.jpg') }}"
                            alt=""></li>
                    <li class="collection-image-4"><img src="{{ asset('images/collection/thieu-hoa-09.jpg') }}"
                            alt=""></li>
                </ul>
            </div>

            <div class="collection-image-frame-list">
                <ul>
                    <li><img src="{{ asset('images/collection/thieu-hoa-10.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('images/collection/thieu-hoa-11.jpg') }}" alt=""></li>
                </ul>
            </div>

            <div class="collection-image-frame">
                <ul>
                    <li class="collection-image-1"><img src="{{ asset('images/collection/thieu-hoa-12.jpg') }}"
                            alt=""></li>
                    <li class="collection-image-2"><img src="{{ asset('images/collection/thieu-hoa-13.jpg') }}"
                            alt=""></li>
                    <li class="collection-image-3"><img src="{{ asset('images/collection/thieu-hoa-14.jpg') }}"
                            alt=""></li>
                    <li class="collection-image-4"><img src="{{ asset('images/collection/thieu-hoa-15.jpg') }}"
                            alt=""></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
