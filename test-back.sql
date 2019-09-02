-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 02, 2019 at 09:39 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test-back`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tags` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `category`, `image`, `tags`) VALUES
(3, 'Article 5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet, mauris vitae tincidunt lacinia, nunc sem condimentum sem, ultrices lobortis purus odio vitae metus. Nulla eget bibendum odio, eget aliquet dui. Aenean tincidunt neque ligula, sit amet volutpat ex ullamcorper ut. Donec convallis, justo sit amet pharetra gravida, lorem velit dapibus quam, quis pharetra nisl mi sit amet ligula. Mauris posuere pellentesque viverra. Phasellus ut nunc sed dui scelerisque porta. Phasellus nulla turpis, convallis sed ullamcorper sit amet, eleifend sed libero. Suspendisse potenti. Duis interdum vel enim vitae efficitur. Donec tincidunt ultrices dolor eu eleifend.</p><p>Proin accumsan erat et aliquam consequat. Ut sed fermentum ligula, a malesuada felis. Aliquam iaculis finibus est a pretium. Nunc vel commodo erat. Vivamus ac bibendum ex. Sed efficitur facilisis augue ut auctor. Aliquam sodales in massa nec tempor. Maecenas fringilla est non tristique malesuada. Ut sodales pretium pellentesque.</p><p>Etiam placerat tortor vel elit placerat, eu facilisis ligula congue. Sed pulvinar, lacus a feugiat pellentesque, enim augue cursus ex, ullamcorper dapibus justo justo in eros. Phasellus cursus, leo in elementum semper, lectus massa pellentesque nulla, vitae vehicula dui ipsum sit amet quam. Morbi tincidunt metus vel dignissim pharetra. Vivamus sollicitudin, felis vitae consectetur tempus, turpis velit placerat ipsum, at lacinia nunc arcu eget ex. Proin sollicitudin augue sem, eu rhoncus diam pulvinar et. Vivamus at orci ante. Donec ac nunc purus. Vivamus pretium dolor vel laoreet sollicitudin. Curabitur finibus odio sed efficitur finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam varius diam iaculis cursus imperdiet. Nullam sed hendrerit quam. Aenean vitae erat a justo sollicitudin molestie non nec enim. Aliquam varius pellentesque convallis.</p><p>Donec luctus mauris id consequat hendrerit. In elementum est ac enim convallis euismod. Ut vitae augue eget enim luctus convallis. Sed arcu erat, malesuada ac tortor quis, pharetra volutpat orci. Donec non mauris eu purus elementum lacinia ac et ex. Ut rutrum turpis libero, vitae cursus dui tristique et. Mauris nec massa sed ligula pretium lacinia. Donec sed dapibus quam. Quisque sollicitudin quam sit amet dictum commodo. Aenean tristique, lorem id ullamcorper viverra, lacus sem rhoncus nulla, ut suscipit dolor urna eu lorem. Integer vestibulum, nisi at ultrices sodales, libero eros mollis nulla, ac blandit mauris nibh vel massa. Pellentesque a porta metus. Nulla blandit arcu ut justo pellentesque, et egestas risus tempus.</p><p>Phasellus vitae eros lorem. Praesent malesuada lectus a eleifend suscipit. Duis consectetur, ligula eu vulputate viverra, tortor turpis laoreet elit, eu hendrerit tortor ligula ut libero. Mauris interdum imperdiet eros, in gravida nunc consequat hendrerit. Proin non erat vel lorem rhoncus accumsan id ut arcu. Donec fermentum est at fermentum tincidunt. Fusce at cursus est. Aenean suscipit ante dolor, vel varius diam iaculis vel. Proin id libero metus. Praesent vehicula consequat mauris, id eleifend ex rutrum sed.</p>', 'Category3', 'cheminee.png', ''),
(4, 'Article', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet, mauris vitae tincidunt lacinia, nunc sem condimentum sem, ultrices lobortis purus odio vitae metus. Nulla eget bibendum odio, eget aliquet dui. Aenean tincidunt neque ligula, sit amet volutpat ex ullamcorper ut. Donec convallis, justo sit amet pharetra gravida, lorem velit dapibus quam, quis pharetra nisl mi sit amet ligula. Mauris posuere pellentesque viverra. Phasellus ut nunc sed dui scelerisque porta. Phasellus nulla turpis, convallis sed ullamcorper sit amet, eleifend sed libero. Suspendisse potenti. Duis interdum vel enim vitae efficitur. Donec tincidunt ultrices dolor eu eleifend.</p><p>Proin accumsan erat et aliquam consequat. Ut sed fermentum ligula, a malesuada felis. Aliquam iaculis finibus est a pretium. Nunc vel commodo erat. Vivamus ac bibendum ex. Sed efficitur facilisis augue ut auctor. Aliquam sodales in massa nec tempor. Maecenas fringilla est non tristique malesuada. Ut sodales pretium pellentesque.</p><p>Etiam placerat tortor vel elit placerat, eu facilisis ligula congue. Sed pulvinar, lacus a feugiat pellentesque, enim augue cursus ex, ullamcorper dapibus justo justo in eros. Phasellus cursus, leo in elementum semper, lectus massa pellentesque nulla, vitae vehicula dui ipsum sit amet quam. Morbi tincidunt metus vel dignissim pharetra. Vivamus sollicitudin, felis vitae consectetur tempus, turpis velit placerat ipsum, at lacinia nunc arcu eget ex. Proin sollicitudin augue sem, eu rhoncus diam pulvinar et. Vivamus at orci ante. Donec ac nunc purus. Vivamus pretium dolor vel laoreet sollicitudin. Curabitur finibus odio sed efficitur finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam varius diam iaculis cursus imperdiet. Nullam sed hendrerit quam. Aenean vitae erat a justo sollicitudin molestie non nec enim. Aliquam varius pellentesque convallis.</p><p>Donec luctus mauris id consequat hendrerit. In elementum est ac enim convallis euismod. Ut vitae augue eget enim luctus convallis. Sed arcu erat, malesuada ac tortor quis, pharetra volutpat orci. Donec non mauris eu purus elementum lacinia ac et ex. Ut rutrum turpis libero, vitae cursus dui tristique et. Mauris nec massa sed ligula pretium lacinia. Donec sed dapibus quam. Quisque sollicitudin quam sit amet dictum commodo. Aenean tristique, lorem id ullamcorper viverra, lacus sem rhoncus nulla, ut suscipit dolor urna eu lorem. Integer vestibulum, nisi at ultrices sodales, libero eros mollis nulla, ac blandit mauris nibh vel massa. Pellentesque a porta metus. Nulla blandit arcu ut justo pellentesque, et egestas risus tempus.</p><p>Phasellus vitae eros lorem. Praesent malesuada lectus a eleifend suscipit. Duis consectetur, ligula eu vulputate viverra, tortor turpis laoreet elit, eu hendrerit tortor ligula ut libero. Mauris interdum imperdiet eros, in gravida nunc consequat hendrerit. Proin non erat vel lorem rhoncus accumsan id ut arcu. Donec fermentum est at fermentum tincidunt. Fusce at cursus est. Aenean suscipit ante dolor, vel varius diam iaculis vel. Proin id libero metus. Praesent vehicula consequat mauris, id eleifend ex rutrum sed.</p>', 'Category4', 'cheminee.png', ''),
(6, 'Article 6', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet, mauris vitae tincidunt lacinia, nunc sem condimentum sem, ultrices lobortis purus odio vitae metus. Nulla eget bibendum odio, eget aliquet dui. Aenean tincidunt neque ligula, sit amet volutpat ex ullamcorper ut. Donec convallis, justo sit amet pharetra gravida, lorem velit dapibus quam, quis pharetra nisl mi sit amet ligula. Mauris posuere pellentesque viverra. Phasellus ut nunc sed dui scelerisque porta. Phasellus nulla turpis, convallis sed ullamcorper sit amet, eleifend sed libero. Suspendisse potenti. Duis interdum vel enim vitae efficitur. Donec tincidunt ultrices dolor eu eleifend.</p><p>Proin accumsan erat et aliquam consequat. Ut sed fermentum ligula, a malesuada felis. Aliquam iaculis finibus est a pretium. Nunc vel commodo erat. Vivamus ac bibendum ex. Sed efficitur facilisis augue ut auctor. Aliquam sodales in massa nec tempor. Maecenas fringilla est non tristique malesuada. Ut sodales pretium pellentesque.</p><p>Etiam placerat tortor vel elit placerat, eu facilisis ligula congue. Sed pulvinar, lacus a feugiat pellentesque, enim augue cursus ex, ullamcorper dapibus justo justo in eros. Phasellus cursus, leo in elementum semper, lectus massa pellentesque nulla, vitae vehicula dui ipsum sit amet quam. Morbi tincidunt metus vel dignissim pharetra. Vivamus sollicitudin, felis vitae consectetur tempus, turpis velit placerat ipsum, at lacinia nunc arcu eget ex. Proin sollicitudin augue sem, eu rhoncus diam pulvinar et. Vivamus at orci ante. Donec ac nunc purus. Vivamus pretium dolor vel laoreet sollicitudin. Curabitur finibus odio sed efficitur finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam varius diam iaculis cursus imperdiet. Nullam sed hendrerit quam. Aenean vitae erat a justo sollicitudin molestie non nec enim. Aliquam varius pellentesque convallis.</p><p>Donec luctus mauris id consequat hendrerit. In elementum est ac enim convallis euismod. Ut vitae augue eget enim luctus convallis. Sed arcu erat, malesuada ac tortor quis, pharetra volutpat orci. Donec non mauris eu purus elementum lacinia ac et ex. Ut rutrum turpis libero, vitae cursus dui tristique et. Mauris nec massa sed ligula pretium lacinia. Donec sed dapibus quam. Quisque sollicitudin quam sit amet dictum commodo. Aenean tristique, lorem id ullamcorper viverra, lacus sem rhoncus nulla, ut suscipit dolor urna eu lorem. Integer vestibulum, nisi at ultrices sodales, libero eros mollis nulla, ac blandit mauris nibh vel massa. Pellentesque a porta metus. Nulla blandit arcu ut justo pellentesque, et egestas risus tempus.</p><p>Phasellus vitae eros lorem. Praesent malesuada lectus a eleifend suscipit. Duis consectetur, ligula eu vulputate viverra, tortor turpis laoreet elit, eu hendrerit tortor ligula ut libero. Mauris interdum imperdiet eros, in gravida nunc consequat hendrerit. Proin non erat vel lorem rhoncus accumsan id ut arcu. Donec fermentum est at fermentum tincidunt. Fusce at cursus est. Aenean suscipit ante dolor, vel varius diam iaculis vel. Proin id libero metus. Praesent vehicula consequat mauris, id eleifend ex rutrum sed.</p>', 'Category6', 'cheminee.png', NULL),
(8, 'Article 8', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet, mauris vitae tincidunt lacinia, nunc sem condimentum sem, ultrices lobortis purus odio vitae metus. Nulla eget bibendum odio, eget aliquet dui. Aenean tincidunt neque ligula, sit amet volutpat ex ullamcorper ut. Donec convallis, justo sit amet pharetra gravida, lorem velit dapibus quam, quis pharetra nisl mi sit amet ligula. Mauris posuere pellentesque viverra. Phasellus ut nunc sed dui scelerisque porta. Phasellus nulla turpis, convallis sed ullamcorper sit amet, eleifend sed libero. Suspendisse potenti. Duis interdum vel enim vitae efficitur. Donec tincidunt ultrices dolor eu eleifend.</p><p>Proin accumsan erat et aliquam consequat. Ut sed fermentum ligula, a malesuada felis. Aliquam iaculis finibus est a pretium. Nunc vel commodo erat. Vivamus ac bibendum ex. Sed efficitur facilisis augue ut auctor. Aliquam sodales in massa nec tempor. Maecenas fringilla est non tristique malesuada. Ut sodales pretium pellentesque.</p><p>Etiam placerat tortor vel elit placerat, eu facilisis ligula congue. Sed pulvinar, lacus a feugiat pellentesque, enim augue cursus ex, ullamcorper dapibus justo justo in eros. Phasellus cursus, leo in elementum semper, lectus massa pellentesque nulla, vitae vehicula dui ipsum sit amet quam. Morbi tincidunt metus vel dignissim pharetra. Vivamus sollicitudin, felis vitae consectetur tempus, turpis velit placerat ipsum, at lacinia nunc arcu eget ex. Proin sollicitudin augue sem, eu rhoncus diam pulvinar et. Vivamus at orci ante. Donec ac nunc purus. Vivamus pretium dolor vel laoreet sollicitudin. Curabitur finibus odio sed efficitur finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam varius diam iaculis cursus imperdiet. Nullam sed hendrerit quam. Aenean vitae erat a justo sollicitudin molestie non nec enim. Aliquam varius pellentesque convallis.</p><p>Donec luctus mauris id consequat hendrerit. In elementum est ac enim convallis euismod. Ut vitae augue eget enim luctus convallis. Sed arcu erat, malesuada ac tortor quis, pharetra volutpat orci. Donec non mauris eu purus elementum lacinia ac et ex. Ut rutrum turpis libero, vitae cursus dui tristique et. Mauris nec massa sed ligula pretium lacinia. Donec sed dapibus quam. Quisque sollicitudin quam sit amet dictum commodo. Aenean tristique, lorem id ullamcorper viverra, lacus sem rhoncus nulla, ut suscipit dolor urna eu lorem. Integer vestibulum, nisi at ultrices sodales, libero eros mollis nulla, ac blandit mauris nibh vel massa. Pellentesque a porta metus. Nulla blandit arcu ut justo pellentesque, et egestas risus tempus.</p><p>Phasellus vitae eros lorem. Praesent malesuada lectus a eleifend suscipit. Duis consectetur, ligula eu vulputate viverra, tortor turpis laoreet elit, eu hendrerit tortor ligula ut libero. Mauris interdum imperdiet eros, in gravida nunc consequat hendrerit. Proin non erat vel lorem rhoncus accumsan id ut arcu. Donec fermentum est at fermentum tincidunt. Fusce at cursus est. Aenean suscipit ante dolor, vel varius diam iaculis vel. Proin id libero metus. Praesent vehicula consequat mauris, id eleifend ex rutrum sed.</p>', 'Category8', 'cheminee.png', NULL),
(9, 'Article 9', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet, mauris vitae tincidunt lacinia, nunc sem condimentum sem, ultrices lobortis purus odio vitae metus. Nulla eget bibendum odio, eget aliquet dui. Aenean tincidunt neque ligula, sit amet volutpat ex ullamcorper ut. Donec convallis, justo sit amet pharetra gravida, lorem velit dapibus quam, quis pharetra nisl mi sit amet ligula. Mauris posuere pellentesque viverra. Phasellus ut nunc sed dui scelerisque porta. Phasellus nulla turpis, convallis sed ullamcorper sit amet, eleifend sed libero. Suspendisse potenti. Duis interdum vel enim vitae efficitur. Donec tincidunt ultrices dolor eu eleifend.</p><p>Proin accumsan erat et aliquam consequat. Ut sed fermentum ligula, a malesuada felis. Aliquam iaculis finibus est a pretium. Nunc vel commodo erat. Vivamus ac bibendum ex. Sed efficitur facilisis augue ut auctor. Aliquam sodales in massa nec tempor. Maecenas fringilla est non tristique malesuada. Ut sodales pretium pellentesque.</p><p>Etiam placerat tortor vel elit placerat, eu facilisis ligula congue. Sed pulvinar, lacus a feugiat pellentesque, enim augue cursus ex, ullamcorper dapibus justo justo in eros. Phasellus cursus, leo in elementum semper, lectus massa pellentesque nulla, vitae vehicula dui ipsum sit amet quam. Morbi tincidunt metus vel dignissim pharetra. Vivamus sollicitudin, felis vitae consectetur tempus, turpis velit placerat ipsum, at lacinia nunc arcu eget ex. Proin sollicitudin augue sem, eu rhoncus diam pulvinar et. Vivamus at orci ante. Donec ac nunc purus. Vivamus pretium dolor vel laoreet sollicitudin. Curabitur finibus odio sed efficitur finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam varius diam iaculis cursus imperdiet. Nullam sed hendrerit quam. Aenean vitae erat a justo sollicitudin molestie non nec enim. Aliquam varius pellentesque convallis.</p><p>Donec luctus mauris id consequat hendrerit. In elementum est ac enim convallis euismod. Ut vitae augue eget enim luctus convallis. Sed arcu erat, malesuada ac tortor quis, pharetra volutpat orci. Donec non mauris eu purus elementum lacinia ac et ex. Ut rutrum turpis libero, vitae cursus dui tristique et. Mauris nec massa sed ligula pretium lacinia. Donec sed dapibus quam. Quisque sollicitudin quam sit amet dictum commodo. Aenean tristique, lorem id ullamcorper viverra, lacus sem rhoncus nulla, ut suscipit dolor urna eu lorem. Integer vestibulum, nisi at ultrices sodales, libero eros mollis nulla, ac blandit mauris nibh vel massa. Pellentesque a porta metus. Nulla blandit arcu ut justo pellentesque, et egestas risus tempus.</p><p>Phasellus vitae eros lorem. Praesent malesuada lectus a eleifend suscipit. Duis consectetur, ligula eu vulputate viverra, tortor turpis laoreet elit, eu hendrerit tortor ligula ut libero. Mauris interdum imperdiet eros, in gravida nunc consequat hendrerit. Proin non erat vel lorem rhoncus accumsan id ut arcu. Donec fermentum est at fermentum tincidunt. Fusce at cursus est. Aenean suscipit ante dolor, vel varius diam iaculis vel. Proin id libero metus. Praesent vehicula consequat mauris, id eleifend ex rutrum sed.</p>', 'Category9', 'cheminee.png', NULL),
(10, 'Article 10', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet, mauris vitae tincidunt lacinia, nunc sem condimentum sem, ultrices lobortis purus odio vitae metus. Nulla eget bibendum odio, eget aliquet dui. Aenean tincidunt neque ligula, sit amet volutpat ex ullamcorper ut. Donec convallis, justo sit amet pharetra gravida, lorem velit dapibus quam, quis pharetra nisl mi sit amet ligula. Mauris posuere pellentesque viverra. Phasellus ut nunc sed dui scelerisque porta. Phasellus nulla turpis, convallis sed ullamcorper sit amet, eleifend sed libero. Suspendisse potenti. Duis interdum vel enim vitae efficitur. Donec tincidunt ultrices dolor eu eleifend.</p><p>Proin accumsan erat et aliquam consequat. Ut sed fermentum ligula, a malesuada felis. Aliquam iaculis finibus est a pretium. Nunc vel commodo erat. Vivamus ac bibendum ex. Sed efficitur facilisis augue ut auctor. Aliquam sodales in massa nec tempor. Maecenas fringilla est non tristique malesuada. Ut sodales pretium pellentesque.</p><p>Etiam placerat tortor vel elit placerat, eu facilisis ligula congue. Sed pulvinar, lacus a feugiat pellentesque, enim augue cursus ex, ullamcorper dapibus justo justo in eros. Phasellus cursus, leo in elementum semper, lectus massa pellentesque nulla, vitae vehicula dui ipsum sit amet quam. Morbi tincidunt metus vel dignissim pharetra. Vivamus sollicitudin, felis vitae consectetur tempus, turpis velit placerat ipsum, at lacinia nunc arcu eget ex. Proin sollicitudin augue sem, eu rhoncus diam pulvinar et. Vivamus at orci ante. Donec ac nunc purus. Vivamus pretium dolor vel laoreet sollicitudin. Curabitur finibus odio sed efficitur finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam varius diam iaculis cursus imperdiet. Nullam sed hendrerit quam. Aenean vitae erat a justo sollicitudin molestie non nec enim. Aliquam varius pellentesque convallis.</p><p>Donec luctus mauris id consequat hendrerit. In elementum est ac enim convallis euismod. Ut vitae augue eget enim luctus convallis. Sed arcu erat, malesuada ac tortor quis, pharetra volutpat orci. Donec non mauris eu purus elementum lacinia ac et ex. Ut rutrum turpis libero, vitae cursus dui tristique et. Mauris nec massa sed ligula pretium lacinia. Donec sed dapibus quam. Quisque sollicitudin quam sit amet dictum commodo. Aenean tristique, lorem id ullamcorper viverra, lacus sem rhoncus nulla, ut suscipit dolor urna eu lorem. Integer vestibulum, nisi at ultrices sodales, libero eros mollis nulla, ac blandit mauris nibh vel massa. Pellentesque a porta metus. Nulla blandit arcu ut justo pellentesque, et egestas risus tempus.</p><p>Phasellus vitae eros lorem. Praesent malesuada lectus a eleifend suscipit. Duis consectetur, ligula eu vulputate viverra, tortor turpis laoreet elit, eu hendrerit tortor ligula ut libero. Mauris interdum imperdiet eros, in gravida nunc consequat hendrerit. Proin non erat vel lorem rhoncus accumsan id ut arcu. Donec fermentum est at fermentum tincidunt. Fusce at cursus est. Aenean suscipit ante dolor, vel varius diam iaculis vel. Proin id libero metus. Praesent vehicula consequat mauris, id eleifend ex rutrum sed.</p>', 'Category10', 'cheminee.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Category1'),
(2, 'Category2'),
(3, 'Category3'),
(4, 'Category4'),
(5, 'Category5'),
(6, 'Category6'),
(7, 'Category7'),
(8, 'Category8'),
(9, 'Category9'),
(10, 'Category10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `roles`) VALUES
(1, 'tototo@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$93mA3KCm+JdcLpgnhR4nHg$UsFCuPSalEM+i/SaXA/tud6PLMuU/IACWuFXve7a64A', '[\"user\"]'),
(2, 'jojojo@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$8BsOf92l2GiCN+cDUXyenA$za8eEA8uRXDV6i3ZsYWOUC+0gnQSO/xLL5x0MbDg/mg', '[\"user\"]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
