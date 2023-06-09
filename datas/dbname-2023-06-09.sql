-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : ven. 09 juin 2023 à 15:44
-- Version du serveur : 10.6.5-MariaDB
-- Version de PHP : 8.1.0

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `dbname`
--
DROP DATABASE IF EXISTS `dbname`;
CREATE DATABASE IF NOT EXISTS `dbname` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbname`;

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
                                      `idTest` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
                                      `titreTest` varchar(140) NOT NULL,
                                      `slugifyTest` varchar(142) NOT NULL,
                                      `datetimeTest` datetime NOT NULL DEFAULT current_timestamp(),
                                      `textTest` text NOT NULL,
                                      `publiTest` tinyint(1) NOT NULL DEFAULT 0,
                                      `idUser` int(10) UNSIGNED DEFAULT NULL,
                                      PRIMARY KEY (`idTest`),
                                      UNIQUE KEY `slugifyTest` (`slugifyTest`),
                                      KEY `idUser` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`idTest`, `titreTest`, `slugifyTest`, `datetimeTest`, `textTest`, `publiTest`, `idUser`) VALUES
                                                                                                                 (1, 'Taïwan détecte 37 avions de combat chinois autour de l’île', 'taiwan-detecte-37-avions-de-combat-chinois-autour-de-lile', '2023-06-08 11:07:43', 'Plus de 30 avions de guerre chinois ont pénétré dans la zone de défense aérienne de Taïwan en l’espace de six heures, a déclaré jeudi le ministère de la Défense de l’île. Depuis jeudi 5 heures locales, « un total de 37 avions de combat chinois » ont pénétré l’ADIZ de Taïwan, a annoncé le porte-parole du ministère taïwanais de la Défense nationale, Sun Li-fang.\r\n\r\n« Certains ont continué vers le Pacifique occidental pour des entraînements de reconnaissance à longue portée », a-t-il précisé. Une Adiz est une large zone définie unilatéralement par les pays et dans laquelle ils demandent que les aéronefs étrangers s’identifient pour des raisons de sécurité nationale.\r\n\r\nMais les relations entre Pékin et Taipei, au plus bas depuis l’arrivée au pouvoir de Xi Jinping il y a plus de 10 ans, se sont encore dégradées ces dernières années et la Chine a multiplié les incursions militaires autour de l’île.\r\n\r\nDepuis la fin de la guerre civile chinoise en 1949, la Chine considère Taïwan comme une province qu’elle n’a pas encore réussi à réunifier avec le reste de son territoire, et Pékin vise cette réunification par la force si nécessaire.\r\n\r\nS’il ne s’agit pas du plus grand nombre d’incursions chinoises dans l’ADIZ taïwanaise cette année – 45 avions chinois l’avaient pénétrée le 9 avril – la vague de jeudi s’est produite dans un laps de temps très court.\r\n\r\nL’armée taïwanaise « surveille la situation de près » a déclaré le ministère sur Twitter, ajoutant que des avions de patrouille, des navires de guerre et des systèmes de missiles terrestres avaient été déployés en réponse.\r\n\r\nCes incursions de jeudi interviennent un jour après la fin des premiers exercices conjoints des garde-côtes des Etats-Unis, du Japon, et des Philippines en mer de Chine méridionale.', 1, NULL),
                                                                                                                 (2, 'Parfum de conflits d’intérêts autour du remboursement des médicaments', 'parfum-de-conflits-dinterets-autour-du-remboursement-des-medicaments', '2023-06-08 12:44:57', 'our aider le ministre des Affaires sociales à décider si un médicament peut être remboursé (donc soutenu par de l’argent public), la Belgique dispose d’une Commission de remboursement des médicaments (CRM), logée au sein des services de l’Inami. C’est cet organe consultatif, composé de professionnels du secteur de la santé, que les firmes doivent convaincre pour espérer obtenir le label « remboursable » sur leur nouveau cachet. Un enjeu économique majeur, pour l’industrie pharmaceutique comme pour les caisses de l’Etat. D’où la nécessité de disposer d’une Commission de remboursement des médicaments la plus indépendante possible, avec des règles claires pour éviter tout conflit d’intérêts.\r\n\r\nLe Soir s’était déjà interrogé sur ce sujet lors de l’enquête Open Pharma, publiée l’an dernier avec Médor, Knack et De Tijd. Mais dans une récente étude, Testachats pousse l’analyse un cran plus loin. L’organisation de protection des consommateurs a obtenu toutes les déclarations d’intérêts des experts siégeant à la CRM ainsi que tous les procès-verbaux des réunions, pour l’année 2020. Martine Van Hecke, experte Santé chez Testachats, les a épluchés et nous a transmis ses résultats, en s’étranglant devant certaines anomalies.', 0, NULL),
                                                                                                                 (3, 'coucou les amis', 'coucou-les-amis', '2023-06-10 08:56:00', 'try(§u rtyu  rtuh', 0, NULL),
                                                                                                                 (5, 'lulu 24', 'lulu-24', '2023-06-09 14:00:00', 'rft(yte(y', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `theuser`
--

DROP TABLE IF EXISTS `theuser`;
CREATE TABLE IF NOT EXISTS `theuser` (
                                         `idUser` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
                                         `loginUser` varchar(60) NOT NULL,
                                         `pwdUser` varchar(255) NOT NULL,
                                         `mailUser` varchar(100) NOT NULL,
                                         PRIMARY KEY (`idUser`),
                                         UNIQUE KEY `loginUser` (`loginUser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `theuser`
--

INSERT INTO `theuser` (`idUser`, `loginUser`, `pwdUser`, `mailUser`) VALUES
                                                                         (1, 'lulu', '$2y$10$q7JIDRnAk40HnzNzxGLkhej5IMQyIKPiB40bSFaTe16IIlhNbhnKO', 'lulu@mail.com'),
                                                                         (2, 'lala', '$2y$10$FF8Gv3lNe5gKp.lrbbj89O9YHJUeLsm4TIt5im3Mquya0dv59LwBS', 'lala@gmail.com');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `test`
--
ALTER TABLE `test`
    ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `theuser` (`idUser`) ON DELETE SET NULL;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
