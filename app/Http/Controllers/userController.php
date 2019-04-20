<?php

namespace App\Http\Controllers;
use App\Admin;
use Hash;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function dashboard(){
        return view('admin/dashboard');
    }
    public function user(){
        $emp = Admin::all();
        return view('admin/user',compact('emp'));
    }

    public function saveEmployee(Request $request){
        $request->validate([
            'emp_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'password'=>'required',
            'role_id'=>'required',
        ]);
        $admin = new Admin;
        $admin->emp_name = $request->emp_name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->password = Hash::make($request->password);
        $admin->role_id = $request->role_id;
        $admin->save();
        return response()->json(['message'=>'Successfully Save'],200); 
    }

    public function updateEmployee(Request $request){
        $request->validate([
            'emp_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'role_id'=>'required',
        ]);
        $admin = Admin::find($request->id);
        $admin->emp_name = $request->emp_name;
        $admin->email = $request->email;
        if($request->password){
        $admin->password = Hash::make($request->password);
        }
        $admin->phone = $request->phone;
        $admin->role_id = $request->role_id;
        $admin->save();
        return response()->json(['message'=>'Successfully Update'],200); 
    }
    public function editEmployee($id){
        $admin = Admin::find($id);
        return response()->json($admin); 
    }
    public function deleteEmployee($id){
       Admin::find($id)->delete();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }
}
