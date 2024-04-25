@extends('templates.layout')
@section('title')
Tableau de bord
@endsection
@section('vendre')
<div class="container-fluid tb">
    <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-sm-12 col-md-8 col-lg-8 ">
            @if ($proprietaire->civilite=="mr")
                 <h2 style="text-align: center">Bienvenu {{ $proprietaire->civilite }} {{ $proprietaire->nom }} {{ $proprietaire->postnom }}</h2>
            @endif
            @if ($proprietaire->civilite=="mme")
                 <h2 style="text-align: center">Bienvenue {{ $proprietaire->civilite }} {{ $proprietaire->nom }} {{ $proprietaire->postnom }}</h2>
            @endif
        </div>

    </div>
</div>
<div class="container-fluid tb">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4"></div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <h2 style="text-align: center"> sur la plate forme</h2>

        </div>
        <div class="col-sm-12 col-md-4 col-lg-4"></div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="tabl1 border">
                <h3>Nombre de Parcelles</h3>
                <h1>{{ $nombreParcelle }}</h1>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="tabl1 border">
                <h3> Parcelles vendues</h3>
                <h1>{{ $parcellesvendues }}/{{ $nombreParcelle }}</h1>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="tabl1 border">
                <h3>Parcelles non vendues</h3>
                <h1>{{ $parcellesnonvendues }}/{{ $nombreParcelle }}</h1>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="tabl1 border">
                <h3>Vos immeubles</h3>
                <h1>{{ $immeuble }}</h1>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="tabl1 border">
                <h3>Immeubles vendus</h3>
                <h1>{{ $immeuvendues }}/{{ $immeuble }}</h1>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="tabl1 border">
                <h3>Immeubles non vendus</h3>
                <h1>{{ $immeunonvendues }}/{{ $immeuble }}</h1>
            </div>
        </div>
    </div>
</div>

@endsection

