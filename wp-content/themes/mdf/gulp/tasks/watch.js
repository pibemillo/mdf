var gulp = require('gulp');
var watch = require('../paths.js').watch;

gulp.task('watch', function() {
	gulp.watch(watch.styles, ['styles']);
	gulp.watch(watch.scripts, ['scripts']);
});
