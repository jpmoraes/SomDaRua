const mix = require('laravel-mix');

mix.sass('resources/css/app.scss', 'public/css')
   .sass('resources/css/footer.scss', 'public/css')
   .sass('resources/css/index.scss', 'public/css')
   .sass('resources/css/header.scss', 'public/css')
   .sass('resources/css/dados.scss', 'public/css')
   .sass('resources/css/salvador.scss', 'public/css')
   .sass('resources/css/swiper-bundle.min.scss', 'public/css');

mix.js('resources/js/app.js', 'public/js/')
   .copy('resources/js/dados.js', 'public/js/')
   .copy('resources/js/index-swiper.js', 'public/js/')
   .copy('resources/js/swiper-bundle.min.js', 'public/js/');

mix.copy('resources/assets', "public/assets/")