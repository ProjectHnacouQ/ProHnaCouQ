<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Category;

class CategoryController extends Controller
{
    //
    
    public function index(){
    	//$cat = Category::all();
    	$cat = Category::paginate(5);
    	return view('admin.category.index',['cats' => $cat]);
    	
     }
     public function cate_del($id){
     	Category::find($id)->delete();

     	return redirect()->back();
     }
     public function add(){
     	return view('admin.category.add');

     }

     public function post_add(Request $request){
     	category::create($request->all());
     	return redirect()->route('cat-index');

     }
      public function update($id){
      	$model = category::find($id);
     	return view('admin.category.update',['models'=>$model]);

     }

     public function post_update($id,Request $request){
     	$request -> offsetUnset('_token');
     	Category::where(['id'=>$id])->update($request->all());
     	return redirect()->route('cat-index');

     }
}

