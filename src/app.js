import './scss/style.scss';
import 'bootstrap';

import { WOW } from 'wowjs';
import { Swiper, Pagination, Navigation, Thumbs } from 'swiper/js/swiper.esm.js';

/*Se inicializa el plugin para las animaciones*/
var wow = new WOW({
    live: false,
    scrollContainer: null
});

/*Todos los "load" cargan los bloques recurrentes*/
$('header').load("header.html");
$('footer').load("footer.html");

/*Script para el slider del home*/
if ($.contains(document.body, document.getElementById('slider-main'))) {

    Swiper.use([Pagination]);

    var mySwiper = new Swiper('#slider-main', {
        loop: true,
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: '.swiper-pagination',
            type: "bullets",
            clickable: true,
        }
    });
}

/*Script slider quienes somos*/
if ($.contains(document.body, document.getElementById('swiper-gallery-thumbs'))) {

    Swiper.use([Navigation, Thumbs]);

    var galleryThumbs = new Swiper('#swiper-gallery-thumbs', {
        spaceBetween: 15,
        slidesPerView: 3,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });

    var galleryTop = new Swiper('#swiper-gallery-main', {
        spaceBetween: 10,
        navigation: {
            nextEl: '.btn-slider-about-us.btn-next',
            prevEl: '.btn-slider-about-us.btn-prev',
        },
        thumbs: {
            swiper: galleryThumbs
        }
    });
}

/*Script slider interno servicios*/
if ($.contains(document.body, document.getElementById('swiper-services-thumbs'))) {

    Swiper.use([Navigation, Thumbs]);

    var galleryThumbs = new Swiper('#swiper-services-thumbs', {
        spaceBetween: 15,
        slidesPerView: 3,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });

    var galleryTop = new Swiper('#swiper-services-main', {
        spaceBetween: 10,
        navigation: {
            nextEl: '.btn-slider-services.btn-next',
            prevEl: '.btn-slider-services.btn-prev',
        },
        thumbs: {
            swiper: galleryThumbs
        }
    });
}

/*Se agregan las animaciones para toda la pagina que no cargan de menera recurrente*/
wow.init();