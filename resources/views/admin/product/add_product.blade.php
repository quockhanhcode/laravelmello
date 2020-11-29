@extends('admin.admin_layout')
@section('content')
<div class="jumbotron-fluid">
  <div class="container-fluid text-center">
    <h3>Thêm sản phẩm</h3>
  </div>
</div>
<form action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data" >
{{csrf_field()}}
  <div class="form-group">
    <label>Tên sản phẩm</label>
    <input name="product_name" class="form-control" required>
  </div>

  <div class="form-group">
    <label>Giá tiền</label>
    <input name="product_price" class="form-control" required>
  </div>

  <div class="form-group">
    <label>Mô tả</label>
    <textarea name="product_desc" class="form-control" required></textarea>
  </div>

  <div class="form-group">
    <label>Nội dung</label>
    <textarea name="product_content" class="form-control" required></textarea>
  </div>

  <div class="form-group">
    <label>Danh mục</label>
    <select name="list_category" class="form-control">
    @foreach($category_product as $key => $cate)
      <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label>Hình ảnh</label>
    <input name="product_image" type="file" class="form-control-file">
  </div>

  <button type="submit" name="add_product" class="btn btn-info">Thêm</button>
</form>
@endsection