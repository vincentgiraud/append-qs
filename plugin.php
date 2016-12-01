<?php
/*
Plugin Name: Append Subdomain as a Query String
Plugin URI: https://github.com/vincentgiraud/append-qs
Description: Appends the subdomain as a query string to the URL
Version: 1.0
Author: Vincent Giraud
Author URI: https://github.com/vincentgiraud
*/

// Hook our custom function into the 'pre_redirect' event
yourls_add_filter('redirect_location', 'append_sub_qs_redirect' );

// Our custom function that will be triggered when the event occurs
function append_sub_qs_redirect($url) {
    $value = explode(".",$_SERVER['HTTP_HOST']);
    parse_str($_SERVER['QUERY_STRING'], array_shift($value));

    if (isset($value) && ($value != "www")) {
        return $url."?ref=".$value;
    }

}

?>
