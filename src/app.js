import './scss/style.scss';
import 'bootstrap';

import { Swiper, Pagination, Navigation, Thumbs, Autoplay } from 'swiper/js/swiper.esm.js';

/*Script para el slider del home*/
if ($.contains(document.body, document.getElementById('slider-main'))) {

    Swiper.use([Pagination, Autoplay]);

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

$(document).on('click', '.btn-scrollTop', function(event) {
    event.preventDefault();

    var item = $(this).data('item');

    $('body,html').animate({ scrollTop: $(item).offset().top - 50 }, 3000, 'swing');
});

var arrayListServices = [];

arrayListServices['Virtual'] = ['Psicología', 'Terapia de Lenguaje–Fonoaudiología', 'Terapia Ocupacional', 'Neuropsicología– Evaluacion Psicoeducativa'];
arrayListServices['Domicilio'] = ['Psicología', 'Terapia de Lenguaje–Fonoaudiología', 'Terapia Ocupacional', 'Neuropsicología– Evaluacion Psicoeducativa'];
arrayListServices['Presencial'] = ['Psicología', 'Terapia de Lenguaje–Fonoaudiología', 'Terapia Ocupacional', 'Neuropsicología– Evaluacion Psicoeducativa'];

$(document).on('change', '#formCategory', function(event) {
    event.preventDefault();

    var value = $(this).val();

    $('#formService').empty();

    arrayListServices[value].forEach(function(item, index) {
        if (index == 3) {
            $("#formService").prepend("<option value='" + item + "' selected>" + item + "</option>");
        } else {
            $("#formService").prepend("<option value='" + item + "'>" + item + "</option>");
        }
    });

});

function changeTimeline(countForm) {

    $('#form-book-appointment .form-timeline span').removeClass('active');

    switch (countForm) {
        case 0:
            $('#form-book-appointment .form-timeline .timeline-1').addClass('active');
            break;
        case 1:
            $('#form-book-appointment .form-timeline .timeline-2').addClass('active');
            break;
        case 2:
            $('#form-book-appointment .form-timeline .timeline-3').addClass('active');
            break;
    }
}

var countForm = 0;

$(document).on('submit', '#form-book-appointment', function(event) {
    event.preventDefault();

    countForm++;

    $('#form-book-appointment .btn-primary').removeClass('type-opacity');

    if (countForm < 3) {

        $('#form-book-appointment .form-items').addClass('d-none');
        $('#form-book-appointment .form-items-' + countForm).removeClass('d-none');

        changeTimeline(countForm);

    } else {

        $('#form-book-appointment .btn-primary').prop('disabled', true);

        $('.alert-danger').hide();

        $.ajax({
            cache: false,
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: $(this).serialize(),
            success: function(data) {

                var obj = JSON.parse(data);

                $('#form-book-appointment .btn-primary').prop('disabled', false);

                if (obj.alert == 'valid') {

                    $('.section-form').hide();
                    $('.section-form.item-2').fadeIn();

                } else {
                    $('.alert-danger').fadeIn();
                }
            }
        });
    }
});

$(document).on('click', '#form-book-appointment .btn-back', function(event) {
    event.preventDefault();

    if (countForm >= 0) {

        countForm--;

        if (countForm < 0) {
            countForm = 0;
        }

        $('#form-book-appointment .form-items').addClass('d-none');
        $('#form-book-appointment .form-items-' + countForm).removeClass('d-none');

        changeTimeline(countForm);

        if (countForm == 0) {

            $('#form-book-appointment .btn-back').removeClass('type-opacity').addClass('type-opacity');
        }
    }
});