@extends('layouts.app')

@section('title', 'Contact Us | CyberPharm')

@section('content')
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold text-success">Contact CyberPharm</h1>
            <p class="text-muted">Have questions? We're here to help you 24/7!</p>
        </div>

        <div class="row justify-content-center">
            <!-- Contact Info -->
            <div class="col-md-5 mb-4">
                <div class="card border-0 shadow-sm p-4">
                    <h5 class="fw-bold text-success mb-3">Get in Touch</h5>
                    <p class="text-success mb-2"><i class="bi bi-geo-alt-fill me-2"></i>DHA Phase 8, Karachi, Pakistan</p>
                    <p class="text-success mb-2"><i class="bi bi-envelope-fill me-2"></i>support@cyberpharm.com</p>
                    <p class="text-success"><i class="bi bi-telephone-fill me-2"></i>+92 323 3456769</p>

                    <hr class="border-success">

                    <h6 class="fw-bold text-success mb-2">Follow Us</h6>
                    <div>
                        <a href="#" class="fs-5 me-3 text-success"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="fs-5 me-3 text-success"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="fs-5 me-3 text-success"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="fs-5 text-success"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-7">
                <div class="card border-0 shadow-sm p-4">
                    <h5 class="fw-bold text-success mb-3">Send Us a Message</h5>

                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold text-success">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control rounded-pill border-success" placeholder="Enter your name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold text-success">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control rounded-pill border-success" placeholder="Enter your email" required>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label fw-semibold text-success">Message</label>
                            <textarea id="message" name="message" rows="4" class="form-control rounded-4 border-success" placeholder="Write your message..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-success w-100 rounded-pill py-2">
                            <i class="bi bi-send me-1"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        input:focus, textarea:focus {
            box-shadow: 0 0 5px rgba(25,135,84,0.4);
            border-color: #198754; /* product page green */
        }

        .border-success {
            border-color: #198754 !important;
        }

        .text-success {
            color: #198754 !important;
        }

        .btn-success {
            background-color: #198754;
            border-color: #198754;
        }

        .btn-success:hover {
            background-color: #145c37;
            border-color: #145c37;
        }

        .card {
            border-radius: 15px;
            background-color: #ffffff;
        }

        .text-muted {
            color: #6c757d !important;
        }
    </style>
@endsection
