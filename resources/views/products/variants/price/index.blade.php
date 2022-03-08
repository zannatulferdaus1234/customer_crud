@extends('layout.layout')

@section('content')

    <div class="col-md-11 mb-5">

        <div class="d-flex justify-content-between mb-3">
            <h2 class="text-success font-weight-bold mb-3"><u>All Products</u></h2>
            <h2 class="font-weight-bold mb-3"><a class="text-success" href="{{ route('product-create') }}">Add Product</a></h2>
        </div>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $products)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ ucfirst($products->name) }}</td>
                        <td>
                            <a class="px-1" href="{{ route('product-edit', $products->id) }}">Edit</a>
                            <a class="px-1" href="{{ route('product-delete', $products->id) }}"> Delete</a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
