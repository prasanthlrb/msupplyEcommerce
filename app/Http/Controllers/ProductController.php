<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\brand;
use App\term;
use App\attribute;
use App\product_group;
class ProductController extends Controller
{
    //Brand Edit Delete View Update Process Function Start Here

    public function viewBrand(){
        $data = brand::all();
       // return response()->json($data);
        return view('admin.brand',compact('data')); 
    }

    public function brandStore(Request $request){
        $request->validate([
            'brand'=>'required',
            'brand_image'=>'required',
        ]);
    //image upload
    $fileName = null;
    if($request->file('brand_image')!=""){
    $image = $request->file('brand_image');
    $fileName = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('upload_brand/'), $fileName);
    }  
        $brand = new brand;
        $brand->brand = $request->brand;
        $brand->brand_image = $fileName;
        $brand->status = $request->status;
        $brand->save();
        return response()->json(['message'=>'Successfully Store'],200); 
    }

    public function brandUpdate(Request $request){
        $request->validate([
            'brand'=>'required',
          ]);

        if($request->brand_image!=""){
            $old_image = "upload_brand/".$request->brand_image1;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            //image upload
            $fileName = null;
            if($request->file('brand_image')!=""){
            $image = $request->file('brand_image');
            $fileName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_brand/'), $fileName);
            }
        }
        else
        {
            $fileName = $request->brand_image1;
        }

        $brand = brand::find($request->id);
        $brand->brand = $request->brand;
        $brand->brand_image = $fileName;
        $brand->status = $request->status;
        $brand->save();
        return response()->json(['message'=>'Successfully Update'],200); 
    }
    public function editBrand($id){
        $brand = brand::find($id);
        return response()->json($brand); 
    }

    public function deleteBrand($id){
        $brand = brand::find($id);
        $brand->delete(); 
        return response()->json(['message'=>'Successfully Delete'],200); 
    }

     //Brand Edit Delete View Update Process Function End Here

     
    //Attribute Edit Delete View Update Process Function Start Here
    public function viewAttribute(){
        $attribute = attribute::all();
        $terms = term::all();
        return view('admin/attribute',compact('attribute','terms'));
    }

    public function attributeSave(Request $request){
        $request->validate([
            'attribute_name'=>'required|unique:attributes,name',
          ]);
        $attribute = new attribute;
        $attribute->name = $request->attribute_name;
        $attribute->save();
        return response()->json(['message'=>'Successfully Store'],200);  
    }

    public function attributeUpdate(Request $request){
        $request->validate([
            'attribute_name'=>'required|unique:attributes,name,'.$request->id,
          ]);
        $attribute = attribute::find($request->id);
        $attribute->name = $request->attribute_name;
        $attribute->save();
        return response()->json(['message'=>'Successfully Store'],200);  
    }

    public function attributeEdit($id){
        $attribute = attribute::find($id);
        return response()->json($attribute); 
    }

    public function attributeDelete($id){
        $attribute = attribute::find($id);
        $attribute->delete();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }
    //Attribute Edit Delete View Update Process Function End Here


    //Terms Edit Delete View Update Process Function Start Here
    public function viewTerms($id){
        $terms = term::where('attribute_id','=',$id)->get();
        $attribute = attribute::find($id);
        return view('admin/terms',compact('attribute','terms'));    
        //return response()->json( $attribute);   
    }

    public function termsSave(Request $request){
        $request->validate([
            'cat_name'=>'required',
          ]);
        $terms = new term;
        $terms->terms_name = $request->cat_name;
        $terms->attribute_id = $request->attribute_id;
        $terms->save();
        return response()->json(['message'=>'Successfully Store'],200);  
    }

    public function termsUpdate(Request $request){
        $request->validate([
            'cat_name'=>'required',
          ]);
        $terms = term::find($request->id);
        $terms->terms_name = $request->cat_name;
        $terms->attribute_id = $request->attribute_id;
        $terms->save();
        return response()->json(['message'=>'Successfully Store'],200);  
    }

    public function termsEdit($id){
        $terms = term::find($id);
        return response()->json($terms); 
    }

    public function termsDelete($id){
        $terms = term::find($id);
        $terms->delete();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }
       //Terms Edit Delete View Update Process Function End Here

      
       //category Edit Delete View Update Process Function start Here
       public function viewCategory(){
           return view('admin/category');

       }

        //category Edit Delete View Update Process Function End Here

         //Group Edit Delete View Update Process Function start Here
        public function productGroup(){
            $product_group = product_group::all();
            return view('admin.group',compact('product_group'));
        }
    
        public function saveGroup(Request $request){
            $request->validate([
                'group'=>'required|unique:product_groups',
            ]);
            $product_group = new product_group;
            $product_group->group = $request->group;
            $product_group->save();
            return response()->json($request); 
        }
        public function editGroup($id){
            $product_group = product_group::find($id);
            return response()->json($product_group); 
        }
    
        public function updateGroup(Request $request){
            $request->validate([
                'group'=>'required|unique:product_groups,group,'.$request->id,
              ]);
            $product_group = product_group::find($request->id);
            $product_group->group = $request->group;
            $product_group->save();
            return response()->json(['message'=>'Successfully Store'],200);  
        }
    
        public function deleteGroup($id){
            $product_group = product_group::find($id);
            $product_group->delete();
            return response()->json(['message'=>'Successfully Delete'],200); 
        }
     //Group Edit Delete View Update Process Function End Here
}
