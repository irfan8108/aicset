<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{

    private $data;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($links)
    {
        $this->data['links'] = $links;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header', $this->data);
    }
}
