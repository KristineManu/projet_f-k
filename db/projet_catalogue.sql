-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : ven. 14 juin 2024 à 13:39
-- Version du serveur : 8.0.37
-- Version de PHP : 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_catalogue`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `id_tendance` int NOT NULL,
  `type` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` varchar(1000) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_pic_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `product_pic_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `id_tendance`, `type`, `product_name`, `product_description`, `product_price`, `product_pic_1`, `product_pic_2`) VALUES
(16, 2, 'robe', 'Robe Lin Volants Dos Noué', 'Colorée et agréable à porter, cette robe pour femme en lin ornée de volants et au dos noué nous fait toutes craquer ! On adore son tissu léger mêlant lin et viscose, ses manches à volants, son encolure V, sa basque ainsi que son dos noué. Il ne vous reste plus qu\'à profiter des journées les plus ensoleillées de l\'année ! Existe en ocre et verdure. Longueur totale pour une taille 38 : 96 cm environ. Notre mannequin mesure 1m74 et porte une taille 38.', '20,99 €', '../img/product/jungle_paradise_1a.jpg', '../img/product/jungle_paradise_1b.jpg'),
(17, 2, 'pantalon', 'Tee-Shirt Fantaisie ', 'Original et coloré, ce tee-shirt fantaisie pour femme à l\'inscription ', '12,99 €', '../img/product/jungle_paradise_2a.jpg', '../img/product/jungle_paradise_2a.jpg'),
(18, 2, 'top', 'Top Imprimé Fleuri Col Tunisien', 'Ajoutez de la douceur à vos tenues estivales avec ce top pour femme à l\'imprimé fleuri et au col tunisien boutonné. Vous apprécierez son tissu léger et fluide en viscose qui vous offre un confort inégalé pour les plus belles journées d\'été. Tant avec un pantalon qu\'un bermuda uni, ce top vous garantit un look efficace pour profiter de l\'été. Existe en jaune et kaki. Longueur totale pour une taille 38 : 66 cm environ. Notre mannequin mesure 1m79 et porte une taille 38.', '11,99 €', '../img/product/jungle_paradise_3a.jpg', '../img/product/jungle_paradise_3b.jpg'),
(19, 2, 'top', 'Débardeur Fantaisie Jungle Strass', 'Donnez du peps à vos tenues de plein été avec ce débardeur fantaisie pour femme dotée d\'une sérigraphie au thème jungle orné de strass. On craque pour ses coulisses aux épaules, son tissu flammé doux et confortable ainsi que son décor de feuilles aux touches brillantes qui nous invite au voyage. Existe en jaune et beige. Longueur totale pour une taille 1 : 65 cm environ. Notre mannequin mesure 1,75m et porte une taille 1.', '19,99 €', '../img/product/jungle_paradise_4a.jpg', '../img/product/jungle_paradise_4b.jpg'),
(20, 2, 'top', 'Tee-Shirt Boutons Fantaisie', 'Un classique réhaussé d\'une touche de fantaisie : on adore ! Facile à assortir, ce tee-shirt uni pour femme nous séduit par ses emmanchures descendues ornées de boutons fantaisie. Un indispensable qui sera parfait avec un joli pantalon imprimé ! Existe en écru et noir. Longueur totale pour une taille 1 : 58 cm environ. Notre mannequin mesure 1m74 et porte une taille 1.', '10,99 €', '../img/product/jungle_paradise_5a.jpg', '../img/product/jungle_paradise_5b.jpg'),
(21, 2, 'pantalon', 'Pantalon Large Imprimé Wax', 'Donnez du pep\'s à vos tenues d\'été avec ce pantalon large à l\'imprimé wax. Doté d\'une ceinture élastiquée avec passants et conçu dans un tissu léger et extensible, il est aussi original que confortable ! Une pièce idéale à porter avec vos tops unis. Existe en bleu et vert. Longueur totale pour une taille 38 : 102 cm environ. Notre mannequin mesure 1m74 et porte une taille 38.', '17,99 €', '../img/product/jungle_paradise_6a.jpg', '../img/product/jungle_paradise_6b.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `tendance`
--

CREATE TABLE `tendance` (
  `id` int NOT NULL,
  `tendance_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tendance`
--

INSERT INTO `tendance` (`id`, `tendance_name`) VALUES
(1, 'echapee_sauvage'),
(2, 'jungle_paradise'),
(3, 'terres_devasion');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `admin`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '$2y$10$YxDsY2MWyqm6jj/juRWN8e2/LHt4hspH91wPk4CFdI7kOwio2D7rK', 1),
(2, 'bbbb', 'bbbb', 'bbb@bbb.fr', '$2y$10$pzNleG74iMMcnkFcmuSzHOa./6I3LiGQxa6Bg4tybTkzwsOQRhboq', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tendance` (`id_tendance`);

--
-- Index pour la table `tendance`
--
ALTER TABLE `tendance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `tendance`
--
ALTER TABLE `tendance`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_tendance`) REFERENCES `tendance` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
