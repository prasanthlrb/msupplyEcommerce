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
        return view('category',compact('product','brand','adModel'));
    }
    
    public function getProduct($id){
        $product = product::where('id',$id)->get();
        $Upload = Upload::where('product_id','=',$id)->get(); 
        $brand = brand::all();


        return view('product',compact('product','brand','Upload'));

    }
}
