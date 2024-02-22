<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $title = "Tìm kiếm sản phẩm";

        $search = DB::table('products')->where('name', 'like', '%' . $request->key . '%')->get();
        $key = $request->key;
        // dd($search );
        $count = count($search->toArray());

        return view('user.searchProduct', compact('title', 'search', 'key', 'count'));
    }
}
