@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="categories-product">
                <ul class="main-categories">
                    <li>
                        <a href="#">Thiết bị chiếu sáng</a>
                        <div class="sub-categories">
                            <div class="item-cate">
                                <ul class="list-unstyled">
                                    <li class="group-cate-name"><a href="#">Đèn led</a></li>
                                    <li><a href="#">Đèn led âm trần</a></li>
                                    <li><a href="#">Đèn led ốp trần</a></li>
                                    <li><a href="#">Đèn led trang trí</a></li>
                                    <li><a href="#">Đèn led thanh ray</a></li>
                                    <li><a href="#">Đèn led âm trần</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="group-cate-name"><a href="#">Đèn led</a></li>
                                    <li><a href="#">Đèn led âm trần</a></li>
                                    <li><a href="#">Đèn led ốp trần</a></li>
                                    <li><a href="#">Đèn led trang trí</a></li>
                                    <li><a href="#">Đèn led thanh ray</a></li>
                                    <li><a href="#">Đèn led âm trần</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="group-cate-name"><a href="#">Đèn led</a></li>
                                    <li><a href="#">Đèn led âm trần</a></li>
                                    <li><a href="#">Đèn led ốp trần</a></li>
                                    <li><a href="#">Đèn led trang trí</a></li>
                                    <li><a href="#">Đèn led thanh ray</a></li>
                                    <li><a href="#">Đèn led âm trần</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">Dây điện</a></li>
                    <li><a href="#">Dây cáp điện</a></li>
                    <li><a href="#">Thiết bị chiếu sáng</a></li>
                    <li><a href="#">Dây cáp viễn thông</a></li>
                    <li><a href="#">Thiết bị chiếu sáng</a></li>
                    <li><a href="#">Thiết bị chiếu sáng</a></li>
                    <li><a href="#">Thiết bị chiếu sáng</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9">
            <!-- wSlider -->
            <div id="slider" class="wSlider">
                <!--<div class="box_title">$[![Label]!]</div>-->
                <div class="slider_content">
                    <div class="item_wrapper">
                        <!-- Repeat 3 -->
                        <div class="item">
                            <a href="#"><img class="thumb" alt="" src="images/slider.jpg"/></a>
                        </div>
                        <div class="item">
                            <a href="#"><img class="thumb" alt="" src="images/slider.jpg"/></a>
                        </div>
                        <div class="item">
                            <a href="#"><img class="thumb" alt="" src="images/slider.jpg"/></a>
                        </div>
                        <!-- end of repeat 3 -->
                    </div>
                    <span class="prev"></span>
                    <span class="next"></span>
                </div>
            </div>
            <!-- end of wSlider -->
            <script>
                $('.item_wrapper', $('#slider')).bxSlider({
                    auto: true,
                    slideSelector: '.item',
                    minSlides: 1,
                    maxSlides: 1,
                    pager: false
                });
            </script>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="product-box">
                <div class="box__title">
                    <div class="pull-left">
                        <span class="green-text">Sản phẩm</span>
                        <span class="blue-text">Nổi bật</span>
                    </div>
                    <div class="pull-right">
                        <span class="featured-product-slider-prev"></span>
                        <span class="featured-product-slider-next"></span>
                    </div>
                </div>
                <div class="box__content">
                    <!-- wSlider -->
                    <div id="featured-product-slider" class="wSlider">
                        <!--<div class="box_title">$[![Label]!]</div>-->
                        <div class="slider_content">
                            <div class="item_wrapper">
                                <div class="item-slider">
                                    <div class="list-product-grid">
                                        <!-- Repeat 6 -->
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <div class="discount">10%</div>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                            <del class="old-price">159.000 vnđ</del>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                            <del class="old-price">159.000 vnđ</del>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                            <del class="old-price">159.000 vnđ</del>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                            <del class="old-price">159.000 vnđ</del>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                            <del class="old-price">159.000 vnđ</del>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                            <del class="old-price">159.000 vnđ</del>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-slider">
                                    <div class="list-product-grid">
                                        <!-- Repeat 6 -->
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of repeat 3 -->
                            </div>
                        </div>
                    </div>
                    <!-- end of wSlider -->
                    <script>
                        $('.item_wrapper', $('#featured-product-slider')).bxSlider({
                            slideSelector: '.item-slider',
                            minSlides: 1,
                            maxSlides: 1,
                            pager: false,
                            nextText: " ",
                            prevText: " ",
                            nextSelector: ".featured-product-slider-next",
                            prevSelector: ".featured-product-slider-prev"
                        });
                    </script>
                </div>
            </div>
            <div class="product-box">
                <div class="box__title">
                    <div class="pull-left">
                        <span class="green-text">Sản phẩm</span>
                        <span class="blue-text">Nổi bật</span>
                    </div>
                    <div class="pull-right">
                        <span class="featured-product-slider-prev-2"></span>
                        <span class="featured-product-slider-next-2"></span>
                    </div>
                </div>
                <div class="box__content">
                    <!-- wSlider -->
                    <div id="featured-product-slider-2" class="wSlider">
                        <!--<div class="box_title">$[![Label]!]</div>-->
                        <div class="slider_content">
                            <div class="item_wrapper">
                                <div class="item-slider">
                                    <div class="list-product-grid">
                                        <!-- Repeat 6 -->
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-slider">
                                    <div class="list-product-grid">
                                        <!-- Repeat 6 -->
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrapper">
                                                <a href="#" class="photo">
                                                    <img src="images/product-01.jpg" alt="">
                                                </a>
                                                <a href="#" class="name">Tên sản phẩm thiết bị điện</a>
                                                <div class="description">Mô tả về sản phẩm thiết bị điện
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="price">130.000 vnđ</div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="cart">
                                                                <img src="images/icon_cart_green.png" alt="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of repeat 3 -->
                            </div>
                        </div>
                    </div>
                    <!-- end of wSlider -->
                    <script>
                        $('.item_wrapper', $('#featured-product-slider-2')).bxSlider({
                            slideSelector: '.item-slider',
                            minSlides: 1,
                            maxSlides: 1,
                            pager: false,
                            nextText: " ",
                            prevText: " ",
                            nextSelector: ".featured-product-slider-next-2",
                            prevSelector: ".featured-product-slider-prev-2"
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                @include("layouts.elements.sidebar")
            </div>
        </div>
    </div>
@endsection