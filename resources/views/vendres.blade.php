@extends("templates.layout")
@section('title')
Vendre un bien
@endsection
@section('vendres')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-sm-12 col-md-8 col-lg-8">
            @if ($proprietaire->civilite=="mr")
                 <h2>Bienvenu {{ $proprietaire->civilite }} {{ $proprietaire->nom }} {{ $proprietaire->postnom }}</h2>
            @endif
            @if ($proprietaire->civilite=="mme")
                 <h2>Bienvenue {{ $proprietaire->civilite }} {{ $proprietaire->nom }} {{ $proprietaire->postnom }}</h2>
            @endif
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="imgControl">
                <img src="{{ asset('img/accueil1.jpeg') }}" alt="">
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            @error('photo1')
                           <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                                {{ $message }}
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
            @enderror
            @error('photo2')
                           <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                                {{ $message }}
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
            @enderror
            @error('photo3')
                           <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                                {{ $message }}
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
            @enderror
            @error('photo4')
                           <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                                {{ $message }}
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
            @enderror
            @error('photo5')
                           <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                                {{ $message }}
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
            @enderror
                @error('prix')
                               <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                                    {{ $message }}
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                @enderror
                @error('ville')
                               <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                                    {{ $message }}
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                @enderror
                @error('com')
                               <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                                    {{ $message }}
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                @enderror
                @error('desc')
                               <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                                    {{ $message }}
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                @enderror
                @error('quart')
                               <div class="alert alert-danger alert-dismissible fade show MESSAGE" role="alert">
                                    {{ $message }}
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                @enderror

                @if (session()->has("confirmation"))

                   <div class="alert alert-success alert-dismissible fade show MESSAGE" role="alert">
                       {{ session()->get("confirmation") }}
                       <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
                   @endif
            <h2>Veillez entrer les informations sur la propriétés</h2>
            <form action="{{ route('enregistrer-un-bien') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="contenair-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="photo1" class="w-100">Photo principale<span style="color: red">*</span></label>
                            <input type="file" name="photo1" class="w-100 control-form" id="photo1">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="photo2" class="w-100">Photo sécondaire 1<span style="color: red">*</span></label>
                            <input type="file" name="photo2" class="w-100 control-form" id="photo2">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="photo3" class="w-100">Photo sécondaire 2<span style="color: red">*</span></label>
                            <input type="file" name="photo3" class="w-100 control-form" id="photo3">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 ">
                            <label for="photo4" class="w-100">Photo sécondaire 3<span style="color: red">*</span></label>
                            <input type="file" name="photo4" class="w-100 control-form" id="photo4">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="photo5" class="w-100">Photo sécondaire 4<span style="color: red">*</span></label>
                            <input type="file" name="photo5" class="w-100 control-form" id="photo5">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="prix" class="w-100">Prix<span style="color: red">*</span></label>
                            <input type="num" name="prix" class="w-100 control-form" id="prix" placeholder=" Prix" value="{{ old('prix') }}">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="ville" class="w-100">Ville<span style="color: red">*</span></label>
                            <input type="text" name="ville" class="w-100 control-form" id="vile" placeholder=" Ville" value="{{ old('ville') }}">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="com" class="w-100">Commune<span style="color: red">*</span></label>
                            <input type="text" name="com" class="w-100 control-form" id="com" placeholder=" Commune" value="{{ old('com') }}">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="quart" class="w-100">Quartier<span style="color: red">*</span></label>
                            <input type="text" name="quart" class="w-100 control-form" id="quart" placeholder=" Quartier" value="{{ old('quart') }}">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <label for="type" class="w-100">Type de propriété<span style="color: red">*</span></label>
                            <select name="type" class="w-100 select-control" id="type" value="{{ old('type') }}">
                                <option value="maison">Maison</option>
                                <option value="appart">Appartement</option>
                                <option value="parcelle">Parcelle</option>
                                <option value="terrain">Terrain</option>
                                <option value="service">Résidence de service</option>
                                <option value="bureau">Bureau</option>
                                <option value="entrepot">Entrepot</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <label for="type" class="w-100">Usage<span style="color: red">*</span></label>
                            <select name="usage" class="w-100 select-control" id="type" value="{{ old('usage') }}">
                                <option value="location">Location</option>
                                <option value="vendre">A vendre</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="desc" class="w-100">Déscription<span style="color: red">*</span></label>
                            <textarea name="desc" class="w-100 form-control" id="desc" cols="30" rows="5" placeholder="  Déscription" value="{{ old('desc') }}"></textarea>
                            <input type="hidden" name="id_pro" value="{{ $proprietaire->id }}">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <input value="Enregistrer" type="submit" class="w-100 btb btn-dark control-form" id="com">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
