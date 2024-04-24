@extends('templates.templete2')
@section('title')
Contactez-nous
@endsection
@section("Contact")
<div class="container-fluid contact">
    <div class="row">
        <div class="col-12">
            <h3>Veillez remplir ce formulaire pour nous contacter</h3>
        </div>
    </div>
</div>
<div class="container-fluid contact">
    <div class="row">
        <div class="col-12">

            <form action="" method="post">
                @csrf
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <img style="object-fit: cover;width:100%" class="imgCo" src="{{ asset('img/accueil1.jpeg') }}" alt="">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 ">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6 ">
                                        <label class="w-100" for="Civilite">Civilite<span style="color: red">*</span></label>
                                        <select name="civilite" id="Civilite" class="form-select w-100 " value="{{ old('civilite') }}">
                                            <option value="mr">Mr</option>
                                            <option value="mme">Mme</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label for="nom" class="w-100">Nom<span style="color: red">*</span></label>
                                        <input type="text" name="nom" id="nom" class="w-100 form-control" placeholder=" Nom" value="{{ old('nom') }}">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label for="post" class=" w-100">Postnom<span style="color: red">*</span></label>
                                        <input type="text" name="postnom" id="nom" class="w-100 form-control" placeholder=" Postnom">
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label for="email" class="w-100">Adresse email<span style="color: red">*</span></label>
                                        <input type="email" name="email" id="email" class="w-100 form-control" placeholder=" E-mail" value="{{ old('email') }}">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label for="telephone">Téléphone<span style="color: red">*</span></label>
                                        <input type="tel" name="telephone" id="telephone" class="w-100 form-control" placeholder=" Téléphone" value="{{ old('telephone') }}">
                                    </div>

                                    <div class="col-12">
                                        <label for="demande">Votre message<span style="color: red">*</span></label>
                                        <textarea name="message" class="w-100 form-control" placeholder=" Message" id="demande" cols="30" rows="5" value="{{ old('message') }}"></textarea>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <button class="form-control btn btn-dark">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>
@endsection
