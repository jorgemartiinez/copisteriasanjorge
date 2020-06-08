<?php require('server/data/data.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.min.css">
    <title>Inicio | <?= $info['title'] ?> | Impresión y Diseño en Alcoy</title>
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="nav">
        <!-- Logo -->
        <div class="nav__logo">
            <img class="nav__logo-img" src="assets/img/logos/logo-mini.png" alt="Logo <?= $info['title'] ?> Alcoy" />
        </div>
        <div class="nav__burger-wrapper">
            <img src="assets/img/icons/burger-icon.svg" alt="Icono Menú - Vista móvil" class="nav__burger-icon">
        </div>
        <!-- Links navegación -->
        <div class="nav__nav">
            <ul class="nav__links">
                <?php
                foreach ($nav_links as $nav) { ?>
                    <li class="nav__item">
                        <a href="<?= $nav ?>" class="nav__link"><?= $nav ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>