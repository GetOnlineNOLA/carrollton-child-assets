'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');


gulp.task('workflow', function () {
  return gulp.src('./sass/carrollton-brand-base.scss')
    .pipe(sass().on('error', sass.logError))

  .pipe(gulp.dest('./wp-content/themes/carrollton-child/css/'))
});

gulp.task('default', function () {
	gulp.watch('./sass/**/*.scss', gulp.series('workflow'));
});
