<div class="menus">

    <nav>
        <img class="" style="object-fit: cover; width:60px;margin-left:30px" src="{{ asset('img/logo.jpg') }}" alt="">
        <span id="menu-toggle" class="menu-toggle" class="ham">&#9776</span>
        <ul class="menu" id="menu">
            <li><a href="{{ route('dashbord',['proprietaire'=>$proprietaire]) }}">Tableau de bord</a></li>
        <li><a href="{{ route('Gestion-des-proprietes',['proprietaire'=>$proprietaire]) }}">Gestion des parcelles</a></li>
        <li><a href="{{ route('Gestion-de-propriete',['proprietaire'=>$proprietaire]) }}">Gestion des Maisons</a></li>
        <li><a href="#">Déconnexion</a></li>
        </ul>
    </nav>
</div>
