[![Build Status](https://travis-ci.org/derekr/gulp-hash-manifest.svg)](https://travis-ci.org/derekr/gulp-hash-manifest)

# gulp-hash-manifest
#### Creates a manifest of file paths and their hash.

A partial port of
[grunt-hash-manifest](https://github.com/gseguin/grunt-hash-manifest)
for use w/ [gulp](http://gulpjs.com/).

# Usage

```js
var concat = require('gulp-concat');
var gulp = require('gulp');
var hash = require('gulp-hash-manifest');

module.exports = function () {
    var files = [
        __dirname + '/public/css/*.css',
        __dirname + '/public/js/*.js'
    ];

    gulp.src(files)
        .pipe(hash())
        .pipe(concat('manifest'))
        .pipe(gulp.dest(__dirname + '/'));
};
```

The above would produce a txt file `./manifest` containing a
mapping of filepaths to their hash separted by newline
(thanks to [gulp-concat](https://github.com/wearefractal/gulp-concat)).

**./manifest**

```txt
/public/css/file1.css ################################
/public/js/file1.js ################################
```

# License

The MIT License (MIT)

Copyright (c) 2014 Derek Reynolds <drk@diy.org>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
