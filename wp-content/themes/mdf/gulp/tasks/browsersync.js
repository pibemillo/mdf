var gulp = require('gulp');
var watch = require('../paths').watch;

var g = {
	browsersync: require('browser-sync'),
};

var OPTIONS_BROWSERSYNC = {
	proxy: 'mdf:8888',
	port: 8080,
	open: false,
	notify: false,
};

// gulp.task('browsersync', ['phpserver'], function() {
gulp.task('browsersync', function() {
	g.browsersync(OPTIONS_BROWSERSYNC);
	gulp.watch(watch.styles).on('change', function() {
		gulp.run('styles');
		g.browsersync.reload();
	});
	gulp.watch(watch.scripts).on('change', function() {
		gulp.run('scripts');
		g.browsersync.reload();
	});
	gulp.watch(watch.templates).on('change', function() {
		g.browsersync.reload();
	});
});
