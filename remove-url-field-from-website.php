<?php
/* 
Plugin Name: Remove URL Field from Comment Form Website
Plugin URI: https://wordpress.org/plugins/search/Remove-URL-Field-from-Comment-Form-website/
Description: This plugin helps to remove URL Field from comment form from any wordpress plugin
Version: 1.0.0
Author: Satwik
Author URI: https://www.LiteBlogging.com/
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

add_action( 'after_setup_theme', 'LiteBlogging_add_comment_url_filter' );
function LiteBlogging_add_comment_url_filter() {
    add_filter( 'comment_form_default_fields', 'LiteBlogging_disable_comment_url', 20 );
}

function LiteBlogging_disable_comment_url($fields) {
    unset($fields['url']);
    return $fields;
}