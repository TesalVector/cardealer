@extends('customer.layouts.base')

@section('body')
    <!-- Header payment -->
    <section class="container">
        <h1 class="text-center mt-5 mb-5 font-weight-bold descriptiom-title-shop">SHOP</h2>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    </section>
    
    
    <section class="container mt-4">
        <div class="row header-payment">
            <div class="col-md-6">
                <img src="img/a4.png" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-6 text-center">
                <h3>BMW X5</h3>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Total price: $ 65.700</li>
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
                <form action="">
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
                                <input type="text" name="fname" placeholder="First name" class="">
                                <input type="text" name="lname" placeholder="Last name" class="">
                                <input type="email" name="email" placeholder="Email" class="">
                                <input type="text" name="phone" placeholder="Phone number" class="">
                                <select name="" id="">
                                    <option value="">Serbia</option>
                                    <option value="">UK</option>
                                    <option value="">Germany</option>
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
                                              <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>$200</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                    </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>$450</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                    </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>$560</td>
                                                <td>
                                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                                        <option selected>Choose...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </td>
                                              </tr>
                                              <tr>
                                                <th scope="row">4</th>
                                                <td>Mark</td>
                                                <td>$200</td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="range" name="points" min="0" max="10">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                          </table>           
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
                                              <div class='col-md-12 form-group card fix-from-payment required' id=''>
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
                                                <button class='form-control fix-from-payment btn btn-primary submit-button' type='submit'>Pay »</button>
                                              </div>
                                            </div>
                                            <div class='form-row'>
                                              <div class='col-md-12 error form-group hide'>
                                                <div class='alert-danger alert'>
                                                  Please correct the errors and try again.
                                                </div>
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