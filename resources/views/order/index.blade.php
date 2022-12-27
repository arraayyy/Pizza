@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2 mt-5">
            <div class="card">
                <div class="card-header">
                    {{ __('Menu') }}
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <a href="{{route('pizza.index')}}" class="list-group-item list-group-item-action">View</a>
                        <a href="{{route('pizza.create')}}" class="list-group-item list-group-item-action">Create</a>
                        <a href="{{route('user.order')}}" class="list-group-item list-group-item-action">User order</a>
                    <ul>
                </div>
            </div>
        </div>

        <div class="col-md-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Order</li>
            </ol>
        </nav>


            <div class="card">
                <div class="card-header">{{ __('Order') }}</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">User</th>
                                <th scope="col">Phone/Email</th>
                                <th scope="col">Date/Time</th>
                                <th scope="col">Pizza</th>
                                <th scope="col">S. Pizza</th>
                                <th scope="col">M. Pizza</th>
                                <th scope="col">L. Pizza</th>
                                <th scope="col">Total(₱)</th>
                                <th scope="col">Message</th>
                                <th scope="col">Status</th>
                                <th scope="col">Accept</th>
                                <th scope="col">Reject</th>
                                <th scope="col">Completed</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->user->email}}<br>{{$order->phone}}</td>
                                <td>{{$order->date}} / {{$order->time}}</td>
                                <td>{{$order->pizza->name}}</td>
                                <td>{{$order->small_pizza}}</td>
                                <td>{{$order->medium_pizza}}</td>
                                <td>{{$order->large_pizza}}</td>
                                <td>
                                    ₱{{
                                        ($order->small_pizza * $order->pizza->small_pizza_price) + 
                                        ($order->medium_pizza * $order->pizza->medium_pizza_price) + 
                                        ($order->large_pizza * $order->pizza->large_pizza_price)
                                    }}
                                </td>
                                <td>{{$order->body}}</td>
                                <td>{{$order->status}}</td>
                                <form action="{{route('order.status', $order->id)}}" method="POST">@csrf
                                    <td>
                                        <input type="submit" value="Accepted" class="btn btn-primary btn-sm" name="status"> 
                                    </td>
                                    <td>
                                        <input type="submit" value="Rejected" class="btn btn-danger btn-sm" name="status"> 
                                    </td>
                                    <td>
                                        <input type="submit" value="Completed" class="btn btn-success btn-sm" name="status"> 
                                    </td>
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
