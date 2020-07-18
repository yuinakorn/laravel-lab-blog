<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $price = 120;
        $user = ['a','b','c'];
        return view('showProduct',['users'=>$user])->with('price',$price);
    }

    public function contact(){
        $price = 5000000;
        $des = "AAAAAAAAAAAAAAAAAAAAAAAA";
        return view('contact')
        ->with('price', $price)
        ->with('des', $des);
    }
}
