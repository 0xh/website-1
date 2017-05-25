let mix = require('laravel-mix');
var path = require('path');

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

// ========copy images=====
mix.copy('resources/assets/img', 'public/img');

// ========copy fonts=====
mix.copy('resources/assets/fonts', 'public/fonts');

// ========copy css=====
mix.copy('resources/assets/css', "public/css");

// ========sweetalert====
mix.copy('node_modules/sweetalert/dist/sweetalert.min.js', 'public/js/sweetalert.min.js');
mix.copy('node_modules/sweetalert/dist/sweetalert.css', 'public/css/sweetalert.css');

// ========Favicons====
mix.copy('resources/assets/img/icons/favicon.ico', 'public/favicon.ico');
mix.copy('resources/assets/img/icons/favicon-32x32.png', 'public/favicon.png');

// =======mix styles======
// mix.sass('resources/assets/sass/bootstrap/bootstrap.scss', 'public/css');
mix.sass('resources/assets/sass/custom.scss', 'public/css');
mix.sass('resources/assets/sass/light_custom.scss', 'public/css');
mix.less('resources/assets/less/app.less', 'public/css');

mix.js('resources/assets/js/app.js', 'public/js');

mix.webpackConfig({
    resolve: {
        modules: [
            path.resolve(__dirname, 'vendor/laravel/spark/resources/assets/js'),
            'node_modules'
        ],
        alias: {
            'vue$': 'vue/dist/vue.js'
        }
    }
});
//
// mix.less('resources/assets/less/app.less', 'public/css')
//         // .copy('node_modules/sweetalert/dist/sweetalert.min.js', 'public/js/sweetalert.min.js')
//         // .copy('node_modules/sweetalert/dist/sweetalert.css', 'public/css/sweetalert.css')
//         // .copyDirectory('resources/assets/img', 'public/img')
//         // .copy('resources/assets/img/icons/favicon.ico', 'public/favicon.ico')
//         // .copy('resources/assets/img/icons/favicon-32x32.png', 'public/favicon.png')
//         .js('resources/assets/js/app.js', 'public/js')
//         .webpackConfig({
//             resolve: {
//                 modules: [
//                     path.resolve(__dirname, 'vendor/laravel/spark/resources/assets/js'),
//                     'node_modules'
//                 ],
//                 alias: {
//                     'vue$': 'vue/dist/vue.js'
//                 }
//             }
//         });
