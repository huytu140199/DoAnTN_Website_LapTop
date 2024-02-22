<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function  showFormLogin(){
        return view("admin.login",["title"=>"Đăng nhập "]);
     }

    // public function checkLogin(Request $request)
    // {
    //     $title = "dsas";
    //     return redirect("user");

    // }
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
     }
    public function checkLogin(Request  $request){
       $user= DB::select('select * from users where phone=?', [ $request->phone]);

      $rules=[
        'phone'=>'required|max:10|numeric',
      ];

      $messages=[
        'required' => ':attribute Không được để trống',
       'max' => ':attribute không được lớn hơn :max ký tự.',
      'numeric'=>'Nhập đúng định dạng :attribute',
      ];
      $customName = [
        'phone' => 'Số điện thoại',
        'password' => 'Mật khẩu',
     ];

      if (!$user) {
        Session::flash('error',"Tài khoản không tồn tại");
        return redirect()->route("login");
      }
        // $this->validate($request, $rules, $messages,$customName);

      if (!\Hash::check($request->password, $user[0]->password )) {
        Session::flash('error',"Tài khoản hoặc mật khẩu không chính xác");
        return redirect()->route("login");
      }

      $attributes= [
        'phone' => $request->phone,
        'password' => $request->password,
      ];
      if ($this->auth->attempt(['phone'=>$request->phone,'password'=>$request->password,'level'=>1])) {

             return redirect('/user');

        }
      else if(\Auth::attempt(['phone'=>$request->phone,'password'=>$request->password,'level'=>0])){

          return redirect()->route("homeAdmin");
      }

      Session::flash('error',"Số điện thoại hoặc mật khẩu không chính xác");
      return redirect()->back();
    }

    public function logout(){
        auth()->logout();
        return redirect('/login');
     }
}
