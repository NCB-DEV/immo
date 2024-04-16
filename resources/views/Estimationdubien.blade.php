@extends('templates.templete2')
@section('title')
Estimation du bien
@endsection
@section('titre_page')
Estimation du bien
@endsection
@section('Estimationdubien')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <p>
                NOUS CONFIER UN MANDAT C'EST: <br>
                <strong>Vendre rapidement votre bien immobilier</strong>,grace à des clients acquéreurs qualifiés. <br>
                <strong>Béneficier d'une présentation optimisée de votre bien immobilier</strong>:diffusion de votre annoncesur differents supports,visites  dirigées et encadrées par u agent immobilier competent. <br>
                <strong>Vous dégager des contraintes techniques et adminitratives</strong> en vous reposant sur notre savoir-faire de professionnel de l'immobilier tout au long de la vente.
            </p>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <form action="" method="post">
            @csrf
            <div class="col-sm-12 col-md-6 col-lg-6">
                <select class="select-control w-100" name="propriéte" id="propriéte">
                    <option value="appartemente">Appartemente</option>
                    <option value="maison">Maison</option>
                    <option value="immeuble">Immeuble</option>
                    <option value="terain">Terrain</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <input type="text" name="commune" id="com" placeholder=" Commune" class="w-100 form-control">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <input type="text" name="quartier" id="quart" placeholder=" Quartier" class="w-100 form-control">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <input type="text" name="ville" id="ville" placeholder=" Ville" class="w-100 form-control">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <input type="text" name="Rue" id="rue" placeholder=" Rue" class="w-100 form-control">
            </div>
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4">
                <button class="form-control w-100 btn btn-dark">Estimer</button>
            </div>
        </form>
    </div>
</div>

@endsection
