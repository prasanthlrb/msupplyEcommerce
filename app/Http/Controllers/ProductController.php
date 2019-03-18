<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\brand;
use App\term;
use App\attribute;
use App\category;
use App\product_group;
use App\product;
use App\upload;
use File; 
use App\product_attribute;
use DB;
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
       public function viewCategoryId($id){
        $category = category::where('parent_id',$id)->get();
        $categoryLink=array();
        $linkCat2=[];
        if($id !="0"){

            $i = $id;
            $sn=1;
            while ($i != "0") {
               
                $categories = category::find($i); 
                $cateLink = array(
                    'id' => $categories->id,
                    'name' => $categories->category_name,
                    'sn'=>$sn
                );
                $categoryLink[]= $cateLink;
                $i = $categories->parent_id;
                $sn++;
               
            }
            $linkCat1 = collect($categoryLink);
            $linkCat2 = $linkCat1->reverse();
           //return response()->json($linkCat2->all());
        }
       
           return view('admin/category',compact('category','linkCat2'));

       }
       public function CategorySave(Request $request){
        $fileName = null;
        if($request->file('category_image')!=""){
        $image = $request->file('category_image');
        $fileName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('category_image/'), $fileName);
        }
        $category = new category;
        $category->category_name = $request->category_name;
        $category->category_image = $fileName;
        $category->parent_id = $request->parent_id;
        $category->save();
        return response()->json("200"); 

       }
       public function CategoryUpdate(Request $request){
        $category = category::find($request->id);
        $fileName = null;
        if($request->file('category_image')!=""){
        $image = $request->file('category_image');
        $fileName = rand() . '.' . $image->getClientOriginalExtension();
        $file= $category->category_image;
        $filename1 = public_path().'/category_image/'.$file;
        \File::delete($filename1);
        $image->move(public_path('category_image/'), $fileName);
        $category->category_image = $fileName;
        }
      
        $category->category_name = $request->category_name;
        $category->parent_id = $request->parent_id;
        $category->save();
        return response()->json("200"); 

       }

       public function EditCategory($id){
        $category = category::find($id);
        return response()->json($category); 
    }
       public function DeleteCategory($id){
        $category = category::find($id);
        $file= $category->category_image;
        $filename1 = public_path().'/category_image/'.$file;
        \File::delete($filename1);
        $category->delete();
        return response()->json('200'); 
    }

    // Greate New Product in Admin 
    public function createProduct(){
        $group = product_group::all();
        $brand = brand::all();
        $product = product::all();
        $attribute = attribute::all();
        return view('admin.newProduct',compact('group','brand','product','attribute'));
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

     public function categoryTree(){
         $category = category::all();
         foreach ($category as $row) {
            $sub_data = array(
                'id' => $row->id,
                'name' => $row->category_name,
                'text' => $row->category_name,
                'parent_id' => $row->parent_id
            );
            $data[] = $sub_data;
         }
         foreach ($data as $key => &$value) {
           $output[$value['id']] = &$value;
         }

         foreach ($data as $key => &$value) {
            if ($value["parent_id"] && isset($output[$value["parent_id"]])) {
               $output[$value["parent_id"]]["nodes"][] =&$value;
            }
         }
         foreach ($data as $key => &$value) {
            if ($value["parent_id"] && isset($output[$value["parent_id"]])) {
               unset($data[$key]);
            }
         }
         return response()->json($data); 
        //  echo '<pre>';
        //  print_r($data);
        //  echo '</pre>';
     }

     //Attribute Terms Get from Product Create Page
     public function get_terms($id){ 
        $data  = DB::table('terms')
            ->select('*')
            ->where('attribute_id',$id)
            ->get();
        
        $attribute = attribute::find($id);


      $output = '<script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>';
      $output .= '<script src="../../../app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>';
      $output .= '<div id="'.$attribute->id.'">';
      $output .= '<br><label>Choose The '.$attribute->name.' </label><a float="right" class="pull-right href="javascript:void(0)" onclick="RemovePop('.$attribute->id.')"><i class="ft-trash-2"></i></a>';
      $output .= '<br><select style="width:100%" id="'.$attribute->name.'" name="'.$attribute->name.'[]" class="select2 form-control col-md-12" >';
      $output .= '<optgroup label="'.$attribute->name.'">';
        foreach ($data as $value){
            $output .='<option value="'.$value->terms_name.'">'.$value->terms_name.'</option>'; 
        }
        $output .= '</optgroup>';
        $output .= '</select>';
        $output .= '</div>';
      
      echo $output;
    }
    public function productSave(Request $request){
        $request->validate([
            'imgInp'=>'required',
            'category'=>'required',
            'group'=>'required',
            'product_name'=>'required|unique:products',
            // 'sku'=>'required|unique:product_datas',
        ]);

        //image upload
    $fileName = null;
    if($request->file('imgInp')!=""){
    $image = $request->file('imgInp');
    $fileName = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('product_img/'), $fileName);
    }

        $product = new product;
        $product->category = $request->category; 
        $product->product_name = $request->product_name;
        $product->group = $request->group;
        $product->brand_name = $request->brand_name;
        $product->product_description = $request->product_description;
        $product->seo_title = $request->seo_title;
        $product->seo_description = $request->seo_description;
        $product->seo_keywords = $request->seo_keywords;
        $product->product_image = $fileName;
        $product->regular_price = $request->regular_price;
        $product->sales_price = $request->sales_price;
        $product->sku = $request->sku;
        $product->stock_quantity = $request->stock_quantity;
        $product->low_stock = $request->low_stock;
        $product->weight = $request->weight;
        $product->length = $request->length;
        $product->width = $request->width;
        $product->height = $request->height;
        $product->shipping_type = $request->shipping_type;
        $product->shipping_amount = $request->shipping_amount;
        $product->related_product = collect($request->related_product)->implode(',');
        $product->hot_product = $request->hot_product;
        $product->review = $request->review;
        $product->new_product = $request->new_product;
        $product->recommended = $request->recommended;
        $product->featured = $request->featured;
        $product->save();

        if(isset($request->attribute)){
    
            foreach(explode(',', $request->attribute) as $id) {
                $attribute_data[] = attribute::find($id);        
            }
           
          
            for ($x = 0; $x < count($attribute_data); $x++) {
                 $attrName = $attribute_data[$x]->name;
                // $attrName = $attribute_data[$x]->name;
                $terms[] = $request->$attrName;                
            }
          
            for ($x = 0; $x < count($attribute_data); $x++) {
                foreach($terms[$x] as $term){
                    $ter = term::where('terms_name', $term)->first();     
                    $attr = new product_attribute;
                    $attr->product_id = $product->id;
                    $attr->group_id = $request->group;
                    $attr->attribute = $attribute_data[$x]->id;
                    $attr->terms_id = $ter->id;
                    $attr->terms = $ter->terms_name;
                    $attr->save();
                }
            }
        }

        
        return response()->json($product->id); 
    }


    public function productUpdate(Request $request){
        $request->validate([
           // 'imgInp'=>'required',
            'category'=>'required',
            'group'=>'required',
            //'product_name'=>'required|unique:products',
            // 'sku'=>'required|unique:product_datas',
        ]);

    $fileName = null;
    if($request->file('imgInp')!=""){
    $image = $request->file('imgInp');
    $fileName = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('product_img/'), $fileName);
    }

        $product = product::find($request->product_page_id);
        $product->category = $request->category; 
        $product->product_name = $request->product_name;
        $product->group = $request->group;
        $product->brand_name = $request->brand_name;
        $product->product_description = $request->product_description;
        $product->seo_title = $request->seo_title;
        $product->seo_description = $request->seo_description;
        $product->seo_keywords = $request->seo_keywords;
        $product->product_image = $fileName;
        $product->regular_price = $request->regular_price;
        $product->sales_price = $request->sales_price;
        $product->sku = $request->sku;
        $product->stock_quantity = $request->stock_quantity;
        $product->low_stock = $request->low_stock;
        $product->weight = $request->weight;
        $product->length = $request->length;
        $product->width = $request->width;
        $product->height = $request->height;
        $product->shipping_type = $request->shipping_type;
        $product->shipping_amount = $request->shipping_amount;
        $product->related_product = collect($request->related_product)->implode(',');
        $product->hot_product = $request->hot_product;
        $product->review = $request->review;
        $product->new_product = $request->new_product;
        $product->recommended = $request->recommended;
        $product->featured = $request->featured;
        $product->save();

        if(isset($request->attribute)){
    
            foreach(explode(',', $request->attribute) as $id) {
                $attribute_data[] = attribute::find($id);        
            }
           
          
            for ($x = 0; $x < count($attribute_data); $x++) {
                 $attrName = $attribute_data[$x]->name;
                // $attrName = $attribute_data[$x]->name;
                $terms[] = $request->$attrName;                
            }
          
            for ($x = 0; $x < count($attribute_data); $x++) {
                foreach($terms[$x] as $term){
                    $ter = term::where('terms_name', $term)->first();   
                    $product_attribute = product_attribute::where('attribute',$attribute_data[$x]->id)->where('product_id',$request->product_page_id)->first();
                    if(!isset($product_attribute)){
                    $attr = new product_attribute;
                    $attr->product_id = $request->product_page_id;
                    $attr->group_id = $request->group;
                    $attr->attribute = $attribute_data[$x]->id;
                    $attr->terms_id = $ter->id;
                    $attr->terms = $ter->terms_name;
                    $attr->save();
                }
            }
            }
        }

        
        return response()->json($request->product_page_id); 
    }


    public function viewProduct(){
        $product = product::all();
        return view('admin/viewProduct',compact('product'));
    }
    public function productDelete($id){
        
        $product = product::find($id);
        $filename = public_path().'/product_img/'.$product->product_image;
        \File::delete($filename);
        $product->delete();
    
        $product_attribute = product_attribute::where('product_id', $id)->delete();
        $upload = upload::where('product_id', $id)->get();
        if(!empty($upload)){
            foreach($upload as $uploaded_image){
                $file_path = public_path().'/product_gallery/'. $uploaded_image->filename;
                $resized_file = public_path().'/product_gallery/'. $uploaded_image->resized_name;
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
        
                if (file_exists($resized_file)) {
                    unlink($resized_file);
                }
        
               
        
            }
           
                upload::where('product_id', $id)->delete();
            
           
        }
        
       
        return response()->json(['message'=>'Successfully Delete'],200); 
    }

    public function editProduct($id){
        
        $product_find = product::find($id);
        // $data = DB::table('attributes as a')
        // ->join('product_attributes as pa','pa.attribute','=','a.id')
        // ->where('pa.product_id',$id)
        // ->get();
        $product_attribute = product_attribute::where('product_id', $id)->get();
        $group = product_group::all();
        $category = category::all();
        $attribute = attribute::all();
        $product = product::all();
        $brand = brand::all();
        foreach(explode(',', $product_find->category) as $row) {
            $tree_category[] = $row;        
        }
        foreach(explode(',', $product_find->related_product) as $row) {
            $related_product[] = $row;        
        }

       //return response()->json($data); 
        return view('admin/editProduct',compact('group','brand','product','category','attribute','product_attribute','product_find','tree_category','related_product'));
    }

    public function getEditAttribute($id){ 
        $product  = DB::table('product_attributes')
        ->select('*')
        ->where('product_id',$id)
        ->get();

    foreach($product as $row){

        $data  = DB::table('terms')
            ->select('*')
            ->where('attribute_id',$row->attribute)
            ->get();
            $output ='';
      $attribute = attribute::find($row->attribute);
      $output .= '<div id="'.$attribute->id.'">';
      $output .= '<br><label>Choose The '.$attribute->name.' </label><a float="right" class="pull-right href="javascript:void(0)" onclick="RemovePop('.$attribute->id.')"><i class="ft-trash-2"></i></a>';
      $output .= '<br><select style="width:100%" id="'.$attribute->name.'" name="'.$attribute->name.'[]" class="select2 form-control col-md-12" >';
      $output .= '<optgroup label="'.$attribute->name.'">';
        foreach ($data as $value){
            if($value->terms_name == $row->terms){
                $output .='<option selected value="'.$value->terms_name.'">'.$value->terms_name.'</option>'; 
            }
            else{
                $output .='<option value="'.$value->terms_name.'">'.$value->terms_name.'</option>'; 
            }
            
        }
        $output .= '</optgroup>';
        $output .= '</select>';
        $output .= '</div>';
      
      echo $output;
    }
}
public function getServerImages($id)
{
    $images = upload::where('product_id',$id)->get();

    $imageAnswer = [];

    foreach ($images as $image) {
        $imageAnswer[] = [
            'original' => $image->filename,
            'server' => $image->resized_name,
            'size' => File::size(public_path('/product_gallery/' . $image->filename))
        ];
    }

    return response()->json([
        'images' => $imageAnswer
    ]);
}

}
