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
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('aos/aos.css') }}">
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
@include('templates.footer')
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
<script src="{{ asset('aos/aos.js') }}"></script>
<script>
    AOS.init();
</script>

</html>
