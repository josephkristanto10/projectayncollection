<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use DataTables;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = "dashboard";
        return view('Admin.pages.dashboard', compact("menu"));
    }
    public function index_product(){
        $menu = "product";
        $category = Category::latest()->get();
        return view('Admin.pages.product', compact("menu", "category"));
    }

    public function gettabelproduct(){
        $data = Product::latest()->get();
        return DataTables::of($data)->make(true);
    }

    public function tambahproduk(Request $request){
        $id_category = $request->add_pil_category;
        $code_product = $request->add_code_product;
        $name_product = $request->add_nama_product;
        $harga_product = $request->add_harga_product;
        $stock_product = $request->add_stock_product;
        $desc_product = $request->add_desc_product;
        $status_gbr_product = "";
        if($request->hasFile('add_gbr_product')) {
            $file_product = $request->file('add_gbr_product');
            $tujuan_upload = public_path('main/images/product');
            $status_gbr_product = "ada";
        }
       
        if($status_gbr_product == "ada"){
            $myproduct = Product::create(["id_category" => $id_category, "code" => $code_product, "name" => $name_product, "images"=>"-", "price" => $harga_product, "stock" => $stock_product, "descriptions" => $desc_product,"status_product" => "1", "updated_at" => now(), "created_at"=>now()]);
            $product_id = $myproduct->id;
            $nama_file = "product".$product_id.".".$file_product->getClientOriginalExtension();
            $file_product->move($tujuan_upload, $nama_file);
            Product::where(['id' => $product_id ])->update(['images' => $nama_file]);

        }else{
            $myproduct = Product::create(["id_category" => $id_category, "code" => $code_product, "name" => $name_product, "images"=>"-", "price" => $harga_product, "stock" => $stock_product, "descriptions" => $desc_product,"status_product" => "1", "updated_at" => now(), "created_at"=>now()]);
        }
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}