<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function mypage()
    {
    	return view('mypages.index');
    }


    public function index()
    {
    	return view('frontend.index');
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
