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
   .sass('resources/assets/sass/app.scss', 'public/css');

   // mix.styles([
   //     'resources/assets/css/libs/blog-post.css',
   //     'resources/assets/css/libs/bootstrap.min.css',
   //     'resources/assets/css/libs/font-awesome.css',
   //     'resources/assets/css/libs/metisMenu.css',
   //     'resources/assets/css/libs/sb-admin-2.css',
   //     'resources/assets/css/libs/styles.css'
   // ], 'public/css/all.css');
   //
   // mix.scripts([
   //     'resources/assets/js/libs/bootstrap.min.js',
   //     'resources/assets/js/libs/jquery.js',
   //     'resources/assets/js/libs/metisMenu.js',
   //     'resources/assets/js/libs/sb-admin-2.js',
   //     'resources/assets/js/libs/scripts.js'
   // ], 'public/js/all.js');
