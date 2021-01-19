
(function($) {
    // 'use strict';

    // Main Navigation
    $( '.hamburger-menu' ).on( 'click', function() {
        $(this).toggleClass('open');
        $('.site-navigation').toggleClass('show');
    });

    var countdown_date = $('.countdown').data("date");

    $('.countdown').countdown(countdown_date, function(event) {
        $('.dday').html(event.strftime('%-D'));
        $('.dhour').html(event.strftime('%-H'));
        $('.dmin').html(event.strftime('%-M'));
        $('.dsec').html(event.strftime('%-S'));
    });

    // Events Slider
    var next_event_slider = new Swiper('.next-event-slider', {
        slidesPerView: 4,
        spaceBetween: 20,
        loop: true,
        centeredSlides: true,
        breakpoints: {
            // when window width is <= 320px
            576: {
                slidesPerView: 1
            },
            // when window width is <= 480px
            768: {
                slidesPerView: 2
            },
            // when window width is <= 640px
            1200: {
                slidesPerView: 3
            }
        },
        navigation: {
            nextEl: '.next-event-slider-wrap .swiper-button-next'
        }
    });

    // Testimonial slider
    var testimonialsSlider = new Swiper('.testimonials-slider', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.testimonials-container .swiper-button-next'
        }
    });

    // Buy Tickets Form
    $(".increase-ticket").click(function() {
        var $n = $(this)
            .parent(".number-of-tickets")
            .parent(".flex")
            .parent(".ticket-row")
            .find(".ticket-count");
        $n.val(Number($n.val())+1 );
    });

    $(".decrease-ticket").click(function() {
        var $n = $(this)
            .parent(".number-of-tickets")
            .parent(".flex")
            .parent(".ticket-row")
            .find(".ticket-count");
        var amount = Number($n.val());
        if (amount > 0) {
            $n.val(amount-1);
        }
    });

    $(".clear-ticket-count").on( 'click', function() {
        var $count = $('.ticket-count');
        $count.val('1');
    });

    // Tabs
    $(function() {
        $('.tab-content:first-child').show();

        $('.tab-nav').bind('click', function(e) {
            $this = $(this);
            $tabs = $this.parent().parent().next();
            $target = $($this.data("target"));
            $this.siblings().removeClass('active');
            $target.siblings().css("display", "none");
            $this.addClass('active');
            $target.fadeIn("slow");
        });

        $('.tab-nav:first-child').trigger('click');
    });

    // Accordion & Toggle
    $('.accordion-wrap.type-accordion').collapsible({
        accordion: true,
        contentOpen: 0,
        arrowRclass: 'arrow-r',
        arrowDclass: 'arrow-d'
    });

    $('.accordion-wrap .entry-title').on('click', function() {
        $('.accordion-wrap .entry-title').removeClass('active');
        $(this).addClass('active');
    });

    // Circular Progress Bar
    $('#hard_work').circleProgress({
        startAngle: -Math.PI / 4 * 2,
        value: 0.75,
        size: 220,
        thickness: 3,
        fill: {
            gradient: ["#00d1ff", "#1effc5"]
        }
    }).on('circle-animation-progress', function(event, progress) {
        $(this).find('strong').html(Math.round(75 * progress) + '<span>%</span>');
    });

    $('#good_music').circleProgress({
        startAngle: -Math.PI / 4 * 2,
        value: 0.83,
        size: 220,
        thickness: 3,
        fill: {
            gradient: ["#00d1ff", "#1effc5"]
        }
    }).on('circle-animation-progress', function(event, progress) {
        $(this).find('strong').html(Math.round(83 * progress) + '<span>%</span>');
    });

    $('#power').circleProgress({
        startAngle: -Math.PI / 4 * 2,
        value: 0.65,
        size: 220,
        thickness: 3,
        fill: {
            gradient: ["#00d1ff", "#1effc5"]
        }
    }).on('circle-animation-progress', function(event, progress) {
        $(this).find('strong').html(Math.round(65 * progress) + '<span>%</span>');
    });

    $('#fun_time').circleProgress({
        startAngle: -Math.PI / 4 * 2,
        value: 1,
        size: 220,
        thickness: 3,
        fill: {
            gradient: ["#00d1ff", "#1effc5"]
        }
    }).on('circle-animation-progress', function(event, progress) {
        $(this).find('strong').html(Math.round(100 * progress) + '<span>%</span>');
    });

    // Counter
    $(".start-counter").each(function () {
        var counter = $(this);

        counter.countTo({
            formatter: function (value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            }
        });
    });

    // Load more events
    var $container      = $('.blog-list-page');
    var $item           = $('.single-blog-content');

    $item.slice(0, 6).addClass('visible');

    $('.load-more .btn').on('click', function (e) {
        e.preventDefault();

        $('.single-blog-content:hidden').slice(0, 6).addClass('visible');
        $container.masonry();
    });

    // Back to Top
    if ( $( '.back-to-top' ).length) {
        var scrollTrigger = 500, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('.back-to-top').addClass('show');
                } else {
                    $('.back-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('.back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 800);
        });
    }

})(jQuery);