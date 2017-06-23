var gulp = require('gulp');
var sassdoc = require('../paths').sassdoc;

var g = {
	sassdoc: require('sassdoc'),
};

var OPTIONS_SASSDOC = {
	'dest': sassdoc.dest,
	'verbose': true,
	'basePath': 'https://github.com/referralsolutionsgroup/frontend-framework',
};

gulp.task('sassdoc', function() {
	return gulp.src(sassdoc.src)
		.pipe(g.sassdoc(OPTIONS_SASSDOC));
});
