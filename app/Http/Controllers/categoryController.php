<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\brand;
use App\Upload;
use App\product;
use App\adModel;
use App\product_attribute;
use App\attribute;
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
        $product_attribute = product_attribute::where('group_id','=',$product1->group)->get();
        $attribute = attribute::all(); 
        //return response()->json($related_product);
        return view('product',compact('product1','brand','Upload','related_product','breadcrumbs','product_attribute','attribute'));

    }

    public function advanceFilter($product_id,$attr,$terms){
        $product_attribute = product_attribute::where('product_id','=',$product_id)->get();
        $terms_data = product_attribute::where('terms_id','=',$terms)->where('group_id',$product_attribute[0]->group_id)->get();
        $terms_val = array();
        $checkAttr = null;
        $product_id_final = array();
        foreach($product_attribute as $attribute_val){
          
        if($attr == $attribute_val->attribute ){
            $terms_val[]=$terms;
            $checkAttr=$terms;
        }else{
            $terms_val[]= $attribute_val->terms_id;
        }
    }
    if($checkAttr == null){
        $terms_val[]=$terms;
    }
    $finalResult = product_attribute::whereIn('terms_id',$terms_val)->where('group_id',$product_attribute[0]->group_id)->get();
    foreach($finalResult as $result){
            $product_id_final[] = $result->product_id;
    }
    $values = array_count_values($product_id_final);
    arsort($values);
    $popular = array_slice(array_keys($values), 0, 5, true);
    if($product_id == $popular[0]){
        $redirectPage =$popular[1];
    }else{
        $redirectPage =$popular[0];
    }
    //return response()->json($popular);
    return redirect('product/'.$redirectPage);
    //return $this->getProduct($redirectPage);
    }
    
}
