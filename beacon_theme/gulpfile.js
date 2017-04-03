var gulp = require('gulp');
var livereload = require('gulp-livereload');
var sourcemaps = require('gulp-sourcemaps');
var $    = require('gulp-load-plugins')();

var sassPaths = [
  'bower_components/normalize.scss/sass',
  'bower_components/foundation-sites/scss',
  'bower_components/motion-ui/src'
];

gulp.task('sass', function() {
  return gulp.src('scss/app.scss')
    .pipe(sourcemaps.init())
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('../css'));
});

gulp.task('default', ['sass'], function() {
  gulp.watch(['scss/**/*.scss'], ['sass']);
});

gulp.task('default', function(){
  livereload.listen();
  gulp.watch('scss/**/*.scss', ['sass']);
  gulp.watch(['../css/app.css ', '../**/*.html', '../**/*.php'], function (files){
       livereload.changed(files);
     });
});
