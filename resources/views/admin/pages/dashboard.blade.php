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
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody class="thead-light">
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><a class="btn btn-primary">Edit</a> <a class="btn btn-danger">Delete</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><a class="btn btn-primary">Edit</a> <a class="btn btn-danger">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td><a class="btn btn-primary">Edit</a> <a class="btn btn-danger">Delete</a></td>
                    </tr>
                </tbody>
            </table>
            <a href='file:///home/milos1994/Desktop/cardealer-front-master/addBrand.html' class="btn btn-success">Add</a>
            <h2 class="text-center dashboard-subtitle">All models</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody class="thead-light">
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><a class="btn btn-primary">Edit</a> <a class="btn btn-danger">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><a class="btn btn-primary">Edit</a> <a class="btn btn-danger">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td><a href='file:///home/milos1994/Desktop/cardealer-front-master/addModel.html' class="btn btn-primary">Edit</a> <a class="btn btn-danger">Delete</a></td>
                    </tr>
                </tbody>
            </table>
            <a href='file:///home/milos1994/Desktop/cardealer-front-master/addModel.html' class="btn btn-success">Add</a>
            <h2 class="text-center dashboard-subtitle">All packages</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody class="thead-light">
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><a class="btn btn-primary">Edit</a> <a class="btn btn-danger">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><a class="btn btn-primary">Edit</a> <a class="btn btn-danger">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td><a class="btn btn-primary">Edit</a> <a class="btn btn-danger">Delete</a></td>
                    </tr>
                </tbody>
            </table>
            <a href='file:///home/milos1994/Desktop/cardealer-front-master/addPackage.html' class="btn btn-success">Add</a>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
@stop