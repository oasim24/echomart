@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">All Brands</h2>

<div class="container mt-4">
    <form 
        action="{{ isset($brand) ? route('brands.update', $brand->id) : route('brands.store') }}" 
        method="POST" 
        enctype="multipart/form-data" 
        class="row g-3"
    >
        @csrf
        @if(isset($brand))
            @method('PUT')
        @endif

        <div class="col-md-3">
            <label class="form-label">Name</label>
            <input 
                type="text" 
                name="name" 
                class="form-control" 
                value="{{ old('name', $brand->name ?? '') }}" 
                placeholder="Enter Brand name"
            >
        </div>

        <div class="col-md-3">
            <label class="form-label">Picture</label>
            <input type="file" name="photo" class="form-control">
        </div>

        <div class="col-md-3 d-flex align-items-end">
            <button type="submit" class="btn btn-primary w-100">
                {{ isset($brand) ? 'Update' : 'Save' }}
            </button>
        </div>
    </form>
</div>




<div class="table-responsive">
    <table id="comonTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $key => $brand)
                <tr>
                    <td>{{ $key + 1 }}</td>

                   
                    <td>{{ $brand->name }}</td>

                   
                 
                    <td>
                        @if($brand->photo)
                            <img src="{{ asset($brand->photo) }}" width="50" class="rounded">
                        @else
                            <span class="text-muted">No Image</span>
                        @endif
                    </td>

                  
                    <td>
                        <a href="{{route('brands.edit', $brand->id)}}" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></a>

                        <form action="{{route('brands.destroy', $brand->id)}}" method="POST" class="d-inline">
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
</div>
@endsection
