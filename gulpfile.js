var gulp         = require('gulp');
var sass         = require('gulp-sass');
var postcss      = require("gulp-postcss");
var cssnano      = require('gulp-cssnano');
var autoprefixer = require('gulp-autoprefixer');

    // Static Server + watching scss files
gulp.task('serve', ['stylesheets'], function() {
    gulp.watch("./etc/css/custom/*.scss", ['stylesheets']);
    gulp.watch("./etc/css/custom/variables/*.scss", ['stylesheets']);
    gulp.watch("./etc/css/scss/*.scss", ['stylesheets']);
});

    // Compile sass into CSS
gulp.task('sass', function () {
    return gulp.src('./etc/css/custom/styles.scss')
        .pipe(sass())
        .pipe(gulp.dest('./etc/css/compilation'));
});

    // Post CSS / CSSnano / Autoprefixer
//gulp.task("stylesheets", ['sass'], function() {
//    gulp.src("./etc/css/compilation/styles.css")
//        .pipe(postcss([
//            cssnano(),
//            autoprefixer({browsers: ['last 3 versions']})
//        ]))
//        .pipe(gulp.dest("./src/css/compilation"));
//});

    // Post CSS / CSSnano / Autoprefixer
gulp.task("stylesheets", ['sass'], function() {
    gulp.src("./etc/css/compilation/styles.css")
        .pipe(autoprefixer({browsers: ['last 3 versions']}[
            cssnano(),
            postcss()
        ]))
        .pipe(gulp.dest("./src/css/compilation"));
});

    // CSSnano / Autoprefixer
//gulp.task("stylesheets", ['sass'], function() {
//    gulp.src("./etc/css/compilation/styles.css")
//        .pipe(cssnano([
//            autoprefixer({browsers: ['last 3 versions']})
//        ]))
//        .pipe(gulp.dest("./src/css/"));
//});

gulp.task('default', ['serve']);