<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;

class EditProductController extends \App\Http\Controllers\Controller
{
    public function index(){
        $title = 'Cập nhật thông tin sản phẩm';

        $supplier = DB::select('SELECT * FROM supplier');
        dd($supplier);
         return view('admin.edit_product', compact('title', 'supplier'));

    }
}
