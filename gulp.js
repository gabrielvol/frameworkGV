var gulp = require('gulp');
var pleeease = require('gulp-pleeease');

gulp.task('css', function () {
    gulp.src('./src/*.css')
    .pipe(pleeease({
        out: 'out.min.css'
    }))
    .pipe(gulp.dest('./dest'));
});