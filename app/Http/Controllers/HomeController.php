<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \App\Brand;
use \App\Car;
use \App\SliderImage;

class HomeController extends Controller
{
    public function index(){
        $chack = array();
        $brands = Brand::all(); 
        $images = SliderImage::all();

        foreach($brands as $key=>$brand) { 
          $count = Car::where('brand_id','=',$brand->id)->get();
          if(!$count->isEmpty()){
            array_push($chack, array($brand->id => true));
          }else{
            array_push($chack, array($brand->id => false));
          }
        }

   

        return view('customer.pages.home')
        ->with('brands',$brands)
        ->with('images',$images)
        ->with('chack',$chack);
    }

}
