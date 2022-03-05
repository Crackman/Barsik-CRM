const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .js('resources/js/orders/orders.js', 'public/js')
    .js('resources/js/jquery.js', 'public/js')
    .js('resources/js/test.js', 'public/js')
    .js('resources/js/directory/directory.js', 'public/js')
    .js('resources/js/store/store.js', 'public/js')
    .sourceMaps();
