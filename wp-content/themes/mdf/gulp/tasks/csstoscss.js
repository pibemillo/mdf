var gulp = require('gulp');
var csstoscss = require('../paths').csstoscss;

var g = {
	rename: require('gulp-rename'),
};

gulp.task('csstoscss', function() {
	return gulp.src(csstoscss.src)
		.pipe(g.rename(function(path) {
		path.basename = '_' + path.basename;
		path.extname = '.scss';
	}))
	.pipe(gulp.dest(csstoscss.dest));
});
