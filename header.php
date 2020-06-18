<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Copistería San Jorge">
    <link rel="icon" type="image/ico" href="<?= get_template_directory_uri(); ?>/assets/img/favicon.ico">
    <?php wp_head() ?>
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="nav">
        <!-- Logo -->

        <div class="nav__burger-wrapper">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/burger-icon.svg" alt="Icono Menú - Vista móvil" class="nav__burger-icon">
            <div class="nav__logo">
                <img class="nav__logo-img" src="<?= get_template_directory_uri(); ?>/assets/img/logos/logo-mini.png" alt="Logo <?= get_bloginfo('name') ?> Alcoy" />
            </div>
        </div>
        <!-- Links navegación -->
        <div class="nav__nav">
            <?php wp_nav_menu(
                array(
                    'menu' => 'primary', // nombre del menú definido en functions
                    'container' => 'ul',
                    'menu_class' => 'nav__links',
                    'items_wrap' => '<ul id="%1$s" class="nav__links">%3$s</ul>',
                )
            ); // mostrar menú
            ?>
        </div>
    </nav>