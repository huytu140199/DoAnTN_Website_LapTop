<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchProductController extends Controller
{
    public function index(Request $request){
        $count = 0;
        $title = "Tìm kiếm sản phẩm";



         $products= Products::join('brand', 'brand.id_brand', '=', 'products.id_brand')
         ->join('supplier_brand', 'brand.id_brand', '=', 'supplier_brand.id_brand')
         ->join('supplier', 'supplier.id_supplier', '=', 'supplier_brand.id_supplier')
         ->join('categories', 'categories.id_categories', '=', 'products.id_category')
         ->select("name_categories", "name_supplier", "name", "image", "price", "quantity", "id_product")
         ->where('name', 'like', '%' . $request->key . '%')->paginate(25);

         $productscount = Products::join('brand', 'brand.id_brand', '=', 'products.id_brand')
         ->join('supplier_brand', 'brand.id_brand', '=', 'supplier_brand.id_brand')
         ->join('supplier', 'supplier.id_supplier', '=', 'supplier_brand.id_supplier')
         ->join('categories', 'categories.id_categories', '=', 'products.id_category')
         ->select("name_categories", "name_supplier", "name", "image", "price", "quantity", "id_product")
         ->where('name', 'like', '%' . $request->key . '%')->get();
          $count =  count($productscount->toArray());
          $key = $request->key;

        return view('admin.productSeach', compact('title', 'products', 'key', 'count'));

    }

}
