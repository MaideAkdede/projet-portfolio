<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if (is_front_page()) {
            echo 'Ma&iuml;de Akdede | ';
            echo bloginfo('description');
        } else {
            wp_title('');
            echo ' | Ma&iuml;de Akdede';
        }; ?>
    </title>
    <link rel="stylesheet" href="<?= p_assets('/css/theme.css') ?>">
    <?php wp_head(); ?>
</head>
<body>
<canvas id="canvas"></canvas>
<script src="<?= p_assets('/js/app.js') ?>"></script>

<header class="header">
    <h1 class="header__title sro"><?= is_front_page() ? bloginfo('description') : trim(wp_title('Maïde Akdede | ')); ?></h1>

    <div class="header__menu menu">
        <a class="menu__logo" href="/">Ma&iuml;de Akdede</a>
        <div class="menu__wrapper">

            <nav class="menu__nav nav">
                <h2 class="nav__title sro"><?= __('Navigation principale', 'p'); ?></h2>
                <?php foreach (p_menu('main') as $link): foreach ($link->classes as $link->class): ?>
                    <p class="nav__links">
                    <a class="nav__link <?= $link->class; ?>"
                       href="<?= $link->url; ?>"><?= $link->label; ?></a>
                    </p>
                <?php endforeach; endforeach; ?>
            </nav>
            <div class="menu__lang lang">
                <h2 class="nav__lang-title sro"><?= __('Changer de langue', 'p'); ?></h2>
                <p class="sro"><?= __('Le site est actuellement en', 'p'); ?>
                    <strong><?= p_current_language()['name'] ?></strong></p>

                <div class="lang__container">
                    <a href="/" class="lang__current"><?= p_current_language()['slug'] ?></a>

                    <ul class="lang__other lang__hidden">
                        <?php foreach (pll_languages() as $lang): ?>
                            <li class="lang__li">
                                <a href="<?= $lang['url']; ?>" class="lang__link" hreflang="<?= $lang['locale']; ?>"
                                   title="<?= $lang['name']; ?>"
                                >
                                    <img class="lang__img" src=" <?= $lang['flag']; ?>" alt="<?= $lang['name']; ?>">
                                    <?= $lang['slug']; ?>
                                 </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</header>
<main class="main">