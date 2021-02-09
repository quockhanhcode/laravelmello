<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CartController extends Controller
{
    public function save_cart(Request $request)
    {
        //Lấy ra id sp
        $productId = $request->productid_hiden;

        $product_info = DB::table('product')->where('product_id',$productId)->first();

        $cate = DB::table('category_product')->orderby('category_id','desc')->get();

        //Khai báo các trường sp

        $data['id'] = $product_info->product_id;
        $data['qty'] = 1;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['weight'] = '123';
        $data['options']['image'] = $product_info->product_image;
        Cart::add($data); 

        return Redirect::to('/show-cart');
    }

    public function show_cart()
    {
        $cate = DB::table('category_product')->orderby('category_id','desc')->get();

        return view('layoutPro.checkout_cart')->with('category',$cate);

    }

    public function update_cart(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->quantity;
        Cart::update($rowId,$qty);
        return Redirect::to('show-cart');
    }

    public function delete_to_cart($rowId)
    {
        Cart::update($rowId,0);
        return Redirect::to('/show-cart');
    }
}
