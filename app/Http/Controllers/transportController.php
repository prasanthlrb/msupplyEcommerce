<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transport;
use File; 
class transportController extends Controller
{
   public function viewTransport(){
       $transport = transport::all();
       return view('admin.transport',compact('transport'));
   }

   public function saveTransport(Request $request){
        $fileName = null;
        if ($request->file('vehicle_image') != "") {
            $image = $request->file( 'vehicle_image');
            $fileName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('transport/'), $fileName);
        }
       $transport = new transport;
       $transport->vehicle_name = $request->vehicle_name;
       $transport->price = $request->price; 
       $transport->vehicle_image = $fileName;
       $transport->save();
        return response()->json(['message' => 'Successfully Save'], 200); 
   }

   public function editTransport($id){
       $transport = transport::find($id);
        return response()->json($transport);
   }

   public function updateTransport(Request $request){
        $fileName = null;
        $transport = transport::find($request->id);
        $transport->vehicle_name = $request->vehicle_name;
        $transport->price = $request->price;
                    if ($request->file('vehicle_image') != "") {
                   if( $request->vehicle_image1 != ""){
                       $file= $request->vehicle_image1;
                      $filename1 = public_path(). '/transport/'.$file;
                      \File::delete($filename1);
                   }
                        $image = $request->file('vehicle_image');
                        $fileName = rand() . '.' . $image->getClientOriginalExtension();
                        $image->move(public_path('transport/'), $fileName);
                        $transport->vehicle_image = $fileName;
                    }
        $transport->save();
        return response()->json(['message' => 'Successfully Update'], 200); 
   }

   public function deleteTransport($id){
       $transport = transport::find($id);
       $file_name = $transport->vehicle_image;
       if(isset($file_name)){
            $filename1 = public_path(). '/transport/'.$file_name;
              \File::delete($filename1);
       }
       $transport->delete();
        return response()->json(['message' => 'Successfully Delete'], 200);
   }
}
