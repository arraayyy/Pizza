@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>
                <div class="card-body">
                    <ul class="list-group">
                        <a href="" class="list-group-item list-group-item-action">View</a>
                        <a href="" class="list-group-item list-group-item-action">Create</a>
                    <ul>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pizza') }}</div>
                <!-- validation  -->
                @if ($errors->any())
                    <div class="alert alert-danger">  
                        @foreach ($errors->all() as $error)
                           <p> {{ $error }} </p>
                        @endforeach
                    </div>
                @endif
                <form action="{{route('pizza.store')}}" method="POST">@csrf
                    <div class="card-body">
                        <div class="form-group mt-2">
                            <label for="name">Name of Pizza</label>
                            <input type="text" class="form-control" name="name" placeholder="Name of Pizza">
                        </div>
                        <div class="form-group mt-3">
                            <label for="description">Description of Pizza</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                        
                        <div class="d-flex flex-row align-items-center flex-wrap form-group mt-3">
                            <div class="p-2 py-3">
                                <label class="">Pizza Price(₱) &nbsp;&nbsp;<label>
                                <input type="number" name="small_pizza_price" class="form-control" placeholder="small pizza price">
                            
                            </div >
                            <div class="p-2 py-3">
                                
                                <input type="number" name="medium_pizza_price" class="form-control" placeholder="medium pizza price">
                    
                            </div>
                            <div class="p-2 py-3">
                                <input type="number" name="large_pizza_price" class="form-control" placeholder="large pizza price">
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="name">Category</label>
                            <select class="form-control" name="category">
                                <option value="">Select Category</option>
                                <option value="vegetarian">Vegetarian</option>
                                <option value="non-vegetarian">Non-vegetarian</option>
                                <option value="traditional">Traditional</option>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <div class="form-group mt-3 text-center">
                        <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
