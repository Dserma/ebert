var browserSync = require('browser-sync').create();
var gulp = require('gulp');
var siteName = 'localhost';

var paths = {
  php: ['wp-content/themes/Bigatello/**/*.php'],
  scripts: ['wp-content/themes/Bigatello/css/**/*', 'wp-content/themes/Bigatello/js/**/*']
};

gulp.task('default', function () {
  browserSync.init({
    proxy: 'http://' + siteName + '/Bigatello',
    host: siteName,
    open: 'local',
    port: 8080
  });

  gulp.watch(paths.php).on('change', browserSync.reload);
  gulp.watch(paths.scripts).on('change', browserSync.reload);

});