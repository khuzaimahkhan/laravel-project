@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center justify-content-center text-center text-white position-relative w-100"
             style="background: url('{{ asset('images/medicine.jpg') }}') center/cover no-repeat; height: 100vh; margin: 0;">
        <!-- Dark overlay for readability -->
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
            @foreach ([
                ['name' => 'Paracetamol 500mg', 'price' => '$5', 'img' => asset('images/paracetmol.jpg')],
                ['name' => 'Amoxicillin 250mg', 'price' => '$12', 'img' => asset('images/amoxicillin.jpg')],
                ['name' => 'Vitamin C 1000mg', 'price' => '$8', 'img' => asset('images/vitamin c.jpg')],
                ['name' => 'Ibuprofen 400mg', 'price' => '$6', 'img' => asset('images/ibrupofen.jpg')],
            ] as $item)
                <div class="col-6 col-md-3">
                    <div class="card border-0 shadow-sm h-100 hover-card">
                        <img src="{{ $item['img'] }}" class="card-img-top" alt="{{ $item['name'] }}"
                             style="height: 230px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h6 class="fw-bold mb-1">{{ $item['name'] }}</h6>
                            <p class="text-success fw-semibold mb-2">{{ $item['price'] }}</p>
                            <a href="{{ route('productdet') }}" class="btn btn-outline-success btn-sm rounded-pill">
                                <i class="bi bi-eye me-1"></i> View
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .hover-card {
            transition: all 0.3s ease-in-out;
        }
        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        /* Remove any extra margins/paddings around hero */
        .hero-section {
            margin: 0;
            padding: 0;
        }
    </style>
@endsection
