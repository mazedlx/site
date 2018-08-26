let mix = require("laravel-mix");
require("laravel-mix-tailwind");

mix
  .sass("resources/assets/sass/app.scss", "public/css")
  .tailwind()
  .js("resources/assets/js/app.js", "public/js")
  .version()
  .copy("resources/assets/img", "public/img");
