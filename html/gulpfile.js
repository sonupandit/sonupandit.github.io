'use strict';
var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    sourcemaps = require('gulp-sourcemaps'),
    cleanCSS = require('gulp-clean-css'),
    notify = require("gulp-notify"),
    plumber = require('gulp-plumber'),
    del = require('del');

var paths = {
  styles: {
    src: [      
      "src/scss/*.scss"
    ],
    dest: "css-altac"
  },
  scripts: {
    src: [
      "node_modules/jquery/dist/jquery.min.js",
      "node_modules/gsap/dist/gsap.min.js",
      "node_modules/gsap/dist/ScrollTrigger.min.js",
      "src/js/app.js"
    ],
    dest: "js-altac"
  }
};

var onError = function (err) {
    notify().write(err);
    this.emit('end');
};

function clean() {
 /* return del([ 'assets' ]);*/
}

function styles() {
  return gulp.src(paths.styles.src)
    .pipe(plumber({ errorHandler: onError }))
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(autoprefixer('last 4 versions'))
    .pipe(rename({
      basename: 'app'
    }))
    .pipe(sourcemaps.write(''))
    .pipe(gulp.dest(paths.styles.dest));
}

function scripts() {
  return gulp.src(paths.scripts.src, { sourcemaps: true })
    .pipe(plumber({ errorHandler: onError }))
    .pipe(uglify())
    .pipe(concat('app.js'))
    .pipe(gulp.dest(paths.scripts.dest));
}

function watch() {
  gulp.watch(paths.scripts.src, scripts);
  gulp.watch(paths.styles.src, styles);
}

exports.clean = clean;
exports.styles = styles;
exports.scripts = scripts;
exports.watch = watch;

gulp.task('default', watch);