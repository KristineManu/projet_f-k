-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : lun. 17 juin 2024 à 14:27
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
(17, 2, 'top', 'Tee-Shirt Fantaisie ', 'Délicat et féminin, ce tee-shirt pour femme à l\'inscription \"Love Fashion\" s\'imposera vite comme une des pièces phares de votre vestiaire. Léger et confortable, ce tee-shirt puise son originalité dans son illustration fleurie sublimée par des notes brillantes. De quoi relever d\'une touche de fantaisie un joli pantalon uni... Existe en noir et blanc. Longueur totale pour une taille 1 : 63,5 cm environ. Notre mannequin mesure 1,79m et porte une taille 1.', '12,99 €', '../img/product/jungle_paradise_2a.jpg', '../img/product/jungle_paradise_2b.jpg'),
(18, 2, 'top', 'Top Imprimé Fleuri Col Tunisien', 'Ajoutez de la douceur à vos tenues estivales avec ce top pour femme à l\'imprimé fleuri et au col tunisien boutonné. Vous apprécierez son tissu léger et fluide en viscose qui vous offre un confort inégalé pour les plus belles journées d\'été. Tant avec un pantalon qu\'un bermuda uni, ce top vous garantit un look efficace pour profiter de l\'été. Existe en jaune et kaki. Longueur totale pour une taille 38 : 66 cm environ. Notre mannequin mesure 1m79 et porte une taille 38.', '11,99 €', '../img/product/jungle_paradise_3a.jpg', '../img/product/jungle_paradise_3b.jpg'),
(19, 2, 'top', 'Débardeur Fantaisie Jungle Strass', 'Donnez du peps à vos tenues de plein été avec ce débardeur fantaisie pour femme dotée d\'une sérigraphie au thème jungle orné de strass. On craque pour ses coulisses aux épaules, son tissu flammé doux et confortable ainsi que son décor de feuilles aux touches brillantes qui nous invite au voyage. Existe en jaune et beige. Longueur totale pour une taille 1 : 65 cm environ. Notre mannequin mesure 1,75m et porte une taille 1.', '19,99 €', '../img/product/jungle_paradise_4a.jpg', '../img/product/jungle_paradise_4b.jpg'),
(20, 2, 'top', 'Tee-Shirt Boutons Fantaisie', 'Un classique réhaussé d\'une touche de fantaisie : on adore ! Facile à assortir, ce tee-shirt uni pour femme nous séduit par ses emmanchures descendues ornées de boutons fantaisie. Un indispensable qui sera parfait avec un joli pantalon imprimé ! Existe en écru et noir. Longueur totale pour une taille 1 : 58 cm environ. Notre mannequin mesure 1m74 et porte une taille 1.', '10,99 €', '../img/product/jungle_paradise_5a.jpg', '../img/product/jungle_paradise_5b.jpg'),
(21, 2, 'pantalon', 'Pantalon Large Imprimé Wax', 'Donnez du pep\'s à vos tenues d\'été avec ce pantalon large à l\'imprimé wax. Doté d\'une ceinture élastiquée avec passants et conçu dans un tissu léger et extensible, il est aussi original que confortable ! Une pièce idéale à porter avec vos tops unis. Existe en bleu et vert. Longueur totale pour une taille 38 : 102 cm environ. Notre mannequin mesure 1m74 et porte une taille 38.', '17,99 €', '../img/product/jungle_paradise_6a.jpg', '../img/product/jungle_paradise_6b.jpg'),
(22, 3, 'top', 'Tee-Shirt Fantaisie \"Love Fashion\"', 'Délicat et féminin, ce tee-shirt pour femme à l\'inscription \"Love Fashion\" s\'imposera vite comme une des pièces phares de votre vestiaire. Léger et confortable, ce tee-shirt puise son originalité dans son illustration fleurie sublimée par des notes brillantes. De quoi relever d\'une touche de fantaisie un joli pantalon uni... Existe en noir et blanc. Longueur totale pour une taille 1 : 63,5 cm environ. Notre mannequin mesure 1,79m et porte une taille 1.', '10,99 €', '../img/product/terres_devasion_1a.jpg', '../img/product/terres_devasion_1b.jpg'),
(23, 3, 'pantalon', 'Pantalon Lin Coton Clous Poche', 'Sobre et intemporel, ce pantalon pour femme en mélange de lin et coton est idéal pour les beaux jours. Sa large ceinture élastiquée, ses cinq poches pratiques et sa matière légère vous garantissent un confort inégalé tout au long de la journée. De jolis clous dorés ornent le contour des poches avant pour apporter une touche de brillance à cette jolie pièce. Combinez ce pantalon uni avec un joli top imprimé et vous serez sûre de ne commettre aucune faute de goût cet été. Existe en dune et lin. Longueur totale pour une taille 38 : 85 cm environ. Notre mannequin mesure 1m74 et porte une taille 38.', '24,99 €', '../img/product/terres_devasion_2a.jpg', '../img/product/terres_devasion_2b.jpg'),
(24, 3, 'top', 'Chemise Imprimé Rayé', 'Légère et confortable, cette chemise pour femme à l\'imprimé rayé vous accompagnera avec style tout l\'été. On aime sa matière mélangeant lin et viscose, ses emmanchures descendues et ses revers aux manches avec sangles fantaisie. Une pièce estivale qui fera des merveilles avec un pantalon uni ! Existe en kaki et marron. Longueur totale pour une taille 38 : 62 cm environ. Notre mannequin mesure 1m74 et porte une taille 38.', '24,99 €', '../img/product/terres_devasion_3a.jpg', '../img/product/terres_devasion_3b.jpg'),
(25, 3, 'pantalon', 'Pantalon Toile Style Cargo', 'Léger et agréable à porter, ce pantalon pour femme en toile style cargo est une pièce 100% confort. On adore le côté pratique de sa ceinture à boutons pression avec passants, sa fermeture zippée et ses quatre vraies poches à l\'avant, dont une style \"cargo\". Le plus : des sangles en bas de jambes vous permettent d\'ajuster facilement la longueur de ce pantalon au gré de vos envies. Existe en kaki et marron. Longueur totale pour une taille 38 : 102 cm environ. Notre mannequin mesure 1m74 et porte une taille 38.', '17,99 €', '../img/product/terres_devasion_4a.jpg', '../img/product/terres_devasion_4b.jpg'),
(26, 3, 'top', 'Blouse Col Tunisien Imprimé Ethnique', 'Alliez élégance et originalité avec cette blouse pour femme au col tunisien et à l\'imprimé ethnique. Vous apprécierez ses manches au bas noué, son empiècement avec fronces à l\'encolure ainsi que son tissu fluide et agréable. Associez-la à un pantalon uni assorti pour un look des plus réussis. Existe en dune et yucca. Longueur totale pour une taille 38 : 64 cm environ. Notre mannequin mesure 1,79m et porte une taille 38.', '21,99 €', '../img/product/terres_devasion_5a.jpg', '../img/product/terres_devasion_5b.jpg'),
(27, 3, 'pantalon', 'Jegging Uni Bengaline', 'Optez pour une valeur sûre de la garde-robe avec ce jegging uni pour femme en bengaline sobre et indémodable. Grâce à sa matière stretch, sa ceinture élastiquée et ses fausses poches fantaisie, cet essentiel vous garantit le confort d\'un legging allié au look d\'un vrai pantalon. Un intemporel facile à assortir si agréable à porter que celles qui l\'ont adopté ont du mal à le quitter ! Existe en dune et yucca. Longueur totale pour une taille 38 : 101 cm environ. Notre mannequin mesure 1,79m et porte une taille 38.', '17,99 €', '../img/product/terres_devasion_6a.jpg', '../img/product/terres_devasion_6b.jpg'),
(28, 1, 'top', 'Chemise Imprimé Rayé', 'Légère et confortable, cette chemise pour femme à l\'imprimé rayé vous accompagnera avec style tout l\'été. On aime sa matière mélangeant lin et viscose, ses emmanchures descendues et ses revers aux manches avec sangles fantaisie. Une pièce estivale qui fera des merveilles avec un pantalon uni ! Existe en kaki et marron. Longueur totale pour une taille 38 : 62 cm environ. Notre mannequin mesure 1m74 et porte une taille 38.', '24,99 €', '../img/product/echapee_sauvage_1a.jpg', '../img/product/echapee_sauvage_1b.jpg'),
(29, 1, 'pantalon', 'Pantalon Toile Style Cargo', 'Léger et agréable à porter, ce pantalon pour femme en toile style cargo est une pièce 100% confort. On adore le côté pratique de sa ceinture à boutons pression avec passants, sa fermeture zippée et ses quatre vraies poches à l\'avant, dont une style \"cargo\". Le plus : des sangles en bas de jambes vous permettent d\'ajuster facilement la longueur de ce pantalon au gré de vos envies. Existe en kaki et marron. Longueur totale pour une taille 38 : 102 cm environ. Notre mannequin mesure 1m74 et porte une taille 38.', '17,99 €', '../img/product/echapee_sauvage_2a.jpg', '../img/product/echapee_sauvage_2b.jpg'),
(30, 1, 'robe', 'Robe Imprimé Zèbre Détail Coulisse', 'Optez pour une pièce au style original avec cette robe pour femme à l\'imprimé zèbre et au détail de coulisse sur les manches. Le plus : son encolure en V ornée d\'un galon avec des franges et du fil lurex pour encore plus de fantaisie ! Existe en kaki et noir. Longueur totale pour une taille 38 : 93 cm environ. Notre mannequin mesure 1m74 et porte une taille 38.', '24,99 €', '../img/product/echapee_sauvage_3a.jpg', '../img/product/echapee_sauvage_3b.jpg'),
(31, 1, 'top', 'Chemise Tie-Dye Broderie Perles', 'Laissez-vous séduire par cette chemise pour femme au style tie-dye avec broderies et perles. Fluide et agréable, elle est également pratique grâce à ses manches longues retroussables au gré de vos envies. Une encolure style col tunisien avec boutons complète le look de cette chemise originale qui fera des merveilles avec un pantalon uni assorti. Existe en bleu et vert. Longueur totale pour une taille 38 : 70 cm environ. Notre mannequin mesure 1,79m et porte une taille 38.', '19,99 €', '../img/product/echapee_sauvage_4a.jpg', '../img/product/echapee_sauvage_4b.jpg'),
(32, 1, 'pantalon', 'Pantalon Bengaline Clous Fantaisie', 'Sobre avec une petite touche d\'originalité, ce pantalon bengaline pour femme avec clous fantaisie a tout pour lui ! Très confortable grâce à sa matière extensible, on aime ses passants à la ceinture, sa fermeture zippée avec bouton et ses deux vraies poches à l\'avant qui lui donnent le look d\'un vrai jean. Le plus : ses clous fantaisie qui ornent les poches avant pour une touche de brillance ! Existe en solitaire et jungle. Longueur totale pour une taille 38 : 103 cm environ. Notre mannequin mesure 1,79m et porte une taille 38.', '17,99 €', '../img/product/echapee_sauvage_5a.jpg', '../img/product/echapee_sauvage_5b.jpg'),
(33, 1, 'robe', 'Robe Droite Imprimé Ethnique', 'Élégante et originale, cette robe droite pour femme à l\'imprimé ethnique est idéale pour rester stylée tout l\'été. On aime sa matière fluide et légère, son intérieur doublé, sa coupe droite intemporelle ainsi que son motif bicolore qui donne du pep\'s à notre look ! Existe en kaki et vert. Longueur totale pour une taille 38 : 93 cm environ. Notre mannequin mesure 1m74 et porte une taille 38.', '20,99 €', '../img/product/echapee_sauvage_6a.jpg', '../img/product/echapee_sauvage_6b.jpg');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
