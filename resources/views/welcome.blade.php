<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>KN Prisma Autocare Enterprise</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="{{asset('website-template/img/favicon.ico')}}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('website-template/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
        <link href="{{asset('website-template/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('website-template/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('website-template/css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.html">
                                <h1>Appoint<span>Fix</span></h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                        <p>Mon - Fri, 8:00am - 5:00pm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p>info@KNPrisma.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="" class="nav-item nav-link active">Home</a>
                        </div>
                        <div class="ml-auto">
                            <a class="btn btn-custom" href="{{ route('login') }}">Get Appointment</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="{{asset('website-template/img/carservice1.jpg')}}" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Maintenance and Services</h3>
                            <h1>Keep your Car Newer</h1>
                            <p>
                                Driving with Confidence: Elevate Your Car's Performance with Our Premier Services!
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="{{asset('website-template/img/carservice2.jpg')}}" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Maintenance and Services</h3>
                            <h1>Quality service for you</h1>
                            <p>
                                Driving with Confidence: Elevate Your Car's Performance with Our Premier Services!
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="{{asset('website-template/img/aboutcar.jpg')}}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About Us</p>
                            <h2>car maintenance and service</h2>
                        </div>
                        <div class="about-content">
                            <p>
                                Welcome to KN Prisma Autocare Enterprise, your ultimate destination for top-quality car services and solutions. We are dedicated to providing exceptional care and maintenance for your beloved vehicle, ensuring it stays in pristine condition and performs at its peak.
                            </p>
                            <ul>
                                <li><i class="far fa-check-circle"></i>Routine Maintenance</li>
                                <li><i class="far fa-check-circle"></i>Brake and Suspension</li>
                                <li><i class="far fa-check-circle"></i>Engine and Transmission</li>
                                <li><i class="far fa-check-circle"></i>Fluid Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class=""></i>
                            <h3>Oil Change</h3>
                            <p>Provide oil change services using the appropriate oil grade and filter for your vehicle.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class=""></i>
                            <h3>Routine Maintenance</h3>
                            <p>Our regular maintenance packages, including oil changes, filter replacements, fluid checks, and tire rotations.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class=""></i>
                            <h3>Brake and Suspension</h3>
                            <p>Inspect and repair the braking system, including brake pads, rotors, calipers, and brake fluid to ensure safe and efficient braking performance.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class=""></i>
                            <h3>Engine and Transmission</h3>
                            <p>Provide expert repairs, rebuilds, and maintenance services. Our goal is to optimize performance, enhance fuel efficiency, and extend the lifespan of your vehicle's powertrain.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class=""></i>
                            <h3>Fluid Service</h3>
                            <p>Our comprehensive fluid services include coolant flushes, transmission fluid changes, and brake fluid replacements. Regular fluid maintenance ensures optimal performance of vital vehicle systems.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class=""></i>
                            <h3>Wheel Alignment</h3>
                            <p>Proper wheel alignment ensures that your vehicle's wheels are aligned correctly, reducing tire wear and improving handling and fuel efficiency.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class=""></i>
                            <h3>Cooling System Maintenance</h3>
                            <p>Services such as coolant flushes, radiator inspections, and thermostat replacements are performed to prevent overheating and ensure proper engine cooling.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class=""></i>
                            <h3>Brake Reparing</h3>
                            <p>Inspect and repair the braking system, including brake pads, rotors, calipers, and brake fluid to ensure safe and efficient braking performance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="{{asset('website-template/img/facts.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">1</h3>
                                <p>Service Points</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-user"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">5</h3>
                                <p>Workers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-users"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">100</h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-check"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">500</h3>
                                <p>Projects Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->

        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>What our customers say</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="{{asset('website-template/img/testimonial-1.jpg')}}" alt="Image">
                        <div class="testimonial-text">
                            <h3>John</h3>
                            <p>
                                The quality of their work exceeded my expectations
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="{{asset('website-template/img/testimonial-2.jpg')}}" alt="Image">
                        <div class="testimonial-text">
                            <h3>Emily</h3>
                            <p>
                                Their team was friendly and attentive, addressing all my concerns and ensuring a seamless booking process.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="{{asset('website-template/img/testimonial-3.jpg')}}" alt="Image">
                        <div class="testimonial-text">
                            <h3>David</h3>
                            <p>
                                They conducted a thorough inspection of my vehicle, explaining every step and recommending the necessary services without any pressure.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="{{asset('website-template/img/testimonial-4.jpg')}}" alt="Image">
                        <div class="testimonial-text">
                            <h3>Michael</h3>
                            <p>
                                Their dedication to clear communication and ensuring my complete satisfaction left a lasting impression.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>No. 6, Tingkat Bawah, Jalan Botani 1, Taman Bidor Botani, Bidor,Perak</p>
                            <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                            <p><i class="fa fa-envelope"></i>info@KNPrisma.com</p>
                            <div class="footer-social">
                                <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="">About Us</a>
                            <a href="">Contact Us</a>
                            <a href="">Our Service</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input class="form-control" placeholder="Full Name">
                                <input class="form-control" placeholder="Email">
                                <button class="btn btn-custom">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">AppointFix</a>, All Right Reserved.</a></p>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('website-template/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('website-template/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('website-template/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('website-template/lib/counterup/counterup.min.js')}}"></script>
        
        <!-- Contact Javascript File -->
        <script src="{{asset('website-template/mail/jqBootstrapValidation.min.js')}}"></script>
        <script src="{{asset('website-template/mail/contact.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('website-template/js/main.js')}}"></script>
    </body>
</html>
