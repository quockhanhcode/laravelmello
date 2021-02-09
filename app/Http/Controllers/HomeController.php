<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class HomeController extends Controller
{
    public function index(){
        $category = DB::table('category_product')->orderby('category_id')->get();
        $all_product = DB::table('product')->orderby('product_id','desc')->paginate(8);
        return view('content.layout_content')->with('category',$category)->with('all_product',$all_product);
    }

      //Tìm kiếm sp
      public function search(Request $request)
      {
          $keywords = $request->keywords_submit;

          $cate = DB::table('category_product')->orderby('category_id','desc')->get();

          $search = DB::table('product')->where('product_name','like','%'.$keywords.'%')->get();

          return view('content.search_product')->with('category',$cate)->with('search_product',$search);
      }
}
