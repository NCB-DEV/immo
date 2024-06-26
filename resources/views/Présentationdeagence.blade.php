@extends('templates.templete2')
@section('title')
Présentation immo
@endsection
@section('Presentationdeagence')
<div class="container pagence">

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <img data-aos="fade-right" data-aos-duration="3000" data-aos-once="true"  style="object-fit: contain;width:100%;border-radius:10px" src="{{ asset('img/logo.jpg') }}" alt="">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="">
                <h2>Présentation de l'agence</h2>
                <p>
                    CABINET IMMOBILIER A KINSHASA
                </p>
                <P>
                    Notre agence immobilier vous accueille dans une ambiance chaleureuse pour une étude de votre projet immobilier quel qu'il soit.
                </P>
                <p>
                    Immo reçoit une clientèle variée,local ou provenant d'autres régions, pour des projets aussi differents que l'achat des propriétés principales, la location annuelle ou mensuelle, la gestion immobilière d'un patrimoine immobilier et la vente d'un bien immobilier. Situé en République Démocratique du Congo, notre agence immobilière développe ses activités immobilièere dans la ville de Kinshasa.
                </p>
                <p>
                    Notre site internet, régulièrement mis à jour et référencé, vous propose une large gamme de biens immobiliers,maisons,terrains et appartements à kinshasa et ses environs.
                </p>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>
                Independante de tout réseau ou franchise, notre agence immobilière se compose d'une équipe de conseilliers immobiliers experimentés, qualifiés, maitrisant parfaitement le marché immobilier de Kinshasa. Un niveau de compétence et de formation leur permet de vous apporter un suivi tout au long du processus de transcation, avec ujn accompagnement de votre projet immobilier, jusq'à son terme de réussite.
            </p>
            <p>
                Notre service de gestion locative, administré par des professionnels de la gestion immobilière vous propose un service global pour une gestion personnalisée de votre patrimoine immobilier
            </p>
            <p>
                Pour la vente de votre bien, maison, appartement, à Kinshasa et ses environs, nos conseillers effectueront une estimation précise pour vous donner la valeur vénale et la valeur locative de votre bien et vous proposeront un plan de communication pour une visibilité de votre annonce immobilière, sur notre site,notre vitrine et nombreux portails d'annonces du web
            </p>
        </div>

    </div>
</div>
@endsection

