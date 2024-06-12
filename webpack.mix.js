const mix = require('laravel-mix');

mix.sass('resources/css/footer.scss', 'public/css')
mix.sass('resources/css/index.scss', 'public/css')
mix.sass('resources/css/header.scss', 'public/css')
mix.sass('resources/css/dados.scss', 'public/css')
mix.sass('resources/css/salvador.scss', 'public/css')
mix.sass('resources/css/swiper-bundle.min.scss', 'public/css')

mix.copy('resources/js/dados.js', 'public/js/')
mix.copy('resources/js/index-swiper.js', 'public/js/')
mix.copy('resources/js/swiper-bundle.min.js', 'public/js/')

mix.copy('resources/assets', "public/assets/")