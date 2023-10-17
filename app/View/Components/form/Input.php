<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class Input extends Component
{
    public string $label;
    public string $symbol;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $symbol = '')
    {
        $this->label = $label;
        $this->symbol = $symbol;
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
