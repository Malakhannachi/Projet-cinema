<?php ob_start(); ?>
<table class="uk-table" border="1">
    <thead>
        <tr>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        <?php   
        foreach ($requeteRole->fetchAll() as $role) { ?>
            <tr>
                <td><?= $role['nom_per'] ?></td>
            </tr>
            <?php } ?>
    </tbody>
</table>
<form action="index.php?action=addRole" method="post">
    <label for="nom_per"></label>
    <input type="text" name="nom_per">
    <input type="submit" value="ajouter" name="submit">
</form>

<?php 

$titre = "Liste des acteures";
$contenu = ob_get_clean();
require "view/template.php";