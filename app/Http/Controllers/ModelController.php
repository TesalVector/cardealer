<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use \App\Country;
use \App\Car;
use \App\Engine;
use \App\Image;
use \App\Package;
use \App\Brand;
use \App\CarPackage;
use \App\CarExtraPackage;

class ModelController extends Controller
{
    public function viewAdd(){
        $brands = Brand::all();
        $packages = Package::all();
        $engines = Engine::all();
        $conditions = Car::getEnumValues();
        \Log::info($conditions);
        return view('admin.pages.add.addModel')
        ->with('brands',$brands)
        ->with('conditions',$conditions['condition'])
        ->with('packages',$packages)
        ->with('engines',$engines);
    }
    public function viewEdit($id){
        $country = Country::find($id);
        return view('admin.pages.edit.editModel')->with('country',$country);
    }
    public function create(Request $request){
        $boxBasic = array();
        $boxExtra = array();
        $id = array();
        $packageLength = Package::All()->count();
        $i = 1;

        while ($i <= $packageLength) {
            if($request->get("item{$i}") == []){
                return 'Hello';
            }
            
            $x = explode('_',$request->get("item{$i}"));
            $r = $x[1];

            if($r != null){
                
                if($x[0] === 'basic'){
                    array_push($boxBasic, $r);
                }else if($x[0] === 'extra'){
                    array_push($boxExtra, $r);
                }
            }
            $i++;
        }
   
        $validation = $this->validate($request,[
            'brand' => 'required',
            'model' => 'required',
            'model_img' => 'required',
            'slide1' => 'required',
            'slide2' => 'required',
            'slide3' => 'required',
            'slide4' => 'required',
            'slide5' => 'required',
            'price' => 'required|numeric',
            'wheels_size' => 'required|numeric',
            'conditions' => 'required',
            'exterior_color' => 'required|alpha',
            'interior_color' => 'required|alpha',
            'transmission' => 'required',
            'hp' => 'required|numeric',
            'cc' => 'required|numeric',
            'engine' => 'required',
            'consumption' => 'required',
            'description' => 'required',
        ]);
        $car = new Car();
        $image = new Image();
        
        $j = 1;

        $image->model = 'model-'.$request->get('model').'.png';
        $image->slide1 = 'slide1-'.$request->get('model').'.png';
        $image->slide2 = 'slide2-'.$request->get('model').'.png';
        $image->slide3 = 'slide3-'.$request->get('model').'.png';
        $image->slide4 = 'slide4-'.$request->get('model').'.png';
        $image->slide5 = 'slide5-'.$request->get('model').'.png';
        /*for ($j=1; $j <= 4; $j++) { 
            $image->slide1 = "slide{$j}-".$request->get('model').'jpg';
            \Log::info('Hello World');
        }*/
        $image->save();
        $car->brand_id = $request->get('brand');
        $car->model = $request->get('model');
        $car->price = $request->get('price');
        $car->wheels_size = $request->get('wheels_size');
        $car->condition = $request->get('conditions');
        $car->exterior_color = $request->get('exterior_color');
        $car->interior_color = $request->get('interior_color');
        $car->transmission = $request->get('transmission');
        $car->hp = $request->get('hp');
        $car->cc = $request->get('cc');
        $car->engine_id = $request->get('engine');
        $car->consumption = $request->get('consumption');
        $car->description = $request->get('description');
        $car->image_id = $image->id;
        $car->save();

        
        $model_img = $request->file('model_img');
        $model_img_filename = $image->model;
        if($model_img){
            Storage::disk('slider')->put($model_img_filename, File::get($model_img));
        }
        for($i=1; $i <= 4; $i++){
            $slide = $request->file("slide".$i);
            \Log::info($slide);
            $slide_filename = $image["slide{$i}"];
            if($slide){
                Storage::disk('slider')->put($slide_filename, File::get($slide));
                \Log::info('Hello from image!');
            }
        }
        $car->basicPackage()->sync($boxBasic);
        $car->extraPackage()->sync($boxExtra);
        
        return redirect('dashboard');
    }
    public function edit(Request $request){
        $validation = $this->validate($request,[
            'country' => 'required|alpha',
            'city' => 'required|alpha'
        ]);
        $country = Country::find($request->get('id'));
        
    }


    public function delete($id){
        $car = Car::find($id);
        CarPackage::where('car_id','=',$id)->delete();
        CarExtraPackage::where('car_id','=',$id)->delete();
        Image::where('id','=',$id)->delete();
        $car->delete();
        return redirect('dashboard');
    }
}