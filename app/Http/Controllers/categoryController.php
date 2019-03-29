<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\brand;
use App\Upload;
use App\product;
use App\adModel;
class categoryController extends Controller
{
    public function categoryProduct($id){
        $adModel = adModel::all();
        $product = product::where('category','LIKE',"%{$id}%")->paginate(6);
        $brand = brand::all();
       // return response()->json($product);
        return view('category',compact('product','brand','adModel'));
    }
    
    public function getProduct($id){
        $product1 = product::find($id);
        $Upload = Upload::where('product_id','=',$id)->get(); 
        $brand = brand::all();
        $related_product = [];
        if($product1->related_product){
            $related_product = product::whereIn('id', explode(',',$product1->related_product))->get();
        }
        $category_id = explode(',',$product1->category);
        $breadcrumbs = category::find($category_id[0]);
        //return response()->json($related_product);
        return view('product',compact('product1','brand','Upload','related_product','breadcrumbs'));

    }
}
