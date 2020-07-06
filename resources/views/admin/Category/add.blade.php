@extends('admin.master.admin')

@section('title','Thêm Danh mục Category')
@section('content')
<form action="" method="POST" role="form">
	@csrf
	<div class="form-group">
		<label for="">Tên Danh Mục</label>
		<input type="text" class="form-control" name="name" id="" placeholder="Input field">
	</div>
	<button type="submit" class="btn btn-primary">ADD</button>
</form>
@stop()