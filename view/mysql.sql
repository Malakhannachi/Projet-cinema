----------->1
SELECT *, 
CONCAT(FLOOR(duree_film / 60), 'h', ':', (duree_film % 60), 'mm') AS heure_minute
FROM film
INNER JOIN realisateur ON realisateur.id_real = film.id_real
--------------1

----------->2
SELECT titre, 
CONCAT(FLOOR(duree_film / 60), 'h', ':', (duree_film % 60), 'mm') AS heure_minute 
FROM film
WHERE duree_film > 135
ORDER BY duree_film DESC;
--------------2

----------->3
SELECT film.titre, film.annee_sortie, realisateur.nom_R
FROM film
INNER JOIN realisateur ON film.id_real = realisateur.id_real
ORDER BY realisateur.id_real;
--------------3
------------>4
SELECT categorie.libelle, COUNT(film.id_film) AS nombre_films
FROM posseder
INNER JOIN film ON film.id_film = posseder.id_film
INNER JOIN categorie ON categorie.id_cat = posseder.id_cat
GROUP BY categorie.libelle
ORDER BY nombre_films DESC;
--------------4

------------>5
SELECT realisateur.nom_R, COUNT(film.id_film) AS nombre_films
FROM film
INNER JOIN realisateur ON realisateur.id_real = film.id_real
GROUP BY realisateur.nom_R
ORDER BY nombre_films DESC;
--------------5

------------>6
SELECT film.id_film, acteur.nom, acteur.prenom, acteur.sexe
FROM casting
INNER JOIN film ON film.id_film = casting.id_film
INNER JOIN acteur ON acteur.id_acteur = casting.id_acteur
-------------6

------------>7
SELECT film.id_film, acteur.nom, acteur.prenom, acteur.sexe
FROM casting
INNER JOIN film ON film.id_film = casting.id_film
INNER JOIN acteur ON acteur.id_acteur = casting.id_acteur
--------------7

------------>8
SELECT acteur.id_acteur, film.titre, film.annee_sortie, role.nom_per
FROM casting
INNER JOIN film ON film.id_film = casting.id_film
INNER JOIN acteur ON acteur.id_acteur = casting.id_acteur
INNER JOIN role ON role.id_role = casting.id_role
ORDER BY film.annee_sortie DESC
--------------8
------------9
SELECT film.titre
FROM film
WHERE film.annee_sortie >= 5
-------------9
-------------->10
SELECT 
    SUM(CASE WHEN acteur.sexe = 'homme' THEN 1 ELSE 0 END) AS hommes,
    SUM(CASE WHEN acteur.sexe = 'femme' THEN 1 ELSE 0 END) AS femmes
FROM acteur
-------------->10
----------->11
SELECT acteur.nom
FROM acteur 
WHERE YEAR(CURRENT_DATE()) - YEAR(acteur.date_Naissanc) > 50;
--------------11
-------------->12
SELECT acteur.nom, COUNT(film.id_film) AS nombre_films
FROM casting
INNER JOIN film ON film.id_film = casting.id_film
INNER JOIN acteur ON acteur.id_acteur = casting.id_acteur
GROUP BY acteur.nom
HAVING COUNT(film.id_film) >= 3 
--------------12
