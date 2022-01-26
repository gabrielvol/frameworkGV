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
    return src('./etc/css/custom/styles.scss')
        .pipe(sass())
        .pipe(dest('./etc/css/compilation/'));
}

// REF [14]
//function compileSassZH() {
//    return src('./etc/css/custom/styles_zh.scss')
//        .pipe(sass())
//        .pipe(dest('./etc/css/compilation/'));
//}


/* // CSSnano / PostCSS / Autoprefixer -------------------------------------- */
function processCSS() {
    return src("./etc/css/compilation/styles.css")
        .pipe(postcss())
        .pipe(dest("./src/css/"));
}

// REF [14]
//function processCSSZH() {
//    return src("./etc/css/compilation/styles_zh.css")
//        .pipe(postcss())
//        .pipe(dest("./src/css/"));
//}


/* // Watchers -------------------------------------------------------------- */
function watchSCSS(){
    watch('./etc/css/custom/**/*.scss', {ignoreInitial: false}, compileSass);    
//    watch('./etc/css/custom/**/*.scss', {ignoreInitial: false}, compileSassZH); // REF [14]
}

function watchCompilation(){
    watch('./etc/css/compilation/styles.css', {delay: 1000}, processCSS);
//    watch('./etc/css/compilation/styles_zh.css', {delay: 1000}, processCSSZH); // REF [14]
}

exports.default = parallel(watchSCSS, watchCompilation);