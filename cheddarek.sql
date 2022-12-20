-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 25 sep. 2021 à 12:42
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cheddarek`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_image` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_image`, `admin_email`, `admin_password`) VALUES
(1, 'aladdine', 'moi.jpg', 'aladdin@test.com', 'ala22756973');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_tag`) VALUES
(1, 'Légumes de saison', 'icon-fruits'),
(2, 'Herbes aromatiques', 'icon-broccoli-1'),
(3, 'Légumes d\'ailleurs', 'icon-onions'),
(4, 'Fruits de saison', 'icon-avocado'),
(5, 'Fruits d\'ailleurs', 'icon-grape'),
(6, 'Agrumes', 'icon-fresh-juice'),
(7, 'Panier fruits et légumes', 'icon-fruits');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_mail` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `contact_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_mail`, `contact_number`, `contact_content`) VALUES
(1, 'aladdine saidi', 'saidi.aladdin4@gmail.com', '55908773', 'Nice work i love ur service and your product keep up the good work');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `order_Id` int(11) NOT NULL,
  `order_total` float NOT NULL,
  `order_address` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_lst_name` varchar(255) NOT NULL,
  `client_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`order_Id`, `order_total`, `order_address`, `client_name`, `client_lst_name`, `client_number`) VALUES
(1, 4.6, 'Mdina,bizerte', 'Bilel', 'saadi', '22756973'),
(2, 4.5, 'Mdina,bizerte', 'Bilel', 'saadi', '22756973'),
(3, 36.5, 'Mdina,bizerte', 'Bilel', 'saadi', '22756973');

-- --------------------------------------------------------

--
-- Structure de la table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `product_id`, `order_id`, `product_price`, `product_title`, `product_quantity`) VALUES
(1, 2, 1, 2.3, 'Pomme Goldens', '2'),
(2, 3, 2, 1.5, 'Carottes-سفنارية', '3'),
(3, 1, 3, 1.8, 'Tomates-طماطم', '5'),
(4, 2, 3, 2.3, 'Pomme Goldens', '3'),
(5, 3, 3, 1.5, 'Carottes-سفنارية', '3'),
(6, 4, 3, 2.3, 'Raisin-عنب', '7');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `base_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_quality` varchar(50) NOT NULL,
  `product_availability` varchar(50) NOT NULL,
  `product_unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_category_id`, `product_price`, `base_price`, `product_quantity`, `product_image`, `product_description`, `product_quality`, `product_availability`, `product_unit`) VALUES
(1, 'Tomates-طماطم', 1, 1.8, 2.3, 20, 'p-22.jpg', '                      La tomate grappe est présentée avec les tiges qui contiennent la sève et dégagent le parfum de tomate tant apprécié                  ', 'excellent', 'disponibles en magasin', 'kg'),
(2, 'Pomme Goldens', 7, 2.3, 2.8, 19, 'p-09.jpg', 'Pommenon  sucrée, juteuse et croquante, la pomme Golden rosée est une  pomme facile à consommer.                                                                                    ', 'moyenne', 'non disponible en magasin', 'Botte'),
(3, 'Carottes-سفنارية', 1, 1.5, 2.2, 20, 'p-12.jpg', 'Râpées, en purée, revenues à la poêle, vous trouverez toujours une utilité à vos carottes.\r\n\r\nConservez-les une semaine dans le bac à légumes.', 'moyenne', 'disponibles en magasin', 'botte'),
(4, 'Raisin-عنب', 5, 2.3, 2.7, 20, 'p-31.jpg', 'Le raisin Italia se caractérise par ses gros grain dorés, sucrés et croquants. C\'est un excellent raison de table.', 'faiblesse', 'non disponible en magasin', 'kg'),
(5, 'Chou-fleur-كرمب', 1, 1.4, 1.6, 20, 'p-26.jpg', 'Associé à tort à des souvenirs de cantine peu flatteurs, le chou-fleur est un délicieux légume d\'hiver.', 'excellent', 'disponibles en magasin', 'kg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_mail`, `username`, `user_lastname`, `user_password`, `user_address`, `user_contact`) VALUES
(1, 'bilel@test.com', 'Bilel', 'saadi', '12345', 'Mdina,bizerte', 22756973),
(5, 'khalil@test.com', 'Khalil', 'Maraai', '11223344556677', 'Ariena', 22867429),
(6, 'aziz@test.com', 'Aziz', 'Hamami', '112233445566', 'Ariena', 22867429),
(7, 'maher@test.com', 'Maher', 'maddeh', '1133444455', 'Madda bizerte', 22867429);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_Id`);

--
-- Index pour la table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
