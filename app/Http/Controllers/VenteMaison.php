<?php

namespace App\Http\Controllers;

use App\Models\Proprietes;
use Illuminate\Http\Request;

class VenteMaison extends Controller
{
    public function VenteImmeubles(){
        $boostParcel=Proprietes::where("boost","oui")->inRandomOrder()->take(12)->get();
        $idsboost=$boostParcel->pluck('id');
        $parcelNorm=Proprietes::where('boost','non')->orWhereNull('boost')->inRandomOrder()->SimplePaginate(9);
        return view('VenteImmeubles',['boostParcel'=>$boostParcel,'parcelNorm'=>$parcelNorm]);
    }
}
