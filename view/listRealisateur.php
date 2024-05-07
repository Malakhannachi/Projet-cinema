<?php ob_start(); ?>
<p class="uk-label uk-label-warning">Il y a <?=$requete->rowCount() ?> genre</p>
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
            foreach ($requete->fetchAll() as $film) { ?>
                <tr>
                    
                    <td><?= $film['nom_R'] ?></td>
                    <td><?= $film['prenom_R'] ?></td>
                    <td><?= $film['date_N_R'] ?></td>
                    <td><?= $film['sexe'] ?></td>
                    
                </tr>
                <?php } ?>
    </tbody>
</table>
<?php
$titre = "Liste des Realisateurs";
$titre_secondaire = "Liste des Realisateurs";
$contenu = ob_get_clean();
require "view/template.php";
