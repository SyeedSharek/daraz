<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

use Session;

class CustomerController extends Controller
{
    public function login_customer(Request $request){
       
        $email = $request->email;
        $password = $request->password;

        $result = Customer::where('email',$email)->where('password',$password)->first();

        if($result){

            Session::put('id',$result->id);


            return redirect('/checkout_list');
        }
        else
        {
            return redirect('/login_check');
            
        }

        
        

    }

    public function registration(Request $request){

        $data = array();
        $data['id'] = $request->id;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['mobile'] = $request->mobile;

        $id = Customer::insertGetId($data);
        Session::put('id',$id);
        Session::put('name',$request->name);

        return redirect('/checkout_list');
        


    }

    public function logout(){

        Session::flush();
        return redirect('/');
    }

   


}
