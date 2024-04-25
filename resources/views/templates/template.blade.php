<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('aos/aos.css') }}">

</head>
<body>

@include('templates.menu')
<div class="container officiel">
    <div class="row">
        <div class="col-sm-12">
            <div class="immo">
                <span class="maison"></span>/Immobilier/@yield('titre_page')
            </div>
        </div>
    </div>
</div>

<div class="container officiel">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h2 class="titre">@yield('titre_page')</h2>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <!--------resultat de la cherche-------->
            <div class="resultats">
                <h2>@yield('resultat')</h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 results-container" id="result-container"></div>
    </div>
</div>
@yield('accuei')
@yield('alouer')
@yield('Biensvendus')
@yield('gestion')
@yield('Estimationdubien')
@include('templates.footer')
<script src="{{ asset("bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('lightbox/dist/js/lightbox.min.js') }}"></script>
<script src="{{ asset('dist/chart.js') }}"></script>
<script src="{{ asset('js/share.js') }}"></script>
<script src="{{ asset('js/menu.js') }}"></script>
<script src="{{ asset('js/typelighter.min.js') }}"></script>
<script src="{{ asset('aos/aos.js') }}"></script>
<<script>
    AOS.init();
</script>
@livewireScripts
</body>

</html>
