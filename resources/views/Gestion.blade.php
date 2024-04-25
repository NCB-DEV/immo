@extends('templates.templete2')
@section('title')
Gestion
@endsection
@section('titre_page')
Gestion
@endsection
@section('gestion')
<div class="container gestion">
    <div class="row">
        <div class="col-12">
            <p>
                Au sein d'un marché immobilier en constante évolution,s'accompagner d'un professionnel est indispensable. En confiant vos biens en gestion à notre Cabinet immobilier, vous bénéficier d'un professionnalisme et de notre experience de plus de 10 ans sur le marché immobilier à KINSHASA
            </p>
            <p>
                Notre équipe vous propose, à vous Propriétaire-Bailleur, une gamme complète de services personnalisés,assortis d'engagements clairs
            </p>
            <p>
                <h3>GESTION COMMERCIALE</h3>
                <ul>
                    <li>Estimation de votre bien.</li>
                    <li>Mise en place de la publicité (sur differents sites via internet,photo,panneaux,affichage vitrine,...)</li>
                    <li>Des candidats locataires sélectionnées (Situation financière et professionnelle, caution, assurance).</li>
                    <li>La rédaction et signature des baux.</li>
                    <li>Le quittancement mensuel ou trimestriel des locataires.</li>
                </ul>
            </p>
        </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            Vos coordonnées
            <form action="" method="post">
                @csrf
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label class="w-100" for="Civilite">Civilite<span style="color: red">*</span></label>
                            <select name="civilite" id="Civilite" class="form-select w-100">
                                <option value="mr">Mr</option>
                                <option value="mme">Mme</option>
                            </select>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="nom" class="w-100">Nom<span style="color: red">*</span></label>
                            <input type="text" name="nom" id="nom" class="w-100 form-control" placeholder="  Nom ">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="post" class=" w-100">Postnom<span style="color: red">*</span></label>
                            <input type="text" name="postnom" id="nom" class="w-100 form-control" placeholder=" Postnom">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="email" class="w-100">Adresse email<span style="color: red">*</span></label>
                            <input type="email" name="email" id="email" class="w-100 form-control" placeholder=" Email">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="telephone">Téléphone<span style="color: red">*</span></label>
                            <input type="tel" name="telephone" id="telephone" class="w-100 form-control" placeholder=" Téléphone">
                        </div>

                        <div class="col-12">
                            <label for="demande">Votre Message<span style="color: red">*</span></label>
                            <textarea name="message" class="w-100 form-control" placeholder=" Message" id="demande" cols="30" rows="5"></textarea>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <button class="form-control btn btn-dark">Envoyer</button>
                        </div>

                    </div>
                </div>
            </form>

        </div>
        <div class="col-6">
                <img data-aos-anchor="#image5" data-aos="fade-up" data-aos-duration="3000" data-aos-once="true" style="object-fit: cover;width:100%;border-radius:12px" src="{{ asset('img/fille-devant-maison.jpeg') }}" alt="">
        </div>

    </div>
</div>
</div>
@endsection

