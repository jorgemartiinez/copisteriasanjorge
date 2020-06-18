<?php get_header(); ?>
<!-- Hero section -->
<header class="hero">
    <div class="hero__overlay" style="background-image: url(<?= the_post_thumbnail_url(); ?>)">
        <h2 class="hero__text-1">Bienvenido</h2>
        <h1 class="heading-primary text-white"> <?= get_bloginfo('title'); ?> </h1>
        <p class="paragraph-desc text-white"><?= the_field('descripcion_bienvenida'); ?></p>
    </div>
    <div class="hero__arrow">
        <img src="<?= get_template_directory_uri() ?>/assets/img/icons/ico-arrow-down.svg" class="hero__arrow-img" alt="Icono Flecha Abajo Ver Más" title="¡Baja para ver más!" />
    </div>
</header>

<main>

    <!-- Sección nosotros -->
    <section class="us container">
        <div class="us__text">
            <h2 class="heading-secondary text-secondary mb-sm">Quiénes Somos</h2>
            <?= the_field('quienes_somos'); ?></p>
            <br />
            <div class="m-center">
                <a href="<?php echo get_page_link( get_page_by_title( 'nosotros' )->ID ); ?>" class="btn btn--md gift__link m-center">Conócenos un poco más</a>
            </div>
        </div>
        <div class="us__photo">
            <img class="us__img lazy" data-src="<?= get_template_directory_uri() ?>/assets/img/home/question-photo.svg" width="300" alt="Quienes Somos Copisteria San Jorge Alcoy">
        </div>
    </section>

    <!-- Sección servicios -->
    <section class="services container">
        <div class="text-center">
            <h2 class="heading-secondary text-secondary">Servicios</h2>
            <p class="paragraph-sub"><?= the_field('servicios_descripcion'); ?></p>
        </div>

        <div class="services__wrapper">
            <?php $args = array('post_type' => 'Servicios', 'posts_per_page' => 6, 'order' => 'ASC');
            $loop = new WP_Query($args);
            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post();
            ?>
                    <article class="service-card">
                        <div class="top-bar"></div>
                        <div class="service-card__img-wrapper">
                            <img class="service-card__img lazy" data-src="<?= the_post_thumbnail_url(); ?>" alt="<?= the_title(); ?> Copisteria San Jorge Alcoy" />
                        </div>
                        <div class="service-card__text-wrapper">
                            <h3 class="heading-tertiary text-primary"><?= the_title(); ?></h3>
                            <p class="paragraph-info"><?= get_the_content(); ?></p>
                        </div>
                    </article>
            <?php endwhile;
            endif; ?>
        </div>
    </section>


    <!-- Sección regalos personalizados -->
    <section class="gifts">
        <div class="container">
            <div class="text-center">
                <h2 class="heading-secondary text-white">Regalos Personalizados</h2>
                <p class="paragraph-sub text-white"><?= the_field('regalos_personalizados_texto'); ?>Estamos constantemente buscando formas de ofrecer más y mejores productos a nuestros clientes, y gracias a nuestros compañeros de Regalos Personales, ofrecemos un catálogo de regalos para nuestros clientes. Contamos con más de 100 productos.</p>
            </div>
            <div class="gift">
                <a href="https://bit.ly/3eJYj4y" target="_blank" rel="noreferrer"><img data-src="<?= get_template_directory_uri() ?>/assets/img/products/regalos-personalizados.svg" alt="Regalos Personalizados" class="gift__img lazy"></a>
                <a href="https://bit.ly/3eJYj4y" target="_blank" rel="noreferrer" class="btn btn--md gift__link">Click para saber más</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>