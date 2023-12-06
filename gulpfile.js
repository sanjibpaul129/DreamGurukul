var gulp = require('gulp');
var cssnano = require('gulp-cssnano');
var sass = require('gulp-sass')(require('sass'));
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
const webp = require('gulp-webp');
const cleanCSS = require('gulp-clean-css');
var plumber = require('gulp-plumber');
var livereload = require('gulp-livereload');


gulp.task('js', function() {
    return gulp.src(['app/js/jquery.js', 'app/js/smooth.js', 'app/js/animation.js', 'app/js/jquery.colorbox-min.js', 'app/js/jquery.smoothZoom.min.js', 'app/js/app.js', 'app/js/slick.js', 'app/js/ecommerce_ga4.js'])
        .pipe(concat('all.js'))
        .pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest('assets/js'));
});

gulp.task('sass', function() {
    return gulp.src(['app/scss/_variable.scss', 'app/scss/main.scss', 'app/scss/custom.scss', 'app/scss/slick.scss'])
        .pipe(concat('all.css'))
        .pipe(sourcemaps.init())

    .pipe(sass())
        .pipe(plumber())
        .pipe(cssnano())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('assets/css'))
        .pipe(livereload());
});

gulp.task('watch', function() {
    var server = livereload();
    gulp.watch('app/scss/*.scss', gulp.series('sass'));
    gulp.watch('app/js/*.js', gulp.series('js'));
});

gulp.task('webp-converter', () =>
    gulp.src('app/images/*.*')
    .pipe(webp({
        quality: 100
    }))
    .pipe(plumber())
    .pipe(gulp.dest('assets/images'))
);

gulp.task('default', gulp.parallel('sass', 'js', 'webp-converter', 'watch'));