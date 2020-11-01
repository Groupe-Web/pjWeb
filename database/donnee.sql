-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 30 Octobre 2020 à 23:50
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `base`
--


--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `motdepasse`, `droit`, `motdepasseHAshed`) VALUES
(1, 'MOUAFFO TAKOUMBO', 'zidane', 'zidane@3il.fr', '123456', 'admin', '$2y$10$u8KZC8Gs4205lwlfysJhJOVj34riSJZv8LF.spwOznvAyWvtLur0K'),
(2, 'zer', 'zer', 'zer@3il.fr', '123123', 'etudiant', '$2y$10$jWDnSUfvNQ6LuSzU6YhAJ.rAxP08V1MqdPGTp0KejwkTxqv8Pwx4i'),
(3, 'TORA', 'sandy', 'sandy@3il.fr', '147147', 'etudiant', '$2y$10$IwifdMpV9ivQKQyiMs4Vb.5xRQ64lr9GDjw3ftScF/TLDszdmGetO'),
(4, 'DJOUKA', 'dora', 'dora@3il.fr', '789456', 'etudiant', '$2y$10$ZJtvOsILdIMTMcf2.EE6QOLGCWN.4K7JkMr.3kF33zJ2Mg33sT31y'),
(5, 'POMO', 'gil', 'gil@3il.fr', '456123', 'admin', '$2y$10$oSNVVgOftFURyNqg4hUJAO9mUBMGUQ8.cy2f.buNePAdKG1POZXCy\n');


--
-- Contenu de la table `creneau`
--

INSERT INTO `creneau` (`id`, `heure_deb`, `heure_fin`) VALUES
(1, '08:30:00', '09:00:00'),
(2, '09:00:00', '09:30:00'),
(3, '09:30:00', '10:00:00'),
(4, '10:30:00', '11:00:00'),
(5, '11:00:00', '11:30:00');

--
-- Contenu de la table `reserver`
--

INSERT INTO `reserver` (`id`, `date_reservation`, `id_creneau`, `nbplace_libre`, `id_salle`, `id_utilisateur`) VALUES
(1, '2020-10-31', 1, 19, 108, 2),
(2, '2020-10-31', 2, 19, 110, 3),
(3, '2020-11-12', 3, 19, 309, 3),
(4, '2020-11-11', 4, 19, 309, 3),
(5, '2020-12-10', 3, 19, 305, 3);

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`numero`, `nbplace`) VALUES
(108, 20),
(110, 20),
(112, 20),
(305, 20),
(309, 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


--
-- Contenu de la table `reserver`
--

INSERT INTO `reserver` (`id`, `date_reservation`, `id_creneau`, `id_salle`, `id_utilisateur`) VALUES
(1, '2020-10-31', 1, 108, 2),
(2, '2020-10-31', 2, 110, 3),
(3, '2020-11-12', 3, 309, 3),
(4, '2020-11-11', 4, 309, 3),
(5, '2020-12-10', 3, 305, 3);
