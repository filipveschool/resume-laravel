let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .scripts([
            //'resources/assets/jquery/pieCharts.js',
            'resources/assets/jquery/scrollTop.js',
            'resources/assets/jquery/sticky-nav.js',
            'resources/assets/jquery/smoothScroll.js',

            'resources/assets/jquery/init.js',
        ],
        'public/js/main.js')
    .js('resources/assets/jsvuetesting/appvue.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .browserSync('resume.dev');

mix.options({
    // Since we don't do any image preprocessing and write url's that are
    // relative to the site root, we don't want the sass loader to try to
    // follow paths in `url()` functions.
    processCssUrls: false,
    //purifyCss     : true, // Remove unused css selectors
    //purifyCss     : false, // Remove unused css selectors
    //clearConsole  : false,
    //verbose: true,
});

if (mix.config.inProduction) {
    mix.options({
        processCssUrls: false,
        purifyCss     : true,
    });

    //mix.copy('resources/assets/images/', 'public/images/');

}