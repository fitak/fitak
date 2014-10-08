var es = require('event-stream');
var File = require('vinyl');
var hash = require('./');
var test = require('tap').test;

test('buffer', function (t) {
    var fakeFile = new File({
        contents: new Buffer('abufferwiththiscontent'),
        path: 'test'
    });

    var hasher = hash();

    hasher.write(fakeFile);

    hasher.once('data', function (file) {
        t.ok(file.isBuffer(), 'buffer');
        t.equal(
            file.contents.toString(),
            'test 2f280040e4a5f6d73fc38d6dd48dbb50',
            'correct manifest'
        );

        t.end();
    });
});

test('stream', function (t) {
    var fakeFile = new File({
        contents: es.readArray(['stream', 'with', 'those', 'contents']),
        path: 'test'
    });

    var hasher = hash();

    hasher.write(fakeFile);

    hasher.once('data', function (file) {
        t.ok(file.isStream(), 'stream');
        file.contents.pipe(es.wait(function (err, data) {
            t.equal(
                data.toString(),
                'test 4c2988e5cb6183d2d49762d72b0dd9d5',
                'correct manifest'
            );

            t.end();
        }));
    });
});
