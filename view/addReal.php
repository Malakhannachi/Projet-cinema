<?php ob_start(); ?>
<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date de Naissance</th>
            <th>Sexe</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($requetReal->fetchAll() as $realisateur){?> 
        <tr>
            <td><?= $realisateur['nom_R'] ?></td>
            <td><?= $realisateur['prenom_R']?></td>
            <td><?= $realisateur['date_N_R'] ?></td>
            <td><?= $realisateur['sexe'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<form action="index.php?action=addReal" method="POST">
     <input type="text" name="nom_R" >
    <input type="text" name="prenom_R" >
    <input type="date" name="date_N_R" >
    <input type="text" name="sexe" >
    <input type="submit" name="submit" value="Ajouter">
</form>
<?php

$titre = "Liste des realisateures";
$contenu = ob_get_clean();
require "view/template.php";