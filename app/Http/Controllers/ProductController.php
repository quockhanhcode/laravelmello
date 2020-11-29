<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
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

    public function show_product()
    {
        $this->AuthLogin();
        $cate = DB::table('category_product')->orderby('category_id','desc')->get();
        $show_product = DB::table('product')
        ->join('category_product','category_product.category_id','=','product.category_id')
        ->orderby('product.product_id','desc')->get();
        $manager_product = view('admin.product.show_product')->with('show_product',$show_product)->with('category',$cate);
        return view('admin.admin_layout')->with('admin.product.show_product',$manager_product);
    }
    public function add_product(){
        $this->AuthLogin();
        $cate_product = DB::table('category_product')->orderby('category_id','desc')->get();
        return view('admin.product.add_product')->with('category_product',$cate_product);
    }

    public function save_product(Request $request){
        $this->AuthLogin();
        $data = array();

        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->list_category;
        $data['product_image'] = $request->product_image;

       

        $get_image = $request->file('product_image');
        if($get_image){
            $get_name_img = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_img));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('images',$new_image);
            $data['product_image'] = $new_image;
            DB::table('product')->insert($data);
            return Redirect::to('add-product');
        }
    }

    public function edit_product($product_id){
        $this->AuthLogin();
        $cate = DB::table('category_product')->orderby('category_id','desc')->get();
        $edit_product = DB::table('product')->where('product_id',$product_id)->get();

        $manager_product = view('admin.product.edit_product')->with('edit_product',$edit_product)
        -> with('category_product',$cate);

        return view('admin.admin_layout')->with('admin.product.edit_product',$manager_product);
    }

    public function update_product(Request $request, $product_id){
        $this->AuthLogin();
        $data = array();

        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->list_category;
        // $data['product_image'] = $request->product_image;

        $get_image = $request->file('product_image');
        if($get_image){
            $get_name_img = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_img));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('images',$new_image);
            $data['product_image'] = $new_image;
            DB::table('product')->where('product_id',$product_id)->update($data);
            return Redirect::to('show-product');
        }
        else
        DB::table('product')->where('product_id',$product_id)->update($data);
        return Redirect::to('show-product');
    }

    public function delete_product($product_id){
        $this->AuthLogin();
        DB::table('product')->where('product_id',$product_id)->delete();
        return Redirect::to('show-product');
    }
    

    //chi tiết san phẩm
    public function detail_product($product_id){

        $cate = DB::table('category_product')->orderby('category_id','desc')->get();

        $details_product = DB::table('product')
        ->join('category_product','category_product.category_id','=','product.category_id')
        ->where('product.product_id',$product_id)->get();

        return view('layoutPro.details_product')->with('category',$cate)
        ->with('details_product',$details_product);
    }
}
