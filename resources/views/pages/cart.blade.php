@extends('layouts.app')

@section('title', 'Your Cart')

@section('content')
    <div class="container py-5">
        <h1 class="fw-bold text-success mb-4"><i class="bi bi-cart-fill me-2"></i>Your Cart</h1>

        @if(empty($cart) || count($cart) === 0)
            <div class="alert alert-warning">Your cart is empty!</div>
        @else
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    @php $total = 0; @endphp

                    @foreach($cart as $item)
                        @php $total += $item['price'] * $item['quantity']; @endphp
                        <div class="d-flex justify-content-between align-items-center border-bottom py-3">
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{ asset($item['image']) }}" width="70" height="70" class="rounded shadow-sm" alt="{{ $item['name'] }}">
                                <div>
                                    <h6 class="fw-semibold mb-1">{{ $item['name'] }}</h6>
                                    <p class="text-muted small mb-0">${{ number_format($item['price'], 2) }}</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                <a href="{{ route('cart.decrease', $item['id']) }}" class="btn btn-outline-danger btn-sm">
                                    <i class="bi bi-dash-lg"></i>
                                </a>
                                <span class="fw-bold">{{ $item['quantity'] }}</span>
                                <a href="{{ route('cart.increase', $item['id']) }}" class="btn btn-outline-success btn-sm">
                                    <i class="bi bi-plus-lg"></i>
                                </a>
                            </div>

                            <p class="fw-bold mb-0 text-success">
                                ${{ number_format($item['price'] * $item['quantity'], 2) }}
                            </p>

                            <a href="{{ route('cart.remove', $item['id']) }}" class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </a>
                        </div>
                    @endforeach

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <h5 class="fw-bold text-dark">Total: ${{ number_format($total, 2) }}</h5>
                        <div class="d-flex gap-2">
                            <a href="{{ route('cart.clear') }}" class="btn btn-outline-danger">Clear Cart</a>
                            <a href="{{ route('checkout') }}" class="btn btn-success">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
