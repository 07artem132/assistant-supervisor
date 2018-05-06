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

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/bootstrap.js', 'public/js')
   .js('resources/assets/js/jquery.js', 'public/js')
   .js('resources/assets/js/fortawesome.js', 'public/js')
   .js('resources/assets/js/language.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/bootstrap.scss', 'public/css')
   .sass('resources/assets/sass/flag-country-icon.scss', 'public/css')
   .sass('resources/assets/sass/bootstrap-select.scss', 'public/css')
   .sass('resources/assets/sass/googlefonts.scss', 'public/css');

mix.copy('resources/assets/css/main.css', 'public/css/main.css');

