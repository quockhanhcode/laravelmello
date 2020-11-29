<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('/admin-layout');
        }
        else{
            return Redirect::to('/login')->send();
        }
    }

    public function login(){
        return view('admin.login');
    }

    public function admin_layout(){
        $this->AuthLogin();
        return view('admin.admin_layout');
    }


    public function admin_layout_manager(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();

        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/admin-layout');
        }
        else{
            Session::put('message',"Người dùng không tồn tại");
            return Redirect::to('/login');
        }
    }

    public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/login');
    }

}
