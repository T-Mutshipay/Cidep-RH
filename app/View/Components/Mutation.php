<?php

namespace App\View\Components;

use App\Models\Direction;
use Closure;
use Illuminate\Contracts\View\View;
use App\Models\Fonction;
use Illuminate\View\Component;

class Mutation extends Component
{
    /**
     * Create a new component instance.
     */
    public $fonctions;
    public $direcions;

    public function __construct()
    {
        $this->fonctions = Fonction::all();
        $this->direcions = Direction::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mutation', ['fonctions' => $this->fonctions], ['directions' => $this->direcions]);
    }
}
