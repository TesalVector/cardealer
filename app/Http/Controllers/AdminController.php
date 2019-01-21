<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use \App\Country;

class AdminController extends Controller
{
    public function index(){
        return view('admin.pages.login');
    }

    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $userData = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($userData)){
            return redirect('/dashboard');
        }else{
            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('admin');
    }

    public function dashboard(){

        $countries = Country::all();
        return view('admin.pages.dashboard')->with('countries', $countries);
    }
}
