<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);
Route::resource('/product', ProductController::class);
Route::get("/detailproduct",[ProductController::class,'getdetailproducts'] );
Route::get('/getproductbycategory',[ProductController::class,'getproductbycategory'] );

Route::get('/pagecategory/fetch_data_index',  [ProductController::class,"fetch_data"]);

Route::get('/verify/{code}', [ProductController::class,'verify_user_first']);
Route::get('/verify', [ProductController::class,'redirect_product']);

Route::group(['prefix'=>'adminoffice','as'=>'Admin.'], function(){
    Route::get('/', [AdminController::class,"index"]);

    Route::POST('login', [AdminController::class,"checklogin"]);
    Route::get('logout', [AdminController::class,"logout"]);

    Route::get('product', [AdminController::class,"index_product"]);
    Route::get('product/getlistproduct', [AdminController::class,"gettabelproduct"]);
    Route::get('product/getdetailproduct', [AdminController::class,"getdetailproduct"]);
    Route::POST('product/tambahproduk', [AdminController::class,"tambahproduk"]);
    Route::POST('product/editproduk', [AdminController::class,"editproduct"]);
    Route::POST('product/changestatusproduct', [AdminController::class,"changestatusproduct"]);
    

    Route::POST("variant/tambahvariant", [AdminController::class,"tambahvariant"]);
    Route::POST("variant/editvariant", [AdminController::class,"gantivariant"]);
    Route::POST("variant/deletevariant", [AdminController::class,"hapusvariant"]);
    
    Route::get('linkverify', [AdminController::class,"index_verify_link"]);
    Route::get('linkverify/getlinkverify', [AdminController::class,"gettabellink"]);
    Route::POST('linkverify/tambahlink',  [AdminController::class,"tambahlink"]);
   
    Route::get('category', [CategoryController::class,"index"]);
    Route::get('category/getlistcategory', [CategoryController::class,"gettabelcategory"]);
    Route::get('category/getdetailcategory',[CategoryController::class, "getdetailcategory"]);
    Route::POST('category/changestatuscategory',[CategoryController::class, "changestatuscategory"]);
    Route::POST('category/editcategory',[CategoryController::class, "editcategory"]);    
    Route::POST('category/tambahcategory', [CategoryController::class,"tambahcategory"]);
});