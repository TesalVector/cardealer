<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Brand;
use \App\Car;
use \App\Image;

class HomeController extends Controller
{
    public function index(){
        $brands = Brand::all();
        $images = Image::find(1);
        return view('customer.pages.home')
        ->with('brands',$brands)
        ->with('images',$images);
    }

}
