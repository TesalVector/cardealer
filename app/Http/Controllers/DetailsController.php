<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Car;
use \App\Image;
use \App\Engine;
use \App\Package;

class DetailsController extends Controller
{
    public function index($id){
        $images = array();
        $car = Car::find($id);
        $x = $car->basicPackage();
        return $x;
        $imageRow = Image::where('id','=',$car->image_id)->get();
        for($i=1; $i<=5;$i++){
            array_push($images, $imageRow[0]['slide'.$i]);
        }

        return $images;
        
        return $car;
        
        return view('customer.pages.details')
        ->with('images',$images)
        ->with('images',$images);
    }
}
