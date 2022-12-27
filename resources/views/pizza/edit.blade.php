@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            @if ($errors->any())
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="alert alert-danger">  
                            @foreach ($errors->all() as $error)
                                <p> {{ $error }} </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            <div class="card">
                <div class="card-header">Edit Pizza</div>
           
                <form action="{{route('pizza.update',$pizza->id)}}" method="POST" enctype="multipart/form-data">@csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group mt-2">
                            <label for="name">Name of Pizza</label>
                            <input type="text" class="form-control" name="name" placeholder="Name of Pizza" value="{{$pizza->name}}">
                        </div>
                        <div class="form-group mt-3">
                            <label for="description">Description of Pizza</label>
                            <textarea class="form-control" name="description">{{$pizza->description}}</textarea>
                        </div>
                        
                        <div class="d-flex flex-row align-items-center flex-wrap form-group mt-3">
                            <div class="p-2 py-3">
                                <label class="">Pizza Price(₱) &nbsp;&nbsp;<label>
                                <input type="text" name="small_pizza_price" class="form-control" placeholder="small pizza price" value="{{$pizza->small_pizza_price}}">
                            
                            </div >
                            <div class="p-2 py-3">
                                
                                <input type="text" name="medium_pizza_price" class="form-control" placeholder="medium pizza price" value="{{$pizza->mediuml_pizza_price}}">
                    
                            </div>
                            <div class="p-2 py-3">
                                <input type="text" name="large_pizza_price" class="form-control" placeholder="large pizza price" value="{{$pizza->large_pizza_price}}">
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
                            <input type="file" class="form-control" name="image" >
                            <img src="{{Storage::url($pizza->image)}}" alt="" width="80">
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
