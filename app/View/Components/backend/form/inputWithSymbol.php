<?php

namespace App\View\Components\backend\form;

use Illuminate\View\Component;

class inputWithSymbol extends Component
{
    /**
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
     * The input symbol.
     *
     * @var string
     */
    public $symbol;

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
     * The input class.
     *
     * @var string
     */
    public $class;

    /**
     * The input value.
     *
     * @var string
     */
    public $value;

    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $name
     * @param  string  $label
     * @param  string  $symbol
     * @param  string  $note
     * @param  string  $placeholder
     * @param  string  $class
     * @param  string  $value
     * @return void
     */
    public function __construct($type, $name, $label, $note = '', $placeholder = '', $class = '', $symbol = '', $value='')
    {

        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->note = $note;
        $this->placeholder = $placeholder;
        $this->class = $class;
        $this->symbol = $symbol;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.form.input-with-symbol');
    }
}
