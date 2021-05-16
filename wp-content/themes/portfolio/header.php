<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (is_front_page()) {
            echo 'Maïde Akdede • ';
            echo bloginfo('description');
        } else {
            wp_title('Maïde Akdede • ');
        }; ?>
    </title>
    <!--ASSETS-->
    <link rel="stylesheet" href="<?= p_assets('/css/theme.css') ?>">
    <!--WORDPRESS-->
    <?php wp_head(); ?>
</head>
<body>
<canvas id="canvas"></canvas>
<script src="<?= p_assets('/js/app.js') ?>"></script>
<header class="top">
    <h1 class="top__title sro"><?= is_front_page() ? bloginfo('description') : trim(wp_title('Maïde Akdede • ')); ?></h1>
    <nav class="nav">
        <h2 class="sro">Navigation</h2>
        <p class="nav__logo">Maïde Akdede</p>

        <?php foreach (p_menu('main') as $link): ?>
            <a href="<?= $link->url; ?>"><?= $link->label; ?></a>
        <?php endforeach; ?>
    </nav>
</header>