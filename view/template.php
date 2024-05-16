<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel = "stylesheet" href = "public/css/style.css" />
<title><?= $titre ?></title>
<head></head>
<body>
   <!-- <nav class="uk-navbar-container" uk-navbar>
        <ul>
        //<?php if ($_GET['action'] === 'accueil') : ?>
                <li><a href="index.php?action=accueil">Accueil</a></li>
            //<?php endif; ?>
            <li><a href="index.php?action=listFilms">Films</a></li>
            <li><a href="index.php?action=listActeurs">Acteurs</a></li>
            <li><a href="index.php?action=listGenre">Genre</a></li>
            <li><a href="index.php?action=listRealisateur">Realisateur</a></li> 
            <li><a href="index.php?action=addCategorie">Ajouter Categorie</a></li>
            <li><a href="index.php?action=adddRole">Ajouter Role</a></li>
            <li><a href="index.php?action=addAct">Ajouter Acteur</a></li>
            <li><a href="index.php?action=addReal">Ajouter Realisateur</a></li>
            <li><a href="index.php?action=addFilms">Ajouter Film</a></li>
            <li><a href="index.php?action=delFilms"> Film</a></li>
            <li><a href="index.php?action=accueil">Accueil</a></li>

           
        </ul> 
    </nav> --->
    
    <nav class="nav">
        <ul> 
        <li><a href="index.php?action=accueil">Accueil</a></li>
        <li><a href="index.php?action=listFilms">Films</a></li>
        <li><a href="index.php?action=listActeurs">Acteurs</a></li>
        <li><a href="index.php?action=listGenre">Genre</a></li>
        <form class="search" action="index.php?action=search" method="post">
            <li><input class="uk-input" type="search" name="listFilms" placeholder="film..." ></li>
            <li> <button class="uk-button"><i class="fa-solid fa-magnifying-glass"></i></button> </li>
            </form>
        </ul>
    </nav>
    <div id="wrapper" class="uk-container uk-container-expand">
    <main>
     <div id="contenu">
        
        <!--<h2 class="uk-heading-bullet"><?= $titre ?></h2>-->
        <?= $contenu ?>
    </div>
    
    </main>
    </div>
     <footer class="footer">
        <p>CinémaServices;&copy; 2022 - Tous droits réservés</p>
    </footer>
</body>
