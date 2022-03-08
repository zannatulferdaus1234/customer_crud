@extends('layout.layout')

@section('content')
    <div class="col-md-8 mb-5">
        <h2 class="text-center text-success font-weight-bold mb-3"><u>Update product</u></h2>

        <form action="{{route('product-update',$product->id)}}" method="POST">
            @csrf
            @method('PATCH')

            <div class="form-group pb-2">
                <label for="name" class="font-weight-bold">Product name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" name="name" value="{{$product['name']}}">
                @error('name') <span class="text-danger">{{$message}}</span> @enderror
            </div>



            <div class=""><button type="submit" class="btn btn-success btn-sm btn-lg btn-block">Update</button></div>

        </form>
    </div>
@endsection
