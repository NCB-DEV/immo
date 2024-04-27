<?php

namespace App\Http\Controllers;

use App\Models\Parcele;
use App\Models\Proprietes;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Symfony\Component\Console\Input\Input;

//
class Accueil extends Controller
{
    public function afficherPropriete($id){
        $parcele=Parcele::find($id);
        return view('afficherPropriété',["parcele"=>$parcele]);
    }
    public function voirlimmeuble($id){
        $parcele=Proprietes::find($id);
        return view('voirlimmeuble',["parcele"=>$parcele]);
    }
    public function serchehouseP(Request $req){
        $serch=$req->query("id");
        $reqd=  Parcele::query();
        if($serch){
          $reqd->where(function ($q) use ($serch){
              $q->where("prix",'like','%'.$serch.'%')
              ->orWhere("usages",'like','%'.$serch.'%')
              ->orWhere("ville",'like','%'.$serch.'%')
              ->orWhere("quartier",'like','%'.$serch.'%')
              ->orWhere("communie",'like','%'.$serch.'%')
              ->orWhere("description",'like','%'.$serch.'%');
          });
        }
        $parcele =$reqd->get();

                  return response()->json($parcele);

    }
    public function serchehouse(Request $req){
        $serch=$req->query("id");
      $reqd=  Parcele::query();
      if($serch){
        $reqd->where(function ($q) use ($serch){
            $q->where("prix",'like','%'.$serch.'%')
            ->orWhere("usages",'like','%'.$serch.'%')
            ->orWhere("ville",'like','%'.$serch.'%')
            ->orWhere("quartier",'like','%'.$serch.'%')
            ->orWhere("communie",'like','%'.$serch.'%')
            ->orWhere("description",'like','%'.$serch.'%');
        });
      }
      $parcele =$reqd->get();

                return response()->json($parcele);

    }
    public function Accueil(){
       $boostParcel=Parcele::where("boost","oui")->inRandomOrder()->take(6)->get();
       $idsboost=$boostParcel->pluck('id');
       $parcelNorm=Parcele::where('boost','non')->orWhereNull('boost')->inRandomOrder()->SimplePaginate(6);
      /* if(Paginator::currentPage()==1){
          $parcelNorm->prepend($boostParcel);
       }*/
       return view('acceuil',["boost"=>$boostParcel,"nonboost"=>$parcelNorm]);

    }


}
