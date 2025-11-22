@extends('layouts.app')

@section('title', 'Our Products')

@section('content')
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold text-success"><i class="bi bi-capsule-pill me-2"></i>Our Medicines</h1>
            <p class="text-muted">Browse and order your medicines online.</p>
        </div>

        <div class="row justify-content-center">
            @foreach ($products as $product)
                <div class="col-md-3 mb-4">
                    <div class="card shadow-sm border-0">
                        <img src="{{ asset('storage/' . $product['img']) }}"
                             class="card-img-top"
                             alt="{{ $product['name'] }}"
                             style="height: 200px; object-fit: cover;">

                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">{{ $product['name'] }}</h5>
                            <p class="card-text text-success fw-bold">${{ $product['price'] }}</p>

                            <a href="{{ route('productdet', ['id' => $product['id']]) }}" class="btn btn-outline-success btn-sm">
                                View Details
                            </a>

                            <form action="{{ route('cart.add', $product['id']) }}" method="GET" class="mt-2">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="btn btn-success btn-sm">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
