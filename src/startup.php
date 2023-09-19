<?php

namespace G28\ColunaWidgets;

function registerWidgets( $widgets_manager )
{
    $widgets_manager->register_widget_type( new Widgets\ColunaDestaque() );
    $widgets_manager->register_widget_type( new Widgets\ListaColunas() );
    $widgets_manager->register_widget_type( new Widgets\BotaoCarregaMais() );
}

if( !function_exists( __NAMESPACE__ . 'runPlugin') )
{
    function runPlugin( $root )
    {
        add_action( 'plugins_loaded', function () use ( $root ) {
            new Controller();
        } );
        add_action( 'elementor/widgets/register', __NAMESPACE__ . '\registerWidgets');
    }
}