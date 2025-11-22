@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    @php
        // First 4 items → Top Selling
        $topSelling = $products->take(4);

        // Remaining items → New Arrivals
        $newArrivals = $products->skip(4);
    @endphp

        <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center justify-content-center text-center text-white position-relative w-100"
             style="background: url('{{ asset('images/medicine.jpg') }}') center/cover no-repeat; height: 100vh; margin: 0;">
        <div class="bg-dark bg-opacity-50 position-absolute top-0 start-0 w-100 h-100"></div>

        <div class="position-relative z-2 px-3">
            <h1 class="display-3 fw-bold mb-3">Your Trusted Online Pharmacy</h1>
            <p class="lead mb-4">Get authentic medicines delivered safely to your doorstep.</p>
            <a href="{{ route('products') }}" class="btn btn-warning btn-lg rounded-pill shadow px-4">
                <i class="bi bi-bag me-2"></i> Shop Medicines
            </a>
        </div>
    </section>

    <!-- Top Selling Medicines -->
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-success">🔥 Top Selling Medicines</h2>
            <p class="text-muted">Our most trusted and best-performing medicines this month.</p>
        </div>

        <div class="row g-4">
            @foreach($topSelling as $item)
                <div class="col-6 col-md-3">
                    <div class="card border-0 shadow-sm h-100 hover-card">
                        <img src="{{ $item->img ? asset('storage/' . $item->img) : '' }}"
                             class="card-img-top" alt="{{ $item->name }}"
                             style="height: 230px; object-fit: cover;">

                        <div class="card-body text-center">
                            <h6 class="fw-bold mb-1">{{ $item->name }}</h6>
                            <p class="text-success fw-semibold mb-2">${{ $item->price }}</p>
                            <a href="{{ route('productdet', ['id' => $item->id]) }}"
                               class="btn btn-outline-success btn-sm rounded-pill">
                                <i class="bi bi-eye me-1"></i> View
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <!-- New Arrivals Section -->
    <div class="container pb-5">
        <div class="text-center mb-5 mt-4">
            <h2 class="fw-bold text-success">✨ New Arrivals</h2>
            <p class="text-muted">Fresh stock recently added. Check them out!</p>
        </div>

        <div class="row g-4">
            @foreach($newArrivals as $item)
                <div class="col-6 col-md-3">
                    <div class="card border-0 shadow-sm h-100 hover-card">
                        <img src="{{ $item->img ? asset('uploads/' . $item->img) : '' }}"
                             class="card-img-top" alt="{{ $item->name }}"
                             style="height: 230px; object-fit: cover;">

                        <div class="card-body text-center">
                            <h6 class="fw-bold mb-1">{{ $item->name }}</h6>
                            <p class="text-success fw-semibold mb-2">${{ $item->price }}</p>
                            <a href="{{ route('productdet', ['id' => $item->id]) }}"
                               class="btn btn-outline-success btn-sm rounded-pill">
                                <i class="bi bi-eye me-1"></i> View
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <style>
        .hover-card { transition: all 0.3s ease-in-out; }
        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        }
    </style>

@endsection
