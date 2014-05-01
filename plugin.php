<?php
/*
Plugin Name: Append Query String
Plugin URI: https://github.com/drockney/append-qs
Description: Appends a query string to the URL
Version: 1.0
Author: Doug Rockney
Author URI: https://github.com/drockney
*/

// Hook our custom function into the 'pre_redirect' event
yourls_add_filter('redirect_location', 'append_qs_redirect' );

// Our custom function that will be triggered when the event occurs
function append_qs_redirect($url) {

    parse_str($_SERVER['QUERY_STRING'], $query);

    if (isset($query)) {
        $it = new RecursiveIteratorIterator(new RecursiveArrayIterator($query));
        foreach ($it as $key=>$val) {
                echo $key.": ".$val."<br>";
                if (isset($key)) {
                    $appendme = $appendme.$key;
                }
                if (isset($val)) {
                    $appendme = $appendme.$val;
                }
        }
        return $url.$appendme;
    }

}

?>
