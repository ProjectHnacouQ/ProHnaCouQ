@extends('admin.master.admin')

@section('title','Category')
@section('content')
	<form action="" method="POST" class="form-inline" role="form">
	
		<div class="form-group">
			<label class="sr-only" for="">label</label>
			<input type="email" class="form-control" id="" placeholder="Input field">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Search</button>
		<span><a href="{{ route('cate_add')}}" class="btn btn-primary  ">ADD</a></span>
	</form>

	<table class="table table-hover ">
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>status</th>
				<th>created_at</th>
				<th>Tùy Chọn</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cats as $cat)
			<tr>
				<td>{{$cat->id}}</td>
				<td>{{$cat->name}}</td>
				<td>{{$cat->status}}</td>
				<td>{{$cat->created_at}}</td>
			
				<td>
					<a href="{{ route('cate_del',['id' => $cat->id])}}" class="btn btn-danger  " onclick="return confirm('bạn có chắc không?')">Delete</a>
					<a href="{{ route('cate_update',['id' => $cat->id])}}" class="btn btn-success ">Update</a>
					
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="clearfix container">
		{{$cats->links()}}
	</div>
@stop()