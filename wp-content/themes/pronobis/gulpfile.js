var gulp = require('gulp');
var browserSync = require('browserSync');

// watch
gulp.task('watch', function() {
    browserSync.init({
        proxy: "browser-sync start --proxy 'http://localhost:8888/pronobis/' --files '*.*'"
    });
});