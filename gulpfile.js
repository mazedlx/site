var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.copy('bower_components/bootstrap/dist/fonts', 'public/fonts');
    mix.copy('bower_components/icomoon-bower/fonts', 'public/css/fonts');
    mix.copy('bower_components/font-awesome/fonts', 'public/css/fonts');
    mix.copy('bower_components/html5shiv/dist/html5shiv.js', 'public/js');
    mix.copy('bower_components/respond/src/respond.js', 'public/js');
    mix.copy('resources/assets/images', 'public/images');
    mix.copy('resources/assets/images/favicons', 'public/images/favicons');

    mix.styles([
        '../../../bower_components/bootstrap/dist/css/bootstrap.css',
        '../../../bower_components/icomoon-bower/style.css',
        '../../../bower_components/animate.css/animate.css',
        '../../../bower_components/font-awesome/css/font-awesome.css',
        'main.css'
    ], 'public/css/app.css');

    mix.scripts([
        '../../../bower_components/jquery/dist/jquery.js',
        '../../../bower_components/bootstrap/dist/js/bootstrap.js',
        '../../../bower_components/jquery.scrollTo/jquery.scrollTo.js',
        'jquery.easing.1.3.js',
        'main.js',
    ], 'public/js/app.js');
});
