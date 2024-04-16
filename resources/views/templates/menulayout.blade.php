<nav>
    <h1>logo</h1>
    <ul>
        <li><a href="{{ route('dashbord',['proprietaire'=>$proprietaire]) }}">Tableau de bord</a></li>
        <li><a href="{{ route('Gestion-des-proprietes',['proprietaire'=>$proprietaire]) }}">Gestion des parcelles</a></li>
        <li><a href="{{ route('Gestion-de-propriete',['proprietaire'=>$proprietaire]) }}">Gestion des Maisons</a></li>
        <li><a href="{{ route('Bien-vendus',['proprietaire'=>$proprietaire]) }}">Biens vendus</a></li>
        <li><a href="#">Déconnexion</a></li>
    </ul>
</nav>
