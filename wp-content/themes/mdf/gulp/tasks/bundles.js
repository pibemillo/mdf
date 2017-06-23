var gulp = require('gulp');
var bundles = require('../paths').bundles;
var scripts = require('../paths').scripts;

var g = {
	concat: require('gulp-concat'),
	rename: require('gulp-rename'),
	uglify: require('gulp-uglify'),
	sourcemaps: require('gulp-sourcemaps'),
	babel : require('gulp-babel'),
	es2015 : require('babel-preset-es2015'),
};

var bundleTasks = Object.keys(bundles);

// Create a JavaScript bundle for each group of files.
bundleTasks.forEach(function(name) {
	gulp.task(name, function() {
		return gulp.src(bundles[name])
			.pipe(g.sourcemaps.init())
			.pipe(g.concat(name + '.js'))
			.pipe(g.rename({ suffix: '.bundle' }))
			.pipe(g.babel({ presets: [g.es2015] }))
			.pipe(g.uglify())
			.pipe(g.sourcemaps.write(bundles.sourcemaps))			
			.pipe(gulp.dest(scripts.dest));
	});
});

// Alias all bundle tasks under the `bundles` task name.
gulp.task('bundles', bundleTasks);
