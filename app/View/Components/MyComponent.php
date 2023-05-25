<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MyComponent extends Component
{
    public $selectedOption;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($selectedOption)
    {
        $this->selectedOption = $selectedOption;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.my-component');
    }
}
