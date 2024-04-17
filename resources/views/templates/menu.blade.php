<div class="menus">
    <nav>
        <h1><span class="maison"></span><span class="typeWriter" data-text='["IMMO"]'></span></h1>


            <span id="menu-toggle" class="menu-toggle" class="ham">&#9776</span>

        <ul class="menu" id="menu">
            <li><a href="{{ url('/') }}">Vente Parcelles</a></li>
            <li><a href="{{ route('A-louer') }}">Location Parcelles</a></li>

            <li><a href="{{ route('Vente-Immeubles') }}">Vente Immeubles</a></li>
            <li><a href="{{ route('Location-Immeuble') }}">Location Immeubles</a></li>

            <li><a href="{{ route('Gestion') }}">Gestion</a></li>
            <li><a href="{{ route("Estimation-du-bien") }}">Estimation</a></li>
            <li><a href="{{ route("Vendre-un-bien") }}">Vendre</a></li>
             <li><a href="{{ route('agence') }}">L'agence</a></li>
             <li><a href="{{ route('Présentation-de-l-agence') }}">Présentation de l'agence</a></li>
             <li><a href="{{ route('Actualites') }}">Actualités</a></li>
            <li><a href="{{ route('Contactez-nous') }}">Contact</a></li>
        </ul>
    </nav>

</div>
