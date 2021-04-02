const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js")
    .js("resources/js/sweetmessages.js", "public/js")
    .js("resources/js/alpine-functions.js", "public/js")
    .js("resources/js/filepond.js", "public/js")
    .js("resources/js/dropzone/dropzone.js","public/js")
    .postCss("resources/css/app.css", "public/css", [
        require("postcss-import"),
        require("tailwindcss"),
        require("autoprefixer"),
    ])
    .postCss("resources/css/dropzone.css", "public/css")
    .postCss("resources/css/filepond.css", "public/css")
    .browserSync({
        proxy:"localhost:8000",
        files: [
            'app/**/*',
            'resources/views/**/*',
            'routes/**/*'
        ]
    });

if (mix.inProduction()) {
    mix.version();
}


