var elixir = require('laravel-elixir');
elixir(function(mix) {
   mix
      .browserSync({
        proxy: 'snap.dev'
      });
});
