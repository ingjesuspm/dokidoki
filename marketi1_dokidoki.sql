-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2018 at 03:08 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketi1_dokidoki`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(20) NOT NULL,
  `message` varchar(500) NOT NULL,
  `file` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `message`, `file`) VALUES
(1, 'Doki Doki Chocolate combines the sensibility and attention to detail of Japanese-style confectionery with a playful American-style party-rocking attitude to craft ridiculously delicious chocolate-covered pretzels your inner child won\'t soon forget!', 'about_5963fb1e6e5b9c97fa41feea2264e2f3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bestseller`
--

CREATE TABLE `bestseller` (
  `id` int(20) NOT NULL,
  `title1` varchar(500) NOT NULL,
  `price1` varchar(500) NOT NULL,
  `file1` varchar(567) NOT NULL,
  `title2` varchar(500) NOT NULL,
  `price2` varchar(500) NOT NULL,
  `file2` varchar(567) NOT NULL,
  `title3` varchar(500) NOT NULL,
  `price3` varchar(500) NOT NULL,
  `file3` varchar(567) NOT NULL,
  `title4` varchar(500) NOT NULL,
  `price4` varchar(500) NOT NULL,
  `file4` varchar(567) NOT NULL,
  `title5` varchar(500) NOT NULL,
  `price5` varchar(500) NOT NULL,
  `file5` varchar(567) NOT NULL,
  `title6` varchar(500) NOT NULL,
  `price6` varchar(500) NOT NULL,
  `file6` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bestseller`
--

INSERT INTO `bestseller` (`id`, `title1`, `price1`, `file1`, `title2`, `price2`, `file2`, `title3`, `price3`, `file3`, `title4`, `price4`, `file4`, `title5`, `price5`, `file5`, `title6`, `price6`, `file6`) VALUES
(1, 'Delicious Double Chocolate', '$1-$10', 'bestseller_d68ba0c7d68af3dbb5a84b223cf27f60.jpg', 'Peanut Butter Triple Chocolate', '$2-$20', 'bestseller_d6365dfa4c01317469ebd93515e9a906.jpg', 'Matcha (Japanese Green Tea)', '$2-$20', 'bestseller_04fd273dff5f67af2fcc2fa61c622e3a.jpg', 'Pumpkin Pie', '$3-$30', 'bestseller_75b0a48385b8058aac119ac7197e0aae.jpg', 'Vegan Delight', '$3-$30', 'bestseller_f28b4aa5800f02bca831607dae673321.jpg', 'Titan Pretzel', '$5-$50', 'bestseller_c3e9977f345dce79a890e0c3465b8468.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `id` int(20) NOT NULL,
  `label` varchar(500) NOT NULL,
  `file` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`id`, `label`, `file`) VALUES
(1, 'A chocolate party sized for up to 50 people. We bring enough pretzels and sweets to make sure that each guest gets at least 3 items each! Every party is unique, and we are happy to make the Doki Doki experience at your party unique too. Just ask, and we will prepare sweets that are friendly to special diets, unique flavor combinations, and fancy colors to match your theme!', 'catering_3e69b8fb419766c89bedf11bcd5b5168.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `daily`
--

CREATE TABLE `daily` (
  `id` int(20) NOT NULL,
  `title1` varchar(500) NOT NULL,
  `label1` varchar(500) NOT NULL,
  `file1` varchar(567) NOT NULL,
  `title2` varchar(500) NOT NULL,
  `label2` varchar(500) NOT NULL,
  `file2` varchar(567) NOT NULL,
  `title3` varchar(500) NOT NULL,
  `label3` varchar(500) NOT NULL,
  `file3` varchar(567) NOT NULL,
  `title4` varchar(500) NOT NULL,
  `label4` varchar(500) NOT NULL,
  `file4` varchar(567) NOT NULL,
  `title5` varchar(500) NOT NULL,
  `label5` varchar(500) NOT NULL,
  `file5` varchar(567) NOT NULL,
  `title6` varchar(500) NOT NULL,
  `label6` varchar(500) NOT NULL,
  `file6` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `daily`
--

INSERT INTO `daily` (`id`, `title1`, `label1`, `file1`, `title2`, `label2`, `file2`, `title3`, `label3`, `file3`, `title4`, `label4`, `file4`, `title5`, `label5`, `file5`, `title6`, `label6`, `file6`) VALUES
(1, 'We Do Pretzel Right', 'Stocked up the shop today with a couple hundred delicious pretzels.', 'daily_114b50e077a9cb7795779ad212ba66ea.jpg', 'It\'s That Pretzel Feeling', 'We love making custom chocolate pretzels to fit your party theme!', 'daily_e310ebbb0a31a36ba25cad22d206e603.jpg', 'There Ain\'t No Party Like A Pretzel Party', 'If you are looking for a pretzel catering you are in the right place', 'daily_28eef1369e34d4b8869f34ef8cb950f3.jpg', 'More Pretzel Please', 'Matcha pretzels now come with dark chocolate drizzle!.', 'daily_42feda05079ec1a50587b917ea283dd7.jpg', 'Happiness is Pretzel-Shaped', 'Party Buckets are now available at SEED Ventures!.', 'daily_2827c7e7c5264b2a992e18d1983d23a6.jpg', 'Pretzel Wanted', 'Spontaneous smores experiment at a totally awesome gig.', 'daily_f7b9d30515538d798e8e52dba1b488b1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(20) NOT NULL,
  `file1` varchar(567) NOT NULL,
  `file2` varchar(567) NOT NULL,
  `file3` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `file1`, `file2`, `file3`) VALUES
(1, 'gallery_499d98f967dbf48c505d2154ebd4c248.jpg', 'gallery_1c3d7c92d1d3aec7568c477d570a9121.jpg', 'gallery_88427ea60471ce1d1527dce0713e55ec.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(20) NOT NULL,
  `location` varchar(500) NOT NULL,
  `file` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location`, `file`) VALUES
