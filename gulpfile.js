var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass([
        'app.scss',
        'owl.carousel.scss'
    ], 'public/assets/css');
});
