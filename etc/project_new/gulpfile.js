/* =============================================================================
   gulpfile.js
   ========================================================================== */
const { src, dest, watch, parallel } = require('gulp');
const sass          = require('gulp-sass');
const postcss       = require('gulp-postcss');
const cssnano       = require('gulp-cssnano');
const autoprefixer  = require('gulp-autoprefixer');


/* // Compile sass into CSS ------------------------------------------------- */
function compileSass() {
    return src('./etc/css/custom/styles.scss')
        .pipe(sass())
        .pipe(dest('./etc/css/compilation/'));
}


/* // CSSnano / PostCSS / Autoprefixer -------------------------------------- */
function processCSS() {
    return src("./etc/css/compilation/styles.css")
        .pipe(cssnano([,
            postcss(),
            autoprefixer({browsers: ['last 3 versions']})
        ]))
        .pipe(dest("./src/css/"));
}


/* // Watchers -------------------------------------------------------------- */
function watchSCSS(){
    watch('./etc/css/custom/**/*.scss', {ignoreInitial: false}, compileSass);
}

function watchCompilation(){
    watch('./etc/css/compilation/styles.css', {delay: 1000}, processCSS);
}

exports.default = parallel(watchSCSS, watchCompilation);