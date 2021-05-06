let mix = require('laravel-mix');

mix.sass('wp-content/themes/portfolio/resources/sass/theme.scss', 'wp-content/themes/portfolio/public/css')
    .js('wp-content/themes/portfolio/resources/js/app.js', 'wp-content/themes/portfolio/public/js');