@extends('layouts.app')

@section('title', 'Thank You')

@section('content')
    <div class="container py-5 text-center">
        <div class="card border-0 shadow-sm p-5 mx-auto" style="max-width: 600px;">
            <i class="bi bi-check-circle-fill text-success display-3 mb-3"></i>
            <h2 class="fw-bold text-success mb-3">Thank You for Your Purchase!</h2>
            <p class="text-muted mb-4">Your order has been successfully placed. We’ll send you a confirmation email shortly.</p>
            <a href="{{ route('products') }}" class="btn btn-outline-success rounded-pill px-4">
                <i class="bi bi-shop me-2"></i>Continue Shopping
            </a>
        </div>
    </div>
@endsection
