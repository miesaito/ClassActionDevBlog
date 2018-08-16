//plug-in
var gulp = require('gulp');
var pug = require('gulp-pug');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var csscomb = require('gulp-csscomb');

// オートコンパイル
var errorHandler = {
  function(err) {
    console.log(err.messageFormatted);
    this.emit('end');
  }
};
 
// jadeコンパイルタスク
gulp.task('pug', function() {
  gulp.src(['./pug/**/*.pug','!./pug/**/_*.pug'])
  .pipe(plumber(errorHandler))
  .pipe(pug({pretty: true}))
  .pipe(gulp.dest('./views'));
});

// Sassコンパイルタスク
gulp.task('sass', function(){
  gulp.src('./sass/**/*.sass')
  .pipe(plumber(errorHandler))
  .pipe(sass())
  .pipe(csscomb())
  .pipe(gulp.dest('./views'));
});

// ライブコーディング
gulp.task('watch', ['sass','pug'], function(){
    gulp.watch('./sass/**/*.sass', ['sass']);
    gulp.watch('./pug/**/*.pug',['pug']);
});