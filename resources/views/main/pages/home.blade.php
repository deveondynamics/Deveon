@extends('main.layouts.master')

@section('main-container')



<!-- Hero Section Start -->
        <section class="hero-section hero-3">
            <div class="swiper hero-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero-inner">
                            <div class="video-container">
                                <video class="full-video" autoplay muted loop playsinline>
                                    <source src="{{ asset('assets/videos/v2.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-overlay"></div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-10 col-md-12">
                                        <div class="hero-content">
                                            <h1 class="hero-heading">
                                                We <span class="text-highlight">reimagine</span> tomorrow
                                            </h1>
                                            <p class="hero-subtext">Driving growth and molding the future through transformative change</p>
                                            <div class="hero-button">
                                                <a href="contact.html" class="theme-btn">GET IN TOUCH</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-inner">
                            <div class="video-container">
                                <video class="full-video" autoplay muted loop playsinline>
                                    <source src="{{ asset('assets/videos/v1.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-overlay"></div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-10 col-md-12">
                                        <div class="hero-content">
                                            <h1 class="hero-heading">
                                                AI that <span class="text-highlight">dares</span> to disrupt
                                            </h1>
                                            <p class="hero-subtext">Hyper-personalization at the pace of your thoughts</p>
                                            <div class="hero-button">
                                                <a href="services.html" class="theme-btn">LEARN MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <!-- Features Section Start -->
        <section class="features-wrapper features-3">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="200ms">
                        <div class="single-feature-item">
                            <div class="icon"><i class="flaticon-usability"></i></div>
                            <h4>Highly Tailored IT Design, Management </h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="single-feature-item">
                            <div class="icon"><i class="flaticon-analysis"></i></div>
                            <h4>Elevate Their Value Through Custom Software</h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="600ms">
                        <div class="single-feature-item">
                            <div class="icon"><i class="flaticon-expertise"></i></div>
                            <h4>We are Trusted15+ Countries Worldwide </h4>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- About Section Start -->
        <section class="about-wrapper about-3 section-padding pb-0">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-6 col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="200ms">
                        <div class="about-images me-xxl-3">
                            <div class="image-1">
                                <img src="{{ asset('assets/img/shape/shape-2.png')}}" alt="img">

                                <div class="experience">
                                    <h2> <span class="count">24</span>+</h2>
                                    <p>Years of Experience</p>
                                </div>
                            </div>
                            <div class="image-2">
                                <img src="{{ asset('assets/img/about/07.png')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 col-md-12 wow fadeInUp" data-wow-delay="200ms">
                        <div class="about-content ms-xxl-3">
                            <div class="section-title text-start">
                                <div class="sub-title"><span>ABOUT OUR COMPANY</span></div>
                                <h2 class="split-text right">Highly Tailored Technology, Develop and Support Services.
                                </h2>
                            </div>
                            <p>Accelerate innovation with world-class tech teams We'll match you to an entire remote
                                team of incredible freelance talent for all your software development needs.</p>
                            <p class="text">
                                SMEs and technology challengers. We help businesses elevate their value through custom
                                software development
                            </p>
                            <div class="list">
                                <ul>
                                    <li><i class="fas fa-check-circle"></i>Website & Mobile application
                                    </li>
                                    <li><i class="fas fa-check-circle"></i>Dramatically re-engineer value
                                    </li>
                                    <li><i class="fas fa-check-circle"></i>Professional User Experience
                                    </li>
                                </ul>
                                <ul>
                                    <li><i class="fas fa-check-circle"></i>Expert Team Member
                                    </li>
                                    <li><i class="fas fa-check-circle"></i>Professional Global Entrepreneur
                                    </li>
                                    <li><i class="fas fa-check-circle"></i>Cloud Based Services
                                    </li>
                                </ul>

                            </div>
                            <div class="about-infu d-flex align-items-center">
                                <a href="about.html" class="theme-btn black-btn">
                                    More About Us
                                </a>
                                <div class="contact-us d-flex align-items-center">
                                    <img src="{{ asset('assets/img/about/03.png')}}" alt="">
                                    <div class="infu">
                                        <span>Call to ask any question</span>
                                        <h4>0123-456-7890</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brand Section Start -->
        <div class="brand-wrapper brand-1 style-3 section-padding ">
            <div class="container">
                <div class="brand-inner">
                    <div class="swiper brand-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/img/brand/13.png')}}" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/img/brand/14.png')}}" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/img/brand/15.png')}}" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/img/brand/16.png')}}" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/img/brand/17.png')}}" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/img/brand/18.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Section Start -->
        <section class="service-wrapper service-4 section-bg section-padding">
            <div class="shape">
                <img class="shape-1" src="{{ asset('assets/img/shape/shape-23.png')}}" alt="">
                <img class="shape-2" src="{{ asset('assets/img/shape/shape-11.png')}}" alt="">
                <img class="shape-3" src="{{ asset('assets/img/shape/shape-24.png')}}" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="sub-title"><span>OUR SERVICES</span></div>
                    <h2 class="split-text right">Preparing for Your Success, We <br> Provide Truly IT Solutions.
                    </h2>
                </div>
                <div class="service-inner text-center overflow-hidden mt-4 pt-3">
                    <div class="swiper service-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="signle-service-item wow fadeInUp" data-wow-delay="200ms">
                                    <div class="service-bg bg-cover"
                                        style="background-image: url(assets/img/service/08.jpg);"></div>
                                    <div class="icon"><i class="flaticon-web-development"></i></div>
                                    <div class="line mb-4"></div>
                                    <h4><a href="services-details.html">Web Development</a></h4>
                                    <p class="pt-3">Back up your database, store in a safe and secure place while still
                                        maintaining.
                                    </p>
                                    <a href="services-details.html" class="infu-btn">Read More<i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="signle-service-item wow fadeInUp" data-wow-delay="400ms">
                                    <div class="service-bg bg-cover"
                                        style="background-image: url(assets/img/service/08.jpg);"></div>
                                    <div class="icon"><i class="flaticon-lock"></i></div>
                                    <div class="line mb-4"></div>
                                    <h4><a href="services-details.html">Cyber Security</a></h4>
                                    <p class="pt-3">Back up your database, store in a safe and secure place while still
                                        maintaining.
                                    </p>
                                    <a href="services-details.html" class="infu-btn">Read More<i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="signle-service-item wow fadeInUp" data-wow-delay="600ms">
                                    <div class="service-bg bg-cover"
                                        style="background-image: url(assets/img/service/08.jpg);"></div>
                                    <div class="icon"><i class="flaticon-user-experience"></i></div>
                                    <div class="line mb-4"></div>
                                    <h4><a href="services-details.html">UI/UX Design</a></h4>
                                    <p class="pt-3">Back up your database, store in a safe and secure place while still
                                        maintaining.
                                    </p>
                                    <a href="services-details.html" class="infu-btn">Read More<i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="signle-service-item wow fadeInUp" data-wow-delay="800ms">
                                    <div class="service-bg bg-cover"
                                        style="background-image: url(assets/img/service/08.jpg);"></div>
                                    <div class="icon"><i class="flaticon-strategy"></i></div>
                                    <div class="line mb-4"></div>
                                    <h4><a href="services-details.html">Business Planning</a></h4>
                                    <p class="pt-3">Back up your database, store in a safe and secure place while still
                                        maintaining.
                                    </p>
                                    <a href="services-details.html" class="infu-btn">Read More<i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="array-button">
                        <button class="array-prev"><i class="fas fa-long-arrow-left"></i></button>
                        <button class="array-next"><i class="fas fa-long-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Choose-us Section Start -->
        <section class="choose-us-wrapper choose-us-3 section-padding">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-6 col-lg-12 col-md-12 mt-xl-4 wow fadeInLeft" data-wow-delay="300ms">
                        <div class="choose-us-content ms-xl-4 ps-xl-1">
                            <div class="section-title">
                                <div class="sub-title"><span>WHY CHOOSE US</span>
                                </div>
                                <h2 class="split-text right">We provide truly <br> prominent IT solutions <br> for your
                                    success</h2>
                            </div>
                            <p class="mt-4">Zotech is the partner of choice for many of the world's <br> leading
                                enterprises,
                            </p>
                            <div class="reviews d-flex mt-4 pt-3">
                                <div class="infu">
                                    <img src="{{ asset('assets/img/why-choose/04.png')}}" alt="">
                                    <h4>Join our 50503+ <br> Satisfied World Clients</h4>

                                </div>
                                <div class="infu">
                                    <div class="head d-flex align-items-center">
                                        <div class="icon"><i class="flaticon-world"></i></div>
                                        <h4>Global Company</h4>
                                    </div>
                                    <p>Our great team of more than to <br> 1400 software experts member.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 wow fadeInRight" data-wow-delay="300ms">
                        <div class="choose-us-images">
                            <img class="shape-1" src="{{ asset('assets/img/world.png')}}" alt="">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 mt-xl-4">
                                    <div class="single-choose-item active bg-cover mt-4 mt-xl-0">
                                        <div class="shape">
                                            <img class="shape-2" src="{{ asset('assets/img/shape/shape-10.png')}}" alt="">
                                            <img class="shape-3" src="{{ asset('assets/img/shape/shape-11.png')}}" alt="">
                                        </div>
                                        <div class="icon"><i class="flaticon-graphic"></i></div>
                                        <h4>Our Mission</h4>
                                        <div class="single-choose-hover active bg-cover">
                                            <div class="icon"><i class="flaticon-graphic"></i></div>
                                            <h4>Our Mission</h4>
                                            <p>Back up your database, store in a safe and secure place while still
                                                maintaining.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 ">
                                    <div class="single-choose-item bg-cover mt-4 mt-xl-0">
                                        <div class="shape">
                                            <img class="shape-2" src="{{ asset('assets/img/shape/shape-10.png')}}" alt="">
                                            <img class="shape-3" src="{{ asset('assets/img/shape/shape-11.png')}}" alt="">
                                        </div>
                                        <div class="icon"><i class="flaticon-view"></i></div>
                                        <h4>Our Vision</h4>
                                        <div class="single-choose-hover bg-cover">
                                            <div class="icon"><i class="flaticon-view"></i></div>
                                            <h4>Our Vision</h4>
                                            <p>Back up your database, store in a safe and secure place while still
                                                maintaining.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 mt-xl-4">
                                    <div class="single-choose-item bg-cover mt-4 mt-xl-0">
                                        <div class="shape">
                                            <img class="shape-2" src="{{ asset('assets/img/shape/shape-10.png')}}" alt="">
                                            <img class="shape-3" src="{{ asset('assets/img/shape/shape-11.png')}}" alt="">
                                        </div>
                                        <div class="icon"><i class="flaticon-rocket"></i></div>
                                        <h4>Our Strategy</h4>
                                        <div class="single-choose-hover bg-cover">
                                            <div class="icon"><i class="flaticon-rocket"></i></div>
                                            <h4>Our Strategy</h4>
                                            <p>Back up your database, store in a safe and secure place while still
                                                maintaining.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single-choose-item bg-cover mt-4 mt-xl-0">
                                        <div class="shape">
                                            <img class="shape-2" src="{{ asset('assets/img/shape/shape-10.png')}}" alt="">
                                            <img class="shape-3" src="{{ asset('assets/img/shape/shape-11.png')}}" alt="">
                                        </div>
                                        <div class="icon"><i class="flaticon-wallet"></i></div>
                                        <h4>Our Philosophy</h4>
                                        <div class="single-choose-hover bg-cover">
                                            <div class="icon"><i class="flaticon-wallet"></i></div>
                                            <h4>Our Philosophy</h4>
                                            <p>Back up your database, store in a safe and secure place while still
                                                maintaining.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Contact-us Section Start -->
        <section class="contact-us-wrapper contact-us-2 section-padding">
            <div class="shape">
                <img class="shape-1" src="{{ asset('assets/img/shape/shape-21.png')}}" alt="">
                <img class="shape-2" src="{{ asset('assets/img/shape/shape-11.png')}}" alt="">
                <img class="shape-3" src="{{ asset('assets/img/shape/shape-22.png')}}" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="sub-title"><span>CONTACT US</span>
                    </div>
                    <h2 class="split-text right">Dealing in All <br> Professional IT Services</h2>
                </div>
                <div class="contact-us-inner">
                    <div class="row g-5">
                        <div class="col-xl-6 col-lg-12 col-md-12 pe-xl-0 wow fadeInLeft" data-wow-delay="300ms">
                            <div class="contact-left">
                                <form action="#" id="contact-form" method="POST">
                                    <div class="row g-4">
                                        <div class="col-lg-6 pe-0 wow fadeInUp" data-wow-delay=".2">
                                            <span>First Name</span>
                                            <div class="form-clt">
                                                <input type="text" name="name" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 pe-0 wow fadeInUp" data-wow-delay=".6">
                                            <span>Last Name</span>
                                            <div class="form-clt">
                                                <input type="text" name="name" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 pe-0 wow fadeInUp" data-wow-delay=".4">
                                            <span>Your Email</span>
                                            <div class="form-clt">
                                                <input type="email" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 pe-0 wow fadeInUp" data-wow-delay=".2">
                                            <span>Phone Number</span>
                                            <div class="form-clt">
                                                <input type="text" name="name" placeholder="Your Phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 pe-0 wow fadeInUp" data-wow-delay=".6">
                                            <span>Country</span>
                                            <div class="form-clt">
                                                <input type="text" name="phone" placeholder="Your Country">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="categories mt-4 pt-3">
                                    <span class="fw-semibold">What's the type of your company?</span>
                                    <div class="categories-items mt-2">
                                        <div class="single-item">It Company</div>
                                        <div class="single-item">Business</div>
                                        <div class="single-item">Cyber Security</div>
                                        <div class="single-item">Other</div>
                                    </div>
                                </div>
                                <div class="checked-box mt-4 pt-3">
                                    <span class="fw-semibold">What you need from us?</span>
                                    <div class="checked-box-items mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <label class="form-check-label">
                                                App Design
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <label class="form-check-label">
                                                Digital Marketing
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <label class="form-check-label">
                                                UI/UX Design
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <label class="form-check-label">
                                                Cloud service
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <label class="form-check-label">
                                                Other Services
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 wow fadeInRight" data-wow-delay="300ms">
                            <div class="contact-right ps-xl-5 ms-xl-3">
                                <div class="price-ranger">
                                    <span>Your Service Budget</span>
                                    <div id="slider-range"></div>
                                    <div class="ranger-min-max-block pt-3">
                                        <span class="min">$56</span> <span class="max">$1578</span>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp mt-4" data-wow-delay=".8">
                                    <span>Your Message</span>
                                    <div class="form-clt-big form-clt">
                                        <textarea name="message" id="message" placeholder="Write a Message"></textarea>
                                    </div>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label">
                                        Click the box and agree to our terms and conditions
                                    </label>
                                </div>
                                <div
                                    class="contact-btn d-flex align-items-center justify-content-between flex-wrap  mt-4">
                                    <button type="submit" class="theme-btn black-btn">Send Message</button>

                                    <div class="infu pt-xxl-0 pt-3">
                                        <img src="{{ asset('assets/img/Avatar.png')}}" alt="">
                                        <p>Meet With Expert</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Case-study Section Start -->
        <section class="case-study-wrapper case-study-2  section-padding pb-0">
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title">
                        <div class="sub-title wow fadeInUp">
                            <span>Case studies section</span>
                        </div>
                        <h2 class="split-text right">
                            Introduce Our Projects
                        </h2>
                    </div>
                    <ul class="nav">
                        <li>
                            <a href="#all" data-bs-toggle="tab" class="nav-link theme-btn trasparent-btn active">all</a>
                        </li>
                        <li>
                            <a href="#Design" data-bs-toggle="tab" class="nav-link theme-btn trasparent-btn">Design</a>
                        </li>
                        <li>
                            <a href="#Company" data-bs-toggle="tab" class="nav-link theme-btn trasparent-btn">IT
                                Company</a>
                        </li>
                        <li>
                            <a href="#Photography" data-bs-toggle="tab"
                                class="nav-link theme-btn trasparent-btn">Photography</a>
                        </li>
                        <li>
                            <a href="#Security" data-bs-toggle="tab" class="nav-link theme-btn trasparent-btn">Cyber
                                Security</a>
                        </li>

                    </ul><!-- /.list-unstyledf -->
                </div>
            </div>
            <div class="container-fluid ">
                <div class="tab-content">
                    <div id="all" class="tab-pane fade show active">
                        <div class="case-study-grid">
                            <div class="single-case-item style-1 filter-item branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/09.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-2 filter-item branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/10.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-2 wow fadeInUp" data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/11.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-grid">
                            <div class="single-case-item style-2 filter-item branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/12.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-2 filter-item web-design branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/13.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-1 filter-item web-design branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/14.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Design" class="tab-pane fade">
                        <div class="case-study-grid">
                            <div class="single-case-item style-1 filter-item branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/09.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-2 filter-item branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/10.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-2 wow fadeInUp" data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/11.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-grid">
                            <div class="single-case-item style-2 filter-item branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/12.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-2 filter-item web-design branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/13.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-1 filter-item web-design branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/14.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Company" class="tab-pane fade">
                        <div class="case-study-grid">
                            <div class="single-case-item style-1 filter-item branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/09.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-2 filter-item branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/10.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-2 wow fadeInUp" data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/11.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-grid">
                            <div class="single-case-item style-2 filter-item branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/12.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-2 filter-item web-design branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/13.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-1 filter-item web-design branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/14.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Photography" class="tab-pane fade">
                        <div class="case-study-grid">
                            <div class="single-case-item style-1 filter-item branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/09.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-2 filter-item branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/10.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-2 wow fadeInUp" data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/11.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-grid">
                            <div class="single-case-item style-2 filter-item branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/12.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-2 filter-item web-design branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/13.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-1 filter-item web-design branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/14.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Security" class="tab-pane fade">
                        <div class="case-study-grid">
                            <div class="single-case-item style-1 filter-item branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/09.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-2 filter-item branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/10.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-2 wow fadeInUp" data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/11.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-grid">
                            <div class="single-case-item style-2 filter-item branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/12.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-2 filter-item web-design branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/13.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-case-item style-1 filter-item web-design branding wow fadeInUp"
                                data-wow-delay=".5s">
                                <img src="{{ asset('assets/img/case/14.jpg')}}" alt="img">
                                <div class="hover d-flex align-items-center justify-content-between">
                                    <div class="title">
                                        <span>FINANCE</span>
                                        <h4>Every software</h4>
                                        <h4>solution be integrated</h4>
                                    </div>
                                    <a href="projects-details.html" class="icon"><i
                                            class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Funfact Section Start -->
        <section class="funfact-wrapper funfact-2 section-padding">
            <div class="shape">
                <img class="shape-1" src="{{ asset('assets/img/shape/shape-1.png')}}" alt="">
            </div>
            <div class="container">
                <div class="funfact-inner">
                    <div class="signle-funfact-item wow fadeInUp" data-wow-delay="200ms">
                        <div class="icon"><i class="flaticon-team"></i></div>
                        <div class="count-box">
                            <h2><span class="count">69</span>+</h2>
                            <p>Team Member</p>
                        </div>
                    </div>
                    <div class="signle-funfact-item wow fadeInUp" data-wow-delay="400ms">
                        <div class="icon"><i class="flaticon-test"></i></div>
                        <div class="count-box">
                            <h2><span class="count">854</span>+</h2>
                            <p>Media Posts</p>
                        </div>
                    </div>
                    <div class="signle-funfact-item wow fadeInUp" data-wow-delay="600ms">
                        <div class="icon"><i class="flaticon-mountain"></i></div>
                        <div class="count-box">
                            <h2><span class="count">459</span>+</h2>
                            <p>Completed Projects</p>
                        </div>
                    </div>
                    <div class="signle-funfact-item wow fadeInUp" data-wow-delay="800ms">
                        <div class="icon"><i class="flaticon-project"></i></div>
                        <div class="count-box">
                            <h2><span class="count">98</span>%+</h2>
                            <p>Successful Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section Start -->
        <section class="process-wrapper process-2 section-padding pt-0">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sub-title"><span>HOW IT WORKS</span></div>
                    <h2 class="split-text right">Our Working Process in 4 Steps</h2>
                </div>
                <div class="row mt-4">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="signle-process-item pe-xl-4">
                            <img class="shape-1" src="{{ asset('assets/img/process/shape-6.png')}}" alt="">
                            <div class="icons">
                                <div class="icon-1"><i class="flaticon-conversation"></i></div>
                                <div class="icon-2">01</div>
                            </div>
                            <h4 class="mb-2">Project Discussion</h4>
                            <p>Accelerate innovation with world-class tech teams We'll match you to an entire remote
                                team.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mt-xl-5  wow fadeInUp" data-wow-delay="400ms">
                        <div class="signle-process-item pe-xl-3 ps-xl-2 ">
                            <img class="shape-2" src="{{ asset('assets/img/process/shape-7.png')}}" alt="">
                            <div class="icons">
                                <div class="icon-1"><i class="flaticon-cms"></i></div>
                                <div class="icon-2">02</div>
                            </div>
                            <h4 class="mb-2">Testing & Trying</h4>
                            <p>Accelerate innovation with world-class tech teams We'll match you to an entire remote
                                team.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInUp" data-wow-delay="600ms">
                        <div class="signle-process-item ps-xl-3 pe-xl-2">
                            <img class="shape-1" src="{{ asset('assets/img/process/shape-6.png')}}" alt="">
                            <div class="icons">
                                <div class="icon-1"><i class="flaticon-maintenance"></i></div>
                                <div class="icon-2">03</div>
                            </div>
                            <h4 class="mb-2">Execute & Install</h4>
                            <p>Accelerate innovation with world-class tech teams We'll match you to an entire remote
                                team.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mt-xl-5  wow fadeInUp" data-wow-delay="400ms">
                        <div class="signle-process-item ps-xl-4">
                            <div class="icons">
                                <div class="icon-1"><i class="flaticon-positive-review"></i></div>
                                <div class="icon-2">04</div>
                            </div>
                            <h4 class="mb-2">Review & Fixing</h4>
                            <p>Accelerate innovation with world-class tech teams We'll match you to an entire remote
                                team.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Section Start -->
        <div class="video-wrapper video-1 style-2 mt-0 pt-0  section-padding">
            <div class="container">
                <div class="video-image bg-cover  wow fadeInUp" data-wow-delay="200ms"
                    style="background-image: url(assets/img/video-03.jpg);">
                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-button video-popup">
                        <i class="fas fa-play"></i>
                        <i class="video-button-ripple"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Testimonial Section Start -->
        <section class="testimonial-wrapper testimonial-3 section-padding section-bg">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="testimonial-image">
                            <img src="{{ asset('assets/img/testimonial/03.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="testimonial-content ps-xl-5">
                            <div class="section-title">
                                <div class="sub-title"><span>OUR TESTIMONIAL</span>
                                </div>
                                <h2 class="split-text right">20k+ Satisfied Clients Worldwide</h2>
                            </div>
                            <div class="swiper testimonial-slide-3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-item  wow fadeInUp" data-wow-delay="200ms">
                                            <ul class="client-rating d-flex align-items-center">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <p class="text">
                                                I believe in lifelong learning and they are a great place to learn from
                                                experts. I have learned a lot and recommend it
                                            </p>
                                            <div class="client-info">
                                                <div class="client-img">
                                                    <img src="{{ asset('assets/img/testimonial/02.png')}}" alt="client-img">
                                                    <div class="icon"><i class="flaticon-quote"></i></div>
                                                </div>
                                                <div class="content">
                                                    <h6>
                                                        William Jekson
                                                    </h6>
                                                    <p>
                                                        Product Manager
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-item  wow fadeInUp" data-wow-delay="200ms">
                                            <ul class="client-rating d-flex align-items-center">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <p class="text">
                                                I believe in lifelong learning and they are a great place to learn from
                                                experts. I have learned a lot and recommend it
                                            </p>
                                            <div class="client-info">
                                                <div class="client-img">
                                                    <img src="{{ asset('assets/img/testimonial/02.png')}}" alt="client-img">
                                                    <div class="icon"><i class="flaticon-quote"></i></div>
                                                </div>
                                                <div class="content">
                                                    <h6>
                                                        William Jekson
                                                    </h6>
                                                    <p>
                                                        Product Manager
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-item  wow fadeInUp" data-wow-delay="200ms">
                                            <ul class="client-rating d-flex align-items-center">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <p class="text">
                                                I believe in lifelong learning and they are a great place to learn from
                                                experts. I have learned a lot and recommend it
                                            </p>
                                            <div class="client-info">
                                                <div class="client-img">
                                                    <img src="{{ asset('assets/img/testimonial/02.png')}}" alt="client-img">
                                                    <div class="icon"><i class="flaticon-quote"></i></div>
                                                </div>
                                                <div class="content">
                                                    <h6>
                                                        William Jekson
                                                    </h6>
                                                    <p>
                                                        Product Manager
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="array-button">
                                    <button class="array-next"><i class="fas fa-long-arrow-right"></i></button>
                                    <button class="array-prev"><i class="fas fa-long-arrow-left"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section Start -->
        <section class="cta-wrapper cta-2 style-2 half-bg section-padding pt-0">
            <div class="container">
                <div class="cta-inner wow fadeInUp" data-wow-delay="200ms">
                    <div class="icon"><i class="flaticon-customer-support"></i></div>
                    <div class="title">
                        <h3 class="split-text right">Looking for the Best IT Business Solutions?</h3>
                        <p>As a app web crawler expert, We will help to organize.</p>
                    </div>
                    <a href="" class="theme-btn white-btn">Take a Consultant</a>
                </div>
            </div>
        </section>

        <!-- Team Section Start -->
        <section class="team-wrapper team-2 section-padding pt-0">
            <div class="container">
                <div class="section-title text-center">
                    <div class="sub-title"><span>OUR TEAM MEMBER</span>
                    </div>
                    <h2 class="split-text right">Meet with Our Expert</h2>
                    <p class="text-center">Accelerate innovation with world-class tech teams We'll match you <br> to an
                        entire
                        remote team of incredible freelance.</p>
                </div>

                <div class="row mt-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="200ms">
                        <div class="single-team-item">
                            <img class="shape-1" src="{{ asset('assets/img/shape/shape-11.png')}}" alt="">
                            <div class="team-image">
                                <img src="{{ asset('assets/img/team/05.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <p>Marketing Manager</p>
                                <h4><a href="teams-details.html">Emma Taylor</a></h4>
                                <div class="social d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="single-team-item">
                            <img class="shape-1" src="{{ asset('assets/img/shape/shape-11.png')}}" alt="">
                            <div class="team-image">
                                <img src="{{ asset('assets/img/team/06.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <p>Fleet Supervisor</p>
                                <h4><a href="teams-details.html">James Anderson</a></h4>
                                <div class="social d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="600ms">
                        <div class="single-team-item">
                            <img class="shape-1" src="{{ asset('assets/img/shape/shape-11.png')}}" alt="">
                            <div class="team-image">
                                <img src="{{ asset('assets/img/team/07.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <p>Warehouse Manager</p>
                                <h4><a href="">Sophia Brown</a></h4>
                                <div class="social d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="single-team-item">
                            <img class="shape-1" src="{{ asset('assets/img/shape/shape-11.png')}}" alt="">
                            <div class="team-image">
                                <img src="{{ asset('assets/img/team/08.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <p>Marketing Manager</p>
                                <h4><a href="teams-details.html">Christopher Mark</a></h4>
                                <div class="social d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <!-- Blog Section Start -->
        <section class="blog-wrapper blog-1 style-3 section-padding section-bg">
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title">
                        <div class="sub-title"><span>OUR BLOG</span>
                        </div>
                        <h2 class="split-text right">Our Latest Insights & Blog</h2>
                        <p class="mt-3">Accelerate innovation with world-class tech teams We'll match <br>
                            you
                            to an
                            entire remote team of incredible</p>
                    </div>
                    <a href="" class="theme-btn">All Blog & News</a>
                </div>
                <div class="blog-inner">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="200ms">
                            <div class="single-blog-item">
                                <div class="image">
                                    <img src="{{ asset('assets/img/blog/07.jpg')}}" alt="">
                                    <img src="{{ asset('assets/img/blog/07.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <ul>
                                        <li>
                                            Technology
                                        </li>
                                        <li> <i class="fas fa-circle"></i></li>
                                        <li>
                                            12 January, 2025
                                        </li>
                                    </ul>
                                    <h3>
                                        <a href="blogs-details.html">Planning your online business goals with a
                                            specialist</a>
                                    </h3>
                                    <p>
                                        Accelerate innovation with world-class tech teams We'll match you to an entire
                                        remote
                                    </p>
                                    <a href="blogs-details.html" class="theme-btn mt-3 trasparent-btn">
                                        More Details
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="single-blog-item">
                                <div class="image">
                                    <img src="{{ asset('assets/img/blog/08.jpg')}}" alt="">
                                    <img src="{{ asset('assets/img/blog/08.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <ul>
                                        <li>
                                            Technology
                                        </li>
                                        <li> <i class="fas fa-circle"></i></li>
                                        <li>
                                            12 January, 2025
                                        </li>
                                    </ul>
                                    <h3>
                                        <a href="blogs-details.html">Holistic Healing: Exploring Health Coaching
                                            Techniques</a>
                                    </h3>
                                    <p>
                                        Accelerate innovation with world-class tech teams We'll match you to an entire
                                        remote
                                    </p>
                                    <a href="blogs-details.html" class="theme-btn mt-3 trasparent-btn">
                                        More Details
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="600ms">
                            <div class="single-blog-item">
                                <div class="image">
                                    <img src="{{ asset('assets/img/blog/09.jpg')}}" alt="">
                                    <img src="{{ asset('assets/img/blog/09.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <ul>
                                        <li>
                                            Technology
                                        </li>
                                        <li> <i class="fas fa-circle"></i></li>
                                        <li>
                                            12 January, 2025
                                        </li>
                                    </ul>
                                    <h3>
                                        <a href="blogs-details.html">The Art of Self-Care: Lessons from Health
                                            Coaching</a>
                                    </h3>
                                    <p>
                                        Accelerate innovation with world-class tech teams We'll match you to an entire
                                        remote
                                    </p>
                                    <a href="blogs-details.html" class="theme-btn mt-3 trasparent-btn">
                                        More Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        @endsection

<style>

</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.hero-slider', {
        loop: true,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        speed: 1000,
    });
});
</script>