<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Brand;
use \App\Car;
use \App\Package;
use \App\Engine;
use \App\Image;
use \App\Country;
use \App\Tire;
use \App\Law_Glass;
use \App\Order;

class PaymentController extends Controller
{
    public function index($id){
        $law = Law_Glass::all();
        $countries = Country::all();
        $car = Car::find($id);
        $tng = Package::where('name','=','TNG')->get();
        $engine = Engine::where('id','=',$car->engine_id)->get();
        $tires = Tire::where('size','=',$car->wheels_size)->get();
        $brand = Brand::where('id','=',$car->brand_id)->get();
        $image = Image::where('id','=',$car->image_id)->get()[0]->model;
        $extraPackage = $car->extraPackage;


        return view('customer.pages.payment')
            ->with('car',$car)
            ->with('brand',$brand)
            ->with('image',$image)
            ->with('extraPackage',$extraPackage)
            ->with('countries',$countries)
            ->with('tires',$tires)
            ->with('tng',$tng)
            ->with('engine',$engine);
    }

    public function payment(Request $request){

        $this->validate($request,[
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country_id' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'tires' => 'required',
            'front-glass' => 'required',
            'back-glass' => 'required',
            'right-glass' => 'required',
            'left-glass' => 'required',
            'cardname' => 'required',
            'cardnumber' => 'required',
            'cvc' => 'required',
            'mm' => 'required',
            'mm' => 'required'
        ]);

        $order = new Order();
        $order->fname = $request->get('fname');
        $order->lname = $request->get('lname');
        $order->email = $request->get('email');
        $order->phone = $request->get('phone');
        $order->country = $request->get('country_id');
        $order->city = $request->get('city');
        $order->zip = $request->get('zip');
        $order->fglass = $request->get('front-glass');
        $order->bglass = $request->get('back-glass');
        $order->rglass = $request->get('right-glass');
        $order->lglass = $request->get('left-glass');
        $order->card_name = $request->get('cardname');
        $order->card_number = $request->get('cardnumber');
        $order->cvc = $request->get('cvc');
        $order->mm = $request->get('mm');
        $order->yy = $request->get('yy');
        $order->price = 69000;
        $order->save();

        return redirect("/");

    }


}