<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchBillController extends Controller
{
    public function index(Request $request ){

        $title = 'Quản lý đơn hàng';
        // $billcount = DB::table('bill')->join('users','users.id_user','=','bill.id_user')->where('name', 'like', '%' . $request->key . '%')->get();
        $billcount = Bill::join('users','users.id_user','=','bill.id_user')->where('name_receive', 'like', '%' . $request->key . '%')->get();

         $bill=Bill::join('users','users.id_user','=','bill.id_user')->where('name_receive', 'like', '%' . $request->key . '%')->paginate(25);

         $count =  count($billcount->toArray());
         $key = $request->key;
                  return view('admin.billSeach', compact('title', 'bill','key','count'));

    }
}
