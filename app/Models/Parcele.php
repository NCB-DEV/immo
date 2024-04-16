<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcele extends Model
{
    use HasFactory;
     protected $fillable=[
        "photoprincipale",
            "photo2",
            "photo3",
            "photo4",
            "photo5",
            "description",
            "ville",
            "communie",
            "quartier",
            "idpro",
            "prix",
            "usages",
    ];
    public function getStoragePathAttribute(){
        return 'public/images/'.$this->image;
    }
}
