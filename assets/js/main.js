/**
 * Main Theme Engine
 * 
 * @package seospecialistusa
 */

document.addEventListener('DOMContentLoaded', function () {

    /**
     * Floating CTA Scroll Visibility
     */
    const floatingCta = document.getElementById('floatingCta');

    if (floatingCta) {
        window.addEventListener('scroll', function () {
            // Show button after 350px scroll
            if (window.scrollY > 350) {
                floatingCta.classList.add('show');
            } else {
                floatingCta.classList.remove('show');
            }
        });
    }

    /**
     * Sticky Header Logic
     */
    const siteHeader = document.querySelector('.site-header');
    if (siteHeader) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 100) {
                siteHeader.classList.add('header-fixed');
                document.body.classList.add('header-scrolled');
            } else {
                siteHeader.classList.remove('header-fixed');
                document.body.classList.remove('header-scrolled');
            }
        });
    }

    /**
     * Testimonials Swiper Initialization
     */
    const testimonialSwiper = new Swiper('.testimonials-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 5000,
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
        breakpoints: {
            768: {
                slidesPerView: 2,
            }
        }
    });

    /**
     * Growth Swiper Initialization
     */
    const growthSwiper = new Swiper('.growth-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 4000,
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
        breakpoints: {
            576: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            }
        }
    });

    /**
     * Search Overlay Logic
     */
    const searchTrigger = document.getElementById('headerSearchTrigger');
    const searchOverlay = document.getElementById('searchOverlay');
    const searchClose = document.getElementById('searchClose');
    const searchField = document.getElementById('searchField');

    if (searchTrigger && searchOverlay) {
        searchTrigger.addEventListener('click', function () {
            searchOverlay.classList.add('is-active');
            document.body.style.overflow = 'hidden'; // Prevent scroll
            setTimeout(() => {
                if (searchField) searchField.focus();
            }, 300);
        });

        if (searchClose) {
            searchClose.addEventListener('click', function () {
                searchOverlay.classList.remove('is-active');
                document.body.style.overflow = ''; // Restore scroll
            });
        }

        // Close on ESC key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && searchOverlay.classList.contains('is-active')) {
                searchOverlay.classList.remove('is-active');
                document.body.style.overflow = '';
            }
        });
    }

});
