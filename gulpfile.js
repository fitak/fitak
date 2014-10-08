var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var postcss = require('gulp-postcss');
var sourcemaps = require('gulp-sourcemaps');
var hashManifest = require('gulp-hash-manifest');
var csswring = require('csswring');

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

gulp.task('default', ['compile-css', 'compile-js', 'hash-manifest']);

gulp.task('watch', ['compile-css', 'compile-js', 'hash-manifest'], function () {
	gulp.watch(config.cssFiles, ['compile-css']);
	gulp.watch(config.jsFiles, ['compile-js']);
});

gulp.task('compile-css', function (cb) {
	getClassSet(function (classSet) {
		gulp.src(config.cssFiles)
			.pipe(sourcemaps.init())
			.pipe(concat('compiled.css'))
			.pipe(postcss([removeUselessCss, csswring], {classSet: classSet}))
			.pipe(sourcemaps.write('maps'))
			.pipe(gulp.dest(config.outputDir))
			.on('end', cb);
	});
});

gulp.task('compile-js', function () {
	return gulp.src(config.jsFiles)
		.pipe(sourcemaps.init())
		.pipe(concat('compiled.js'))
		.pipe(uglify())
		.pipe(sourcemaps.write('maps'))
		.pipe(gulp.dest(config.outputDir));
});

gulp.task('hash-manifest', ['compile-css', 'compile-js'], function () {
	return gulp.src(config.outputDir + '/*')
		.pipe(hashManifest())
		.pipe(concat('hash.txt'))
		.pipe(gulp.dest(config.outputDir))
});
