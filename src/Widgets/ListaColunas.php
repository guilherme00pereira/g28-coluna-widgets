<?php

namespace G28\ColunaWidgets\Widgets;

use WP_Query;

use Elementor\Widget_Base;

class ListaColunas extends Widget_Base
{
    public function get_name()
    {
        return 'lista-colunas';
    }

    public function get_title()
    {
        return 'Lista Colunas';
    }

    public function get_icon()
    {
        return 'eicon-gallery-grid';
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
            'posts_per_page' => 9,
            'orderby' => 'post_date',
            'order' => 'DESC'
        );
        $postQuery = new WP_Query($args);
        ?> <ul class="coluna-lista"> <?php
        while($postQuery->have_posts()) {
            $postQuery->the_post();
            $dbData = get_post_meta(get_the_ID(), 'data', true);
            $brDate = date("d/m/Y", strtotime($dbData));
            echo '<div class="coluna-lista-item">';
            echo '<a href="' . get_permalink() . '">';
            echo '<div class="coluna-lista-item__image">';
            echo '<img src="' . get_the_post_thumbnail_url() . '" alt="' . get_the_title() . '">';
            echo '</div>';
            echo '<div class="coluna-lista-item__content">';
            echo '<div class="coluna-lista-item__content__title">';
            echo '<h5>' . $brDate . " - " . get_post_meta(get_the_ID(), 'titulo', true) . '</h5>';
            echo '</div>';
            echo '<div class="coluna-lista-item__content__text">';
            echo strlen(get_the_content()) > 100 ? substr(get_the_content(), 0, 97) . "..." : get_the_content();
            echo '</div>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
        }
        ?> </ul> <?php
        
    }
}