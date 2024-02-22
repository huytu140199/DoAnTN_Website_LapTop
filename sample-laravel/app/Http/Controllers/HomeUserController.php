<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeUserController extends Controller
{
    public function index()
    {

         $title = "Trang chủ ";
        $products_office = DB::select('SELECT * FROM `products` WHERE id_category=5');
        $products_gaming = DB::select('SELECT * FROM `products` WHERE id_category=1');
        $products_student = DB::select('SELECT * FROM `products` WHERE id_category=2');


        return view('user.home', compact('title', 'products_office', 'products_gaming', 'products_student'));

     }
}
