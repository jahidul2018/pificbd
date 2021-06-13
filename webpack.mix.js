const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    //'public/backend/files/bower_components/bootstrap/css/bootstrap.min.css',
    //'public/backend/files/assets/css/style.css',
    'public/pific-web-site/css/animate.min.css',
    'public/pific-web-site/css/bootstrap.min.css',
    'public/pific-web-site/css/cubeportfolio.min.css',
    //'public/pific-web-site/css/font-awesome.css',
    'public/pific-web-site/css/jquery.fancybox.min.css',
    'public/pific-web-site/css/magnific-popup.min.css',
    'public/pific-web-site/css/owl-carousel.min.css',
    'public/pific-web-site/css/slicknav.min.css',
    'public/pific-web-site/ticker.css',
    'public/pific-web-site/css/reset.css',
    'public/pific-web-site/style.css',
    'public/pific-web-site/css/responsive.css',
    'public/pific-web-site/custom.css',


], 'public/css/mix-all.css').options({
    processCssUrls: false
}).version();


 mix.scripts([

    //'public/backend/files/bower_components/jquery/js/jquery.min.js',
    //'public/backend/files/assets/js/script.min.js',
    'public/pific-web-site/js/jquery.min.js',
    'public/pific-web-site/js/jquery.lazyload.js',
    'public/pific-web-site/js/jquery-migrate-3.0.0.js',
    'public/pific-web-site/js/popper.min.js',

    'public/pific-web-site/js/bootstrap.min.js',
    'public/pific-web-site/js/modernizr.min.js',
    'public/pific-web-site/js/scrollup.js',
    'public/pific-web-site/js/jquery-fancybox.min.js',
    'public/pific-web-site/js/cubeportfolio.min.js',
    'public/pific-web-site/js/slicknav.min.js',
    //'public/pific-web-site/js/slicknav.min.js',
    'public/pific-web-site/ticker.js',
    'public/pific-web-site/js/owl-carousel.min.js',
    'public/pific-web-site/js/easing.js',
    'public/pific-web-site/js/magnific-popup.min.js',
    'public/pific-web-site/js/active.js',

], 'public/js/mix-all.js')
    .version();

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .version();
