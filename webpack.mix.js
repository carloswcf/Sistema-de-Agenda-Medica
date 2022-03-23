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

mix.combine([
    "resources/views/assets/css/style.css"
],'public/assets/css/app.css')

.copyDirectory("resources/views/assets/css/fonts", 'public/assets/css/fonts')
.copyDirectory("resources/views/assets/img", 'public/assets/img');
