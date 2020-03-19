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
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.scripts([
      'resources/template/js/core/jquery.3.2.1.min.js',
      'resources/template/js/core/popper.min.js',
      'resources/template/js/core/bootstrap.min.js',
      'resources/template/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js',
      'resources/template/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js',
      'resources/template/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js',
      'resources/template/js/plugin/bootstrap-notify/bootstrap-notify.min.js',
      'resources/template/js/plugin/webfont/webfont.min.js',
      'resources/template/js/atlantis.min.js'

], 'public/js/template.js');



mix.styles([    
      'resources/template/css/fonts.min.css',
      'resources/template/css/bootstrap.min.css',
      'resources/template/css/atlantis.min.css'
  ], 'public/css/template.css');