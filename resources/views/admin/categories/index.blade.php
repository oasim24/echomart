@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">All Categories</h2>
    <div class="container mt-4">
    <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data"   class="row g-3">
        @csrf
        <div class="col-md-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter category name">
        </div>

        <div class="col-md-3">
            <label class="form-label">Parent Category</label>
            <select name="parent_id" class="form-select">
                <option value="">Select Category</option>
                @foreach($cats as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <label class="form-label">Picture(optional)</label>
            <input type="file" name="photo" class="form-control">
        </div>
        <div class="col-md-3 d-flex align-items-end">
            <button type="submit" class="btn btn-primary w-100">Save</button>
        </div>
    </form>
</div>

<div class="table-responsive">
    <table id="comonTable" class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Parent Category</th>
                <th>Sub Categories</th>
                <th>Child Categories</th>
                <th>Parent Image</th>
                <th>Sub Image</th>
                <th>Child Image</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($cats->where('parent_id', null) as $key => $parent)
                <tr>
                    <td>{{ $key + 1 }}</td>

                    {{-- ✅ Parent Category --}}
                    <td>
                        <strong>{{ $parent->name }}</strong>
                        <div class="mt-2">
                            <a href="{{ route('categories.edit', $parent->id) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('categories.destroy', $parent->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this parent category?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>

                    {{-- ✅ Sub Categories --}}
                    <td>
                        @php
                            $subs = $cats->where('parent_id', $parent->id);
                        @endphp
                        @if($subs->count() > 0)
                            <ul class="mb-0 list-unstyled">
                                @foreach($subs as $sub)
                                    <li class="mb-1">
                                        {{ $sub->name }}
                                        <a href="{{ route('categories.edit', $sub->id) }}" class="text-primary ms-1">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('categories.destroy', $sub->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-link text-danger p-0 m-0" onclick="return confirm('Delete this subcategory?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <span class="text-muted">None</span>
                        @endif
                    </td>

                    {{-- ✅ Child Categories --}}
                    <td>
                        @php
                            $childs = collect();
                            foreach($subs as $sub){
                                $childs = $childs->merge($cats->where('parent_id', $sub->id));
                            }
                        @endphp
                        @if($childs->count() > 0)
                            <ul class="mb-0 list-unstyled">
                                @foreach($childs as $child)
                                    <li class="mb-1">
                                        {{ $child->name }}
                                        <a href="{{ route('categories.edit', $child->id) }}" class="text-primary ms-1">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('categories.destroy', $child->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-link text-danger p-0 m-0" onclick="return confirm('Delete this child category?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <span class="text-muted">None</span>
                        @endif
                    </td>

                    {{-- ✅ Parent Image --}}
                    <td>
                        @if($parent->photo)
                            <img src="{{ asset('storage/' . $parent->photo) }}" width="50" class="rounded">
                        @else
                            <span class="text-muted">No Image</span>
                        @endif
                    </td>

                    {{-- ✅ Sub Category Images --}}
                    <td>
                        @if($subs->count() > 0)
                            <ul class="mb-0 list-unstyled">
                                @foreach($subs as $sub)
                                    <li class="mb-1">
                                        @if($sub->photo)
                                            <img src="{{ asset('storage/' . $sub->photo) }}" width="40" class="rounded">
                                        @else
                                            <small class="text-muted">None</small>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <span class="text-muted">None</span>
                        @endif
                    </td>

                    {{-- ✅ Child Category Images --}}
                    <td>
                        @if($childs->count() > 0)
                            <ul class="mb-0 list-unstyled">
                                @foreach($childs as $child)
                                    <li class="mb-1">
                                        @if($child->photo)
                                            <img src="{{ asset('storage/' . $child->photo) }}" width="40" class="rounded">
                                        @else
                                            <small class="text-muted">None</small>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <span class="text-muted">None</span>
                        @endif
                    </td>

                    {{-- ✅ Actions --}}
                    <td>
                        <a href="{{ route('categories.edit', $parent->id) }}" class="btn btn-sm btn-info">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <form action="{{ route('categories.destroy', $parent->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this parent category?')">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
@endsection
