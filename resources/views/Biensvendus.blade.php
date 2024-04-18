@extends('templates.template')
@section('title')
Biens-vendus
@endsection
@section('resultat')
500 annonces trouvées
@endsection
@section('titre_page')
Biens-vendus
@endsection
@section('Biensvendus')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 border">
            <a href="#">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!--------l'image sera chargée ici-------->
                            <img src="{{ asset('img/accueil1.jpeg') }}" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">prix</div>
                        <div class="col-4">
                            <!--------nombre de photo-------->
                            5 photo(5)</div>
                        <div class="col-4">
                            <!--------favoris-------->
                            favoris
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h1>titre de la propriété</h1>
                        </div>
                        <div class="col-4">
                            <h1>prix</h1>
                        </div>
                        <div class="col-4">
                            <!--------desciprion de la proprieté-------->
                            <h1>4pieces/105m carré</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 border">
            <a href="#">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!--------l'image sera chargée ici-------->
                            <img src="{{ asset('img/equipe.jpeg') }}" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">prix</div>
                        <div class="col-4">
                            <!--------nombre de photo-------->
                            5 photo(5)</div>
                        <div class="col-4">
                            <!--------favoris-------->
                            favoris
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h1>titre de la propriété</h1>
                        </div>
                        <div class="col-4">
                            <h1>prix</h1>
                        </div>
                        <div class="col-4">
                            <!--------desciprion de la proprieté-------->
                            <h1>4pieces/105m carré</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 border">
            <a href="#">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!--------l'image sera chargée ici-------->
                            <img src="{{ asset('img/Capture.PNG') }}" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">prix</div>
                        <div class="col-4">
                            <!--------nombre de photo-------->
                            5 photo(5)</div>
                        <div class="col-4">
                            <!--------favoris-------->
                            favoris
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h1>titre de la propriété</h1>
                        </div>
                        <div class="col-4">
                            <h1>prix</h1>
                        </div>
                        <div class="col-4">
                            <!--------desciprion de la proprieté-------->
                            <h1>4pieces/105m carré</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection

