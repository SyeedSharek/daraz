<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
 
use Session;


class SupperAdminController extends Controller
{
    public function deshbord(){

        $this->AdminAuthCheck();

        return view('admin.deshbord');
    }

    public function logout(){

        Session::flush();
        return redirect('admins');

    }

    public function AdminAuthCheck(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return;
        }

        else{
            return redirect('/admins')->send();
        }
    }
}
