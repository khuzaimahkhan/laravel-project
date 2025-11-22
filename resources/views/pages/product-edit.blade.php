@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Edit Product</h2>

        <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" class="form-control mb-3" value="{{ $product->name }}" required>
            <input type="text" name="price" class="form-control mb-3" value="{{ $product->price }}" required>
            <textarea name="desc" class="form-control mb-3" required>{{ $product->desc }}</textarea>

            @if($product->img)
                <p>Current Image:</p>
                <img src="{{ asset('storage/' . $product->img) }}" width="100">
            @endif

            <input type="file" name="img" class="form-control mb-3">
            <button class="btn btn-success">Update Product</button>
        </form>
    </div>
@endsection
