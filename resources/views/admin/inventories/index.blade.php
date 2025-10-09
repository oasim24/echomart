@extends('admin.layouts.app')


@section('content')
<div class="container mt-4">
    <h2 class="mb-3">All Inventories </h2>

<div class="container mt-4">
    <form 
        action="{{ isset($invent) ? route('inventories.update', $invent->id) : route('inventories.store') }}" 
        method="POST" 
        enctype="multipart/form-data"
    >
        @csrf
        @if(isset($invent))
            @method('PUT')
        @endif

        <table class="table table-bordered align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th width="15%">Select Warehouse</th>
                    <th width="15%">Product Name</th>
                    <th width="15%">Product Price</th>
                    <th width="20%">Product Stock</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                       <select name="warehouse_id" class="form-control">
    @foreach($houses as $house)
        <option value="{{ $house->id }}"
            {{ (isset($invent) && $invent->warehouse_id == $house->id) ? 'selected' : '' }}>
            {{ $house->name }}
        </option>
    @endforeach
</select>
                    </td>
                    <td>
                        <input 
                            type="text" 
                            name="name" 
                            class="form-control" 
                            value="{{ old('name', $invent->name ?? '') }}" 
                            placeholder="Enter Product name"
                        >
                    </td>
                    <td>
                        <input 
                            type="text" 
                            name="price" 
                            class="form-control" 
                            value="{{ old('price', $invent->price ?? '') }}" 
                            placeholder="Enter Product price"
                        >
                    </td>
                    <td>
                        <input 
                            type="text" 
                            name="stock" 
                            class="form-control" 
                            value="{{ old('stock', $invent->stock ?? '') }}" 
                            placeholder="Enter Prodcut stock"
                        >
                    </td>
                   
                    <td class="text-center">
                        <button type="submit" class="btn btn-primary w-100">
                            {{ isset($invent) ? 'Update' : 'Save' }}
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>




    <table id="comonTable" >
        <thead >
            <tr>
                <th>#</th>
                <th>Warehouse Name</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invents as $key => $invent)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $invent->warehouse->name }}</td>
                    <td>{{ $invent->name }}</td>
                    <td> {{ $invent->price }} </td>
                    <td> {{ $invent->stock }} </td>
                    
                    <td>
                        <a href="{{route('inventories.edit', $invent->id)}}" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></a>
                        <form action="" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

