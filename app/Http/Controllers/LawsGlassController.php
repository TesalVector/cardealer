<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Law_Glass;
use \App\Country;

class LawsGlassController extends Controller
{
    public function viewAdd(){

        $countries = Country::all();
        return view('admin.pages.add.addLawsGlass')->with('countries',$countries);
    }

    public function viewEdit($id){
        \Log::info($id);
        $countries = Country::all();
        $lawsGlass = Law_Glass::find($id);

        return view('admin.pages.edit.editLawsGlass')->with('countries', $countries)->with('lawsGlass', $lawsGlass);
    }

    public function create(Request $request){
        //\Log::info($request);

        $this->validate($request,[
            'front' => 'required|numeric|min:0|max:100',
            'back' => 'required|numeric|min:0|max:100',
            'right' => 'required|numeric|min:0|max:100',
            'left' => 'required|numeric|min:0|max:100',
            'country_id' => 'required|numeric'
        ]);
        
        $country = Country::find($request->get('country_id'));

        $lawsGlass = new Law_Glass();
        $lawsGlass->front = $request->get('front');
        $lawsGlass->back = $request->get('back');
        $lawsGlass->right = $request->get('right');
        $lawsGlass->left = $request->get('left');
        $lawsGlass->country_id = $country->id;
        $lawsGlass->save();

        return redirect('dashboard');
    }

    public function edit(Request $request){
        $validation = $this->validate($request,[
            'front' => 'required|numeric|min:0|max:100',
            'back' => 'required|numeric|min:0|max:100',
            'right' => 'required|numeric|min:0|max:100',
            'left' => 'required|numeric|min:0|max:100',
            'country_id' => 'required|numeric'
        ]);
        
        $country = Country::find($request->get('country_id'));

        $lawsGlass = Law_Glass::find($request->get('id'));
        $lawsGlass->front = $request->get('front');
        $lawsGlass->back = $request->get('back');
        $lawsGlass->right = $request->get('right');
        $lawsGlass->left = $request->get('left');
        $lawsGlass->country_id = $country->id;
        $lawsGlass->save();

        return redirect('dashboard');
    }

    public function delete($id){
        \Log::info($id);
        $lawsGlass = Law_Glass::find($id);
        $lawsGlass->delete();
        return redirect('dashboard');
    }
}
