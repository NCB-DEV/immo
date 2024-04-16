@extends('templates.templete2')
@section('title')
Propriété{{ $parcele->id }}
@endsection
@section('afficherpropriete')
<div class="container">
    <div class="row">

        <div class="col-sm-12 col-md-2 col-lg-2 border"></div>
        <div class="col-sm-12 col-md-8 col-lg-8 border">
            <p>
                Vente/type/description/{{ $parcele->id }}
            </p>
            <div class="image">
                <div class="presentaion-img">
                    <a href="{{ asset('storage/'.$parcele->photo2 ) }}" data-lightbox="Galerie" data-title="Galerie/image 1 ">
                        <img style="width: 200px; objectif-fit:cover; height:400px" class="w-100" src="{{ asset('storage/'.$parcele->photoprincipale ) }}" >
                    </a>
                </div>
                <div class="img-secondaire" style="margin-top: 20px; display:flex; justify-content:space-between">
                    <div class="imgSecondaire" style="width: 100px;height:100px">
                        <a href="{{ asset('storage/'.$parcele->photo2 ) }}" data-lightbox="Galerie" data-title="Galerie/image 2 ">
                            <img style="width: 100%; objectif-fit:cover; height:100%" class="w-100" src="{{ asset('storage/'.$parcele->photo2 ) }}" >
                        </a>
                    </div>


                    <div class="imgSecondaire" style="width: 100px;height:100px">
                        <a href="{{ asset('storage/'.$parcele->photo3 ) }}" data-lightbox="Galerie" data-title="Galerie/image 3 ">
                            <img style="width: 100%; objectif-fit:cover; height:100%" class="w-100" src="{{ asset('storage/'.$parcele->photo3 ) }}" >
                        </a>
                    </div>
                    <div class="imgSecondaire" style="width: 100px;height:100px">
                        <a href="{{ asset('storage/'.$parcele->photo4 ) }}" data-lightbox="Galerie" data-title="Galerie/image 4 ">
                            <img style="width: 100%; objectif-fit:cover; height:100%" class="w-100" src="{{ asset('storage/'.$parcele->photo4 ) }}" >
                        </a>
                    </div>
                    <div class="imgSecondaire" style="width: 100px;height:100px">
                        <a href="{{ asset('storage/'.$parcele->photo2 ) }}" data-lightbox="Galerie" data-title="Galerie/image 5 ">
                            <img style="width: 100%; objectif-fit:cover; height:100%" class="w-100" src="{{ asset('storage/'.$parcele->photo2 ) }}" >
                        </a>
                    </div>
                </div>
            </div>

            <div class="info">
                <h4>description:{{ $parcele->description }}</h4>
                <h4>Prix:{{ $parcele->prix }}$</h4>
                <h4>Téléphone:+243 821 248 030</h4>
                <p>Adresse: Ville:{{ $parcele->ville }}, Commune:{{ $parcele->communie }},Quartier:{{ $parcele->quartier }}</p>
            </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
    </div>
</div>

@endsection
