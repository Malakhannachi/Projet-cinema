<?php ob_start(); ?>
<p class="uk-label uk-label-warning">Il y a <?=$requeteFilms->rowCount() ?> films</p>
<table class="uk-table uk-table-striped">
  <thead>
    <tr>
      <th>Titre</th>
      <th>Année SORTIE </th>
      <th>Resume</th>
      <th>Duree</th>
      <th>Note</th>
      <th>id_real</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($requeteFilms->fetchAll() as $films){ ?>
    <tr>
      <td><?= $films['titre'] ?></td>
      <td><?= $films['annee_sortie'] ?></td>
      <td><?= $films['resume'] ?></td>
      <td><?= $films['duree_film'] ?></td>
      <td><?= $films['note'] ?></td>
      <td><?= $films['id_real'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>


<form action="index.php?action=addFilms" method="post">
  <input type="text" name="titre">
  <input type="text" name="annee_sortie">
  <input type="text" name="resume">
  <input type="number" name="duree_film">
  <input type="number" name="note">
  <input type="number" name="id_real">
  <input type="submit" name="submit" value="Ajouter">
</form>

<?php
$titre = "Liste des fillms";
$titre_secondaire = "Liste des films";
$contenu = ob_get_clean();
require "view/template.php";


