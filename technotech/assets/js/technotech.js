$(document).ready(function () {


    // rv-31-app-landing -===========================


    //swiper for client feedback 

    var rv31feedbackSlider = new Swiper(".rv-31-testimonial__feedback", {
        slidesPerView: 1,
        spaceBetween: 50,
        loop: true,
        autoplay: true,
        navigation: {
            nextEl: ".rv-31-cf-arrow-btn-right",
            prevEl: ".rv-31-cf-arrow-btn-left",
        },

    });

    // swiper for gallary 
    var rv31gallarySlider = new Swiper(".rv-31-gallary-slider", {

        centeredSlides: true,
        initialSlide: 3,
        slidesPerView: 5,
        spaceBetween: 24,
        freeMode: true,
        pagination: {
            el: ".rv-31-gallary-slider-controller",
            clickable: true,
            bulletClass: "rv-34-porfolio-bullet"
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            480: {
                centeredSlides: true,
                spaceBetween: 15,
                slidesPerView: 1.5,
            },
            768: {
                spaceBetween: 15,
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1400: {
                slidesPerView: 5,
                spaceBetween: 24,
            }
        },
    });

    // pricing monthly / annually btn active
    $(".rv-31-pricing-subtitle-btns button").click(function () {
        $(this).addClass("btn-monthly");
        $(this).siblings().removeClass("btn-monthly");
    });



    // rv-32-seo ===============================================

    // swiper for team 
    var rv32teamSlider = new Swiper(".rv-32-team-slider", {
        slidesPerView: 3,
        spaceBetween: 24,
        autoplay: true,
        freeMode: true,
        pagination: {
            el: ".rv-32-team-controller",
            clickable: true,
            bulletClass: "rv-34-porfolio-bullet"
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            480: {
                centeredSlides: true,
                spaceBetween: 15,
                slidesPerView: 1.5,
            },
            768: {
                spaceBetween: 15,
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1400: {
                slidesPerView: 4,
                spaceBetween: 24,
            }
        },
    });

    // swiper for testimonial 
    var rv32testimonialSlider = new Swiper(".rv-32-testimonial-swiper-container", {
        slidesPerView: 5,
        spaceBetween: 24,
        autoplay: true,
        freeMode: true,
        loop: true,
        navigation: {
            nextEl: ".rv-32-testimonial-btn-right",
            prevEl: ".rv-32-testimonial-btn-left",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            480: {
                centeredSlides: true,
                spaceBetween: 15,
                slidesPerView: 1.5,
            },
            768: {
                spaceBetween: 15,
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1600: {
                slidesPerView: 5,
                spaceBetween: 24,
            }
        },
    });

    // rv- 33 - security ================================================


    // Tab button  active / rv-33-about tab section
    $(".rv-33-tab-btn").click(function () {
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
    });


    $("#tab-item-01").click(function () {
        $("#tab-pane-01").addClass("active");
        $("#tab-pane-02, #tab-pane-03, #tab-pane-04").removeClass("active");
    });

    $("#tab-item-02").click(function () {
        $("#tab-pane-02").addClass("active");
        $("#tab-pane-01, #tab-pane-03, #tab-pane-04").removeClass("active");
    });

    $("#tab-item-03").click(function () {
        $("#tab-pane-03").addClass("active");
        $("#tab-pane-01, #tab-pane-02, #tab-pane-04").removeClass("active");
    });

    $("#tab-item-04").click(function () {
        $("#tab-pane-04").addClass("active");
        $("#tab-pane-01, #tab-pane-02, #tab-pane-03").removeClass("active");
    });


    // pricing monthly / annually btn active
    $(".rv-33-pricing-subtitle-btns button").click(function () {
        $(this).addClass("rv-33-btn-monthly");
        $(this).siblings().removeClass("rv-33-btn-monthly");
    });

    new VenoBox({
        selector: '.venoBox-img-link',
        numeration: true,
        infinigall: true,
        share: true,
        spinner: 'rotating-plane'
    });

    // swiper for clients 
    var rv33clientSlider = new Swiper(".rv-33-client-slider", {

        loop: true,
        freeMode: true,
        autoplay: {
            delay: 0,
        },

        slidesPerView: 6,
        speed: 2000,


        breakpoints: {
            0: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            480: {
                spaceBetween: 10,
                slidesPerView: 3,
            },
            768: {
                spaceBetween: 15,
                slidesPerView: 4,
            },
            992: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
            1400: {
                slidesPerView: 6,
                spaceBetween: 24,
            }
        },
    });

    // swiper for blog 
    var rv33blogSlider = new Swiper(".rv-33-blog-swiper-container", {
        slidesPerView: 2,
        spaceBetween: 30,
        loop: true,
        autoplay: true,
        freeMode: true,
        pagination: {
            el: ".rv-33-blog-controller",
            clickable: true,
            bulletClass: "rv-34-porfolio-bullet"
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            480: {
                spaceBetween: 10,
                slidesPerView: 1,
            },
            768: {
                spaceBetween: 15,
                slidesPerView: 2,
            },
            992: {
                spaceBetween: 20,
            },
            1400: {
                spaceBetween: 24,
            }
        },

    });

    // rv-34-it service =========================================


    // search field toggle 
    $('#search-34').click(function () {
        $('#search-field').addClass("active")
    });
    $('.close-btn').click(function () {
        $('#search-field').removeClass("active")
    });

    // swiper for portfolio 
    var rv34portfolioSlider = new Swiper(".rv-34-portfolio-slider", {
        slidesPerView: 4,
        spaceBetween: 20,
        autoplay: true,
        freeMode: true,
        pagination: {
            el: ".rv-34-porfolio-slider-controller",
            clickable: true,
            bulletClass: "rv-34-porfolio-bullet"
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            480: {
                spaceBetween: 10,
                slidesPerView: 1.5,
                centeredSlides: true,
            },
            768: {
                spaceBetween: 15,
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1400: {
                slidesPerView: 4,
                spaceBetween: 24,
            }
        },
    });

    // swiper for client testimonial
    var rv34testimonialSlider = new Swiper(".rv-34-testimonial-swiper-container", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: true,
        navigation: {
            nextEl: ".rv-28-cf-arrow-btn-right",
            prevEl: ".rv-28-cf-arrow-btn-left",
        },
        pagination: {
            el: ".rv-28-testimonial-count",
            type: "fraction",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            480: {
                centeredSlides: true,
                spaceBetween: 15,

            },
        }

    });

    // swiper for blog 
    var rv34blogSlider = new Swiper(".rv-34-blog-slider", {
        slidesPerView: 3,
        spaceBetween: 24,
        autoplay: true,
        freeMode: true,
        loop: true,
        pagination: {
            el: ".rv-34-blog-controller",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            480: {
                centeredSlides: true,
                spaceBetween: 15,
                slidesPerView: 1.5,
            },
            768: {
                spaceBetween: 15,
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1400: {
                slidesPerView: 3,
                spaceBetween: 24,
            }
        },

    });

    //rv-35-startup ==========================

    // swiper for clients 
    var rv35clientSlider = new Swiper(".rv-35-client-slider", {
        slidesPerView: 6,
        loop: true,
        autoplay: {
            delay: 0,
        },
        grabCursor: true,
        speed: 2000,
        freeMode: true,

        breakpoints: {
            0: {
                slidesPerView: 2,
            },
            480: {
                slidesPerView: 2,
            },
            576: {
                slidesPerView: 3,
            },
            768: {

                slidesPerView: 3,
            },
            992: {
                slidesPerView: 4,

            },
            1200: {
                slidesPerView: 5,

            },
            1400: {
                slidesPerView: 6,
            }
        },
    });


    // swiper for blog 
    var rv35BlogSlider = new Swiper(".rv-35-blog-slider", {
        slidesPerView: 3,
        spaceBetween: 24,
        autoplay: true,
        freeMode: true,
        navigation: {
            nextEl: ".rv-35-blog-btn-right",
            prevEl: ".rv-35-blog-btn-left",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,

            },
            768: {

                slidesPerView: 1.5,
            },

            992: {
                slidesPerView: 2,
            },
        },
    });

    // swiper for testimonial 
    var rv35testimonialslider = new Swiper(".rv-35-testimonial-slider", {
        slidesPerView: 1,
        autoplay: true,
        freeMode: true,
        pagination: {
            el: ".rv-35-testimonial-controller",
            clickable: true,
            bulletClass: "rv-34-porfolio-bullet"
        },
    });

    // rv-35-accordion -------===================

    let accordionHeaders = document.getElementsByClassName("rv-35-accordion-header");
    let accordionItems = document.getElementsByClassName("rv-35-accordion-item");

    // Convert HTMLCollection to array and iterate over each header
    Array.from(accordionHeaders).forEach(header => {
        header.addEventListener('click', function () {
            // Remove the 'show-accordion' class from all accordion items
            Array.from(accordionItems).forEach(item => {
                item.classList.remove('show-accordion');
            });

            // Add the 'show-accordion' class to the parent accordion item of the clicked header
            this.parentNode.classList.add('show-accordion');
        });
    });

    //============= rv-36-digital marketing ==========================

    // swiper for banner 
    var rv36bannerSlider = new Swiper(".rv-36-banner-slider", {

        slidesPerView: 1,
        autoplay: true,
        freeMode: true,
        pagination: {
            el: ".rv-36-banner-controller",
            clickable: true,
            bulletClass: "rv-34-porfolio-bullet"
        },
    });

    // swiper for team 
    var rv36teamslider = new Swiper(".rv-36-team-slider", {
        slidesPerView: 4,
        spaceBetween: 24,
        autoplay: true,
        freeMode: true,
        pagination: {
            el: ".rv-36-team-controller",
            clickable: true,
            bulletClass: "rv-34-porfolio-bullet"
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            480: {
                centeredSlides: true,
                spaceBetween: 15,
                slidesPerView: 1.5,
            },
            768: {
                spaceBetween: 15,
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1400: {
                slidesPerView: 4,
                spaceBetween: 24,
            }
        },
    });
    // swiper for testimonial 
    var rv36testimonialslider = new Swiper(".rv-36-testimonial-slider", {
        slidesPerView: 1,
        autoplay: true,
        freeMode: true,
        pagination: {
            el: ".rv-36-testimonial-controller",
            clickable: true,
            bulletClass: "rv-34-porfolio-bullet"
        },
    });

    // mix-it up filtering ======================

    // Check if the filtering class exists
    if (document.querySelector('.gallary-filter')) {
        // If the class exists, initialize mixitup plugin
        var mixer = mixitup('.gallary-filter', {
            animation: {
                effects: 'fade rotateZ(180deg)',
                duration: 800
            }
        });
    }

    // rv-37-Software ===========================================

    // swiper for gallary 
    var rv36teamslider = new Swiper(".rv-37-gallary-container", {
        slidesPerView: 5,
        spaceBetween: 24,
        freeMode: true,

        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            480: {
                spaceBetween: 15,
                slidesPerView: 2,
            },
            768: {
                spaceBetween: 20,
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 24,
            },
            1400: {
                slidesPerView: 5,
                spaceBetween: 30,
            }
        },

    });

    // swiper for blog 
    var rv37blogSlider = new Swiper(".rv-37-blog-slider", {
        slidesPerView: 3,
        spaceBetween: 24,
        autoplay: true,
        freeMode: true,
        loop: true,
        pagination: {
            el: ".rv-37-blog-controller",
            clickable: true,
            bulletClass: "rv-34-porfolio-bullet"
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            480: {
                centeredSlides: true,
                spaceBetween: 15,
                slidesPerView: 1.5,
            },
            768: {
                spaceBetween: 15,
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1400: {
                slidesPerView: 3,
                spaceBetween: 24,
            }
        },
    });


    // veno box video / img player

    new VenoBox({
        selector: '.my-video-links',

    });

    new VenoBox({
        selector: '.my-image-links',
        numeration: true,
        infinigall: true,
        share: true,
        spinner: 'rotating-plane'
    });





});