const mix = require('laravel-mix');

// Load env file
require('dotenv').config();
const env = process.env.APP_ENV;

mix
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .extract()
    .version();

if (env !== 'production') {
    mix.sourceMaps();
}
