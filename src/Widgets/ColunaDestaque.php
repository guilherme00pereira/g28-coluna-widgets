<?php

namespace G28\ColunaWidgets\Widgets;

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

    protected function _register_controls()
    {
        $this->start_controls_section(
            'section_content',
            [
                'label' => 'Conteúdo',
            ]
        );

        $this->add_control(
            'titulo',
            [
                'label' => 'Título',
                'type' => 'text',
                'default' => 'Título',
            ]
        );

        $this->add_control(
            'subtitulo',
            [
                'label' => 'Subtítulo',
                'type' => 'text',
                'default' => 'Subtítulo',
            ]
        );

        $this->add_control(
            'texto',
            [
                'label' => 'Texto',
                'type' => 'textarea',
                'default' => 'Texto',
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => 'Link',
                'type' => 'url',
                'default' => 'https://www.google.com',
            ]
        );

        $this->add_control(
            'imagem',
            [
                'label' => 'Imagem',
                'type' => 'media',
                'default' => [
                    'url' => 'https://picsum.photos/200/300',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        
    }
}