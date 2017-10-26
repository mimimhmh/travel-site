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

let styles = [
    'resources/assets/css/animate.css',
    'resources/assets/css/icomoon.css',
    'resources/assets/css/magnific-popup.css',
    'resources/assets/css/media-query.css',
    'resources/assets/css/style.css'
];

let scripts =
    [
        'resources/assets/js/app.js',
        'resources/assets/js/externals/jquery.easing.1.3.js',
        'resources/assets/js/externals/jquery.magnific-popup.min.js',
        'resources/assets/js/externals/magnific-popup-options.js',
        'resources/assets/js/externals/jquery.waypoints.min.js',
        'resources/assets/js/externals/main.js',

    ];

mix.js(scripts, 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
    .styles(styles, 'public/css/all.css');
