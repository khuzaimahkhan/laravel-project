@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <div class="container py-5">
        <div class="row g-5 align-items-center">

            {{-- Image Section --}}
            <div class="col-md-5 text-center">
                <img src="{{ asset('storage/' . $product->img) }}"
                     alt="{{ $product->name }}"
                     class="img-fluid rounded shadow-sm"
                     style="max-height: 400px; object-fit: cover;">
            </div>

            {{-- Product Info --}}
            <div class="col-md-7">
                <h2 class="fw-bold text-success mb-3">{{ $product->name }}</h2>

                <p class="text-muted mb-3">
                    <i class="bi bi-tag me-1"></i>Price:
                    <span class="fw-semibold">${{ $product->price }}</span>
                </p>

                <p class="text-muted small mb-4">{{ $product->desc }}</p>

                {{-- Quantity + Add to Cart --}}
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="input-group" style="width: 130px;">
                        <button class="btn btn-outline-success" type="button" id="decrement">−</button>
                        <input type="text" id="quantity" class="form-control text-center" value="1" readonly>
                        <button class="btn btn-outline-success" type="button" id="increment">+</button>
                    </div>

                    <a id="addToCartBtn" href="{{ route('cart.add', $product->id) }}"
                       class="btn btn-success rounded-pill px-4">
                        <i class="bi bi-cart-plus me-2"></i>Add to Cart
                    </a>
                </div>

                {{-- Highlights (from 1st code) --}}
                <div class="mt-4">
                    <h5 class="fw-bold mb-2">Product Highlights</h5>
                    <ul class="list-unstyled text-muted small">
                        <li>✔️ 100% Authentic & Approved Formula</li>
                        <li>✔️ Fast and Effective Relief</li>
                        <li>✔️ Clinically Tested for Safety</li>
                        <li>✔️ Recommended by Healthcare Professionals</li>
                        <li>✔️ No Known Side Effects When Used as Directed</li>
                        <li>✔️ Suitable for Daily Use</li>

                    </ul>
                </div>
            </div>
        </div>

        {{-- Reviews (from 1st code) --}}
        <div class="mt-5">
            <h4 class="fw-bold text-success mb-4">Customer Reviews</h4>

            @php
                $reviews = [
     ['user' => 'Ali', 'rating' => 5, 'review' => 'Very effective medicine. I started feeling better within a couple of days. Highly recommended!'],
    ['user' => 'Hassan', 'rating' => 4, 'review' => 'Good quality and the product was delivered on time. It really helped reduce my symptoms.'],
    ['user' => 'Zubair', 'rating' => 5, 'review' => 'This medicine worked perfectly for me. My doctor also recommended it and it’s definitely genuine.']
];
            @endphp

            @foreach ($reviews as $review)
                <div class="card border-0 shadow-sm mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6 class="fw-semibold mb-1">{{ $review['user'] }}</h6>
                            <small class="text-muted">
                                {{ str_repeat('⭐', $review['rating']) }}{{ str_repeat('☆', 5 - $review['rating']) }}
                            </small>
                        </div>
                        <p class="text-muted small mb-0">{{ $review['review'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const quantityInput = document.getElementById('quantity');
            const increment = document.getElementById('increment');
            const decrement = document.getElementById('decrement');
            const addToCartBtn = document.getElementById('addToCartBtn');
            const baseUrl = "{{ route('cart.add', $product->id) }}";

            increment.addEventListener('click', () => {
                quantityInput.value = parseInt(quantityInput.value) + 1;
                addToCartBtn.href = `${baseUrl}?quantity=${quantityInput.value}`;
            });

            decrement.addEventListener('click', () => {
                if (parseInt(quantityInput.value) > 1) {
                    quantityInput.value = parseInt(quantityInput.value) - 1;
                    addToCartBtn.href = `${baseUrl}?quantity=${quantityInput.value}`;
                }
            });
        });
    </script>

@endsection
