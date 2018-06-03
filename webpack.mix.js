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
  .scripts('resources/assets/vendor/jquery.cookie/jquery.cookie.js','public/js/jquery.cookie.js')
  .scripts('resources/assets/vendor/chart.js/Chart.min.js','public/js/Chart.min.js')
  .scripts('resources/assets/vendor/jquery-validation/jquery.validate.min.js','public/js/jquery.validate.min.js')
  .scripts('resources/assets/js/charts-home.js','public/js/charts-home.js')
  .scripts('resources/assets/js/front.js','public/js/front.js')
   .sass('resources/assets/sass/app.scss', 'public/css')

mix.styles([
    'resources/assets/css/fontastic.css',
    'resources/assets/vendor/font-awesome/css/font-awesome.min.css',
    'resources/assets/css/style.default.css'
], 'public/css/all.css');