(1, '', 'location_226da7031f7adf9cafdb7af91a6a2d23.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(20) NOT NULL,
  `title1` varchar(500) NOT NULL,
  `file1` varchar(567) NOT NULL,
  `product1` varchar(500) NOT NULL,
  `price1` varchar(500) NOT NULL,
  `detail1` varchar(500) NOT NULL,
  `product2` varchar(500) NOT NULL,
  `price2` varchar(500) NOT NULL,
  `detail2` varchar(500) NOT NULL,
  `product3` varchar(500) NOT NULL,
  `price3` varchar(500) NOT NULL,
  `detail3` varchar(500) NOT NULL,
  `title2` varchar(500) NOT NULL,
  `file2` varchar(567) NOT NULL,
  `product4` varchar(500) NOT NULL,
  `price4` varchar(500) NOT NULL,
  `detail4` varchar(500) NOT NULL,
  `product5` varchar(500) NOT NULL,
  `price5` varchar(500) NOT NULL,
  `detail5` varchar(500) NOT NULL,
  `product6` varchar(500) NOT NULL,
  `price6` varchar(500) NOT NULL,
  `detail6` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title1`, `file1`, `product1`, `price1`, `detail1`, `product2`, `price2`, `detail2`, `product3`, `price3`, `detail3`, `title2`, `file2`, `product4`, `price4`, `detail4`, `product5`, `price5`, `detail5`, `product6`, `price6`, `detail6`) VALUES
(1, 'Starters', 'menu_4c5e464c496ab14f4f885dca6d9b362e.jpg', 'Party Buckets', '$30', 'They have 12 Delicious Double Chocolate pretzels and 3 of each of Peanut Butter Tripple Chocolate, Matcha, Coffee and Cream, and Pumpkin Pie!', 'Matcha Japanese Green Tea', '$2', 'This unique treat is made of a base layer matcha-infused white chocolate which is then drizzled in white chocolate for a super smooth experience', 'Coffee and Cream', '$3', 'This amazing masterpiece has a base layer of dark chocolate, slathered in hazelnut spread, rolled in ground coffee, then drizzled in milk and white chocolate. So, so, good...', 'Chocolate', 'menu_38697e6f821461e398a4e6dc559a744c.jpg', 'Delicious Double Chocolate', '$1', 'Delicious Double Chocolate pretzels come in 9 combinations of one base layer of dark, milk, or white chocolate drizzled in dark, milk, or white chocolate.', 'Titan Pretzel', '$5', 'Dark chocolate, slathered in peanut butter, rolled in chopped mixed nuts, then drizzled in enough milk and white chocolate to keep it from crumbling under its own weight.', 'Pumpkin Pie', '$3', 'This wondrous masterpiece has a base layer of pumpkin spice-infused white chocolate, drizzled in white chocolate, rolled in a little bit of light brown sugar, drizzled one more time with white chocolate, and then splashed with pumpkin spice. It tastes like happiness...');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(20) NOT NULL,
  `comments1` varchar(500) NOT NULL,
  `author1` varchar(500) NOT NULL,
  `file1` varchar(567) NOT NULL,
  `comments2` varchar(500) NOT NULL,
  `author2` varchar(500) NOT NULL,
  `file2` varchar(567) NOT NULL,
  `comments3` varchar(500) NOT NULL,
  `author3` varchar(500) NOT NULL,
  `file3` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `comments1`, `author1`, `file1`, `comments2`, `author2`, `file2`, `comments3`, `author3`, `file3`) VALUES
(1, 'Corey and I look forward to our Friday party date at DokiDoki Chocolate! Pretzels were excellent and the service was warm and friendly!', 'Alexander Smith', 'reviews_355367ba16e89d32142167587e5c9ea2.jpg', 'Regardless of wether it\'s bloomed, droopy, burnt, or not, real chocolate is delicious, Thanks Corey!', 'Brian Horton', 'reviews_288796c9ca4c84088738e8465a056992.jpg', 'This is what happens to people who try Doki Doki Chocolate-covered pretzels. I\'ve come to call it the doki doki face XD.', 'Maureen Brouillard', 'reviews_eb5ad2c8a559da7654f293be202c8cc0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(45) NOT NULL,
  `site_title` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `site_desc` varchar(350) NOT NULL,
  `site_keyword` varchar(250) NOT NULL,
  `google_code` varchar(1000) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(60) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `facebook` varchar(45) NOT NULL,
  `twitter` varchar(34) NOT NULL,
  `linkedin` varchar(45) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_title`, `email`, `site_desc`, `site_keyword`, `google_code`, `street`, `city`, `country`, `phone`, `facebook`, `twitter`, `linkedin`, `status`) VALUES
