<div>
    <!-- Topbar Start -->
    <div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">                    
                    <a target="_blank" class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="https://twitter.com/threepn"><i class="fab fa-twitter fw-normal"></i></a>
                    <a target="_blank" class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="https://facebook.com/threepn"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a target="_blank" class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="https://linkedin.com/company/threepn"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a target="_blank" class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="https://instagram.com/threepn"><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><a style="color: white" target="_blank" href="mailto:threepneducation2017@gmail.com"><i class="fa fa-envelope-open me-2"></i>threepneducation2017@gmail</a></p>
                    </div>
                    <div class="py-2">
                        <p class="mb-0"><a style="color: white" target="_blank" href="tel:+977 9851240579"><i class="bi bi-telephone text-primary me-2"></i>+977 9851240579</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="{{route('home')}}" class="navbar-brand p-0">
            <!-- <h1 class="m-0 text-uppercase text-primary"><i class="far fa-smile text-primary me-2"></i>consult</h1> -->
            <img class="logo_img" src="{{ asset('assets/images/3pn.png')}}" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 me-n3">
                <a href="{{route('home')}}" class="nav-item nav-link {{(Request::routeIs('home'))?'active': ''}}">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link {{(Request::routeIs('about'))?'active': ''}}">About</a>
                <a href="{{route('services')}}" class="nav-item nav-link {{(Request::routeIs('services'))?'active': ''}}">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="quote.html" class="dropdown-item">Quote Form</a>
                        <a href="team.html" class="dropdown-item">The Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="{{route('contact')}}" class="nav-item nav-link {{(Request::routeIs('contact'))?'active': ''}}">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
</div>