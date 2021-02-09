@extends('home')
@section('content')
<?php
$content = Cart::content();
?>
<h2 class="text-center">Thanh Toán Giỏ Hàng</h2>
<div class="container">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:50%">Tên sản phẩm</th>
                <th style="width:10%">Giá</th>
                <th style="width:8%">Số lượng</th>
                <th style="width:10%"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach($content as $cart_content)
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs"><img
                                src="{{URL::to('images/' .$cart_content->options->image)}}"
                                alt="" class="img-responsive" width="100">
                        </div>
                        <div class="col-sm-10">
                            <h4 class="nomargin">{{$cart_content->name}}</h4>
                        </div>
                    </div>
                </td>
                <td data-th="Price">{{number_format($cart_content->price).'VNĐ'}}</td>
                <form action="{{URL::to('update-cart')}}" method="post">
                {{csrf_field()}}
                <td><input class="form-control text-center" name="quantity" value="{{$cart_content->qty}}" type="number"></td>
                <input type="hidden" value="{{$cart_content->rowId}}" name="rowId_cart">
                <td class="actions" data-th="">
                    <input type="submit" value="Cập nhật" class="btn btn-info btn-sm"></input>
                </form>
                    <a href="{{URL::to('/delete-to-cart/'.$cart_content->rowId)}}" onclick="return confirm('Are you sure?');"
                     class="btn btn-danger btn-sm"><i class="fa fa-trash-o">Xóa</i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>Tổng 200.000 đ</strong>
                </td>
            </tr>
            <tr>
                <td><a href="{{URL::to('/')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục
                        mua hàng</a>
                </td>
                <td colspan="2" class="hidden-xs"> </td>
                <td class="hidden-xs text-center"><strong>Tổng tiền {{Cart::subtotal().'VNĐ'}}</strong>
                </td>
                <td><a href="" class="btn btn-success btn-block">Thanh toán <i
                            class="fa fa-angle-right"></i></a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
@endsection