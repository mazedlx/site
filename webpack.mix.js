let mix = require("laravel-mix");
require("laravel-mix-tailwind");

mix
  .sass("resources/sass/app.scss", "public/css")
  .tailwind()
  .js("resources/js/app.js", "public/js")
  .version()
  .copy("resources/img", "public/img");
