<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('main.index');
});
Route::resource('/product', ProductController::class);
// Route::resource('/adminoffice', AdminController::class);
Route::group(['prefix'=>'adminoffice','as'=>'Admin.'], function(){
    Route::get('/', [AdminController::class,"index"]);
    Route::get('product', [AdminController::class,"index_product"]);
    Route::get('product/getlistproduct', [AdminController::class,"gettabelproduct"]);
    Route::get('product/getdetailproduct', [AdminController::class,"getdetailproduct"]);
    Route::POST('product/tambahproduk', [AdminController::class,"tambahproduk"]);
    Route::POST('product/editproduk', [AdminController::class,"editproduct"]);

    Route::POST("variant/tambahvariant", [AdminController::class,"tambahvariant"]);
    Route::POST("variant/editvariant", [AdminController::class,"gantivariant"]);
   
    Route::get('category', [CategoryController::class,"index"]);
    Route::get('category/getlistcategory', [CategoryController::class,"gettabelcategory"]);
    Route::get('category/getdetailcategory',[CategoryController::class, "getdetailcategory"]);
    Route::POST('category/changestatuscategory',[CategoryController::class, "changestatuscategory"]);
    Route::POST('category/editcategory',[CategoryController::class, "editcategory"]);    
    Route::POST('category/tambahcategory', [CategoryController::class,"tambahcategory"]);
});