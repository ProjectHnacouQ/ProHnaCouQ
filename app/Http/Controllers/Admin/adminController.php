<?php

	namespace App\Http\Controllers\Admin;
	
	use App\Http\controllers\Controller;
	use App\models\category;

	/**
	  * 
	  */
	 class adminController extends Controller
	 {
	 	
	 	public function index(){
	 		return view('admin.index',);
	 	}
	 	public function admin(){
	 		return view('admin.master.admin');
	 	}


	 	
	 } 


 ?>