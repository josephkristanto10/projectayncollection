<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\VariantProduct;
use App\Models\Superadmin;

use Illuminate\Http\Request;
use DataTables;
use Session;
use Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::get("type_superadmin") == "admin"){
            $menu = "dashboard";
            $jumlahCategory =  Category::all()->count();
            $jumlahProduct =  Product::all()->count();
            $limitCategory = Category::latest()->limit(4)->get();
            $limitProduct = Product::latest()->limit(4)->get();
            return view('Admin.pages.dashboard', compact("menu", 'jumlahCategory','jumlahProduct','limitCategory','limitProduct'));
        }
        else{
            return view('Admin.pages.signin');
        }
        
      
    }
    public function checklogin(Request $request){
        $username = $request->user;
        $password = $request->pass;
        

        $myadmin = Superadmin::where("user","=",$username)->get();
        if($myadmin->count() > 0){
            if(Hash::check($password, $myadmin[0]->pass)) {
                Session::put('id_superadmin',$myadmin[0]->id);
                Session::put('nama_superadmin',$myadmin[0]->name);
                Session::put('type_superadmin',"admin");
                return "cocok";
            }
            else{
                return "tidak cocok";
            }
        }
        else{
            return "tidak ada data";
        }
    }
    public function logout(){
        Session::flush();
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

    public function getdetailproduct(Request $request){
        $id_product = $request->idproduct;
        $data = Product::where("id",'=',$id_product)->get();
        $data_variant = VariantProduct::where("id_product","=",$id_product)->get();
        $hasil = "";
        if($data_variant->count() >0){
          
            foreach($data_variant as $dv){
                $hasil .= "<tr id ='delete_$dv->id'>";
                $hasil .= "<td><span  id = 'gbr_$dv->id'><img  src='".asset('main/images/variant/')."/".$dv->variant_images."' style = 'width:40px;height:40px;' ></span></td>";
                $hasil .= "<td><span id = 'nama_$dv->id'>".$dv->variant_name."</span></td>";
                $hasil .= "<td ><button data-id = '$dv->id' class = 'btn btn-warning' onclick = 'previewganti(this)'>Edit</button><button data-id = '$dv->id' class = 'btn btn-danger'  onclick = 'deletevariant(this)'>Delete</button></td>";
                $hasil .= "</tr>";
            }
          
        }
        return response()->json(['output_detail'=>$data, 'output_variant' => $hasil]);
    }

    public function editproduct(Request $request){
        $id_product = $request->id_product;
        $id_category = $request->edit_pil_category;
        $code_product = $request->edit_code_product;
        $name_product = $request->edit_nama_product;
        $harga_product = $request->edit_harga_product;
        $stock_product = $request->edit_stock_product;
        $desc_product = $request->edit_desc_product;
        // edit_gbr_produk
        $status_gbr_product = "";
        if($request->hasFile('edit_gbr_product')) {
            $file_product = $request->file('edit_gbr_product');
            $tujuan_upload = public_path('main/images/product');
            $nama_file = "product".$id_product.".".$file_product->getClientOriginalExtension();
            $file_product->move($tujuan_upload, $nama_file);
            $status_gbr_product = "ada";
        }
       
        if($status_gbr_product == "ada"){
            Product::where(['id' => $id_product ])->update(["id_category" => $id_category, "code" => $code_product, "name" => $name_product, "images"=>$nama_file, "price" => $harga_product, "stock" => $stock_product, "descriptions" => $desc_product,"status_product" => "1", "updated_at" => now(), "created_at"=>now()]);
        }else{
            Product::where(['id' => $id_product ])->update(["id_category" => $id_category, "code" => $code_product, "name" => $name_product, "price" => $harga_product, "stock" => $stock_product, "descriptions" => $desc_product,"status_product" => "1", "updated_at" => now(), "created_at"=>now()]);
        }
    }

    public function tambahvariant(Request $request){
        $id_product = $request->id_product;
        $name_variant = $request->add_nama_variant;
        $status_gbr_product = "";
        if($request->hasFile('add_gbr_variant')) {
            $file_product = $request->file('add_gbr_variant');
            $tujuan_upload = public_path('main/images/variant');
            $status_gbr_product = "ada";
        }
        $hasil = "-";
        $nama_file= "";
        if($status_gbr_product == "ada"){
            $myvariant = VariantProduct::create(["id_product" => $id_product, "variant_images" => "-", "variant_name" => $name_variant, "variant_images"=>"-", "variant_stock" => "1", "variant_status" => "1", "updated_at" => now(), "created_at"=>now()]);
            $variant_id = $myvariant->id;
            $nama_file = "variant".$variant_id.".".$file_product->getClientOriginalExtension();
            $file_product->move($tujuan_upload, $nama_file);
            VariantProduct::where(['id' => $variant_id ])->update(['variant_images' => $nama_file]);
        }else{
            $myvariant = VariantProduct::create(["id_product" => $id_product, "variant_images" => "-", "variant_name" => $name_variant, "variant_images"=>"-", "variant_stock" => "1", "variant_status" => "1", "updated_at" => now(), "created_at"=>now()]);
            $variant_id = $myvariant->id;
        }
        $hasil = "<tr id ='delete_".$variant_id."><td ><span id = 'gbr_$variant_id'><img   style = 'width:40px;height:40px;' src = '".asset("main/images/variant/$nama_file")."')></span></td><td><span id = 'nama_$variant_id'>$name_variant</span></td><td><button data-id = '$variant_id'' class = 'btn btn-warning' onclick = 'previewganti(this)'>Edit</button><button data-id = '$variant_id'' class = 'btn btn-danger' onclick = 'deletevariant(this)'>Delete</button></td></tr>";

        return response()->json(['output'=>$hasil]);
    }
    public function gantivariant(Request $request){
        $id_variant = $request->id_variants;
        $name_variant = $request->edit_nama_variant;
        // edit_gbr_produk
        $status_gbr_product = "";
        $nama_file = "";
        if($request->hasFile('edit_gbr_variant')) {
            $file_product = $request->file('edit_gbr_variant');
            $tujuan_upload = public_path('main/images/variant');
            $nama_file = "variant".$id_variant.".".$file_product->getClientOriginalExtension();
            $file_product->move($tujuan_upload, $nama_file);
            $status_gbr_product = "ada";
        }
       
        if($status_gbr_product == "ada"){
            // VariantProduct::create(["id_product" => $id_product, "variant_images" => "-", "variant_name" => $name_variant, "variant_images"=>"-", "variant_stock" => "1", "variant_status" => "1", "updated_at" => now(), "created_at"=>now()]);
            VariantProduct::where(['id' => $id_variant ])->update(["variant_name" => $name_variant, "variant_images" => $nama_file, "updated_at" => now(), "created_at"=>now()]);
        }else{
            VariantProduct::where(['id' => $id_variant ])->update(["variant_name" => $name_variant,  "updated_at" => now(), "created_at"=>now()]);
        }
        return response()->json(['gambar'=>$nama_file, "nama" => $name_variant]);
    }

    public function changestatusproduct(Request $request){
        $id_product = $request->idproduct;
        $status = Product::where("id",'=',$id_product)->get();
        $status_product = $status[0]['status_product'];
        $ganti = "0";
        $hasil = "";
        if($status_product == "0"){
            $ganti = "1";
            $hasil = " berhasil diaktifkan kembali";
        }
        else{
            $ganti ="0";
            $hasil = " Di nonaktifkan ";
        }
        Product::where(['id' => $id_product ])->update(['status_product' => $ganti]);
        return response()->json(['output' => $hasil]);
    }
    public function hapusvariant(Request $request){
        VariantProduct::destroy($request->id_variant);
        return response()->json(['output' => "ok"]);
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