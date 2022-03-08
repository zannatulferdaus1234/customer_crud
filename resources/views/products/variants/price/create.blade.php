@extends('layout.layout')

@section('content')
    <div class="col-md-8 mb-5">
        <div class="d-flex justify-content-between mb-3">
            <h2 class="text-success font-weight-bold mb-3"><u>Add Product</u></h2>
            <h2 class="font-weight-bold mb-3"><a class="text-success" href="{{ route('products') }}">All Products</a></h2>
        </div>
        <form action="{{ route('product-store') }}" method="POST">
            @csrf

            <div class="form-group pb-2">
                <label for="name" class="font-weight-bold">Product name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>


            <div class=""><button type="submit" class="btn btn-success ">Save</button></div>

        </form>
    </div>
@endsection
