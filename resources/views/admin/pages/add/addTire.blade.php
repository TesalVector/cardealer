@extends('admin.layouts.base')    
@section('body')   
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid admin-dashboard">
            <h1 class="font-weight-bold">Add new Item</h1>
            <a href="#menu-toggle" class="btn btn-secondary mt-3 mb-3" id="menu-toggle">Menu</a>
            <div class='container'>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action='{{ url('/addTire') }}' method="POST">
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
                                <label for="exampleInputEmail1">Name tire</label>
                                <input type="text" class="form-control" name='tire' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name brand">
                                <br/>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Type</label>
                                <select name='type' class="form-control">
                                    @foreach ($enums as $enum)
                                        <option value="{{$enum}}">{{$enum}}</option>   
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group"> 
                                <label for="exampleInputEmail1">Size</label>
                                <input type="text" class="form-control" name='size' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name brand">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" class="form-control" name='price' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name brand">
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