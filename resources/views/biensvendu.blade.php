
@extends('templates.layout')
@section('title')
Biens vendus
@endsection
@section('gestion')
<div class="container-fluid bienv">
    <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-sm-12 col-md-8 col-lg-8">
            @if ($proprietaire->civilite=="mr")
                 <h2>Bienvenu {{ $proprietaire->civilite }} {{ $proprietaire->nom }} {{ $proprietaire->postnom }}</h2>
            @endif
            @if ($proprietaire->civilite=="mme")
                 <h2>Bienvenue {{ $proprietaire->civilite }} {{ $proprietaire->nom }} {{ $proprietaire->postnom }}</h2>
            @endif
            <a class="btn btn-dark form-control w-50" href=" {{ route('vendre-des-proprietes',['proprietaire'=>$proprietaire])  }}">vendre des proprietes</a>
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
    </div>
</div>
<div class="container-fluid venduB">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">

            <div class="container-fluid">
                <div class="row">

                        @foreach ($par as $pars)
                        @if ($pars->avis=="vendu")
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="parcele">
                                <div class="image">
                                    <img style="object-fit: cover; height:300px" class="w-100" src="{{ asset('storage/'.$pars->photo2 ) }}" alt="{{ asset($pars->photo2) }}">
                                </div>
                                <div class="info">
                                    <p>Prix:{{ $pars->prix }}$ </p><p>Déscription:{{ $pars->description }}</p>
                                    <p>
                                        adresse: Ville:{{ $pars->ville }},Commune:{{ $pars->communie }},Quartier:{{ $pars->quartier }}

                                    </p>
                                    <p>
                                        Type de parcelle:{{ $pars->usages }}
                                    </p>

                                </div>
                            </div>

                           </div>
                        @endif

                         @endforeach

                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">

            @foreach ($pro as $pars)
                        @if ($pars->avis=="vendu")
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="parcele">
                                <div class="image">
                                    <img style="object-fit: cover; height:300px" class="w-100" src="{{ asset('storage/'.$pars->photo2 ) }}" alt="{{ asset($pars->photo2) }}">
                                </div>
                                <div class="info">
                                    <p>Prix:{{ $pars->prix }}$ </p><p>Déscription:{{ $pars->description }}</p>
                                    <p>
                                        adresse: Ville:{{ $pars->ville }},Commune:{{ $pars->communie }},Quartier:{{ $pars->quartier }}

                                    </p>
                                    <p>
                                        Type de parcelle:{{ $pars->usages }}
                                    </p>

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
@endsection

