'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');

// Process the SASS files
gulp.task('sass', function() {
    gulp.src('web/css/scss/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./web/css/'));
});

// Process the JS files
gulp.task('js', function(){
    gulp.src([
        'web/js/scripts.js'
    ])
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('./web/js/min/'));
});

// Watch Sass ONLY
gulp.task('sass:watch', function() {
	gulp.watch('css/scss/modules/*.scss', ['sass']);
    gulp.watch('css/scss/modules/**/*.scss', ['sass']);
});

// Watch JS ONLY
gulp.task('js:watch', function() {
	gulp.watch('web/css/scss/modules/*.scss', ['js']);
    gulp.watch('web/css/scss/modules/**/*.scss', ['js']);
});

// Watch for any changes
gulp.task('default',function() {
    // watch for changes to css
    gulp.watch('web/css/scss/modules/*.scss', ['sass']);
    gulp.watch('web/css/scss/modules/**/*.scss', ['sass']);

    // watch for changes to js
    gulp.watch('web/js/scripts.js', ['js']);
    gulp.watch('web/js/modules/*.js', ['js']);
});
