@extends('frontend.layouts.app')
@section('title') Home @endsection
@section('styles') 
@endsection
@section('content') 
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('assets/images/carousel-1.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase">Education Consultancy</h5>
                        <h1 class="display-1 text-white mb-md-4">We Provide gateway for your career.</h1>
                        <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Get Quote</a> -->
                        <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/images/carousel-2.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase">Education Consultancy</h5>
                        <h1 class="display-1 text-white mb-md-4">Take Our Help To Reach The School in Japan</h1>
                        <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Get Quote</a> -->
                        <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid bg-secondary p-0">
    <div class="row g-0">
        <div class="col-lg-6 py-6 px-5">
            <h1 class="display-5 mb-4">Welcome To <span class="text-primary">ThreePN</span></h1>
            <h4 class="text-primary mb-4">Your gateway to fulfilling academic dreams in Japan.</h4>
            <p class="mb-4">As a leading consultancy specializing in student visa services, we are thrilled to have you join us. Our experienced team is dedicated to providing personalized guidance and support throughout your journey towards studying in Japan. Get ready to explore a vibrant culture, gain world-class education, and create unforgettable memories. Trust Threepn Consultancy to make your study abroad dreams a reality in the land of the rising sun.</p>
            <a href="{{route('about')}}" class="btn btn-primary py-md-3 px-md-5 rounded-pill">Learn More >></a>
        </div>
        <div class="col-lg-6">
            <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                <div class="d-flex text-white mb-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                        <i class="fa fa-user-tie fs-4"></i>
                    </div>
                    <div class="ps-4">
                        <h3>Enlightening Counselling</h3>
                        <p class="mb-0">Uncover your potential and chart a path to success with our expert guidance.</p>
                    </div>
                </div>
                <div class="d-flex text-white mb-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                        <!-- <i class="fa fa-chart-line fs-4"></i> -->
                        <i class="fa fa-language fs-4"></i>
                    </div>
                    <div class="ps-4">
                        <h3>Japanese Language Class</h3>
                        <p class="mb-0">Master the language of opportunity with our comprehensive Japanese language programs.</p>
                    </div>
                </div>
                <div class="d-flex text-white">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                        <!-- <i class="fa fa-balance-scale fs-4"></i> -->
                        <i class="fa fa-passport fs-4"></i>
                    </div>
                    <div class="ps-4">
                        <h3>Seamless Visa Processing</h3>
                        <p class="mb-0">Let us navigate the complexities of visa procedures, ensuring a hassle-free experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Services Start -->
<div class="container-fluid pt-6 px-5">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 mb-0">What We Offer</h1>
        <hr class="w-25 mx-auto bg-primary">
    </div>
    <div class="row g-5">
        <div class="col-lg-4 col-md-6">
            <div class="service-item bg-secondary text-center px-5">
                <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                    <i class="fa fa-user-tie fa-2x"></i>  
                </div>
                <h3 class="mb-3">Counselling</h3>
                <p class="mb-0">Unleash your potential with personalized guidance, empowering you to make informed decisions.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-item bg-secondary text-center px-5">
                <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                    <!-- <i class="fa fa-chart-pie fa-2x"></i> -->
                    <i class="fa fa-file fa-2x"></i>
                </div>
                <h3 class="mb-3">Documentation</h3>
                <p class="mb-0">Leave the paperwork to us as we ensure precise and efficient handling of all necessary documents.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-item bg-secondary text-center px-5">
                <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                    <!-- <i class="fa fa-chart-line fa-2x"></i> -->
                    <i class="fa fa-language fa-2x"></i>
                </div>
                <h3 class="mb-3">Linguistic Mastery</h3>
                <p class="mb-0"> Immerse yourself in Japanese language classes tailored to your needs, unlocking a world of cultural integration.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-item bg-secondary text-center px-5">
                <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                    <!-- <i class="fa fa-chart-area fa-2x"></i> -->
                    <i class="fa fa-passport fa-2x"></i>
                </div>
                <h3 class="mb-3">Visa Processing</h3>
                <p class="mb-0"> Relax while we navigate the intricate visa procedures, ensuring a smooth and stress-free process.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-item bg-secondary text-center px-5">
                <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                    <!-- <i class="fa fa-balance-scale fa-2x"></i> -->
                    <i class="fa fa-laptop fa-2x"></i>
                </div>
                <h3 class="mb-3">Computer Training</h3>
                <p class="mb-0">Equip yourself with essential digital skills through our comprehensive computer training programs.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-item bg-secondary text-center px-5">
                <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                    <!-- <i class="fa fa-house-damage fa-2x"></i> -->
                    <i class="fa fa-heart fa-2x"></i>
                </div>
                <h3 class="mb-3">Insurance Facility</h3>
                <p class="mb-0">Ensure peace of mind as we offer comprehensive insurance coverage tailored to your specific needs.</p>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Features Start -->
<div class="container-fluid py-6 px-5">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 mb-0">Why Choose Us!!!</h1>
        <hr class="w-25 mx-auto bg-primary">
    </div>
    <div class="row g-5">
        <div class="col-lg-4">
            <div class="row g-5">
                <div class="col-12">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <!-- <i class="fa fa-cubes fs-4 text-white"></i> -->
                        <i class="fa fa-handshake fs-4 text-white"></i>
                    </div>
                    <h3>Personalized Guidance</h3>
                    <p class="mb-0">Our experienced counselors take the time to understand your academic and career objectives, providing customized support throughout the entire process.</p>
                </div>
                <div class="col-12">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-percent fs-4 text-white"></i>
                    </div>
                    <h3>Extensive Experience</h3>
                    <p class="mb-0">Our expertise ensures that you receive accurate and up-to-date information, as well as expert advice at every step.</p>
                </div>
                <div class="col-12">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <!-- <i class="fa fa-award fs-4 text-white"></i> -->
                        <i class="fa fa-globe fs-4 text-white"></i>
                    </div>
                    <h3>Strong Network</h3>
                    <p class="mb-0">Over the years, we have established a robust network of trusted educational institutions, language schools, and partner organizations in Japan. </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-block bg-primary h-100 text-center">
                <img class="img-fluid" src="{{ asset('assets/images/paban.jpg')}}" alt="">
                <div class="p-4">
                    <p class="text-white mb-4">At Threepn Education, our mission is to empower you with the knowledge, resources, and guidance needed to make your study abroad experience not only successful but also transformative. We understand the significance of this decision in shaping your future, and we are here to ensure that you receive the best possible assistance every step of the way.</p>
                    <a href="" class="btn btn-light py-md-3 px-md-5 rounded-pill mb-2">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row g-5">
                <div class="col-12">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="far fa-smile-beam fs-4 text-white"></i>
                    </div>
                    <h3>Alumni Success Stories</h3>
                    <p class="mb-0">Many students who have previously chosen Threepn Education have gone on to achieve remarkable success in their educational and professional endeavors.</p>
                </div>
                <div class="col-12">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-user-tie fs-4 text-white"></i>
                    </div>
                    <h3>Expert Visa Knowledge</h3>
                    <p class="mb-0">Our team possesses in-depth knowledge of the student visa process for Japan.</p>
                </div>
                <div class="col-12">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-headset fs-4 text-white"></i>
                    </div>
                    <h3>Continuous Communication</h3>
                    <p class="mb-0">Threepn Education maintains regular contact, providing updates, answering queries promptly, and offering ongoing support.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->


<!-- Quote Start -->
<div class="container-fluid bg-secondary px-0">
    <div class="row g-0">
        <div class="col-lg-6 py-6 px-5">
            <h1 class="display-5 mb-4">Request for Inquery</h1>
            <p class="mb-4">We encourage students to reach out to us with any inquiries or questions they may have. Threepn Education is committed to providing prompt and accurate responses to ensure that students have all the information they need to make informed decisions.</p>
            <form>
                <div class="row gx-3">
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="form-floating-1" placeholder="John Doe">
                            <label for="form-floating-1">Full Name</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="form-floating-2" placeholder="name@example.com">
                            <label for="form-floating-2">Email address</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="form-floating-2" placeholder="9999999999">
                            <label for="form-floating-2">Phone Number</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-primary w-100 h-100" type="submit">For Inquery</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6" style="min-height: 400px;">
            <div class="position-relative h-100">
                <img class="position-absolute w-100 h-100" src="{{ asset('assets/images/quote.jpg')}}" style="object-fit: cover;">
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->


<!-- Team Start -->
<div class="container-fluid py-6 px-5">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 mb-0">Our Team Members</h1>
        <hr class="w-25 mx-auto bg-primary">
    </div>
    <div class="row g-5">
        <div class="col-lg-4">
            <div class="team-item position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset('assets/images/yashoda.jpg')}}" alt="">
                <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                    <h3 class="text-white">Yashoda Shubedi</h3>
                    <p class="text-white text-uppercase mb-0">Admin/Operation</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="team-item position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset('assets/images/bishal.jpg')}}" alt="">
                <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                    <h3 class="text-white">Bishal Pokharel</h3>
                    <p class="text-white text-uppercase mb-0">Data Analytics/IT</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="team-item position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset('assets/images/prem.jpg')}}" alt="">
                <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                    <h3 class="text-white">Prem </h3>
                    <p class="text-white text-uppercase mb-0">Advisor</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid bg-secondary p-0">
    <div class="row g-0">
        <div class="col-lg-6" style="min-height: 500px;">
            <div class="position-relative h-100">
                <img class="position-absolute w-100 h-100" src="{{ asset('assets/images/testimonial.jpg')}}" style="object-fit: cover;">
            </div>
        </div>
        <div class="col-lg-6 py-6 px-5">
            <h1 class="display-5 mb-4">What Say Our Client!!!</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle" src="{{ asset('assets/images/testimonial-1.jpg')}}" alt="">
                        <div class="ps-4">
                            <h3>Client Name</h3>
                            <span class="text-uppercase">Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle" src="{{ asset('assets/images/testimonial-2.jpg')}}" alt="">
                        <div class="ps-4">
                            <h3>Client Name</h3>
                            <span class="text-uppercase">Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script') 
<script>
</script>
@endsection

