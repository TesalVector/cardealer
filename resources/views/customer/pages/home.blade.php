@extends('customer.layouts.base')

@section('body')
<header>
      <div class="card card-image home-card-image" style="background-image: url({{asset('storage/static/hb2.jpg')}});">
        <div class="text-white text-center py-5 px-4 my-5">
          <div>
            <h2 class="card-title h1-responsive pt-3 mb-5 font-bold">New Audi <span>Q3<span>.</h2>
          </div>
        </div>
      </div>
    </header>
    <section class="py-5">
        <div class="container">
            <h1 class="text-center">Chack our cars</h1>
            <p class="mt-5 mb-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
            <div class='row cards'>
                @foreach($brands as $key=>$brand)
                  <div class="col-md-3 col-12 pt-3 pl-4 pr-4 pb-3 bg-light" style="width: 18rem;">
                      <i class="fas fa-car"></i>
                      <h3 class="font-weight-bold">{{$brand->name}}</h3>
                      <p>{{$brand->description}}</p>
                      @if($chack[$key][$brand->id] == true)
                        <a href='models/{{$brand->id}}' class="btn btn-warning">See all car</a>  
                        @else
                        <button href='' class="btn btn-warning" style='cursor: not-allowed !important; opacity: 0.5;'>See all car</button> 
                      @endif
                  </div>
                @endforeach
            </div>
        </div>
    </section>
@stop