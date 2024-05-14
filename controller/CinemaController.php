<?php
namespace Controller;
use Model\Connect;
class CinemaController
{
    //afficher liste films
    public function listFilms()
    {
        $pdo = Connect:: seConnecter();
        $requete = $pdo->query("
        SELECT *
         FROM film ");
        require "view/listFilms.php";
    }
    //afficher liste Acteurs
    public function listActeurs()
    {
        $pdo = Connect:: seConnecter();
        $requete = $pdo->query("
        SELECT *
         FROM Acteur ");
        require "view/listActeurs.php";
    }
    // afficher liste genre
    public function listGenre()
    {
        $pdo = Connect:: seConnecter();
        $requete = $pdo->query("
        SELECT *
         FROM categorie ");
        require "view/listGenre.php";
    }
    // afficher liste réalisateurs 
    public function listRealisateur()
    {
        $pdo = Connect:: seConnecter();
        $requete = $pdo->query("
        SELECT *
         FROM realisateur ");
        require "view/listRealisateur.php";
    }
    // afficher avec id deux tableux casting Films
    public function castingFilms($id)
    {
        $pdo = Connect:: seConnecter();
        $requeteFilm = $pdo->prepare("
        SELECT film.titre,film.id_film, acteur.nom, acteur.prenom, acteur.sexe
        FROM casting
        INNER JOIN film ON film.id_film = casting.id_film
        INNER JOIN acteur ON acteur.id_acteur = casting.id_acteur
        WHERE film.id_film= :id");
        $requeteFilm->execute(["id" => $id]);
        require "view/castingFilms.php";
    }
    //add Films
   /* public function addFilms()
    {
        $pdo = Connect:: seConnecter();
        $requete = $pdo->prepare("
        INSERT INTO film( titre,annee_sortie,duree_film,note,id_real)
        VALUES ('true lies', '1994', 144, 3.4, 1)");
        $requete-> execute ();
        require "view/addFilms.php";
    }*/
    //add categorie
    public function addCategorie()
    {
        $pdo = Connect:: seConnecter();
        $requeteCat = $pdo->query("
        SELECT *
         FROM categorie ");

        if(isset($_POST["submit"])) {                     //pour vérifier que ona clicketr sur le button submit 

            $libelle = filter_input( INPUT_POST, "libelle"); // pour filtrer le input
            if($libelle) {
                $requeteCat = $pdo->prepare("
                INSERT INTO categorie( libelle)
                VALUES (:libelle)");
                $requeteCat-> execute ([
                    "libelle" => $libelle
                ]);

                header("Location: index.php?action=addCategorie");
            }

        }


        require "view/addCategorie.php";
    }

// ajouter un role
    public function addRole() {
        $pdo = connect :: seConnecter();
        $requeteRole = $pdo->query("
        SELECT *
         FROM role ");

        if (isset ($_POST["submit"])) {

            $nom_per = filter_input(INPUT_POST, "nom_per");
            if ($nom_per) {
                $requeteRole = $pdo->prepare("
        INSERT INTO role( nom_per)
        VALUES (:nom_per)");
        $requeteRole-> execute ([
            "nom_per" => $nom_per]);
        header("Location: index.php?action=addRole");
        }
    }
    require "view/addRole.php";
    }
    public function addAct() {
        $pdo=
         connect :: seConnecter();
        $requeteAct = $pdo->query ("
        SELECT * 
        FROM acteur ");

        if (isset ($_POST["submit"])) {
            $nom =filter_input(INPUT_POST, "nom");
            $prenom =filter_input(INPUT_POST, "prenom");
            $sexe = filter_input (INPUT_POST, "sexe");
            $date_Naissanc = filter_input(INPUT_POST, "date_Naissanc");
            if ($nom && $prenom && $sexe && $date_Naissanc) {
                $requeteAct= $pdo->prepare ("
                INSERT INTO acteur( nom,prenom,sexe,date_Naissanc)
                VALUES (:nom,:prenom,:sexe,:date_Naissanc)");
                $requeteAct-> execute ([
                    "nom" => $nom,
                    "prenom" => $prenom,
                    "sexe" => $sexe,
                    "date_Naissanc" => $date_Naissanc]);
        header("Location: index.php?action=addAct");
        }
            }
            require "view/addAct.php";
    }
    public function addReal() {
        $pdo = connect :: seConnecter();
        $requetReal= $pdo-> query ("
         SELECT *
         FROM realisateur "); 

    if (isset ($_POST["submit"])) {
        $nom_R = filter_input(INPUT_POST, "nom_R");
        $prenom_R = filter_input(INPUT_POST, "prenom_R");
        $date_N_R = filter_input(INPUT_POST, "date_N_R");
        $sexe = filter_input(INPUT_POST, "sexe");
        
        if ($nom_R && $prenom_R && $date_N_R && $sexe) {
            $requetReal = $pdo->prepare ("
            INSERT INTO realisateur( nom_R, prenom_R, date_N_R, sexe)
            VALUES (:nom_R, :prenom_R, :date_N_R, :sexe)");
            $requetReal-> execute ([
                "nom_R" => $nom_R,
                "prenom_R" => $prenom_R,
                "date_N_R" => $date_N_R,
                "sexe" => $sexe,
            ]);
        header("Location: index.php?action=addReal");
    }
    }
        require "view/addReal.php";
    }
    public function addFilms() {
        $pdo = connect :: seConnecter();
        $requeteFilms = $pdo->query ("
        SELECT * 
        FROM film");
        if (isset ($_POST["submit"])) {
        
            $titre=filter_input(INPUT_POST, "titre");
            $annee_sortie=filter_input(INPUT_POST, "annee_sortie");
            $resume=filter_input(INPUT_POST, "resume");
            $duree_film=filter_input(INPUT_POST, "duree_film");
            $note=filter_input(INPUT_POST, "note");
            $id_real=filter_input(INPUT_POST, "id_real");

            if ($titre && $annee_sortie && $resume && $duree_film && $note && $id_real) {
                $requeteFilms= $pdo->prepare("
                INSERT INTO film( titre, annee_sortie, resume, duree_film, note , id_real)
                VALUES(:titre , :annee_sortie, :resume, :duree_film, :note, :id_real)");
                $requeteFilms->execute([
                    "titre" => $titre,
                    "annee_sortie" => $annee_sortie,
                    "resume" => $resume,
                    "duree_film" => $duree_film,
                    "note" => $note,
                    "id_real" => $id_real   
                ]);
                
                header("Location: index.php?action=addFilms");
            }

        }
        
        require "view/addFilms.php";
    }
    public function delFilms($id){
        $pdo = connect:: seConnecter ();
        $requeteDel = $pdo-> prepare("
        DELETE FROM film
        WHERE id_film = :id");
        $requeteDel-> execute(["id"=>$id]);
        ?>
        
        <?php
        header("Location: index.php?action=listFilms");

    }
    public function accueil() {
        
        $pdo = connect :: seConnecter();
 

        require "view/accueil.php";
    }
    
}

      


