<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class topauthors extends Component
{
    /**
     * Create a new component instance.
     */

    public $authors;

    public function __construct($authors = null)
    {
        $this->authors = $authors;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.topauthors');
    }
}
