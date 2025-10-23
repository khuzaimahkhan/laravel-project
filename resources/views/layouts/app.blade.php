<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel Shop')</title>

    <!-- ✅ Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* ✅ Background section (only visible on home page) */
        .hero-section {
            background: url('https://images5.alphacoders.com/135/1351189.png') no-repeat center center;
            background-size: cover;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            color: white;
            text-align: center;
        }

        /* Dark overlay for readability */
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        /* Centered content inside hero */
        .hero-content {
            position: relative;
            z-index: 2;
        }

        .search-bar {
            max-width: 500px;
            margin: 0 auto;
        }

        .search-bar input {
            border-radius: 50px 0 0 50px;
            border: none;
            padding: 12px 20px;
        }

        .search-bar button {
            border-radius: 0 50px 50px 0;
            border: none;
            padding: 12px 25px;
        }
    </style>
</head>
<body>
<!-- ✅ Navbar -->
@include('components.navbar')





<!-- ✅ Page Content -->
<div class="container mt-4">
    @yield('content')
</div>

<!-- ✅ Footer -->
@include('components.footer')

<!-- ✅ Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
