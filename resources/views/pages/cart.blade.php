@extends('layouts.app')

@section('title', 'Your Cart')

@section('content')
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <div class="container py-5">
        <!-- Header -->
        <div class="text-center mb-5">
            <h1 class="fw-bold display-5 text-success"><i class="bi bi-cart-check-fill me-2"></i>Your Shopping Cart</h1>
            <p class="text-muted fs-5">Review your medicines and proceed to checkout.</p>
        </div>

        <!-- Cart Items -->
        <div class="row g-4">
            <!-- Left: Cart Items -->
            <div class="col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        @foreach ([
                            ['name' => 'Paracetamol 500mg', 'price' => 5, 'qty' => 2, 'img' => 'https://images.unsplash.com/photo-1588776814546-fffa0a0d9f49'],
                            ['name' => 'Vitamin C 1000mg', 'price' => 10, 'qty' => 1, 'img' => 'https://images.unsplash.com/photo-1618005198919-1b1fbd87c2a8'],
                        ] as $item)
                            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between border-bottom py-3">
                                <!-- Product Info -->
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{ $item['img'] }}" alt="{{ $item['name'] }}" class="rounded shadow-sm" width="80" height="80" style="object-fit: cover;">
                                    <div>
                                        <h5 class="fw-semibold mb-1 text-dark">{{ $item['name'] }}</h5>
                                        <p class="text-muted small mb-0"><i class="bi bi-tag me-1"></i>${{ $item['price'] }}</p>
                                    </div>
                                </div>

                                <!-- Quantity & Price -->
                                <div class="d-flex align-items-center gap-3 mt-3 mt-md-0">
                                    <div class="input-group" style="width: 130px;">
                                        <button class="btn btn-outline-success btn-sm" type="button" onclick="decrement(this)">
                                            <i class="bi bi-dash-lg"></i>
                                        </button>
                                        <input type="text" class="form-control text-center fw-semibold" value="{{ $item['qty'] }}" readonly>
                                        <button class="btn btn-outline-success btn-sm" type="button" onclick="increment(this)">
                                            <i class="bi bi-plus-lg"></i>
                                        </button>
                                    </div>
                                    <p class="fw-bold text-success mb-0">$<span class="item-total">{{ $item['price'] * $item['qty'] }}</span></p>
                                    <button class="btn btn-outline-danger btn-sm" title="Remove Item">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Right: Summary -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3"><i class="bi bi-receipt me-2"></i>Order Summary</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted"><i class="bi bi-bag-check me-1"></i>Subtotal</span>
                            <span class="fw-semibold">$20</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted"><i class="bi bi-truck me-1"></i>Shipping</span>
                            <span class="fw-semibold">$5</span>
                        </div>
                        <div class="border-top pt-3 mt-3 d-flex justify-content-between align-items-center">
                            <span class="fw-bold fs-5"><i class="bi bi-cash-coin me-2"></i>Total</span>
                            <span class="fw-bold fs-5 text-success">$25</span>
                        </div>
                        <a href="{{ route('checkout') }}" class="btn btn-success w-100 rounded-pill mt-4 py-2 fw-semibold shadow-sm">
                            <i class="bi bi-credit-card-fill me-2"></i>Proceed to Checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS for Quantity Buttons -->
    <script>
        function increment(btn) {
            const input = btn.previousElementSibling;
            let val = parseInt(input.value);
            if (val < 10) input.value = val + 1;
            updateTotal(btn);
        }

        function decrement(btn) {
            const input = btn.nextElementSibling;
            let val = parseInt(input.value);
            if (val > 1) input.value = val - 1;
            updateTotal(btn);
        }

        function updateTotal(btn) {
            const itemRow = btn.closest(".d-flex");
            const qty = parseInt(itemRow.querySelector("input").value);
            const price = parseFloat(itemRow.querySelector(".text-muted").textContent.replace("$", ""));
            const totalEl = itemRow.querySelector(".item-total");
            totalEl.textContent = (price * qty).toFixed(2);
        }
    </script>
@endsection
