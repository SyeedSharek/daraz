<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin; 
use Session;






class AdminController extends Controller
{
    public function index(){

        return view('admin.admin_login');
    }

 

    public function show_deshbord(Request $request ){

       $admin_email =  $request->email;
       $admin_pass =  $request->password;

       $result = Admin::where('admin_email',$admin_email)->where('admin_password',$admin_pass)->first();



       if($result){

        Session::put('admin_id',$result->admin_id);
        Session::put('admin_name',$result->admin_name);

        return redirect('/deshbord');
       }
       else{
        Session::put('message','Email Or Password Invalid');

        return  redirect('/admins');
       }

       

        
    }

     


}
