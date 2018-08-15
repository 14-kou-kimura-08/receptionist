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

mix.sass('resources/assets/sass/users.sass', 'public/css/users.css')
   .sass('resources/assets/sass/groups.sass', 'public/css/groups.css')
   .sass('resources/assets/sass/welcome.sass', 'public/css/welcome.css')
   .sass('resources/assets/sass/layouts.sass', 'public/css/layouts.css')
