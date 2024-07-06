<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = "category";
        return view('Admin.pages.category', compact("menu"));
    }
    public function gettabelcategory(){
        $data = Category::latest()->get();
         return DataTables::of($data)->make(true);
    }
    public function tambahcategory(Request $request){
        $nama_category = $request->add_nama_category;
        $status_gbr_product = "";
        if($request->hasFile('add_gbr_category')) {
            $file_product = $request->file('add_gbr_category');
            $tujuan_upload = public_path('main/images/category');
            $status_gbr_product = "ada";
        }
       
        if($status_gbr_product == "ada"){
            $mycategory = Category::create(["name" => $nama_category, "images_category" => "-", "status_category" => "1", "updated_at" => now(), "created_at"=>now()]);
            $cat_id = $mycategory->id;
            $nama_file = "category".$cat_id.".".$file_product->getClientOriginalExtension();
            $file_product->move($tujuan_upload, $nama_file);
            Category::where(['id' => $cat_id ])->update(['images_category' => $nama_file]);

        }else{
            Category::insert(["name" => $nama_category, "images_category" => "-", "status_category" => "1", "updated_at" => now(), "created_at"=>now()]);
        }
    }
    public function getdetailcategory(Request $request){
        $data = Category::where("id",'=',$request->idcategory)->get();
        return response()->json(['output'=>$data]);
    }
    public function editcategory(Request $request){
        $id_cat = $request->id_category;
        $nama_cat = $request->edit_nama_category;
        // edit_gbr_produk
        $status_gbr_product = "";
        if($request->hasFile('edit_gbr_category')) {
            $file_product = $request->file('edit_gbr_category');
            $tujuan_upload = public_path('main/images/category');
            $nama_file = "category".$id_cat.".".$file_product->getClientOriginalExtension();
            $file_product->move($tujuan_upload, $nama_file);
            $status_gbr_product = "ada";
        }
       
        if($status_gbr_product == "ada"){
            Category::where(['id' => $id_cat ])->update(['name' => $nama_cat, "images_category" => $nama_file]);

        }else{
            Category::where(['id' => $id_cat ])->update(['name' => $nama_cat]);
        }
      
    }
    public function changestatuscategory(Request $request){
        $id_category = $request->idcategory;
        $status = Category::where("id",'=',$id_category)->get();
        $status_category = $status[0]['status_category'];
        $ganti = "0";
        $hasil = "";
        if($status_category == "0"){
            $ganti = "1";
            $hasil = " berhasil diaktifkan kembali";
        }
        else{
            $ganti ="0";
            $hasil = " Di nonaktifkan ";
        }
        Category::where(['id' => $id_category ])->update(['status_category' => $ganti]);
        return response()->json(['output' => $hasil]);
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