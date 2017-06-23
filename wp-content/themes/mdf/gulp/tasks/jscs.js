/**
 * @description
 * JScs task lints and formats JavaScript files
 */
var gulp = require('gulp');
var jscs = require('../paths').jscs;

var g = {
	jscs: require('gulp-jscs'),
	stylish: require('gulp-jscs-stylish'),
};

var OPTIONS_JSCS = {
	configPath: jscs.config,
	fix: false,
};

gulp.task('jscs-js', function() {
	return gulp.src(jscs.srcJs)
		.pipe(g.jscs(OPTIONS_JSCS))
		.pipe(g.stylish())
		.pipe(gulp.dest(jscs.destJs));
});

gulp.task('jscs-gulp', function() {
	return gulp.src(jscs.srcGulp)
		.pipe(g.jscs(OPTIONS_JSCS))
		.pipe(g.stylish())
		.pipe(gulp.dest(jscs.destGulp));
});

gulp.task('jscs', ['jscs-js', 'jscs-gulp']);
