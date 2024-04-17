<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
</head>
<body>
    @livewireStyles
@include('templates.menu')
<div class="container">
    <div class="row">
        icon/Immobilier/@yield('titre_page')
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <form action="#" method="post">
                @csrf
                <input type="text" name="recherche" id="" placeholder=" Chercher des propriétés ici" class="form-control w-100">
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <!--------requete ajax pour affiher les elements-------->
            Trié par <form action="" method="post">
                <select name="selection" id="sele">
                    <option value="date">Date</option>
                    <option value="plus_petit_grand">Prix-/+</option>
                    <option value="plus_grand_petit">Prix+/-</option>
                </select>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h2>@yield('titre_page')</h2>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <!--------resultat de la cherche-------->
            <h2>@yield('resultat')</h2>
        </div>
    </div>
</div>

@yield('accuei')
@yield('alouer')
@yield('Biensvendus')
@yield('gestion')
@yield('Estimationdubien')
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a href="#">
                    <h1>logo</h1>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a href="{{ route('Vendre-un-bien') }}">vendre</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a href="#">acheter</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <h2>RESEAUX SOCIAUX</h2>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <h2>A PROPOS DE NOUS</h2>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a href="#">conditions générales d'utilisation</a>
                <a href="#">Politique de confidentialité</a>
                <a href="#">Polique de cookie</a>
                <a href="#">réglage des cookies</a>
            </div>
        </div>
    </div>
</footer>
@livewireScripts
<script src="{{ asset("bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('lightbox/dist/js/lightbox.min.js') }}"></script>
<script src="{{ asset('dist/chart.js') }}"></script>
<script src="{{ asset('js/share.js') }}"></script>
<script src="{{ asset('js/menu.js') }}"></script>
<script src="{{ asset('js/typelighter.min.js') }}"></script>
</body>

</html>
