<?php

namespace App\View\Components\backend\form;

use Illuminate\View\Component;

class input extends Component
{
    /**
     * The input type.
     *
     * @var string
     */
    public $type;

    /**
     * The input name.
     *
     * @var string
     */

    public $name;
    /**
     * The input label.
     *
     * @var string
     */
    public $label;

    /**
     * The input note.
     *
     * @var string
     */
    public $note;

    /**
     * The input placeholder.
     *
     * @var string
     */
    public $placeholder;

    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $name
     * @param  string  $label
     * @param  string  $note
     * @param  string  $placeholder
     * @return void
     */
    public function __construct($type, $name, $label, $note = '', $placeholder = '')
    {

        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->note = $note;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.form.input');
    }
}
