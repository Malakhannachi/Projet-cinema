<?php ob_start(); ?>
<table class="uk-table uk-table-striped" border="1">
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
            <td><?= $realisateur['prenom_R'] ?></td>
            <td><?= $realisateur['date_N_R'] ?></td>
            <td><?= $realisateur['sexe'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<form action="index .php?action=addReal">
     <input type="text" name="nom_R" value="">
    <input type="text" name="prenom_R" value="">
    <input type="date" name="date_N_R" value="">
    <input type="text" name="sexe" value="">
    <input type="submit" name="submit" value="Ajouter">
</form>
<?php

$titre = "Liste des roles";
$contenu = ob_get_clean();
require "view/template.php";