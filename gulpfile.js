'use strict';

const gulp = require('gulp'),
      sass = require('gulp-sass'),
      livereload = require('gulp-livereload');

gulp.task('default', function(){
	console.log('test');
});

gulp.task('sass', function(){
	return gulp.src('scss/*.scss')
	//.pipe(sass({includePaths: ['./node_modules/foundation-sites/scss']}))
	.pipe(sass())
	.pipe(gulp.dest(''))
	.pipe(livereload());
});


gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('scss/*.scss', ['sass']);
});

