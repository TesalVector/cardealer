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
        
        $brands = Brand::all();
        $images = SliderImage::all();
        //return $images[0];
        //return $files;
        //Storage::disk(env( 'DISK', 'slider'))->url('screen2.jpg');
        //return HTML::image('app/model-X5.png');
        //return $images->image;
        //return Storage::disk('mainSlide')->get( $images->image);
        return view('customer.pages.home')
        ->with('brands',$brands)
        ->with('images',$images);
    }

}
