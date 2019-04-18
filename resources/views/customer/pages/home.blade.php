@extends('customer.layouts.base')

@section('body')
<header>
  <div class="card card-image home-card-image" style="background-image: url({{asset('storage/static/hb3.jpg')}});">
    <div class="text-white text-center py-5 px-4 my-5">
      <div>
        <h2 class="card-title h1-responsive pt-3 mb-5 font-bold">New Volkswagen <span>Arteon<span>.</h2>
      </div>
    </div>
  </div>
</header>
<section class='container home-about'>
  <div class="row">
    <div class="col-md-12">
        <p>Welcome to our website</p>
        <h2>CAR DEALER</h2>
        <div class="separator"></div>
        <p>Car Dealer is the most enticing, creative, modern and multipurpose auto dealer Premium WordPress Theme. Suitable for any car dealer websites, business or corporate websites. The Theme has been Created especially for automotive dealers, car resellers, car service stations, mechanic workshop and auto motor retailers.</p>
    </div>
  </div>
    <div class="row">
      <div class="col-md-3 about-card">
        <div class="about-icon">
            <i class="fas fa-car"></i>
        </div>
        <div class="about-content">
          <h6>ALL BRANDS</h6>
          <p>Galley simply dummy text lorem Ipsum is of the printin k a of type and</p>
        </div>
      </div>
      <div class="col-md-3 about-card">
        <div class="about-icon">
          <i class="far fa-comments"></i>
        </div>
        <div class="about-content">
          <h6>FREE SUPPORT</h6>
          <p>Text of the printin lorem ipsum the is simply k a type text and galley of</p>
        </div>
      </div>
      <div class="col-md-3 about-card">
        <div class="about-icon">
            <i class="fas fa-key"></i>
        </div>
        <div class="about-content">
          <h6>DEALERSHIP</h6>
          <p>GPrintin k a of type and lorem Ipsum is simply dummy text of the galley</p>
        </div>
      </div>
      <div class="col-md-3 about-card">
        <div class="about-icon">
            <i class="fas fa-wallet"></i>
        </div>
        <div class="about-content">
          <h6>AFFORDABLE</h6>
          <p>The printin k a galley Lorem Ipsum is type and simply dummy text of</p>
        </div>
      </div>
      
    </div>
    <div class="row about-footer">
      <div class="col-md-7">
        <img src="{{asset('storage/static/about-left.png')}}" alt="">
      </div>
      <div class="col-md-5">
        <div class="about-help">
          <p>
            <img src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2017/01/01-5-150x150.jpg" alt="help">
            <br/>
            Have any question?
          </p>
          <h6>(007) 123 456 7890</h6>
        </div> 
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 middle-img" style="background-image: url({{ asset('storage/static/hb2.jpg') }})">
      </div>
    </div>
</section>
<section class="py-5">
  <div class="container home-brand">
    <h2 class="text-center">OUR CARS</h2>
    <div class="separator col-md-12"></div>
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