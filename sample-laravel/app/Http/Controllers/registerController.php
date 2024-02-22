<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class registerController extends Controller
{
  public function showFormRegister()
  {
    return view("admin.register", ["title" => "Đăng ký "]);
  }
  public function register(Request $request)
  {
    $user = DB::select('select * from users where phone=?', [$request->phone]);

     $request->validate([
      'username' => 'required   max: 10',
      'name' => 'required',
      'phone' => 'required | unique:users,phone',
      'password' => 'required | min: 6 | max: 255',
    ]);

    $user = User::create([
        'name'=>$request->name,
        'phone'=>$request->phone,

        'password'=>bcrypt($request->password),

    ]
);

    return view("admin.login", ["title" => "Đăng nhập "]);

  }
}
