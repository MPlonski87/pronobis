var gulp = require('gulp');
var sass  = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('sass', function() {
  return gulp.src('assets/styles/scss/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('assets/styles/css/'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('browserSync', function() {
    browserSync.init({
        proxy: "http://localhost:8888/pronobis/"
    });
});

gulp.task('watch', ['browserSync', 'sass'], function (){
  gulp.watch('assets/styles/scss/*.scss', ['sass']); 
  gulp.watch('*.*', browserSync.reload); 
  gulp.watch('assets/styles/scss/*.js', browserSync.reload); 
});

gulp.task('build', function(){
	// build
});