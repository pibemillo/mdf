var gulp = require('gulp');
var clean = require('../paths').clean;

var g = {
	clean: require('gulp-rimraf'),
};

// Remove style builds
gulp.task('clean:styles', function() {
	return gulp.src(clean.styles, {read: false})
		.pipe(g.clean());
});

// Remove script builds
gulp.task('clean:scripts', function() {
	return gulp.src(clean.scripts, {read: false})
		.pipe(g.clean());
});

// Remove documentation
gulp.task('clean:docs', function() {
	return gulp.src(clean.docs, {read: false})
		.pipe(g.clean());
});

// Remove all build folders
gulp.task('clean', function() {
	return gulp.src(clean.dest, {read: false})
		.pipe(g.clean());
});
