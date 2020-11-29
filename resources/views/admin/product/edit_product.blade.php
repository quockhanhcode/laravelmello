@extends('admin.admin_layout')
@section('content')
<div class="jumbotron-fluid">
  <div class="container-fluid text-center">
    <h3>Sửa thông tin sản phẩm</h3>
  </div>
</div>
@foreach($edit_product as $key => $edit)
<form action="{{URL::to('/update-product',$edit->product_id)}}" method="post" enctype="multipart/form-data" >
{{csrf_field()}}
  <div class="form-group">
    <label>Tên sản phẩm</label>
    <input value="{{$edit->product_name}}" name="product_name" class="form-control" required>
  </div>

  <div class="form-group">
    <label>Giá tiền</label>
    <input value="{{$edit->product_price}}" name="product_price" class="form-control" required>
  </div>

  <div class="form-group">
    <label>Mô tả</label>
    <textarea name="product_desc" class="form-control" required>{{$edit->product_desc}}</textarea>
  </div>

  <div class="form-group">
    <label>Nội dung</label>
    <textarea name="product_content" class="form-control" required>{{$edit->product_content}}</textarea>
    <div class="invalid-feedback">
       Không được bỏ trống
      </div>
  </div>


  <div class="form-group">
    <label>Danh mục</label>
    <select name="list_category" class="form-control">
    @foreach($category_product as $key => $cate)
    @if($cate->category_id == $edit->category_id)
      <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
      @else
      <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
      @endif
    @endforeach
    </select>
  </div>

  <div class="form-group">
    <label>Hình ảnh</label>
    <input name="product_image" type="file" class="form-control-file">
    <img name="product_image" height="100" width="100" src="{{URL::to('images/'.$edit->product_image)}}" alt="">
  </div>

  <button type="submit" class="btn btn-info">Thay đổi</button>
</form>
@endforeach
@endsection