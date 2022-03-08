@extends('layout.layout')

@section('content')
    <div class="col-md-8 mb-5">
        <h2 class="text-center text-success font-weight-bold mb-3"><u>Update Customers</u></h2>

        <form action="{{route('customers-update',$customer->id)}}" method="POST">
            @csrf
            @method('PATCH')

            <div class="form-group pb-2">
                <label for="name" class="font-weight-bold">Customer name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" name="name" value="{{$customer['name']}}">
                @error('name') <span class="text-danger">{{$message}}</span> @enderror
            </div>

            <div class="form-group pb-2">
                <label for="email" class="font-weight-bold">Email address <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" name="email"  value="{{$customer['email']}}">
                @error('email') <span class="text-danger">{{$message}}</span> @enderror
            </div>


            <div class="form-group pb-2">
                <label for="dob" class="font-weight-bold">Date of birth <span class="text-danger">*</span></label>
                <input type="date" class="form-control" id="dob" name="dob"  value="{{$customer['dob']}}">
                @error('dob') <span class="text-danger">{{$message}}</span> @enderror
            </div>

            <div class="form-group pb-2">
                <label for="city" class="font-weight-bold">City <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="city" name="city"  value="{{$customer['city']}}">
                @error('city') <span class="text-danger">{{$message}}</span> @enderror
            </div>

            <div class="form-group pb-2">
                <label for="country" class="font-weight-bold">Country <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="country" name="country"  value="{{$customer['country']}}">
                @error('country') <span class="text-danger">{{$message}}</span> @enderror
            </div>

            <div class="form-group form-check form-check-inline pb-2">
                <div class="pr-3">
                    <input class="form-check-input" type="radio" name="status" id="status" value="1" @if($customer['status']==1) checked @endif>
                    <label class="form-check-label" for="status" >Active</label>
                </div>
                <div class="pr-3">
                    <input class="form-check-input" type="radio" name="status" id="status" value="0" @if($customer['status']==0) checked @endif>
                    <label class="form-check-label" for="status" >InActive</label>
                </div>
                @error('status') <span class="text-danger">{{ $message }}</span> @enderror
            </div>


            <div class=""><button type="submit" class="btn btn-success btn-sm btn-lg btn-block">Save</button></div>

        </form>
    </div>
@endsection
