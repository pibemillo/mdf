var gulp = require('gulp');
var php = require('../paths').php;

var g = {
	php: require('gulp-connect-php'),
};

console.log(php.src);
var OPTIONS_PHP = {
	base: php.src,
	port: 8010,
	keepalive: true,
};

gulp.task('phpserver', function() {
	g.php.server(OPTIONS_PHP);
});
