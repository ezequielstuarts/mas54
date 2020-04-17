(function($) {
    "use strict";

    $('.color-switcher li.light').on('click', function() {
        $('body').addClass('light-color');
    });
    $('.color-switcher li.dark').on('click', function() {
        $('body').removeClass('light-color');
    });
    // responsive-menu tigger
    $(".menu").click(function() {
        $(".menu-area,.menu").toggleClass("active");
    });

    new WOW().init();


    $('ul.metismenu').metisMenu();


    // slider-active
    $('.slider-active').owlCarousel({
        margin: 0,
        loop: true,
        autoplay: false,
        autoplayTimeout: 11000,
        animateOut: 'slideOutDown',
        animateIn: 'slideInDown',
        nav: true,
        smartSpeed: 1200,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        URLhashListener: true,
        startPosition: 'URLHash',
        responsive: {
            0: {
                items: 1,
            },
            450: {
                items: 1,
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    // slider-active
    $(".slider-active").on('translate.owl.carousel', function() {
        $('.slider-items h2').removeClass('fadeInUp animated').hide();
        $('.slider-items h4').removeClass('slideInDown animated').hide();
        $('.slider-items p').removeClass('fadeInUp animated').hide();
    });

    $(".slider-active").on('translated.owl.carousel', function() {
        $('.owl-item.active .slider-items h2').addClass('fadeInUp animated').show();
        $('.owl-item.active .slider-items h4').addClass('slideInDown animated').show();
        $('.owl-item.active .slider-items p').addClass('slideInUp animated').show();
    });




    //slider-area background setting
    function sliderBgSetting() {
        if ($(".slider-active .slider-items").length) {
            $(".slider-active .slider-items").each(function() {
                var $this = $(this);
                var img = $this.find(".slider").attr("src");

                $this.css({
                    backgroundImage: "url(" + img + ")",
                    backgroundSize: "cover",
                    backgroundPosition: "center center"
                })
            });
        }
    }
    sliderBgSetting()
    
    // slider-active
    $('.architectur-slider-active').owlCarousel({
        margin: 0,
        autoplay: true,
        autoplayTimeout: 7000,
        loop: true,
        animateOut: 'slideOutDown',
        animateIn: 'slideInDown',
        nav: true,
        smartSpeed: 1200,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        URLhashListener: true,
        startPosition: 'URLHash',
        responsive: {
            0: {
                items: 1,
            },
            450: {
                items: 1,
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    // masonry effect
    $('.grid').imagesLoaded(function() {
        var $grid = $('.grid').isotope({
            itemSelector: '.items',
            percentPosition: true,
            masonry: {
                columnWidth: '.items',
            }
        });
    });

    // slider-active
    $('.about-active').owlCarousel({
        margin: 0,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        nav: false,
        smartSpeed: 1000,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1,
            },
            450: {
                items: 1,
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    /*-------------------------------------------------------
        setTwoColEqHeight
    -----------------------------------------------------*/
    if ($(".blog-area").length) {
        var post = $(".blog-wrap .blog-img");

        post.each(function() {
            var $this = $(this);
            var entryMedia = $this.find("img");
            var entryMediaPic = entryMedia.attr("src");

            $this.css({
                backgroundImage: "url(" + entryMediaPic + ")",
                backgroundSize: "cover",
                backgroundPosition: "center center",
            })
        })
    }

    function setTwoColEqHeight($col1, $col2) {
        var firstCol = $col1,
            secondCol = $col2,
            firstColHeight = $col1.innerHeight(),
            secondColHeight = $col2.innerHeight();

        if (firstColHeight > secondColHeight) {
            secondCol.css({
                "height": firstColHeight + 1 + "px"
            })
        } else {
            firstCol.css({
                "height": secondColHeight + 1 + "px"
            })
        }
    }
    setTwoColEqHeight($(".blog-wrap .blog-img"), $(".blog-wrap .blog-content"));


    $(window).on("load", function() {
        setTwoColEqHeight($(".blog-wrap .blog-img"), $(".blog-wrap .blog-content"));
    });
    /*==========================================================================
        WHEN DOCUMENT LOADING
    ==========================================================================*/


    // // stickey menu
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop(),
            mainHeader = $('#sticky-header'),
            mainHeaderHeight = mainHeader.innerHeight();

        // console.log(mainHeader.innerHeight());
        if (scroll > 265) {
            $("#sticky-header").addClass("sticky-menu");
        } else {
            $("#sticky-header").removeClass("sticky-menu");
        }
    });


    /*--------------------------
     scrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-arrow-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    // smttoh-scroll
    function scrollSpeed() {
        $.scrollSpeed(200, 800);
    };

    /*--
    Magnific Popup
    ------------------------*/
    $('.popup').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }

    });
    // popup video
    $('.video-popup').magnificPopup({
        type: 'iframe',
        gallery: {
            enabled: true
        }
    })



    // swipper slider
    var interleaveOffset = 0.5;

    var swiperOptions = {
        loop: true,
        speed: 1000,
        grabCursor: true,
        watchSlidesProgress: true,
        mousewheelControl: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        keyboardControl: true,
        on: {
            progress: function() {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    var slideProgress = swiper.slides[i].progress;
                    var innerOffset = swiper.width * interleaveOffset;
                    var innerTranslate = slideProgress * innerOffset;
                    swiper.slides[i].querySelector(".slide-inner").style.transform =
                        "translate3d(" + innerTranslate + "px, 0, 0)";
                }
            },
            touchStart: function() {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = "";
                }
            },
            setTransition: function(speed) {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = speed + "ms";
                    swiper.slides[i].querySelector(".slide-inner").style.transition =
                        speed + "ms";
                }
            }
        }
    };

    var swiper = new Swiper(".swiper-container", swiperOptions);




    /*====================================================
                    load-function
    ====================================================*/

    $(window).on('load', function() {
        /*-- preloader ---*/
        $('.preloader-wrap').fadeOut();
        /*-- Scroll Speed---*/
        scrollSpeed();
    });



    $(window).on("scroll", function() {
        /*-- preloader ---*/
        $('.preloader-wrap').fadeOut();
    });


    /*---------------------
    // Ajax Contact Form
    --------------------- */

    $('.cf-msg').hide();
    $('form#cf button#submit').on('click', function() {
        var fname = $('#fname').val();
        var subject = $('#subject').val();
        var email = $('#email').val();
        var msg = $('#msg').val();
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!regex.test(email)) {
            alert('Ingrese un email válido por favor!');
            return false;
        }

        fname = $.trim(fname);
        subject = $.trim(subject);
        email = $.trim(email);
        msg = $.trim(msg);

        if (fname != '' && email != '' && msg != '') {
            var values = "fname=" + fname + "&subject=" + subject + "&email=" + email + " &msg=" + msg;
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: values,
                success: function() {
                    $('#fname').val('');
                    $('#subject').val('');
                    $('#email').val('');
                    $('#msg').val('');

                    $('.cf-msg').fadeIn().html('<div class="alert alert-success"><strong>Enviado!</strong> Hemos enviado su consulta.</div>');
                    setTimeout(function() {
                        $('.cf-msg').fadeOut('slow');
                    }, 4000);
                }
            });
        } else {
            $('.cf-msg').fadeIn().html('<div class="alert alert-danger"><strong>Atención!</strong> Complete la información correctamente.</div>')
        }
        return false;
    });

})(jQuery);