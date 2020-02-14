const gulp = require('gulp'),
			watch = require('gulp-watch'),
			less = require('gulp-less');
			//path = require('path');

// Static Server + watching scss/html files
//gulp.watch("css/*.scss", gulp.series('scss'));



gulp.task('less', function () {
  return gulp.src('../css/**/*.less')
    .pipe(less())
    .pipe(gulp.dest('../css'));
});

gulp.task('watch', function () {
    gulp.watch('../css/**/*.less', gulp.series('less'))
});