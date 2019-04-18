@extends('customer.layouts.base')

@section('body')
    <!-- Title -->
    <section class="container mt-4 mb-4">
        <div class="row description-title">
            <div class="col-md-9">
                <h2>{{$brand}} {{$car->model}}</h2>
                <p class="text-muted">{{$car->description}}</p>
            </div>
            <div class="col-md-3 text-lg-right">
                <strong>$ {{$car->price}}</strong>
                <p class="text-muted mt-2">Plus Taxes & Licensing</p>
            </div>
        </div>
    </section>

    <!-- Slider --> 
    <section class='container'>
        <div class="row">
            <div class='col-md-7'> 
                <div class="w3-content w3-section sidebar-slider-show">
                    @foreach($images as $image)
                        <img class="mySlides" src="{{asset('storage/image/slide/').'/'.$image}}" style="width:100%">
                    @endforeach
                </div>
                <div class="tabs mb-4">
                    <div class="tab-button-outer">
                      <ul id="tab-button">
                        <li><a href="#tab01">GENERAL INFORMATION</a></li>
                        <li><a href="#tab02">FEATURES & OPTIONS</a></li>
                        <li><a href="#tab03">BASIC PACKAGE</a></li>
                      </ul>
                    </div>
                    <div class="tab-select-outer">
                      <select id="tab-select">
                        <option value="#tab01">GENERAL INFORMATION</option>
                        <option value="#tab02">FEATURES & OPTIONS</option>
                        <option value="#tab03">BASIC PACKAGE</option>
                      </select>
                    </div>
                  
                    <div id="tab01" class="tab-contents">
                      <h2>GENERAL INFORMATION</h2>
                      <p>{{$car->description}}</p>
                    </div>
                    <div id="tab02" class="tab-contents">
                      <h2>FEATURES & OPTIONS</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
                    </div>
                    <div id="tab03" class="tab-contents">
                      <h2>BASIC PACKAGE</h2>
                      <div class="row">
                        <div class="col-md-12 description-list-p">
                            <ul class="list-group">
                                @foreach($packages as $package)
                                    <li class="list-group-item"><i class="fas fa-check-circle mr-4"></i><span>{{$package->name}}</span></li>
                                @endforeach
                            </ul> 
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-5 sale-description">
                <h2 class='font-weight-bold'>Description</h2>
                <ul>
                    <li>
                        <span>Marke</span>
                        <strong>{{$brand}}</strong>
                    </li>
                    <li>
                        <span>Model</span>
                        <strong>{{$car->model}}</strong>
                    </li>
                    <li>
                        <span>Registration date</span>
                        <strong>2017</strong>
                    </li>
                    <li>
                        <span>Condition</span>
                        <strong>{{$car->condition}}</strong>
                    </li>
                    <li>
                        <span>Exterior Color</span>
                        <strong>{{$car->exterior_color}}</strong>
                    </li>
                    <li>
                        <span>Interior Color</span>
                        <strong>{{$car->interior_color}}(Leather)</strong>
                    </li>
                    <li>
                        <span>Transmission</span>
                        <strong>{{$car->transmission}}</strong>
                    </li>
                    <li>
                        <span>Engine</span>
                        <strong>{{$engine}}</strong>
                    </li>
                    <li>
                        <span>Drivetrain</span>
                        <strong>{{$car->drivetrain}}</strong>
                    </li>
                </ul>
                <a href="/payment/{{$car['id']}}" class="text-center btn btn-warning description-btn-buy mb-5">Buy now</a>
            </div>
            <div class="col-md-7">
                
            </div>
        </div>
    </section>
    <script>
            
            </script>
@stop