@extends('templates.template')
@section('title')
Accueil
@endsection
@section('titre_page')
A vendre
@endsection
@section('resultat')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="resultat">
                {{ count($boost)+count($nonboost) }} annonces trouvées
            </div>
        </div>
    </div>
</div>
@endsection
@section('accuei')

<div class="container sponsorise">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">

            <div  class="container-fluid">
                <div class="row" id="sponsorise">

                    @foreach ($boost as $boosts)
                        @if ($boosts->avis="nom vendu")
                           @if ($boosts->usage="vendre")
                           <div class="col-sm-12 col-md-6 col-lg-4  " >
                            <div   class="element" data-aos-anchor="#image5" data-aos="fade-up" data-aos-duration="3000" data-aos-once="true">
                                <h6> sponsorisé</h6>
                                <a  href="{{ route('voir-la-proprieté',['id'=>$boosts->id]) }}">
                                <div class="sponsoirise">
                                    <div class="photo">
                                        <img style="width: 200px; objectif-fit:cover; height:200px"
                                         class="w-100" src="{{ asset('storage/'.$boosts->photo2 ) }}" >
                                    </div>
                                    <div class="row">
                                        <div class="col-6 prix">
                                           <span>{{ $boosts->prix }}$</span>
                                        </div>
                                        <div class="col-6 usage">
                                           <span>{{ $boosts->usages }}</span>
                                        </div>
                                        <div class="col-12 desc">
                                            {{ $boosts->description }}
                                        </div>
                                        <div class="col-4 desc">
                                            <p>numéro:{{ $boosts->id }}</p>
                                        </div>
                                        <div class="col-8 desc">
                                            <h5>+243 821 248 030</h5>
                                        </div>
                                        <div class="col-12 desc">
                                            <p>Adresse: V.{{ $boosts->ville }},C.{{ $boosts->communie  }},Q.{{ $boosts->quartier  }}</p>
                                        </div>
                                        <div class="col-12 desc">
                                            <p>Date & heure de publication:{{ $boosts->created_at  }}</p>
                                        </div>


                                    </div>
                                </div>
                               </a>
                            </div>

                        </div>
                           @endif

                        @endif
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container sponsorise">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">

            <div id="nosponsorise" class="container-fluid">
                <div class="row" id="nosponsorise" >

                    @foreach ($nonboost as $boosts)
                        @if ($boosts->usages="vendre")
                            @if ($boosts->avis="nom vendu")
                            <div class="col-sm-12 col-md-6 col-lg-4 ">
                                <div class="element" data-aos-anchor="#image5" data-aos="fade-up" data-aos-duration="3000" data-aos-once="true">
                                    <a href="{{ route('voir-la-proprieté',['id'=>$boosts->id]) }}">
                                        <div class="sponsoirise">
                                            <div class="photo">
                                                <img style="width: 200px; objectif-fit:cover; height:200px" class="w-100" src="{{ asset('storage/'.$boosts->photo2 ) }}" >
                                            </div>
                                            <div class="row">
                                                <div class="col-6 prix">
                                                   <span>{{ $boosts->prix }}$</span>
                                                </div>
                                                <div class="col-6 usage">
                                                   <span>{{ $boosts->usages }}</span>
                                                </div>
                                                <div class="col-12 desc">
                                                    {{ $boosts->description }}
                                                </div>
                                                <div class="col-4 desc">
                                                    <p>Identifiant:{{ $boosts->id }}</p>
                                                </div>
                                                <div class="col-8 desc">
                                                    <h5>+243 821 248 030</h5>
                                                </div>
                                                <div class="col-12 desc">
                                                    <p>Adresse: V.{{ $boosts->ville }},C.{{ $boosts->communie  }},Q.{{ $boosts->quartier  }}</p>
                                                </div>
                                                <div class="col-12 desc">
                                                    <p>Date & heure de publication:{{ $boosts->created_at  }}</p>
                                                </div>


                                            </div>
                                        </div>
                                       </a>
                                </div>

                            </div>
                            @endif
                        @endif


                    @endforeach
                    {{ $nonboost->links() }}

                </div>
            </div>

        </div>
    </div>
</div>
<script src="{{ asset('js/ajax.js') }}"></script>
@endsection

