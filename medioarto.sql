-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 12:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medioarto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminusername` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminusername`, `password`) VALUES
(1, 'Join_smith', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `artistUsername` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `description` longtext NOT NULL,
  `previousWork` varchar(200) NOT NULL,
  `profileImage` varchar(200) NOT NULL DEFAULT 'Images/Neutral-placeholder-profile.jpg',
  `state` int(11) NOT NULL DEFAULT 0,
  `Email` varchar(30) NOT NULL,
  `telephone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `artistUsername`, `password`, `Fname`, `Lname`, `description`, `previousWork`, `profileImage`, `state`, `Email`, `telephone`) VALUES
(1, 'Selina_Cho', '12345678', 'Selina', 'Cho', 'living place: Neuilly-sur-Seine, France\r\nNationality: Russian, later French\r\nEducation: Academy of Fine Arts, Munich\r\n', 'n1.jpg', 'Selina Choi(1).jpg', 1, 'Selina_Cho@gmail.com', 567435689),
(2, 'Rachel_Brown', '12345678', 'Rachel', 'Brown', 'Born: June 3, 1999\r\nNationality: American\r\nEducation: College of William and Mary, Columbia University School of General Studies, Art Students League of New York\r\n', 'n3.jpg', 'Rachel Brown(2).jpg', 1, 'Rachel_Brown@gmail.com', 567435685),
(3, 'Megan_Petty', '12345678', 'Megan', 'Petty', 'Born: February 18, 1970\r\nNew York City, New York, US\r\nEducation: Pennsylvania Military Academy, Eagleswood Military Academy\r\n', 'n5.jpg', 'Megan Petty(3).jpg', 1, 'Megan_Petty@gmail.com', 567435681),
(4, 'Leonardo_Molina', '12345678', 'Leonardo', 'Molina', 'Born: December 24, 1972\r\nNyack, New York\r\nNationality: American\r\nEducation: Self-taught\r\nKnown for sculpture\r\n', 'n7.png', 'Leonardo Molina(4).jpg', 1, 'Leonardo_Molina@gmail.com', 567435683),
(5, 'Houston_Sutton', '12345678', 'Houston', 'Sutton', 'Born: 29 September 1980\r\nMilan, Duchy of Milan, Spanish Empire\r\nEducation: Simone Peterzano\r\nKnown for Painting\r\n', 'n9.jpg', 'Houston Sutton(5).jpg', 1, 'Houston_Sutton@gmail.com', 567435688);

-- --------------------------------------------------------

--
-- Table structure for table `atwork`
--

CREATE TABLE `atwork` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` longtext NOT NULL,
  `time` int(11) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'new.jpg',
  `date` date NOT NULL,
  `artist_id` int(11) NOT NULL,
  `enableComment` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atwork`
--

INSERT INTO `atwork` (`id`, `name`, `description`, `time`, `image`, `date`, `artist_id`, `enableComment`) VALUES
(1, 'Candles', 'This elegant lamp with its shiny white color can be hanged in dining room and besides it’s beautiful look, it’s sustainable and made from recycled material!', 25, 'n1.jpg', '2020-03-03', 1, 1),
(2, 'Pen holder', 'This cute lamp made from soda cans is perfect to be hanged in anywhere! Furthermore, it’s 100% made from recycled material!', 25, 'n2.jpg', '2020-07-06', 1, 1),
(3, 'Flower pot', 'This recycled bottle can serve as a beautiful food storage for birds! You can also paint it in sweet colors that birds will definitely love!', 30, 'n3.jpg', '2018-03-03', 2, 1),
(4, 'Car', 'This innovative and nice-looking recycled flower plot will look very beautiful in your living room, bedroom, or even dining room! ', 45, 'n4.png', '2019-05-03', 2, 1),
(5, 'Moneybox', 'Plastic bottles can make a favor for the environment! Those cans were recycled to be pots to grow a big number of plants and then hanged on the wall to make this amazing artwork!', 50, 'n5.jpg', '2015-07-05', 3, 1),
(6, 'Vasa', 'Those cute zombie bags that look like funny animals are made from leftovers and they’re a perfect for saving small stuff like keys, hair bands and stationery... let\'s how to make some!', 20, 'n6.jpg', '2016-05-08', 3, 1),
(7, 'vertical garden', 'What’s the relationship between formula 1 and soft drinks can? This cute car artifact was made from recycled cans and they’ll look beautiful on the shelf of your bedroom!', 45, 'n7.jpg', '2020-06-04', 4, 1),
(8, 'Chandelier', 'You can hang those elegant recycled candle cans anywhere and they’ll smell so good!', 60, 'n8.jpg', '2013-06-04', 4, 1),
(9, 'Spoon lamp', 'This cute hanged plot is great to be used to grow some plants in the garden!', 50, 'n9.jpg', '2019-05-06', 5, 1),
(10, 'Bird feeder', 'Those cute cans will look perfect to store your stationary in the office! Moreover, they’re easy to use and 100% sustainable!', 25, 'n10.jpg', '2019-04-08', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `vistior_id` int(11) NOT NULL,
  `atwork_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `vistior_id`, `atwork_id`) VALUES
