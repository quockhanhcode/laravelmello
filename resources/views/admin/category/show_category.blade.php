@extends('admin.admin_layout')
@section('content')
<div class="jumbotron-fluid">
  <div class="container text-center">
    <h3>Danh Mục</h3>
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
                                            <th>Tên danh mục</th>
                                            <th style="width:150px">Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    @foreach($show_category as $key => $cate)
                                    <tbody>
                                        <tr>
                                            <td>{{$cate->category_name}}</td>
                                            <td>
                                            <a href="{{URL::to('/edit-category',$cate->category_id)}}" type="button" class="btn btn-warning">Thay Đổi</a>
                                            <a onclick="return confirm('Are you sure?')" href="{{URL::to('/delete-category',$cate->category_id)}}" type="button" class="btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>
                                    </tbody> 
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                @endsection