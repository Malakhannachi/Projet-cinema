<?php ob_start(); ?>
<p class="uk-label uk-label-warning">Il y a <?=$requete->rowCount() ?> films</p>
<table class="uk-table uk-table-striped" border="1">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Année SORTIE </th>
            <th>resume</th>
            <th>duree_film</th>
            <th>note</th>
            <th>id_real</th>
            <th>supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($requete->fetchAll() as $film) { ?>
                <tr>
                    <td><?= $film['titre'] ?></td>
                    <td><?= $film['annee_sortie'] ?></td>
                    <td><?= $film['resume'] ?></td>
                    <td><?= $film['duree_film'] ?></td>
                    <td><?= $film['note'] ?></td>
                    <td><?= $film['id_real'] ?></td>
                    <td><a href="index.php?action=delFilms&id=<?= $film['id_film'] ?>">supprimer</a></td>
                </tr>
                <?php } ?>
    </tbody>
</table>
<?php
$titre = "Listedes fillms";
$titre_secondaire = "Liste des films";
$contenu = ob_get_clean();
require "view/template.php";
