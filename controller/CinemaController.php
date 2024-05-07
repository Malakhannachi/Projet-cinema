<?php
namespace Controller;
use Model\Connect;
class CinemaController
{
    public function listFilms()
    {
        $pdo = Connect:: seConnecter();
        $requete = $pdo->query("
        SELECT titre, annee_sortie
         FROM film ");
        require "view/listFilms.php";
    }
    public function listActeurs()
    {
        $pdo = Connect:: seConnecter();
        $requete = $pdo->query("
        SELECT *
         FROM Acteur ");
        require "view/listActeurs.php";
    }
    public function listGenre()
    {
        $pdo = Connect:: seConnecter();
        $requete = $pdo->query("
        SELECT *
         FROM categorie ");
        require "view/listGenre.php";
    }
    public function listRealisateur()
    {
        $pdo = Connect:: seConnecter();
        $requete = $pdo->query("
        SELECT *
         FROM realisateur ");
        require "view/listRealisateur.php";
    }
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

}