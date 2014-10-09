Welcome to [Fitak](http://www.fitak.cz)
=======================================

Fitak is a archiver of Facebook groups. It consists of 2 parts:

- `Back-end`: Fitak saves topics, comments and likes from selected Facebook groups.
- `Front-end`: Fitak is also a search engine. You can search by keywords, author and
	groups. It supports a tagging of topics. If original topic from the Facebook contains [tag1][tag2]...
	in the start, Fitak saves these tags separately. After that it is possible to use macro "tag: tag1, tag2"
	in the search query for a filtering. Moreover Fitak generates a tag cloud.

This project has started because students from my college (FIT CTU in Prague) use a lot of Facebook
groups for communication and it was very difficult to follow all the information effectively.

However this project is under [New BSD License](http://en.wikipedia.org/wiki/BSD_licenses#3-clause_license_.28.22New_BSD_License.22_or_.22Modified_BSD_License.22.29), so feel free to use it for your own website!

Requirements
------------
PHP 5.5+, MySQL, Node.js with NPM and Elasticsearch. It's based on the [Nette Framework](http://nette.org).

Installation
------------
- Execute `git clone https://github.com/fitak/fitak.git`
- Make directories `log` and `tmp` writable.
- Create MySQL database.
- Copy `/app/config/local_example.neon` to `/app/config/local.neon` and update database parameters.
- Open `/migrations/index.php` in your browser and click on "Run structures + basic-data + dummy-data" in the middle red section.
- Execute `npm install --global gulp` to install gulp globally
- Execute `gulp` to build CSS and JS
- Install elasticsearch from http://www.elasticsearch.org/overview/elkdownloads/
- Install ICU Analysis plugin (make sure to install the version corresponding to your elasticsearch version)
	from https://github.com/elasticsearch/elasticsearch-analysis-icu
- Start elasticsearch.
- Execute `php ./www/index.php elastic:reindex`
- Open `/www/index.php` in your browser. All users in database have password `heslo`.
