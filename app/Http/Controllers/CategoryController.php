<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryController extends Controller
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

    public function add_category(){
        $this->AuthLogin();
        return view('admin.category.add_category');
    }

    public function show_category(){
        $this->AuthLogin();
        return view('admin.category.show_category');
    }
    
    public function save_category(Request $request){
        $this->AuthLogin();
        $data = array();

        $data['category_name'] = $request->category_name;

        DB::table('category_product')->insert($data);
        Session::put('message','Thêm thành công');
        return Redirect::to('add-category');
    }

    public function all_category(){
        $this->AuthLogin();

        $all_category = DB::table('category_product')->get();
        $manager_cate = view('admin.category.show_category')->with('show_category',$all_category);
        return view('admin.admin_layout')->with('admin.category.show_category',$manager_cate);
    }

    public function edit_category($category_id)
    {
        $this->AuthLogin();
        $edit_category = DB::table('category_product')->where('category_id',$category_id)->get();
        $manager_cate = view('admin.category.edit_category')->with('edit_category',$edit_category);
        return view('admin.admin_layout')->with('admin.category.edit_category',$manager_cate);
    }

    public function update_category(Request $request, $category_id){
        $this->AuthLogin();
        $data = array();

        $data['category_name'] = $request->category_name;

        DB::table('category_product')->where('category_id',$category_id)->update($data);
        return Redirect::to('show-category');
    }

    public function delete_category($category_id){
        $this->AuthLogin();
        DB::table('category_product')->where('category_id',$category_id)->delete();
        return Redirect::to('show-category');
    }

    //Tìm kiếm san pham theo danh muc
    public function product_list($category_id)
    {
        $cate = DB::table('category_product')->orderby('category_id','desc')->get();

        $category_name = DB::table('category_product')->where('category_product.category_id',$category_id)->limit(1)->get();

        $category_by_id = DB::table('product')
        ->join('category_product','product.category_id','=','category_product.category_id')
        ->where('product.category_id',$category_id)->get();
        return view('layoutPro.product_list')->with('category',$cate)
        ->with('category_name',$category_name)
        ->with('category_by_id',$category_by_id);
    }
}
