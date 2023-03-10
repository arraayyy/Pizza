@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>
                <div class="card-body">
                    <form action="{{route('frontpage')}}" method="GET">
                        <a href="" class="">Back</a>
                        <input type="submit" value="Vegetarian" name="category" class="mt-2 list-group list-group-item list-group-item-action border-0">
                        <input type="submit" value="Non-vegetarian" name="category" class="list-group list-group-item list-group-item-action border-0">
                        <input type="submit" value="Traditional" name="category" class="list-group list-group-item list-group-item-action border-0">
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card p-2">
                <div class="card-header">{{ __('Pizza' ) }} ({{count($pizzas)}} pizza)</div>
                <div class="card-body">
                    <div class="row">
                        @forelse ($pizzas as $pizza)
                            <div class="col-md-4 mt-2 text-center" style="border: 1px solid #ccc;">
                                <img src="{{Storage::url($pizza->image)}}" class="mt-3 img-thumbnail" style="width: 100%" alt="">
                                <p class="mt-2">{{$pizza->name}}</p>
                                <p>{{$pizza->description}}</p>
                                <a href="{{route('pizza.show',$pizza->id)}}">
                                    <button class="btn btn-danger mb-1">Order Now</button>
                                </a>
                            </div>
                        @empty
                            <p>No Pizza to show</p>
                        @endforelse
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    a.list-group-item {
        font-size: 18px;
    }
    a.list-group-item:hover {
        background-color: red;
        color : #fff;
    }
    .card-header {
        background-color: red;
        color: #fff;
        font-size: 20px;
    }

</style>
@endsection
