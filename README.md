Append Query String
===================

Plugin for [YOURLS](http://yourls.org), tested on 1.7. 

Description
-----------
Append Query String does what it says - just add a query string and it'll be appended as-is.  For example,
<br>`http://sho.rt/shorturl?query=value`
<br>would become
<br>`http://reallylongurl/blahblahblah[...]query=value`.  

NOTE: This appends the query string as entered to the long URL, minus the question mark - if you want your query string appended as an actual query string in your destination URL you need to include it in your long URL.<br><br>
The company I work for uses a third-party ticketing system whose URLs tend to get out of control.  I wanted to pass users a shorter link to their ticket/change request/etc, so that:<br>
`http://ITticketing.system/incident/show?query=number=INC00001`<br>
could be specified as:<br>
`http://sho.rt/inc?00001`<br>
instead of having to type:<br>
`http://sho.rt/inc?query=number=INC00001`

Installation
------------
1. In `/user/plugins`, create a new folder named `append-qs`.
2. Drop these files in that directory.
3. Go to the Plugins administration page ( *eg* `http://sho.rt/admin/plugins.php` ) and activate the `Append Query String` plugin.
4. Have fun!

Thanks to Ozh for YOURLS, and [llonchj](https://github.com/llonchj/yourls_plugins) for the Query String idea.
