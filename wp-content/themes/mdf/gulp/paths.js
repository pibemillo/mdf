// Root path to assets.
var ROOT = './assets/';

// Path to build compiled assets to.
var DEST = './build/';

// Path for auto-generated docs and reports
var DOCS = DEST + 'docs/';

// Path to NPM assets.
var NPM = './node_modules/';

// Path to Gulp tasks and paths.
var GULP = './gulp/';

// https://github.com/woothemes/FlexSlider
// var NPM_FLEXSLIDER = NPM + 'flexslider/';

// Paths to JavaScript files
var JS = ROOT + 'js/';
var JS_EX = '!' + JS;

// Paths to SCSS files
var SCSS = ROOT + 'scss/';

var paths = {};

/**
 * Clean
 *
 * Folders to remove before doing a build.
 */
paths.clean = {
	dest: DEST,
	styles: DEST + 'css/',
	scripts: DEST + 'js/',
	docs: DOCS,
};

/**
* Sass
*
* Compiles Sass into CSS and write sourcemaps.
*/
paths.sass = {
	src: SCSS + 'main.scss',
	dest: DEST + 'css',
	sourcemaps: './',
};

/**
* SCSSLint
*
* Linter for `.scss` files.
*/
paths.scsslint = {
	src: [
		SCSS + '**/*.scss',
		// '!' + SCSS + 'generic/css/**/*',
		// '!' + SCSS + 'css/**/*',
	],
	config: '.scss-lint.yml',
	report: DOCS + 'scss-lint-report.xml',
};

/**
* SassDoc
*
* Sass documentation generator.
*/
paths.sassdoc = {
	src: [
		SCSS + 'settings/**/*.scss',
		SCSS + 'tools/**/*.scss',
	],
	dest: DOCS + 'sassdoc/',
};

/**
* Copy
*
* Copy CSS/JS assets.
*/
paths.copy = {
	// 'normalize.css': {
	// 	src: NPM + 'normalize.css/normalize.css',
	// 	dest: SCSS + 'generic/css/'
	// },
	// 'flexslider.css': {
	// 	src:  NPM_FLEXSLIDER + 'flexslider.css',
	// 	dest: SCSS + 'css/'
	// },
	// 'flexslider.js': {
	// 	src: NPM_FLEXSLIDER + 'jquery.flexslider.js',
	// 	dest: JS + '/vendors/'
	// },
};

/**
* CSS to SCSS
*
* Convert CSS files in SCSS.
*/
paths.csstoscss = {
	src: SCSS + '**/*.css',
	dest: SCSS,
};

/**
 * Watch
 *
 * Watch JS/CSS files.
 */
paths.watch = {
	styles: [SCSS + '**/*.scss'],
	scripts: [
		GULP + '**/*.js',
		JS + '**/*.js',		
		// JS_EX + 'vendors/**/*.js',
	],
	templates: './**/*.php',
};

/**
 * PHP
 *
 * On-demand PHP server.
 */
paths.php = {
	src: './',
};

/**
 * JavaScript Bundles
 *
 * Add more properties to the `paths.bundles` object with
 * arrays of file names. Each group will be built into a
 * bundle file named: `{property name}.bundle.js`
 * e.g. `main.bundle.js`.
 */
paths.bundles = {
	sourcemaps: './',
	'main': [
		JS + 'custom.js',
		// JS + 'vendors/initr.js',
		// JS + 'app.track.js',
		// JS + 'initr.config.js',
		// JS + 'vendors/jquery.bvalidator.js',
		// JS + 'vendors/jquery.formit.js',
		// JS + 'vendors/jquery.magnific-popup.js',
		// JS + 'vendors/social-share.js',
		// JS + 'dump.js',
		// AACFOUNDATIONJS + 'foundation.core.js',
		// AACFOUNDATIONJS + 'foundation.util.mediaQuery.js',
		// AACFOUNDATIONJS + 'foundation.util.keyboard.js',
		// AACFOUNDATIONJS + 'foundation.util.box.js',
		// AACFOUNDATIONJS + 'foundation.util.triggers.js',
		// AACFOUNDATIONJS + 'foundation.util.motion.js',
		// AACFOUNDATIONJS + 'foundation.equalizer.js',
		// AACFOUNDATIONJS + 'foundation.reveal.js',
		// AACTHEME + 'js/script.js',
		// AACTHEME + 'js/assessment.js',
	],
	// 'foundation': [
	// 	AACFOUNDATIONJS + 'foundation.core.js',
	// 	AACFOUNDATIONJS + 'foundation.util.mediaQuery.js',
	// 	AACFOUNDATIONJS + 'foundation.util.keyboard.js',
	// 	AACFOUNDATIONJS + 'foundation.util.box.js',
	// 	AACFOUNDATIONJS + 'foundation.util.triggers.js',
	// 	AACFOUNDATIONJS + 'foundation.util.motion.js',
	// 	AACFOUNDATIONJS + 'foundation.equalizer.js',
	// 	AACFOUNDATIONJS + 'foundation.reveal.js',
	// ],
};

/**
 * Scripts
 *
 * Source JavaScript files, output minified to `DEST` folder.
 */
paths.scripts = {
	src: [
		JS + '**/*.js',
	],
	dest: DEST + 'js/',
};

/**
* JSHint
*
* Lint source JavaScript and Gulp files.
* Exclude files to not be linted with the `JS_EX` path.
*/
paths.jshint = {
	config: './.jshintrc',
	src: [
		JS + '**/*.js',
		// JS_EX + 'vendors/**/*',
		// AACTHEME + 'js/script.js',
		GULP + '**/*.js',
	],
};

/**
* JSCS
*
* Format JavaScript and Gulp files.
* Exclude files to not be formated with the `JS_EX` path.
*/
paths.jscs = {
	config: './.jscsrc',
	srcJs: [
		JS + '**/*.js',
		// JS_EX + 'vendors/**/*',
		// AACTHEME + 'js/script.js',
	],
	destJs: JS,
	srcGulp: GULP + '**/*.js',
	destGulp: GULP,
};

/**
* JSDoc
*
* JavaScript documentation generator.
*/
paths.jsdoc = {
	config: 'jsdoc.json',
	src: [
		GULP + '**/*.js',
		JS + 'README.md',
		JS + '**/*.js',
		JS_EX + 'vendors/**/*.js',
	],
	dest: DOCS + 'jsdoc/',
};

module.exports = paths;
