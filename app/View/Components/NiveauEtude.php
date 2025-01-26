<?php

namespace App\View\Components;

use App\Models\NiveauEtude as ModelsNiveauEtude;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NiveauEtude extends Component
{
    /**
     * Create a new component instance.
     */
    public $niveauxEtude;
    
    public function __construct()
    {
        $this->niveauxEtude = ModelsNiveauEtude::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.niveau-etude');
    }
}
