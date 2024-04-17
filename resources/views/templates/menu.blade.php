<nav>
    <h1>logo</h1>

    <button id="menu-toggle" class="menu-toggle">
        <span class="hamburger-lines"></span>
    </button>
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
