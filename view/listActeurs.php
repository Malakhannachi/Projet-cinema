<?php ob_start(); ?>
<p class="uk-label uk-label-warning">Il y a <?=$requete->rowCount() ?> Acteurs</p>
<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Année SORTIE </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($requete->fetchAll() as $film) { ?>
                <tr>
                    <td><?= $film['nom'] ?></td>
                    <td><?= $film['prenom'] ?></td>
                    <td><?= $film['date_Naissanc'] ?></td>
                    <td><?= $film['sexe'] ?></td>
                </tr>
                <?php } ?>
    </tbody>
</table>
<?php
$titre = "Listedes fillms";
$titre_secondaire = "Liste des films";
$contenu = ob_get_clean();
require "view/template.php";
