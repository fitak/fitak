var gulp = require('gulp');
var minifyCss = require('gulp-minify-css');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

var config = {
	cssFiles: './fitak.cz/css/**/*.css',
	jsFiles: ['./fitak.cz/js/jquery-2.1.1.js', './fitak.cz/js/**/*.js'],
	outputDir:'./fitak.cz/build/'
};

gulp.task('default', ['compile-css', 'compile-js'], function () {

});

gulp.task('watch', ['compile-css-dev', 'compile-js-dev'], function () {
	gulp.watch(config.cssFiles, ['compile-css-dev']);
	gulp.watch(config.jsFiles, ['compile-js-dev']);
});

gulp.task('compile-css', function () {
	return gulp.src(config.cssFiles)
		.pipe(minifyCss())
		.pipe(concat('compiled.css'))
		.pipe(gulp.dest(config.outputDir));
});

gulp.task('compile-css-dev', function () {
	return gulp.src(config.cssFiles)
		.pipe(concat('compiled.css'))
		.pipe(gulp.dest(config.outputDir));
});

gulp.task('compile-js', function () {
	return gulp.src(config.jsFiles)
		.pipe(uglify())
		.pipe(concat('compiled.js'))
		.pipe(gulp.dest(config.outputDir));
});

gulp.task('compile-js-dev', function () {
	return gulp.src(config.jsFiles)
		.pipe(concat('compiled.js'))
		.pipe(gulp.dest(config.outputDir));
});
