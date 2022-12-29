@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">CUSTOMERS</li>
            </ol>
        </nav>

        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Customers') }}
                    <a href="{{route('pizza.create')}}" style="float:right" class="text-decoration-none">Create Pizza</a>
                    <a href="{{route('pizza.index')}}" style="float:right" class="text-decoration-none">View Pizza   &nbsp;</a>
                </div>
                    
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Member Since</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                            <tr>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{\Carbon\Carbon::parse($customer->created_at)->format('M d,Y')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
