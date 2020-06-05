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
        <div class="nav__burger-wrapper">
            <img src="assets/img/icons/burger-icon.svg" alt="Icono Menú - Vista móvil" class="nav__burger-icon">
        </div>
        <!-- Links navegación -->
        <div class="nav__nav">
            <ul class="nav__links">
                <?php
                foreach ($nav_links as $nav) { ?>
                    <li class="nav__item">
                        <a href="<?= $nav ?>" class="nav__link"><?= $nav ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>

    <!-- Hero section -->
    <header class="hero">
        <div class="hero__overlay">
            <h2 class="hero__text-1">Bienvenido</h2>
            <h1 class="heading-primary text-white"> <?= $info['title'] ?></h1>
            <p class="paragraph-desc text-white">Somos una copistería ubicada en Alcoy (Alicante). Contamos con más de diez años de experiencia en nuestro sector. Nos hemos convertido en todo un referente local en servicios de impresión, edición de vídeo, revelado fotográfico, diseño gráfico y productos de papelería. </p>
        </div>
        <div class="hero__arrow">
            <img src="assets/img/icons/ico-arrow-down.svg" class="hero__arrow-img" alt="Icono Flecha Abajo Ver Más" title="¡Baja para ver más!" />
        </div>
    </header>

    <main class="container">
        <!-- Sección servicios -->
        <section class="services">
            <div class="text-center">
                <h2 class="heading-secondary text-secondary">Servicios</h2>
                <div class="text-bar"></div>
                <p class="paragraph-sub">Ofrecemos una serie de productos y servicios de primera calidad.</p>
            </div>

            <div class="services__wrapper">
                <?php foreach ($services as $i => $service) { ?>
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
                <?php } ?>
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
                <a href="https://bit.ly/3eJYj4y" target="_blank" rel="noreferrer" class="btn btn--md gift__link">Click para saber más</a>
            </div>
        </section>
    </main>

    <footer class="footer">

        <div class="footer__cols">
            <div class="footer__col">
                <h3 class="heading-tertiary text-white">Copistería <br /> San Jorge</h3>
                <p class="paragraph text-white-shadowed">Líderes en servicios de copistería y diseño con más de 10 años de experiencia.
                    </p>
            </div>
            <div class="footer__col">
                <h4 class="heading-quaternary text-white">Explora</h4>
                <ul class="footer__links">
                    <?php
                    foreach ($nav_links as $nav) { ?>
                        <li class="footer__link-item">
                            <a href="<?= $nav ?>" class="footer__link"><?= $nav ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="footer__col">
                <h4 class="heading-quaternary text-white">Visítanos</h4>
                <p class="paragraph text-white-shadowed mb-sm">Calle Entenza, 19 (Bajo).
                    Código postal 03803.
                    <br/>
                    Alcoy (Alicante). España</p>
                <h4 class="heading-quaternary text-white">Contacto</h4>
                <p class="paragraph text-white-shadowed">copisteriasanjorge@
                    copisteriasanjorge.com
                    <br />
                    965522047

                </p>
            </div>
            <div class="footer__col">
                <h4 class="heading-quaternary text-white">Síguenos</h4>
                <ul class="footer__links">
                    <li class="footer__link-item">
                        <a href="#" class="footer__link">Facebook</a>
                    </li>
                </ul>
            </div>
            <div class="footer__col">
                <h4 class="heading-quaternary text-white">Legal</h4>
                <ul class="footer__links">
                    <li class="footer__link-item">
                        <a href="#" class="footer__link">Privacidad</a>
                    </li>
                </ul>
            </div>
        </div>
        <p class="paragraph text-center text-white-shadowed">&copy; Copistería San Jorge. <?= date('Y'); ?></p>

    </footer>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>

</body>

</html>