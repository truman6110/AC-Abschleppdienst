document.addEventListener("DOMContentLoaded", () => {

    const slider = document.querySelector(".heroSwiper");

    if (!slider) return;

    const heroSwiper = new Swiper(slider, {

        modules: [
            SwiperModules.Navigation,
            SwiperModules.Pagination,
            SwiperModules.Autoplay,
            SwiperModules.EffectFade
        ],

        effect: "fade",

        fadeEffect: {
            crossFade: true
        },

        loop: true,

        speed: 1200,

        autoplay: {

            delay: 6500,

            disableOnInteraction: false,

            pauseOnMouseEnter: true

        },

        navigation: {

            nextEl: ".swiper-button-next",

            prevEl: ".swiper-button-prev"

        },

        pagination: {

            el: ".swiper-pagination",

            clickable: true

        },

        on: {

            init() {

                animateSlide(this.slides[this.activeIndex]);

            },

            slideChangeTransitionStart() {

                resetSlides();

            },

            slideChangeTransitionEnd() {

                animateSlide(this.slides[this.activeIndex]);

            }

        }

    });

});


function resetSlides() {

    document.querySelectorAll(".hero-container").forEach(container => {

        container.style.opacity = "0";

        container.style.transform = "translateY(60px)";

    });

}


function animateSlide(slide) {

    const content = slide.querySelector(".hero-container");

    if (!content) return;

    content.style.transition = "all .8s ease";

    requestAnimationFrame(() => {

        content.style.opacity = "1";

        content.style.transform = "translateY(0)";

    });

}