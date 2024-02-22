<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ProductUserController;
use App\Http\Controllers\searchBillController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\searchProductController;
use App\Http\Controllers\searchUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BillController;
use App\Http\Controllers\Admin\EditProductController;



// Route::get('/pay', function () {
//     return view('user.pay', [
//         'title' => 'Thanh toán đơn hàng',
//      ]);
// });

Route::get('/purchase', function () {
    return view('user.purchase ', [
        'title' => 'Trạng thái đơn hàng',
    ]);
});
Route::get('/profile', function () {
    return view('user.ProfileUser ', [
        'title' => 'Trạng thái đơn hàng',
    ]);
});
Route::get('/pay', function () {
    return view('user.Pay ', [
        'title' => 'Trạng thái đơn hàng',
    ]);
});

Route::prefix('user')->group(function () {
    Route::get('/', [HomeUserController::class, 'index'])->name('homeUser');

    //chi tiết sản phẩm
    Route::get('/product_detail/{id}', [ProductUserController::class, 'detail']);
    //tất cả sản phẩm
    Route::get('/all_product', [ProductUserController::class, 'index'])->name('allProduct');
    // thông tin người dùng
    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'index']);
    // danh mục  sản phẩm khi bấm vào laptop đồ hoạ, gaming
    Route::get('/categories/{id}', [CategoriesController::class, 'detail']);
    // danh mục  sản phẩm
    Route::get('/categories', [CategoriesController::class, 'index']);
    //hãng sản phẩm khi bấm vào laptop dell, asus, hp, lenovo, macbook
    Route::get('/brand/{id}', [BrandController::class, 'index']);
    //tìm kiếm sản phẩm
    Route::get('/searchProduct', [SearchController::class, 'index'])->name('searchProduct');


    //nút mua hàng
    Route::get('/muahang/{id}', [OrderController::class, 'index']);
    Route::get('/giohang', [OrderController::class, 'giohang'])->name('giohang');
    Route::get('/giohang/xoa/{id}', [OrderController::class, 'xoa'])->name('xoagiohang');
    Route::get('/giohang/cong/{id}/{qty}', [OrderController::class, 'cong'])->name('conggiohang');
    Route::get('/giohang/tru/{id}/{qty}', [OrderController::class, 'tru'])->name('trugiohang');
     Route::post('/giohang/dathang', [OrderController::class, 'dathang'])->name('nutdathang');
    Route::get('/giohangthanhcong', [OrderController::class, 'thanhcong'])->name('giohangthanhcong');
    Route::get('/giohang/them/{id}', [OrderController::class, 'them'])->name('themgiohang');

});



Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('homeAdmin');

    //lấy ra danh sách sản phẩm
    Route::get('/product', [ProductController::class, 'index'])->name('homeProduct');
    //thêm mới sản phẩm
    Route::post('/addProduct', [ProductController::class, 'add']);
    Route::get('/add_product', [ProductController::class, 'getProduct']);
    //sửa thông tin sản phẩm
    Route::get('/edit_product/{id}', [ProductController::class, 'edit_product']);
    Route::post('/editProduct/{id}', [ProductController::class, 'update_product']);
    //xoá sản phẩm
    Route::get('/delete_product/{id}', [ProductController::class, 'delete']);

    //lấy ra danh sách user
    Route::get('/user', [UserController::class, 'index'])->name('userHome');
    //xoá user
    Route::get('/delete_user/{id}', [UserController::class, 'delete']);
    //lịch sử mua hàng
    Route::get('/user/purchase_history/{id}', [UserController::class, 'history'])->name('purchaseHistory');

    //lấy ra danh sách đan hàng
    Route::get('/order', [BillController::class, 'index']);

    //lấy ra danh sách danh mục
    Route::get('/categories_product', [ProductController::class, 'getCategories']);

    //import sản phẩm
    Route::get('/import_product/{id}/{quantity}', [ProductController::class, 'importProduct']);


    //search người dùng
    Route::get('/searchUserAdmin', [searchUserController::class, 'index'])->name('searchUserAdmin');
    //search sản phẩm
    Route::get('/searchProductAdmin', [searchProductController::class, 'index'])->name('searchProductAdmin');
    //search đơn hàng
    Route::get('/searchBillAdmin', [searchBillController::class, 'index'])->name('searchBillAdmin');
});



//đăng ký
Route::get('register', [App\Http\Controllers\registerController::class, 'showFormRegister']);
Route::post('register/check', [App\Http\Controllers\registerController::class, 'register']);
//đăng nhập
Route::get('login', [loginController::class, 'showFormLogin'])->name('login');
Route::post('login', [loginController::class, 'checkLogin'])->name('checkLogin');
Route::get('/logout', [loginController::class, 'logout']);
