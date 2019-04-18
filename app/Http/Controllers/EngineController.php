<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Country;
use \App\Engine;

class EngineController extends Controller
{
    public function viewAdd(){

        return view('admin.pages.add.addEngine');
    }

    public function viewEdit($id){
        $engine = Engine::find($id);

        return view('admin.pages.edit.editEngine')->with('engine',$engine);
    }

    public function create(Request $request){

        $validation = $this->validate($request,[
            'engine' => 'required|alpha'
        ]);


        $country = new Engine();
        $country->name = $request->get('engine');
        $country->save();

        return redirect('dashboard');
    }

    public function edit(Request $request){

        $validation = $this->validate($request,[
            'engine' => 'required|alpha'
        ]);

        $engine = Engine::find($request->get('id'));
        $engine->name = $request->get('engine');
        $engine->update();

        return redirect('dashboard');
    }

    public function delete($id){
        $engine = Engine::find($id);
        $engine->delete();
        return redirect('dashboard');
    }
}
