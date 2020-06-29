import './scss/style.scss';
import 'bootstrap';

import { Swiper, Pagination, Navigation, Thumbs } from 'swiper/js/swiper.esm.js';

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

$('header').on('click', '.btn-scrollTop', function(event) {
    event.preventDefault();

    var item = $(this).data('item');

    $('body,html').animate({ scrollTop: $(item).offset().top - 50 }, 3000, 'swing');
});

$(document).on('submit', '#form-contact', function(event) {
    event.preventDefault();

    $('#form-contact .btn-primary').prop('disabled', true);

    $.ajax({
        cache: false,
        type: $(this).attr("method"),
        url: $(this).attr("action"),
        data: $(this).serialize(),
        success: function(data) {

            $('.alert').hide();
            $('#form-contact .btn-primary').prop('disabled', false);

            if (data) {
                $('.alert-success').fadeIn();
                $("#form-contact")[0].reset();
            } else {
                $('.alert-danger').fadeIn();
            }

            setTimeout(function() { $('.alert').hide(); }, 5000);
        }
    });
});