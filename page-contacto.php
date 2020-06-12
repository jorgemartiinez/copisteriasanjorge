<?php get_header(); ?>

<!-- Header contact -->
<header class="contact" style="background-image: url(<?= the_post_thumbnail_url(); ?>)">
    <div class="container">
        <div class="m-center">
            <h1 class="heading-primary text-white text-center">Contáctanos</h1>
            <p class="paragraph-desc text-white"><?=the_field('texto_descripcion');?></p>
        </div>
    </div>
</header>

<main class="container">
    <section class="contact-info">
        <div class="contact-box ">
            <div class="contact-box__wrapper">
                <div class="contact-box__column">
                    <div class="contact-box__img-wrapper">
                        <img class="contact-box__img" src="<?= get_template_directory_uri(); ?>/assets/img/icons/ico-phone.svg" alt="Contáctanos por teléfono Copistería San Jorge Alcoy">
                    </div>
                    <div class="contact-box__text-wrapper">
                        <h2>Llámanos</h2>
                        <p>Puedes llamarnos al número
                            965522047</p>
                    </div>
                </div>

                <div class="contact-box__column">
                    <div class="contact-box__img-wrapper">
                        <img class="contact-box__img" src="<?= get_template_directory_uri(); ?>/assets/img/icons/ico-envelope.svg" alt="Contáctanos por teléfono Copistería San Jorge Alcoy">
                    </div>
                    <div class="contact-box__text-wrapper">
                        <h2>Email</h2>
                        <p>Puedes enviarnos un email a copisteriasanjorge@<br />copisteriasanjorge.com
                        </p>
                    </div>
                </div>

                <div class="contact-box__column">
                    <div class="contact-box__img-wrapper">
                        <img class="contact-box__img" src="<?= get_template_directory_uri(); ?>/assets/img/icons/ico-arrow.svg" alt="Contáctanos por teléfono Copistería San Jorge Alcoy">
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
        <form id="contact-form" class="form u-center-text">
            <fieldset class="form__fieldset mb-sm">
                <div class="form__row">
                    <div class="form__name">
                        <label for="nombre" class="form__label">Nombre</label>
                        <input type="text" id="nombre" name="nombre" minlength="2" maxlength="150" class="form__input" required />
                    </div>
                    <div class="form__email">
                        <label for="email" class="form__label">Correo</label>
                        <input type="email" id="email" name="email" minlength="5" maxlength="180" class="form__input" required />
                    </div>
                </div>
                <div class="form__row">
                    <div class="form__message">
                        <label for="mensaje" class="form__label">Mensaje</label>
                        <textarea type="text" id="mensaje" name="mensaje" class="form__textarea" minlength="10" maxlength="300" required></textarea>
                    </div>
                </div>
            </fieldset>
            <button class="btn btn--input" type="submit">
                ENVIAR MENSAJE
            </button>
        </form>
    </section>
</main>



<?php get_footer(); ?>