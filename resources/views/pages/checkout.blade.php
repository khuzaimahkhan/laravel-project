@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold text-success"><i class="bi bi-credit-card-fill me-2"></i>Checkout</h1>
            <p class="text-muted">Review your order before confirming your purchase.</p>
        </div>

        @if(empty($cart) || count($cart) === 0)
            <div class="alert alert-warning">Your cart is empty! <a href="{{ route('products') }}">Shop now</a></div>
        @else
            @php
                $subtotal = 0;
                foreach($cart as $item) {
                    $subtotal += $item['price'] * $item['quantity'];
                }
                $shipping = $subtotal > 0 ? 5 : 0; // Flat $5 shipping
                $total = $subtotal + $shipping;
            @endphp

            <div class="row g-4">
                <!-- Left: Cart Summary -->
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3 text-success">Your Items</h5>
                            @foreach ($cart as $item)
                                <div class="d-flex justify-content-between align-items-center border-bottom py-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}"
                                             class="rounded shadow-sm" width="70" height="70" style="object-fit: cover;">
                                        <div>
                                            <h6 class="fw-semibold mb-1">{{ $item['name'] }}</h6>
                                            <p class="text-muted small mb-0">Qty: {{ $item['quantity'] }}</p>
                                        </div>
                                    </div>
                                    <p class="fw-bold text-success mb-0">
                                        ${{ number_format($item['price'] * $item['quantity'], 2) }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Right: Payment Summary -->
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-bold text-success mb-3">Order Summary</h5>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Subtotal</span>
                                <span class="fw-semibold">${{ number_format($subtotal, 2) }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Shipping</span>
                                <span class="fw-semibold">${{ number_format($shipping, 2) }}</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold fs-5">Total</span>
                                <span class="fw-bold fs-5 text-success">${{ number_format($total, 2) }}</span>
                            </div>

                            <form action="{{ route('checkout.confirm') }}" method="POST" class="mt-4">
                                @csrf
                                <button type="submit" class="btn btn-success w-100 rounded-pill py-2 fw-semibold shadow-sm">
                                    <i class="bi bi-check-circle me-2"></i>Confirm Purchase
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