(1, 'I like it ', 1, 1),
(2, 'It\'s amusing', 1, 4),
(3, 'wonderful', 2, 5),
(4, 'super ', 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `favoriteslist`
--

CREATE TABLE `favoriteslist` (
  `id` int(11) NOT NULL,
  `visitor_id` int(11) NOT NULL,
  `atwork_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favoriteslist`
--

INSERT INTO `favoriteslist` (`id`, `visitor_id`, `atwork_id`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 1, 5),
(4, 2, 7),
(5, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `madefrom`
--

CREATE TABLE `madefrom` (
  `id` int(11) NOT NULL,
  `tool_id` int(11) NOT NULL,
  `atwork_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `madefrom`
--

INSERT INTO `madefrom` (`id`, `tool_id`, `atwork_id`) VALUES
(1, 4, 1),
(2, 5, 1),
(3, 2, 1),
(4, 6, 1),
(5, 1, 1),
(6, 3, 1),
(7, 4, 2),
(8, 1, 2),
(9, 2, 2),
(10, 3, 2),
(11, 7, 2),
(12, 8, 2),
(13, 15, 2),
(14, 2, 3),
(15, 3, 3),
(16, 1, 3),
(17, 4, 3),
(18, 9, 3),
(19, 14, 3),
(20, 15, 3),
(21, 4, 4),
(22, 1, 4),
(23, 2, 4),
(24, 6, 4),
(25, 4, 5),
(26, 1, 5),
(27, 2, 5),
(28, 3, 5),
(29, 8, 5),
(30, 9, 6),
(31, 4, 6),
(32, 3, 6),
(33, 1, 6),
(34, 2, 6),
(35, 10, 6),
(36, 11, 7),
(37, 1, 7),
(38, 2, 7),
(39, 3, 7),
(40, 14, 7),
(41, 9, 7),
(42, 1, 8),
(43, 2, 8),
(44, 3, 8),
(45, 6, 8),
(46, 11, 8),
(47, 12, 8),
(48, 1, 9),
(49, 2, 9),
(50, 11, 9),
(51, 13, 9),
(52, 12, 9),
(53, 6, 9),
(54, 10, 10),
(55, 7, 10),
(56, 14, 10),
(57, 13, 10),
(58, 11, 10),
(59, 2, 10),
(60, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `step`
--

CREATE TABLE `step` (
  `StepId` int(11) NOT NULL,
  `step` text NOT NULL,
  `artworkId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `step`
--

INSERT INTO `step` (`StepId`, `step`, `artworkId`) VALUES
(1, 'Cut the cans from the top', 1),
(2, ' paint with colorful colors', 1),
(3, ' hang it with metal wires', 1),
(4, ' put the candles inside it', 1),
(5, 'Paint the outside of  cans with pink color.', 2),
(6, 'Once dry, wrap it together using tapes.', 2),
(7, 'Finally, glue big button to the tape to get this lovely look.', 2),
(8, 'Paint the can with blue color.', 3),
(9, 'Once dry, put the wort inside the can.', 3),
(10, ' Tie a set of tapes together.\r\nAttach the can with tapes.\r\n', 3),
(11, 'Removing the pull tab.', 4),
(12, 'Take off the top of the pull tab (We needs  of them).', 4),
(13, 'Use a scissor to cut through the can.', 4),
(14, '  glue the top of the pull tab (To look like a wheels).', 4),
(15, ' Use the pull tab to be a steering wheel.', 4),
(16, ' Start off by roll the scrapbook papers around the plastic bottle.', 5),
(17, 'Use a scissor to cut stickers to represent eyes, mouth and teeth.', 5),
(18, 'Glue the stickers on the plastic bottle.', 5),
(19, 'Paint  cans of different sizes with white color.', 6),
(20, 'Fix it to a goldencolored stick.', 6),
(21, 'Put some flowers inside the cans.', 6),
(22, 'Use a scissor to cut through plastic bottle. ', 7),
(23, 'Put the wort inside the plastic bottle.', 7),
(24, 'Use metal wire to fix the bottle to the wall.', 7),
(25, 'Cut the bottom of the plastic bottles.', 8),
(26, 'Use glue to stick it next to each other.', 8),
(27, 'Finally, fix it to the lamp.', 8),
(28, ' Cut little pieces of plastic spoons.', 9),
(29, 'Glue it on the big plastic bottles.', 9),
(30, 'Finally, fix it to the lamp.', 9),
(31, 'Cut small holes in the bottle where you will insert the spoons.', 10),
(32, 'Fill the bottle with bird seed.', 10),
(33, 'Hang the bird feeder from a tree with string.', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tool`
--

CREATE TABLE `tool` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tool`
--

INSERT INTO `tool` (`id`, `name`) VALUES
(1, 'Glue'),
(2, 'Scissors'),
(3, 'Paint'),
(4, 'Cans'),
(5, 'Candles'),
(6, 'Metal wire'),
(7, 'Pens'),
(8, 'Stickers'),
(9, 'Wort'),
(10, 'Wood'),
(11, 'Plastic bottle'),
(12, 'Lamp'),
(13, 'Plastic spoon'),
(14, 'Strings'),
(15, 'tapes');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `visitorUsername` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `profileImage` varchar(200) NOT NULL DEFAULT 'Images/Neutral-placeholder-profile.jpg',
  `Email` varchar(30) NOT NULL,
  `telephone` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `visitorUsername`, `password`, `Fname`, `Lname`, `profileImage`, `Email`, `telephone`) VALUES
(1, 'Davin_Barron', '12345678', 'Davin', 'Barron', 'visitor1.jpg', 'Davin_Barron@gmail.com', 567435664),
(2, 'Carlie_Compton', '12345678', 'Carlie', 'Compton', 'Visitor2.jpg', 'Carlie_Compton@gmail.com', 556964321);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atwork`
--
ALTER TABLE `atwork`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `atwork_id` (`atwork_id`),
  ADD KEY `vistior_id` (`vistior_id`);

--
-- Indexes for table `favoriteslist`
--
ALTER TABLE `favoriteslist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visitor_id` (`visitor_id`),
  ADD KEY `atwork_id` (`atwork_id`);

--
-- Indexes for table `madefrom`
--
ALTER TABLE `madefrom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tool_id` (`tool_id`),
  ADD KEY `atwork_id` (`atwork_id`);

--
-- Indexes for table `step`
--
ALTER TABLE `step`
  ADD PRIMARY KEY (`StepId`),
  ADD KEY `artworkId` (`artworkId`);

--
-- Indexes for table `tool`
--
ALTER TABLE `tool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `atwork`
--
ALTER TABLE `atwork`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `favoriteslist`
--
ALTER TABLE `favoriteslist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `madefrom`
--
ALTER TABLE `madefrom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `step`
--
ALTER TABLE `step`
  MODIFY `StepId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tool`
--
ALTER TABLE `tool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`atwork_id`) REFERENCES `atwork` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`vistior_id`) REFERENCES `visitor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favoriteslist`
--
ALTER TABLE `favoriteslist`
  ADD CONSTRAINT `favoriteslist_ibfk_1` FOREIGN KEY (`visitor_id`) REFERENCES `visitor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favoriteslist_ibfk_2` FOREIGN KEY (`atwork_id`) REFERENCES `atwork` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `madefrom`
--
ALTER TABLE `madefrom`
  ADD CONSTRAINT `madefrom_ibfk_1` FOREIGN KEY (`tool_id`) REFERENCES `tool` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `madefrom_ibfk_2` FOREIGN KEY (`atwork_id`) REFERENCES `atwork` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `step`
--
ALTER TABLE `step`
  ADD CONSTRAINT `Step_ibfk_1` FOREIGN KEY (`artworkId`) REFERENCES `atwork` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
