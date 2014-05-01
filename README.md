Append Query String
===================

Plugin for [YOURLS](http://yourls.org), tested on 1.7. 

Description
-----------
Append Query String does what it says - just add a query string and it'll be appended as-is.  For example, `http://sho.rt/shorturl?query=value` would become
`http://reallylongurl/blahblahblah[...]query=value`.

Installation
------------
1. In `/user/plugins`, create a new folder named `append-qs`.
2. Drop these files in that directory.
3. Go to the Plugins administration page ( *eg* `http://sho.rt/admin/plugins.php` ) and activate the `Append Query String` plugin.
4. Have fun!

Thanks to Ozh for YOURLS, and [llonchj](https://github.com/llonchj/yourls_plugins) for the Query String idea.
