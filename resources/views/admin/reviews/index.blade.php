@extends('admin.layouts.app')


@section('content')
<div class="container mt-4">
    <h2 class="mb-3">All Reviews</h2>

    <table id="comonTable" >
        <thead >
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Rating</th>
                <th>Comments</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $key => $review)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $review->product->inventory->name }}</td>
                    <td>{{ $review->rating }}</td>
                    <td>{{ $review->comment }}</td>
                    
                    <td>
                        <a href="" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></a>
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

