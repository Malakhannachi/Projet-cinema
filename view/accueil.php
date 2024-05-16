<?php ob_start();?>
<?php use Model\Connect;?>
<main class="container">
        <section id="reserver">
            <figure class="avatar">
                <img src="public/img/avatar.jpg" alt="film Avatar">
            </figure>
            <div class="btn_reserver">
                <h2>AVATAR</h2>
                <div class="btn"><button>Réserver</button></div>
                <div class="plus"><i class="fas fa-plus"></i></div>
            </div>
        </section>
        <section id="films"></section>
        <h3>Liste des films</h3>
        <div id="listeFilms">
            <ul>
             <li><img src="public/img/aladin.jpg" alt="film Aladin"></li>
             <li><img src="public/img/bad boys.jpg" alt="film bad boys"></li>
             <li><img src="public/img/belle et bete.jpg" alt="film belle et bete"></li>
             <li><img src="public/img/mr et mrs smith.jpg" alt="film true lies"></li>
             
            </ul>
        </div>
    </main>
   

<?php
$titre = "Accueil";
$contenu = ob_get_clean();
require "view/template.php";
?>
