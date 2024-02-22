<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class CategoriesController extends Controller
{

    public function index($id)
    {
        $title = "Danh mục sản phẩm";

        return view('user.category', compact('title'));
     }
    public function detail($id)
    {
        // $category_detail = DB::select('SELECT * FROM products WHERE id_category =?', [$id]);
        $category_detail = Category::where('id_category', '=', $id)->paginate(8);

        $name = DB::select('SELECT name_categories FROM categories WHERE id_categories =?', [$id]);

        $title = $name[0]->name_categories;

        return view('user.categoryDetail', compact('title', 'category_detail'));
     }
}
