<?php

namespace App\View\Components\Molecules\Cards;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card1 extends Component
{
    public string $title;
    public string $button;
    /**
     * Create a new component instance.
     */
    public function __construct($title = 'ss', $button = 'sss')
    {
        $this->title = $title;
        $this->button = $button;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.molecules.cards.card1');
    }
}
