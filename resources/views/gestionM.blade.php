@extends('templates.layout')
@section('title')
Gestion des maisons
@endsection
@section('maison')
<div class="container-fluid gest">
    <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-sm-12 col-md-8 col-lg-8">
            @if ($proprietaire->civilite=="mr")
                 <h2>Bienvenu {{ $proprietaire->civilite }} {{ $proprietaire->nom }} {{ $proprietaire->postnom }}</h2>
            @endif
            @if ($proprietaire->civilite=="mme")
                 <h2>Bienvenue {{ $proprietaire->civilite }} {{ $proprietaire->nom }} {{ $proprietaire->postnom }}</h2>
            @endif
            <a class="btn btn-dark" style="text-align:left"  href=" {{ route('vendre-des-proprietes',['proprietaire'=>$proprietaire])  }}">vendre des proprietes</a>
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
    </div>
</div>
<div class="container-fluid gests ">
    <div class="row">
        <div class="col-12">
            @if (session()->has("supprimer"))

                   <div class="alert alert-success alert-dismissible fade show MESSAGE" role="alert">
                       {{ session()->get("supprimer") }}
                       <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
                   @endif
                   @if (session()->has("vendu"))

                   <div class="alert alert-success alert-dismissible fade show MESSAGE" role="alert">
                       {{ session()->get("vendu") }}
                       <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
                   @endif
                   @if (session()->has("novendu"))

                   <div class="alert alert-success alert-dismissible fade show MESSAGE" role="alert">
                       {{ session()->get("novendu") }}
                       <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
                   @endif


            <div class="container-fluid gestt">
                <div class="row">

                        @foreach ($pro as $pars)
                        @if ($pars->avis!="vendu")
                        <div class="col-sm-12 col-md-4 col-lg-4" style="margin-bottom: 20px">
                            <div class="parcele">
                                <div class="image">
                                    <img style="object-fit: cover; height:300px;border-radius:10px" class="w-100" src="{{ asset('storage/'.$pars->photo2 ) }}" alt="{{ asset($pars->photo2) }}">
                                </div>
                                <div class="info">
                                    <p>Prix:{{ $pars->prix }}$ </p><p>Déscription:{{ $pars->description }}</p>
                                    <p>
                                        adresse: Ville:{{ $pars->ville }},Commune:{{ $pars->communie }},Quartier:{{ $pars->quartier }}

                                    </p>
                                    <p>
                                        Type de parcelle:{{ $pars->usages }}
                                    </p>
                                    <a href="{{ route('supprimer-maison',['id'=>$pars->id]) }}" class="btn btn-danger">supprimer</a>
                                    <a href="{{ route('modifier-maison',['id'=>$pars->id,'proprietaire'=>$proprietaire->id]) }}" class="btn btn-warning">modifier</a>
                                    <a href="{{ route('vendus',['id'=>$pars->id]) }}" class="btn btn-dark">vendu</a>
                                </div>
                            </div>

                           </div>
                        @endif

                         @endforeach
                           {{ $par->links() }}
                </div>
            </div>
        </div>

        </div>
    </div>
</div>

@endsection
