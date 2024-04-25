<div class="menus">
    <nav>
        <img class="" style="object-fit: cover; width:60px;margin-left:30px" src="{{ asset('img/logo.jpg') }}" alt="">


            <span id="menu-toggle" class="menu-toggle" class="ham">&#9776</span>

        <ul class="menu" id="menu">
            <li><a href="{{ url('/') }}">Vente Parcelles</a></li>
            <li><a href="{{ route('A-louer') }}">Location Parcelles</a></li>

            <li><a href="{{ route('Vente-Immeubles') }}">Vente Immeubles</a></li>
            <li><a href="{{ route('Location-Immeuble') }}">Location Immeubles</a></li>

            <li><a href="{{ route('Gestion') }}">Gestion</a></li>
            <li><a href="{{ route("Vendre-un-bien") }}">Vendre</a></li>
             <li><a href="{{ route('Présentation-de-l-agence') }}">A propos</a></li>
            <li><a href="{{ route('Contactez-nous') }}">Contact</a></li>
        </ul>
    </nav>

</div>
