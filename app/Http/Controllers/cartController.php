<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\color;
use App\color_category;
use App\product;
use App\optionGroup;
use App\optionValue;
use Cart;
class cartController extends Controller
{
    public function postCartItem(Request $request){
        $product = product::find($request->product_id);
        $price = $product->sales_price;
        $additionalPrice =0;
        $optionData = $request;


        $option_group = optionGroup::where('product_id',$request->product_id)->get();
        $optionName =$request->product_id;
        // $option = '';
        if(count($option_group) > 0){
        foreach($option_group as $group){
            $optionVal = optionValue::where('group_id',$group->id)->where('name',$request[$group->id])->first();
            $optionName = $optionName.'_'.$group->id.'_'.$optionVal->id;
            if($optionVal->home_option != 1){
                if($price < $optionVal->current_price){
                    $price = $optionVal->current_price;
                }
                if($optionVal->additional_price !=null){
                    $additionalPrice +=$optionVal->additional_price;
                }
            }

            $getOptionData[] = $optionVal;
        }
        $getOption['option'] = $getOptionData;
    }

        if($request->colors){
            $optionName =$optionName.'_'.$request->colors;
            $colorPrice = color::find($request->colors);
            $additionalPrice += $colorPrice->price;
            $getOption['colors'] = $colorPrice;
        }else{

        }


        $cart_qty = Cart::get($optionName);
        $totalQty = $cart_qty['quantity'] + $request->qty;
        $total_price = ($price+$additionalPrice) * $totalQty;

        if($product->stock_quantity >= $totalQty){
            Cart::add(array(
                'id' => $optionName,
                'name' => $product->product_name,
                'price' => $total_price * $request->qty,
                'quantity' => $request->qty,
                'attributes' =>$getOption,
            ));
            $status =0;
        }else{
            $status =1;
        }

    $total = Cart::getTotal();
    $quantity = count(Cart::getContent());
     //return response()->json(array($status,$total,$quantity));
        return response()->json(Cart::getContent());
    }



    public function getCartItem(Request $request){
        return response()->json($request);
    }
}
