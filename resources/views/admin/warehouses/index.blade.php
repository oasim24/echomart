@extends('admin.layouts.app')


@section('content')
<div class="container mt-4">
    <h2 class="mb-3">All Warehouse</h2>



<div class="container mt-4">
    <form 
        action="{{ isset($house) ? route('warehouses.update', $house->id) : route('warehouses.store') }}" 
        method="POST" 
        enctype="multipart/form-data"
    >
        @csrf
        @if(isset($house))
            @method('PUT')
        @endif

        <table class="table table-bordered align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th width="15%">Name</th>
                    <th width="15%">Phone</th>
                    <th width="15%">Email</th>
                    <th width="20%">Address</th>
                    <th width="15%">Picture</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input 
                            type="text" 
                            name="name" 
                            class="form-control" 
                            value="{{ old('name', $house->name ?? '') }}" 
                            placeholder="Enter Brand name"
                        >
                    </td>
                    <td>
                        <input 
                            type="text" 
                            name="phone" 
                            class="form-control" 
                            value="{{ old('phone', $house->phone ?? '') }}" 
                            placeholder="Enter Warehouse phone"
                        >
                    </td>
                    <td>
                        <input 
                            type="text" 
                            name="email" 
                            class="form-control" 
                            value="{{ old('email', $house->email ?? '') }}" 
                            placeholder="Enter Warehouse email"
                        >
                    </td>
                    <td>
                        <input 
                            type="text" 
                            name="address" 
                            class="form-control" 
                            value="{{ old('address', $house->address ?? '') }}" 
                            placeholder="Enter Warehouse address"
                        >
                    </td>
                    <td>
                        <input 
                            type="file" 
                            name="photo" 
                            class="form-control"
                        >
                    </td>
                    <td class="text-center">
                        <button type="submit" class="btn btn-primary w-100">
                            {{ isset($house) ? 'Update' : 'Save' }}
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
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
            
        </thead>
        <tbody>
            
            @foreach($houses as $key => $house)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $house->name }}</td>
                    <td> {{ $house->phone }}</td>
                    <td> {{ $house->email }}</td>
                    <td> {{ $house->address }}</td>
                    <td>
                        @if($house->photo)
                            <img src="{{ asset($house->photo) }}" width="50" class="rounded">
                        @else
                            <span class="text-muted">No Image</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('warehouses.edit', $house->id)}}" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{route('warehouses.destroy', $house->id)}}" method="POST" class="d-inline">
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

