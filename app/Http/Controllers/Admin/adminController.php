<?php

	namespace App\Http\Controllers\Admin;
	
	use Illuminate\Http\Request;
	use App\Http\controllers\Controller;
	use App\models\category;
	use Auth;

	/**
	  * 
	  */
	 class adminController extends Controller
	 {
	 	
	 	public function index(){
	 		return view('admin.index');
	 	}
	 	public function admin(){
	 		return view('admin.master.admin');
	 	}
	 	public function login(){
			return view('admin.login');	 	
		}
		public function logout(){
			Auth::logout();
			return redirect()->route('login');	 	
		}
		public function post_login(request $request){
			$this->validate($request,[
				'email'=>'required|email',
				'password'=>'required',


			],[
				'email.required'=>'mật khẩu không đc để trống nhé!!',
				'email.email'=>'email không đúng định dạng!',
				'password.required'=>'bạn chưa nhập pass word!!',
			]);

			if(Auth::attempt($request->only('email','password'),$request->has('rmb'))){
				return redirect()->route('index')->with('login_noti','Chào mừng Admin');
			}else{
				return redirect()->back()->with('login_noti','Sai tài khoản hoặc mật khẩu!!');
			}
				 	
		}
		



	 	
	 } 


 ?>