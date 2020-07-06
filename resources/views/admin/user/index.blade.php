@extends('admin.master.admin')

@section('title','User')
@section('content')
	<form action="" method="POST" class="form-inline" role="form">
	
		<div class="form-group">
			<label class="sr-only" for="">label</label>
			<input type="email" class="form-control" id="" placeholder="Input field">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Search</button>
		<span><a href="{{ route('user_add')}}" class="btn btn-primary  ">ADD</a></span>
	</form>
	@if(Session::has('success'))
		<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{Session::get('success')}}
	</div>
	@endif

	<table class="table table-hover ">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>password</th>
				
				<th>Tùy Chọn</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cats as $cat)
			<tr>
				<td>{{$cat->id}}</td>
				<td>{{$cat->name}}</td>
				<td>{{$cat->email}}</td>			
				<td>{{$cat->password}}</td>			
							
				<td>
					<a href="{{ route('user_delete',['id' => $cat->id])}}" class="btn btn-danger  " onclick="return confirm('bạn có chắc không?')">Delete</a>
					<a href="{{ route('user_update',['id' => $cat->id])}}" class="btn btn-success ">Update</a>
					
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="clearfix container">
		{{$cats->links()}}
	</div>
@stop()