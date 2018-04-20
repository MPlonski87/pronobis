var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var del = require('del');
var autoprefixer = require('gulp-autoprefixer');
var concatCss = require('gulp-concat-css');
var cleanCSS = require('gulp-clean-css');

// move node_modules files
var filesToMove = [
  './node_modules/normalize.css/normalize.css',
  './node_modules/flexboxgrid/dist/flexboxgrid.min.css',
  './node_modules/animate.css/animate.min.css',
];

// clean dist
gulp.task('clean', function() {
  del(['./dist/*'], { force: true });
});

// sass
gulp.task('sass', function() {
  return gulp.src('assets/styles/scss/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('assets/styles/css/'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

// autoprefix css
gulp.task('autoprefix-css', () => {
  gulp.src('assets/styles/css/*.css')
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('assets/styles/css/'))
});

// minify css
gulp.task('cleanCSS', () => {
  return gulp.src('assets/styles/css/*.css')
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(gulp.dest('assets/styles/css/'));
});

// concat css
gulp.task('concatCSS', function() {
  return gulp.src([
      'assets/styles/css/*.css',
      'node_modules/normalize.css/normalize.css',
      'node_modules/flexboxgrid/dist/flexboxgrid.min.css',
      'node_modules/animate.css/animate.min.css'
    ])
    .pipe(concatCss("assets/styles/css/style.css"))
    .pipe(gulp.dest(''));
});

// browsersync
gulp.task('browserSync', function() {
  browserSync.init({
    proxy: "http://localhost/pronobis/"
  });
});

// redirect compiled css
gulp.task('redirect-css', function() {
  gulp.src('assets/styles/css/*.css')
    .pipe(gulp.dest('dist/assets/styles/css/'));
});

// redirect vendor
gulp.task('redirect-vendor', function() {
  gulp.src(filesToMove, { base: './' })
    .pipe(gulp.dest('vendor'));
});

// compile
gulp.task('compile', ['clean', 'redirect-vendor', 'sass', 'autoprefix-css', 'concatCSS', 'cleanCSS', 'redirect-css'], function() {
  gulp.watch('assets/styles/scss/**/*.scss', ['sass']);
  gulp.watch('*.*', browserSync.reload);
  gulp.watch('./templates/*.*', browserSync.reload);
});

// watch
gulp.task('watch', ['compile', 'browserSync'], function() {
  gulp.watch('assets/styles/scss/**/*.scss', ['sass']);
  gulp.watch('*.*', browserSync.reload);
  gulp.watch('./templates/*.*', browserSync.reload);
});

// build
gulp.task('build', ['clean', 'redirect-vendor', 'sass', 'redirect-css', ], function() {});