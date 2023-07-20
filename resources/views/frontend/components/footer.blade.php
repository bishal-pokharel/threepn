    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-secondary p-5">
        <div class="row g-5">
            <div class="col-12 text-center">
                <h1 class="display-5 mb-4">Stay Update!!!</h1>
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-secondary p-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <!-- <h3 class="text-white mb-4">ThreePN Education</h3> -->
                <img class="footer_logo" src="{{ asset('assets/images/3pn.png')}}" alt="footer-logo" />
                <div class="d-flex flex-column justify-content-start">
                    <p>Trust Threepn Consultancy to make your study abroad dreams a reality in the land of the rising sun.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Popular Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="{{route('home')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-secondary mb-2" href="{{route('about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-secondary mb-2" href="{{route('services')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                    <a class="text-secondary" href="{{route('contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2"><a target="_blank" href="https://goo.gl/maps/ZRiZ9mGzSMKGYH2m6"><i class="bi bi-geo-alt text-primary me-2"></i>Jamal, Kathmandu</a></p>
                <p class="mb-2"><a target="_blank" href="mailto:threepneducation2017@gmail.com"><i class="bi bi-envelope-open text-primary me-2"></i>threepneducation2017@gmail.com</a></p>
                <p class="mb-0"><a target="_blank" href="tel:+977 9851240579"><i class="bi bi-telephone text-primary me-2"></i>+977 9851240579</a></p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Follow Us</h3>
                <div class="d-flex">
                    <a target="_blank" class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://twitter.com/threepn"><i class="fab fa-twitter fw-normal"></i></a>
                    <a target="_blank" class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://facebook.com/threepn"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a target="_blank" class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://linkedin.com/company/threepn"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a target="_blank" class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="https://instagram.com/threepn"><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-secondary text-center border-top py-4 px-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="m-0">&copy; <a class="text-secondary border-bottom" href="{{route('home')}}">ThreePN Education</a> {{date('Y')}}. All Rights Reserved.</p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

