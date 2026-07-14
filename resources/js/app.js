

import Alpine from 'alpinejs';
import './products';
import './hero';

window.Alpine = Alpine;

Alpine.start();

import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay, EffectFade } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';

window.Swiper = Swiper;
window.SwiperModules = {
    Navigation,
    Pagination,
    Autoplay,
    EffectFade
};

document.querySelectorAll('.thumbnail').forEach(image => {

    image.addEventListener('click', function () {

        document.getElementById('main-image').src = this.src;

        document.querySelectorAll('.thumbnail').forEach(i => {

            i.classList.remove('border-yellow-400');

        });

        this.classList.add('border-yellow-400');

    });

});
/* ===========================================
   MOBILE MENU
=========================================== */

document.addEventListener("DOMContentLoaded", () => {

    const button = document.getElementById("mobile-menu-button");
    const menu = document.getElementById("mobile-menu");
    const sidebar = document.getElementById("mobile-sidebar");
    const overlay = document.getElementById("mobile-overlay");
    const close = document.getElementById("mobile-menu-close");
    const links = document.querySelectorAll(".mobile-link");

    if (!button || !menu || !sidebar) return;

    function openMenu() {

        menu.classList.remove("hidden");

        setTimeout(() => {

            sidebar.classList.remove("translate-x-full");

        }, 10);

        document.body.style.overflow = "hidden";
    }

    function closeMenu() {

        sidebar.classList.add("translate-x-full");

        setTimeout(() => {

            menu.classList.add("hidden");

        }, 300);

        document.body.style.overflow = "";
    }

    button.addEventListener("click", openMenu);

    close.addEventListener("click", closeMenu);

    overlay.addEventListener("click", closeMenu);

    links.forEach(link => {

        link.addEventListener("click", closeMenu);

    });

});


/* ===========================================
   PRODUCT GALLERY
=========================================== */

document.addEventListener("DOMContentLoaded", () => {

    const main = document.getElementById("main-image");

    if (!main) return;

    document.querySelectorAll(".thumbnail").forEach(image => {

        image.addEventListener("click", function () {

            main.src = this.src;

            document.querySelectorAll(".thumbnail").forEach(i => {

                i.classList.remove("border-yellow-400");

            });

            this.classList.add("border-yellow-400");

        });

    });

});