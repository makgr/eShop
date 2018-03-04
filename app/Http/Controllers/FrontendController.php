<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class FrontendController extends Controller
{
    public function mypage()
    {
    	return view('mypages.index');
    }


    public function index()
    {
         $product_all = DB::table("products")
                        ->join('categories', 'categories.catid', '=', 'products.product_category')->where('product_status', 1)->orderBy('product_name')->paginate(4);
          $category_all = DB::table("categories")
                        ->orderBy('category_name')
                        ->get();

        //dd($category_all);
    	return view('frontend.index', ['product_all'=>$product_all, 'category_all'=>$category_all]);
    }

    public function signin()
    {
    	return view('frontend.login');
    }

    public function signup()
    {
    	//return view('frontend.login');
    }


}
