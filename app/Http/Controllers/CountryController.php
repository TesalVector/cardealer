<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Country;

class CountryController extends Controller
{
    public function viewAdd(){

        return view('admin.pages.add.addCountry');
    }

    public function viewEdit($id){
        $country = Country::find($id);

        return view('admin.pages.edit.editCountry')->with('country',$country);
    }

    public function create(Request $request){

        $validation = $this->validate($request,[
            'country' => 'required|alpha',
            'city' => 'required|alpha'
        ]);


        $country = new Country();
        $country->name = $request->get('country');
        $country->capital_city = $request->get('city');
        $country->save();

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
        $country = Country::find($id);
        $country->delete();
        return redirect('dashboard');
    }
}
