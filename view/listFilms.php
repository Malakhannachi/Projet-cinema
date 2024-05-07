<?php ob_start(); ?>
<p class="uk-label uk-label-warning">Il y a <?=$requete->rowCount() ?> films</p>
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
                    <td><a href=""></a>
                    <td><?= $film['annee_sortie'] ?></td>
                </tr>
                <?php } ?>
    </tbody>
</table>
<?php
$titre = "Listedes fillms";
$titre_secondaire = "Liste des films";
$contenu = ob_get_clean();
require "view/template.php";
