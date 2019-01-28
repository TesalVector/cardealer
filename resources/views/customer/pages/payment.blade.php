@extends('customer.layouts.base')

@section('body')
    <!-- Header payment -->
    <section class="container">
        <h1 class="text-center mt-5 mb-5 font-weight-bold descriptiom-title-shop">SHOP</h2>
          <p>{{$car->description}}</p>
    </section>
    
    
    <section class="container mt-4">
        <div class="row header-payment">
            <div class="col-md-6">
              <img src="{{asset('storage/image/slide/').'/'.$image}}" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-6 text-center">
              <h3>{{$brand[0]->name}} {{$car->model}}</h3>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Total price: $ {{$car->price}}</li>
                  <li class="list-group-item">VAT is not includet in price</li>
                  <li class="list-group-item">Free shipping</li>
                </ul>
            </div>
        </div>         
    </section>

    <!-- Collapse and system for payment -->
    <section class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('/payment') }}" method="POST">
                {{ csrf_field() }}
                @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                <div class="accordion car-payment" id="accordionExample">
                    <div class="card card-into-payment">
                      <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="far fa-user mr-3 text-dark"></i><span>Personal information</span>
                          </button>
                        </h5>
                      </div>
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body personal-info">  
                          <div class="row">
                              <div class="col-md-12">
                                <h3 class="text-center mt-3 mb-5">Personal information</h3>
                                <div class="separator col-md-12"></div>
                                <input type="text" name="fname" placeholder="First name" class="">
                                <input type="text" name="lname" placeholder="Last name" class="">
                                <input type="email" name="email" placeholder="Email" class="">
                                <input type="text" name="phone" placeholder="Phone number" class="">
                                <select name='country_id' class="form-control target">
                                      <option value="#" selected>Country</option>
                                  @foreach ($countries as $country)
                                      <option value="{{$country->id}}">{{$country->name}}</option>   
                                  @endforeach
                                </select>
                                <input type="text" name="city" placeholder="City" class="">
                                <input type="text" name="zip" placeholder="Zip" class="">
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card card-into-payment">
                      <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="fas fa-cubes mr-3 text-dark"></i><span>Extra packages</span>
                          </button>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                          <h3 class="text-center">Extra packages</h3>
                                <div class="separator col-md-12"></div>
                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <table class="table extra-table">
                                            <thead>
                                              <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Chack</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($extraPackage as $key=>$item)
                                              @if($item->name != 'TNG')
                                              <tr>
                                                <th scope="row">{{$key+1}}</th>
                                                  <td>{{$item->name}}</td>
                                                  <td>${{$item->price}}</td>
                                                  <td>
                                                    <div class="form-check">
                                                      <input class="form-check-input position-static" name='item_{{$key+1}}' type="checkbox" id="blankCheckbox" value="{{$item->id}}">
                                                    </div>
                                                  </td>
                                                </tr>
                                                @endif
                                              @endforeach
                                              @if($engine[0]->name != 'Electric' && $engine[0]->name != 'TNG')
                                              <tr>
                                                <th scope="row">@</th>
                                                <td>{{$tng[0]->name}}</td>
                                                <td>${{$tng[0]->price}}</td>
                                                <td>
                                                  <div class="form-check">
                                                    <input class="form-check-input position-static" name='tng' type="checkbox" id="blankCheckbox" value="{{$item->id}}">
                                                  </div>
                                                </td>
                                              </tr>
                                              @endif
                                              <tr>
                                                <th scope="row">@</th>
                                                <td>Tires</td>
                                                <td>Select</td>
                                                <td>
                                                    <select name='tires' class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                                        @if($tires->isEmpty())
                                                          <option value="">Current does have tire</option>
                                                        @else
                                                          @foreach($tires as $tire)
                                                            <option value="{{$tire->id}}">{{$tire->name}} | ${{$tire->price}}</option>
                                                          @endforeach
                                                        @endif 
                                                    </select>
                                                </td>
                                            </tr>
                                          </tbody>
                                      </table>         
                                    </div>
                                    <div class="glass-container col-md-12">
                                      <div class="glass-range front-glass">
                                        <label for="">Front glass</label>
                                        <input type="range" name='front-glass' value='0' id="slider_front" min="0" max="0" step="10">
                                        <span id="slider_value_front">0</span>
                                      </div>
                                      <div class="glass-range back-glass">
                                          <label for="">Back glass</label>
                                          <input type="range" name='back-glass' value='0' id="slider_back" min="0" max="0" step="10">
                                          <span id="slider_value_back">0</span>
                                      </div>
                                      <div class="glass-range right-glass">
                                          <label for="">Right glass</label>
                                          <input type="range" name='right-glass' value='0' id="slider_right" min="0" max="0" step="10">
                                          <span id="slider_value_right">0</span>
                                      </div>
                                      <div class="glass-range left-glass">
                                          <label for="">Left glass</label>
                                          <input type="range" name='left-glass' value='0' id="slider_left" min="0" max="0" step="10">
                                          <span id="slider_value_left">0</span>
                                      </div>
                                      <img src="{{asset('storage/static/glasss.jpg')}}" alt="" width="400">
                                    </div>
                              </div>
                        </div>
                      </div>
                    </div>
                    <div class="card card-into-payment">
                      <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="far fa-credit-card mr-3 text-dark"></i><span>Payment</span>
                          </button>
                        </h5>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body payment-details">
                            <h3 class="text-center mt-3 mb-5">Paymant details</h3>
                            <div class="separator col-md-12"></div>
                            <div class="container">
                                    <div class='row'>
                                        <div class='col-md-4'></div>
                                        <div class='col-md-4 payment-form'>
                                          <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
                                            <div class='form-row'>
                                              <div class='col-md-12 form-group fix-from-payment required'>
                                                <label class='control-label'>Name on Card</label>
                                                <input class='form-control' name='cardname' placeholder="Card name" size='4' type='text'>
                                              </div>
                                            </div>
                                            <div class='form-row'>
                                              <div class='col-md-12 form-group fix-from-payment required' id=''>
                                                <label class='control-label'>Card Number</label>
                                                <input autocomplete='off' name='cardnumber' placeholder="Card number" class='form-control card-number' size='20' type='text'>
                                              </div>
                                            </div>
                                            <div class='form-row'>
                                              <div class='col-md-4 form-group fix-from-payment cvc required'>
                                                <label class='control-label'>CVC</label>
                                                <input autocomplete='off' class='form-control card-cvc' name="cvc" placeholder='ex. 311' size='4' type='text'>
                                              </div>
                                              <div class='col-md-4 form-group fix-from-payment expiration required'>
                                                <label class='control-label'>Expiration</label>
                                                <input class='form-control card-expiry-month' name='mm' placeholder='MM' size='2' type='text'>
                                              </div>
                                              <div class='col-md-4 form-group fix-from-payment expiration required'>
                                                <label class='control-label'> </label>
                                                <input class='form-control card-expiry-year' name='yy' placeholder='YYYY' size='4' type='text'>
                                              </div>
                                            </div>
                                            <div class='form-row'>
                                              <div class='col-md-12'>
                                                <div class='form-control total btn btn-info'>
                                                  Total:
                                                  <span class='amount'>$300</span>
                                                </div>
                                              </div>
                                            </div>
                                            <div class='form-row'>
                                              <div class='col-md-12 form-group'>
                                                <button class='btn btn-primary' type='submit'>Pay »</button>
                                              </div>
                                            </div>
                                            <div class='form-row'>
                                                <div class='col-md-12 error form-group hide text-center'>
                                                  <img src="img/card_1.jpg" alt="" width="50px">
                                                  <img src="img/card_3.jpg" alt="" width="50px">
                                                  <img src="img/card_2.png" alt="" width="50px">
                                                  <img src="img/card_4.png" alt="" width="50px">
                                              </div>
                                            </div>
                                        </div>
                                    <div class='col-md-4'></div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </section>
@stop