<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use \App\Country;
use \App\Brand;
use \App\Law_Glass;
use \App\Engine;
use \App\Package;
use \App\Tire;
use \App\Car;

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
        $brands = Brand::all();
        $lawsGlass = Law_Glass::all();
        $engines = Engine::all();
        $packages = Package::all();
        $tires = Tire::all();
        $cars = Car::all();
        return view('admin.pages.dashboard')
            ->with('countries', $countries)
            ->with('brands', $brands)
            ->with('lawsGlass', $lawsGlass)
            ->with('engines', $engines)
            ->with('packages', $packages)
            ->with('tires', $tires)
            ->with('cars', $cars);
    }
}
