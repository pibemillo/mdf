/**
 * Tasks
 *
 * Configure the tasks to be loaded.
 * Comment out what is not needed.
 */
var tasks = [
  'copy',
  'clean',
  // 'csstoscss',
  'scsslint',
  'sass',
  // 'sassdoc',
  'styles',
  'runner',
  'watch',
  // 'phpserver',
  'browsersync',
  'bundles',
  'jshint',
  'jscs',
  'scripts',
  // 'jsdoc',
];

/**
 * Task Loader (DO NOT EDIT)
 */
require('./gulp/loader')(tasks);