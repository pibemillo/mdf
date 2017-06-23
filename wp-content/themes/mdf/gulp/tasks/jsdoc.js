/**
 * @description
 * JSDoc task documents JavaScript files
 */
var gulp = require('gulp');
var jsdoc = require('../paths').jsdoc;

var g = {
	jsdoc: require('gulp-jsdoc3'),
};

gulp.task('jsdoc', function() {
	return gulp.src(jsdoc.src)
		.pipe(g.jsdoc(jsdoc.dest));
});
