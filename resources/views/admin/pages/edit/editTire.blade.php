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
                        <form action='{{ url('/editTire') }}' method="POST">
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
                                <input name='tire' type="text" value='{{ $tire->name }}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name brand">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Type</label>
                                <select name='type' class="form-control">
                                    @foreach ($enums as $enum)
                                        <option value="{{$enum}}"
                                            @if($enum == $tire->id)
                                                selected='selected'
                                            @endif
                                        >{{$enum}}</option>   
                                    @endforeach
                                </select>
                                <input type="hidden" name='id' value='{{$tire->id}}'>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Size</label>
                                <input name='size' type="text" value='{{ $tire->size }}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name brand">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Proce</label>
                                <input name='price' type="text" value='{{ $tire->price }}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name brand">
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