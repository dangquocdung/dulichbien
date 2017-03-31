var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.less([
        'main.less'
    ], 'public/assets/css');
});
