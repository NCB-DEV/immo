<?php

namespace App\Livewire;

use Livewire\Component;

class Accueil extends Component

{
    public $parcelNorm;
    public $boostParcel;

    public function mount($parcelNorm,$boostParcel){
        $this->$boostParcel=$boostParcel;
        $this->$parcelNorm=$parcelNorm;
    }


    public function render()
    {
        return view('livewire.accueil');
    }
}
