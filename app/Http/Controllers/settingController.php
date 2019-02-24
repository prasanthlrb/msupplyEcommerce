<?php

namespace App\Http\Controllers;
use App\socialMedia;
use App\faq;
use App\ContactInfo;
use App\home_setting;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function about(){
        $data = home_setting::all();
        return view('/admin/setting/about',compact('data'));
    }

    public function privacyPolicy(){
        $data = home_setting::all();
        return view('/admin/setting/privacy_police',compact('data'));
    }
    public function terms_condition(){
        $data = home_setting::all();
        return view('/admin/setting/terms_condition',compact('data'));
    }
    public function shipping_detail(){
        $data = home_setting::all();
        return view('/admin/setting/shipping_detail',compact('data'));
    }

    // update 
    public function homeSettingabout(Request $request){
        if(!empty($request->id)){
            $data = home_setting::find($request->id);
            }else{
                $data = new home_setting;
            }
        $data->about_us = $request->about_us;
        $data->save();
        return redirect('/admin/about');
    }

    public function homeSettingshipping(Request $request){
        if(!empty($request->id)){
        $data = home_setting::find($request->id);
        }else{
            $data = new home_setting;
        }
        $data->shipping_details = $request->shipping_details;
        $data->save();
        return redirect('/admin/shipping_detail');
    }

    public function homeSettingterms(Request $request){
        if(!empty($request->id)){
        $data = home_setting::find($request->id);
    }else{
        $data = new home_setting; 
    }
        $data->terms = $request->terms;
        $data->save();
        return redirect('/admin/terms_condition');
    }

    public function homeSettingPrivacyPolice(Request $request){
        if(!empty($request->id)){
            $data = home_setting::find($request->id);
            }else{
                $data = new home_setting;
            }
        $data->payment_terms = $request->payment_terms;
        $data->save();
        return redirect('/admin/privacy-policy');
    }

    public function contactView(){
        $data = ContactInfo::all();
        if(count($data)>=1){
           // return view('admin.setting.contact',compact('data'));
           $data = $data[0];
           return view('admin.setting.contact',compact('data'));
        }else{
            $data = array(
                'id'=>'0',
                'email'=>'',
                'phone'=>'',
                'address'=>'',
                'described'=>'',
                'map1'=>'',
                'map2'=>''
            );
            //return response()->json($data['email']);
            return view('admin.setting.contact',compact('data'));
        }
        //       
    }
    public function contactUpdate(Request $request){
        if($request->id == 0){
            $data = new ContactInfo;
        }else{

            $data = ContactInfo::find($request->id);
        }
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->described = $request->described;
        $data->map1 = $request->map1;
        $data->map2 = $request->map2;
        $data->save();
        return redirect('/admin/contact-details');
    }
    public function faq(){
        $data = faq::all();
        return view('admin.setting.faq',compact('data'));
    }
    public function faqStore(Request $request){
        $faq = new faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return response()->json($faq);
    }
    public function faqUpdate(Request $request){
        $faq = faq::find($request->id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return response()->json($faq);
    }
    public function editFaq($id){
        $faq = faq::find($id);
        return response()->json($faq); 
    }
    public function deleteFaq($id){
        $faq = faq::find($id);
        $faq->delete();
        return response()->json($id); 
    }
    public function socialMedia(){
        $data = socialMedia::all();
        if(count($data)>=1){
            $data = $data[0];
        return view('admin.setting.social',compact('data'));
        }else{
            $data = array(
                'id'=>'0',
                'facebook'=>'',
                'twitter'=>'',
                'google'=>'',
                'pinterest'=>'',
                'flickr'=>'',
                'youtube'=>'',
                'vimeo'=>'',
                'instagram'=>'',
                'linkedin'=>''
            );
            return view('admin.setting.social',compact('data'));
        }
    }
    public function updatesocialMedia(Request $request){
        if($request->id == 0){
            $data = new socialMedia;
        }else{

            $data = socialMedia::find($request->id);
        }
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->google = $request->google;
        $data->pinterest = $request->pinterest;
        $data->flickr = $request->flickr;
        $data->youtube = $request->youtube;
        $data->vimeo = $request->vimeo;
        $data->instagram = $request->instagram;
        $data->linkedin = $request->linkedin;
        $data->save();
        return redirect('/admin/social-details');
    }



}
