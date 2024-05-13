<?php ob_start(); ?>



<!-- tableau des catégories -->
<table class="uk-table uk-table-striped" border="1">
    <thead>
        <tr>
          
            <th>Titre</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($requeteCat->fetchAll() as $film) { ?>
                <tr>
                    
                    
                    <td><?= $film['libelle'] ?></td>
                    
                </tr>
                <?php } ?>
    </tbody>
</table>


<!-- Formulaire -->
<form action="index.php?action=addCategorie" method="post">
  <label for="name">libelle</label>
  <input type="text" id="Titre" name="libelle" />
  <input type="submit"value ="Ajouter" name="submit">     
</form>

<?php
$titre = "Liste des categories";
$titre_secondaire = "Liste des categories";
$contenu = ob_get_clean();
require "view/template.php";
