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

mix.autoload({
    jquery: ['$', 'jQuery', 'window.jQuery'],
})

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/home.js', 'public/js')
    .js('resources/js/login.js', 'public/js')
    .js('resources/js/register.js', 'public/js')
    .js('resources/js/admin/app.js', 'public/js/admin')
    .js('resources/js/admin/dashboard.js', 'public/js/admin')
    .js('resources/js/admin/field.js', 'public/js/admin')
    .js('resources/js/admin/booking.js', 'public/js/admin')
    .postCss('resources/css/home.css', 'public/css')
    .postCss('resources/css/auth.css', 'public/css')
    .postCss('resources/css/admin/app.css', 'public/css/admin')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
