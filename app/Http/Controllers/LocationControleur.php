<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationControleur extends Controller
{
    public function locationpropriete($id){

        return view('locationproprieté',["id"=>$id]);
    }
}
