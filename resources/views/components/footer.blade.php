<footer class="bg-black text-white pt-5 pb-3 mt-5">
    <div class="container">
        <div class="row gy-4">

            <!-- Brand Info -->
            <div class="col-12 col-md-4 text-center text-md-start">
                <a class="navbar-brand fw-bold fs-4 text-neon" href="{{ route('home') }}">
                    CyberPharm
                </a>
                <div class="d-flex gap-3 mt-3 justify-content-center justify-content-md-start">
                    <a href="#" class="fs-5" style="color: #39ff14;"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="fs-5" style="color: #39ff14;"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="fs-5" style="color: #39ff14;"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="fs-5" style="color: #39ff14;"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-6 col-md-2 text-center text-md-start">
                <h6 class="fw-bold mb-3 text-uppercase" style="color: #39ff14;">Quick Links</h6>
                <ul class="list-unstyled small">
                    <li><a href="/" class="text-decoration-none" style="color: #39ff14;">Home</a></li>
                    <li><a href="{{ route('products') }}" class="text-decoration-none" style="color: #39ff14;">Medicines</a></li>
                    <li><a href="#" class="text-decoration-none" style="color: #39ff14;">About Us</a></li>
                    <li><a href="#" class="text-decoration-none" style="color: #39ff14;">Contact</a></li>
                </ul>
            </div>

            <!-- Customer Service -->
            <div class="col-6 col-md-3 text-center text-md-start">
                <h6 class="fw-bold mb-3 text-uppercase" style="color: #39ff14;">Customer Care</h6>
                <ul class="list-unstyled small">
                    <li><a href="#" class="text-decoration-none" style="color: #39ff14;">Shipping Info</a></li>
                    <li><a href="#" class="text-decoration-none" style="color: #39ff14;">Returns & Refunds</a></li>
                    <li><a href="#" class="text-decoration-none" style="color: #39ff14;">FAQs</a></li>
                    <li><a href="#" class="text-decoration-none" style="color: #39ff14;">Support</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="col-12 col-md-3 text-center text-md-start">
                <h6 class="fw-bold mb-3 text-uppercase" style="color: #39ff14;">Stay Healthy</h6>
                <p class="small" style="color: #39ff14;">Subscribe to receive health tips, medicine updates & exclusive offers.</p>
                <form class="d-flex">
                    <input type="email" class="form-control form-control-sm rounded-start" placeholder="Enter your email">
                    <button class="btn btn-success btn-sm rounded-end" type="submit">Join</button>
                </form>
            </div>

        </div>

        <hr class="border-success mt-5 mb-3">

        <!-- Bottom Footer -->
        <div class="text-center small" style="color: #39ff14;">
            © {{ date('Y') }} <strong>CyberPharm</strong>. All Rights Reserved.
        </div>
    </div>
</footer>

<style>
    footer {
        background-color: #000000; /* black background for neon effect */
    }
    footer a:hover {
        color: #00ff00 !important; /* brighter neon green on hover */
    }
</style>
