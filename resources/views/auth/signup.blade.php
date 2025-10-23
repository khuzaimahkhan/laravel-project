@extends('layouts.app')

@section('title', 'Sign Up')

@section('content')
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Centered Register Section -->
    <div class="d-flex align-items-center justify-content-center min-vh-100 bg-light">

        <!-- Register Card -->
        <div class="card border-0 shadow-lg rounded-4"
             style="max-width: 460px; width: 100%; background-color: #ffffff;">
            <div class="card-body p-5">
                <div class="text-center mb-4">
                    <div class="bg-success bg-opacity-10 d-inline-flex align-items-center justify-content-center rounded-circle mb-3"
                         style="width: 75px; height: 75px;">
                        <i class="bi bi-person-plus fs-1 text-success"></i>
                    </div>
                    <h3 class="fw-bold text-dark">Create Your Account</h3>
                    <p class="text-muted small">Join us to order medicines and health products online</p>
                </div>

                <form action="{{ route('signup') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold text-dark">
                            <i class="bi bi-person me-1 text-success"></i>Full Name
                        </label>
                        <input type="text" id="name" name="name" class="form-control rounded-pill shadow-sm"
                               placeholder="Enter your full name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold text-dark">
                            <i class="bi bi-envelope me-1 text-success"></i>Email Address
                        </label>
                        <input type="email" id="email" name="email" class="form-control rounded-pill shadow-sm"
                               placeholder="Enter your email" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold text-dark">
                            <i class="bi bi-lock me-1 text-success"></i>Password
                        </label>
                        <div class="input-group">
                            <input type="password" id="password" name="password"
                                   class="form-control rounded-start-pill shadow-sm" placeholder="Enter password" required>
                            <button type="button" class="btn btn-outline-secondary rounded-end-pill" id="togglePassword">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label fw-semibold text-dark">
                            <i class="bi bi-shield-lock me-1 text-success"></i>Confirm Password
                        </label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                               class="form-control rounded-pill shadow-sm" placeholder="Re-enter your password" required>
                    </div>

                    <button type="submit" class="btn btn-success w-100 rounded-pill py-2 shadow-sm fw-semibold">
                        <i class="bi bi-person-check me-2"></i> Sign Up
                    </button>
                </form>

                <div class="text-center mt-4">
                    <p class="small text-muted mb-0">Already have an account?
                        <a href="{{ route('login') }}" class="text-success fw-semibold text-decoration-none">Login</a>
                    </p>
                </div>

                <!-- Social Register -->
                <div class="mt-4 text-center">
                    <p class="text-muted small mb-2">Or sign up with</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-outline-danger rounded-circle"><i class="bi bi-google fs-5"></i></a>
                        <a href="#" class="btn btn-outline-primary rounded-circle"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="#" class="btn btn-outline-dark rounded-circle"><i class="bi bi-github fs-5"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Password Toggle Script -->
    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const passwordInput = document.querySelector("#password");
        togglePassword.addEventListener("click", function () {
            const type = passwordInput.type === "password" ? "text" : "password";
            passwordInput.type = type;
            this.querySelector("i").classList.toggle("bi-eye");
            this.querySelector("i").classList.toggle("bi-eye-slash");
        });
    </script>

    <style>
        input:focus {
            border-color: #198754 !important;
            box-shadow: 0 0 0 0.2rem rgba(25, 135, 84, 0.25) !important;
        }

        .btn-outline-secondary:hover {
            background-color: #198754;
            color: white;
        }

        .card {
            transition: all 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection
