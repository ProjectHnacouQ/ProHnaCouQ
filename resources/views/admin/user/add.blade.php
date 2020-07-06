@extends('admin.master.admin')

@section('title','Thêm Tài Khoản')
@section('content')
<form action="" method="POST" role="form">
	@csrf
	<div class="form-group">
		<label for="">Name</label>
		<input type="text" class="form-control" name="name" id="">
		@if($errors->has('name'))
		{{$errors->first('name')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">Email</label>
		<input type="text" class="form-control" name="email" id="">
		@if($errors->has('email'))
		{{$errors->first('email')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">PassWord</label>
		<input type="password" class="form-control" name="password" id="">
		@if($errors->has('password'))
		{{$errors->first('password')}}
		@endif
	</div>
	
	<button type="submit" class="btn btn-primary">ADD</button>
</form>
@stop()