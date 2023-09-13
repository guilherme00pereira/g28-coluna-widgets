<?php

namespace G28\ColunaWidgets;

function registerWidgets( $widgets_manager )
{
    $widgets_manager->register_widget_type( new Widgets\ColunaDestaque() );
}

if( !function_exists( __NAMESPACE__ . 'runPlugin') )
{
    function runPlugin( $root )
    {
        add_action( 'plugins_loaded', function () use ( $root ) {
            
        } );
        add_action( 'elementor/widgets/register', __NAMESPACE__ . '\registerWidgets');
    }
}