@extends('admin.master.admin');

 @section('content')
 @if(Session::has('login_noti'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {{Session::get('login_noti')}}
        </div>
        @endif
 	<div class="jumbotron">
 		<div class="container">
 			<h1>Hello, world!</h1>
 			<p>Contents ...</p>
 			<p>
 				<a class="btn btn-primary btn-lg">Learn more</a>
 			</p>
 		</div>
 	</div>
 @stop()