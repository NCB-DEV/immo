@extends('templates.template')
@section('title')
Vente Immeubles
@endsection
@section('titre_page')
Immeuble à vendre
@endsection
@section('resultat')
{{ count($boostParcel)+count($parcelNorm) }} annonces trouvées
@endsection
@section('accuei')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">

            <div class="container-fluid">
                <div class="row">

                    @foreach ($boostParcel as $boosts)

                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <h3> sponsorisé</h3>
                                <a href="{{ route('voir-l-immeuble',['id'=>$boosts->id]) }}">
                                <div class="sponsoirise">
                                    <div class="photo">
                                        <img style="width: 200px; objectif-fit:cover; height:200px" class="w-100" src="{{ asset('storage/'.$boosts->photo2 ) }}" >
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            {{ $boosts->prix }}$
                                        </div>
                                        <div class="col-2">
                                            {{ $boosts->usages }}
                                        </div>
                                        <div class="col-8">
                                            <h5>+243 821 248 030</h5>
                                        </div>
                                        <div class="col-12">
                                            <p>Adresse: V.{{ $boosts->ville }},C.{{ $boosts->communie  }},Q.{{ $boosts->quartier  }}</p>
                                        </div>
                                        <div class="col-12">
                                            <p>Date & heure de publication:{{ $boosts->created_at  }}</p>
                                        </div>
                                        <div class="col-12">
                                            {{ $boosts->description }}
                                        </div>

                                    </div>
                                </div>
                               </a>
                            </div>


                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach ( $parcelNorm as $nonboost )
            @if ($nonboost->usages =="vendre")
            <div class="col-sm-12 col-md-4 col-lg-4">
                <a href="{{ route('voir-l-immeuble',['id'=>$nonboost->id]) }}">
                    <div class="publication">
                        <div class="image">
                            <img style="width: 200px; objectif-fit:cover; height:200px" class="w-100" src="{{ asset('storage/'.$nonboost->photo2 ) }}" >
                        </div>
                        <div class="row">
                            <div class="col-2">
                                {{ $nonboost->prix }}$
                            </div>
                            <div class="col-2">
                                {{ $nonboost->usages }}
                            </div>
                            <div class="col-8">
                                <h5>+243 821 248 030</h5>
                            </div>
                            <div class="col-12">
                                <p>Adresse: V.{{ $nonboost->ville }},C.{{ $nonboost->communie  }},Q.{{ $nonboost->quartier  }}</p>
                            </div>
                            <div class="col-12">
                                <p>Date & heure de publication:{{ $nonboost->created_at  }}</p>
                            </div>
                            <div class="col-12">
                                {{ $nonboost->description }}
                            </div>

                        </div>
                    </div>
                </a>
            </div>
            @endif
        @endforeach
                {{ $parcelNorm->links() }}
    </div>
</div>

@endsection

