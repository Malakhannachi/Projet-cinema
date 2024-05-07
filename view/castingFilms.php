<?php ob_start(); ?>

<table class="uk-table uk-table-striped" border="1">
    <thead>
        <tr>
            <th>Titre</th>
            <th>nom Acteur</th>
            <th>prenom Acteur</th>
            <th>sexe Acteur</th>
        </tr>
    </thead>
    <tbody>
    
        <?php
        $CAST = $requeteFilm->fetchAll();
        foreach ($CAST as $film){?>
        <tr>
            <td><?= $film['titre'] ?></td>
            <td><?= $film['nom'] ?></td>
            <td><?= $film['prenom'] ?></td>
            <td><?= $film['sexe'] ?></td>
        </tr>
        <?php } ?>

<?php
$titre = "Liste des Castin Films";
$titre_secondaire = "Liste des films";
$contenu = ob_get_clean();
require "view/template.php";
