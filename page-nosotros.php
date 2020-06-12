<?php get_header(); ?>

<!-- Header about -->
<header class="about" style="background-image: url(<?= the_post_thumbnail_url(); ?>)">
    <div class="container">
        <div class="m-center">
            <h1 class="heading-primary text-white text-center">Sobre <?= the_title(); ?></h1>
            <p class="paragraph-sub text-white"><?= the_field('nosotros_texto_principal') ?></p>
        </div>
</header>

<!-- Main content -->
<main>
    <!-- Quiénes somos -->
    <section class="who-wrapper">
        <div class="who container">
            <div class="who__text">
                <h2 class="heading-secondary text-secondary">Quiénes Somos</h2>
                <p class="paragraph-sub">
                    <?= the_field('quienes_somos_texto') ?>
                </p>
            </div>
            <div class="who__img-wrapper">
                <img class="who__img" src="<?= get_template_directory_uri(); ?>/assets/img/about/about-1.png" alt="Quienes Somos - Copisteria San Jorge Alcoy">
            </div>
        </div>
    </section>

    <!--  Nuestros valores -->

    <section class="values container">
        <div class="values__collage">
            <img class="values__collage-1" src="<?= get_template_directory_uri(); ?>/assets/img/about/about-2.png" alt="Valor 1">
            <img class="values__collage-2" src="<?= get_template_directory_uri(); ?>/assets/img/about/about-3.png" alt="Valor 2">
        </div>
        <div class="values__text">
            <h2 class="heading-secondary text-secondary">Nuestros valores</h2>
            <div class="paragraph-sub">
                <?= the_field('nuestros_valores_texto') ?>
            </div>
        </div>
    </section>


    <!-- Opiniones -->
    <section class="opinions container">
        <div class="text-center">
            <h2 class="heading-secondary text-secondary">Qué dicen nuestros clientes</h2>
        </div>
        <div class="opinions__wrapper">
            <?php $reviews = get_field('reviews_grupo'); ?>
            <blockquote class="opinion-box">
                <p class="opinion-box__text">"<?= $reviews['texto_review_1'] ?>"</p>
                <footer class="opinion-box__author"><?= $reviews['autor_review_1'] ?></footer>
            </blockquote>
            <blockquote class="opinion-box">
                <p class="opinion-box__text">"<?=$reviews['texto_review_2']?>"</p>
                <footer class="opinion-box__author"><?=$reviews['autor_review_2']?></footer>
            </blockquote>
        </div>
        <div class="text-center pt-md">
            <a class="text-primary" target="_blank" rel="noreferrer" title="Leer más reviews en Google" href="https://bit.ly/37ddYXD">Leer más reviews en Google </a>
        </div>
    </section>

</main>



<?php get_footer(); ?>