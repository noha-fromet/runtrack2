SELECT etages.nom, salles.nom AS `Biggest Room`, salles.capacite FROM etages JOIN salles ON etages.id = salles.id_etage ORDER BY salles.capacite DESC LIMIT 1;