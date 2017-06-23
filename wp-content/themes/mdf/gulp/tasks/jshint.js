/**
 * @description
 * Jshint task lints JavaScript files
 */
var gulp = require('gulp');
var stylish = require('jshint-stylish');
var jshint = require('../paths').jshint;

var g = {
	jshint: require('gulp-jshint'),
};

// Lint all Gulp and source JavaScript files.
gulp.task('jshint', function() {
	return gulp.src(jshint.src)
		.pipe(g.jshint())
		.pipe(g.jshint.reporter(stylish));
});
