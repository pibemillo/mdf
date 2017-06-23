var gulp = require('gulp');
var autoprefixer = require('autoprefixer');
var sass = require('../paths').sass;
var cssnano = require('gulp-cssnano');

var g = {
	sass: require('gulp-sass'),
	sourcemaps: require('gulp-sourcemaps'),
	postcss: require('gulp-postcss'),
	browsersync: require('browser-sync'),
	cssnano: require('gulp-cssnano'),
};

var OPTIONS = {
	sass: {
		precision: 10,
		errLogToConsole: true,
	},
	autoprefixer: {
		// https://github.com/twbs/bootstrap/blob/v4-dev/Gruntfile.js
		browsers: [
			'Chrome >= 35',
			'Explorer >= 9',
			'iOS >= 8',
			'Safari >= 8',
			'Android 2.3',
			'Android >= 4',
			'Opera >= 12',
		],
	},
	sourcemaps: {
		loadMaps: true,
	},
};

gulp.task('sass', function() {
	return gulp.src(sass.src)
		.pipe(g.sourcemaps.init(OPTIONS.sourcemaps))
		.pipe(g.sass(OPTIONS.sass))
		.pipe(g.sass().on('error', g.sass.logError))
		.pipe(g.postcss([autoprefixer(OPTIONS.autoprefixer)]))
		.pipe(g.cssnano())
		.pipe(g.sourcemaps.write(sass.sourcemaps))
		.pipe(gulp.dest(sass.dest))		
		.pipe(g.browsersync.stream());
});
