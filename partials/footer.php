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