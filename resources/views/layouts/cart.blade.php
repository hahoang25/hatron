@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="cart-page">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th colspan="2">Bảng kê chi tiết</th>
                            <th colspan="2" class="text-right">
                                <a href="#" class="btn btn-primary btn-sm"> Tiếp tục mua hàng</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <a href="#" class="photo"><img src="images/product-01.jpg" alt=""></a>
                                <div class="info">
                                    <div class="name">Nga phụ khang</div>
                                    <div class="price">130.000 vnđ</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <input type="text" class="quantity" value="1">
                            </td>
                            <td class="text-center">
                                <div class="price">520.000 vnđ</div>
                            </td>
                            <td class="actions text-center">
                                <a href="#"><i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="photo"><img src="images/product-01.jpg" alt=""></a>
                                <div class="info">
                                    <div class="name">Nga phụ khang</div>
                                    <div class="price">130.000 vnđ</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <input type="text" class="quantity" value="1">
                            </td>
                            <td class="text-center">
                                <div class="price">520.000 vnđ</div>
                            </td>
                            <td class="actions text-center">
                                <a href="#"><i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="photo"><img src="images/product-01.jpg" alt=""></a>
                                <div class="info">
                                    <div class="name">Nga phụ khang</div>
                                    <div class="price">130.000 vnđ</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <input type="text" class="quantity" value="1">
                            </td>
                            <td class="text-center">
                                <div class="price">520.000 vnđ</div>
                            </td>
                            <td class="actions text-center">
                                <a href="#"><i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="photo"><img src="images/product-01.jpg" alt=""></a>
                                <div class="info">
                                    <div class="name">Nga phụ khang</div>
                                    <div class="price">130.000 vnđ</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <input type="text" class="quantity" value="1">
                            </td>
                            <td class="text-center">
                                <div class="price">520.000 vnđ</div>
                            </td>
                            <td class="actions text-center">
                                <a href="#"><i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="photo"><img src="images/product-01.jpg" alt=""></a>
                                <div class="info">
                                    <div class="name">Nga phụ khang</div>
                                    <div class="price">130.000 vnđ</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <input type="text" class="quantity" value="1">
                            </td>
                            <td class="text-center">
                                <div class="price">520.000 vnđ</div>
                            </td>
                            <td class="actions text-center">
                                <a href="#"><i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
        <div class="col-md-4">
            <div class="cart-page">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Thông tin khách hàng</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <form action="">
                                <p>Quý khách vui lòng điền đầy đủ thông tin dưới đây để chúng tôi liên lạc lại, tư vấn hình thức thanh toán và vận chuyển hợp lý nhất.</p>
                                <input type="text" class="form-control" placeholder="Số điện thoại"/>
                                <input type="text" class="form-control" placeholder="Email"/>
                                <input type="text" class="form-control" placeholder="Họ và tên"/>
                                <textarea class="form-control" placeholder="Địa chỉ giao hàng + Ghi chú (nếu có)"></textarea>
                                <button type="submit" class="btn btn-success btn-block">Gửi đơn hàng</button>
                            </form>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection