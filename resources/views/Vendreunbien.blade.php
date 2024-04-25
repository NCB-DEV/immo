@extends('templates.templete2')
@section('title')
Connexion client
@endsection
@section('connexion')
<div class="container ConnexionClient">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <img data-aos="fade-right" data-aos-duration="3000" data-aos-once="true" style="object-fit: cover; border-radius:10px;width:100%" class="imdConnexion" src="{{ asset('img/salon1.jpeg') }}" alt="">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            @if (session()->has("fux"))

                        <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                            {{ session()->get("fux") }}
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <script>
                            window.onload=function(){
                                document.getElementById('alert').focus();
                                console.log("ok");
                            };
                        </script>
                   @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error )
                        {{ $error }}
                    @endforeach
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <img src="{{ asset('img/logo.jpg') }}" style="width: 250px;text-align:center;margin:0 auto;position: relative;
            left:25%" alt="">
            <h1 style="text-align: center"> Connectez-vous pour publier votre annonce</h1>
            <form action="{{ route('Connexion-utilisateur') }}" method="post">
                @csrf
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <label for="email" class="w-100">Adresse email<span style="color: red">*</span></label>
                            <input type="email" name="email" id="email" class="w-100 form-control" placeholder=" E-mail">
                        </div>

                        <div class="col-12">
                            <label for="mdp">Mot de passe<span style="color: red">*</span></label>
                            <input type="password" name="mdp" id="mdp" class="w-100 form-control" placeholder=" Mot de passe">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <button class="form-control btn btn-dark">Connexion</button>
                        </div>
                        <p class="pas">
                            Pas de compte?<a href="{{ route('créer-un-compte') }}">Créer un compte</a>
                        </p>


                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
