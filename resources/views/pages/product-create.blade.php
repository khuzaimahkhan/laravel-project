@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Add New Product</h2>

        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="text" name="name" class="form-control mb-3" placeholder="Product Name">

            <input type="text" name="price" class="form-control mb-3" placeholder="Price">

            <textarea name="desc" class="form-control mb-3" placeholder="Description"></textarea>

            <input type="file" name="img" class="form-control mb-3">

            <button class="btn btn-success">Add Product</button>
        </form>
    </div>
@endsection
