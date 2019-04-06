let gulp        = require('gulp');
let browserSync = require('browser-sync').create();
let sass        = require('gulp-sass');
let cleanCSS = require('gulp-clean-css');
let sourcemaps = require('gulp-sourcemaps');
let rename = require('gulp-rename');
let concat = require('gulp-concat');
let uglify = require('gulp-uglify');
let gutil = require('gulp-util');

gulp.task('vendor', function() {
    return gulp.src('assets/js/*.js')
        .pipe(concat('vendor.js'))
        .pipe(gulp.dest('assets/vendor'))
        .pipe(uglify())
        .pipe(rename('vendor.min.js'))
        .pipe(gulp.dest('js/vendor'))
        .on('error', gutil.log)
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('sass', function () {
    return gulp.src('assets/sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('styles', function () {
    return gulp.src('assets/css/**/*.css')
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(concat('main.css'))
        .pipe(rename('main.min.css'))
        .pipe(cleanCSS())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('css'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('img', function () {
    return gulp.src('assets/img/**/*')
        .pipe(gulp.dest("img"))
        .pipe(browserSync.reload({stream: true}))

});

gulp.task("watch", function () {
    browserSync.init({
        proxy: 'http://exam/',
    });
    gulp.watch('assets/sass/**/*.scss', gulp.parallel("sass"));
    gulp.watch('assets/js/**/*.js', gulp.parallel("vendor"));
    gulp.watch('assets/img/**/*', gulp.parallel("img"));
    gulp.watch('assets/css/**/*.css', gulp.parallel("styles"));
});

gulp.task('default', gulp.parallel('watch','sass', 'img', 'vendor', 'styles'));