const mix = require('laravel-mix');

mix.webpackConfig({
    module: {
        rules: [{
                test: /\.js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env'],
                        plugins: ['@babel/plugin-syntax-dynamic-import']
                    }
                }
            }]
    },
    resolve: {
        extensions: ['.js', '.json'],
        mainFields: ['browser', 'module', 'main']
    }
});

mix.js('resources/js/app.js', 'public/js/')
   .sass('resources/css/app.scss', 'public/css')
   .sass('resources/css/pageGeneros.scss', 'public/css')
   .sass('resources/css/footer.scss', 'public/css')
   .sass('resources/css/index.scss', 'public/css')
   .sass('resources/css/header.scss', 'public/css')
   .sass('resources/css/dados.scss', 'public/css')
   .sass('resources/css/salvador.scss', 'public/css')
   .sass('resources/css/rate.scss', 'public/css')
   .sass('resources/css/swiper-bundle.min.scss', 'public/css')
   .sass('resources/css/login.scss', 'public/css')
   .copy('resources/js/dados.js', 'public/js/')
   .copy('resources/js/rate.js', 'public/js/')
   .copy('resources/js/index-swiper.js', 'public/js/')
   .copy('resources/js/swiper-bundle.min.js', 'public/js/')
   .copy('resources/js/login.js', 'public/js/')
   .copy('resources/assets', 'public/assets/')
   .copy('resources/fonts', 'public/fonts/');
