@extends('layout.layout')

@section('content')
    <div class="col-md-8 mb-5">
        <div class="d-flex justify-content-between mb-3">
            <h2 class="text-success font-weight-bold mb-3"><u>Add variants</u></h2>
            <h2 class="font-weight-bold mb-3"><a class="text-success" href="{{ route('variants') }}">All variants</a></h2>
        </div>


        <form action="{{ route('variant-store') }}" method="POST">
            @csrf

            <div class="form-group col-md-12 pb-2 d-flex">
                <div class="col-md-4">
                    <label for="product_name" class="font-weight-bold">Select Product name <span
                            class="text-danger">*</span></label>
                </div>
                <div class="col-md-8">
                    <select class="form-select form-select-lg mb-3" id="product_name" name="product_id">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ ucwords($product->name) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>



            <div class="form-group form-check form-check-inline pb-2 col-md-12">
                <div class="col-md-4">
                    <label for="gender" class="font-weight-bold">Gender<span class="text-danger">*</span></label>
                </div>
                <div class="col-md-6">
                    <div class="pr-3">
                        <input class="form-check-input" type="checkbox" name="gender" id="gender" value="male">
                        <label class="form-check-label" for="gender">Male</label>
                    </div>
                    <div class="pr-3">
                        <input class="form-check-input" type="checkbox" name="gender" id="gender" value="female">
                        <label class="form-check-label" for="gender">Female</label>
                    </div>
                </div>
                @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
            </div>



            <div class="form-group form-check form-check-inline pb-2 col-md-12">
                <div class="col-md-4">
                    <label for="size" class="font-weight-bold">Size<span class="text-danger">*</span></label>
                </div>
                <div class="col-md-6">
                    <div class="pr-3">
                        <input class="form-check-input" type="radio" name="size" id="size" value="small">
                        <label class="form-check-label" for="size">small</label>
                    </div>
                    <div class="pr-3">
                        <input class="form-check-input" type="radio" name="size" id="size" value="medium">
                        <label class="form-check-label" for="size">medium</label>
                    </div>
                    <div class="pr-3">
                        <input class="form-check-input" type="radio" name="size" id="size" value="large">
                        <label class="form-check-label" for="size">large</label>
                    </div>
                </div>
                @error('size') <span class="text-danger">{{ $message }}</span> @enderror
            </div>



            <div class="form-group form-check form-check-inline pb-2 col-md-12">
                <div class="col-md-4">
                    <label for="name" class="font-weight-bold">Color<span class="text-danger">*</span></label>
                </div>
                <div class="col-md-6">
                    <div class="pr-3">
                        <input class="form-check-input" type="radio" name="color" id="color" value="white">
                        <label class="form-check-label" for="color">White</label>
                    </div>
                    <div class="pr-3">
                        <input class="form-check-input" type="radio" name="color" id="color" value="black">
                        <label class="form-check-label" for="color">Black</label>
                    </div>
                    <div class="pr-3">
                        <input class="form-check-input" type="radio" name="color" id="color" value="red">
                        <label class="form-check-label" for="color">Red</label>
                    </div>
                    <div class="pr-3">
                        <input class="form-check-input" type="radio" name="color" id="color" value="yellow">
                        <label class="form-check-label" for="color">Yellow</label>
                    </div>
                    <div class="pr-3">
                        <input class="form-check-input" type="radio" name="color" id="color" value="blue">
                        <label class="form-check-label" for="color">Blue</label>
                    </div>
                    <div class="pr-3">
                        <input class="form-check-input" type="radio" name="color" id="color" value="orange">
                        <label class="form-check-label" for="color">Orange</label>
                    </div>
                </div>
                @error('color') <span class="text-danger">{{ $message }}</span> @enderror
            </div>



            <div class="form-group pb-2 d-flex">
                <div class="col-md-4">
                    <label for="price" class="font-weight-bold">Product Price <span class="text-danger">*</span></label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter product price">
                </div>
                @error('price') <span class="text-danger">{{ $message }}</span> @enderror
            </div>



            <div class=""><button type="submit" class="btn btn-success ">Save</button></div>

        </form>
    </div>
@endsection
