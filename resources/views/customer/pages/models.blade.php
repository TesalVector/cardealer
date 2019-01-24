@extends('customer.layouts.base')

@section('body')
    <section class='pt-5 pb-5'>
        <div class="container cards-car">
            <h1 class='mb-4'>All models</h1>
            <div class='row'>
                @foreach($models as $i=>$model)
                    <div class='col-md-4 col-12'>
                        <a class="card-link" href="http://localhost/details/{{$model['id']}}"></a>
                        <span>{{$model['name']}}</span><i class="fas fa-arrow-right ml-3"></i>
                        <img class='col-12' src="{{asset('storage/image/slide/')}}/{{$model['image']}}">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop