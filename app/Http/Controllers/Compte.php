<?php

namespace App\Http\Controllers;

use App\Models\Parcele;
use App\Models\Proprietes;
use Illuminate\Support\Str;
use Termwind\Components\Hr;
use Illuminate\Http\Request;
use App\Models\Proprietaires;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ValidationParcelle;
use App\Http\Requests\ValidationPropriete;
use App\Http\Requests\EnregistrementClient;
use App\Http\Requests\AuthentificationClient;

class Compte extends Controller
{
    public function vendus($id){
        $parcelle=Proprietes::find($id);

       $parcelle->avis="vendu";
       $mod=$parcelle->save();

        if($mod){
            return back()->with('vendu',' la propriété a été marquée vendue');
        }

        return back()->with('nonvendu','une erreur s\'est produite');
    }
    public function vendu($id){
        $parcelle=Parcele::find($id);

       $parcelle->avis="vendu";
       $mod=$parcelle->save();

        if($mod){
            return back()->with('vendu',' la parcelle a été marquée vendue');
        }

        return back()->with('nonvendu','une erreur s\'est produite');

    }
    public function modifiermaisons(ValidationPropriete $req){
            $parcel=Proprietes::find($_POST['idpar']);
            $patha=Str::random(10).'.'.$req->file('photo1')->getClientOriginalExtension();
            $path1=$req->file('photo1')->storeAs("public/",$patha);
            $pathb=Str::random(10).'.'.$req->file('photo2')->getClientOriginalExtension();
            $path2=$req->file('photo2')->storeAs("public/",$pathb);

            $pathc=Str::random(10).'.'.$req->file('photo3')->getClientOriginalExtension();
            $path3=$req->file('photo3')->storeAs("public/",$pathc);
            $pathd=Str::random(10).'.'.$req->file('photo4')->getClientOriginalExtension();
            $path4=$req->file('photo4')->storeAs("public/",$pathd);

            $pathe=Str::random(10).'.'.$req->file('photo5')->getClientOriginalExtension();
            $path5=$req->file('photo5')->storeAs("public/",$pathd);
            $parcel->update([
            "photoprincipale"=>$patha,
            "photo2"=>$pathb,
            "photo3"=>$pathc,
            "photo4"=>$pathd,
            "photo5"=>$pathe,
            "description"=>$req->desc,
            "ville"=>$req->ville,
            "communie"=>$req->com,
            "quartier"=>$req->quart,
            "idpro"=>$req->id_pro,
            "prix"=>$req->prix,
            "usages"=>$req->usage,
            "type"=>$req->type
        ]);
        return back()->with('success','Les informations de la maison ont été modifiées avec succès');
    }
    public function modifierunbien(ValidationParcelle $req){

            $parcel=Parcele::find($_POST['idpar']);
            $patha=Str::random(10).'.'.$req->file('photo1')->getClientOriginalExtension();
            $path1=$req->file('photo1')->storeAs("public/",$patha);
            $pathb=Str::random(10).'.'.$req->file('photo2')->getClientOriginalExtension();
            $path2=$req->file('photo2')->storeAs("public/",$pathb);

            $pathc=Str::random(10).'.'.$req->file('photo3')->getClientOriginalExtension();
            $path3=$req->file('photo3')->storeAs("public/",$pathc);
            $pathd=Str::random(10).'.'.$req->file('photo4')->getClientOriginalExtension();
            $path4=$req->file('photo4')->storeAs("public/",$pathd);

            $pathe=Str::random(10).'.'.$req->file('photo5')->getClientOriginalExtension();
            $path5=$req->file('photo5')->storeAs("public/",$pathd);
            $parcel->update([
            "photoprincipale"=>$patha,
            "photo2"=>$pathb,
            "photo3"=>$pathc,
            "photo4"=>$pathd,
            "photo5"=>$pathe,
            "description"=>$req->desc,
            "ville"=>$req->ville,
            "communie"=>$req->com,
            "quartier"=>$req->quart,
            "idpro"=>$req->id_pro,
            "prix"=>$req->prix,
            "usages"=>$req->usage,
        ]);
        return back()->with('success','Les informations de la parcelle ont été modifiées avec succès');
    }
    public function modifiermaison($id,$pro){
        $maison=Proprietes::find($id);
        $proprietaire=Proprietaires::find($pro);
        return view('mofiierMaison',['maison'=>$maison,'proprietaire'=>$proprietaire]);
    }
    public function modifierparcelle($id,$pro){
        $parcel=Parcele::find($id);
        $proprietaire=Proprietaires::find($pro);
        return view('mofiierParcel',['parcel'=>$parcel,'proprietaire'=>$proprietaire]);
    }
    public function supprimermaison($id){
        $parcel=Proprietes::find($id);
        $parcel->delete();//par
        $parcels=Proprietes::find($id)->SimplePaginate(8);
        return back()->with("supprimer","la parcelle a été supprimer avec succès");
    }
    public function supprimerparcelle($id){
        $parcel=Parcele::find($id);
        $parcel->delete();
        return back()->with("supprimer","la parcelle a été supprimer avec succès");
    }
    public function creationducompte(EnregistrementClient $req){
        $proprietaire=Proprietaires::where('mail',$req->email);
        $nombre=$proprietaire->count();
        if($nombre > 0){
            return Redirect()->back()->with('exist','Cette adresse E-mail est utilisée par un autre compte');
        }
        else{
            if($req->mdp==$req->cmdp){
                    $md=Hash::make($req->mdp);
                    Proprietaires::create([
                   'civilite'=>$_POST['civilite'],
                    'nom'=>$req->nom,
                    'postnom'=>$req->postnom,
                     'mail'=>$req->email,
                    'telephone'=>$req->telephone,
                     'mdp'=>$md,
                     'statut'=>'client',
               ]);
            return Redirect()->back()->with('success',"votre compte à été crée avec succès");
            }
            else{
                return redirect()->back()->with('false',"les mots de passe ne correspondent pas");
            }
        }
    }

    public function Connexionutilisateur(AuthentificationClient $req){

        $proprietaire=Proprietaires::where('mail',$req->email)->first();

        if($proprietaire && Hash::check($req->mdp,$proprietaire->mdp)){
            Session::put("verifier","ok");
            return redirect()->route('dashbord',['proprietaire'=>$proprietaire]);
        }
        else{
            return redirect()->back()->with('fux',"le nom utilisateur ou le mot de passe est incorrecte");
        }
    }
    public function dashbord($proprietaire){
        $proprietaire=Proprietaires::find($proprietaire);
        $parcelles=Parcele::where('idpro',$proprietaire->id)->count();
        $parcellesvendues=Parcele::where('idpro',$proprietaire->id)->where('avis','vendu')->count();
        $parcellesnonvendues=Parcele::where('idpro',$proprietaire->id)->where('avis','nom vendu')->count();
        $immeuvendues=Proprietes::where('idpro',$proprietaire->id)->where('avis','vendu')->count();
        $immeunonvendues=Proprietes::where('idpro',$proprietaire->id)->where('avis','nom vendu')->count();
        $immeuble=Proprietes::where('idpro',$proprietaire->id)->count();

        if(!$proprietaire){
            return abort(404);
        }
        return view('vendre',['proprietaire'=>$proprietaire,'nombreParcelle'=>$parcelles,'parcellesvendues'=>$parcellesvendues,"parcellesnonvendues"=>$parcellesnonvendues,'immeuble'=>$immeuble,'immeuvendues'=>$immeuvendues,'immeunonvendues'=>$immeunonvendues]);
    }
    public function Gestiondepropriete($proprietaires){
        $proprietaire=Proprietaires::find($proprietaires);
        $propr=Proprietes::where('idpro',$proprietaires)->SimplePaginate(8);
        $par=Parcele::where('idpro',$proprietaires)->SimplePaginate(8);
        if(!$proprietaire){
            return abort(404);
        }

        return view('gestionM',['proprietaire'=>$proprietaire,'pro'=>$propr,'par'=>$par]);
    }
    public function Bienvendus($proprietaires){
        $proprietaire=Proprietaires::find($proprietaires);
        $propr=Proprietes::where('idpro',$proprietaires)->SimplePaginate(8);
        $par=Parcele::where('idpro',$proprietaires)->SimplePaginate(8);
        if(!$proprietaire){
            return abort(404);
        }

        return view('biensvendu',['proprietaire'=>$proprietaire,'pro'=>$propr,'par'=>$par]);
    }
    public function Gestiondesproprietes($proprietaires){
        $proprietaire=Proprietaires::find($proprietaires);
        $propr=Proprietes::where('idpro',$proprietaires)->SimplePaginate(8);
        $par=Parcele::where('idpro',$proprietaires)->SimplePaginate(8);
        if(!$proprietaire){
            return abort(404);
        }

        return view('gestions',['proprietaire'=>$proprietaire,'pro'=>$propr,'par'=>$par]);
    }
   public function vendredesproprietes($proprietaire){
    $proprietaire=Proprietaires::find($proprietaire);
      if(!$proprietaire){
        return abort(404);
      }
     return view('vendres',['proprietaire'=>$proprietaire]);
   }
   public function enregistrerunbien(  ValidationParcelle $req, ValidationPropriete $resq){

        if($req->type=='parcelle' || $resq->type=='parcelle'){
            $patha=Str::random(10).'.'.$resq->file('photo1')->getClientOriginalExtension();
            $path1=$resq->file('photo1')->storeAs("public/",$patha);
            $pathb=Str::random(10).'.'.$resq->file('photo2')->getClientOriginalExtension();
            $path2=$resq->file('photo2')->storeAs("public/",$pathb);

            $pathc=Str::random(10).'.'.$resq->file('photo3')->getClientOriginalExtension();
            $path3=$resq->file('photo3')->storeAs("public/",$pathc);
            $pathd=Str::random(10).'.'.$resq->file('photo4')->getClientOriginalExtension();
            $path4=$resq->file('photo4')->storeAs("public/",$pathd);

            $pathe=Str::random(10).'.'.$resq->file('photo5')->getClientOriginalExtension();
            $path5=$resq->file('photo5')->storeAs("public/",$pathd);

            $parcel=new Parcele;
            $parcel->avis="nom vendu";
            $parcel->photoprincipale=$patha;
            $parcel->photo2=$pathb;
            $parcel->photo3=$pathc;
            $parcel->photo4=$pathd;
            $parcel->photo5=$pathe;
            $parcel->description=$resq->desc;
            $parcel->ville=$resq->ville;
            $parcel->communie=$resq->com;
            $parcel->quartier=$resq->quart;
            $parcel->idpro=$resq->id_pro;
            $parcel->prix=$resq->prix;
            $parcel->usages=$resq->usage;
            $parcel->boost="non";
            $parcel->save();
            return back()->with("confirmation",'La parcelle a été enregistrée avec succès');
        }

            $patha=Str::random(10).'.'.$resq->file('photo1')->getClientOriginalExtension();
            $path1=$resq->file('photo1')->storeAs("public/",$patha);
            $pathb=Str::random(10).'.'.$resq->file('photo2')->getClientOriginalExtension();
            $path2=$resq->file('photo2')->storeAs("public/",$pathb);

            $pathc=Str::random(10).'.'.$resq->file('photo3')->getClientOriginalExtension();
            $path3=$resq->file('photo3')->storeAs("public/",$pathc);
            $pathd=Str::random(10).'.'.$resq->file('photo4')->getClientOriginalExtension();
            $path4=$resq->file('photo4')->storeAs("public/",$pathd);

            $pathe=Str::random(10).'.'.$resq->file('photo5')->getClientOriginalExtension();
            $path5=$resq->file('photo5')->storeAs("public/",$pathd);

            $pro=new Proprietes;
            $pro->boost="non";
            $pro->avis="nom vendu";
            $pro->photoprincipale=$patha;
            $pro->photo2=$pathb;
            $pro->photo3=$pathc;
            $pro->photo4=$pathd;
            $pro->photo5=$pathe;
            $pro->description=$resq->desc;
            $pro->ville=$resq->ville;
            $pro->communie=$resq->com;
            $pro->quartier=$resq->quart;
            $pro->idpro=$resq->id_pro;
            $pro->prix=$resq->prix;
            $pro->usages=$resq->usage;
            $pro->type=$req->type;
            $pro->save();
            return back()->with("confirmation",'l\'immeuble a été enregistrée avec succès');
   }
}

