<?php

namespace App\View\Components\backend;

use Illuminate\View\Component;

class alert extends Component
{
    
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
        return view('components.backend.alert');
    }
}
