<?php require('server/data/data.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.min.css">
    <title>Inicio | <?= $info['title'] ?> | Impresión y Diseño en Alcoy</title>
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="nav">
        <!-- Logo -->
        <div class="nav__logo">
            <img class="nav__logo-img" src="assets/img/logos/logo-mini.png" alt="Logo <?= $info['title'] ?> Alcoy" />
        </div>
        <!-- Links navegación -->
        <div class="nav__nav">
            <ul class="nav__links">
                <li class="nav__item">
                    <a href="inicio" class="nav__link">Inicio</a>
                </li>
                <li class="nav__item">
                    <a href="nosotros" class="nav__link">Nosotros</a>
                </li>
                <li class="nav__item">
                    <a href="novedades" class="nav__link">Novedades</a>
                </li>
                <li class="nav__item">
                    <a href="coronavirus" class="nav__link">Coronavirus</a>
                </li>
                <li class="nav__item">
                    <a href="contacto" class="nav__link">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero section -->
    <header class="hero">
        <div class="hero__overlay">
            <h1 class="heading-primary text-white">Bienvenido a <br />
                <?= $info['title'] ?></h1>
            <p class="paragraph-desc text-white">Somos una copistería ubicada en Alcoy (Alicante). Contamos con más de diez años de experiencia en nuestro sector. Nos hemos convertido en todo un referente local en servicios de impresión, edición de vídeo, revelado fotográfico, diseño gráfico y productos de papelería. </p>
        </div>
        <div class="hero__arrow">
            <img src="assets/img/icons/ico-arrow-down.svg" class="hero__arrow-img" alt="Icono Flecha Abajo Ver Más" title="Ver Más" />
        </div>
    </header>

    <main class="container">
        <!-- Sección servicios -->
        <section class="services">
            <div class="text-center">
                <h2 class="heading-secondary text-secondary ">Servicios</h2>
                <div class="text-bar"></div>
                <p class="paragraph-sub">Ofrecemos una serie de productos y servicios de primera calidad.</p>
            </div>

            <div class="services__wrapper">
                <?php
                $numOfCols = 3;
                $rowCount = 0;
                foreach ($services as $i => $service) {
                    if ($rowCount % $numOfCols == 0) { ?> <div class="flex-row"> <?php }
                                                                                $rowCount++; ?>
                        <article class="service-card">
                            <div class="top-bar"></div>
                            <div class="service-card__img-wrapper">
                                <img src="assets/img/icons/<?= $services[$i]['img'] ?>" alt="<?= $services[$i]['title'] ?> imagen del servicio" class="service-card__img" />
                            </div>
                            <div class="service-card__text-wrapper">
                                <h3 class="heading-tertiary text-primary"><?= $services[$i]['title'] ?></h3>
                                <p class="paragraph-info"><?= $services[$i]['text'] ?></p>
                            </div>
                        </article>
                        <?php
                        if ($rowCount % $numOfCols == 0) { ?> </div>
                <?php }
                    } ?>
            </div>

        </section>

        <!-- Sección regalos personalizados -->
        <section class="gifts">
            <div class="text-center">
                <h2 class="heading-secondary text-white">Regalos Personalizados</h2>
                <div class="text-bar"></div>
                <p class="paragraph-sub text-white">Estamos constantement buscando formas de ofrecer más y mejores productos a nuestros clientes,
                    y gracias a nuestros compañeros de Regalos Personales, ofrecemos un catálogo de regalos para nuestros
                    clientes. Contamos con más de 100 productos.</p>
            </div>
            <div class="gift">
                <img src="assets/img/products/regalos-personalizados.svg" alt="Regalos Personalizados" class="gift__img">
                <a href="https://bit.ly/3eJYj4y" class="btn gift__link">Click para saber más</a>
            </div>
        </section>

        <!-- Seccion -->
        <section class="">
            <h1>Adasdas</h1>
        </section>
    </main>



</body>

</html>