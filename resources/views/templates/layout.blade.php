<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menulayout.css') }}">
</head>
<body>
@include('templates.menulayout')
@yield('gestion')
@yield('vendre')
@yield('vendres')
@yield('modifier')
@yield('maison')
@yield('mofimaison')
@yield('bienvendu')
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a href="#">
                    <h1>logo</h1>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a href="">vendre</a>
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
</body>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset("bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('lightbox/dist/js/lightbox.min.js') }}"></script>
<script src="{{ asset('dist/chart.js') }}"></script>
<script src="{{ asset('js/share.js') }}"></script>
<script src="{{ asset('js/menu.js') }}"></script>
<script src="{{ asset('js/typelighter.min.js') }}"></script>

</html>
