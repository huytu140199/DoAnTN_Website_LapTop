<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use DB;

class BrandController extends Controller
{
    public function index($id)
    {

        // $brand_detail = DB::select('SELECT * FROM products WHERE id_brand =?', [$id]);
        $brand_detail = Brand::where('id_brand', '=', $id)->paginate(8);

        $name = DB::select('SELECT name_brand FROM brand WHERE id_brand =?', [$id]);


        $title = $name[0]->name_brand;

        return view('user.brandDetail', compact('title', 'brand_detail'));
     }
}
