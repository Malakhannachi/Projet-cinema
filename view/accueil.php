<?php ob_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <title>WORLD OF CINEMA</title>
</head>
<body>
   <header>
    <nav>
        <ul>
            <li><a href="accueil.php">Accueil</a></li>
            <li><a href="index.php?action=listFilms"><i class="fas fa-search"></i></a></li>
        </ul>
    </nav>
    </header>
    <main>
        <section id="reserver">
            <figure class="avatar">
                <img src="/public/img/avatar.jpg" alt="film Avatar">
            </figure>
            <h2>AVATAR</h2>
            <div class="btn"><button>Réserver</button></div>
            <div class="plus"><i class="fas fa-plus"></i></div>
        </section>
        <section id="films"></section>
        <h3>Liste des films</h3>
        <div id="listeFilms">
            <ul>
             <li><img src="/public/img/avatar.jpg" alt=""></li>
             <li><img src="/public/img/avatar.jpg" alt=""></li>
            </ul>
        </div>
    </main>
    
</body>
</html>

<?php
$titre = "accueil";
$contenu = ob_get_clean();
require "view/template.php";
?>
