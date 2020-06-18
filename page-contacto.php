<?php get_header(); ?>

<!-- Header contact -->
<header class="contact" style="background-image: url(<?= the_post_thumbnail_url(); ?>)">
    <div class="container">
        <div class="m-center">
            <h1 class="heading-primary text-white text-center">Contáctanos</h1>
            <p class="paragraph-desc text-white"><?= the_field('texto_descripcion'); ?></p>
        </div>
    </div>
</header>

<main class="container">
    <section class="contact-info">
        <div class="contact-box ">
            <div class="contact-box__wrapper">
                <div class="contact-box__column">
                    <div class="contact-box__img-wrapper">
                        <a href="tel:965522047" rel="noreferrer" title="Llamar por teléfono de Copistería San Jorge Alcoy">
                            <img class="contact-box__img" src="<?= get_template_directory_uri(); ?>/assets/img/icons/ico-phone.svg" alt="Contáctanos por teléfono Copistería San Jorge Alcoy">
                        </a>
                    </div>
                    <div class="contact-box__text-wrapper">
                        <h2>Llámanos</h2>
                        <p>Puedes llamarnos al número
                            965522047</p>
                    </div>
                </div>

                <div class="contact-box__column">
                    <div class="contact-box__img-wrapper">
                        <a href="mailto:copisteriasanjorge@copisteriasanjorge.com" title="Enviar Email a Copistería San Jorge Alcoy"><img class="contact-box__img" src="<?= get_template_directory_uri(); ?>/assets/img/icons/ico-envelope.svg" alt="Contáctanos por teléfono Copistería San Jorge Alcoy"></a>
                    </div>
                    <div class="contact-box__text-wrapper">
                        <h2>Email</h2>
                        <p>Puedes enviarnos un email a copisteriasanjorge@<br />copisteriasanjorge.com
                        </p>
                    </div>
                </div>

                <div class="contact-box__column">
                    <div class="contact-box__img-wrapper">
                        <a target="_blank" rel="noreferrer" href="https://goo.gl/maps/edSFxwx2ZxdoGkZw7" title="Ver Mapa de Copistería San Jorge Alcoy">
                            <img class="contact-box__img" src="<?= get_template_directory_uri(); ?>/assets/img/icons/ico-arrow.svg" alt="Contáctanos por teléfono Copistería San Jorge Alcoy">
                        </a>
                    </div>
                    <div class="contact-box__text-wrapper">
                        <h2>Visítanos</h2>
                        <p>Estamos en Calle Entenza, 19, 03803
                            Alcoy (Alicante).
                            Abrimos de Lunes a Sábado de 9:30 a 20:30</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form">
        <div class="text-center">
            <h2 class="heading-primary text-secondary">Formulario de Contacto</h2>
            <p class="paragraph-sub">Si prefieres contactarnos mediante formulario, estaremos encantados de responderte lo antes posible.</p>
        </div>
        <div class="form">
            <?php echo do_shortcode('[contact-form-7 id="120" title="Formulario de contacto 1"]'); ?>
            <small>Este sitio está protegido con reCAPTCHA y la
                <a href="https://policies.google.com/privacy">Política de Privacidad</a> y los
                <a href="https://policies.google.com/terms">Términos de servicio</a> de Google se aplican.
            </small>
        </div>
    </section>
</main>

<?php get_footer(); ?>