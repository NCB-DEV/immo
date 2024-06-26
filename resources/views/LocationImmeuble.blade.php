@extends('templates.template')
@section('title')
Immeuble à louer
@endsection
@section('titre_page')
Immeuble à louer
@endsection
@section('resultat')
{{ count($boostParcel)+count($parcelNorm ) }}  annonces trouvées
@endsection
@section('alouer')
<div class="container sponsorise">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">

            <div class="container-fluid">
                <div class="row">

                    @foreach ($boostParcel as $boosts)

                            <div class="col-sm-12 col-md-4 col-lg-4 ">
                                <div class="element" data-aos-anchor="#image5" data-aos="fade-up" data-aos-duration="3000" data-aos-once="true">
                                    <h6> sponsorisé</h6>
                                    {{ dd($boosts->id) }}
                                    <a href="{{ route('voir-l-immeuble',['id'=>$boosts->id]) }}">
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

                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container sponsorise">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">

            <div class="container-fluid">
                <div class="row">

                    @foreach ($parcelNorm as $boosts)

                        @if ($boosts->usages="location")
                        <div class="col-sm-12 col-md-4 col-lg-4 ">
                            <div class="element" data-aos-anchor="#image5" data-aos="fade-up" data-aos-duration="3000" data-aos-once="true">
                                <a href="{{ route('voir-l-immeuble',['id'=>$boosts->id]) }}">
                                    <div class="sponsoirise">
                                        <div class="photo">
                                            <img style="width: *200px; objectif-fit:cover; height:200px" class="w-100" src="{{ asset('storage/'.$boosts->photo2 ) }}" >
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


                    @endforeach
                    {{ $parcelNorm->links() }}
                </div>
            </div>

        </div>
    </div>
</div>@endsection

