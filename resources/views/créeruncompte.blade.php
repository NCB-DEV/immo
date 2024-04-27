@extends('templates.templete2')
@section('title')
Enregistrement client
@endsection
@section('enregistrement')
<div class="container enre">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <img data-aos="fade-up" data-aos-duration="3000" data-aos-once="true" src="{{ asset('img/ville.jpeg') }}" alt="">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            @if (session()->has("success"))

                        <div class="alert alert-success alert-dismissible fade show MESSAGE" role="alert">
                            {{ session()->get("success") }}
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <script>
                            window.onload=function(){
                                document.getElementById('alert').focus();
                                console.log("ok");
                            };
                        </script>
                   @endif
                   @if (session()->has("false"))

                        <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                            {{ session()->get("false") }}
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <script>
                            window.onload=function(){
                                document.getElementById('alert').focus();
                                console.log("ok");
                            };
                        </script>
                   @endif
                   @if (session()->has("exist"))

                   <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                       {{ session()->get("exist") }}
                       <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
                   <script>
                       window.onload=function(){
                           document.getElementById('alert').focus();
                           console.log("ok");
                       };
                   </script>
              @endif
                        @error('nom')
                           <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                                {{ $message }}
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @enderror
                        @error('postnom')
                           <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                                {{ $message }}
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @enderror
                        @error('email')
                           <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                                {{ $message }}
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @enderror

                        @error('telephone')
                           <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                                {{ $message }}
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @enderror
                        @error('mdp')
                           <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                                {{ $message }}
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @enderror
                        <img src="{{ asset('img/logo.jpg') }}" style="width: 150px;text-align:center;margin:0 auto;position: relative;
                        left:40%" alt="">
            <h1 style="text-align: center"> Créer un compte</h1>
            <form action="{{ route('creation-du-compte') }}" method="post">
                @csrf
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <label class="w-100 " for="Civilite">Civilite<span style="color: red">*</span></label>
                                <select name="civilite" id="Civilite" class="form-select w-100" value="{{ old('civilite') }}">
                                    <option value="mr">Mr</option>
                                    <option value="mme">Mme</option>
                                </select>
                        </div>
                        <div class="col-12">
                            <label for="nom" class="w-100">Nom<span style="color: red">*</span></label>
                            <input type="text" name="nom" id="nom" class="w-100 form-control" placeholder=" Veillez indiquer votre nom ici" value="{{ old('nom') }}">
                        </div>
                        <div class="col-12">
                            <label for="post" class=" w-100">Postnom<span style="color: red">*</span></label>
                            <input type="text" name="postnom" id="nom" class="w-100 form-control" placeholder=" Veillez indiquer votre Postnom ici" value="{{ old('postnom') }}">
                        </div>
                        <div class="col-12 ">
                            <label for="email" class="w-100">Adresse email<span style="color: red">*</span></label>
                            <input type="email" name="email" id="email" class="w-100 form-control" placeholder=" Veillez indiquer votre email ici">
                        </div>
                        <div class="col-12 ">
                            <label for="telephone">Téléphone<span style="color: red">*</span></label>
                            <input type="tel" name="telephone" id="telephone" class="w-100 form-control" placeholder=" Veillez indiquer votre numero de téléphone ici" value="{{ old('telephone') }}">
                        </div>
                        <div class="col-12 ">
                            <label for="mdp">Mot de passe<span style="color: red">*</span></label>
                            <input type="password" name="mdp" id="mdp" class="w-100 form-control" placeholder=" Veillez indiquer votre mot de passe ici" >
                        </div>
                        <div class="col-12 ">
                                <label for="cmdp">confirmation du mot de passe<span style="color: red">*</span></label>
                                <input type="password" name="cmdp" id="cmdp" class="w-100 form-control" placeholder=" Veillez confirmer votre mot de passe ici">
                        </div>
                        <div class="col-6 ">
                            <button class="form-control btn btn-dark">Créer un Compte</button>
                        </div>
                        <p>
                            Vous avez déjà un compte?<a href="{{ route('Vendre-un-bien') }}">Connectez-vous</a>
                        </p>
                        <div class="col-sm-12 col-md-6 col-lg-6"></div>
                        <div class="col-sm-12 col-md-6 col-lg-6"></div>
                        <div class="col-sm-12 col-md-6 col-lg-6"></div>
                        <div class="col-sm-12 col-md-6 col-lg-6"></div>
                        <div class="col-sm-12 col-md-6 col-lg-6"></div>
                        <div class="col-sm-12 col-md-6 col-lg-6"></div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
