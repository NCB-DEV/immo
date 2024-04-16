@extends('templates.layout')
@section('title')
Tableau de bord
@endsection
@section('vendre')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-sm-12 col-md-8 col-lg-8">
            @if ($proprietaire->civilite=="mr")
                 <h2>Bienvenu {{ $proprietaire->civilite }} {{ $proprietaire->nom }} {{ $proprietaire->postnom }}</h2>
            @endif
            @if ($proprietaire->civilite=="mme")
                 <h2>Bienvenue {{ $proprietaire->civilite }} {{ $proprietaire->nom }} {{ $proprietaire->postnom }}</h2>
            @endif
        </div>
        
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4"></div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <h2>Biens sur la plate forme</h2>
            <canvas id="barCanvas" aria-label="chart" role="img"></canvas>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4"></div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="tabl1 border">
                <h3>Nombre de Parcelles</h3>
                <h2>{{ $nombreParcelle }}</h2>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="tabl1 border">
                <h3> Parcelles vendues</h3>
                <h2>{{ $parcellesvendues }}/{{ $nombreParcelle }}</h2>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="tabl1 border">
                <h3>Parcelles non vendues</h3>
                <h2>{{ $parcellesnonvendues }}/{{ $nombreParcelle }}</h2>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="tabl1 border">
                <h3>Vos immeubles</h3>
                <h2>{{ $immeuble }}</h2>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="tabl1 border">
                <h3>Immeubles vendus</h3>
                <h2>{{ $immeuvendues }}/{{ $immeuble }}</h2>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="tabl1 border">
                <h3>Immeubles non vendus</h3>
                <h2>{{ $immeunonvendues }}/{{ $immeuble }}</h2>
            </div>
        </div>
    </div>
</div>

@endsection

