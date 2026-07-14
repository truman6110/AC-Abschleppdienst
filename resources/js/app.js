

import Alpine from 'alpinejs';

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

import './hero';