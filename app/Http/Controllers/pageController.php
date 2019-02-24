<?php

namespace App\Http\Controllers;
use App\home_setting;
use App\ContactInfo;
use App\faq;
use Illuminate\Http\Request;

class pageController extends Controller
{
   
    public function about(){
        $data = home_setting::all();
        return view('about',compact('data'));
       }
       public function terms(){
        $data = home_setting::all();
        return view('terms',compact('data'));
       }
       public function shipping_details(){
        $data = home_setting::all();
        return view('shipping_details',compact('data'));
       }
       public function privacy(){
        $data = home_setting::all();
        return view('privacy',compact('data'));
       }
    
       public function faq(){
        $faq = faq::all();
        return view('faq',compact('faq'));
       }
    
       public function contact(){
        $contact_info = Contactinfo::all();
        return view('contact',compact('contact_info'));
       }
}
