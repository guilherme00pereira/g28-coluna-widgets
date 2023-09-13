<?php

namespace G28\ColunaWidgets;

class DB
{
    public static function getLastColunaPost()
    {
        global $wpdb;

        $query = "SELECT ID FROM {$wpdb->prefix}posts WHERE post_type = 'coluna' AND post_status = 'publish' ORDER BY post_date DESC LIMIT 1";
        
    }
}