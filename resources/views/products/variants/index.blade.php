@extends('layout.layout')

@section('content')

    <div class="col-md-11 mb-5">

        <div class="d-flex justify-content-between mb-3">
            <h2 class="text-success font-weight-bold mb-3"><u>All Variants</u></h2>
            <h2 class="font-weight-bold mb-3"><a class="text-success" href="{{ route('variant-create') }}">Add Variants</a></h2>
        </div>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Size</th>
                    <th scope="col">Color</th>
                    <th scope="col">Price</th>

                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($variants as $variant)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>

                        @if ($variant->product->name)
                        <td>{{ ucfirst($variant->product->name) }}</td>
                        @endif

                        @if ($variant->gender)
                        <td>{{ ucfirst($variant->gender) }}</td>
                        @endif

                        @if ($variant->size)
                        <td>{{ ucfirst($variant->size) }}</td>
                        @endif

                        @if ($variant->color)
                        <td>{{ ucfirst($variant->color) }}</td>
                        @endif

                        @if ($variant->price)
                        <td>{{ ucfirst($variant->price) }}</td>

                        @endif

                        <td>
                            <a class="px-1" href="{{ route('variant-edit', $variant->id) }}">Edit</a>
                            <a class="px-1" href="{{ route('variant-delete', $variant->id) }}"> Delete</a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
