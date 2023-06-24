<?php

namespace App\View\Components\ui;

use Illuminate\View\Component;

class ModalButton extends Component
{
    public $id;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $title)
    {
        $this->id = $title;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.modal-button');
    }
}
