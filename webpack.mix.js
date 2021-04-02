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

mix.styles([
    'resources/assets/vendor/bootstrap/css/bootstrap.css',
    'resources/assets/vendor/animate/animate.css',
    'resources/assets/vendor/font-awesome/css/font-awesome.css'
], 'public/css/vendor.css', './')
    .sass('resources/assets/sass/admin/app.scss', 'public/css')
    .styles([ //--------------------->CSS
        "resources/assets/css/admin/style.css"//---->CSS LOGIN
    ], 'public/css/login.css')
