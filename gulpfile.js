const gulp = require('gulp');
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass');

gulp.task('sass', function () {
  return gulp.src('./themes/coax/assets/scss/app.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./themes/coax/assets/css'))
});

gulp.task('serve', ['sass'], function() {
  gulp.watch('./themes/coax/assets/scss/**/*.scss', ['sass']);
});

gulp.task('default', ['serve']);