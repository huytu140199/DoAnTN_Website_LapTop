<?php

namespace App\Http\Controllers\Admin;
use App\Models\Bill;
use Illuminate\Http\Request;
use DB;
 class BillController extends \App\Http\Controllers\Controller
{
    public function index(){
        $title = 'Quản lý đơn hàng';

        // $bill =  \App\Models\Bill::join('users', 'bill.id_user', '=', 'users.id_user','right outer left') ->paginate(25);
        $bill=DB::table('bill') ->paginate(25) ;

                  return view('admin.bill', compact('title', 'bill'));
    }
}







