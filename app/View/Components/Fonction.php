<?php

namespace App\View\Components;

use App\Models\Fonction as ModelsFonction;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Fonction extends Component
{
    /**
     * Create a new component instance.
     */
    public $fonctions;

    public function __construct()
    {
        $this->fonctions = ModelsFonction::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.fonction', ['fonctions'=>$this->fonctions]);
    }
}
