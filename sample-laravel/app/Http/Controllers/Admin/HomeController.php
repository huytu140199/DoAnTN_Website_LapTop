<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;

class HomeController extends \App\Http\Controllers\Controller
{
    public function index(){
        // dd(auth()->user()->id);

        $title = 'Trang chủ';

        $a = 0;

        $allCustomer = DB::select('SELECT count(1) AS allCustomer FROM users');
        $customerLastMonth = DB::select('SELECT count(1) AS customerLastMonth FROM users WHERE MONTH(created_at) = 11');
        $customerThisMonth = DB::select('SELECT count(1) AS customerThisMonth FROM users WHERE MONTH(created_at) = 12');
        $a = round((abs($customerThisMonth[0]->customerThisMonth-$customerLastMonth[0]->customerLastMonth)/$customerLastMonth[0]->customerLastMonth*100), 2);
        $b = round((abs($customerThisMonth[0]->customerThisMonth-$customerLastMonth[0]->customerLastMonth)/$customerLastMonth[0]->customerLastMonth*100), 2);

        $allOrders = DB::select('SELECT count(1) AS allOrders FROM bill');
        $ordersLastMonth = DB::select('SELECT count(1) AS ordersLastMonth FROM bill WHERE MONTH(created_at) = 11');
        $ordersThisMonth = DB::select('SELECT count(1) AS ordersThisMonth FROM bill WHERE MONTH(created_at) = 12');
        $c = round((abs($ordersThisMonth[0]->ordersThisMonth-$ordersLastMonth[0]->ordersLastMonth)/$ordersLastMonth[0]->ordersLastMonth*100), 2);
        $d = round((abs($ordersThisMonth[0]->ordersThisMonth-$ordersLastMonth[0]->ordersLastMonth)/$ordersLastMonth[0]->ordersLastMonth*100), 2);

        $totalRevenue = DB::select('SELECT SUM(total_price) AS totalRevenue FROM bill');
        $format = number_format(($totalRevenue[0]->totalRevenue)-0.1);
        $revenueLastMonth = DB::select('SELECT SUM(total_price) AS revenueLastMonth FROM bill WHERE MONTH(created_at) = 11');
        $revenueThisMonth = DB::select('SELECT SUM(total_price) AS revenueThisMonth FROM bill WHERE MONTH(created_at) = 12');
        $e = round((abs($revenueThisMonth[0]->revenueThisMonth-$revenueLastMonth[0]->revenueLastMonth)/$revenueLastMonth[0]->revenueLastMonth*100), 2);
        $f = round((abs($revenueThisMonth[0]->revenueThisMonth-$revenueLastMonth[0]->revenueLastMonth)/$revenueLastMonth[0]->revenueLastMonth*100), 2);

        // dd($a);

         return view('admin.home', compact('title', 'allCustomer','customerLastMonth','customerThisMonth', 'a', 'b', 'allOrders', 'ordersLastMonth', 'ordersThisMonth', 'c', 'd', 'totalRevenue','revenueLastMonth','revenueThisMonth','e','f','format'));
    }

}
