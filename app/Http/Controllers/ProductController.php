<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\VerifyLink;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::where('status_category', '=','1')->latest()->get();
        $myproduct = Product::join("category",'category.id','=','product.id_category')->leftJoin("variant_product", "variant_product.id_product", '=',"product.id")->where('status_product', '=','1')->select("product.*", "category.name as category_name", "variant_product.variant_name", "variant_product.variant_images")->get();
        $allproduct = Product::join("category",'category.id','=','product.id_category')->where('status_product', '=','1')->select("product.*", "category.name as category_name")->paginate(18);
        $array_product = [];
        $array_id = [];
        foreach($allproduct as $ap){
            $array_id[] = $ap->id;
        }
        foreach($myproduct as $lp){
        
         
            // $array_products["id"][] =  $array_id;
            $array_product["$lp->id"]["product"] = $lp->id;
            $array_product["$lp->id"]["detail"] = $lp;
            $variants = "tidak ada";
            if($lp->variant_images){
                $variants = $lp->variant_images;
            }
            $array_product["$lp->id"]["variant_product"][] = $variants;
        
        }
        return view('main.product',compact('myproduct','allproduct','array_product', "array_id", "category"));
    }
    public function verify_user_first(Request $request){
        $code_name = $request->code;
        $mylink = VerifyLink::where('code','=',$code_name)->get()->count();
        $category = Category::where('status_category', '=','1')->latest()->get();
        $myproduct = Product::where('status_product', '=','1')->latest()->get();
        if($mylink > 0){
            Session::put("verifyuser", "ok");
            return redirect()->to('/product')->with("message", "verified");
         
        }
        else{
            return redirect('/product');
        }
    }
    public function redirect_product(){
        return redirect('/product');
    }
    public function getdetailproducts(Request $request){
        $idproduct = $request->id_product;
        $detail = Product::where('id','=',$idproduct)->get();
        return response()->json(['output'=>$detail]);
    }   
    public function fetch_data(Request $request){
        $idcategory = $request->category;
        $kata_kunci = "";
        if($request->keyword){
            $kata_kunci = $request->keyword;
        }
        // $list = Product::where('id_category','=',$idcategory)->get();
        // return response()->json(['output'=>$detail]);

        if($request->ajax())
        {
            if($idcategory == 0){
                if($kata_kunci == ""){
                    $myproduct =  Product::join("category",'category.id','=','product.id_category')->leftJoin("variant_product", "variant_product.id_product", '=',"product.id")->where('status_product', '=','1')->select("product.*", "category.name as category_name", "variant_product.variant_name", "variant_product.variant_images")->get();   
                    $allproduct = Product::join("category",'category.id','=','product.id_category')->where('status_product', '=','1')->select("product.*", "category.name as category_name")->paginate(18);

                }
                else{
                    $myproduct =  Product::join("category",'category.id','=','product.id_category')->leftJoin("variant_product", "variant_product.id_product", '=',"product.id")->where('status_product', '=','1')->where("product.code", 'like', '%'.$kata_kunci.'%')->orWhere("product.name", 'like', '%'.$kata_kunci.'%')->orWhere("category.name",'like', '%'.$kata_kunci.'%')->select("product.*", "category.name as category_name", "variant_product.variant_name", "variant_product.variant_images")->get();   
                    $allproduct = Product::join("category",'category.id','=','product.id_category')->where('status_product', '=','1')->where("product.code", 'like', '%'.$kata_kunci.'%')->orWhere("product.name", 'like', '%'.$kata_kunci.'%')->orWhere("category.name",'like', '%'.$kata_kunci.'%')->select("product.*", "category.name as category_name")->paginate(18);

                  
                }

            }
            else if($idcategory == -1){
                $myproduct =  Product::join("category",'category.id','=','product.id_category')->leftJoin("variant_product", "variant_product.id_product", '=',"product.id")->where('status_product', '=','1')->latest('id')->select("product.*", "category.name as category_name", "variant_product.variant_name", "variant_product.variant_images")->get();   
                $allproduct = Product::join("category",'category.id','=','product.id_category')->where('status_product', '=','1')->latest('id')->select("product.*", "category.name as category_name")->paginate(18);

            }
            else{
                if($kata_kunci == ""){
                    $myproduct =  Product::join("category",'category.id','=','product.id_category')->leftJoin("variant_product", "variant_product.id_product", '=',"product.id")->where('status_product', '=','1')->latest('id')->where('id_category','=',$idcategory)->select("product.*", "category.name as category_name", "variant_product.variant_name", "variant_product.variant_images")->paginate(18);
                    $allproduct = Product::join("category",'category.id','=','product.id_category')->where('status_product', '=','1')->latest('id')->where('id_category','=',$idcategory)->select("product.*", "category.name as category_name")->paginate(18);

                }
                else{
                    $myproduct =  Product::join("category",'category.id','=','product.id_category')->leftJoin("variant_product", "variant_product.id_product", '=',"product.id")->where('status_product', '=','1')->where("product.code", 'like', '%'.$kata_kunci.'%')->orWhere("product.name", 'like', '%'.$kata_kunci.'%')->latest('id')->where('id_category','=',$idcategory)->orWhere("category.name",'like', '%'.$kata_kunci.'%')->select("product.*", "category.name as category_name", "variant_product.variant_name", "variant_product.variant_images")->paginate(18);
                    $allproduct = Product::join("category",'category.id','=','product.id_category')->where('status_product', '=','1')->latest('id')->where('id_category','=',$idcategory)->where("product.code", 'like', '%'.$kata_kunci.'%')->orWhere("product.name", 'like', '%'.$kata_kunci.'%')->select("product.*", "category.name as category_name")->paginate(18);

                }

            }
            // $myproduct = Product::join("category",'category.id','=','product.id_category')->leftJoin("variant_product", "variant_product.id_product", '=',"product.id")->where('status_product', '=','1')->select("product.*", "category.name as category_name", "variant_product.variant_name", "variant_product.variant_images")->get();
            $array_product = [];
            $array_id = [];
            foreach($allproduct as $ap){
                $array_id[] = $ap->id;
            }
         
            foreach($myproduct as $lp){
                // if(!in_array($lp->id,$array_id)){
                //     $array_id[] = $lp->id;
                // }
              
                // $array_products["id"][] =  $array_id;
                $array_product["$lp->id"]["product"] = $lp->id;
                $array_product["$lp->id"]["detail"] = $lp;
                $variants = "tidak ada";
                if($lp->variant_images){
                    $variants = $lp->variant_images;
                }
                $array_product["$lp->id"]["variant_product"][] = $variants;
            
            }
            return view('main.product_list', compact('myproduct', 'array_product', "array_id"))->render();
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