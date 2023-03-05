<?php

namespace App\View\Components\ui;

use Illuminate\View\Component;

class Modal extends Component
{
    public $title;
    public $color;
    public $method;
    public $action;
    public $enctype;
    public $submit;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $color, $method, $action, $enctype, $submit)
    {
        $this->$title = $title;
        $this->$color = $color;
        $this->$method = $method;
        $this->$action = $action;
        $this->$enctype = $enctype;
        $this->$submit = $submit;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.modal');
    }
}
