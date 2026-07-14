

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