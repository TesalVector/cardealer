<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Car;
use \App\Image;
use \App\Engine;
use \App\Brand;
use \App\Package;

class DetailsController extends Controller
{
    public function index($id){
        $images = array();
        $car = Car::find($id);
        $brand = Brand::where('id','=',$car->brand_id)->get();
        $engine = Engine::where('id','=',$car->engine_id)->get();
        $packages = $car->basicPackage;
        $imageRow = Image::where('id','=',$car->image_id)->get();

        for($i=1; $i<=5;$i++){
            array_push($images, $imageRow[0]['slide'.$i]);
        }
        return view('customer.pages.details')
        ->with('car',$car)
        ->with('brand',$brand[0]->name)
        ->with('images',$images)
        ->with('engine',$engine[0]->name)
        ->with('packages',$packages);
    }
}
