<footer class="footer">

    <div class="footer__cols">
        <div class="footer__col">
            <h3 class="heading-tertiary text-white">Copistería <br /> San Jorge</h3>
            <p class="paragraph text-white-shadowed"><?= get_bloginfo('description'); ?></p>
        </div>
        <div class="footer__col">
            <h4 class="heading-quaternary text-white">Explora</h4>
            <ul class="footer__links">
                <?php wp_nav_menu(
                    array(
                        'menu' => 'primary', // nombre del menú definido en functions
                        'container' => 'ul',
                        'menu_class' => 'footer__links',
                    )
                ); // mostrar menú
                ?>
            </ul>
        </div>
        <div class="footer__col">
            <h4 class="heading-quaternary text-white">Visítanos</h4>
            <p class="paragraph text-white-shadowed mb-sm">Calle Entenza, 19 (Bajo).
                Código postal 03803.
                <br />
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
                    <?php wp_nav_menu(
                        array(
                            'menu' => 'social', // nombre del menú definido en functions
                            'container' => 'ul',
                            'menu_class' => 'footer__links',
                        )
                    ); // mostrar menú
                    ?>
                </li>
            </ul>
        </div>
        <div class="footer__col">
            <h4 class="heading-quaternary text-white">Legal</h4>
            <ul class="footer__links">
                <li class="footer__link-item">
                    <?php wp_nav_menu(
                        array(
                            'menu' => 'legal',
                            'container' => 'ul',
                            'menu_class' => 'footer__links',
                        )
                    );
                    ?>
                </li>
            </ul>
        </div>
    </div>
    <p class="paragraph text-center text-white-shadowed">&copy; <?= get_bloginfo('title'); ?> <?= date('Y'); ?></p>

</footer>


<!-- Scripts -->
<?php wp_footer() ?>

</body>

</html>