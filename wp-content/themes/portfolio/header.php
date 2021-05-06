<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (is_front_page()){
            echo 'Portfolio• ';
            echo bloginfo('description');
        } else {
            wp_title('Portfolio • ');
        } ;?>
    </title>
    <!--ASSETS-->
    <link rel="stylesheet" href="<?= p_assets('css/theme.css') ?>">
    <script src="<?= p_assets('js/app.js') ?>"></script>
    <!--WORDPRESS-->
    <?php wp_head(); ?>
</head>
<body>
<header class="top">
    <h1 class="top__title sro"><?= is_front_page() ? 'Accueil' : trim(wp_title('Portfolio • ')); ?></h1>

</header>