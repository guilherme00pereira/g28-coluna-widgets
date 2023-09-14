<?php

namespace G28\ColunaWidgets;

class Controller
{
    public function __construct()
    {
        add_action( 'wp_enqueue_scripts', [ $this, 'registerStylesAndScripts'] );
    }
    
    public function registerStylesAndScripts()
	{
		wp_enqueue_style( 'g28_coluna_style', G28_COLUNA_WIDGETS_ASSETS . 'css/coluna.css', [], G28_COLUNA_WIDGETS_VERSION );
    }
}