<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Country;
use \App\Tire;

class TireController extends Controller
{
    public function viewAdd(){
        $enums = Tire::getEnumValues();
        $tires = Tire::all();
        \Log::info($enums['type']);
        return view('admin.pages.add.addTire')
        ->with('tires',$tires)
        ->with('enums',$enums['type']);
    }

    public function viewEdit($id){
        $enums = Tire::getEnumValues();
        $tire = Tire::find($id);

        return view('admin.pages.edit.editTire')
        ->with('tire',$tire)
        ->with('enums',$enums['type']);
    }

    public function create(Request $request){

        $validation = $this->validate($request,[
            'tire' => 'required',
            'type' => 'required|max:7',
            'size' => 'required|numeric',
            'price' => 'required|numeric'
        ]);


        $tire = new Tire();
        $tire->name = $request->get('tire');
        $tire->type = $request->get('type');
        $tire->size = $request->get('size');
        $tire->price = $request->get('price');
        $tire->save();

        return redirect('dashboard');
    }

    public function edit(Request $request){

        $validation = $this->validate($request,[
            'tire' => 'required',
            'type' => 'required|max:7',
            'size' => 'required|numeric',
            'price' => 'required|numeric'
        ]);

        $tire = Tire::find($request->get('id'));
        $tire->name = $request->get('tire');
        $tire->type = $request->get('type');
        $tire->size = $request->get('size');
        $tire->price = $request->get('price');
        $tire->save();

        return redirect('dashboard');
    }

    public function delete($id){
        $tire = Tire::find($id);
        $tire->delete();
        return redirect('dashboard');
    }
}
