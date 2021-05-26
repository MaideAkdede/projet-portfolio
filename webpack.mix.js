const mix = require('laravel-mix');

require('laravel-mix-pluton');

mix.pluton('wp-content/themes/portfolio/resources/js/parts')
    .js('wp-content/themes/portfolio/resources/js/app.js', 'wp-content/themes/portfolio/public/js')
    .sass('wp-content/themes/portfolio/resources/sass/theme.scss', 'wp-content/themes/portfolio/public/css');