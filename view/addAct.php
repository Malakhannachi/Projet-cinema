<?php ob_start(); ?>

<table class="uk-table uk-table-striped" border="1">
    <thead>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>sexe</th>
            <th>date_Naissanc</th>
        </tr>
    </thead>
    <tbody>
    <?php
        
        foreach ($requeteAct->fetchAll() as $acteur){?>
        <tr>
            <td><?= $acteur['nom'] ?></td>
            <td><?= $acteur['prenom'] ?></td>
            <td><?= $acteur['sexe'] ?></td>
            <td><?= $acteur['date_Naissanc'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<form action="index.php?action=addAct" method="post">
    <input type="text" name="nom" placeholder="nom">
    <input type="text" name="prenom" placeholder="prenom">
    <input type="text" name="sexe" placeholder="sexe">
    <input type="date" name="date_Naissanc" placeholder="date_Naissanc">
    <input type="submit" name="submit" value="Ajouter">
</form>
<?php
$titre = "Liste des roles";
$contenu = ob_get_clean();
require "view/template.php";