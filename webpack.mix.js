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

mix.js([
    'resources/js/app.js',
    'node_modules/popper.js/dist/popper.js',
    'resources/js/custom.js'
    ], 
    'public/js').sourceMap();

mix.sass('resources/sass/app.scss', 'public/css');

// Live reload for testing purposes
mix.browserSync({
    proxy: 'http://findgum-laravel.test/'
});