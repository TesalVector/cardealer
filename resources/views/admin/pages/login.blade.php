@extends('admin.layouts.base')
@section('body')
    @if(isset(Auth::user()->email))
        <script>window.location = 'dashboard'</script>
    @endif
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12 admin-login">
            <img src="{{ asset('storage/static/logo.png') }}" alt="" width="300">
            <h1 class="text-center">LOGIN TO ADMIN PANEL</h1>
            <form action='{{ url('/admin/chacklogin') }}' method="POST">
                @if($message = Session::get('error'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{ csrf_field() }}
                <div class="gray-form clearfix">
                    <div class="admin-login-border">
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" name="email" class="form-control placeholder" placeholder="Email">
                        </div>
                        <div class="form-group mt-3">
                            <label for="password">Password*</label>
                            <input type="password" name="password" class="form-control placeholder" placeholder="Password">
                            <input type="hidden" name="card">
                        </div>
                        <input type="submit" name="" class="mt-4 btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div> 
@stop