/**
 * Created by msnyder on 1/28/2016.
 */

var gulp = require('gulp');

gp_concat   = require('gulp-concat');
gp_rename   = require('gulp-rename');
gp_jslint   = require('gulp-jslint');
gp_uglify   = require('gulp-uglify');

gulp.task('default', function(){
    gulp.src(['js/*.js'])
        .pipe(gp_concat('script-concat.js'))
        .pipe(gulp.dest('js.min'))
        .pipe(gp_rename('js.min.js'))
        .pipe(gp_uglify())
        .pipe(gulp.dest('js-min'))

        .on('error', function (error) {
            console.error(String(error));
        });
});