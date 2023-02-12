<?php

namespace App\View\Components\backend\form;

use Illuminate\View\Component;

class textareaInput extends Component
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
     * @var string
     */
    public $value;

    /**
     * Create the component instance.
     *
     * @param  string  $name
     * @param  string  $label
     * @param  string  $note
     * @param  string  $value
     * @param  string  $placeholder
     * @return void
     */
    public function __construct($name, $label, $note = '', $placeholder = '', $value = '')
    {
        $this->name = $name;
        $this->label = $label;
        $this->note = $note;
        $this->value = $value;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.form.textarea-input');
    }
}
