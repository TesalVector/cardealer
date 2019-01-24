<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Car;
use \App\Image;

class ListModelController extends Controller
{
    public function index($id){
        $models = array();
        $cars = Car::where('brand_id','=',$id)->get();


        foreach($cars as $key=>$car){
            $image = Image::where('id','=',$car->image_id)->get();

            $id = $cars[$key]->id;
            $model_name = $cars[$key]->model;
            $url = $image[0]->model; 

            $newArray = array('id'=>$id, 'name'=>$model_name, 'image'=>$url);
            array_push($models, $newArray);
        }

        return view('customer.pages.models')
        ->with('models',$models);
    }
}
