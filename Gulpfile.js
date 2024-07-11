'use strict';
 
var gulp = require('gulp')
var sass = require('gulp-sass')
var watchSass = require('gulp-watch-sass')
var util = require('gulp-util')
var rename = require('gulp-rename')
var cleanCSS = require('gulp-clean-css')
var log = util.log 
var uglifycss = require('gulp-uglifycss')
var sourcemaps = require('gulp-sourcemaps')
var paths = {
  sass: ['./assets/sass/**/*.scss']
}
sass.compiler = require('node-sass')
 

// gulp.task('default', ['sass', 'watch']);

gulp.task('sass', function () {
  return gulp.src('./assets/sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write('.'))
    .on('error', sass.logError)
    .pipe(rename({ suffix: '.min' }))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(uglifycss({
      "maxLineLen": 80,
      "uglyComments": true
    }))
    .pipe(gulp.dest('./assets/css/'))
})


gulp.task('watch', function(){
  gulp.watch('assets/sass/**/*.scss', gulp.series(['sass']));
})