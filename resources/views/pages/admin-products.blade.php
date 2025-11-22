@extends('layouts.app')

@section('title', 'Admin - All Products')

@section('content')
    <div class="container py-5">

        <!-- Header -->a
        <div class="text-center mb-5">
            <h1 class="fw-bold display-5 text-success">Admin - Products Management</h1>
            <p class="text-muted fs-5">Manage your products: add, edit, or delete from the collection.</p>
        </div>

        <!-- Add New Product Button -->
        <div class="mb-4 text-center">
            <a href="{{ route('admin.product.create') }}" class="btn btn-success btn-lg px-4">Add New Product</a>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        <!-- Product Grid -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            @forelse ($products as $product)
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm bg-light overflow-hidden hover-zoom">
                        <div class="position-relative">
                            <img src="{{ $product->img ? asset('storage/'.$product->img) : '' }}"
                                 class="card-img-top rounded-top"
                                 alt="{{ $product->name }}"
                                 style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title fw-semibold text-dark">{{ $product->name }}</h5>
                                <p class="card-text text-muted small">{{ $product->desc }}</p>
                            </div>
                            <div class="mt-2">
                                <p class="fw-bold text-success mb-2">${{ $product->price }}</p>

                                <!-- Admin Actions -->
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning btn-sm px-3 rounded-pill">
                                        <i class="bi bi-pencil-square me-1"></i> Edit
                                    </a>

                                    <form action="{{ route('admin.product.delete', $product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm px-3 rounded-pill" onclick="return confirm('Are you sure you want to delete this product?')">
                                            <i class="bi bi-trash me-1"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-muted">No products found!</p>
            @endforelse
        </div>
    </div>

    <style>
        .hover-zoom img {
            transition: transform 0.4s ease;
        }
        .hover-zoom:hover img {
            transform: scale(1.05);
        }
    </style>
@endsection
