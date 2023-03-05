<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class Select extends Component
{
    public $label;
    public $value;
    public $options;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = '', $value = '', $options)
    {
        $this->label = $label;
        $this->label = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.select');
    }
}
