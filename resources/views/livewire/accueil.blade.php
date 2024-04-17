
    <div class="container border">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">

                <div class="container-fluid">
                    <div class="row">

                        @foreach ($boost as $boosts)

                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h3> sponsorisé</h3>
                                    <a href="{{ route('voir-la-proprieté',['id'=>$boosts->id]) }}">
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
            @foreach ( $nonboost as $nonboosts )
                @if ($nonboosts->usages=="vendre")
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <a href="{{ route('voir-la-proprieté',['id'=>$nonboosts->id]) }}">
                        <div class="publication">
                            <div class="image">
                                <img style="width: 200px; objectif-fit:cover; height:200px" class="w-100" src="{{ asset('storage/'.$nonboosts->photo2 ) }}" >
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    {{ $nonboosts->prix }}$
                                </div>
                                <div class="col-2">
                                    {{ $nonboosts->usages }}
                                </div>
                                <div class="col-8">
                                    <h5>+243 821 248 030</h5>
                                </div>
                                <div class="col-12">
                                    <p>Adresse: V.{{ $nonboosts->ville }},C.{{ $nonboosts->communie  }},Q.{{ $nonboosts->quartier  }}</p>
                                </div>
                                <div class="col-12">
                                    <p>Date & heure de publication:{{ $nonboosts->created_at  }}</p>
                                </div>
                                <div class="col-12">
                                    {{ $nonboosts->description }}
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                @endif
            @endforeach

        </div>
    </div>

