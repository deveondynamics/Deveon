@extends('layouts.frontend.app.master')

@section('title', 'Deveon Dynamics')

@section('css')
    <link rel="stylesheet" href="{{asset('FrontendAssets/css/home1-style.css')}}">

@endsection

@section('content')



                <!-- ==================== Start Header ==================== -->

                <header class="header-sa d-flex align-items-center">
                    <div class="background"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="caption">
                                    <h1>Build your next idea with <span class="sub-color">Deveon Dynamics</span></h1>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="text">
                                                <p>Beautifully designed components and templates built with modern technologies. Ship your projects faster with our professional toolkit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 mt-40">
                                        <a href="#0" class="butn">
                                            Get Started
                                            <svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m9 18 6-6-6-6"/>
                                            </svg>
                                        </a>
                                        <a href="#0" class="butn butn-bord">
                                            View Demo
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="imgs">
                                    <div class="cube">
                                        <img src="{{asset('FrontendAssets/imgs/header/cube.svg')}}" alt="">
                                    </div>
                                    <div class="circle">
                                        <img src="{{asset('FrontendAssets/imgs/header/circle-badge.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- ==================== End Header ==================== -->



                <!-- ==================== Start services ==================== -->

                <section class="services-sa section-padding">
                    <div class="container">
                        <div class="sec-head">
                            <h2>Solutions We <span class="highlight">Provide</span></h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="item md-mb50">
                                    <div class="cont">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h6>Strategy and <br> Design</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="icon invert">
                                                    <img src="{{asset('FrontendAssets/imgs/icons/bezier-curve-solid.svg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>We provide digital solutions as Website Design,Mobile App Design,
                                                Landing Page design, Illustration, Animation increase
                                                company’s values</p>
                                        </div>
                                    </div>
                                    <div class="img">
                                        <img src="{{asset('FrontendAssets/imgs/services/1.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item md-mb50">
                                    <div class="cont">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h6>Coding and <br> Implementation</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="icon invert">
                                                    <img src="{{asset('FrontendAssets/imgs/icons/code-solid.svg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>We implement coding with new tech React, Webflow, Wordpress, Shopify,
                                                Flutter, iOS, Android and AI-driven applications</p>
                                        </div>
                                    </div>
                                    <div class="img">
                                        <img src="{{asset('FrontendAssets/imgs/services/2.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item">
                                    <div class="cont">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h6>SEO/Marketing and <br> Advertisment</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="icon invert">
                                                    <img src="{{asset('FrontendAssets/imgs/icons/chart-line-solid.svg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>Growth your brand with our SEO/Marketing and advertisment solutions. Help
                                                increase the traffic, Google 5* rating and more</p>
                                        </div>
                                    </div>
                                    <div class="img">
                                        <img src="{{asset('FrontendAssets/imgs/services/3.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End services ==================== -->

                <!-- ==================== Start Portfolio ==================== -->

                <section class="work-card">
                    <div class="container section-padding bord-thin-top-light">
                        <div class="sec-head">
                            <h2>Our <span class="highlight">Creative</span> Projects</h2>
                        </div>
                        <div class="cards">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="cont md-mb50">
                                            <div>
                                                <h5>
                                                    <a href="../inner_pages/project-details.html">Unerio Residential <br> Complex Landing page</a>
                                                </h5>
                                            </div>
                                            <div>
                                                <p>This paragraph is short description to describe about this project,
                                                    you can use it to improve SEO or highlight some key result of this
                                                    project</p>
                                                <div class="mt-40">
                                                    <a href="#0" class="tag">Development</a>
                                                    <a href="#0" class="tag">UI/UX</a>
                                                    <a href="#0" class="tag">illustration</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="img">
                                            <img src="{{asset('FrontendAssets/imgs/works/1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="cont md-mb50">
                                            <div>
                                                <h5>
                                                    <a href="../inner_pages/project-details.html">Archin Architecture <br> Studio</a>
                                                </h5>
                                            </div>
                                            <div>
                                                <p>This paragraph is short description to describe about this project,
                                                    you can use it to improve SEO or highlight some key result of this
                                                    project</p>
                                                <div class="mt-40">
                                                    <a href="#0" class="tag">Mobile Responsive</a>
                                                    <a href="#0" class="tag">UX Design</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="img">
                                            <img src="{{asset('FrontendAssets/imgs/works/2.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="cont md-mb50">
                                            <div>
                                                <h5>
                                                    <a href="../inner_pages/project-details.html">Jorger Clarkson - Architect <br> Personal Portfolio</a>
                                                </h5>
                                            </div>
                                            <div>
                                                <p>This paragraph is short description to describe about this project,
                                                    you can use it to improve SEO or highlight some key result of this
                                                    project</p>
                                                <div class="mt-40">
                                                    <a href="#0" class="tag">UI/UX</a>
                                                    <a href="#0" class="tag">Webflow</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="img">
                                            <img src="{{asset('FrontendAssets/imgs/works/3.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="cont md-mb50">
                                            <div>
                                                <h5>
                                                    <a href="../inner_pages/project-details.html">DS Freelance Developer</a>
                                                </h5>
                                            </div>
                                            <div>
                                                <p>This paragraph is short description to describe about this project,
                                                    you can use it to improve SEO or highlight some key result of this
                                                    project</p>
                                                <div class="mt-40">
                                                    <a href="#0" class="tag">Development</a>
                                                    <a href="#0" class="tag">UI/UX</a>
                                                    <a href="#0" class="tag">illustration</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="img">
                                            <img src="{{asset('FrontendAssets/imgs/works/4.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-80">
                            <a href="../inner_pages/portfolio-cards.html" class="butn butn-md butn-bord butn-rounded">
                                <div class="d-flex align-items-center">
                                    <span>Check Our Portfolio</span>
                                    <span class="icon invert ml-10">
                                        <img src="{{asset('FrontendAssets/imgs/icons/arrow-top-right.svg')}}" alt="">
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Portfolio ==================== -->


                <!-- ==================== Start Intro ==================== -->

                <section class="intro-sa">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 valign">
                                <div class="img full-width md-mb80">
                                    <img src="{{asset('FrontendAssets/imgs/intro.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-1 valign">
                                <div class="sec-head" style="text-align: left;">
                                    <h4 style="max-width: none;">We help passionate Founders perfect their <span class="highlight">design & development</span> game. Let's aim for the top together!</h4>
                                    <a href="../inner_pages/about.html" class="butn butn-md butn-bord butn-rounded mt-40">
                                        <div class="d-flex align-items-center">
                                            <span>About Hubfolio</span>
                                            <span class="icon invert ml-10">
                                                <img src="{{asset('FrontendAssets/imgs/icons/arrow-top-right.svg')}}" alt="">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Intro ==================== -->



                <!-- ==================== Start marquee ==================== -->

                <section class="marq-sa section-padding">
                    <div class="main-marq shadow-off">
                        <div class="slide-har st1">
                            <div class="box">
                                <div class="item">
                                    <h2><span>User Centric Design</span>
                                    </h2>
                                </div>
                                <div class="item">
                                    <h2><span>AI-Driven Solutions</span>
                                    </h2>
                                </div>
                                <div class="item">
                                    <h2><span>Flexiable Price</span>
                                    </h2>
                                </div>
                                <div class="item">
                                    <h2><span>User Centric Design</span>
                                    </h2>
                                </div>
                                <div class="item">
                                    <h2><span>AI-Driven Solutions</span>
                                    </h2>
                                </div>
                                <div class="item">
                                    <h2><span>Flexiable Price</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="box">
                                <div class="item">
                                    <h2><span>User Centric Design</span>
                                    </h2>
                                </div>
                                <div class="item">
                                    <h2><span>AI-Driven Solutions</span>
                                    </h2>
                                </div>
                                <div class="item">
                                    <h2><span>Flexiable Price</span>
                                    </h2>
                                </div>
                                <div class="item">
                                    <h2><span>User Centric Design</span>
                                    </h2>
                                </div>
                                <div class="item">
                                    <h2><span>AI-Driven Solutions</span>
                                    </h2>
                                </div>
                                <div class="item">
                                    <h2><span>Flexiable Price</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End marquee ==================== -->







                <!-- ==================== Start clients ==================== -->

                <section class="clients-sa">
                    <div class="container">
                        <div class="sec-head">
                            <h2>Our Strategic <span class="highlight">Partners</span> And Affiliate Companies</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-6 md-mb30">
                                <div class="item d-flex align-items-center justify-content-center">
                                    <div class="img">
                                        <img src="{{asset('FrontendAssets/imgs/brands/1.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6 md-mb30">
                                <div class="item d-flex align-items-center justify-content-center">
                                    <div class="img">
                                        <img src="{{asset('FrontendAssets/imgs/brands/2.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6 md-mb30">
                                <div class="item d-flex align-items-center justify-content-center">
                                    <div class="img">
                                        <img src="{{asset('FrontendAssets/imgs/brands/3.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6 sm-mb30">
                                <div class="item d-flex align-items-center justify-content-center">
                                    <div class="img">
                                        <img src="{{asset('FrontendAssets/imgs/brands/4.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6 sm-mb30">
                                <div class="item d-flex align-items-center justify-content-center">
                                    <div class="img">
                                        <img src="{{asset('FrontendAssets/imgs/brands/5.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <div class="item d-flex align-items-center justify-content-center">
                                    <div class="cont sub-color">
                                        <div class="icon invert">
                                            <img src="{{asset('FrontendAssets/imgs/icons/global.svg')}}" alt="">
                                        </div>
                                        <span>125+ clients <br> worldwide</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End clients ==================== -->


                <!-- ==================== Start Testimonials ==================== -->

                <section class="testimonials-sa section-padding">
                    <div class="container">
                        <div class="sec-head">
                            <h2>What Our <span class="highlight">Clients</span> Say About Us</h2>
                        </div>
                        <div class="swiper testim-swiper swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div>
                                            <div class="rate">
                                                <h5>5.0
                                                    <span class="stars">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </h5>
                                            </div>
                                            <div class="mt-30">
                                                <h6>A studio with passionate, professional and full creativity. Much
                                                    more than i’m expect. Great services, high quality products &
                                                    affordable prices. I’m extremly satisfied!.</h6>
                                            </div>
                                        </div>
                                        <div class="info d-flex align-items-center mt-40 pt-30 bord-thin-top-light">
                                            <div>
                                                <div class="img-author">
                                                    <img src="{{asset('FrontendAssets/imgs/testim/avatar1.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info-text">
                                                <span>Bradley Gordon</span>
                                                <p>CEO & Founder, Archin Studio</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div>
                                            <div class="rate">
                                                <h5>5.0
                                                    <span class="stars">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </h5>
                                            </div>
                                            <div class="mt-30">
                                                <h6>Thank you so much for the suppot of Hubfolio team, who have been
                                                    with our business for more than 3 years. A long journey with many
                                                    exciting experiences and moments. Hubfolio will alway be our 1st
                                                    choice.</h6>
                                            </div>
                                        </div>
                                        <div class="info d-flex align-items-center mt-40 pt-30 bord-thin-top-light">
                                            <div>
                                                <div class="img-author">
                                                    <img src="{{asset('FrontendAssets/imgs/testim/avatar2.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info-text">
                                                <span>Bradley Gordon</span>
                                                <p>CEO & Founder, Archin Studio</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div>
                                            <div class="rate">
                                                <h5>5.0
                                                    <span class="stars">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </h5>
                                            </div>
                                            <div class="mt-30">
                                                <h6>Hubfolio ability to create a high-quality user interface stands out.
                                                    It’s something we placed a premium on. Recommended!.</h6>
                                            </div>
                                        </div>
                                        <div class="info d-flex align-items-center mt-40 pt-30 bord-thin-top-light">
                                            <div>
                                                <div class="img-author">
                                                    <img src="{{asset('FrontendAssets/imgs/testim/avatar3.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info-text">
                                                <span>Bradley Gordon</span>
                                                <p>CEO & Founder, Archin Studio</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Testimonials ==================== -->

                <!-- ==================== Start Awards ==================== -->

                <section class="awards-sa section-padding">
                    <div class="container">
                        <div class="sec-head">
                            <h2>Our <span class="highlight">Awards</span> And Achievements</h2>
                        </div>
                        <div>
                            <div class="item-title row">
                                <div class="col-md-4">
                                    <div>
                                        <h6 class="sub-title">hosted</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <h6 class="sub-title">Award title</h6>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-end">
                                    <div>
                                        <h6 class="sub-title">Date</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item-line row">
                                <div class="col-md-4">
                                    <div class="honors">
                                        <h6>Awwwards</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="project-title">
                                        <h6>SOTY 2023 - 1st Winner</h6>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="project-date">
                                        <span>May 2023</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item-line row">
                                <div class="col-md-4">
                                    <div class="honors">
                                        <h6>css awards</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="project-title">
                                        <h6>Top 5 Best of eCommerce Websites 2022</h6>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="project-date">
                                        <span>Dec 2022</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item-line row">
                                <div class="col-md-4">
                                    <div class="honors">
                                        <h6>Awwwards</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="project-title">
                                        <h6>Honor SOTD November, 2022r</h6>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="project-date">
                                        <span>Nov 2022</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item-line row">
                                <div class="col-md-4">
                                    <div class="honors">
                                        <h6>Behance Portfolio</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="project-title">
                                        <h6>Winner - US Behance Portfolio Review 2021</h6>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="project-date">
                                        <span>Aug 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item-line row">
                                <div class="col-md-4">
                                    <div class="honors">
                                        <h6>ui/ux global award</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="project-title">
                                        <h6>Top 10 Best of Mobile App Design 2021</h6>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="project-date">
                                        <span>Mar 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item-line row">
                                <div class="col-md-4">
                                    <div class="honors">
                                        <h6>fwa us award</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="project-title">
                                        <h6>Winner - Best of Architecture Website 2020</h6>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="project-date">
                                        <span>Sep 2020</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-80">
                            <a href="../inner_pages/about.html" class="butn butn-md butn-bord butn-rounded">
                                <div class="d-flex align-items-center">
                                    <span>Show More</span>
                                    <span class="icon pe-7s-angle-right ml-10 fz-30"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Awards ==================== -->

                <!-- ==================== Start Blog ==================== -->

                <section class="blog-sa">
                    <div class="container section-padding bord-thin-top-light">
                        <div class="sec-head">
                            <h2>Our Latest <span class="highlight">Insights</span> And Articles</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="item md-mb50">
                                    <div class="img fit-img">
                                        <img src="{{asset('FrontendAssets/imgs/blog/1.jpg')}}" alt="">
                                    </div>
                                    <div class="cont mt-30">
                                        <h6>
                                            <a href="../inner_pages/blog-details.html">Hubfolio agency revolutionizes work with the <br> power of AI-Driven</a>
                                        </h6>
                                        <div class="info d-flex align-items-center mt-20">
                                            <a href="#0" class="tag">
                                                <span>Design Trends</span>
                                            </a>
                                            <a href="#0" class="date">
                                                <span>/ May 15, 2024</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <div class="img fit-img">
                                        <img src="{{asset('FrontendAssets/imgs/blog/2.jpg')}}" alt="">
                                    </div>
                                    <div class="cont mt-30">
                                        <h6>
                                            <a href="../inner_pages/blog-details.html">Common UX painpoints in Dashboard-related <br> projects</a>
                                        </h6>
                                        <div class="info d-flex align-items-center mt-20">
                                            <a href="#0" class="tag">
                                                <span>Experience</span>
                                            </a>
                                            <a href="#0" class="date">
                                                <span>/ May 15, 2024</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Blog ==================== -->



                <!-- ==================== Start Contact ==================== -->

                <section class="contact-sa section-padding pt-0">
                    <div class="container">
                        <div class="box">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="info">
                                        <div class="contact-badge">
                                            <div class="icon"></div>
                                            <span>Let's Connect</span>
                                        </div>
                                        <div class="sec-head">
                                            <h4>Ready to bring your ideas to life? <span class="sub-color inline">Let's create something amazing together!</span></h4>
                                        </div>
                                        <div class="mt-50 md-mb80">
                                            <h6>+068 5681 96 96</h6>
                                            <span class="d-block sub-color fz-14 mt-10">Available 24/7 for urgent projects</span>
                                            <a href="../inner_pages/contact.html" class="butn butn-md butn-bord butn-rounded mt-50">
                                                <div class="d-flex align-items-center">
                                                    <span>Get Direction</span>
                                                    <span class="icon invert ml-10">
                                                        <img src="{{asset('FrontendAssets/imgs/icons/arrow-top-right.svg')}}" alt="">
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 offset-lg-1">
                                    <div class="contact-form">
                                        <form id="contact-form" method="post" action="contact.php">

                                            <div class="messages"></div>

                                            <div class="controls row">

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input id="form_name" type="text" name="name" placeholder=" " required="required">
                                                        <label for="form_name">Full Name <span class="star">*</span></label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input id="form_email" type="email" name="email" placeholder=" " required="required">
                                                        <label for="form_email">Email Address <span class="star">*</span></label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input id="form_subject" type="text" name="subject" placeholder=" " required="required">
                                                        <label for="form_subject">Subject <span class="star">*</span></label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input id="form_budget" type="text" name="budget" placeholder=" ">
                                                        <label for="form_budget">Your Budget <span class="opt sub-color">(Optional)</span></label>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <textarea id="form_message" name="message" placeholder=" " rows="4" required="required"></textarea>
                                                        <label for="form_message">Message <span class="star">*</span></label>
                                                    </div>
                                                    <div class="mt-40">
                                                        <button type="submit" class="submit-btn">
                                                            <span class="text">Send Your Message</span>
                                                            <svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="m5 12 7-7 7 7"/>
                                                                <path d="m12 19 0-14"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Contact ==================== -->



            
                 @endsection

@section('script')
@endsection