INSERT INTO ft_table(login,date_de_creation)
SELECT nom,date_naissance FROM fiche_personne
WHERE nom LIKE '%a%' AND length(nom) < 9
ORDER BY nom ASC
LIMIT 10;

UPDATE `ft_table` SET `groupe`='other' WHERE id>5;


