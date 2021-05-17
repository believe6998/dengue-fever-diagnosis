const mix = require('laravel-mix');

mix.js(['resources/js/app.js', 'resources/js/query.js'], 'public/js')
  .sass('resources/sass/app.scss', 'public/css');
