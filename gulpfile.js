
var gulp = require('gulp');
var sass = require('gulp-sass');
// var cssnano = require('gulp-cssnano');

gulp.task('sass', function(){
  return gulp.src('assets/scss/**/*.scss')
    .pipe(sass()) // Using gulp-sass
    //.pipe(cssnano())
    .pipe(gulp.dest('assets/dist/css'))
});

gulp.task('watch', function(){
  gulp.watch('assets/scss/**/*.scss', gulp.series(['sass'])); 
  // Other watchers
});