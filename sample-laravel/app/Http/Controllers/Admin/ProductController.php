<?php

namespace App\Http\Controllers\Admin;

use App\Models\Products;
use App\Models\User;

use Illuminate\Http\Request;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends \App\Http\Controllers\Controller
{


    public function index()
    {
        $title = 'Quản lý sản phẩm';

        $products = Products::join('brand', 'brand.id_brand', '=', 'products.id_brand')
            ->join('supplier_brand', 'brand.id_brand', '=', 'supplier_brand.id_brand')
            ->join('supplier', 'supplier.id_supplier', '=', 'supplier_brand.id_supplier')
            ->join('categories', 'categories.id_categories', '=', 'products.id_category')
            ->select("name_categories", "name_supplier", "name", "image", "price", "quantity", "id_product")
            ->paginate(25);

        return view('admin.product', compact('title', 'products'));
    }
    public function getProduct()
    {
        $title = 'Thêm mới sản phẩm';

        $supplier = DB::select('SELECT * FROM supplier ');
        $brand = DB::select('SELECT * FROM brand ');
        $categories = DB::select('SELECT * FROM categories ');
        $getProduct = DB::select('SELECT * FROM categories');
         return view('admin.add_product', compact('title', 'getProduct', 'supplier', 'brand', 'categories'));
    }

    public function add(Request $request)
    {
        if($request->has('file_image')){
            $file = $request->file_image ;
            $ext = $request->file_image->extension();
            $file_name ='/images/'. time() . '_' . 'products.' . $ext;
            // dd($file_name);
            // dd($file_name);
            $file->move(public_path('images'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        // dd($request->all());
         $product = [
            'id_brand' => $request->id_brand,
            'id_category' => $request->id_category,
            'name' => $request->name,
            'price' => $request->price,
             'ram' => $request->ram,
            'image' => $request->image,
            'cpu' => $request->cpu,
            'capacity' => $request->capacity,
            'description' => $request->description,

        ];
        //   dd($product);
          Products::create($product);
        return redirect()->route("homeProduct");
    }

    public function edit_product($id)
    {
        $title = 'Sửa thông tin sản phẩm';

        $product = DB::select('SELECT * FROM products  WHERE id_product=?', [$id]);

        $supplier = DB::select('SELECT * FROM supplier ');
        $brand = DB::select('SELECT * FROM brand ');
        $categories = DB::select('SELECT * FROM categories ');

        $products = DB::select('SELECT supplier.name_supplier, categories.name_categories,brand.name_brand,  products.name, products.price, products.image,products.ram,products.cpu, products.capacity,products.description, products.quantity,products.id_product FROM supplier
         JOIN supplier_brand on supplier.id_supplier = supplier_brand.id_supplier
         JOIN brand ON supplier_brand.id_brand= brand.id_brand
         JOIN products ON products.id_brand=brand.id_brand
         JOIN categories ON products.id_category=categories.id_categories  WHERE id_product=?', [$id]);
        return view('admin.edit_product', compact('products', 'supplier', 'brand', 'categories', 'title'));


        //  SELECT DISTINCT supplier.name_supplier
        // FROM supplier
        // JOIN  supplier_brand on brand.id_brand = supplier_brand.id_brand
        // JOIN brand ON brand.id_brand= supplier.id_brand
        // JOIN categories ON categories.id_categories= brand.
        // WHERE bill.id_user='36'//lỗi
    }
    public function update_product(Request $request, $id)
    {
        $title = 'Tất cả sản phẩm';

        //  $id_supplier = $request->input('id_supplier');

        $id_brand = $request->input('id_brand');

        if($request->has('img')){
            $file = $request->img ;
            $ext = $request->img->extension();
            $file_name ='/images/'. time() . '_' . 'products.' . $ext;
            // dd($file_name);
            // dd($file_name);
            $file->move(public_path('images'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        $id_categories = $request->input('id_categories');
        $name = $request->input('name');
        $price = $request->input('price');
        $img = $request->input('img');
        $ram = $request->input('ram');
        $cpu = $request->input('cpu');
        $capacity = $request->input('capacity');
        $description = $request->input('description');

        DB::update('update products set    id_brand=?, id_category=? ,name=?, price=?, image=?, ram=?, cpu=?,   capacity=?,  description=? where id_product = ?', ["$id_brand", "$id_categories", "$name", "$price", "$file_name", "$ram", "$cpu", " $capacity", "$description", "$id"]);
        return redirect()->route("homeProduct");
    }
    public function delete($id)
    {


        $delete = DB::delete('delete from products where id_product=?', [$id]);
        return redirect()->route("homeProduct");
    }

    public function getCategories()
    {
        $title = 'Danh mục sản phẩm';

        $categories = DB::select('SELECT * FROM categories JOIN products ON products.id_category=categories.id_categories');
        return view('admin.categories', compact('categories', 'title'));
    }

    public function importProduct(Request $request, $id, $quantity)
    {
        $title = 'Nhập kho';
        dd($request);
        $quantityOld = DB::select('SELECT quantity FROM products where id_product =?', [$id]);
        // dd($quantityOld);
          $quantityNew = (int)$quantity + $quantityOld[0]->quantity;

          DB::update(' UPDATE   products   SET  quantity=?  WHERE  id_product = ?', [$quantityNew,$id]);
            return redirect()->route("homeProduct");
    }
}
