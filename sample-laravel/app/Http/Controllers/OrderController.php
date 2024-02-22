<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index($id)
    {
        $mua_hang = DB::select('select * from products where id_product=?', [$id]);
        Cart::add(['id' => $mua_hang[0]->id_product, 'name' => $mua_hang[0]->name, 'qty' => 1, 'price' => $mua_hang[0]->price, 'weight' => 1]);

        return redirect()->route("giohang");
    }
    public function giohang()
    {
        $title = 'Quản lý đơn hàng';
        $content = Cart::Content();
        $totalPrice = Cart::initial();

        // dd($content['8cbf215baa3b757e910e5305ab981172']->id);
        return view('user.pay', compact('title', 'content', 'totalPrice'));
    }

    public function xoa($id)
    {
        $title = 'Quản lý đơn hàng';
        Cart::remove($id);

        // dd($content['8cbf215baa3b757e910e5305ab981172']->id);
        return redirect()->route("giohang");
    }
    public function cong($id, $qty)
    {
        $title = 'Quản lý đơn hàng';
        Cart::update($id, $qty + 1);
        // dd($content['8cbf215baa3b757e910e5305ab981172']->id);
        return redirect()->route("giohang");
    }
    public function tru($id, $qty)
    {
        $title = 'Quản lý đơn hàng';
        Cart::update($id, $qty - 1);
        // dd($content['8cbf215baa3b757e910e5305ab981172']->id);
        return redirect()->route("giohang");
    }
    public function dathang(Request $request)
    {
         $dataBill = array();
        $dataBill['name_receive'] = $request->namePay;
        $dataBill['detail_address_receive'] = $request->address;
        $dataBill['district_address_receive'] = $request->district;
        $dataBill['province_address_receive'] = $request->city;
        $dataBill['ward_address_receive'] = $request->ward;
        if ($request->bank == "on") {
            $dataBill['money_transfer_form'] = 1;
        } else {
            $dataBill['money_transfer_form'] = 0;
        }
        ;
        if(Auth::check()==true){
            $dataBill['id_user'] = Auth::user()->id_user;
        }

        $dataBill['phone_receive'] = $request->phone;
        $dataBill['email_receive'] = $request->email;
        $dataBill['created_at'] = Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
        $dataBill['total_price'] = intval(preg_replace('/[^\d.]/', '', Cart::initial()));

        $dataBill['quantity'] = Cart::count();
        // dd($dataBill);

        $idBill = DB::table('bill')->insertGetId($dataBill);
    //   dd(DB::select('select * from bill where id_bill=?', [$idBill])[0]);
         $dataBillDetail = array();
        foreach (Cart::Content()->toArray() as $item) {
              $dataBillDetail['quantity'] = $item["qty"];
            $dataBillDetail['id_product'] = $item["id"];
            $dataBillDetail['id_bill'] = $idBill;

            DB::table('bill_detail')->insertGetId($dataBillDetail);
        }


        Cart::destroy();
        return redirect()->route("giohangthanhcong");
    }
    public function them($id, Request  $request)
    {
          $mua_hang = DB::select('select * from products where id_product=?', [$id]);


        $title = 'Quản lý đơn hàng';
        Cart::add(['id' => $mua_hang[0]->id_product, 'name' => $mua_hang[0]->name, 'qty' => 1, 'price' => $mua_hang[0]->price, 'weight' => 1]);
        //  Cart::update($id, $request->qty + 1);
        // dd($content['8cbf215baa3b757e910e5305ab981172']->id);
        return redirect()->route("giohang");
    }



    public function thanhcong( )
    {
        $title = "đặt hàng thành công";
         return view('/user/giohangthanhcong',compact('title'));
    }
}
