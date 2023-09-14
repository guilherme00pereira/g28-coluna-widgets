<?php

namespace G28\ColunaWidgets;

use WP_Query;

class DB
{
    public static function getLastColunaPost(): WP_Query
    {
        $args = array(
            'post_type' => 'coluna_episodio',
            'post_status' => 'publish',
            'posts_per_page' => 1,
            'orderby' => 'post_date',
            'order' => 'DESC'
        );
        return new WP_Query($args);
    }

    public static function getColunasOrderByDateDesc()
    {
        global $wpdb;

        $query = "SELECT ID FROM {$wpdb->prefix}posts WHERE post_type = 'coluna_episodio' AND post_status = 'publish' ORDER BY post_date DESC limit 9";
        return $wpdb->get_results($query, ARRAY_A);
    }
}