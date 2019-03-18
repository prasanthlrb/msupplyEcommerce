<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\adModel;
use App\homeSlider;
use App\home_product_layout;
use App\category;
use App\product;
class pageSettingController extends Controller
{

    public function homeAd(){

        $ads= adModel::all();
        return view('admin.setting.homeAd',compact('ads'));

    }
    public function adUpdate(Request $request){
        $ads = adModel::find($request->id);
        $fileName = null;
        if($request->id ==1){
    if($request->file('firstInputImage')!=""){
    $image = $request->file('firstInputImage');
    $fileName = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('ads/'), $fileName);
    $ads->ad_name = $fileName;
    } 
        }else if($request->id == 2){
    if($request->file('firstInputImage')!=""){
    $image = $request->file('firstInputImage');
    $fileName = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('ads/'), $fileName);
    $ads->ad_name = $fileName;
    } 
        }else{
    if($request->file('firstInputImage')!=""){
    $image = $request->file('firstInputImage');
    $fileName = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('ads/'), $fileName);
    $ads->ad_name = $fileName;
    } 
        }
        $ads->url = $request->url;
        $ads->save();
        return response()->json($request); 
    }

    public function showSlider(){
        $slider= homeSlider::all();
        return view('admin.setting.slider',compact('slider'));
    }

    public function sliderSave(Request $request){
        $fileName = null;
       if($request->file('slider_image')!=""){
       $image = $request->file('slider_image');
       $fileName = rand() . '.' . $image->getClientOriginalExtension();
       $image->move(public_path('slider/'), $fileName);
       }
       $slider = new homeSlider;
       $slider->title = $request->title;
       $slider->sub_title = $request->sub_title;
       $slider->desc = $request->desc;
       $slider->button_text = $request->button_text;
       $slider->button_url = $request->button_url;
       $slider->button_color = $request->button_color;
       $slider->button_y = $request->button_y;
       $slider->slider_position = $request->slider_position;
       
       $slider->slider_image = $fileName;
       $slider->title_color = $request->title_color;
       $slider->title_y = $request->title_y;
       $slider->sub_color = $request->sub_color;
       $slider->sub_y = $request->sub_y;
       $slider->desc_color = $request->desc_color;
       $slider->desc_y = $request->desc_y;
       $slider->save();
       return response()->json($slider);
    }
    public function sliderUpdate(Request $request){
        $slider = homeSlider::find($request->id);
        $slider->title = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->desc = $request->desc;
        $slider->button_text = $request->button_text;
        $slider->button_url = $request->button_url;
        $slider->button_color = $request->button_color;
        $slider->button_y = $request->button_y;
        $slider->slider_position = $request->slider_position;
        $slider->title_color = $request->title_color;
        $slider->title_y = $request->title_y;
        $slider->sub_color = $request->sub_color;
        $slider->sub_y = $request->sub_y;
        $slider->desc_color = $request->desc_color;
        $slider->desc_y = $request->desc_y;
        $fileName = null;
       if($request->file('slider_image')!=""){
        $remove_file = public_path().'/slider/'. $slider->slider_image;
        if (file_exists($remove_file)) {
            unlink($remove_file);
        }
       $image = $request->file('slider_image');
       $fileName = rand() . '.' . $image->getClientOriginalExtension();
       $image->move(public_path('slider/'), $fileName);
       $slider->slider_image =  $fileName;
       }
        $slider->save();
        return response()->json($slider);

    }
    public function editSlider($id){
        $slider = homeSlider::find($id);
        return response()->json($slider);
    }
    public function deleteSlider($id){
        $slider = homeSlider::find($id);
        $remove_file = public_path().'/slider/'. $slider->slider_image;
        if (file_exists($remove_file)) {
            unlink($remove_file);
        }
        $slider->delete();
        return response()->json("200");
    }
    public function homeLayout(){
        $layout = home_product_layout::all();
        $product = product::all();
        $category = category::all();
        return view('admin.setting.layout',compact('layout','product','category'));
    }
    public function SaveLayout(Request $request){
        $layout = new home_product_layout;
        $layout->title = $request->title;
        $layout->type = $request->type;
        if($request->type == "products"){
            $layout->product_id = collect($request->products)->implode(',');
        }else{
            $layout->category_id = collect($request->category)->implode(',');
        }
        $layout->save();
        return response()->json($request); 
    }

    public function EditLayout($id){
        $layout =  home_product_layout::find($id);
        $product = product::all();
        $category = category::all();
        $output = '';
        if($layout->type == "products"){
            foreach(explode(',', $layout->product_id) as $row) {
                $layout_collection[] = $row;        
            }
            $layout->product_id = $layout_collection;
            foreach($product as $prod){
                if(in_array($prod->id,$layout_collection)){
                    $output .= '<option value="'.$prod->id.'" selected>'.$prod->product_name.'</option>'; 
                }else{
                    $output .= '<option value="'.$prod->id.'">'.$prod->product_name.'</option>'; 
                }
            }
        }else{
            foreach(explode(',', $layout->category_id) as $row) {
                $layout_collection[] = $row;        
            }
            $layout->category_id = $layout_collection;
            foreach($category as $cat){
                if(in_array($cat->id,$layout_collection)){
                    $output .= '<option value="'.$cat->id.'" selected>'.$cat->category_name.'</option>'; 
                }else{
                    $output .= '<option value="'.$cat->id.'">'.$cat->category_name.'</option>'; 
                }
            }
        }
        
        
        return response()->json(array($layout,$output)); 
    }
    public function UpdateLayout(Request $request){
        $layout =  home_product_layout::find($request->id);
        $layout->title = $request->title;
        $layout->type = $request->type;
        if($request->type == "products"){
            $layout->product_id = collect($request->products)->implode(',');
        }else{
            $layout->category_id = collect($request->category)->implode(',');
        }
        $layout->save();
        return response()->json($request); 
    }
    
    public function DeleteLayout($id){
        $layout = home_product_layout::find($id);
        $layout->delete();
        return response()->json("200");
    }
    
}
