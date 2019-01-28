@extends('admin.layouts.base')    
@section('body')   
    <!-- Page Content -->
    @if( !isset(Auth::user()->email) )
        <script>window.location = '/admin'</script>
     @endif
    <div id="page-content-wrapper">
        <div class="container-fluid admin-dashboard">
            <h1 class="font-weight-bold">Add new Item</h1>
            <a href="#menu-toggle" class="btn btn-secondary mt-3 mb-3" id="menu-toggle">Menu</a>
            <div class='container'>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action='{{ url('/addPackage') }}' method="POST">
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
                                <label for="exampleInputEmail1">Name Item</label>
                                <input type="text" class="form-control" name='item' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name brand">
                                <br/>
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