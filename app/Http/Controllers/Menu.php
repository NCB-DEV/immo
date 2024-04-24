<?php

namespace App\Http\Controllers;

use App\Models\Parcele;
use App\Models\Proprietes;
use Illuminate\Http\Request;

class Menu extends Controller
{
    public function Alouer(){
        $boostParcel=Parcele::where("boost","oui")->inRandomOrder()->take(12)->get();
        $idsboost=$boostParcel->pluck('id');
        $parcelNorm=Parcele::where('boost','non')->orWhereNull('boost')->inRandomOrder()->SimplePaginate(9);
        return view('Alouer',['boostParcel'=>$boostParcel,'parcelNorm'=>$parcelNorm]);
    }
    public function LocationImmeuble(){
        $boostParcel=Proprietes::where("boost","oui")->inRandomOrder()->take(12)->get();
        $idsboost=$boostParcel->pluck('id');
        $parcelNorm=Proprietes::where('boost','non')->orWhereNull('boost')->inRandomOrder()->SimplePaginate(9);
        return view('LocationImmeuble',['boostParcel'=>$boostParcel,'parcelNorm'=>$parcelNorm]);
    }
    public function Biensvendus(){
        return view('Biensvendus');
    }
    public function Gestion(){
        return view('Gestion');
    }
    public function Estimationdubien(){
        return view('Estimationdubien');
    }
    public function agence(){
        return view('agence');
    }
    public function Présentationdeagence(){
        return view('Présentationdeagence');
    }
    public function Contact(){
        return view('Contact');
    }
    public function Vendreunbien(){
        return view("Vendreunbien");
    }
    public function Actualites(){
        return view('Actualites');
    }
}
