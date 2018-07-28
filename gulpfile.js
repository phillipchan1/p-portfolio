const gulp = require('gulp');
const connect = require('gulp-connect-php');
const browserSync = require('browser-sync');

gulp.task('connect-sync', function() {
  connect.server({}, function (){
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  });

  gulp.watch(['**/*.php', '**/*.css']).on('change', function () {
    browserSync.reload();
  });
});

gulp.task('default', ['connect-sync']);