(1, 'Doki Doki Chocolate', 'Doki Doki Chocolate', 'dokidokichocolate@gmail.com', 'Doki Doki Chocolate', 'Doki Doki Chocolate', '', '344 Oxford Ave. Elyria Ohio, 44035', 'Elyria OH', 'USA', '', 'dokidokichocolate', 'thedokidoki', '', 'dokidokichocolate');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(20) NOT NULL,
  `product1` varchar(500) NOT NULL,
  `price1` varchar(500) NOT NULL,
  `title1` varchar(500) NOT NULL,
  `composition1` varchar(500) NOT NULL,
  `file1` varchar(567) NOT NULL,
  `product2` varchar(500) NOT NULL,
  `price2` varchar(500) NOT NULL,
  `title2` varchar(500) NOT NULL,
  `composition2` varchar(500) NOT NULL,
  `file2` varchar(567) NOT NULL,
  `product3` varchar(500) NOT NULL,
  `price3` varchar(500) NOT NULL,
  `title3` varchar(500) NOT NULL,
  `composition3` varchar(500) NOT NULL,
  `file3` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `product1`, `price1`, `title1`, `composition1`, `file1`, `product2`, `price2`, `title2`, `composition2`, `file2`, `product3`, `price3`, `title3`, `composition3`, `file3`) VALUES
(1, 'Supreme', '$2 - $20', 'Peanut Butter Triple Chocolate.', 'The most popular of the excellent pretzels, this natural favorite is composed of a base layer of dark chocolate, slathered in all natural peanut butter, drizzled in milk and then white chocolate.', 'slider_55bc74c404dccc8e0fa274ee9048d510.jpg', 'Darked', '$1 - $10', 'Delicious Double Chocolate.', 'The entry-level pretzel. Delicious Double Chocolate pretzels come in 9 combinations of one base layer of dark, milk, or white chocolate drizzled in dark, milk, or white chocolate.', 'slider_f0a7d30d150e7c8bc5377e89267e0434.jpg', 'Veg', '$3 - $30', 'Vegan Delight.', 'This pretzel is made with chocolate that contains no milk products. It has two layers of dark chocolate, rolled in golden brown sugar for a touch of sweetness, texture, and color, then drizzled in dark chocolate.', 'slider_5c9362df29a195d799a395093b1ba9e8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `id` int(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `file` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`id`, `name`, `email`, `username`, `password`, `file`) VALUES
(1, 'admin', 'admin@blog.com', 'admin', 'admin01**', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_ads`
--

CREATE TABLE `table_ads` (
  `id` int(20) NOT NULL,
  `header_ads` varchar(500) NOT NULL,
  `side_ads` varchar(500) NOT NULL,
  `footer_ads` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_ads`
--

INSERT INTO `table_ads` (`id`, `header_ads`, `side_ads`, `footer_ads`) VALUES
(1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE `user_online` (
  `session` varchar(100) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`session`, `time`) VALUES
('f130e386f14e998e49860830d5cb78ed', 1536592080);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(20) NOT NULL,
  `video` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `video`) VALUES
(1, 'https://www.youtube.com/watch?v=QtEgxp0KUbY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bestseller`
--
ALTER TABLE `bestseller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily`
--
ALTER TABLE `daily`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_ads`
--
ALTER TABLE `table_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bestseller`
--
ALTER TABLE `bestseller`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daily`
--
ALTER TABLE `daily`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_ads`
--
ALTER TABLE `table_ads`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
