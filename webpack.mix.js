let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/dist');
mix.sass('resources/assets/scss/app.scss', 'public/dist');
