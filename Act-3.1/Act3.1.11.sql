SELECT `titre` AS `Titre`, `resum` as `Resum`, `annee_prod` FROM `film` 
JOIN `genre` on film.id_genre=genre.id_genre
WHERE genre.nom='erotic'
ORDER BY annee_prod DESC;