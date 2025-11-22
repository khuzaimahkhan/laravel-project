<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg shadow-sm sticky-top" style="background: #0a0a0a;">
    <div class="container py-2">
        <!-- Brand -->
        <a class="navbar-brand fw-bold fs-4 text-neon" href="{{ route('home') }}">
            CyberPharm
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Content -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Nav Links -->
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item mx-2">
                    <a class="nav-link fw-semibold text-neon" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fw-semibold text-neon" href="{{ route('products') }}">Products</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fw-semibold position-relative text-neon" href="{{ route('cart.index') }}">
                        Cart
                        @php
                            $cartCount = session('cart') ? count(session('cart')) : 0;
                        @endphp
                        @if($cartCount > 0)
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{ $cartCount }}
            </span>
                        @endif
                    </a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link fw-semibold text-neon" href="{{ route('checkout') }}">Checkout</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fw-semibold text-neon" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>

            <!-- Search Bar -->
            <form class="d-flex ms-lg-4 mt-3 mt-lg-0" role="search">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Search medicines..." aria-label="Search">
                    <button class="btn btn-neon" type="submit">Search</button>
                </div>
            </form>

            <!-- Auth Buttons -->
            <div class="d-flex ms-lg-4 mt-3 mt-lg-0">
                <a href="{{ route('login') }}" class="btn btn-outline-neon me-2">Login</a>
                <a href="{{ route('signup') }}" class="btn btn-neon">Signup</a>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Neon green color */
    .text-neon {
        color: #39ff14 !important;
        text-shadow: 0 0 5px #39ff14, 0 0 10px #39ff14, 0 0 20px #39ff14;
    }

    /* Navbar links hover */
    .navbar-nav .nav-link:hover {
        color: #39ff14 !important;
        text-shadow: 0 0 5px #39ff14, 0 0 10px #39ff14;
        transform: translateY(-2px);
    }

    /* Neon buttons */
    .btn-neon {
        background-color: #39ff14;
        color: #0a0a0a;
        font-weight: 600;
        border: none;
        box-shadow: 0 0 5px #39ff14, 0 0 10px #39ff14 inset;
        transition: all 0.2s ease;
    }

    .btn-neon:hover {
        background-color: #0a0a0a;
        color: #39ff14;
        box-shadow: 0 0 15px #39ff14, 0 0 25px #39ff14 inset;
    }

    .btn-outline-neon {
        color: #39ff14;
        border: 1px solid #39ff14;
        font-weight: 600;
        transition: all 0.2s ease;
    }

    .btn-outline-neon:hover {
        background-color: #39ff14;
        color: #0a0a0a;
    }

    /* Navbar neon glow */
    nav.navbar {
        box-shadow: 0 0 10px #39ff14, 0 0 20px #39ff14 inset;
    }
</style>
