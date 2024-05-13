<?php ob_start(); ?>
<p class="uk-label uk-label-warning">Il y a <?=$requete->rowCount() ?> films</p>


<form action="/cinemaController" method="post">
  <ul>
    <li>
      <label for="name">Titre;:</label>
      <input type="text" id="Titre" name="user_name" />
    </li>
</form>

<?php
$titre = "Liste des fillms";
$titre_secondaire = "Liste des films";
$contenu = ob_get_clean();
require "view/template.php";
