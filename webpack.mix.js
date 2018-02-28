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

mix.styles([
    'public/css/style.css'
], 'public/css/app.css')
    .scripts([
        'public/plugins/jquery/dist/jquery.min.js',
        'public/plugins/bootstrap/js/bootstrap.min.js',
        'public/plugins/pace/pace.min.js',
        'public/plugins/jasny-bootstrap/js/jasny-bootstrap.min.js',
        'public/plugins/owl-carousel/owl.carousel.min.js',
        'public/plugins/sticky/jquery.sticky.js',
        'public/plugins/icheck/icheck.min.js',
        'public/js/jquery.stellar.min.js',
        'public/js/boland.custom.js'
    ], 'public/js/app.js').version();
