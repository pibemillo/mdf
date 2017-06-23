/**
 * @description
 * Scripts task lints, formats, documents and copies over JavaScript files to destanation folder
 */
var gulp = require('gulp');
var sequence = require('run-sequence');

gulp.task('scripts', function(cb) {
	return sequence(
		// 'jshint',
		// 'jscs',
		'clean:scripts',
		// 'jsdoc',
		'bundles',
		cb
	);
});
