<?php

namespace G28\ColunaWidgets;

use Exception;
use WP_Query;

class Controller
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'registerStylesAndScripts']);
        add_action('wp_ajax_nopriv_ajaxTodosEpisodios', [$this, 'ajaxTodosEpisodios']);
    }

    public function registerStylesAndScripts()
    {
        wp_enqueue_style('g28_coluna_style', G28_COLUNA_WIDGETS_ASSETS . 'css/coluna.css', [], G28_COLUNA_WIDGETS_VERSION);
        wp_enqueue_script('g28_coluna_script', G28_COLUNA_WIDGETS_ASSETS . 'js/coluna.js', [], G28_COLUNA_WIDGETS_VERSION, true);
        wp_localize_script('g28_coluna_script', 'ajax_object', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('g28_coluna_script'),
            'ajax_todosEpisodios' => 'ajaxTodosEpisodios'
        )
        );
    }

    public function ajaxTodosEpisodios()
    {
        try {
            $args = array(
                'post_type' => 'coluna_episodio',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'post_date',
                'order' => 'DESC'
            );
            $postQuery = new WP_Query($args);
            $html = "oi";
            while ($postQuery->have_posts()) {
                $postQuery->the_post();
                $dbData = get_post_meta(get_the_ID(), 'data', true);
                $brDate = date("d/m/Y", strtotime($dbData));
                $html += '<li class="coluna-lista-item">';
                $html += '<a href="' . get_permalink() . '">';
                $html += '<div class="coluna-lista-item__image">';
                $html += '<img src="' . get_the_post_thumbnail_url() . '" alt="' . get_the_title() . '">';
                $html += '</div>';
                $html += '<div class="coluna-lista-item__content">';
                $html += '<div class="coluna-lista-item__content__title">';
                $html += '<h5>' . $brDate . " - " . get_post_meta(get_the_ID(), 'titulo', true) . '</h5>';
                $html += '</div>';
                $html += '<div class="coluna-lista-item__content__text">';
                $html += strlen(get_the_content()) > 100 ? substr(get_the_content(), 0, 97) . "..." : get_the_content();
                $html += '</div>';
                $html += '</div>';
                $html += '</a>';
                $html += '</li>';
            }
            wp_send_json_success($html, 200);
        } catch (Exception $e) {
            wp_send_json_error($e->getMessage(), 500);
        }
        wp_die();
    }
}