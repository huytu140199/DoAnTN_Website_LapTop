<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchUserController extends Controller
{
    public function index(Request $request){
        $title = "Quản lý khách hàng";
        $userscount = DB::table('users')->where('name', 'like', '%' . $request->key . '%')->get();
        $users = DB::table('users')->where('name', 'like', '%' . $request->key . '%')->paginate(25);
        $count =  count($userscount->toArray());
        $key = $request->key;


        return view('admin.userSearch',compact('count','users','title','key'))  ;
   }
}
