<?php

namespace App\View\Components\backend\form;

use Illuminate\View\Component;

class selectInput extends Component
{
    
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
     * The input value.
     *
     * @var int
     */
    public $value;

    /**
     * The input options.
     *
     * @var array
     */
    public $options;

    /**
     * Create the component instance.
     *
     * @param  string  $name
     * @param  string  $label
     * @param  string  $note
     * @param  string  $placeholder
     * @param  int $value
     * @param  array   $options
     * @return void
     */
    public function __construct( $name, $label, $note = '', $placeholder = '',$value='', $options = [])
    {
        $this->name = $name;
        $this->label = $label;
        $this->note = $note;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.form.select-input');
    }
}
