@extends('admin.layouts.base')
@section('body')
    <!-- Page Content -->
    <div id="page-content-wrapper" class="">
        @if( !isset(Auth::user()->email) )
            <script>window.location = '/admin'</script>
        @endif
        <div class="container-fluid admin-dashboard">
            <h1 class="font-weight-bold">Dashboard</h1>
            <a href="#menu-toggle" class="btn btn-secondary mt-3 mb-3" id="menu-toggle">Menu</a>
            <h2 class="text-center mt-4">All countries</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Capital City</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody class="thead-light">
                    @foreach($countries as $i => $country)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$country->name}}</td>
                            <td>{{$country->capital_city}}</td>
                            <td><a href='/editCountry/{{$country->id}}' class="btn btn-primary">Edit</a> <a href='/deleteCountry/{{$country->id}}' class="btn btn-danger">Delete</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href='{{ url('/addCountry') }}' class="btn btn-success">Add</a>
            <h2 class="text-center mt-4">Brand car</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Country</th>
                        <th scope="col">Description</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody class="thead-light">
                    @foreach($brands as $i => $brand)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$brand->name}}</td>
                            <td>{{$brand->name}}</td>
                            <td>{{$brand->description}}</td>
                            <td><a href='/editBrand/{{$brand->id}}' class="btn btn-primary">Edit</a> <a href='/deleteBrand/{{$brand->id}}' class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href='{{ url('/addBrand') }}' class="btn btn-success">Add</a>
            <h2 class="text-center mt-4">All models</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody class="thead-light">
                    @foreach($cars as $i => $car)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$car->model}}</td>
                            <td>${{$car->price}}</td>
                            <td><a href='/editModel/{{$car->id}}' class="btn btn-primary">Edit</a> <a href='/deleteModel/{{$car->id}}' class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href='{{ url('/addModel') }}' class="btn btn-success">Add</a>
            <h2 class="text-center dashboard-subtitle">All laws</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Front</th>
                        <th scope="col">Back</th>
                        <th scope="col">Right</th>
                        <th scope="col">Left</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody class="thead-light">
                        @foreach($lawsGlass as $i => $lawGlass)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$lawGlass->front}}</td>
                            <td>{{$lawGlass->back}}</td>
                            <td>{{$lawGlass->right}}</td>
                            <td>{{$lawGlass->left}}</td>
                            <td><a href='/editLawsGlass/{{$lawGlass->id}}' class="btn btn-primary">Edit</a> <a href='/deleteLawsGlass/{{$lawGlass->id}}' class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href='{{ url('/addLaws') }}' class="btn btn-success">Add</a>
            <h2 class="text-center dashboard-subtitle">All engines</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody class="thead-light">
                        @foreach($engines as $i => $engine)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$engine->name}}</td>
                            <td><a href='/editEngine/{{$engine->id}}' class="btn btn-primary">Edit</a> <a href='/deleteEngine/{{$engine->id}}' class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href='{{ url('/addEngine') }}' class="btn btn-success">Add</a>
            <h2 class="text-center dashboard-subtitle">All packages</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody class="thead-light">
                        @foreach($packages as $i => $package)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$package->name}}</td>
                            <td>${{$package->price}}</td>
                            <td><a href='/editPackage/{{$package->id}}' class="btn btn-primary">Edit</a> <a href='/deletePackage/{{$package->id}}' class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href='{{ url('/addPackage') }}' class="btn btn-success">Add</a>
            <h2 class="text-center dashboard-subtitle">All tairs</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Size</th>
                        <th scope="col">Price</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody class="thead-light">
                        @foreach($tires as $i => $tire)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$tire->name}}</td>
                            <td>{{$tire->type}}</td>
                            <td>{{$tire->size}}</td>
                            <td>${{$tire->price}}</td>
                            <td><a href='/editTire/{{$tire->id}}' class="btn btn-primary">Edit</a> <a href='/deleteTire/{{$tire->id}}' class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href='{{ url('/addTire') }}' class="btn btn-success">Add</a>
            <h2 class="text-center dashboard-subtitle">Slider</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody class="thead-light">
                        @foreach($sliderImages as $i => $sliderImage)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$sliderImage->name}}</td>
                            <td>{{$sliderImage->description}}</td>
                            <td><a href='/editSliderImage/{{$sliderImage->id}}' class="btn btn-primary">Edit</a> <a href='/deleteSliderImage/{{$sliderImage->id}}' class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href='{{ url('/addSliderImage') }}' class="btn btn-success">Add</a>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
@stop