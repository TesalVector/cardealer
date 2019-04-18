<div class="container-fluid topbar bg-dark pt-3 pb-3">
        <div class="container text-light">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                  <div class="topbar-left text-lg-left text-center info-goup">
                     <ul class="list-inline mb-0">
                       <li class="c-row"> <i class="fa fa-envelope mr-2"> </i> support@website.com</li> 
                       <li class="c-row"> <i class="fa fa-clock mr-2"></i> Mon - Sat 8.00 - 18.00. Sunday CLOSED</li>
                     </ul>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12">
                  <div class="topbar-right text-lg-right text-center info-phone">
                     <ul class="list-inline mb-0 social-link">
                       <li class="d-inline-block"> <i class="fa fa-phone"></i> (007) 123 456 7890</li> 
                       <li class="d-inline-block ml-2"><a href="#" class="text-white"><i class="fab fa-facebook-f"></i></i></a></li>   
                       <li class="d-inline-block ml-3"><a href="#" class="text-white"><i class="fab fa-twitter"></i></a></li>   
                       <li class="d-inline-block ml-3"><a href="#" class="text-white"><i class="fab fa-instagram"></i></i></a></li>   
                       <li class="d-inline-block ml-3"><a href="#" class="text-white"><i class="fab fa-youtube"></i></a></li>   
                     </ul>
                  </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
            <div class="container">
            <a href='{{asset('/')}}'><img class="navbar-brand" src="{{ asset('storage/static/logo.png') }}" alt="carDealer" width="150"></a>
              <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>