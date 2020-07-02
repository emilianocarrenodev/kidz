<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>KIDZ</title>
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" sizes="any">
    <link rel="stylesheet" type="text/css" href="./assets/css/bundle.min.css">
</head>

<body data-page="#page-index">
    <!--header-->
    <?php include 'header.php'; ?>
    <!--Fin header-->
    <!--Bloque banner home-->
    <section class="block-banner-main">
        <div id="slider-main" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('./assets/img/nino-header-1.png');">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="content-text d-flex flex-column justify-content-center align-items-center">
                                    <h2>Programas y Servicios</h2>
                                    <h1>QUE AYUDAN A ALCANZAR<br>EL MÁXIMO POTENCIAL DE TU HIJO</h1>
                                    <a href="#" class="btn btn-primary btn-scrollTop" data-item=".block-book-appointment">Reserva tu cita</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url('./assets/img/nino-header-2.png');">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="content-text d-flex flex-column justify-content-center align-items-center">
                                    <h2>¡Nos Renovamos !</h2>
                                    <h1>AHORA ESTAMOS PARA TI<br>EN MODO VIRTUAL</h1>
                                    <a href="#" class="btn btn-primary btn-scrollTop" data-item=".block-book-appointment">Reserva tu cita</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!--Fin bloque banner home-->
    <!--Bloque servicios-->
    <section class="block-services-list">
        <a href="neuropsicologia-evaluacion-psicoeducativa.php" target="_self">
            <div class="card">
                <h5 class="card-header type-icon-1">Neuropsicología - Evaluación Psicoeducativa</h5>
                <div class="card-body" style="background-image: url('./assets/img/img-services-4.png');"></div>
            </div>
        </a>
        <a href="psicologia-individuales.php" target="_self">
            <div class="card">
                <h5 class="card-header type-icon-2">Psicología</h5>
                <div class="card-body" style="background-image: url('./assets/img/img-services-1.png');"></div>
            </div>
        </a>
        <a href="terapia-de-lenguaje-fonoaudiologia.php" target="_self">
            <div class="card">
                <h5 class="card-header type-icon-3">Terapia de Lenguaje - Fonoaudiología</h5>
                <div class="card-body" style="background-image: url('./assets/img/img-services-2.png');"></div>
            </div>
        </a>
        <a href="terapia-ocupacional.php" target="_self">
            <div class="card">
                <h5 class="card-header type-icon-4">Terapia Ocupacional</h5>
                <div class="card-body" style="background-image: url('./assets/img/img-services-3.png');"></div>
            </div>
        </a>
        <a href="nivelaciones-academicas-psicopedagogia.php" target="_self">
            <div class="card">
                <h5 class="card-header type-icon-5">Nivelaciones Académicas - Psicopedagogía</h5>
                <div class="card-body" style="background-image: url('./assets/img/img-services-5.png');"></div>
            </div>
        </a>
    </section>
    <!--Fin bloque servicios-->
    <!--Bloque reserva tu cita-->
    <?php include 'block-book-appointment.php'; ?>
    <!--Fin bloque reserva tu cita-->
    <!--Bloque quienes somos-->
    <?php include 'block-about-us.php'; ?>
    <!--Fin bloque quienes somos-->
    <!--footer-->
    <?php include 'footer.php'; ?>
    <!--Fin footer-->
    <script type="text/javascript" src="./assets/js/bundle.min.js"></script>
</body>

</html>