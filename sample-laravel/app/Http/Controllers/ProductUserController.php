<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use DB;

class ProductUserController extends Controller
{
    public function index(Request $request){
        $brand = $request->query("brand");
        $price = $request->query("price");
        $all_products = Products::select("*")->paginate(12);

        $listSp = $this->fixdataSP();
        $listPrice = $this->fixdataPrice();
        $title = "Tất cả sản phẩm";
        $dataView = [
            "listSP" => $listSp,
            "listPrice" => $listPrice,
            "all_products" => $all_products,
            "title" => $title
        ];
        return view('user.allproduct',  $dataView);
    }

    public function detail($id)
    {
        $title = "Chi tiết sản phẩm";

        $products_detail = DB::select('SELECT * FROM products WHERE id_product =?', [$id]);

        $id_brand = DB::select('SELECT id_brand FROM products WHERE id_product =?', [$id]);

        $a = $id_brand[0]->id_brand;

        $count = 1;

        $products_relate = DB::select('SELECT * FROM products  WHERE id_brand =? LIMIT 4' , [$a] );

        return view('user.ProductDetail', compact('title', 'products_detail', 'count', 'products_relate'));
    }

    public function fixdataSP(){
        return [
            0 => [
                "id" => "asus",
                "title" => "Tất cả"
            ],
            1 => [
                "id" => "acer",
                "title" => "asus"
            ],
            2 => [
                "id" => "lenovo",
                "title" => "acer"
            ],
            3 => [
                "id" => "dell",
                "title" => "lenovo"
            ],
            4 => [
                "id" => "apple",
                "title" => "dell"
            ],
        ];
    }

    public function fixdataPrice(){
        return [
            0 => [
                "id" => "123",
                "title" => "1-2"
            ],
            1 => [
                "id" => "22",
                "title" => "3-4"
            ],
            2 => [
                "id" => "2",
                "title" => "5-6"
            ],

        ];
    }
}
