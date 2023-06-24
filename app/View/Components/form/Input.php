<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class Input extends Component
{

    /**
     * The input label.
     *
     * @var string
     */
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label)
    {
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
