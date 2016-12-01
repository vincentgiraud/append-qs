Append Subdomain as a Query String
==================================

Description
-----------
Append Subdomain as a Query String. For example,
<br>`http://sho.rt/shorturl?query=value`
<br>would become
<br>`http://reallylongurl/blahblahblah[...]?ref=sho`.  

NOTE: This appends the query string as entered to the long URL, minus the question mark - if you want your query string appended as an actual query string in your destination URL you need to include it in your long URL.<br><br>
The company I work for uses a third-party ticketing system whose URLs tend to get out of control.  I wanted to pass users a shorter link to their ticket/change request/etc, so that:<br>
`http://ITticketing.system/incident/show?query=number=INC00001`<br>
could be specified as:<br>
`http://sho.rt/inc?00001`<br>
instead of having to type:<br>
`http://sho.rt/inc?query=number=INC00001`
