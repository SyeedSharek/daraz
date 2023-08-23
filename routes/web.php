<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SupperAdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Backend Route ..............................
Route::get('/admins',[AdminController::class,'index']);


Route::post('/admin_deshbord',[AdminController::class,'show_deshbord']);
Route::get('/deshbord',[SupperAdminController::class,'deshbord']);
Route::get('/logout',[SupperAdminController::class,'logout']);

//Category Route.................................
Route::resource('/categories', CategoryController::class);
Route::get('/cat_status{category}',[CategoryController::class,'change_status']);

//Sub Category Route.................................
Route::resource('/subcategories', SubCategoryController::class);
Route::get('/subcat_status{subcategory}',[SubCategoryController::class,'change_status']);

//Brand Route.................................
Route::resource('/brands', BrandController::class);
Route::get('/bra_status{brand}',[BrandController::class,'change_status']);

//Unit Route.................................
Route::resource('/units', UnitController::class);
Route::get('/unt_status{unit}',[UnitController::class,'change_status']);


//Size Route.................................
Route::resource('/sizes', SizeController::class);
Route::get('/size_status{size}',[SizeController::class,'change_status']);


//Products    Route.................................

Route::resource('/products', ProductController::class);
Route::get('/product_status{product}',[ProductController::class,'change_status']);


//Fronend Route ..............................

Route::get('/',[HomeController::class,'index']);
Route::get('/view_product/{id}',[HomeController::class,'details_product']);
Route::get('/cat_by_product/{id}',[HomeController::class,'cat_products']);
Route::get('/brand_by_product/{id}',[HomeController::class,'brand_products']);
Route::get('/subcat_by_product/{id}',[HomeController::class,'subcat_products']);
Route::get('/search',[HomeController::class,'search_view']);


//Card Route .................................
Route::post('/add_to_cart',[CartController::class,'add_card']);
Route::get('/delete_cart/{id}',[CartController::class,'delete']);


//checkout Route .............................

Route::get('/checkout_list',[CheckoutController::class,'index']);
Route::get('/login_check',[CheckoutController::class,'check_login']);

Route::post('/shipping_save',[CheckoutController::class,'shiping_details']);
Route::get('/payment',[CheckoutController::class,'payment_product']);

Route::post('/order_place',[CheckoutController::class,'order_pay']);


//Customer Route .............................

Route::post('/customer-login',[CustomerController::class,'login_customer']);
Route::post('/customer_register',[CustomerController::class,'registration']);
Route::get('/cus_logout',[CustomerController::class,'logout']);


//Order Show Route .............................
Route::get('/order_show',[OrderController::class,'index']);
Route::get('/view_order_details/{id}',[OrderController::class,'view_details']);