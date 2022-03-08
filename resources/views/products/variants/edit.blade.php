@extends('layout.layout')

@section('content')
    <div class="col-md-8 mb-5">
        <h2 class="text-center text-success font-weight-bold mb-3"><u>Update variant</u></h2>

        <form action="{{ route('variant-update', $variant->id) }}" method="POST">
            @csrf
            @method('PATCH')


            <div class="form-group col-md-12 pb-2 d-flex">
                <div class="col-md-4">
                    <label for="product_name" class="font-weight-bold">Select Product name <span
                            class="text-danger">*</span></label>
                </div>
                <div class="col-md-8">
                    <select class="form-select form-select-lg mb-3" id="product_name" name="product_id">
                        @foreach ($products as $products)
                            <option value="{{ $products->id }}" {{$products->id == $variant->product_id ? 'selected': ''}}>{{ ucwords($products->name) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>



            @if ($variant['gender'])
                <div class="form-group form-check form-check-inline pb-2 col-md-12">
                    <div class="col-md-4">
                        <label for="gender" class="font-weight-bold">Gender<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-md-6">
                        <div class="pr-3">
                            <input class="form-check-input" type="checkbox" name="gender" id="gender" value="male" @if ($variant['gender'] == 'male') checked @endif>
                            <label class="form-check-label" for="gender">Male</label>
                        </div>
                        <div class="pr-3">
                            <input class="form-check-input" type="checkbox" name="gender" id="gender" value="female" @if ($variant['gender'] == 'female') checked @endif>
                            <label class="form-check-label" for="gender">Female</label>
                        </div>
                    </div>
                    @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif



            @if ($variant['size'])
                <div class="form-group form-check form-check-inline pb-2 col-md-12">
                    <div class="col-md-4">
                        <label for="size" class="font-weight-bold">Size<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-md-6">
                        <div class="pr-3">
                            <input class="form-check-input" type="radio" name="size" id="size" value="small" @if ($variant['size'] == 'small') checked @endif>
                            <label class="form-check-label" for="size">small</label>
                        </div>
                        <div class="pr-3">
                            <input class="form-check-input" type="radio" name="size" id="size" value="medium" @if ($variant['size'] == 'medium') checked @endif>
                            <label class="form-check-label" for="size">medium</label>
                        </div>
                        <div class="pr-3">
                            <input class="form-check-input" type="radio" name="size" id="size" value="large" @if ($variant['size'] == 'large') checked @endif>
                            <label class="form-check-label" for="size">large</label>
                        </div>
                    </div>
                    @error('size') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif



            @if ($variant['color'])
                <div class="form-group form-check form-check-inline pb-2 col-md-12">
                    <div class="col-md-4">
                        <label for="name" class="font-weight-bold">Color<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-md-6">
                        <div class="pr-3">
                            <input class="form-check-input" type="radio" name="color" id="color" value="white" @if ($variant['color'] == 'white') checked @endif>
                            <label class="form-check-label" for="color">White</label>
                        </div>
                        <div class="pr-3">
                            <input class="form-check-input" type="radio" name="color" id="color" value="black" @if ($variant['color'] == 'black') checked @endif>
                            <label class="form-check-label" for="color">Black</label>
                        </div>
                        <div class="pr-3">
                            <input class="form-check-input" type="radio" name="color" id="color" value="red" @if ($variant['color'] == 'red') checked @endif>
                            <label class="form-check-label" for="color">Red</label>
                        </div>
                        <div class="pr-3">
                            <input class="form-check-input" type="radio" name="color" id="color" value="yellow" @if ($variant['color'] == 'yellow') checked @endif>
                            <label class="form-check-label" for="color">Yellow</label>
                        </div>
                        <div class="pr-3">
                            <input class="form-check-input" type="radio" name="color" id="color" value="blue" @if ($variant['color'] == 'blue') checked @endif>
                            <label class="form-check-label" for="color">Blue</label>
                        </div>
                        <div class="pr-3">
                            <input class="form-check-input" type="radio" name="color" id="color" value="orange" @if ($variant['color'] == 'orange') checked @endif>
                            <label class="form-check-label" for="color">Orange</label>
                        </div>
                    </div>
                    @error('color') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif



            <div class="form-group pb-2 d-flex">
                <div class="col-md-4">
                    <label for="price" class="font-weight-bold">Product Price <span class="text-danger">*</span></label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="price" name="price" value="{{$variant['price']}}">
                </div>
                @error('price') <span class="text-danger">{{ $message }}</span> @enderror
            </div>



            <div class=""><button type="submit" class="btn btn-success btn-sm btn-lg btn-block">Update</button></div>

        </form>
    </div>
@endsection
