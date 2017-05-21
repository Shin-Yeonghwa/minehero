var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
var sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const webserver = require('gulp-webserver');

// browserSync task
gulp.task('browserSync', function() {
	browserSync({
		files : ['*.html','*.php'],
		proxy: 'localhost:3333/',
		open: 'external',
		logPrefix: "bs"
	});
	gulp.watch(['src/**/*.html','src/**/*.php', 'src/css/*.css', 'src/js/*.js']).on('change', browserSync.reload);
});

gulp.task('sass', function () {
  gulp.src('./src/scss/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(autoprefixer())
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest('./src/css'));
});

gulp.task('sass-watch', function () {
  gulp.watch('./src/scss/**/*.scss', ['sass']);
});

gulp.task('start', function() {
    gulp.watch('./src/scss/**/*.scss', ['sass']);
    gulp.src('src')
        .pipe(webserver({
        port: 3333,
        livereload: false,
        directoryListing: false
        }));
    browserSync({
		files : ['*.html','*.php'],
		proxy: 'localhost:3333/',
		open: 'external',
		logPrefix: "bs"
	});
	gulp.watch(['src/**/*.html','src/**/*.php', 'src/css/*.css', 'src/js/*.js']).on('change', browserSync.reload);
});

//gulp.task('default', ['sass-watch', 'browserSync']);
