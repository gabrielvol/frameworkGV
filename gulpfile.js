/* =============================================================================
   gulpfile.js
   ========================================================================== */
const { src, dest, watch, parallel } = require('gulp');
const sass          = require('gulp-sass');
const postcss       = require('gulp-postcss');
const autoprefixer  = require('autoprefixer');
const cssnano       = require('cssnano');


/* // Compile sass into CSS ------------------------------------------------- */
function compileSass() {
    return src('./etc/css/custom/styles_main.scss')
        .pipe(sass())
        .pipe(dest('./etc/css/compilation/'));
}

// REF [49]
function compileSassWPChildTheme() {
    return src('./etc/css/custom/style.scss')
        .pipe(sass())
        .pipe(dest('./etc/css/compilation/'));
}

// REF [14]
function compileSassZH() {
    return src('./etc/css/custom/styles_zh.scss')
        .pipe(sass())
        .pipe(dest('./etc/css/compilation/'));
}


/* // CSSnano / PostCSS / Autoprefixer -------------------------------------- */
function processCSS() {
    return src("./etc/css/compilation/styles_main.css")
        .pipe(postcss())
        .pipe(dest("./src/css/"));
}

// REF [49]
function processCSSWPChildTheme() {
    return src("./etc/css/compilation/style.css")
        .pipe(dest("./src/wp-content/themes/WPChildTheme/"));
}

// REF [14]
function processCSSZH() {
    return src("./etc/css/compilation/styles_zh.css")
        .pipe(postcss())
        .pipe(dest("./src/css/"));
}


/* // Watchers -------------------------------------------------------------- */
function watchSCSS(){
    watch('./etc/css/custom/**/*.scss', {ignoreInitial: false}, compileSass);
    watch('./etc/css/custom/**/*.scss', {ignoreInitial: false}, compileSassWPChildTheme); // REF [49]
    watch('./etc/css/custom/**/*.scss', {ignoreInitial: false}, compileSassZH); // REF [14]
}

function watchCompilation(){
    watch('./etc/css/compilation/styles_main.css', {delay: 1000}, processCSS);
    watch('./etc/css/compilation/style.css', {delay: 1000}, processCSSWPChildTheme); // REF [49]
    watch('./etc/css/compilation/styles_zh.css', {delay: 1000}, processCSSZH); // REF [14]
}

exports.default = parallel(watchSCSS, watchCompilation);