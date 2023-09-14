<?php

namespace G28\ColunaWidgets\Widgets;

use WP_Query;

use Elementor\Widget_Base;

class ColunaDestaque extends Widget_Base
{
    public function get_name()
    {
        return 'coluna-destaque';
    }

    public function get_title()
    {
        return 'Coluna Destaque';
    }

    public function get_icon()
    {
        return 'fa fa-code';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    protected function render()
    {
        $args = array(
            'post_type' => 'coluna_episodio',
            'post_status' => 'publish',
            'posts_per_page' => 1,
            'orderby' => 'post_date',
            'order' => 'DESC'
        );
        $postQuery = new WP_Query($args);
        $postQuery->the_post();
        echo '<div class="coluna-destaque">';
        echo '<div class="coluna-destaque__content__title">';
        echo '<h2>' . get_post_meta(get_the_ID(), 'titulo', true) . '</h2>';
        echo '</div>';
        echo '<div class="coluna-destaque__content__data">';
        echo '<h6>' . get_post_meta(get_the_ID(), 'data', true) . '</h6>';
        echo '</div>';
        echo '<div class="coluna-destaque__image">';
        echo '<img src="' . get_the_post_thumbnail_url() . '" alt="' . get_the_title() . '">';
        echo '</div>';
        echo '<div class="coluna-destaque__content__text">';
        echo '<p>' . get_post_meta(get_the_ID(), 'resumo', true) . '</p>';
        echo '</div>';
        echo '</div>';

    }
}