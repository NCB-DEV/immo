@extends('templates.templete2')
@section('title')
Location Propriété {{ $id }}
@endsection
@section('Location')
<div class="contenair">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <p>
                Location/type/description/{{ $id }}
            </p>
            <h1> carrousel d'images</h1>
            <h1>titre</h1>
            <h1>description</h1>
            <h3>Loyer prx$/mois</h3>
            <div class="row">
                <div class="col-4">
                    avis
                </div>
                <div class="col-4">
                    telechargé
                </div>
                <div class="col-4">
                    partager
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
