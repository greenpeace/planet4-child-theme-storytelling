/* File: gulpfile.js */

// node packages
var gulp        = require('gulp'),
    gutil       = require('gulp-util'),
    //jshint      = require('gulp-jshint'),
    sass        = require('gulp-sass'),
    //rename      = require('gulp-rename'),
    //uglify      = require('gulp-uglify'),
    concat      = require('gulp-concat'),
    cleanCSS    = require('gulp-clean-css');

// define the default task and add the watch task to it
gulp.task('default', function () {
    return gulp.watch('_src/scss/**/*.scss', gulp.series('styles'));
});

// styles watch tasks
gulp.task('styles', function () {
    return gulp.src('_src/scss/crate.scss')
        .pipe(sass())
	    //.pipe(rename({ suffix: '-min' })) // add -min suffix to file
	    .pipe(gulp.dest('_src/css'));
});
