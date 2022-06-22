SELECT nom,prenom,DATE_FORMAT(date_naissance, "%M %d %Y") FROM `fiche_personne` WHERE DATE_FORMAT(date_naissance, "%Y")=1978
ORDER BY nom ASC;