<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Package;

class PackageController extends Controller
{
    public function viewAdd(){

        return view('admin.pages.add.addPackage');
    }

    public function viewEdit($id){
        $package = Package::find($id);

        return view('admin.pages.edit.editPackage')->with('package',$package);
    }

    public function create(Request $request){

        $validation = $this->validate($request,[
            'item' => 'required',
            'price' => 'required|numeric'
        ]);


        $package = new Package();
        $package->name = $request->get('item');
        $package->price = $request->get('price');
        $package->save();

        return redirect('dashboard');
    }

    public function edit(Request $request){

        $validation = $this->validate($request,[
            'item' => 'required|',
            'price' => 'required|numeric'
        ]);

        $package = Package::find($request->get('id'));
        $package->name = $request->get('item');
        $package->price = $request->get('price');
        $package->save();

        return redirect('dashboard');
    }

    public function delete($id){
        $package = Package::find($id);
        $package->delete();
        return redirect('dashboard');
    }
}
