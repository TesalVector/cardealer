@extends('customer.layouts.base')

@section('body')
    <!-- Title -->
    <section class="container mt-4 mb-4">
        <div class="row description-title">
            <div class="col-md-9">
                <h2>HYUNDAI SANTA FE</h2>
                <p class="text-muted">Temporibus possimus quasi beatae, You will begin to realize why, consectetur adipisicing elit. aspernatur nemo maiores.</p>
            </div>
            <div class="col-md-3 text-lg-right">
                <strong>$ 69,995</strong>
                <p class="text-muted">Plus Taxes & Licensing</p>
            </div>
        </div>
    </section>

    <!-- Slider --> 
    <section class='container'>
        <div class="row">
            <div class='col-md-7'>
                <div class="slider-for">
                    <div class="item">
                        <img src="{{ asset('storage/slide/screen1.jpg') }}" alt="image"  draggable="false"/>
                    </div>
                    <div class="item">
                        <img src="{{ asset('storage/slide/screen1.jpg') }}" alt="image" draggable="false"/>
                    </div>
                    <div class="item">
                        <img src="{{ asset('storage/slide/screen1.jpg') }}" alt="image" draggable="false"/>
                    </div>
                    <div class="item">
                        <img src="{{ asset('storage/slide/screen1.jpg') }}" alt="image" draggable="false"/>
                    </div>
                    <div class="item">
                        <img src="{{ asset('storage/slide/screen1.jpg') }}" alt="image" draggable="false"/>
                    </div>
                </div>
                    
                <div class="slider-nav">
                        <div class="item">
                             <img src="{{ asset('storage/slide/screen1.jpg') }}" alt="image"  draggable="false"/>
                        </div>
                    <div class="item">
                        <img src="{{ asset('storage/slide/screen1.jpg') }}" alt="image" draggable="false"/>
                    </div>
                    <div class="item">
                        <img src="{{ asset('storage/slide/screen1.jpg') }}" alt="image" draggable="false"/>
                    </div>
                    <div class="item">
                        <img src="{{ asset('storage/slide/screen1.jpg') }}" alt="image" draggable="false"/>
                    </div>
                    <div class="item">
                        <img src="{{ asset('storage/slide/screen1.jpg') }}" alt="image" draggable="false"/>
                    </div>
                </div>
                <div class="tabs mb-4">
                    <div class="tab-button-outer">
                      <ul id="tab-button">
                        <li><a href="#tab01">GENERAL INFORMATION</a></li>
                        <li><a href="#tab02">FEATURES & OPTIONS</a></li>
                        <li><a href="#tab03">BESIC PACKAGE</a></li>
                      </ul>
                    </div>
                    <div class="tab-select-outer">
                      <select id="tab-select">
                        <option value="#tab01">GENERAL INFORMATION</option>
                        <option value="#tab02">FEATURES & OPTIONS</option>
                        <option value="#tab03">BESIC PACKAGE</option>
                      </select>
                    </div>
                  
                    <div id="tab01" class="tab-contents">
                      <h2>GENERAL INFORMATION</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
                    </div>
                    <div id="tab02" class="tab-contents">
                      <h2>FEATURES & OPTIONS</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
                    </div>
                    <div id="tab03" class="tab-contents">
                      <h2>BESIC PACKAGE</h2>
                      <div class="row">
                      <div class="col-md-6 description-list-p">
                        <ul class="list-group">
                            <li class="list-group-item"><i class="fas fa-check-circle"></i><span>Lorem ipsum</span></li>
                            <li class="list-group-item"><i class="fas fa-check-circle"></i><span>Lorem ipsum</span></li>
                            <li class="list-group-item"><i class="fas fa-check-circle"></i><span>Lorem ipsum</span></li>
                            <li class="list-group-item"><i class="fas fa-check-circle"></i><span>Lorem ipsum</span></li>
                            <li class="list-group-item"><i class="fas fa-check-circle"></i><span>Lorem ipsum</span></li>
                            <li class="list-group-item"><i class="fas fa-check-circle"></i><span>Lorem ipsum</span></li>
                            <li class="list-group-item"><i class="fas fa-check-circle"></i><span>Lorem ipsum</span></li>
                            <li class="list-group-item"><i class="fas fa-check-circle"></i><span>Lorem ipsum</span></li>
                        </ul> 
                      </div>
                      <div class="col-md-6  description-list-p">
                            <ul class="list-group">
                                <li class="list-group-item"><i class="fas fa-check-circle"></i><span>Lorem ipsum</span></li>
                                <li class="list-group-item"><i class="fas fa-check-circle"></i><span>Lorem ipsum</span></li>
                                <li class="list-group-item"><i class="fas fa-check-circle"></i><span>Lorem ipsum</span></li>
                                <li class="list-group-item"><i class="fas fa-check-circle"></i><span>Lorem ipsum</span></li>
                                <li class="list-group-item"><i class="fas fa-check-circle"></i><span>Lorem ipsum</span></li>
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
                        <strong>BMW</strong>
                    </li>
                    <li>
                        <span>Model</span>
                        <strong>7-series</strong>
                    </li>
                    <li>
                        <span>Registration date</span>
                        <strong>2017</strong>
                    </li>
                    <li>
                        <span>Condition</span>
                        <strong>New</strong>
                    </li>
                    <li>
                        <span>Exterior Color</span>
                        <strong>Silver</strong>
                    </li>
                    <li>
                        <span>Interior Color</span>
                        <strong>Brown (Leather)</strong>
                    </li>
                    <li>
                        <span>Transmission</span>
                        <strong>Automatic</strong>
                    </li>
                    <li>
                        <span>Condition</span>
                        <strong>New</strong>
                    </li>
                    <li>
                        <span>Engine</span>
                        <strong>5.1 L</strong>
                    </li>
                    <li>
                        <span>Drivetrain</span>
                        <strong>FWD</strong>
                    </li>
                </ul>
                <a href='file:///home/milos1994/Desktop/cardealer-front-master/payment.html' class="text-center btn btn-warning description-btn-buy">Buy now</a>
            </div>
            <div class="col-md-7">
                
            </div>
        </div>
    </section>
@stop