var elixir = require('laravel-elixir');
var paths = {bootstrap: './node_modules/bootstrap-sass/assets/'};

elixir(function(mix) {
   mix
      .browserSync({
        proxy: 'snap.dev'
      });

});
