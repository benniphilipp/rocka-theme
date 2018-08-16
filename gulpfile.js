
/**

 */

var gulp            = require('gulp');
var browserSync     = require('browser-sync').create();
var plumber         = require('gulp-plumber');
var sass            = require('gulp-sass');
var autoprefixer    = require('gulp-autoprefixer');
//var cleanCSS        = require('gulp-clean-css');
var rename          = require("gulp-rename");
var sourcemaps      = require('gulp-sourcemaps');

gulp.task('sass',function(){
    gulp.src('tamplates-assets/*.sass')
        .pipe(sourcemaps.init())
            .pipe(plumber())
            .pipe(sass())
            .pipe(autoprefixer())
            //.pipe(cleanCSS())
            .pipe(rename({ suffix: '.min'}))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('default', function() {
    browserSync.init({
        proxy: "http://localhost:9999/rock"
    });
    gulp.watch("*.php").on("change", browserSync.reload);
    gulp.watch("tamplates-pages/*.php").on("change", browserSync.reload);
    gulp.watch(['tamplates-assets/*.sass'],['sass']);
});
