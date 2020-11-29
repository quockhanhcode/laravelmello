@extends('admin.admin_layout')
@section('content')
<div class="jumbotron-fluid">
  <div class="container-fluid text-center">
    <h3>Thêm danh mục</h3>
  </div>
</div>
<form action="{{URL::to('/save-category')}}" method="post">
{{csrf_field()}}
  <div class="form-group">
    <label>Tên danh mục</label>
    <input type="" name="category_name" class="form-control">
  </div>
  <button type="submit" name="add_category_product" class="btn btn-info">Thêm</button>
</form>
@endsection
