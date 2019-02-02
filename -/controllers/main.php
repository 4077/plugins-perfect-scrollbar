<?php namespace plugins\perfectScrollbar\controllers;

class Main extends \Controller
{
    public function bind()
    {
        $this->js('perfect-scrollbar.jquery');
        $this->css('perfect-scrollbar');

        $this->js(':.bind', [
            'selector' => $this->data['selector'],
            'options'  => $this->data('options')
        ]);
    }
}
