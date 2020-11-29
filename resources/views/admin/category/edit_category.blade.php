@extends('admin.admin_layout')
@section('content')
<div class="jumbotron-fluid">
  <div class="container-fluid text-center">
    <h3>Thay đổi thông tin danh mục</h3>
  </div>
</div>
@foreach($edit_category as $key => $edit)
<form action="{{URL::to('/update-category',$edit->category_id)}}" method="post">
{{csrf_field()}}
  <div class="form-group">
    <label>Tên danh mục</label>
    <textarea name="category_name" class="form-control">{{$edit->category_name}}</textarea>
  </div>
  <button type="submit" class="btn btn-info">Thay đổi</button>
</form>
@endforeach
@endsection
