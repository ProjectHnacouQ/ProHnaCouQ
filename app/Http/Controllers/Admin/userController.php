<?php 

	namespace App\Http\Controllers\Admin;

	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	use App\User;

	/**
	 * 
	 */
	class userController extends Controller
	{
		
		public function index(){
    	$cat = User::all();
    	$cat = User::paginate(5);
    	return view('admin.user.index',['cats'=>$cat]);
    	
     }
     public function add(){
     	return view('admin.user.add');

     }

     public function post_add(Request $request){
     	$this->validate($request,[
     		'name' => 'required',
     		'email'=>'required | email | unique:users,email',
     		'password'=>'required',
     		
     	],[
     		'name.required' => 'Tên Tài Khoản Không Được Để Trống',
     		'email.required' => 'Email Không Được Để Trống',
     		'email.email' => 'Email Không Đúng Định Dạng ...@gmail.com',
     		'email.unique' => 'Email đã có người sử dụng',
     		'password.required' => 'password không được để trống',
     		
     	]);
     	$password = bcrypt($request->password);
     	$request->merge(['password' => $password]);
     	User::create($request->all());
     	return redirect()->route('user_index')->with('success','Thêm mới Thành Công');

     }
      public function delete($id){
     	User::find($id)->delete();

     	return redirect()->back()->with('success','Xóa Thành Công');
     }
	}


 ?>