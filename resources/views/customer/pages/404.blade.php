@extends('customer.layouts.base')

@section('body')
    <section>
        <div class="container error-car">
            <div class="row">
                <div class='col-md-12 text-center'>
                    <h2 class='text-light'>404</h2>
                <img src="{{ asset('storage/static/error404.png') }}" alt="">
                    <h3 class='font-weight-bold'>OOOPPS:(</h3>
                    <strong>The Page you were looking for, couldn't be found</strong>
                    <p>Can't find what you looking for? Take a moment and do a search below or start from our <a href='index.html'>Home Page</a></p>
                </div>
            </div>
            <div>
                <form action="" class='error-input'>
                    <input type="text" placeholder="Search for pages and press enter...">
                </form>
            </div>
        </div>
    </section>
@stop