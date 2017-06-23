var gulp = require('gulp');
var copy = require('../paths').copy;

var bundleTasks = Object.keys(copy);

// Create a task for each group to copy from its `src` to its `dest`.
bundleTasks.forEach(function(name) {
	var bundle = copy[name];
	gulp.task(name, function() {
		return gulp.src(bundle.src)
			.pipe(gulp.dest(bundle.dest));
	});
});

// Alias all copy tasks under the `copy` task name.
gulp.task('copy', bundleTasks);
