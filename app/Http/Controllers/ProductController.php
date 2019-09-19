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
use Auth;
use App\role;
use Yajra\DataTables\Facades\DataTables;
use App\product_log;
use App\color_category;
use App\color;
use App\optionGroup;
use App\optionValue;
use App\custom_qty;
use App\unit;
use App\product_unit;
use App\tiles_stock_location;
use App\distance_price;
class productController extends Controller
{
    //Brand Edit Delete View Update Process Function Start Here
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function viewBrand(){
        $data = brand::all();
       // return response()->json($data);
       $role = role::find(Auth::guard('admin')->user()->role_id);
        return view('admin.brand',compact('data','role'));
    }

    public function brandStore(Request $request){
        $request->validate([
            'brand'=>'required'
        ]);
    //image upload
    $fileName = null;
    if($request->file('brand_image')!="" || $request->file('brand_image') != null){
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
        $role = role::find(Auth::guard('admin')->user()->role_id);
        return view('admin/attribute',compact('attribute','terms','role'));
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
        $role = role::find(Auth::guard('admin')->user()->role_id);
           return view('admin/category',compact('category','linkCat2','role'));

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
        $category = category::all();
        $role = role::find(Auth::guard('admin')->user()->role_id);
        $units = unit::all();
        return view('admin.newProduct',compact('group','brand','product','attribute','category','role','units'));
    }
        //category Edit Delete View Update Process Function End Here

         //Group Edit Delete View Update Process Function start Here
        public function productGroup(){
            $product_group = product_group::all();
            $role = role::find(Auth::guard('admin')->user()->role_id);
            return view('admin.group',compact('product_group','role'));
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



      $output = '<div id="'.$attribute->id.'">';
      $output .= '<br><label>Choose The '.$attribute->name.' </label><a float="right" class="pull-right href="javascript:void(0)" onclick="RemovePop('.$attribute->id.')"><i class="ft-trash-2"></i></a>';
      $output .= '<br><select style="width:100%" id="'.$attribute->name.'" name="'.$attribute->name.'" class="select2 form-control col-md-12" >';
      $output .= '<optgroup label="'.$attribute->name.'">';
        foreach ($data as $value){
            $output .='<option value="'.$value->id.'">'.$value->terms_name.'</option>';
        }
        $output .= '</optgroup>';
        $output .= '</select>';
        $output .= '</div>';

      echo $output;
    }
    public function productSave(Request $request){
        $request->validate([
            //'imgInp'=>'required',
            'category'=>'required',
            'product_name'=>'required|unique:products',
        ]);

        //image upload
    $fileName = null;
    if($request->file('imgInp')!=""){
    $image = $request->file('imgInp');
    $fileName = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('product_img/'), $fileName);
    }

        $product = new product;
        $product->category = collect($request->category)->implode(',');
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
        $product->tax = $request->tax;
        $product->tax_type = $request->tax_type;
        $product->shipping_type = $request->shipping_type;
        $product->shipping_amount = $request->shipping_amount;
        $product->related_product = collect($request->related_product)->implode(',');
        $product->hot_product = $request->hot_product;
        $product->review = $request->review;
        $product->new_product = $request->new_product;
        $product->recommended = $request->recommended;
        $product->featured = $request->featured;
        $product->group_product = $request->group_product;
        $product->price_type = $request->price_type;
        $product->value_type = $request->value_type;
        $product->amount = $request->amount;
        $product->items = $request->items;
        $product->order_limit = $request->order_limit;
        $product->save();

        if(isset($request->attribute)){

             foreach(explode(',',$request->attribute) as $id) {
                $attribute_data[] = attribute::find($id);
            }

            if(count($attribute_data) > 0){
                 for ($x = 0; $x < count($attribute_data); $x++) {
                    $attrName = $attribute_data[$x]->name;
                    $ter = term::where('id',$request[$attrName])->first();
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

         $product_log = new product_log;
         $product_log->product_id = $product->id;
         $product_log->type ='Create';
         $product_log->employee_name = Auth::guard('admin')->user()->emp_name;
         $product_log->save();
    if($request->optionSet){
        $data = explode(',',$request->optionSet);
        foreach($data as $x){
            $optionGroup = new optionGroup;
            $optionGroup->product_id = $product->id;
            $optionGroup->group_name = $request['optionSetRow'.$x];
            $optionGroup->option_show_type = $request['option_show_type'.$x];
            $optionGroup->save();

            foreach($request['optionName'.$x] as $key =>$value){
                $optionValue = new optionValue;
                $optionValue->group_id = $optionGroup->id;
                $optionValue->name = $value;
                if($key !=0){
                    $optionValue->current_price = $request['current_price'.$x][$key-1];
                    $optionValue->additional_price = $request['additional_price'.$x][$key-1];
                }else{
                    $optionValue->home_option = '1';
                }
                $optionValue->save();
            }
        }

    }
    
    if(isset($request->price_distance)){
        foreach ($request->price_distance as $key => $value) {
            $data = new distance_price;
            $data->product_id = $product->id;
            $data->distance = $value;
            $data->price = $request->distance_price[$key];
            $data->save();
            
    }

    }
    if(isset($request->customqty)){
    if(count($request->customqty) > 0){
        foreach($request->customqty as $data){
            $custom_qty = new custom_qty;
            $custom_qty->product_id = $product->id;
            $custom_qty->customqty = $data;
            $custom_qty->save();
        }

    }
    }
    if(isset($request->units)){
        foreach(explode(',',$request->units) as $id) {
            $unit_data[] = unit::find($id);
        }
        if(count($unit_data) > 0){
        foreach($unit_data as $units){
            $product_unit = new product_unit;
            $product_unit->unit_price = $request['unit'.$units->id];
            $product_unit->unit_name = $units->unit_name;
            $product_unit->product_id = $product->id;
            $product_unit->unit_id = $units->id;
            $product_unit->save();
        }
    }
    }


        return response()->json($product->id);
    }


    public function productUpdate(Request $request){
        $request->validate([
           // 'imgInp'=>'required',
            'category'=>'required',
            //'product_name'=>'required|unique:products',
            // 'sku'=>'required|unique:product_datas',
        ]);
        $product = product::find($request->product_page_id);
        $product->category = collect($request->category)->implode(',');
        $product->product_name = $request->product_name;
        $product->group = $request->group;
        $product->brand_name = $request->brand_name;
        $product->product_description = $request->product_description;
        $product->seo_title = $request->seo_title;
        $product->seo_description = $request->seo_description;
        $product->seo_keywords = $request->seo_keywords;
        $fileName = null;
        if($request->file('imgInp')!=""){
        $image = $request->file('imgInp');
        $fileName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('product_img/'), $fileName);
        $product->product_image = $fileName;
        }
        $product->regular_price = $request->regular_price;
        $product->sales_price = $request->sales_price;
        $product->sku = $request->sku;
        $product->stock_quantity = $request->stock_quantity;
        $product->low_stock = $request->low_stock;
        $product->weight = $request->weight;
        $product->length = $request->length;
        $product->width = $request->width;
        $product->height = $request->height;
        $product->tax = $request->tax;
        $product->tax_type = $request->tax_type;
        $product->shipping_type = $request->shipping_type;
        $product->shipping_amount = $request->shipping_amount;
        $product->related_product = collect($request->related_product)->implode(',');
        $product->hot_product = $request->hot_product;
        $product->review = $request->review;
        $product->new_product = $request->new_product;
        $product->recommended = $request->recommended;
        $product->featured = $request->featured;
        $product->group_product = $request->group_product;
        $product->price_type = $request->price_type;
        $product->value_type = $request->value_type;
        $product->amount = $request->amount;
        $product->items = $request->items;
        $product->order_limit = $request->order_limit;
        $product->save();

        if(isset($request->attribute)){

            foreach(explode(',', $request->attribute) as $id) {
                $attribute_data[] = attribute::find($id);
            }
            if(count($attribute_data) > 0){
                for ($x = 0; $x < count($attribute_data); $x++) {
                    $attrName = $attribute_data[$x]->name;
                    $ter = term::where('id',$request[$attrName])->first();
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
         $product_log = new product_log;
         $product_log->product_id = $request->product_page_id;
         $product_log->type ='Updated';
         $product_log->employee_name = Auth::guard('admin')->user()->emp_name;
         $product_log->save();

        if($request->optionSet){
            $data = explode(',',$request->optionSet);
            $opGroup = optionGroup::where('product_id',$request->product_page_id)->get();
            if(count($opGroup) >0){
                foreach($data as $indexed => $datas){
                    if(count($opGroup) > $indexed ){
                        $optionGroup = optionGroup::find($opGroup[$indexed]->id);
                        $optionGroup->group_name = $request['optionSetRow'.$datas];
                        $optionGroup->option_show_type = $request['option_show_type'.$datas];
                        $optionGroup->save();
                        $opValue = optionValue::where('group_id',$opGroup[$indexed]->id)->get();
                        foreach($request['optionName'.$datas] as $key =>$value){
                            if(count($opValue) > $key){
                                $optionValue = optionValue::find($opValue[$key]->id);
                                $optionValue->name = $value;
                                if(!$optionValue->home_option == 1){
                                    $optionValue->current_price = $request['current_price'.$datas][$key-1];
                                    $optionValue->additional_price = $request['additional_price'.$datas][$key-1];
                                }
                                $optionValue->save();
                            }else{
                                $optionValue = new optionValue;
                                $optionValue->group_id = $optionGroup->id;
                                $optionValue->name = $value;
                                if($key !=0){
                                    $optionValue->current_price = $request['current_price'.$datas][$key-1];
                                    $optionValue->additional_price = $request['additional_price'.$datas][$key-1];
                                }else{
                                    $optionValue->home_option = '1';
                                }
                                $optionValue->save();

                            }

                        }

                    }else{
                        $optionGroup = new optionGroup;
                        $optionGroup->product_id = $request->product_page_id;
                        $optionGroup->group_name = $request['optionSetRow'.$datas];
                        $optionGroup->option_show_type = $request['option_show_type'.$datas];
                        $optionGroup->save();
                        foreach($request['optionName'.$datas] as $key =>$value){
                            $optionValue = new optionValue;
                            $optionValue->group_id = $optionGroup->id;
                            $optionValue->name = $value;
                            if($key !=0){
                                $optionValue->current_price = $request['current_price'.$datas][$key-1];
                                $optionValue->additional_price = $request['additional_price'.$datas][$key-1];
                            }else{
                                $optionValue->home_option = '1';
                            }
                            $optionValue->save();
                        }
                    }
                }
            }else{
                foreach($data as $x){
                    $optionGroup = new optionGroup;
                    $optionGroup->product_id = $request->product_page_id;
                    $optionGroup->group_name = $request['optionSetRow'.$x];
                    $optionGroup->option_show_type = $request['option_show_type'.$x];
                    $optionGroup->save();

                    foreach($request['optionName'.$x] as $key =>$value){
                        $optionValue = new optionValue;
                        $optionValue->group_id = $optionGroup->id;
                        $optionValue->name = $value;
                        if($key !=0){
                            $optionValue->current_price = $request['current_price'.$x][$key-1];
                            $optionValue->additional_price = $request['additional_price'.$x][$key-1];
                        }else{
                            $optionValue->home_option = '1';
                        }
                        $optionValue->save();
                    }
               }
            }


        }

        //Custom QTY Module
        $customqty = custom_qty::where('product_id',$request->product_page_id)->get();
        if(count($customqty) > 0){
            $countQTY =1;
            foreach($request->customqty as $key => $data){
                if(count($customqty) >= $countQTY){
                    $custom_qty = custom_qty::find($customqty[$key]->id);
                    $custom_qty->customqty = $data;
                    $custom_qty->save();
                }else{
                $custom_qty = new custom_qty;
                $custom_qty->product_id = $request->product_page_id;
                $custom_qty->customqty = $data;
                $custom_qty->save();
                }
                $countQTY++;
            }

        }else{
            if(isset($request->customqty)){

                if(count($request->customqty) > 0){
                foreach($request->customqty as $data){
                    $custom_qty = new custom_qty;
                    $custom_qty->product_id = $request->product_page_id;
                    $custom_qty->customqty = $data;
                    $custom_qty->save();
                }
            }
            }
        }

          if(isset($request->price_distance)){
        foreach ($request->price_distance as $key => $value) {
            $data = new distance_price;
            $data->product_id = $product->id;
            $data->distance = $value;
            $data->price = $request->distance_price[$key];
            $data->save();
            
    }

    }

        //units module
         $unit_data = array();
       if(isset($request->units)){
        foreach(explode(',',$request->units) as $id) {
            $unit_data[] = unit::find($id);
        }
       }
       $product_unit = product_unit::where('product_id',$request->product_page_id)->get();
       if(count($product_unit) > 0){
        foreach($unit_data as $key => $units){
            $product_unit1 = product_unit::where('product_id',$request->product_page_id)->where('unit_id',$units->id)->get();
            if(count($product_unit1) >0){
                $product_unit2 = product_unit::find($product_unit1[0]->id);
                $product_unit2->unit_price = $request['unit'.$units->id];
                $product_unit2->save();
            }else{
                $product_unit = new product_unit;
                $product_unit->unit_price = $request['unit'.$units->id];
                $product_unit->unit_name = $units->unit_name;
                $product_unit->product_id = $request->product_page_id;
                $product_unit->unit_id = $units->id;
                $product_unit->save();
            }
        }

       }else{
        if(count($unit_data) > 0){
            foreach($unit_data as $units){
                $product_unit = new product_unit;
                $product_unit->unit_price = $request['unit'.$units->id];
                $product_unit->unit_name = $units->unit_name;
                $product_unit->product_id = $request->product_page_id;
                $product_unit->unit_id = $units->id;
                $product_unit->save();
            }
        }
       }


        return response()->json($request->product_page_id);
    }

    //removeOption in product page
    public function removeOption($id){
        optionValue::find($id)->delete();
        return response()->json(['message'=>'Option Remove Successfully Delete'],200);
    }


    public function removeCustomQty($id){
        $custom_qty = custom_qty::find($id)->delete();
        return response()->json(['message'=>'Custom QTY is Successfully Delete'],200);
    }



    //remove option Group with option
    public function removeOptionGroup($id){
        optionGroup::find($id)->delete();
        optionValue::where('group_id',$id)->delete();
        return response()->json(['message'=>'Option Row is Successfully Delete'],200);
    }

    public function viewProduct(){
        $role = role::find(Auth::guard('admin')->user()->role_id);
        return view('admin/viewProduct',compact('role'));
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
        $optionGroup = optionGroup::where('product_id',$id)->get();
        if(count($optionGroup) > 0){
            foreach($optionGroup as $group){
                optionValue::where('group_id',$group->id)->delete();
            }
            optionGroup::where('product_id',$id)->delete();

        }

        distance_price::where('product_id',$id)->delete();


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
        $optionGroup = optionGroup::where('product_id',$id)->get();
        $distance_price = distance_price::where('product_id',$id)->get();
        foreach(explode(',', $product_find->category) as $row1) {
            $tree_category[] = $row1;
        }

        foreach(explode(',', $product_find->related_product) as $row) {
            $related_product[] = $row;
        }
        $customqty = custom_qty::where('product_id',$id)->get();

       //return response()->json($data);
       $product_unit = product_unit::where('product_id',$id)->get();
       $role = role::find(Auth::guard('admin')->user()->role_id);
       $units = unit::all();
       if(count($optionGroup) > 0){
        $optionGroupGetter = optionGroup::where('product_id',$id)->select('id')->get();
        $optionValue = optionValue::whereIn('group_id',$optionGroupGetter)->get();
        return view('admin/editProduct',compact('distance_price','optionGroup','optionValue','group','brand','product','category','attribute','product_attribute','product_find','tree_category','related_product','role','customqty','product_unit','units'));
    }else{
        return view('admin/editProduct',compact('distance_price','optionGroup','group','brand','product','category','attribute','product_attribute','product_find','tree_category','related_product','role','customqty','product_unit','units'));
    }

    }

    public function distancePriceDeleteById($id){
            distance_price::find($id)->delete();
            return response()->json(['message'=>'Successfully Delete'],200);

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
      $output .= '<br><select style="width:100%" id="'.$attribute->name.'" name="'.$attribute->name.'" class="select2 form-control col-md-12" >';
      $output .= '<optgroup label="'.$attribute->name.'">';
        foreach ($data as $value){
            if($value->terms_name == $row->terms){
                $output .='<option selected value="'.$value->id.'">'.$value->terms_name.'</option>';
            }
            else{
                $output .='<option value="'.$value->id.'">'.$value->terms_name.'</option>';
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

public function getProduct(){
    $product = product::where('category','!=',1)->where('category','!=',21)->get();
    return Datatables::of($product)
    ->addColumn('product_name', function($product){

        return '<td><a href="/admin/editProduct/'.$product->id.'">
       '.$product->product_name.'</a>
        </td>';
        })
    ->addColumn('product_image', function($product){

        if($product->category == 1){
            return '<td><img src="http://www.kagtech.net/KAGAPP/Partsupload/'.$product->product_image.'" alt="" style="width: 80px"></td>';
        }else{
            return '<td><img src="/product_img/'.$product->product_image.'" alt="" style="width: 80px"></td>';
        }

        })
        ->addColumn('delete', function($product){
            return '<td class="text-center"><i class="ft-trash-2 deleteIcon" onclick="Delete('.$product->id.')"></i></td>';
        })
        ->addIndexColumn()
    ->rawColumns(['product_name','product_image','delete'])
    ->make(true);
}

    public function viewColorCategory(){
        $color_category = color_category::all();
        return view('admin.color_category',compact('color_category'));
    }
    public function viewColors($id){
        $color = color_category::find($id);
        return view('admin.colors',compact('color'));
    }

    public function saveColorCategory(Request $request){
        $request->validate([
             'title'=>'required',
             'colors'=>'required',
         ]);
        $color_category = new color_category;
        $color_category->title = $request->title;
        $color_category->colors = $request->colors;
        $color_category->status = $request->status;
        $color_category->save();
        return response()->json(['message'=>'Color Category Save Successfully'],200);
    }
    public function editColorsCategory($id){
        $color_category = color_category::find($id);
        return response()->json($color_category);
    }
    public function deleteColorsCategory($id){
        color_category::find($id)->delete();
        return response()->json(['message'=>'Color Category Delete Successfully'],200);
    }

    public function loadColorCategory(){
        $color_category = color_category::all();
        $output ='';
        foreach($color_category as $row){
            $output .=' <div class="col-md-12">
            <div class="card p-1 text-white" style="background:'.$row->colors.'">
              <div class="card-content">
                <div class="card-body">
                  <div class="float-left">
                    <p class="white mb-0">
                    <strong>'.$row->title.'</strong>
                    </p>
                  </div>
                  <div class="float-right">
                      <button class="btn btn-warning" onclick="editCat('.$row->id.')">Edit</button>
                      <button class="btn btn-danger" onclick="deleteCat('.$row->id.')">Delete</button>
                  <a href="/admin/colors/'.$row->id.'" class="btn btn-dark">Open Colors</a>
                  </div>
                </div>
              </div>
            </div>
          </div>';
        }
        print $output;
    }

    public function updateColorCategory(Request $request){
        $request->validate([
            'title'=>'required',
            'colors'=>'required',
        ]);
        $color_category = color_category::find($request->id);
        $color_category->title = $request->title;
        $color_category->colors = $request->colors;
        $color_category->status = $request->status;
        $color_category->save();
        return response()->json(['message'=>'Color Category Update Successfully'],200);
    }

    public function loadColor($id){
        $output ='';
        $colors = color::where('category',$id)->get();
        if(count($colors) > 0){
            foreach($colors as $row){
                $output .=' 
                
                
                <div class="card mb-1 col-md-3">
                <div class="card-content">
                  <div class="bg-lighten-1 height-50" style="background-color:'.$row->color.'">
                  <span style="color: #fff;
                  font-size: 16px;
                  font-weight: 600;
                  margin: 10px;">'.$row->price.' Rs</span></div>
                  <div class="p-1">
                    <p class="mb-0">
                      <strong>'.$row->name.'</strong>
                      <div class="text-muted float-right">

                          <div class="btn-group" role="group" aria-label="Third Group">
                              <button type="button" class="btn btn-icon btn-outline-warning" onclick="editColor('.$row->id.')"><i class="ft ft-edit"></i></button>
                              <button type="button" class="btn btn-icon btn-outline-danger" onclick="deleteColor('.$row->id.')"><i class="la la-trash"></i></button>
                          </div>
                      </div>
                    </p>
                    <p class="mb-0">'.$row->code.'</p>
                  </div>
                </div>
              </div>';
            }
        }else{
            $output .='  <div class="card mb-1 col-md-3">
            <p>Colors Not Found</p>
            </div>';
        }

        echo $output;
    }

    public function colorsSave(Request $request){
        $colors = new color;
        $colors->name = $request->name;
        $colors->category = $request->category;
        $colors->price = $request->price;
        $colors->color = $request->color;
        $colors->code = $request->code;
        $colors->save();
        return response()->json(['message'=>'Color Category Update Successfully'],200);
    }
    public function colorsUpdate(Request $request){
        $colors = color::find($request->id);
        $colors->name = $request->name;
        $colors->price = $request->price;
        $colors->color = $request->color;
        $colors->code = $request->code;
        $colors->save();
        return response()->json(['message'=>'Color Category Update Successfully'],200);
    }

    public function editColors($id){
        $color = color::find($id);
        return response()->json($color);
    }

    public function deleteColors($id){
        color::find($id)->delete();
        return response()->json(['message'=>'Color Category Delete Successfully'],200);
    }

    public function viewUnit(){
        $units = unit::all();
        return view('admin.unit',compact('units'));
    }
    public function editUnit($id){
        $units = unit::find($id);
        return response()->json($units);
    }
    public function deleteUnit($id){
        unit::find($id)->delete();
        return response()->json(['message'=>'Unit Delete Successfully'],200);
    }
    public function unitStore(Request $request){
        $request->validate([
            'unit_name'=>'required',
        ]);
        $units = new unit;
        $units->unit_name = $request->unit_name;
        $units->save();
        return response()->json(['message'=>'Unit Save Successfully'],200);
    }
    public function unitUpdate(Request $request){
        $request->validate([
            'unit_name'=>'required',
        ]);
        $units = unit::find($request->id);
        $units->unit_name = $request->unit_name;
        $units->save();
        return response()->json(['message'=>'Unit Update Successfully'],200);
    }

    //get unit
    public function get_unit($id){
      $data  = unit::find($id);
      $output = '<div class="form-group" id="unitRow'.$data->id.'"><label for="projectinput1">'.$data->unit_name.' QTY Price</label>';
      $output .='<a float="right" class="pull-right href="javascript:void(0)" onclick="RemoveUnit('.$data->id.')"><i class="ft-trash-2"></i></a>';
      $output .='<input type="text" class="form-control" name="unit'.$data->id.'" id="unit'.$data->id.'">';
      $output .='</div>';
      echo $output;
    }

    public function productUnitDelete($id){
        product_unit::find($id)->delete();
        return response()->json(['message'=>'Unit Delete Successfully'],200);
    }
    public function productUnitUpdate($id,$data){
        $product_unit = product_unit::find($id);
        $product_unit->unit_price = $data;
        $product_unit->save();
        return response()->json(['message'=>'Unit Update Successfully'],200);
    }

    public function uploadTilesJSON(Request $request){
        try{
        $getData = json_decode($request->datas);
        foreach($getData as $row){
             $product = product::where('product_name',$row->Product)->get();
            if(count($product) >0){
                $change_product = product::find($product[0]->id);
                 $change_product->sales_price = $row->Price;
                // $change_product->stock_quantity = $row->ClosingBalance;
                 $change_product->save();
                 $location = tiles_stock_location::where('location',$request->location)->where('product_id',$change_product->id)->first();
                 if(isset($location)){
                    $loc = tiles_stock_location::find($location->id);
                    $loc->stock = $row->ClosingBalance;
                    $loc->save();
                 }else{
                     $loc = new tiles_stock_location;
                     $loc->product_id = $change_product->id;
                     $loc->location = $request->location;
                    $loc->stock = $row->ClosingBalance;
                    $loc->save();
                 }
            //$result[]=$change_product;
            }
            // else{
            //     $balance[]=$row;
            // }
        }
            }
        catch (\Exception $e) {
            return response()->json($e);
            //return $e->getMessage();
        }
        return response()->json(['message'=>'Tiles Update Successfully'],200);
    }
    public function updateTilesJSON(Request $request){
        try{
        $getData = json_decode($request->datas);
        foreach($getData as $row){
            // $product = product::where('product_name',$row->ProductName)->get();
            // if(count($product) >0){
                if($row->subcategory == "Floor"){
                    $subcategory = 3;
                }else{
                    $subcategory = 2;
                }
                $new_product = new product;
                $new_product->product_name = $row->ProductName;
                $new_product->category =1;
                $new_product->brand_name =2;
                $new_product->sub_category = $subcategory;
                $new_product->width = $row->ProductSize;
                $new_product->weight = $row->Productweight;
                $new_product->items = $row->Noofpics;
                $new_product->product_description = $row->description;
                $new_product->product_image = $row->image;
                $new_product->length = $row->Squarefeet;
                $new_product->save();
             
            //}
        }
        //return response()->json(['message'=>'Upload Update Successfully'],200);
        return response()->json($result);
    }
        catch (\Exception $e) {
            return response()->json($e);
            //return $e->getMessage();
        }
    }

    public function viewTitle(){
        $subcategory = category::whereIn('parent_id',['2','3'])->get();
        return view('admin.tiles',compact('subcategory'));
    }

    public function updateTilesSubCategory(Request $request){
         $product = product::find($request->product_id);
         $product->second_sub_category = $request->data;
         $product->save();
        //return response()->json($request);
        return response()->json(['message'=>'SubCategory Update Successfully'],200);
    }

    public function getTilesProduct(){
        $product = product::where('category',1)->get();
    return Datatables::of($product)
    ->addColumn('product_name', function($product){

        return '<td><a href="javascript:void(null)" onclick="getProduct('.$product->id.')">
       '.$product->product_name.'</a>
        </td>';
        })
    ->addColumn('product_image', function($product){

        if($product->category == 1){
            return '<td><img src="http://www.kagtech.net/KAGAPP/Partsupload/'.$product->product_image.'" alt="" style="width: 80px"></td>';
        }else{
            return '<td><img src="/product_img/'.$product->product_image.'" alt="" style="width: 80px"></td>';
        }

        })
        ->addColumn('category', function($product){
            if($product->second_sub_category != null){
                $secondSubCat = category::find($product->second_sub_category);
                return '<td class="text-success">'.$secondSubCat->category_name.'</td>';
            }else{
                if($product->sub_category ==  3){
                    return '<td class="text-success">Floor Tiles</td>';
                }else{
                    return '<td class="text-success">Wall Tiles</td>';
                }
            }

        })

        ->addColumn('delete', function($product){
            return '<td class="text-center"><i class="ft-trash-2 deleteIcon" onclick="Delete('.$product->id.')"></i></td>';
        })
        ->addIndexColumn()
    ->rawColumns(['product_name','product_image','category','delete'])
    ->make(true);
    }
    public function deleteAll(){
       product::where("category",1)->delete();
        return response()->json(['message'=>'Upload Update Successfully'],200);
    }

    public function getSingleTilesProduct($id){
        $product = product::find($id);
        $stock = tiles_stock_location::where('product_id',$product->id)->get();
        $output ='';
        $subcategory = null;
        if($product->second_sub_category !=0){
            $category = category::find($product->second_sub_category);
            if(isset($category)){
                $subcategory = $category->id;
            }
        }
        if(count($stock) >0){
            foreach($stock as $row){
                $output .=' <tr>
                             <td>Stock Of '.$row->location.'</td>
                                    <td class="font-weight-bold">'.$row->stock.'</td>
                                </tr>';
            }
        }else{
            $output .=' <tr>
                             <td>Stock </td>
                                    <td class="font-weight-bold">No Stock</td>
                                </tr>';
        }
        return response()->json(array($product,$output,$subcategory));
    }

    //tiles price update

    public function updatePriceType(Request $request){
        $product = product::find($request->product_id);
        $product->price_type = $request->data;
        $product->save();
        return response()->json(['message'=>'Upload Successfully'],200);
    }
    public function updateValueType(Request $request){
       $product = product::find($request->product_id);
        $product->value_type = $request->data;
        $product->save();
        return response()->json(['message'=>'Upload Successfully'],200);
    }
    public function updateAmount(Request $request){
       $product = product::find($request->product_id);
        $product->amount = $request->data;
        $product->save();
        return response()->json(['message'=>'Upload Successfully'],200);
    }
}
