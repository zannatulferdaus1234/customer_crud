@extends('layout.layout')

@section('content')

    <div class="col-md-11 mb-5">

        <div class="d-flex justify-content-between mb-3">
            <h2 class="text-success font-weight-bold mb-3"><u>All Customers</u></h2>
            <h2 class="font-weight-bold mb-3"><a class="text-success" href="{{ route('customers-create') }}">Add Customers</a></h2>
        </div>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">DOB</th>
                    <th scope="col">City</th>
                    <th scope="col">Country</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($customers as $customers)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ ucfirst($customers->name) }}</td>
                        <td>{{ $customers->email }}</td>
                        <td>{{ $customers->dob }}</td>
                        <td>{{ $customers->city }}</td>
                        <td>{{ $customers->country }}</td>

                        @if ($customers->status == 1)
                            <td>Active</td>
                        @else <td>Inactive</td>
                        @endif

                        <td>
                            <a class="px-1" href="{{ route('customers-edit', $customers->id) }}">Edit</a>
                            <a class="px-1" href="{{ route('customers-delete', $customers->id) }}"> Delete</a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
