var gulp         = require('gulp')
    ,sass         = require('gulp-sass')
    ,postcss      = require("gulp-postcss")
    ,cssnano      = require('gulp-cssnano')
    ,autoprefixer = require('gulp-autoprefixer');

/* =============================================================================
   Regular Sass
   ========================================================================== */
    // Static Server + watching scss files
gulp.task('serve', ['processCSS'], function() {
    gulp.watch("./etc/css/custom/*.scss", ['processCSS']);
    gulp.watch("./etc/css/custom/variables/*.scss", ['processCSS']);
    gulp.watch("./etc/css/scss/*.scss", ['processCSS']);
});

    // Compile sass into CSS
gulp.task('compileSass', function () {
    return gulp.src('./etc/css/custom/styles.scss')
        .pipe(sass())
        .pipe(gulp.dest('./etc/css/compilation'));
});

    // CSSnano / PostCSS / Autoprefixer
gulp.task('processCSS', ['compileSass'], function() {
    gulp.src("./etc/css/compilation/styles.css")
        .pipe(cssnano([,
            postcss(),
            autoprefixer({browsers: ['last 3 versions']})
        ]))
        .pipe(gulp.dest("./src/css/"));
});

gulp.task('default', ['serve']);

/* =============================================================================
   Framework Sass
   ========================================================================== */
    // Compile sass into CSS
gulp.task('compileSass_FW', function () {
    return gulp.src('./framework/css/scss/styles.scss')
        .pipe(sass())
        .pipe(gulp.dest('./framework/css/compilation'));
});

    // CSSnano / PostCSS / Autoprefixer
gulp.task('processCSS_FW', ['compileSass_FW'], function() {
    gulp.src("./framework/css/compilation/styles.css")
        .pipe(cssnano([,
            postcss(),
            autoprefixer({browsers: ['last 3 versions']})
        ]))
        .pipe(gulp.dest("./framework/css"));
});

gulp.task('_framework', ['processCSS_FW']);