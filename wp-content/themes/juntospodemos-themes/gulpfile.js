var gulp 	= require('gulp'),
  	sass 	= require('gulp-sass'),
  	concat 	= require('gulp-concat'),
  	uglify 	= require('gulp-uglify'),
  	rename 	= require('gulp-rename'),
    cleanCSS = require('gulp-clean-css');

var paths = {
  styles: {
    src: 'src/sass/**/*.scss',
    dest: 'assets/css'
  },
  scripts: {
    src: 'src/js/*.js',
    dest: 'assets/js'
  }
};

function styles() {
  return gulp
  	.src(paths.styles.src, {
      sourcemaps: true
    })
  .pipe(sass())
  .pipe(rename({
    basename: 'main',
    suffix: ''
  }))
.pipe(cleanCSS({debug: true}))
.pipe(concat('main.css'))
.pipe(gulp.dest(paths.styles.dest));
}

function scripts() {
  return gulp
  .src(paths.scripts.src, {
    sourcemaps: true
  })
  .pipe(uglify())
  .pipe(concat('main.min.js'))
  .pipe(gulp.dest(paths.scripts.dest));
}

function watch() {
  gulp.watch(paths.scripts.src, scripts);
  gulp.watch(paths.styles.src, styles);
}

var build = gulp.parallel(styles, scripts, watch);

gulp.task(build);
gulp.task('default', build);