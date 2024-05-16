<?php
use controller\CinemaController;
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
$ctrlCinema = new CinemaController();

$id = isset($_GET['id']) ? $_GET["id"] : null;  //url

if(isset($_GET['action'])) {
    switch($_GET['action']) {
        case "listFilms":$ctrlCinema->listFilms(); break;
        case "listActeurs":$ctrlCinema->listActeurs(); break;
        case "listGenre":$ctrlCinema->listGenre(); break;
        case "listRealisateur":$ctrlCinema->listRealisateur(); break;
        case "castingFilms":$ctrlCinema->castingFilms($id); break;
        case "addCategorie":$ctrlCinema->addCategorie(); break;
        case "addRole": $ctrlCinema->addRole(); break;
        case "addAct" : $ctrlCinema->addAct(); break;
        case "addReal" : $ctrlCinema->addReal(); break;
        case "addFilms":$ctrlCinema->addFilms(); break;
        case "delFilms":$ctrlCinema->delFilms($id); break;
        case "accueil" : $ctrlCinema->accueil(); break;
        case "search" : $ctrlCinema->search(); break;
        }
}