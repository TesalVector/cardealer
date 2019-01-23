@extends('admin.layouts.base')    
@section('body')   
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid admin-dashboard">
            <h1 class="font-weight-bold">Add new Brand</h1>
            <a href="#menu-toggle" class="btn btn-secondary mt-3 mb-3" id="menu-toggle">Menu</a>
            <div class='container'>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action='{{ url('/addLawsGlass') }}' method="POST">
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
                            <div class="form-group">
                                <label for="exampleInputEmail1">Front glass</label>
                                <input type="text" class="form-control" name='front' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Front glass">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Back glass</label>
                                <input type="text" class="form-control" name='back' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Back glass">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Right glass</label>
                                <input type="text" class="form-control" name='right' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Right glass">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Left glass</label>
                                <input type="text" class="form-control" name='left' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Left glass">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Land of origin</label>
                                <select name='country_id' class="form-control">
                                    @foreach ($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>   
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
@stop