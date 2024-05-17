<?php ob_start(); 
foreach($requeteSearch->fetchAll() as $results){
    ?>
 <p class="resultat">
    titre =<?= $results['titre'] ?>
    Année SORTIE =<?= $results['annee_sortie'] ?>
    Resumé =<?= $results['resume'] ?>
    durrée Film=<?= $results['duree_film'] ?>

    </p>
 
<?php } ?>





<?php
$titre = "NOS FILMS";
$titre_secondaire = "Liste des Genre";
$contenu = ob_get_clean();
require "view/template.php";