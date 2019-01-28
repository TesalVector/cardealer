@extends('admin.layouts.base')    
@section('body')   
    <!-- Page Content -->
    @if( !isset(Auth::user()->email) )
        <script>window.location = '/admin'</script>
     @endif
    <div id="page-content-wrapper">
        <div class="container-fluid admin-dashboard">
            <h1 class="font-weight-bold">Add new Brand</h1>
            <a href="#menu-toggle" class="btn btn-secondary mt-3 mb-3" id="menu-toggle">Menu</a>
            <div class='container'>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action='{{ url('/editBrand') }}' method="POST">
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
                                <label for="exampleInputEmail1">Name brand</label>
                                <input name='brand' type="text" value='{{ $brand->name }}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name brand">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Land of origin</label>
                                <select name='country' class="form-control">
                                    @foreach ($countries as $country)
                                        <option value="{{$country->id}}"
                                            @if($country->id == $brand->country_id)
                                                selected='selected'
                                            @endif
                                        >{{$country->name}}</option>   
                                    @endforeach
                                </select>
                                <input type="hidden" name='id' value='{{$brand->id}}'>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class='form-control' name="description" value='{{$brand->description}}' cols="30" rows="10"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
@stop