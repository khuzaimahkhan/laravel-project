@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
    <div class="container py-5">

        <!-- Product Detail Section -->
        <div class="row gy-4">
            <!-- Left: Product Image -->
            <div class="col-12 col-md-6 text-center">
                <div class="card shadow-sm border-0">
                    <img src="{{ asset('images/paracetmol.jpg') }}"
                         alt="Paracetamol 500mg" class="img-fluid rounded">
                </div>
            </div>

            <!-- Right: Product Info -->
            <div class="col-12 col-md-6">
                <h2 class="fw-bold text-success mb-3">Paracetamol 500mg</h2>
                <p class="text-muted mb-3">
                    Effective pain reliever and fever reducer. Suitable for headache, body pain, and cold/flu symptoms.
                </p>
                <h4 class="fw-bold text-dark mb-3">$5</h4>

                <!-- Quantity Selector -->
                <div class="d-flex align-items-center mb-3">
                    <label class="me-3 fw-semibold">Quantity:</label>
                    <div class="input-group" style="width:130px;">
                        <button class="btn btn-outline-success" type="button" id="decrement">-</button>
                        <input type="text" class="form-control text-center" id="quantity" value="1" readonly>
                        <button class="btn btn-outline-success" type="button" id="increment">+</button>
                    </div>
                </div>

                <!-- Add to Cart Button -->
                <div class="d-flex gap-3 mt-4">
                    <button class="btn btn-success px-4 py-2 rounded-pill shadow-sm">
                        <i class="bi bi-cart-plus"></i> Add to Cart
                    </button>
                    <button class="btn btn-outline-secondary px-4 py-2 rounded-pill">
                        <i class="bi bi-heart"></i> Add to Wishlist
                    </button>
                </div>

                <!-- Additional Info -->
                <div class="mt-5">
                    <h5 class="fw-bold mb-2">Product Highlights</h5>
                    <ul class="list-unstyled text-muted small">
                        <li>✔️ Relieves pain and reduces fever</li>
                        <li>✔️ Safe for adults and children above 12 years</li>
                        <li>✔️ 1-year shelf life</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Reviews Section -->
        <div class="mt-5">
            <h4 class="fw-bold text-success mb-4">Customer Reviews</h4>

            <!-- Review Form -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h6 class="fw-semibold mb-3">Leave a Review</h6>
                    <form>
                        <div class="mb-3">
                            <textarea class="form-control" rows="3" placeholder="Write your review here..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm rounded-pill px-4">Submit</button>
                    </form>
                </div>
            </div>

            <!-- Example Reviews -->
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="fw-semibold mb-1">Ali Khan</h6>
                        <small class="text-muted">⭐⭐⭐⭐☆</small>
                    </div>
                    <p class="text-muted small mb-0">Worked well for my headache. Quick relief!</p>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="fw-semibold mb-1">Sara Ahmed</h6>
                        <small class="text-muted">⭐⭐⭐⭐⭐</small>
                    </div>
                    <p class="text-muted small mb-0">Affordable and effective. Always keep it in my medicine cabinet.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quantity Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const quantityInput = document.getElementById('quantity');
            const increment = document.getElementById('increment');
            const decrement = document.getElementById('decrement');

            increment.addEventListener('click', () => {
                let value = parseInt(quantityInput.value);
                quantityInput.value = value + 1;
            });

            decrement.addEventListener('click', () => {
                let value = parseInt(quantityInput.value);
                if (value > 1) quantityInput.value = value - 1;
            });
        });
    </script>
@endsection
