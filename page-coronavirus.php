<?php get_header(); ?>

<!-- Header -->
<header class="header">
    <section class="covid" style="background-image: url(<?= the_post_thumbnail_url(); ?>)">
        <div class="container">
            <div class="m-center">
                <h1 class="heading-primary text-white text-center">CORONAVIRUS</h1>
                <p class="paragraph-desc text-white"><?php the_field('desc_principal'); ?></p>
            </div>
        </div>
    </section>
    <section class="co container">
        <article class="co__box">
            <img class="co__img" src="<?= get_template_directory_uri(); ?>/assets/img/icons/ico-whatsapp.svg" alt="Contactar a Copistería San Jorge Alcoy vía Whatsapp">
            <h3 class="heading-tertiary text-grey-dark">608608739</h3>
        </article>

        <article class="co__box">
            <img class="co__img" src="<?= get_template_directory_uri(); ?>/assets/img/icons/ico-envelope.svg" alt="Contactar a Copistería San Jorge Alcoy vía Teléfono">
            <h3 class="heading-tertiary text-grey-dark">copisanjorge@gmail.com</h3>
        </article>
        </div>
    </section>
</header>

<main class="container">
    <section class="products">
        <div class="m-center">
            <h2 class="heading-secondary text-secondary text-center mb-sm">Productos Coronavirus</h2>
            <p class="paragraph-sub"><?= the_field('texto_debajo_titulo'); ?></p>
        </div>

        <div class="prod_wrapper mt-md">
            <?php
            $numOfCols = 2;
            $rowCount = 0;
            $args = array('post_type' => 'productos_corona', 'order' => 'DESC');
            $loop = new WP_Query($args);
            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post();
            ?>
                    <?php if ($rowCount % $numOfCols == 0) { ?> <div class="flex-row"> <?php }
                                                                                    $rowCount++; ?>
                        <article class="prod">
                            <?php if (has_post_thumbnail()) { ?>
                                <img class="prod__img lazy" data-src="<?= the_post_thumbnail_url(); ?>" alt="Producto <?= the_title(); ?> Copistería San Jorge Alcoy">
                            <?php } ?>
                            <h3 class="heading-tertiary text-secondary mt-sm mb-sm"><?= the_title(); ?></h3>
                            <p><?= get_the_content(); ?></p>
                        </article>
                        <?php
                        if ($rowCount % $numOfCols == 0) { ?>
                        </div>
                    <?php } ?>
            <?php endwhile;
            endif; ?>
        </div>

    </section>
</main>



<?php get_footer(); ?>