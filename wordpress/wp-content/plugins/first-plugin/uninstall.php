<?php

/**
 * Trigger this file on Plugin uninstall
 */

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

$books = get_posts(array('post_type' => 'book', 'numberposts' => -1));

foreach ($books as $book) {
    wp_delete_post($book->ID, true);
}


// Access the database via SQL
// global $wpdb;
// $wpdb->query("DELETE FROM wp_posts WHERE post_type = 'book'");
