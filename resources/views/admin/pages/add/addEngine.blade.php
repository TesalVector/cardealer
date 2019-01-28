@extends('admin.layouts.base')    
@section('body')   
    <!-- Page Content -->
    @if( !isset(Auth::user()->email) )
        <script>window.location = '/admin'</script>
     @endif
    <div id="page-content-wrapper">
        <div class="container-fluid admin-dashboard">
            <h1 class="font-weight-bold">Add new Engine</h1>
            <a href="#menu-toggle" class="btn btn-secondary mt-3 mb-3" id="menu-toggle">Menu</a>
            <div class='container'>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action='{{ url('/addEngine') }}' method="POST">
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
                                <label for="exampleInputEmail1">Name engine</label>
                                <input type="text" class="form-control" name='engine' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name brand">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
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