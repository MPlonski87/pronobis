var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

// sass
gulp.task('sass', function() {
  return gulp.src('assets/styles/scss/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('assets/styles/css/'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

// browsersync
gulp.task('browserSync', function() {
  browserSync.init({
    proxy: "http://localhost/pronobis/"
  });
});

// watch
gulp.task('watch', ['browserSync', 'sass'], function() {
  gulp.watch('assets/styles/scss/**/*.scss', ['sass']);
  gulp.watch('*.*', browserSync.reload);
  gulp.watch('./templates/*.*', browserSync.reload);
});

// build
gulp.task('build', function() {
/*  return gulp.src('assets/styles/css/*.css')
    .pipe(gulp.dest('dist/styles/css/'))*/
});