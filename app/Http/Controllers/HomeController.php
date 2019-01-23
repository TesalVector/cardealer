<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Brand;
use \App\Car;

class HomeController extends Controller
{
    public function index(){
        $brands = Brand::all();
        return view('customer.pages.home')->with('brands',$brands);
    }

}
