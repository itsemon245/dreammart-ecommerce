<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class TextareaInput extends Component
{
 
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.textarea-input');
    }
}
