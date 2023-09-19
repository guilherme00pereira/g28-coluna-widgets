<?php

namespace G28\ColunaWidgets\Widgets;

use Elementor\Widget_Base;

class BotaoCarregaMais extends Widget_Base
{
    public function get_name()
    {
        return 'botao-veja-mais';
    }

    public function get_title()
    {
        return 'Botão Veja Mais';
    }

    public function get_icon()
    {
        return 'eicon-button';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    protected function register_controls()
    {

    }

    protected function render()
    {
        ?>
            <div class="wrapper-btn-veja-mais">
                <button class="btn-veja-mais-colunas">VEJA TODAS AS COLUNAS</button>
            </div>
        <?php
    }
}