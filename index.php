<?php
use controller\CinemaController;
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
$ctrlCinema = new CinemaController();

$id = $_GET['id'];  //url

if(isset($_GET['action'])) {
    switch($_GET['action']) {
        case "listFilms":$ctrlCinema->listFilms(); break;
        case "listActeurs":$ctrlCinema->listActeurs(); break;
        case "listGenre":$ctrlCinema->listGenre(); break;
        case "listRealisateur":$ctrlCinema->listRealisateur(); break;
        case "castingFilms":$ctrlCinema->castingFilms($id); break;
        
    }
}