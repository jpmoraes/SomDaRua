const mix = require('laravel-mix');

mix.sass('resources/css/admin.scss', 'public/css')
   .sass('resources/css/recuperacao.scss', 'public/css')
   .sass('resources/css/pageGeneros.scss', 'public/css')
   .sass('resources/css/footer.scss', 'public/css')
   .sass('resources/css/index.scss', 'public/css')
   .sass('resources/css/header.scss', 'public/css')
   .sass('resources/css/salvador.scss', 'public/css')
   .sass('resources/css/avaliacao.scss', 'public/css')
   .sass('resources/css/swiper-bundle.min.scss', 'public/css')
   .sass('resources/css/login.scss', 'public/css')
   .copy('resources/js/admin.js', 'public/js/')
   .copy('resources/js/avaliacao.js', 'public/js/')
   .copy('resources/js/index-swiper.js', 'public/js/')
   .copy('resources/js/swiper-bundle.min.js', 'public/js/')
   .copy('resources/js/login.js', 'public/js/')
   .copy('resources/assets', 'public/assets/')
   .copy('resources/fonts', 'public/fonts/');
