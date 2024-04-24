<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Parcele;

class Accueil extends Component

{
    public $recherche;

    public function render()
    {
        return view('livewire.accueil');
    }

}

