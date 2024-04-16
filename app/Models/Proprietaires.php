<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Proprietaires extends Authenticatable
{
    use HasFactory,Notifiable;
   public $fillable=[
    'civilite',
    'nom',
    'postnom',
    'mail',
    'telephone',
    'mdp',
    'statut'
    ];
    public function verifiemdp($mdp){
        return sha1($mdp)===$this->mdp;
    }

}
