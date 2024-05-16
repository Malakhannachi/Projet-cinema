<?php ob_start(); 
foreach($requeteSearch->fetchAll() as $results){
    ?>
 <p>
    titre =<?= $results['titre'] ?>
    <?= $results['annee_sortie'] ?>
    <?= $results['resume'] ?>
    <?= $results['duree_film'] ?>

    </p>
 
<?php } ?>





<?php
$titre = "NOS FILMS";
$titre_secondaire = "Liste des Genre";
$contenu = ob_get_clean();
require "view/template.php";