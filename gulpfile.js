const elixir = require('laravel-elixir');
const fs = require('fs')

require('laravel-elixir-vue-2');
require('laravel-elixir-livereload');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(mix => {

  // this code will make sure index.styl is available at one level above
  // because of this weird bug with webpack 1
  fs.access('node_modules/bootstrap-styl/index.styl', (err) => {
    if (err)
      fs.writeFileSync('node_modules/bootstrap-styl/index.styl',
        fs.readFileSync('node_modules/bootstrap-styl/bootstrap/index.styl'))
  })

  mix.stylus('app.styl')
  .scripts([
    '../../../node_modules/bootstrap-styl/js/dropdown.js',
    '../../../node_modules/bootstrap-styl/js/collapse.js'
    ])
  .webpack('app.js')
  .livereload();
});

elixir(mix => {
  // mix.livereload();
})
