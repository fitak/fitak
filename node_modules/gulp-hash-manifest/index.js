var through = require('through2');
var crypto = require('crypto');

function format (_path, hash) {
    return _path + ' ' + hash.digest('hex');
}

function hashStream (_path, hash) {
    var stream = through.obj(
        function transform (chunk, enc, callback) {
            hash.update(chunk);
            callback();
        },

        function flush (callback) {
            this.push(format(_path, hash));
            callback();
        }
    );

    return stream;
};

module.exports = function (options) {
    options = options || {};

    if (!options.algo) options.algo = 'md5';

    var stream = through.obj(function (file, inc, callback) {
        var _path = '';

        if (file.path !== null) _path = file.path.toString();

        var hash = crypto.createHash(options.algo);

        if (file.isNull()) {
            this.push(file);
            return callback();
        }

        if (file.isBuffer()) {
			hash.update(file.contents);
			file.contents = new Buffer(format(_path, hash));

            this.push(file);
            return callback();
        }

        if (file.isStream()) {
            var streamer = hashStream(_path, hash);
            streamer.on('error', this.emit.bind(this, 'error'));
            file.contents = file.contents.pipe(streamer);

            this.push(file);
            return callback();
        }
    });

    return stream;
};
