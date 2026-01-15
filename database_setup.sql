-- Commande SQL pour créer la table "participations" du concours photo.
-- Exécutez cette commande dans votre outil de gestion de base de données (par exemple, phpMyAdmin).
-- Assurez-vous d'avoir déjà créé une base de données nommée "on_lyne".

CREATE TABLE `participations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo_filename` varchar(255) NOT NULL,
  `date_submission` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

