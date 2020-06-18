<!-- Cookie Bar -->
 <div class="cookie-bar">
    <span class="cookie-bar__text">Esta web utiliza cookies para mejorar la experiencia y proporcionar funcionalidades adicionales.</span>
    <button class="btn btn--small text-secondary btn--cookie">Aceptar</button>
  </div>

<!-- Footer -->
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

<!-- Coockies -->
<script>
    (function(e){e.cookie=function(o,n,i){if(arguments.length>1&&(!/Object/.test(Object.prototype.toString.call(n))||null==n)){if(i=e.extend({},i),null==n&&(i.expires=-1),"number"==typeof i.expires){var t=i.expires,r=i.expires=new Date;r.setDate(r.getDate()+t)}return n=String(n),document.cookie=[encodeURIComponent(o),"=",i.raw?n:encodeURIComponent(n),i.expires?"; expires="+i.expires.toUTCString():"",i.path?"; path="+i.path:"",i.domain?"; domain="+i.domain:"",i.secure?"; secure":""].join("")}i=n||{};for(var s,a=i.raw?function(e){return e}:decodeURIComponent,c=document.cookie.split("; "),u=0;s=c[u]&&c[u].split("=");u++)if(a(s[0])===o)return a(s[1]||"");return null},e.fn.cookieBar=function(o){var n=e.extend({closeButton:"none",hideOnClose:!0,secure:!1,path:"/",domain:"",name:"cookiebar",expiresDays:365},o);return this.each(function(){var o=e(this);o.hide(),"none"==n.closeButton&&(o.append('<a class="cookiebar-close">Continue</a>'),e.extend(n,{closeButton:".cookiebar-close"})),"hide"!=e.cookie(n.name)&&o.show(),o.find(n.closeButton).click(function(){return n.hideOnClose&&o.hide(),e.cookie(n.name,"hide",{path:n.path,secure:n.secure,domain:n.domain,expires:n.expiresDays}),o.trigger("cookieBar-close"),!1})})},e.cookieBar=function(o){e("body").prepend('<div class="ui-widget"><div style="display: none;" class="cookie-message ui-widget-header blue"><p>By using this website you allow us to place cookies on your computer. They are harmless and never personally identify you.</p></div></div>'),e(".cookie-message").cookieBar(o)}})(jQuery);
</script>

</body>

</html>