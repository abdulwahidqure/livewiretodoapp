<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SubmitButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $wireTarget = '';
    public $submitButton = '';
    public function __construct($wireTarget, $submitButton)
    {
        $this->wireTarget = $wireTarget;
        $this->submitButton = $submitButton;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.submit-button');
    }
}
