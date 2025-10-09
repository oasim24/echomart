@extends('admin.layouts.app')


@section('content')

<div class="container mt-4">
    <h2>Add New Product</h2>

    <form action="{{route('products.store')}}" method="POST" class="row">
        @csrf

        <!-- Category -->
        <div class="mb-3 col-md-2">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-select" required>
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3 col-md-2">
            <label for="brand_id" class="form-label">Brand</label>
            <select name="brand_id" id="brand_id" class="form-select" required>
                <option value="">Select Brand</option>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
            @error('brand_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Warehouse -->
        <div class="mb-3 col-md-2">
            <label for="warehouse_id" class="form-label">Warehouse</label>
            <select name="warehouse_id" id="warehouse_id" class="form-select" required>
                <option value="">Select Warehouse</option>
                @foreach($warehouses as $warehouse)
                    <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                @endforeach
            </select>
            @error('warehouse_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Inventory -->
        <div class="mb-3 col-md-2">
            <label for="inventory_id" class="form-label">Inventory</label>
            <select name="inventory_id" id="inventory_id" class="form-select" required>
                <option value="">Select Inventory</option>
                @foreach($inventories as $inventory)
                    <option value="{{ $inventory->id }}">{{ $inventory->name ?? 'Inventory '.$inventory->id }}</option>
                @endforeach
            </select>
            @error('inventory_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Discount -->
        <div class="mb-3 col-md-2">
            <label for="discount" class="form-label">Discount (%)</label>
            <input type="number" name="discount" id="discount" class="form-control" value="0" min="0">
            @error('discount') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- VAT -->
        <div class="mb-3 col-md-2">
            <label for="vat" class="form-label">VAT (%)</label>
            <input type="number" name="vat" id="vat" class="form-control" value="0" min="0">
            @error('vat') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

       <!-- Short Description -->
<div class="mb-3 col-md-6">
    <label for="short_description" class="form-label">Short Description</label>
    <textarea name="short_description" id="short_description" class="form-control" rows="2"></textarea>
</div>

<!-- Long Description -->
<div class="mb-3 col-md-6">
    <label for="long_description" class="form-label">Long Description</label>
    <textarea name="long_description" id="long_description" class="form-control" rows="5"></textarea>
</div>


        <button type="submit" class="btn btn-primary">Save Product</button>
    </form>
</div>

@endsection
