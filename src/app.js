import './scss/style.scss';
import 'bootstrap';

import { WOW } from 'wowjs';
import { Swiper } from 'swiper/js/swiper.esm.js';

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

    var mySwiper = new Swiper('#slider-main', {
        autoplay: {
            delay: 5000,
        },
        loop: true
    });
}

/*Se agregan las animaciones para toda la pagina que no cargan de menera recurrente*/
wow.init();