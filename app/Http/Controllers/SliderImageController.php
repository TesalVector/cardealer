<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use \App\Brand;
use \App\SliderImage;

class SliderImageController extends Controller
{
    public function viewAdd(){
        $brands = Brand::all();
        return view('admin.pages.add.addSliderImage')
        ->with('brands', $brands);
    }

    public function viewEdit($id){
        $country = Country::find($id);

        return view('admin.pages.edit.editSliderImage')->with('country',$country);
    }

    public function create(Request $request){
        $request['time']=date("Y-m-d_h-i-s", time());
        
        $validation = $this->validate($request,[
            'name' => 'required|alpha',
            'description' => 'required',
            'brand_id' => 'required|numeric',
            'image' => 'required'
        ]);

        
        $sliderimage = new SliderImage();
        $sliderimage->name = $request->get('name');
        $sliderimage->description = $request->get('description');
        $sliderimage->brand_id = $request->get('brand_id');
        $sliderimage->image = 'slide-'.$request['time'].'.jpg';
        //$sliderimage->image = 'slide.jpg';
        $sliderimage->save();
        $sliderimage->image;
        $image = $request->file('image');
        $image_filename = $sliderimage->image;
        if($image){
            Storage::disk('mainSlide')->put($image_filename, File::get($image));
        }

        return redirect('dashboard');
    }

    public function edit(Request $request){

        $validation = $this->validate($request,[
            'country' => 'required|alpha',
            'city' => 'required|alpha'
        ]);

        $country = Country::find($request->get('id'));
        $country->name = $request->get('country');
        $country->capital_city = $request->get('city');
        $country->save();

        return redirect('dashboard');
    }

    public function delete($id){
        $country = SliderImage::find($id);
        $country->delete();
        return redirect('dashboard');
    }
}
