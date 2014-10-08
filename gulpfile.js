var gulp = require('gulp');
var minifyCss = require('gulp-minify-css');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var postcss = require('gulp-postcss');
var hashManifest = require('gulp-hash-manifest');

var removeUselessCss = function (css, options) {
	css.eachRule(function (rule) {
		rule.selectors = rule.selectors.filter(function (selector) {
			var classes = selector.match(/\.[\w-]+/g);
			return (classes === null || classes.every(function (className) {
				return !!options.classSet[className];
			}));
		});

		if (rule.selector === '') {
			rule.removeSelf();
		}
	});
};

var extractClasses = function (s) {
	var regExp = /class\s*=>?\s*(?:([\w -]+)|(["'])(.+?)\2)/gi;
	var matches, result = [];
	while ((matches = regExp.exec(s)) !== null) {
		var classList = (matches[1] || matches[3]).replace(/[^\w -]/g, '').trim().split(/\s+/);
		Array.prototype.push.apply(result, classList);
	}
	return result;
};

var getClassSet = function (cb) {
	var classList = config.keepClasses, classSet = {};
	gulp.src(config.latteFiles)
		.on('data', function (file) {
			var contents = file.contents.toString();
			Array.prototype.push.apply(classList, extractClasses(contents));
		})
		.on('end', function () {
			classList.forEach(function (className) {
				classSet['.' + className] = true;
			});
			cb(classSet);
		});
};

var config = {
	cssFiles: './www/css/**/*.css',
	jsFiles: ['./www/js/libs/jquery-2.1.1.js', './www/js/**/*.js'],
	latteFiles: './app/**/*.latte',
	keepClasses: ['label', 'label-info', 'open'],
	outputDir:'./www/build'
};

gulp.task('default', ['compile-css', 'compile-js'], function () {

});

gulp.task('watch', ['compile-css-dev', 'compile-js-dev'], function () {
	gulp.watch(config.cssFiles, ['compile-css-dev']);
	gulp.watch(config.jsFiles, ['compile-js-dev']);
});

gulp.task('compile-css', function (cb) {
	getClassSet(function (classSet) {
		gulp.src(config.cssFiles)
			.pipe(concat('compiled.css'))
			.pipe(postcss([removeUselessCss], {classSet: classSet}))
			.pipe(minifyCss())
			.pipe(gulp.dest(config.outputDir))
			.on('end', cb);
	});
});

gulp.task('compile-css-dev', function (cb) {
	getClassSet(function (classSet) {
		gulp.src(config.cssFiles)
			.pipe(concat('compiled.css'))
			.pipe(postcss([removeUselessCss], {classSet: classSet}))
			.pipe(gulp.dest(config.outputDir))
			.on('end', cb);
	});
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

gulp.task('hash-manifest', function () {
	return gulp.src(config.outputDir + '/*')
		.pipe(hashManifest())
		.pipe(concat('hash.txt'))
		.pipe(gulp.dest(config.outputDir))
});
