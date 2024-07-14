<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\VariantProduct;
use App\Models\Superadmin;
use App\Models\VerifyLink;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latest_product = Product::join('category','category.id', '=', 'product.id_category')->leftJoin("variant_product", "variant_product.id_product", '=',"product.id")->latest()->select("product.*", "variant_product.variant_name", "variant_product.variant_images", "category.name as category_name")->get();
        $array_product = [];
        $array_id = [];
        foreach($latest_product as $lp){
            if(!in_array($lp->id,$array_id)){
                $array_id[] = $lp->id;
            }
          
            // $array_products["id"][] =  $array_id;
            $array_product["$lp->id"]["product"] = $lp->id;
            $array_product["$lp->id"]["detail"] = $lp;
            $variants = "tidak ada";
            if($lp->variant_images){
                $variants = $lp->variant_images;
            }
            $array_product["$lp->id"]["variant_product"][] = $variants;
        
        }
        $best_seller = Product::join("best_seller", "best_seller.id_product", "=", "product.id")->join('category','category.id', '=', 'product.id_category')->leftJoin("variant_product", "variant_product.id_product", '=',"product.id")->latest()->select("product.*", "variant_product.variant_name", "variant_product.variant_images", "category.name as category_name")->get();
        $array_product_best_seller = [];
        $array_id_best_seller = [];
        foreach($best_seller as $bs){
            if(!in_array($bs->id,$array_id_best_seller)){
                $array_id_best_seller[] = $bs->id;
            }
          
            // $array_products["id"][] =  $array_id;
            $array_product_best_seller["$bs->id"]["product"] = $bs->id;
            $array_product_best_seller["$bs->id"]["detail"] = $bs;
            $variants = "tidak ada";
            if($bs->variant_images){
                $variants = $bs->variant_images;
            }
            $array_product_best_seller["$bs->id"]["variant_product"][] = $variants;
        
        }
   
        return view('main.index', compact('latest_product','array_product', "array_id", "array_product_best_seller", "array_id_best_seller"));
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