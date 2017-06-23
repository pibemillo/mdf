var gulp = require('gulp');
var sequence = require('run-sequence');

gulp.task('styles', function(cb) {
	return sequence(
		'scsslint',
		// 'csscomb',
		'clean:styles',
		'sass',
		// 'sassdoc',
		cb
	);
});
