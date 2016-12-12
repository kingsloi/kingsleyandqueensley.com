const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir((mix) => {
    mix.sass('app.scss');

    mix.copy('resources/assets/img', 'public/img');

    mix.webpack([
        // 'flexslider.min.js',
        // 'smooth-scroll.min.js',
        // './node_modules/instafeed.js/instafeed.js',
        'app.js'
    ], 'public/js');
});