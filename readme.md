Welcome to [Fitak](http://www.fitak.cz)
=======================================

Fitak is a archiver of Facebook groups. It consits of 2 parts:

- `Back-end`: Fitak saves topics, comments and likes from selected Facebook groups.
- `Front-end`: Fitak is also a search engine. You can search by keywords, author and
	groups. It supports a tagging of topics. If original topic from the Facebook contains [tag1][tag2]...
	in the start, Fitak saves these tags seperatly. After that it is possible to use macro "tag: tag1, tag2"
	in the search query for a filtering. Moreover Fitak generates a tag cloud.

This project has started because students from my college (FIT CTU in Prague) use a lot of Facebook
groups for communication and it was very difficult to follow all the information effectively.

However this project is under [New BSD License](http://en.wikipedia.org/wiki/BSD_licenses#3-clause_license_.28.22New_BSD_License.22_or_.22Modified_BSD_License.22.29), so feel free to use it for your own website!

Requirements
------------
PHP 5.3 or later and MySQL. It's based on the [Nette Framework](https://github.com/nette/nette).

Installation
------------
- Create a database from /sql-structure.sql
- Rename `/app/config/devel_example.neon` to `devel.neon` and edit parameters for your devel DB
- Rename `/app/config/product_example.neon` to `product.neon` and edit parameters for your product DB
- You need a developer account on the Facebook.
- Create a new Facebook application `https://developers.facebook.com/apps`.
- Rename `/app/config/fbparams_example.neon` to `fbparams.neon` and edit Facebook App parametrs. The
	email isn't connected with the Facebook. It's just for warnings if something goes wrong.
- Add some new groups to DB table `groups` (just the first column is mandatory = ID of the Facebook group)
- Data from the selected Facebook groups are downloaded via one active user token. This user must have a
	access to the all selected groups. That should be probably you. You have to generate the new token
	and allow permissions to your Facebook App. Just open URL: `http://YOURURL/crawler/` - It should write
	something like "This is a private party!". That is for a protection. Just you can add the new token.
	Before that you have to add your IP address to DB table `ip`. Refresh `http://YOURURL/crawler/`. It should
	be working now.
- Be aware that this token goes inactive after some time. You must visit this URL repeatedly. If the token
	becomes invalid, it should send you a email automaticly.
- Now open `http://YOURURL/crawler/` again. It should start downloading and processing data from the Facebook.
- You should add this URL to your Cron. :)
- Good Luck!
