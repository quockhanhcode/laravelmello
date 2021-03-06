@extends('admin.admin_layout')
@section('content')
<div class="jumbotron-fluid">
  <div class="container text-center">
    <h3>Danh Sách Sản Phẩm</h3>
  </div>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tên</th>
                                            <th>Giá tiền</th>
                                            <th>Mô tả</th>
                                            <th>Nội dung</th>
                                            <th>Danh mục</th>
                                            <th>Hình ảnh</th>
                                            <th>Tùy chỉnh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($show_product as $key => $pro)
                                        <tr>
                                            <td>{{$pro->product_name}}</td>
                                            <td>{{$pro->product_price}}</td>
                                            <td>{{$pro->product_desc}}</td>
                                            <td>{{$pro->product_content}}</td>
                                            <td>{{$pro->category_name}}</td>
                                            <td><img style="width:200px;height:170p" src="public/images/{{$pro->product_image}}" alt=""></td>
                                            <td>
                                            <a href="{{URL::to('/edit-product',$pro->product_id)}}" type="button" class="btn btn-warning">Thay Đổi</a>
                                            <a onclick="return confirm('Are you sure?')" href="{{URL::to('/delete-product',$pro->product_id)}}" type="button" class="btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                @endsection