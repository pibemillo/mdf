var gulp = require('gulp');
var scsslint = require('../paths').scsslint;

var g = {
	scsslint: require('gulp-scss-lint'),
};

var OPTIONS_SCSSLINT = {
	config: scsslint.config,
	maxBuffer: 300000000,
	// reporterOutput: scsslint.report,
};

gulp.task('scsslint', function() {
	return gulp.src(scsslint.src)
		.pipe(g.scsslint(OPTIONS_SCSSLINT));
});
