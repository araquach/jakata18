let mix = require('laravel-mix');

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

mix.sass('resources/assets/sass/app.scss', 'public/css');

mix.scripts([
    'resources/assets/js/jquery.js',
    'resources/assets/js/feedback-feed.js',
    'resources/assets/js/feedback-feed-ind.js',
    'resources/assets/js/dropdown.js'
], 'public/js/app.js');


