<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if (is_front_page()) {
            echo 'Maïde Akdede | ';
            echo bloginfo('description');
        } else {
            wp_title('');
            echo ' | Maïde Akdede';
        }; ?>
    </title>

    <link rel="stylesheet" href="<?= p_assets('/css/theme.css') ?>">

    <?php wp_head(); ?>
</head>
<body>
<canvas id="canvas"></canvas>
<script src="<?= p_assets('/js/app.js') ?>"></script>

<header class="top">

    <h1 class="top__title sro"><?= is_front_page() ? bloginfo('description') : trim(wp_title('Maïde Akdede | ')); ?></h1>

    <nav class="nav">
        <h2 class="sro"><?= __('Navigation principale', 'p'); ?></h2>

        <a class="nav__logo" href="/">Maïde Akdede</a>

        <?php foreach (p_menu('main') as $link): foreach ($link->classes as $link->class): ?>
            <a class="link <?= $link->class; ?>" href="<?= $link->url; ?>"><?= $link->label; ?></a>
        <?php endforeach; endforeach; ?>
        <ul class="nav__languages">
            <p><?= __('Le site est actuellement en', 'p'); ?> <b><?= p_current_language()['slug'] ?></b></p>
            <?php foreach (pll_languages() as $lang): ?>
                <li class="languages__item">
                    <a href="<?= $lang['url']; ?>" class="languages__link" hreflang="<?= $lang['locale']; ?>"
                       title="<?= $lang['name']; ?>"
                    ><?= $lang['slug']; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

</header>