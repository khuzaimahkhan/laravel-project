@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <div class="container py-5">
        <!-- Header -->
        <div class="text-center mb-5">
            <h1 class="fw-bold display-5 text-success">
                <i class="bi bi-basket2-fill me-2"></i>Secure Checkout
            </h1>
            <p class="text-muted fs-5">Complete your medicine order safely and quickly.</p>
        </div>

        <div class="row g-5">
            <!-- Left: Billing & Shipping Form -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4 text-success">
                            <i class="bi bi-person-circle me-2"></i>Billing Information
                        </h4>

                        <form>
                            <!-- Name -->
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">First Name</label>
                                    <input type="text" class="form-control" >
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Last Name</label>
                                    <input type="text" class="form-control" >
                                </div>
                            </div>

                            <!-- Contact -->
                            <div class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Email</label>
                                    <input type="email" class="form-control" >
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Phone</label>
                                    <input type="text" class="form-control" >
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="mt-3">
                                <label class="form-label fw-semibold">Address</label>
                                <input type="text" class="form-control" >
                            </div>

                            <div class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">City</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold">Country</label>
                                    <select class="form-select">
                                        <option selected>United States</option>
                                        <option>Pakistan</option>
                                        <option>Canada</option>
                                        <option>UK</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label fw-semibold">Zip</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <!-- Payment Info -->
                            <h4 class="fw-bold mt-5 mb-4 text-success">
                                <i class="bi bi-wallet2 me-2"></i>Payment Method
                            </h4>

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="payment" id="card" checked>
                                <label class="form-check-label" for="card">
                                    <i class="bi bi-credit-card-fill text-success me-1"></i> Credit / Debit Card
                                </label>
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="radio" name="payment" id="cod">
                                <label class="form-check-label" for="cod">
                                    <i class="bi bi-cash-coin text-success me-1"></i> Cash on Delivery
                                </label>
                            </div>

                            <!-- Card Details -->
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Card Number</label>
                                    <input type="text" class="form-control" placeholder="XXXX-XXXX-XXXX-1234">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label fw-semibold">Expiry</label>
                                    <input type="text" class="form-control" placeholder="MM/YY">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label fw-semibold">CVV</label>
                                    <input type="text" class="form-control" placeholder="123">
                                </div>
                            </div>

                            <!-- Place Order -->
                            <button type="submit" class="btn btn-success w-100 mt-4 py-2 fw-semibold rounded-pill shadow-sm">
                                <i class="bi bi-check2-circle me-2"></i>Place Order Securely
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right: Order Summary -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4 text-success">
                            <i class="bi bi-basket-fill me-2"></i>Order Summary
                        </h5>

                        @foreach ([
                            ['name' => 'Vitamin C Tablets', 'price' => 15, 'qty' => 2],
                            ['name' => 'Pain Relief Capsules', 'price' => 25, 'qty' => 1],
                        ] as $item)
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h6 class="mb-0 fw-semibold">{{ $item['name'] }}</h6>
                                    <small class="text-muted">Qty: {{ $item['qty'] }}</small>
                                </div>
                                <p class="mb-0 fw-bold text-success">${{ $item['price'] * $item['qty'] }}</p>
                            </div>
                        @endforeach

                        <hr>

                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted"><i class="bi bi-bag-check me-1"></i>Subtotal</span>
                            <span class="fw-semibold">$55</span>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted"><i class="bi bi-truck me-1"></i>Shipping</span>
                            <span class="fw-semibold">$5</span>
                        </div>

                        <div class="d-flex justify-content-between border-top pt-3 mt-3">
                            <span class="fw-bold fs-5"><i class="bi bi-cash me-2"></i>Total</span>
                            <span class="fw-bold fs-5 text-success">$60</span>
                        </div>

                        <div class="alert alert-light border mt-4 small text-muted" role="alert">
                            <i class="bi bi-shield-lock-fill text-success me-1"></i>
                            Your payment information is encrypted and secure.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
