@extends('admin.layouts.app')


@section('content')
<div class="container mt-4">
    <h5 class="mb-3">All Products </h5>
    <div class="comonbutton">
    <div class="button">
        <button>+Assign to Staf</button>
        <button>+Change Status</button>
        <button>+Steed Fast</button>
        <button>+Pathow</button>
        <button>+Delete</button>
    </div>
    <a href="{{route('products.create')}}">Add Product</a>
     </div>

    <table id="comonTable">
        <thead >
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Discount</th>
                <th>Vat</th>
                <th>Categories , Brands & Warehouses</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pros as $key => $pro)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $pro->inventory->name }}</td>
                    <td>{{ $pro->inventory->price }}</td>
                    <td>{{ $pro->inventory->stock }}</td>
                    <td>{{ $pro->discount }}%</td>
                    <td>{{ $pro->vat }}%</td>
                    <td>
                        <strong>Categories:</strong> {{ $pro->category->name }} <br>
                        <strong> Brands:</strong> {{ $pro->brand->name }} <br>
                        <strong> Warehouses:</strong> {{ $pro->warehouse->name }}

                    </td>
                    <td>
                        @php
                            $image = $pro->images->first()?->photo; // PHP 8 null-safe
                        @endphp

                        @if($image)
                            <img src="{{ asset($image) }}" width="50" class="rounded">
                        @else
                            <span class="text-muted">No Image</span>
                        @endif
                    </td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></a>
                        <form action="" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
