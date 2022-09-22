-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2020 at 05:50 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seascape_hotel_ahangama`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(255) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `NIC` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` int(20) NOT NULL,
  `room_price` varchar(50) NOT NULL,
  `customer_type` varchar(50) NOT NULL,
  `service_type` varchar(50) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `request_date` date NOT NULL,
  `request_time` time NOT NULL,
  `booking_date` date DEFAULT NULL,
  `booking_time` time DEFAULT NULL,
  `payment_id` varchar(100) DEFAULT NULL,
  `additional` double NOT NULL,
  `discount` double NOT NULL,
  `paid` tinyint(1) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `room_name`, `type`, `f_name`, `l_name`, `NIC`, `email`, `tel`, `room_price`, `customer_type`, `service_type`, `check_in`, `check_out`, `status`, `request_date`, `request_time`, `booking_date`, `booking_time`, `payment_id`, `additional`, `discount`, `paid`) VALUES
(12, 'RD004', 'single', 'rgreg', 'rgrfg', '5546', 'gj@dhfjh', 556546, '$ 35', 'foreign', 'room_only', '2020-05-28', '2020-05-29', 1, '2020-05-27', '10:39:00', '2020-05-27', '10:41:00', '159055631627052026984', 0, 0, 1),
(13, 'RS001', 'single', 'Pasindu', 'Kavinda', '353534534', 'fdbd@dv', 3545345, '$ 35', 'foreign', 'room_only', '2020-06-09', '2020-06-10', 1, '2020-06-07', '10:52:00', '2020-06-07', '10:53:00', '159150741307062040949', 0, 2, 0),
(14, 'RS001', 'double', 'sanju', 'shehan', '971510128v', 'shehan9753@gmail.com', 778193797, 'LKR 10300', 'local', 'full_board', '2020-06-12', '2020-06-14', 1, '2020-06-12', '10:29:00', '2020-06-12', '10:29:00', '159193799112062061786', 0, 0, 0),
(15, 'RS001', 'single', 'yyyyyyy', 'yyyyyyyyyyy', '6555555', 'gyhfc@ggh', 879789997, '$ 40', 'foreign', 'bed_breakfast', '2020-06-15', '2020-06-16', 1, '2020-06-13', '11:57:00', '2020-06-13', '11:57:00', '159202966613062040726', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment-id` int(255) NOT NULL AUTO_INCREMENT,
  `author_name` varchar(100) NOT NULL,
  `author_image` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`comment-id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment-id`, `author_name`, `author_image`, `email`, `comment`, `date`, `time`, `status`) VALUES
(17, 'Pasindu', 'default/male.png', 'ict5plp@gmail.com', 'good', '2020-02-24', '08:06:00', 1),
(18, 'Shehan Sanju', 'default/male.png', 'shehansanju@gmail.com', 'jhasbdhjasbdhj sjkahdsjkdhjksdfkbkf', '2020-02-25', '12:32:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dining`
--

CREATE TABLE IF NOT EXISTS `dining` (
  `dining_id` int(255) NOT NULL AUTO_INCREMENT,
  `dining_title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `dining_main_image_name` varchar(100) NOT NULL,
  PRIMARY KEY (`dining_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `dining`
--

INSERT INTO `dining` (`dining_id`, `dining_title`, `description`, `dining_main_image_name`) VALUES
(3, 'Fish & Chips', 'Crispy boneless white fish fillet served with French Fries, Crispy Salad & Tartar Sauce ', 'Tue-Mar-2020-1583834263-217773438.jpg'),
(4, 'Beer Battered Calamari Rings', 'Calamari rings seasoned with local beer and served crispy with French Fries, Crispy Salad and Tartar Sauce', 'Tue-Mar-2020-1583834389-823975.jpg'),
(5, ' Tuna Steak', 'Yellow Fin Tuna Steak served with Steamed Rice, Salad and home-made Creamy Garlic Butter Sauce ', 'Tue-Mar-2020-1583834447-812164307.jpg'),
(6, 'Grilled Prawns', 'Grilled Lagoon Prawns dressed in Creamy Garlic Butter Sauce and served with Mashed Potato & Crispy Salad', 'Tue-Mar-2020-1583834501-238098145.jpg'),
(7, 'Grilled Whole Fish', 'Grilled Red Snapper Fish served with Crispy Salad, Creamy Garlic Butter Sauce and French Fries ', 'Tue-Mar-2020-1583834567-417114258.jpg'),
(8, 'Black Pepper Crab', 'Meaty Lagoon Crab deep-fried and tossed with crushed Black Pepper & Garlic and served with Steamed Rice', 'Tue-Mar-2020-1583834624-463531495.jpg'),
(9, 'Grilled Lobster', 'Grilled Lobster served with French Fries, Crispy Salad and Creamy Garlic Butter Sauce', 'Tue-Mar-2020-1583834779-436065674.jpg'),
(10, 'Large Seafood Platter', 'Grilled Lobster, Jumbo Prawns, Crab, Tuna Steak, Prawns & Calamari served with French Fries', 'Tue-Mar-2020-1583834835-112823487.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dining_image`
--

CREATE TABLE IF NOT EXISTS `dining_image` (
  `dining_image_id` int(255) NOT NULL AUTO_INCREMENT,
  `dining_id` int(255) NOT NULL,
  `dining_image_name` varchar(100) NOT NULL,
  PRIMARY KEY (`dining_image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(255) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `event_author` varchar(100) NOT NULL,
  `event_main_image` varchar(100) NOT NULL,
  `event_date` date NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `description`, `event_author`, `event_main_image`, `event_date`) VALUES
(37, ' Pool Party  ', 'A pool party is a celebration that includes activities in a swimming pool for guests. The party can be a wet and wild time if children are invited to the party.', 'ads', 'Tue-Mar-2020-1583836299-70831299.jpg', '2020-03-11'),
(38, ' Restaurant  ', 'This classy hotel restaurant features with inspiring new menus and the highest levels of personalized service. Our chefs have created a mouthwatering choices.', 'ads', 'Tue-Mar-2020-1583836490-341857911.jpg', '2020-03-12'),
(39, ' Bar  ', 'Our hotel have a bar section for with a party and other events, it can give the services for you. bar and restaurant in same place in the hotel area. Enjoy your life..', 'ads', 'Tue-Mar-2020-1583836554-446746827.jpg', '2020-03-13'),
(40, ' Meeting  ', 'Meetings are different kinds of companies, our staff members arrange the meeting in your requirements and we have the meeting room for do the public meeting with our facilities. Ex:Annual meeting', 'ads', 'Tue-Mar-2020-1583836646-873321534.jpg', '2020-03-13'),
(41, ' Party .', 'Parties are very important thing in your life, so if you can get the unforgettable memory in your life, we have the different types of part in your choices, parties are birthday, special party and other parties..', 'ads', 'Tue-Mar-2020-1583836720-447601319.jpg', '2020-03-14'),
(42, ' Conference ', ' If you want to arrange the our company conference in our hotel, we can get the best arrangement for you and your team members, we have a conference room for your meeting with staff members', 'ads', 'Tue-Mar-2020-1583836787-243377686.jpg', '2020-03-15'),
(43, 'Anniversary  ', 'Anniversary party is the most special moment in our life, if you can get the unforgettable memory with our hotel. Our team members are also help for you get the best selections in your anniversary. Join and fun with us', 'ads', 'Tue-Mar-2020-1583836854-57373047.jpg', '2020-03-16'),
(44, ' DJ Party  ', 'DJ party is the most popular party section in the special moment in the life. When you can select the choices and what you want in your party. Our team members are help for you select best things..', 'ads', 'Tue-Mar-2020-1583836924-52825928.jpg', '2020-03-17'),
(45, ' Other Specials ', ' You can reserve the hotel for other events and other parties, EX: Get Together and other special moments in our life, so we are always ready to give the best service for you.', 'ads', 'Tue-Mar-2020-1583836987-610839844.jpg', '2020-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `event_image`
--

CREATE TABLE IF NOT EXISTS `event_image` (
  `event_image_id` int(255) NOT NULL AUTO_INCREMENT,
  `event_id` int(255) NOT NULL,
  `event_image_name` varchar(100) NOT NULL,
  PRIMARY KEY (`event_image_id`,`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `excursion`
--

CREATE TABLE IF NOT EXISTS `excursion` (
  `excursion_id` int(255) NOT NULL AUTO_INCREMENT,
  `destination` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `length_and_time` varchar(50) NOT NULL,
  `excursion_main_image` varchar(100) NOT NULL,
  PRIMARY KEY (`excursion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `excursion`
--

INSERT INTO `excursion` (`excursion_id`, `destination`, `description`, `length_and_time`, `excursion_main_image`) VALUES
(51, ' Galle Dutch Fort ', 'The Galle Fort in Galle is a UNESCO world heritage site and it is the largest remaining Fortress in Asia. Locate in the bay of Galle on the Southern shore of Sri Lanka. It was built by the Portugeese in 1588 and later removed by the Dutch. It is the most ionic sunset spot in Galle. You can have a calm and magical feeling at there... A great place to explore', ' 20km, 30min.', 'Tue-Mar-2020-1583867123-70404053.jpg'),
(52, ' Hummanaya Blow Hole ', ' The Hummanaya Blow Hole is not only the only natural phenomenon of its kind in Sri Lanka but the second largest natural blow hole in the world. The locate between Dickwalla and Tangalle. You can see and unbelievable natural where see water strings out from a hole which gives you a beautiful view.', '50km, 1hr 30min ', 'Tue-Mar-2020-1583867375-746246338.jpg'),
(53, ' Surf in Weligama Sea ', 'One of the popular tourist destination in Sri Lanka. You can spend a quality time in a peaceful and seething environment with stunning beaches. A great place for surfing with 2km stretch of shallow sandy beach. You can have unforgettable memories with fishing and surfing in weligama', ' 8km, 15min', 'Tue-Mar-2020-1583868010-728302002.jpg'),
(54, ' Experience the Turtle hatchery ', 'These coastal areas providing a nesting ground to five of the seven species for many years and presently you can experience these five species visiting Sri Lanka during the nesting seasons. Hikkaduwa, Habaraduwa, Kosgoda, and Tangalle are a few of the main coastal cities know to be the nesting land for the sea turtles.', ' 8.5km, 12min', 'Tue-Mar-2020-1583868078-963989258.jpg'),
(55, ' Visit Martin Wickramasinghe Museum ', 'An Excellent place to study ancient Sri Lanka culture. One of the best Folk museum in Sri Lanka. Martine Wickkramasinghe known as "The father of the modern Sinhala literature" born in the place. You can see his home and overview of his life and also the place is a huge collection of antiques, old monuments dated back to late 1800â€™s.', ' 6km, 8min ', 'Tue-Mar-2020-1583868138-826660157.jpg'),
(56, ' Boat ride in â€œMadol Duwaâ€ ', 'Well worth boat ride around scattered clusters of islands such as â€œFamous Madol Duwa Islandâ€.. Boat riders will guide you to the landmarks around 1 â€“ 2 hours. You can experience traditional Sri Lankan cinnamon making process & taste a sip of complimentary cinnamon tea too. Enjoy the explore of mysterious Madol Duwa along with bird watching experience.', ' 5km, 10min ', 'Tue-Mar-2020-1583868206-11871338.jpg'),
(57, ' Bundala National Park ', 'You can have an amazing experience with the beautiful splendor of nature. Almost 200 species of birds have been recorded in this national park, which is located in the Southern Province in Sri Lanka. The large flocks of greater flamingos visit the country from India easily steal the limelight here', ' 125km, 1hr 50min', 'Tue-Mar-2020-1583868300-382843018.jpg'),
(58, ' Mulkirigala Rock Temple ', 'Visit Mulkirigala Rock Temple to be mesmerized by the richness of this countryâ€™s past. The temple, which is believed built in the third century, has an impressive collection of murals that belong to the Kandyan Era. Itâ€™s one of the famous attraction place in the Southern Province Of Sri Lanka.', '64km, 1hr 40min ', 'Tue-Mar-2020-1583868383-792633057.jpg'),
(59, ' Udawalawe Elephant Sanctuary Tour ', 'Udawalawe National Park lies on the boundary of Sabaragamuwa and Uva Provinces, in Sri Lanka. The national park was created to provide a sanctuary for wild animals displaced by the construction of the Udawalawe Reservoir on the Walawe River, as well as to protect the catchment of the reservoir.', '150km, 2hr 30min ', 'Tue-Mar-2020-1583868482-780792237.jpg'),
(60, ' Hiyare, Kottawa, Kanneliya Rainforest tour ', 'Located within easy reach from Galle, the Hiyare Forest can be found beside a reservoir and idea for a trek along leaf-strewn paths or a captivating boat ride. Close to Hiyare is the Kottawa Rainforest and Arboretum which is blessed with a large variety of endemic trees and birdlife as well. More trekking escapades await at the Kanneliya Rainforest along its two main trails; tranquil streams, scenic waterfalls and a range of birds and butterfly species are all part of the fascinating landscape here.', ' 60km, 1hr 30min ', 'Tue-Mar-2020-1583868541-312347413.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `excursion_image`
--

CREATE TABLE IF NOT EXISTS `excursion_image` (
  `excursion_image_id` int(255) NOT NULL AUTO_INCREMENT,
  `excursion_id` int(255) NOT NULL,
  `excursion_image_name` varchar(100) NOT NULL,
  PRIMARY KEY (`excursion_image_id`,`excursion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `image_id` int(255) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`image_id`, `image_name`, `title`) VALUES
(7, 'Mon-Feb-2020-1582570178-9063721.jpg', 'Accomodation'),
(8, 'Mon-Feb-2020-1582570205-116577149.jpg', 'Accomodation'),
(9, 'Mon-Feb-2020-1582570228-53863526.jpg', 'Accomodation'),
(10, 'Mon-Feb-2020-1582570250-929534913.jpg', 'Accomodation'),
(11, 'Mon-Feb-2020-1582570286-61248780.jpg', 'Accomodation'),
(12, 'Mon-Feb-2020-1582570344-621215821.jpg', 'Dining'),
(13, 'Mon-Feb-2020-1582570369-875457764.jpg', 'Dining'),
(14, 'Mon-Feb-2020-1582570438-624450684.jpg', 'Event'),
(15, 'Mon-Feb-2020-1582570461-407257081.jpg', 'Event'),
(16, 'Mon-Feb-2020-1582570552-516540528.jpg', 'Excursion'),
(17, 'Mon-Feb-2020-1582570576-283416749.jpg', 'Excursion'),
(18, 'Mon-Feb-2020-1582570598-449066163.jpg', 'Excursion'),
(19, 'Mon-Feb-2020-1582570620-483489991.jpg', 'Excursion'),
(21, 'Mon-Mar-2020-1583129348-623352051.jpg', 'Accomodation');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` varchar(100) NOT NULL,
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(100) NOT NULL,
  `quentity` int(11) NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`item_id`),
  KEY `id` (`id`,`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `item_id`, `item`, `quentity`, `total`) VALUES
('123456', 1, '555', 3, 100),
('123456', 2, '698', 2, 50),
('123456', 10, 'beer', 3, 10),
('123456', 16, 'juice', 2, 2),
('987654', 17, 'rice', 2, 3),
('987654', 19, 'bbbb', 4, 343),
('272705052020202035889073', 20, 'dbg', 4, 5),
('272705052020202035889073', 21, 'ff', 2, 8),
('159055631627052026984', 22, 'rice', 1, 5),
('159150741307062040949', 23, 'calamari', 1, 4),
('159150741307062040949', 24, 'beer', 2, 5),
('159202966613062040726', 25, 'rice', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `AC` tinyint(1) NOT NULL,
  `hot_water` tinyint(1) NOT NULL,
  `rain_shower` tinyint(1) NOT NULL,
  `seating_area` tinyint(1) NOT NULL,
  `max_adult` int(10) NOT NULL,
  `max_child` int(10) NOT NULL,
  `iron_and_pad` tinyint(1) NOT NULL,
  `room_size` int(10) NOT NULL,
  `price` double NOT NULL,
  `room_main_image_name` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `description`, `category`, `AC`, `hot_water`, `rain_shower`, `seating_area`, `max_adult`, `max_child`, `iron_and_pad`, `room_size`, `price`, `room_main_image_name`, `status`) VALUES
(1, 'RS001', 'ckdkdckc', 'single', 1, 1, 1, 0, 1, 1, 0, 56, 32, 'Tue-Mar-2020-1583852716-721954346.jpg', '0'),
(2, 'RD002', 'kscklncl kdkdjl jfkjkjhjkhakshd jsdhkshkahdkha sjhakhskah jasjalkasjl ashjahsgjagj jasdjhasgjahs', 'double', 1, 1, 1, 0, 2, 2, 0, 23, 365, 'Tue-Mar-2020-1583853783-911560059.jpg', '0'),
(3, 'RF003', 'dlkdlkl', 'family', 1, 0, 1, 1, 0, 4, 1, 32, 36, 'Tue-Mar-2020-1583853963-59509278.jpg', '0'),
(4, 'RD004', 'sxskjhxks is sicsi siucis csi is siucis siuis is siuisus isuis siisps acopcpaoapo pasopo capop as', 'double', 1, 1, 0, 0, 2, 1, 1, 2, 32, 'Tue-Mar-2020-1583861257-697784424.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `room_image`
--

CREATE TABLE IF NOT EXISTS `room_image` (
  `room_image_id` int(255) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `room_image_name` varchar(100) NOT NULL,
  PRIMARY KEY (`room_image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `room_image`
--

INSERT INTO `room_image` (`room_image_id`, `room_id`, `room_image_name`) VALUES
(18, 8, 'Mon-Mar-2020-1583128269-36712647.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room_price`
--

CREATE TABLE IF NOT EXISTS `room_price` (
  `category` varchar(100) NOT NULL,
  `Foreign_RO` double NOT NULL,
  `Foreign_BB` double NOT NULL,
  `Foreign_HB` double NOT NULL,
  `Foreign_FB` double NOT NULL,
  `Local_RO` double NOT NULL,
  `Local_BB` double NOT NULL,
  `Local_HB` double NOT NULL,
  `Local_FB` double NOT NULL,
  `Gov_RO` double NOT NULL,
  `Gov_BB` double NOT NULL,
  `Gov_HB` double NOT NULL,
  `Gov_FB` double NOT NULL,
  `VTA_RO` double NOT NULL,
  `VTA_BB` double NOT NULL,
  `VTA_HB` double NOT NULL,
  `VTA_FB` double NOT NULL,
  PRIMARY KEY (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_price`
--

INSERT INTO `room_price` (`category`, `Foreign_RO`, `Foreign_BB`, `Foreign_HB`, `Foreign_FB`, `Local_RO`, `Local_BB`, `Local_HB`, `Local_FB`, `Gov_RO`, `Gov_BB`, `Gov_HB`, `Gov_FB`, `VTA_RO`, `VTA_BB`, `VTA_HB`, `VTA_FB`) VALUES
('double', 40, 45, 50, 65, 5500, 6700, 8700, 10300, 4675, 5695, 7395, 8755, 3850, 4690, 6090, 7210),
('family', 55, 60, 80, 95, 6500, 8900, 12900, 16100, 5525, 7565, 10965, 13685, 4550, 6230, 9030, 11270),
('single', 35, 40, 45, 55, 5000, 5600, 6600, 7400, 4250, 4760, 5610, 6290, 3500, 3920, 4620, 5180);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `queue` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `sub_title`, `description`, `image_name`, `queue`) VALUES
(49, 'Welcome to', ' Hotel Seascape', 'Experience the tranquil environment and shoreline at Seascape\nconsist enclosed <br> with slim sandy bays and rocky out crops', 'Wed-Mar-2020-1583894833-155853272.jpg', 0),
(50, 'Best Place To ', 'Find Room5', 'From the moment you check in, for every experience you have, our ambience<br> and service blend in perfect harmony, creating a string of memorable moments for you.', 'Wed-Mar-2020-1583895036-426910401.jpg', 0),
(51, 'Best Place ', 'for relax', 'From the moment you check in, for every experience you have, our ambience and<br>\nservice blend in perfect harmony, creating a string of memorable moments for you.', 'Wed-Mar-2020-1583895154-795959473.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) NOT NULL DEFAULT 'frontoffice',
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `createdAt` datetime NOT NULL,
  `authToken` varchar(255) NOT NULL,
  `lastLogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `type`, `name`, `email`, `isActive`, `createdAt`, `authToken`, `lastLogin`, `username`, `password`, `last_updated`) VALUES
(1, 'admin', 'Admin', 'dfdf@gfdfd', 0, '2020-03-11 09:20:00', '7dd039e2ff0e77124afbae9994ed07d4', '2020-07-13 15:29:25', 'admin', '7518094d3c329fa4927c281c062bc54e5d5fd83d754d6dd367459dc54f694b05', '2020-07-13 15:29:25'),
(2, 'frontoffice', 'Pasindu', 'plp@gggg', 0, '2020-03-11 06:00:00', '93b608c8bf649ab69027ef1333204986', '2020-07-13 15:45:53', 'pasindu', '7518094d3c329fa4927c281c062bc54e5d5fd83d754d6dd367459dc54f694b05', '2020-07-13 15:45:53');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
