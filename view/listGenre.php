<?php ob_start(); ?>
<p class="uk-label uk-label-warning">Il y a <?=$requete->rowCount() ?> genre</p>
<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>Titre</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($requete->fetchAll() as $film) { ?>
                <tr>
                    
                    <td><?= $film['libelle'] ?></td>
                    
                </tr>
                <?php } ?>
    </tbody>
</table>
<?php
$titre = "Liste des Genere";
$titre_secondaire = "Liste des Genre";
$contenu = ob_get_clean();
require "view/template.php";
