<div class="menus">
    <nav>
        <h1><span class="maison"></span><span class="typeWriter" data-text='["IMMO"]'></span></h1>
        <span id="menu-toggle" class="menu-toggle" class="ham">&#9776</span>
        <ul class="menu" id="menu">
            <li><a href="{{ route('dashbord',['proprietaire'=>$proprietaire]) }}">Tableau de bord</a></li>
        <li><a href="{{ route('Gestion-des-proprietes',['proprietaire'=>$proprietaire]) }}">Gestion des parcelles</a></li>
        <li><a href="{{ route('Gestion-de-propriete',['proprietaire'=>$proprietaire]) }}">Gestion des Maisons</a></li>
        <li><a href="{{ route('Bien-vendus',['proprietaire'=>$proprietaire]) }}">Biens vendus</a></li>
        <li><a href="#">Déconnexion</a></li>
        </ul>
    </nav>
</div>
