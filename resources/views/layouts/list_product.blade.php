@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8">
            @include("layouts.elements.breadcrumb")
            <div class="title-page">
                <div class="name pull-left">Mỹ phẩm</div>
                <div class="filter-box pull-right">
                    <div class="label">Sắp xếp</div>
                    <div class="select select-inline">
                        <select name="" class="form-control">
                            <option>Giá giảm dần</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="list-product-grid">
                <!-- Repeat 6 -->
                <div class="item">
                    <div class="item-wrapper">
                        <a href="#" class="photo">
                            <img src="images/product-01.jpg" alt="">
                        </a>
                        <a href="#" class="name">Nga Phụ Khang</a>
                        <div class="description">Vì sức khỏe buồn trứng và tuyến tiền liệt
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
                        <a href="#" class="name">Nga Phụ Khang</a>
                        <div class="description">Vì sức khỏe buồn trứng và tuyến tiền liệt
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
                        <a href="#" class="name">Nga Phụ Khang</a>
                        <div class="description">Vì sức khỏe buồn trứng và tuyến tiền liệt
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
                        <a href="#" class="name">Nga Phụ Khang</a>
                        <div class="description">Vì sức khỏe buồn trứng và tuyến tiền liệt
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
                        <a href="#" class="name">Nga Phụ Khang</a>
                        <div class="description">Vì sức khỏe buồn trứng và tuyến tiền liệt
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
                        <a href="#" class="name">Nga Phụ Khang</a>
                        <div class="description">Vì sức khỏe buồn trứng và tuyến tiền liệt
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
            </div><!--end of list-->
            <div class="pager">
                <div class="show-status pull-left">1 - 100 của 122 sản phẩm</div>
                <ul class="pagination pull-right">
                    <li>
                        <a href="#" aria-label="Previous">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                @include("layouts.elements.sidebar")
            </div>
        </div>
    </div>
@endsection