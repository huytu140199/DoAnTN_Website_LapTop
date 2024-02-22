<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;

class UserController extends \App\Http\Controllers\Controller
{


    public function index()
    {
        $title = 'Danh sách khách hàng';

        $users = \App\Models\User::paginate(25);
        // dd($users[0]);
        return view('admin.user', compact('title', 'users'))->with('i', (request()->input('page', 1) - 1) * 2);
    }


    public function history($id)
    {
        $title = 'Lịch sử mua hàng ';
        $history = DB::select('SELECT DISTINCT  bill.id_bill, bill.created_at, products.name, bill.quantity, products.price, bill.total_price, users.name as userName
        FROM bill_detail
        JOIN  bill on bill_detail.id_bill = bill.id_bill
        JOIN products ON products.id_product= bill_detail.id_product
        JOIN users ON users.id_user= bill.id_user
        WHERE bill.id_user=?', [$id]);
$nameUser=  DB::select('select name from users where id_user=?', [$id]);
         $sum_total_price = DB::select('SELECT SUM(bill.total_price) as total
        FROM bill_detail
        JOIN  bill on bill_detail.id_bill = bill.id_bill
        JOIN products ON products.id_product= bill_detail.id_product
        JOIN users ON users.id_user= bill.id_user
        WHERE bill.id_user=?', [$id]);

         return view('admin.purchase_history', compact('title', 'history','nameUser', 'sum_total_price'));

    }

    public function delete($id)
    {


        $deleteComment = DB::delete('delete from comment where id_user=?', [$id]);
        $delete = DB::delete('delete from users where id_user=?', [$id]);

        return redirect()->route("userHome");
    }


    public function edit($id)
    {
        $title = 'Sửa thông tin user';
        $users = DB::select('SELECT * FROM users where id_user=?', [$id]);
        return redirect()->route("userHome", compact('title', 'users'));
    }
}
