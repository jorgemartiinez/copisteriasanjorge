<?php include('partials/header.php') ?>


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

<main>
    <!-- Sección servicios -->
    <section class="services container">
        <div class="text-center">
            <h2 class="heading-secondary text-secondary">Servicios</h2>
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
        <div class="container">
            <div class="text-center">
                <h2 class="heading-secondary text-white">Regalos Personalizados</h2>
                <p class="paragraph-sub text-white">Estamos constantemente buscando formas de ofrecer más y mejores productos a nuestros clientes,
                    y gracias a nuestros compañeros de Regalos Personales, ofrecemos un catálogo de regalos para nuestros
                    clientes. Contamos con más de 100 productos.</p>
            </div>
            <div class="gift">
                <a href="https://bit.ly/3eJYj4y" target="_blank" rel="noreferrer"><img src="assets/img/products/regalos-personalizados.svg" alt="Regalos Personalizados" class="gift__img"></a>
                <a href="https://bit.ly/3eJYj4y" target="_blank" rel="noreferrer" class="btn btn--md gift__link">Click para saber más</a>
            </div>
        </div>
    </section>

</main>

<?php include('partials/footer.php') ?>