var gulp        = require('gulp');
var browserSync = require('browser-sync').create();

gulp.task('watch', function() {
    browserSync.init({
        proxy: "http://localhost:3000/pronobis/"
    });
});