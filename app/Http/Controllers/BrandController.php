<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Country;
use \App\Brand;

class BrandController extends Controller
{
    public function viewAdd(){

        $countries = Country::all();

        return view('admin.pages.add.addBrand')->with('countries',$countries);
    }

    public function viewEdit($id){
     
        $countries = Country::all();
        $brand = Brand::find($id);

        return view('admin.pages.edit.editBrand')->with('countries', $countries)->with('brand', $brand);
    }

    public function create(Request $request){
        \Log::info($request);

        $validation = $this->validate($request,[
            'brand' => 'required|max:20',
            'country_id' => 'required',
            'description' => 'required|max:200'
        ]);
        
        
        $country = Country::find($request->get('country_id'));

        $brand = new Brand();
        $brand->name = $request->get('brand');
        $brand->country_id = $country->id;
        $brand->description = $request->get('description');
        $brand->save();

        return redirect('dashboard');
    }

    public function edit(Request $request){
        $validation = $this->validate($request,[
            'brand' => 'required|max:15',
            'country' => 'required',
            'description' => 'required|max:200'
        ]);
        
        

        $brand = Brand::find($request->get('id'));
        $brand->name = $request->get('brand');
        $brand->country_id = $request->get('country');
        $brand->description = $request->get('description');
        $brand->updata();

        return redirect('dashboard');
    }

    public function delete($id){
        \Log::info($id);
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('dashboard');
    }
}
