@extends('templates.templete2')
@section('title')
Agence immo
@endsection
@section('agence')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h1>google map</h1>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-sm-12 col-md-8 col-lg-8">
            <h1>immo</h1>
            <p>
                Av.Kikwit2,Q.Mazambe,C.Mont-ngafula,Kinshasa
            </p>
            <p>
                Téléphone:+243 821 248 030 <br>
                <a href="mailto:nathancimbela006@gmail.com">nathancimbela006@gmail.com</a>
            </p>
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h2>L'immobilier à kinshasa</h2>
            <img src="{{ asset('img/accueil1.jpeg') }}" alt="photo de immo">
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
    </div>
</div>
@endsection
