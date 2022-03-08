@extends('layout.layout')

@section('content')
    <div class="col-md-8 mb-5">
        <div class="d-flex justify-content-between mb-3">
            <h2 class="text-success font-weight-bold mb-3"><u>Customer Registration</u></h2>
            <h2 class="font-weight-bold mb-3"><a class="text-success" href="{{ route('customers') }}">All Customers</a></h2>
        </div>
        <form action="{{ route('customers-store') }}" method="POST">
            @csrf

            <div class="form-group pb-2">
                <label for="user_name" class="font-weight-bold">Customer name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="user_name" name="name" placeholder="Enter user name">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group pb-2">
                <label for="email" class="font-weight-bold">Email address <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group pb-2">
                <label for="password" class="font-weight-bold">Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group pb-2">
                <label for="password_confirmation" class="font-weight-bold">Re-enter Password <span
                        class="text-danger">*</span></label>
                <input type="password" class="form-control" id="password_confirmation" placeholder="Re-enter Password"
                    name="password_confirmation">
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror

            </div>

            <div class="form-group pb-2">
                <label for="dob" class="font-weight-bold">Date of birth <span class="text-danger">*</span></label>
                <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date of birth">
                @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group pb-2">
                <label for="city" class="font-weight-bold">City <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter city">
                @error('city') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group pb-2">
                <label for="country" class="font-weight-bold">Country <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="country" name="country" placeholder="Enter country">
                @error('country') <span class="text-danger">{{ $message }}</span> @enderror
            </div>


            <div class="form-group form-check form-check-inline pb-2">

                <div class="pr-3">
                    <input class="form-check-input" type="radio" name="status" id="status" value="1">
                    <label class="form-check-label" for="status">Active</label>
                </div>
                <div class="pr-3">
                    <input class="form-check-input" type="radio" name="status" id="status" value="0">
                    <label class="form-check-label" for="status">InActive</label>
                </div>

                @error('status') <span class="text-danger">{{ $message }}</span> @enderror

            </div>


            <div class=""><button type="submit" class="btn btn-success btn-sm btn-lg btn-block">Save</button></div>

        </form>
    </div>
@endsection
