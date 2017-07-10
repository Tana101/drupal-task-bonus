var gulp = require('gulp');
var $    = require('gulp-load-plugins')();

var uglify = require('gulp-uglifyjs');


// to add extra paths from CSS frameworks
// this is empty because there are no CSS frameworks supporting this site 
var sassPaths = [];


gulp.task('sass', function() {
  return gulp.src('sites/all/themes/geek_label/scss/app.scss')
	.pipe($.sass({
	  includePaths: sassPaths
	})
	  .on('error', $.sass.logError))
	.pipe($.autoprefixer({
	  browsers: ['last 2 versions', 'ie >= 9']
	}))
	.pipe(gulp.dest('sites/all/themes/geek_label/css'));
});


gulp.task('uglifyjs', function() {
	return gulp.src('sites/all/themes/geek_label/js/app.js')
		.pipe(uglify('production.js'))
		.pipe(gulp.dest('sites/all/themes/geek_label/js/'));
});


gulp.task('default', ['sass', 'uglifyjs'], function() {
	// watching scss files for changes
	gulp.watch(['sites/all/themes/geek_label/scss/**/*.scss'], ['sass']);

	// watching js file for changes
	gulp.watch(['sites/all/themes/geek_label/js/app.js'], ['uglifyjs']);
});

