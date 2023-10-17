<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class InputWithSymbol extends Component
{
    
    public $symbol;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($symbol = "")
    {
        $this->symbol = $symbol;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input-with-symbol');
    }
}
