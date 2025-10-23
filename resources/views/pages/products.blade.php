@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="container py-5">
        <!-- Header -->
        <div class="text-center mb-5">
            <h1 class="fw-bold display-5 text-success">Our Medicine Catalog</h1>
            <p class="text-muted fs-5">Browse through a wide range of medicines and health products.</p>
        </div>

        <!-- Product Grid -->
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
            @foreach ([
      ['name' => 'Paracetamol 500mg', 'price' => '$5', 'img' => asset('images/paracetmol.jpg'), 'desc' => 'Relieves pain and reduces fever.'],
      ['name' => 'Amoxicillin 250mg', 'price' => '$12', 'img' => asset('images/amoxicillin.jpg'), 'desc' => 'Antibiotic for bacterial infections.'],
      ['name' => 'Vitamin C 1000mg', 'price' => '$8', 'img' => asset('images/vitamin c.jpg'), 'desc' => 'Boosts immunity and overall health.'],
      ['name' => 'Ibuprofen 400mg', 'price' => '$6', 'img' => asset('images/ibrupofen.jpg'), 'desc' => 'Relieves pain, inflammation, and fever.'],

  ] as $product)

            <div class="col">
                    <div class="card h-100 border-0 shadow-sm bg-light">
                        <img src="{{ $product['img'] }}" class="card-img-top rounded-top" alt="{{ $product['name'] }}">
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title fw-semibold text-dark">{{ $product['name'] }}</h5>
                                <p class="card-text text-muted small">{{ $product['desc'] }}</p>
                            </div>
                            <div class="mt-2">
                                <p class="fw-bold text-success mb-2">{{ $product['price'] }}</p>
                                <a href="{{ route('productdet') }}" class="btn btn-outline-success btn-sm px-3 rounded-pill">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Footer Section -->
        <div class="text-center mt-5">
            <button class="btn btn-success rounded-pill px-4 py-2 shadow-sm">Load More</button>
        </div>
    </div>
@endsection
