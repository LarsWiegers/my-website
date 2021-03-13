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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .copy('vendor/van-ons/laraberg/public/css/laraberg.css', 'public/vendor/laraberg/css/laraberg.css')
    .copy('vendor/van-ons/laraberg/public/js/laraberg.js', 'public/vendor/laraberg/js/laraberg.js')
    .copy('resources/img/lars logo.png', 'public/img/lars logo.png')
    .webpackConfig(require('./webpack.config'));

if (mix.inProduction()) {
    mix.version();
}
