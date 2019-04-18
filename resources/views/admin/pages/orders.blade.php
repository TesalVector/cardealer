@extends('admin.layouts.base')
@section('body')
    @if( !isset(Auth::user()->email) )
        <script>window.location = '/admin'</script>
    @endif
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 order">
            <h2 class="text-center mt-4">All Orders</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody class="thead-light">
                    @foreach($orders as $i => $order)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$order->fname}} {{$order->lname}}</td>
                            <td>{{$order->email}}</td>
                            <td>{{$order->phone}}</td>
                            <td><a href='/accept/{{$order->id}}' class="btn btn-success">Acccept</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href='{{ url('/dashboard') }}' class="btn btn-danger">Back</a>
        </div>
    </div>
</div>
@stop