-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2021 at 03:58 AM
-- Server version: 10.2.39-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntwani_sacco`
--

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

CREATE TABLE `backup` (
  `id` int(200) NOT NULL,
  `tracking_id` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backup`
--

INSERT INTO `backup` (`id`, `tracking_id`, `amount`, `address`, `date_time`) VALUES
(10, 'Cryptos?rid=782752', '0.1', '134N7BmQZHSj2WU7kUaN8fFada32GpBXbg', '2017-04-03 21:37:40'),
(11, 'Cryptos?rid=782752', '0.1', '134N7BmQZHSj2WU7kUaN8fFada32GpBXbg', '2017-04-03 22:14:12'),
(15, 'Cryptos?rid=782752', '0.1', '134N7BmQZHSj2WU7kUaN8fFada32GpBXbg', '2017-04-03 23:30:28'),
(18, 'Cryptos?rid=782752', '0.15', '134N7BmQZHSj2WU7kUaN8fFada32GpBXbg', '2017-04-04 00:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `alpha_2` varchar(200) NOT NULL DEFAULT '',
  `alpha_3` varchar(200) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `alpha_2`, `alpha_3`) VALUES
(1, 'Afghanistan', 'fl', 'afg'),
(2, 'Uganda', 'ug', 'uga'),
(3, 'Zambia', 'zm', 'zmb'),
(4, 'Zimbabwe', 'zw', 'zwe');

-- --------------------------------------------------------

--
-- Table structure for table `emp_permission`
--

CREATE TABLE `emp_permission` (
  `id` int(20) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `module_name` varchar(350) NOT NULL,
  `pcreate` varchar(20) NOT NULL,
  `pread` varchar(20) NOT NULL,
  `pupdate` varchar(20) NOT NULL,
  `pdelete` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_permission`
--

INSERT INTO `emp_permission` (`id`, `tid`, `module_name`, `pcreate`, `pread`, `pupdate`, `pdelete`) VALUES
(46, 'Loan=21319580', 'Members', '1', '1', '1', '1'),
(47, 'Loan=21319580', 'Account Status', '1', '1', '1', '1'),
(48, 'Loan=21319580', 'Transactions', '1', '1', '1', '1'),
(51, 'Loan=21319580', 'Payment', '1', '1', '1', '1'),
(53, 'Loan=21319580', 'Module Permission', '1', '1', '1', '1'),
(54, 'Loan=21319580', 'Shares', '1', '1', '1', '1'),
(55, 'Loan=21319580', 'Loan Interest Ratio', '1', '1', '1', '1'),
(56, 'Loan=21319580', 'General Settings', '1', '1', '1', '0'),
(57, 'Loan=21319580', 'Transactions', '1', '1', '1', '1'),
(139, 'Save=172686353', 'Members', '0', '0', '0', '0'),
(140, 'Save=172686353', 'Account Status', '0', '1', '0', '0'),
(141, 'Save=172686353', 'Transactions', '0', '1', '0', '0'),
(142, 'Save=172686353', 'Payment', '0', '1', '0', '0'),
(143, 'Save=172686353', 'Module Permission', '0', '0', '0', '0'),
(144, 'Save=172686353', 'Shares', '0', '1', '0', '0'),
(145, 'Save=172686353', 'Loan Interest Ratio', '0', '0', '0', '0'),
(146, 'Save=172686353', 'General Settings', '0', '0', '0', '0'),
(147, 'Save=29289846', 'Members', '0', '1', '1', '0'),
(148, 'Save=29289846', 'Account Status', '0', '1', '0', '0'),
(149, 'Save=29289846', 'Transactions', '0', '1', '0', '0'),
(150, 'Save=29289846', 'Payment', '0', '1', '0', '0'),
(151, 'Save=29289846', 'Module Permission', '0', '0', '0', '0'),
(152, 'Save=29289846', 'Shares', '0', '1', '0', '0'),
(153, 'Save=29289846', 'Loan Interest Ratio', '0', '0', '0', '0'),
(154, 'Save=29289846', 'General Settings', '0', '0', '0', '0'),
(155, 'Save=117489709', 'Members', '0', '0', '0', '0'),
(156, 'Save=117489709', 'Account Status', '0', '1', '0', '0'),
(157, 'Save=117489709', 'Transactions', '0', '1', '0', '0'),
(158, 'Save=117489709', 'Payment', '0', '1', '0', '0'),
(159, 'Save=117489709', 'Module Permission', '0', '0', '0', '0'),
(160, 'Save=117489709', 'Shares', '0', '1', '0', '0'),
(161, 'Save=117489709', 'Loan Interest Ratio', '0', '0', '0', '0'),
(162, 'Save=117489709', 'General Settings', '0', '0', '0', '0'),
(163, 'Save=127536278', 'Members', '1', '1', '1', '1'),
(164, 'Save=127536278', 'Account Status', '1', '1', '1', '1'),
(165, 'Save=127536278', 'Transactions', '1', '1', '1', '1'),
(166, 'Save=127536278', 'Payment', '1', '1', '1', '1'),
(167, 'Save=127536278', 'Module Permission', '1', '1', '1', '1'),
(168, 'Save=127536278', 'Shares', '1', '1', '1', '1'),
(169, 'Save=127536278', 'Loan Interest Ratio', '1', '1', '1', '1'),
(170, 'Save=127536278', 'General Settings', '1', '1', '1', '0'),
(171, 'Save=28410630', 'Members', '0', '1', '1', '0'),
(172, 'Save=28410630', 'Account Status', '0', '1', '0', '0'),
(173, 'Save=28410630', 'Transactions', '0', '1', '0', '0'),
(174, 'Save=28410630', 'Payment', '0', '1', '0', '0'),
(175, 'Save=28410630', 'Module Permission', '0', '0', '0', '0'),
(176, 'Save=28410630', 'Shares', '0', '1', '0', '0'),
(177, 'Save=28410630', 'Loan Interest Ratio', '0', '0', '0', '0'),
(178, 'Save=28410630', 'General Settings', '0', '0', '0', '0'),
(195, 'Save=88831569', 'Members', '0', '0', '0', '0'),
(196, 'Save=88831569', 'Account Status', '0', '1', '0', '0'),
(197, 'Save=88831569', 'Transactions', '0', '1', '0', '0'),
(198, 'Save=88831569', 'Payment', '0', '1', '0', '0'),
(199, 'Save=88831569', 'Module Permission', '0', '0', '0', '0'),
(200, 'Save=88831569', 'Shares', '0', '1', '0', '0'),
(201, 'Save=88831569', 'Loan Interest Ratio', '0', '0', '0', '0'),
(202, 'Save=88831569', 'General Settings', '0', '0', '0', '0'),
(203, 'Save=315094697', 'Members', '0', '0', '0', '0'),
(204, 'Save=315094697', 'Account Status', '0', '1', '0', '0'),
(205, 'Save=315094697', 'Transactions', '0', '1', '0', '0'),
(206, 'Save=315094697', 'Payment', '0', '1', '0', '0'),
(207, 'Save=315094697', 'Module Permission', '0', '0', '0', '0'),
(208, 'Save=315094697', 'Shares', '0', '1', '0', '0'),
(209, 'Save=315094697', 'Loan Interest Ratio', '0', '0', '0', '0'),
(210, 'Save=315094697', 'General Settings', '0', '0', '0', '0'),
(211, 'Save=84980913', 'Members', '0', '0', '0', '0'),
(212, 'Save=84980913', 'Account Status', '0', '1', '0', '0'),
(213, 'Save=84980913', 'Transactions', '0', '1', '0', '0'),
(214, 'Save=84980913', 'Payment', '0', '1', '0', '0'),
(215, 'Save=84980913', 'Module Permission', '0', '0', '0', '0'),
(216, 'Save=84980913', 'Shares', '0', '1', '0', '0'),
(217, 'Save=84980913', 'Loan Interest Ratio', '0', '0', '0', '0'),
(218, 'Save=84980913', 'General Settings', '0', '0', '0', '0'),
(219, 'Save=133921604', 'Members', '0', '0', '0', '0'),
(220, 'Save=133921604', 'Account Status', '0', '1', '0', '0'),
(221, 'Save=133921604', 'Transactions', '0', '1', '0', '0'),
(222, 'Save=133921604', 'Payment', '0', '1', '0', '0'),
(223, 'Save=133921604', 'Module Permission', '0', '0', '0', '0'),
(224, 'Save=133921604', 'Shares', '0', '1', '0', '0'),
(225, 'Save=133921604', 'Loan Interest Ratio', '0', '0', '0', '0'),
(226, 'Save=133921604', 'General Settings', '0', '0', '0', '0'),
(227, 'Save=77662480', 'Members', '0', '0', '0', '0'),
(228, 'Save=77662480', 'Account Status', '0', '1', '0', '0'),
(229, 'Save=77662480', 'Transactions', '0', '1', '0', '0'),
(230, 'Save=77662480', 'Payment', '0', '1', '0', '0'),
(231, 'Save=77662480', 'Module Permission', '0', '0', '0', '0'),
(232, 'Save=77662480', 'Shares', '0', '1', '0', '0'),
(233, 'Save=77662480', 'Loan Interest Ratio', '0', '0', '0', '0'),
(234, 'Save=77662480', 'General Settings', '0', '0', '0', '0'),
(235, 'Save=254577708', 'Members', '1', '1', '1', '1'),
(236, 'Save=254577708', 'Account Status', '1', '1', '1', '1'),
(237, 'Save=254577708', 'Transactions', '1', '1', '1', '1'),
(238, 'Save=254577708', 'Payment', '1', '1', '1', '1'),
(239, 'Save=254577708', 'Module Permission', '1', '1', '1', '1'),
(240, 'Save=254577708', 'Shares', '1', '1', '1', '1'),
(241, 'Save=254577708', 'Loan Interest Ratio', '1', '1', '1', '1'),
(242, 'Save=254577708', 'General Settings', '1', '1', '1', '0'),
(243, 'Save=159148021', 'Members', '0', '0', '0', '0'),
(244, 'Save=159148021', 'Account Status', '0', '1', '0', '0'),
(245, 'Save=159148021', 'Transactions', '0', '1', '0', '0'),
(246, 'Save=159148021', 'Payment', '0', '1', '0', '0'),
(247, 'Save=159148021', 'Module Permission', '0', '0', '0', '0'),
(248, 'Save=159148021', 'Shares', '0', '1', '0', '0'),
(249, 'Save=159148021', 'Loan Interest Ratio', '0', '0', '0', '0'),
(250, 'Save=159148021', 'General Settings', '0', '0', '0', '0'),
(251, 'Save=78044334', 'Members', '0', '0', '0', '0'),
(252, 'Save=78044334', 'Account Status', '0', '1', '0', '0'),
(253, 'Save=78044334', 'Transactions', '0', '1', '0', '0'),
(254, 'Save=78044334', 'Payment', '0', '1', '0', '0'),
(255, 'Save=78044334', 'Module Permission', '0', '0', '0', '0'),
(256, 'Save=78044334', 'Shares', '0', '1', '0', '0'),
(257, 'Save=78044334', 'Loan Interest Ratio', '0', '0', '0', '0'),
(258, 'Save=78044334', 'General Settings', '0', '0', '0', '0'),
(259, 'Save=183536355', 'Members', '1', '1', '1', '0'),
(260, 'Save=183536355', 'Account Status', '1', '1', '1', '0'),
(261, 'Save=183536355', 'Transactions', '1', '1', '1', '0'),
(262, 'Save=183536355', 'Payment', '1', '1', '1', '0'),
(263, 'Save=183536355', 'Module Permission', '1', '1', '1', '0'),
(264, 'Save=183536355', 'Shares', '1', '1', '1', '0'),
(265, 'Save=183536355', 'Loan Interest Ratio', '1', '1', '1', '0'),
(266, 'Save=183536355', 'General Settings', '1', '1', '1', '0'),
(267, 'Save=228285659', 'Members', '0', '0', '0', '0'),
(268, 'Save=228285659', 'Account Status', '0', '1', '0', '0'),
(269, 'Save=228285659', 'Transactions', '0', '1', '0', '0'),
(270, 'Save=228285659', 'Payment', '0', '1', '0', '0'),
(271, 'Save=228285659', 'Module Permission', '0', '0', '0', '0'),
(272, 'Save=228285659', 'Shares', '0', '1', '0', '0'),
(273, 'Save=228285659', 'Loan Interest Ratio', '0', '0', '0', '0'),
(274, 'Save=228285659', 'General Settings', '0', '0', '0', '0'),
(275, 'Save=73191335', 'Members', '0', '0', '0', '0'),
(276, 'Save=73191335', 'Account Status', '0', '1', '0', '0'),
(277, 'Save=73191335', 'Transactions', '0', '1', '0', '0'),
(278, 'Save=73191335', 'Payment', '0', '1', '0', '0'),
(279, 'Save=73191335', 'Module Permission', '0', '0', '0', '0'),
(280, 'Save=73191335', 'Shares', '0', '1', '0', '0'),
(281, 'Save=73191335', 'Loan Interest Ratio', '0', '0', '0', '0'),
(282, 'Save=73191335', 'General Settings', '0', '0', '0', '0'),
(283, 'Save=253776797', 'Members', '0', '0', '0', '0'),
(284, 'Save=253776797', 'Account Status', '0', '1', '0', '0'),
(285, 'Save=253776797', 'Transactions', '0', '1', '0', '0'),
(286, 'Save=253776797', 'Payment', '0', '1', '0', '0'),
(287, 'Save=253776797', 'Module Permission', '0', '0', '0', '0'),
(288, 'Save=253776797', 'Shares', '0', '1', '0', '0'),
(289, 'Save=253776797', 'Loan Interest Ratio', '0', '0', '0', '0'),
(290, 'Save=253776797', 'General Settings', '0', '0', '0', '0'),
(291, 'Save=143566782', 'Members', '0', '0', '0', '0'),
(292, 'Save=143566782', 'Account Status', '0', '1', '0', '0'),
(293, 'Save=143566782', 'Transactions', '0', '1', '0', '0'),
(294, 'Save=143566782', 'Payment', '0', '1', '0', '0'),
(295, 'Save=143566782', 'Module Permission', '0', '0', '0', '0'),
(296, 'Save=143566782', 'Shares', '0', '1', '0', '0'),
(297, 'Save=143566782', 'Loan Interest Ratio', '0', '0', '0', '0'),
(298, 'Save=143566782', 'General Settings', '0', '0', '0', '0'),
(307, 'Save=177935266', 'Members', '0', '0', '0', '0'),
(308, 'Save=177935266', 'Account Status', '0', '1', '0', '0'),
(309, 'Save=177935266', 'Transactions', '0', '1', '0', '0'),
(310, 'Save=177935266', 'Payment', '0', '1', '0', '0'),
(311, 'Save=177935266', 'Module Permission', '0', '0', '0', '0'),
(312, 'Save=177935266', 'Shares', '0', '1', '0', '0'),
(313, 'Save=177935266', 'Loan Interest Ratio', '0', '0', '0', '0'),
(314, 'Save=177935266', 'General Settings', '0', '0', '0', '0'),
(315, 'Save=55337421', 'Members', '0', '0', '0', '0'),
(316, 'Save=55337421', 'Account Status', '0', '1', '0', '0'),
(317, 'Save=55337421', 'Transactions', '0', '1', '0', '0'),
(318, 'Save=55337421', 'Payment', '0', '1', '0', '0'),
(319, 'Save=55337421', 'Module Permission', '0', '0', '0', '0'),
(320, 'Save=55337421', 'Shares', '0', '1', '0', '0'),
(321, 'Save=55337421', 'Loan Interest Ratio', '0', '0', '0', '0'),
(322, 'Save=55337421', 'General Settings', '0', '0', '0', '0'),
(323, 'Save=253197930', 'Members', '0', '0', '0', '0'),
(324, 'Save=253197930', 'Account Status', '0', '1', '0', '0'),
(325, 'Save=253197930', 'Transactions', '0', '1', '0', '0'),
(326, 'Save=253197930', 'Payment', '0', '1', '0', '0'),
(327, 'Save=253197930', 'Module Permission', '0', '0', '0', '0'),
(328, 'Save=253197930', 'Shares', '0', '1', '0', '0'),
(329, 'Save=253197930', 'Loan Interest Ratio', '0', '0', '0', '0'),
(330, 'Save=253197930', 'General Settings', '0', '0', '0', '0'),
(331, 'Save=230214934', 'Members', '0', '0', '0', '0'),
(332, 'Save=230214934', 'Account Status', '0', '1', '0', '0'),
(333, 'Save=230214934', 'Transactions', '0', '1', '0', '0'),
(334, 'Save=230214934', 'Payment', '0', '1', '0', '0'),
(335, 'Save=230214934', 'Module Permission', '0', '0', '0', '0'),
(336, 'Save=230214934', 'Shares', '0', '1', '0', '0'),
(337, 'Save=230214934', 'Loan Interest Ratio', '0', '0', '0', '0'),
(338, 'Save=230214934', 'General Settings', '0', '0', '0', '0'),
(339, 'Save=78814264', 'Members', '0', '0', '0', '0'),
(340, 'Save=78814264', 'Account Status', '0', '1', '0', '0'),
(341, 'Save=78814264', 'Transactions', '0', '1', '0', '0'),
(342, 'Save=78814264', 'Payment', '0', '1', '0', '0'),
(343, 'Save=78814264', 'Module Permission', '0', '0', '0', '0'),
(344, 'Save=78814264', 'Shares', '0', '1', '0', '0'),
(345, 'Save=78814264', 'Loan Interest Ratio', '0', '0', '0', '0'),
(346, 'Save=78814264', 'General Settings', '0', '0', '0', '0'),
(347, 'Save=284341143', 'Members', '0', '0', '0', '0'),
(348, 'Save=284341143', 'Account Status', '0', '1', '0', '0'),
(349, 'Save=284341143', 'Transactions', '0', '1', '0', '0'),
(350, 'Save=284341143', 'Payment', '0', '1', '0', '0'),
(351, 'Save=284341143', 'Module Permission', '0', '0', '0', '0'),
(352, 'Save=284341143', 'Shares', '0', '1', '0', '0'),
(353, 'Save=284341143', 'Loan Interest Ratio', '0', '0', '0', '0'),
(354, 'Save=284341143', 'General Settings', '0', '0', '0', '0'),
(355, 'Save=177238683', 'Members', '0', '0', '0', '0'),
(356, 'Save=177238683', 'Account Status', '0', '1', '0', '0'),
(357, 'Save=177238683', 'Transactions', '0', '1', '0', '0'),
(358, 'Save=177238683', 'Payment', '0', '1', '0', '0'),
(359, 'Save=177238683', 'Module Permission', '0', '0', '0', '0'),
(360, 'Save=177238683', 'Shares', '0', '1', '0', '0'),
(361, 'Save=177238683', 'Loan Interest Ratio', '0', '0', '0', '0'),
(362, 'Save=177238683', 'General Settings', '0', '0', '0', '0'),
(363, 'Save=23458707', 'Members', '0', '0', '0', '0'),
(364, 'Save=23458707', 'Account Status', '0', '1', '0', '0'),
(365, 'Save=23458707', 'Transactions', '0', '1', '0', '0'),
(366, 'Save=23458707', 'Payment', '0', '1', '0', '0'),
(367, 'Save=23458707', 'Module Permission', '0', '0', '0', '0'),
(368, 'Save=23458707', 'Shares', '0', '1', '0', '0'),
(369, 'Save=23458707', 'Loan Interest Ratio', '0', '0', '0', '0'),
(370, 'Save=23458707', 'General Settings', '0', '0', '0', '0'),
(371, 'Save=95331011', 'Members', '0', '0', '0', '0'),
(372, 'Save=95331011', 'Account Status', '0', '1', '0', '0'),
(373, 'Save=95331011', 'Transactions', '0', '1', '0', '0'),
(374, 'Save=95331011', 'Payment', '0', '1', '0', '0'),
(375, 'Save=95331011', 'Module Permission', '0', '0', '0', '0'),
(376, 'Save=95331011', 'Shares', '0', '1', '0', '0'),
(377, 'Save=95331011', 'Loan Interest Ratio', '0', '0', '0', '0'),
(378, 'Save=95331011', 'General Settings', '0', '0', '0', '0'),
(379, 'Save=118004537', 'Members', '0', '0', '0', '0'),
(380, 'Save=118004537', 'Account Status', '0', '1', '0', '0'),
(381, 'Save=118004537', 'Transactions', '0', '1', '0', '0'),
(382, 'Save=118004537', 'Payment', '0', '1', '0', '0'),
(383, 'Save=118004537', 'Module Permission', '0', '0', '0', '0'),
(384, 'Save=118004537', 'Shares', '0', '1', '0', '0'),
(385, 'Save=118004537', 'Loan Interest Ratio', '0', '0', '0', '0'),
(386, 'Save=118004537', 'General Settings', '0', '0', '0', '0'),
(387, 'Save=106394616', 'Members', '0', '0', '0', '0'),
(388, 'Save=106394616', 'Account Status', '0', '1', '0', '0'),
(389, 'Save=106394616', 'Transactions', '0', '1', '0', '0'),
(390, 'Save=106394616', 'Payment', '0', '1', '0', '0'),
(391, 'Save=106394616', 'Module Permission', '0', '0', '0', '0'),
(392, 'Save=106394616', 'Shares', '0', '1', '0', '0'),
(393, 'Save=106394616', 'Loan Interest Ratio', '0', '0', '0', '0'),
(394, 'Save=106394616', 'General Settings', '0', '0', '0', '0'),
(395, 'Save=198863730', 'Members', '0', '0', '0', '0'),
(396, 'Save=198863730', 'Account Status', '0', '1', '0', '0'),
(397, 'Save=198863730', 'Transactions', '0', '1', '0', '0'),
(398, 'Save=198863730', 'Payment', '0', '1', '0', '0'),
(399, 'Save=198863730', 'Module Permission', '0', '0', '0', '0'),
(400, 'Save=198863730', 'Shares', '0', '1', '0', '0'),
(401, 'Save=198863730', 'Loan Interest Ratio', '0', '0', '0', '0'),
(402, 'Save=198863730', 'General Settings', '0', '0', '0', '0'),
(403, 'Save=95821061', 'Members', '0', '0', '0', '0'),
(404, 'Save=95821061', 'Account Status', '0', '1', '0', '0'),
(405, 'Save=95821061', 'Transactions', '0', '1', '0', '0'),
(406, 'Save=95821061', 'Payment', '0', '1', '0', '0'),
(407, 'Save=95821061', 'Module Permission', '0', '0', '0', '0'),
(408, 'Save=95821061', 'Shares', '0', '1', '0', '0'),
(409, 'Save=95821061', 'Loan Interest Ratio', '0', '0', '0', '0'),
(410, 'Save=95821061', 'General Settings', '0', '0', '0', '0'),
(411, 'Save=22091674', 'Members', '0', '0', '0', '0'),
(412, 'Save=22091674', 'Account Status', '0', '1', '0', '0'),
(413, 'Save=22091674', 'Transactions', '0', '1', '0', '0'),
(414, 'Save=22091674', 'Payment', '0', '1', '0', '0'),
(415, 'Save=22091674', 'Module Permission', '0', '0', '0', '0'),
(416, 'Save=22091674', 'Shares', '0', '1', '0', '0'),
(417, 'Save=22091674', 'Loan Interest Ratio', '0', '0', '0', '0'),
(418, 'Save=22091674', 'General Settings', '0', '0', '0', '0'),
(419, 'Save=15759824', 'Members', '0', '0', '0', '0'),
(420, 'Save=15759824', 'Account Status', '0', '1', '0', '0'),
(421, 'Save=15759824', 'Transactions', '0', '1', '0', '0'),
(422, 'Save=15759824', 'Payment', '0', '1', '0', '0'),
(423, 'Save=15759824', 'Module Permission', '0', '0', '0', '0'),
(424, 'Save=15759824', 'Shares', '0', '1', '0', '0'),
(425, 'Save=15759824', 'Loan Interest Ratio', '0', '0', '0', '0'),
(426, 'Save=15759824', 'General Settings', '0', '0', '0', '0'),
(427, 'Save=247986037', 'Members', '0', '0', '0', '0'),
(428, 'Save=247986037', 'Account Status', '0', '1', '0', '0'),
(429, 'Save=247986037', 'Transactions', '0', '1', '0', '0'),
(430, 'Save=247986037', 'Payment', '0', '1', '0', '0'),
(431, 'Save=247986037', 'Module Permission', '0', '0', '0', '0'),
(432, 'Save=247986037', 'Shares', '0', '1', '0', '0'),
(433, 'Save=247986037', 'Loan Interest Ratio', '0', '0', '0', '0'),
(434, 'Save=247986037', 'General Settings', '0', '0', '0', '0'),
(435, 'Save=222976179', 'Members', '0', '0', '0', '0'),
(436, 'Save=222976179', 'Account Status', '0', '1', '0', '0'),
(437, 'Save=222976179', 'Transactions', '0', '1', '0', '0'),
(438, 'Save=222976179', 'Payment', '0', '1', '0', '0'),
(439, 'Save=222976179', 'Module Permission', '0', '0', '0', '0'),
(440, 'Save=222976179', 'Shares', '0', '1', '0', '0'),
(441, 'Save=222976179', 'Loan Interest Ratio', '0', '0', '0', '0'),
(442, 'Save=222976179', 'General Settings', '0', '0', '0', '0'),
(451, 'Save=253763789', 'Members', '0', '0', '0', '0'),
(452, 'Save=253763789', 'Account Status', '0', '1', '0', '0'),
(453, 'Save=253763789', 'Transactions', '0', '1', '0', '0'),
(454, 'Save=253763789', 'Payment', '0', '1', '0', '0'),
(455, 'Save=253763789', 'Module Permission', '0', '0', '0', '0'),
(456, 'Save=253763789', 'Shares', '0', '1', '0', '0'),
(457, 'Save=253763789', 'Loan Interest Ratio', '0', '0', '0', '0'),
(458, 'Save=253763789', 'General Settings', '0', '0', '0', '0'),
(459, 'Save=153400605', 'Members', '0', '0', '0', '0'),
(460, 'Save=153400605', 'Account Status', '0', '1', '0', '0'),
(461, 'Save=153400605', 'Transactions', '0', '1', '0', '0'),
(462, 'Save=153400605', 'Payment', '0', '1', '0', '0'),
(463, 'Save=153400605', 'Module Permission', '0', '0', '0', '0'),
(464, 'Save=153400605', 'Shares', '0', '1', '0', '0'),
(465, 'Save=153400605', 'Loan Interest Ratio', '0', '0', '0', '0'),
(466, 'Save=153400605', 'General Settings', '0', '0', '0', '0'),
(467, 'Save=211310952', 'Members', '0', '0', '0', '0'),
(468, 'Save=211310952', 'Account Status', '0', '1', '0', '0'),
(469, 'Save=211310952', 'Transactions', '0', '1', '0', '0'),
(470, 'Save=211310952', 'Payment', '0', '1', '0', '0'),
(471, 'Save=211310952', 'Module Permission', '0', '0', '0', '0'),
(472, 'Save=211310952', 'Shares', '0', '1', '0', '0'),
(473, 'Save=211310952', 'Loan Interest Ratio', '0', '0', '0', '0'),
(474, 'Save=211310952', 'General Settings', '0', '0', '0', '0'),
(491, 'Save=69951198', 'Members', '0', '0', '0', '0'),
(492, 'Save=69951198', 'Account Status', '0', '1', '0', '0'),
(493, 'Save=69951198', 'Transactions', '0', '1', '0', '0'),
(494, 'Save=69951198', 'Payment', '0', '1', '0', '0'),
(495, 'Save=69951198', 'Module Permission', '0', '0', '0', '0'),
(496, 'Save=69951198', 'Shares', '0', '1', '0', '0'),
(497, 'Save=69951198', 'Loan Interest Ratio', '0', '0', '0', '0'),
(498, 'Save=69951198', 'General Settings', '0', '0', '0', '0'),
(499, 'Save=275793454', 'Members', '0', '0', '0', '0'),
(500, 'Save=275793454', 'Account Status', '0', '1', '0', '0'),
(501, 'Save=275793454', 'Transactions', '0', '1', '0', '0'),
(502, 'Save=275793454', 'Payment', '0', '1', '0', '0'),
(503, 'Save=275793454', 'Module Permission', '0', '0', '0', '0'),
(504, 'Save=275793454', 'Shares', '0', '1', '0', '0'),
(505, 'Save=275793454', 'Loan Interest Ratio', '0', '0', '0', '0'),
(506, 'Save=275793454', 'General Settings', '0', '0', '0', '0'),
(507, 'Save=91774641', 'Members', '0', '0', '0', '0'),
(508, 'Save=91774641', 'Account Status', '0', '1', '0', '0'),
(509, 'Save=91774641', 'Transactions', '0', '1', '0', '0'),
(510, 'Save=91774641', 'Payment', '0', '1', '0', '0'),
(511, 'Save=91774641', 'Module Permission', '0', '0', '0', '0'),
(512, 'Save=91774641', 'Shares', '0', '1', '0', '0'),
(513, 'Save=91774641', 'Loan Interest Ratio', '0', '0', '0', '0'),
(514, 'Save=91774641', 'General Settings', '0', '0', '0', '0'),
(515, 'Save=147210147', 'Members', '0', '0', '0', '0'),
(516, 'Save=147210147', 'Account Status', '0', '1', '0', '0'),
(517, 'Save=147210147', 'Transactions', '0', '1', '0', '0'),
(518, 'Save=147210147', 'Payment', '0', '1', '0', '0'),
(519, 'Save=147210147', 'Module Permission', '0', '0', '0', '0'),
(520, 'Save=147210147', 'Shares', '0', '1', '0', '0'),
(521, 'Save=147210147', 'Loan Interest Ratio', '0', '0', '0', '0'),
(522, 'Save=147210147', 'General Settings', '0', '0', '0', '0'),
(531, 'Save=114364895', 'Members', '0', '0', '0', '0'),
(532, 'Save=114364895', 'Account Status', '0', '1', '0', '0'),
(533, 'Save=114364895', 'Transactions', '0', '1', '0', '0'),
(534, 'Save=114364895', 'Payment', '0', '1', '0', '0'),
(535, 'Save=114364895', 'Module Permission', '0', '0', '0', '0'),
(536, 'Save=114364895', 'Shares', '0', '1', '0', '0'),
(537, 'Save=114364895', 'Loan Interest Ratio', '0', '0', '0', '0'),
(538, 'Save=114364895', 'General Settings', '0', '0', '0', '0'),
(547, 'Save=283210596', 'Members', '0', '0', '0', '0'),
(548, 'Save=283210596', 'Account Status', '0', '1', '0', '0'),
(549, 'Save=283210596', 'Transactions', '0', '1', '0', '0'),
(550, 'Save=283210596', 'Payment', '0', '1', '0', '0'),
(551, 'Save=283210596', 'Module Permission', '0', '0', '0', '0'),
(552, 'Save=283210596', 'Shares', '0', '1', '0', '0'),
(553, 'Save=283210596', 'Loan Interest Ratio', '0', '0', '0', '0'),
(554, 'Save=283210596', 'General Settings', '0', '0', '0', '0'),
(555, 'Save=67833386', 'Members', '0', '0', '0', '0'),
(556, 'Save=67833386', 'Account Status', '0', '1', '0', '0'),
(557, 'Save=67833386', 'Transactions', '0', '1', '0', '0'),
(558, 'Save=67833386', 'Payment', '0', '1', '0', '0'),
(559, 'Save=67833386', 'Module Permission', '0', '0', '0', '0'),
(560, 'Save=67833386', 'Shares', '0', '1', '0', '0'),
(561, 'Save=67833386', 'Loan Interest Ratio', '0', '0', '0', '0'),
(562, 'Save=67833386', 'General Settings', '0', '0', '0', '0'),
(563, 'Save=218170668', 'Members', '0', '0', '0', '0'),
(564, 'Save=218170668', 'Account Status', '0', '1', '0', '0'),
(565, 'Save=218170668', 'Transactions', '0', '1', '0', '0'),
(566, 'Save=218170668', 'Payment', '0', '1', '0', '0'),
(567, 'Save=218170668', 'Module Permission', '0', '0', '0', '0'),
(568, 'Save=218170668', 'Shares', '0', '1', '0', '0'),
(569, 'Save=218170668', 'Loan Interest Ratio', '0', '0', '0', '0'),
(570, 'Save=218170668', 'General Settings', '0', '0', '0', '0'),
(571, 'Save=190060669', 'Members', '0', '0', '0', '0'),
(572, 'Save=190060669', 'Account Status', '0', '1', '0', '0'),
(573, 'Save=190060669', 'Transactions', '0', '1', '0', '0'),
(574, 'Save=190060669', 'Payment', '0', '1', '0', '0'),
(575, 'Save=190060669', 'Module Permission', '0', '0', '0', '0'),
(576, 'Save=190060669', 'Shares', '0', '1', '0', '0'),
(577, 'Save=190060669', 'Loan Interest Ratio', '0', '0', '0', '0'),
(578, 'Save=190060669', 'General Settings', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(20) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `txid` varchar(200) NOT NULL,
  `narration` varchar(200) NOT NULL,
  `pay_date` varchar(200) NOT NULL,
  `type` text NOT NULL,
  `amount` varchar(200) NOT NULL,
  `teller` text NOT NULL,
  `remarks` text NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `tid`, `txid`, `narration`, `pay_date`, `type`, `amount`, `teller`, `remarks`, `date_time`) VALUES
(4, 'Loan=21319580', 'TX-644224', '15% withholding tax on interest from 2016', '2017-12-16', 'Others', '1620', 'Admin', '', '2021-05-16'),
(5, 'Loan=21319580', 'TX-215291', '15% withholding tax on interest from 2016', '2017-12-17', 'Others', '7653', 'Admin', '', '2021-05-17'),
(6, 'Loan=21319580', 'TX-901171', 'Bank charges on withdraws made ', '2017-12-16', 'Others', '10000', 'Admin', 'For 2017', '2021-05-16'),
(7, 'Loan=21319580', 'TX-242882', 'Related 10% exercise duty on all withdraws', '2017-12-16', 'Others', '1000', 'Admin', '', '2021-05-16'),
(8, 'Loan=21319580', 'TX-604452', '15% Withhold tax on interest for 2018', '2018-12-30', 'Others', '16974', 'Admin', '', '2021-05-16'),
(9, 'Loan=21319580', 'TX-507230', 'Bank charges on withdraws made', '2018-12-30', 'Others', '30000', 'Admin', '', '2021-05-16'),
(10, 'Loan=21319580', 'TX-991035', 'Related 10% (to June) & 15% (July onwards) excise duty on all withdraws', '2018-12-30', 'Others', '3900', 'Admin', '', '2021-05-16'),
(11, 'Loan=21319580', 'TX-986026', 'Purchase of receipt books in April 2018', '2018-04-29', 'Others', '50000', 'Admin', '', '2021-05-16'),
(12, 'Loan=21319580', 'TX-836038', 'Profit Sharing among 30 Members', '2018-12-31', 'Others', '1200000', 'Admin', '', '2021-05-16'),
(13, 'Loan=21319580', 'TX-533998', 'AGM Drinks', '2018-12-30', 'Others', '300000', 'Admin', '', '2021-05-16'),
(14, 'Loan=21319580', 'TX-988474', '15% withholding tax on interest for 2019', '2019-12-31', 'Others', '259022', 'Admin', '', '2021-05-16'),
(15, 'Loan=21319580', 'TX-779185', 'Bank charges on withdraws made', '2019-12-31', 'Others', '102000', 'Admin', '', '2021-05-16'),
(16, 'Loan=21319580', 'TX-933468', 'Related 15% excise duty on all withdraws', '2019-12-31', 'Others', '15300', 'Admin', '', '2021-05-16'),
(17, 'Loan=21319580', 'TX-585230', 'Member Booklets', '2019-12-31', 'Others', '95000', 'Admin', '', '2021-05-16'),
(18, 'Loan=21319580', 'TX-533418', 'Awards for exceptional members', '2019-12-30', 'Administration', '240000', 'Admin', '', '2021-05-17'),
(19, 'Loan=21319580', 'TX-257956', 'Profit sharing for 48 members', '2019-12-31', 'Others', '5000000', 'Admin', '', '2021-05-17'),
(20, 'Loan=21319580', 'TX-811873', 'Withholding tax on bank interest', '2020-12-31', 'Others', '172901', 'Admin', '', '2021-05-17'),
(21, 'Loan=21319580', 'TX-566880', 'Bank Charges', '2021-01-01', 'Administration', '85100', 'Admin', '', '2021-05-17'),
(22, 'Loan=21319580', 'TX-793735', 'Facilitation for retreat in Oguzulu 2021', '2020-12-31', 'Administration', '1520000', 'Admin', '', '2021-05-17'),
(23, 'Loan=21319580', 'TX-352658', 'Interest Sharing ', '2020-12-31', 'Administration', '10120000', 'Admin', '', '2021-05-17'),
(24, 'Loan=21319580', 'TX-860282', 'Addition expenses on meals ', '2019-12-31', 'Administration', '270000', 'Admin', '', '2021-05-17'),
(25, 'Loan=21319580', 'TX-355596', 'Purchase of 2 receipt books', '2020-07-17', 'Administration', '60000', 'Admin', '', '2021-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(100) NOT NULL,
  `amount` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `amount`) VALUES
(1, 4168785);

-- --------------------------------------------------------

--
-- Table structure for table `last_update`
--

CREATE TABLE `last_update` (
  `id` int(100) NOT NULL,
  `updates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `last_update`
--

INSERT INTO `last_update` (`id`, `updates`) VALUES
(1, '2021-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `loan_info`
--

CREATE TABLE `loan_info` (
  `userid` int(20) NOT NULL,
  `id` varchar(100) NOT NULL,
  `loanId` varchar(100) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `account` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `loan` varchar(200) NOT NULL,
  `date_release` varchar(200) NOT NULL,
  `agent` varchar(200) NOT NULL,
  `g_name` varchar(200) NOT NULL,
  `g_phone` varchar(200) NOT NULL,
  `g_address` text NOT NULL,
  `remarks` text NOT NULL,
  `maturity_date` varchar(200) NOT NULL,
  `amount_to_pay` varchar(200) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `last_paid` varchar(100) NOT NULL,
  `Principal_Paid` varchar(200) NOT NULL,
  `Interest` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_info`
--

INSERT INTO `loan_info` (`userid`, `id`, `loanId`, `fname`, `lname`, `account`, `desc`, `loan`, `date_release`, `agent`, `g_name`, `g_phone`, `g_address`, `remarks`, `maturity_date`, `amount_to_pay`, `amount_paid`, `last_paid`, `Principal_Paid`, `Interest`) VALUES
(1, 'Save=117489709', '304449', 'Kakyomya', 'Raymond', '1003765123', 'Emergency', '2700000', '2017-12-02', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2018-03-02', '3024000', '3024000', '2018-03-02', '2700000', '324000'),
(2, 'Save=77662480', '310172', 'Luboobi', 'Johnmary', '1003558460', 'Emergency', '700000', '2017-12-05', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2018-03-01', '767000', '767000', '2018-03-02', '700000', '67000'),
(3, 'Save=84980913', '159732', 'Musisi', 'Deogratius', '1003667506', 'Exam', '350000', '2017-11-03', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2018-12-03', '372000', '372000', '2018-01-04', '350000', '22000'),
(4, 'Save=253197930', '316731', 'Kyaligonza', 'John Bosco', '1003820713', 'Emergency', '750000', '2017-12-06', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2018-04-07', '803000', '803000', '2018-03-06', '750000', '53000'),
(5, 'Save=230214934', '337599', 'Kimera', 'Richard', '1003426984', 'Working Capaital', '1500000', '2018-01-15', 'Admin', 'Kisakye Emma', '0701982137', 'Lungujja', '', '2018-06-15', '1900000', '1900000', '2018-07-10', '1500000', '400000'),
(6, 'Save=77662480', '173772', 'Luboobi', 'Johnmary', '1003558460', 'Emergency', '300000', '2018-01-29', 'Admin', 'Baganjana Ndawula', '0701318671', 'Kanyanya', '', '2018-02-10', '318000', '318000', '2018-02-10', '300000', '18000'),
(7, 'Save=84980913', '236364', 'Musisi', 'Deogratius', '1003667506', 'Exams', '600000', '2018-01-28', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2018-03-10', '623000', '623000', '2018-03-15', '600000', '23000'),
(8, 'Save=84980913', '268076', 'Musisi', 'Deogratius', '1003667506', 'Exams', '400000', '2019-03-03', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2018-05-10', '413000', '413000', '2018-06-10', '400000', '13000'),
(9, 'Save=177238683', '309766', 'Nabachwa', 'Barbara', '1003352703', 'Stock', '1000000', '2018-05-08', 'Admin', 'Katerega Teddy', '0701982137', 'Lungujja', '', '2018-12-06', '1177536', '1177536', '2018-12-06', '1000000', '177536'),
(10, 'Save=254577708', '110380', 'Ntale', 'Simon', '1003712665', 'Land Acquisition ', '4000000', '2018-06-01', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2019-07-02', '4500000', '4500000', '2019-06-01', '4000000', '500000'),
(11, 'Save=84980913', '297566', 'Musisi', 'Deogratius', '1003667506', 'Exams', '780000', '2018-06-04', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2018-08-11', '866000', '866000', '2018-08-11', '780000', '86000'),
(12, 'Save=253197930', '295005', 'Kyaligonza', 'John Bosco', '1003820713', 'Emergency', '260000', '2018-06-12', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2018-07-11', '267800', '267800', '2019-07-11', '260000', '7800'),
(13, 'Save=78044334', '207836', 'Baganjana', 'Ndawula', '1003986926', 'Emergency', '1500000', '2018-07-02', 'Admin', 'Baganjana Ndawula', '0701318671', 'Kanyanya', '', '2018-07-11', '1545000', '1545000', '2018-08-02', '1500000', '45000'),
(14, 'Save=253197930', '51356', 'Kyaligonza', 'John Bosco', '1003820713', 'Emergency', '310000', '2018-07-23', 'Admin', 'Kyaligonza John Bosco', '0701982137', '', '', '2018-08-12', '330000', '330000', '2019-08-11', '310000', '20000'),
(15, 'Save=183536355', '247158', 'Balikuddembe', 'John Fisher', '1003655767', 'Emergency', '1000000', '2018-08-02', 'Admin', 'Balikuddembe John Fisher', '0701982137', 'Kyaliwajala', '', '2018-10-11', '1124696', '1124696', '2018-09-11', '1000000', '124696'),
(16, 'Save=78814264', '334486', 'Tumuhaire', 'Flavia', '1003233169', 'Emergency', '1500000', '2018-10-11', 'Admin', 'Balikuddembe John Fisher', '0701982137', 'Kaliwajala', '', '2018-11-11', '1659472', '1659472', '2019-11-11', '1500000', '159472'),
(17, 'Save=253197930', '54002', 'Kyaligonza', 'John Bosco', '1003820713', 'Land Acquisition', '2100000', '2021-12-19', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2019-09-05', '2564000', '2564000', '2019-09-05', '2100000', '464000'),
(18, 'Save=78044334', '249064', 'Baganjana', 'Ndawula', '1003986926', 'Cattle Purchase', '2000000', '2020-12-22', 'Admin', 'Baganjana Ndawula', '0701318671', 'Kanyanya', '', '2019-03-11', '2120000', '2120000', '2019-03-11', '2000000', '120000'),
(19, 'Save=177238683', '269503', 'Nabachwa', 'Barbara', '1003352703', 'Business Stocking', '1500000', '2019-01-18', 'Admin', 'Katerega Teddy', '0701982137', 'Lungujja', '', '2019-06-11', '1664062', '1664062', '2019-06-11', '1500000', '164062'),
(20, 'Save=84980913', '153176', 'Musisi', 'Deogratius', '1003667506', 'Land Acquisition', '6000000', '2019-01-06', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2019-05-06', '6630000', '6630000', '2019-05-06', '6000000', '630000'),
(21, 'Save=172686353', '265166', 'Kisakye', 'Emma', '1003552975', 'Working Capital', '1000000', '2019-02-02', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2019-05-03', '1080000', '1080000', '2019-05-06', '1000000', '80000'),
(22, 'Save=153400605', '249660', 'Ndahura', 'Magdalene', '1003911781', 'Working Capital', '500000', '2019-02-13', 'Admin', 'Baganjana Ndawula', '0701318671', 'Kanyanya', '', '2019-06-12', '530000', '530000', '2019-06-12', '500000', '30000'),
(23, 'Save=147210147', '79463', 'Barongo', 'George', '1003252095', 'School Fees', '4500000', '2019-02-11', 'Admin', 'Admin Admin', '07019821', 'Kanyanya', '', '2019-06-11', '4986000', '4986000', '2021-05-11', '4500000', '486000'),
(24, 'Save=222976179', '208811', 'Nabadda', 'Mary', '1003613243', 'Working Capital', '1000000', '2019-03-22', 'Admin', 'Kisakye Emma', '0701982137', 'Kanyanya', '', '2019-06-22', '1092000', '1092000', '2019-06-22', '1000000', '92000'),
(25, 'Save=78044334', '123076', 'Baganjana', 'Ndawula', '1003986926', 'Home Development ', '4800000', '2019-04-02', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2019-07-12', '5570376', '5570376', '2019-06-12', '4800000', '770376'),
(26, 'Save=77662480', '297430', 'Luboobi', 'Johnmary', '1003558460', 'Emaergency', '250000', '2019-04-12', 'Admin', 'Luboobi Johnmary', '0704924316', 'Mubende', '', '2019-06-12', '262400', '262400', '2019-06-12', '250000', '12400'),
(27, 'Save=284341143', '42787', 'Nabadda', 'Catherine', '1003793087', 'House Renovation', '300000', '2019-05-08', 'Admin', 'Nabadda Catherine', '0701982137', 'Kyaliwajala', '', '2019-07-08', '374000', '374000', '2019-07-08', '300000', '74000'),
(28, 'Save=172686353', '89558', 'Kisakye', 'Emma', '1003552975', 'Working Capital', '1500000', '2019-07-12', 'Admin', 'Katerega Teddy', '0701982137', 'Lungujja', '', '2019-11-18', '1661000', '1661000', '2019-11-12', '1500000', '161000'),
(29, 'Save=78814264', '178453', 'Tumuhaire', 'Flavia', '1003233169', 'Home Development', '1500000', '2019-07-15', 'Admin', 'Balikuddembe John Fisher', '0701982137', 'kyaliwajala', '', '2019-10-15', '1748000', '1748000', '2019-10-15', '1500000', '248000'),
(30, 'Save=23458707', '295705', 'Nakasi', 'Annet', '1003102410', 'Asset Aquisition', '6000000', '2019-08-25', 'Admin', 'Kasirye Martin', '0701982137', 'Nyanama', '', '2019-11-22', '6645000', '6645000', '2019-11-25', '6000000', '645000'),
(31, 'Save=84980913', '12737', 'Musisi', 'Deogratius', '1003667506', 'Asset Acquisition', '9000000', '2021-08-09', 'Admin', 'Baganjana Ndawula', '0701318671', 'kanyanya', '', '2020-09-09', '10849905', '2820000', '2021-05-15', '2550000', '270000'),
(32, 'Save=127536278', '317658', 'Yawe', 'Tony', '1003343934', 'Emergency', '5000000', '2019-08-13', 'Admin', 'Yawe Tony', '0702518592', 'Katale', '', '2020-10-12', '5200000', '5200000', '2019-09-12', '5000000', '200000'),
(33, 'Save=147210147', '61537', 'Barongo', 'George', '1003252095', 'School Fees', '6000000', '2019-09-03', 'Admin', 'Admin Admin', '0701982137', 'kanyanya', '', '2019-11-03', '6623000', '6623000', '2019-11-02', '6000000', '623000'),
(34, 'Save=253197930', '228476', 'Kyaligonza', 'John Bosco', '1003820713', 'Assets Acquisition', '4000000', '2019-09-05', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2020-10-05', '4534000', '400000', '2019-11-12', '316000', '84000'),
(35, 'Save=78044334', '72024', 'Baganjana', 'Ndawula', '1003986926', 'School Fees', '400000', '2019-09-16', 'Admin', 'Baganjana Ndawula', '0701318671', 'kanyanya', '', '2019-10-12', '412000', '412000', '2019-10-12', '400000', '12000'),
(36, 'Save=73191335', '169987', 'Ndawula', 'Innocent', '1003506742', 'Emergency ', '2200000', '2019-09-15', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2019-12-12', '2266000', '2266000', '2019-12-23', '2200000', '66000'),
(37, 'Save=95331011', '158940', 'Kasirye', 'Martin', '1003765568', 'Working Capital', '3000000', '2019-09-10', 'Admin', 'Nakasi Annet', '0701982137', 'Nyanama', '', '2019-10-10', '3090000', '3090000', '2019-10-10', '3000000', '90000'),
(38, 'Save=55337421', '58886', 'Nandawula', 'Magret', '1003499783', 'Working Capital', '300000', '2019-11-19', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2020-05-12', '336000', '300000', '2021-06-12', '300000', '0'),
(39, 'Save=95331011', '29672', 'Kasirye', 'Martin', '1003765568', 'Working Capital', '2100000', '2019-11-12', 'Admin', 'Kasirye Martin', '0701982137', 'Nyanama', '', '2019-12-12', '2163000', '2163000', '2019-12-12', '2100000', '63000'),
(40, 'Save=183536355', '6727', 'Balikuddembe', 'John Fisher', '1003655767', 'Travels', '4000000', '2019-11-25', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2019-12-25', '4601500', '4601500', '2019-12-25', '4000000', '601500'),
(41, 'Save=153400605', '82383', 'Ndahura', 'Magdalene', '1003911781', 'Stocking', '500000', '2019-12-10', 'Admin', 'Baganjana Ndawula', '0701318671', 'Kanyanya', '', '2020-02-12', '542000', '542000', '2020-01-12', '500000', '42000'),
(42, 'Save=95331011', '73246', 'Kasirye', 'Martin', '1003765568', 'Working Capital', '1500000', '2020-01-10', 'Admin', 'Kasirye Martin', '0701982137', 'Nyanama', '', '2020-02-13', '1545000', '1545000', '2020-02-10', '1500000', '45000'),
(43, 'Save=147210147', '18749', 'Barongo', 'George', '1003252095', 'School Fees', '6000000', '2020-01-24', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2020-05-24', '6538100', '6538100', '2020-05-24', '6000000', '538100'),
(44, 'Save=190060669', '254871', 'Ndawula', 'Micheal', '1003399002', 'School Fees ', '500000', '2020-01-24', 'Admin', 'Ndawula Micheal', '0701982137', 'Nalubude', '', '2020-03-24', '530000', '530000', '2020-03-24', '500000', '30000'),
(45, 'Save=78044334', '197065', 'Baganjana', 'Ndawula', '1003986926', 'Asset Acquisition', '10000000', '2020-01-27', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2021-01-27', '11545000', '11545000', '2020-10-27', '0', '11545000'),
(46, 'Save=172686353', '245098', 'Kisakye', 'Emma', '1003552975', 'Working Capital', '2100000', '2020-02-07', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2020-06-07', '2300000', '2300000', '2020-04-13', '2100000', '200000'),
(47, 'Save=283210596', '28241', 'Ndawula', 'Rose', '1003300061', 'Working Capital', '1000000', '2020-02-18', 'Admin', 'Ndawula Micheal', '0701982137', 'Nalubude', '', '2020-07-18', '1110000', '1110000', '2020-06-18', '1000000', '110000'),
(48, 'Save=95331011', '32458', 'Kasirye', 'Martin', '1003765568', 'Working Capital', '3000000', '2020-02-18', 'Admin', 'Kasirye Martin', '0701982137', 'Nyanama', '', '2020-03-18', '3090000', '3090000', '2020-03-13', '3000000', '90000'),
(49, 'Save=254577708', '124517', 'Ntale', 'Simon', '1003712665', 'PURCHASE OF UAY278Q \r\n', '23000000', '2020-05-07', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', 'Taxi Project project borrowed money from the investment club', '2020-07-13', '27080000', '27080000', '2021-06-15', '2300000', '4080000'),
(50, 'Save=95331011', '274922', 'Kasirye', 'Martin', '1003765568', 'Working Capital', '5000000', '2020-06-30', 'Admin', 'Nakasi Annet', '0701982137', 'Nyanama', '', '2020-09-30', '5500000', '5500000', '2020-09-30', '5000000', '500000'),
(51, 'Save=198863730', '49030', 'Busulwa', 'Moses', '1003968978', 'Working Capital', '4000000', '2020-07-30', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2021-07-30', '4822180', '2290000', '2021-02-12', '1705300', '584700'),
(52, 'Save=147210147', '189945', 'Barongo', 'George', '1003252095', 'School Fees', '6000000', '2020-08-06', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2020-12-06', '6642000', '6642000', '2020-12-06', '6000000', '642000'),
(53, 'Save=106394616', '30821', 'Kaweesa', 'Irene', '1003213266', 'Emergency', '30000000', '2020-08-25', 'Admin', 'Kaweesa Fred', '0701982137', 'Kanyanya', '', '2020-11-25', '3180000', '3180000', '2020-11-13', '3000000', '180000'),
(54, 'Save=133921604', '317528', 'Tumusiime', 'Joseph', '1003182918', 'Land Acquisition', '2000000', '2020-09-28', 'Admin', 'Admin Admin', '070198213', 'Kanyanya', '', '2022-03-28', '2215170', '700000', '2020-11-02', '640000', '60000'),
(55, 'Save=172686353', '63501', 'Kisakye', 'Emma', '1003552975', 'Working Capital', '3000000', '2020-09-28', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2020-12-28', '3287867', '3287867', '2020-12-28', '3000000', '287867'),
(56, 'Save=67833386', '305980', 'Businge', 'Camilla', '1003159657', 'Emergency', '500000', '2020-10-02', 'Admin', 'Ntale Simon', '0701982137', 'Kanyanya', '', '2021-01-02', '530000', '530000', '2021-01-02', '500000', '30000'),
(57, 'Save=218170668', '267855', 'Namuli', 'carol', '1003167720', 'Working Capital', '4000000', '2020-12-10', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2021-12-10', '4822180', '0', '', '0', '0'),
(58, 'Save=190060669', '224102', 'Ndawula', 'Micheal', '1003399002', 'Emergency', '1000000', '2020-11-06', 'Admin', 'Ndawula Micheal', '0701982137', 'Kanyanya', '', '2020-12-10', '1030000', '0', '', '0', '0'),
(59, 'Save=254577708', '239616', 'Ntale', 'Simon', '1003712665', 'Emergency', '2000000', '2020-11-27', 'Admin', 'Ntale Simon', '0701982137', 'Kanyanya', '', '2021-06-27', '2215170', '0', '', '0', '0'),
(60, 'Save=228285659', '248452', 'Nabakooza', 'Mildred', '1003774859', 'Working Capital', '500000', '2020-11-25', 'Admin', 'Nabakooza Mildred', '0701982137', 'Bugema', '', '2021-02-27', '545000', '545000', '2020-03-27', '500000', '45000'),
(61, 'Save=153400605', '61484', 'Ndahura', 'Magdalene', '1003911781', 'Working Capital', '500000', '2020-12-18', 'Admin', 'Ndahura Magdalene', '0704924306', 'Kanyanya', '', '2021-01-18', '515000', '515000', '2021-01-18', '500000', '15000'),
(62, 'Save=95331011', '195676', 'Kasirye', 'Martin', '1003765568', 'Working Capital', '5000000', '2020-12-18', 'Admin', 'Nakasi Annet', '0701982137', 'Nyanama', '', '2020-05-18', '5458864', '3300000', '2021-03-24', '2936355', '363645'),
(63, 'Save=147210147', '311218', 'Barongo', 'George', '1003252095', 'School Fees', '7000000', '2021-01-06', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2021-03-14', '7496000', '7496000', '2021-03-06', '7000000', '496000'),
(64, 'Save=73191335', '315223', 'Ndawula', 'Innocent', '1003506742', 'Emergency', '5000000', '2021-01-26', 'Admin', 'Baganjana Ndawula', '0701982137', 'Kanyanya', '', '2022-01-26', '6027725', '1200000', '2021-04-07', '914400', '285600'),
(65, 'Save=67833386', '117632', 'Businge', 'Camilla', '1003159657', 'School Fees', '500000', '2021-01-14', 'Admin', 'Ntale Simon', '0701982137', 'Kanyanya', '', '2021-06-26', '553792', '450000', '2021-04-06', '427050', '22950'),
(66, 'Save=78814264', '269079', 'Tumuhaire', 'Flavia', '1003233169', 'Investment', '4000000', '2021-02-02', 'Admin', 'Balikuddembe John Fisher', '0701982137', 'Kyaliwajala', '', '2022-03-02', '4822180', '0', '', '0', '0'),
(67, 'Save=127536278', '119775', 'Yawe', 'Tony', '1003343934', 'Repairs', '5103000', '2021-01-28', 'Admin', 'Yawe Tony', '0702518592', 'Katale', '', '2021-03-29', '5403000', '5403000', '2021-03-28', '5103000', '300000'),
(68, 'Save=117489709', '7450', 'Kakyomya', 'Raymond', '1003765123', 'Bayita', '1800000', '2021-02-10', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2022-03-10', '2169981', '0', '', '0', '0'),
(69, 'Save=118004537', '172146', 'Kaweesa', 'Fred', '1003733198', 'Working Capital', '15000000', '2021-03-15', 'Admin', 'Admin Admin', '0701982137', 'Kanyanya', '', '2022-03-15', '18083175', '0', '', '0', '0'),
(70, 'Save=172686353', '276780', 'Kisakye', 'Emma', '1003552975', 'Working Capital', '4000000', '2021-03-17', 'Admin', 'Kisakye Emma', '0704924133', 'Jinja', '', '2021-09-17', '4822180', '0', '', '0', '0'),
(71, 'Save=147210147', '50212', 'Barongo', 'George', '1003252095', 'School Fees', '10000000', '2021-03-30', 'Admin', 'Barongo George', '0701982137', 'Namugongo', '', '2022-09-30', '11075850', '0', '2021-05-01', '0', '0'),
(72, 'Save=127536278', '28649', 'Yawe', 'Tony', '1003343934', 'Repairs', '3000000', '2021-04-03', 'Admin', 'Yawe Tony', '0702518592', 'Katale', '', '2021-08-03', '3228324', '0', '', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `account` int(100) NOT NULL,
  `year` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `userid`, `fname`, `lname`, `account`, `year`) VALUES
(96, 'Save=172686353', 'Kisakye', 'Emma', 1003552975, 0),
(97, 'Save=29289846', 'Namaganda', 'Ritah Bridget', 1003823735, 2021),
(98, 'Save=117489709', 'Kakyomya', 'Raymond', 1003765123, 0),
(99, 'Save=28410630', 'Nabiweke', 'Kate', 1003481883, 0),
(103, 'Save=88831569', 'Katerega', 'Teddy', 1003477990, 2021),
(104, 'Save=315094697', 'Kaggwa', 'Milly', 1003870838, 2021),
(105, 'Save=84980913', 'Musisi', 'Deogratius', 1003667506, 2021),
(106, 'Save=133921604', 'Tumusiime', 'Joseph', 1003182918, 2021),
(107, 'Save=127536278', 'Yawe', 'Tony', 1003343934, 2021),
(108, 'Save=77662480', 'Luboobi ', 'Johnmary', 1003558460, 0),
(109, 'Save=254577708', 'Ntale', 'Simon', 1003712665, 0),
(110, 'Save=159148021', 'Bafumba', 'Ritah', 1003400765, 2021),
(111, 'Save=78044334', 'Baganjana', 'Ndawula', 1003986926, 2021),
(112, 'Save=183536355', 'Balikuddembe', 'John Fisher', 1003655767, 2021),
(113, 'Save=228285659', 'Nabakooza', 'Mildred', 1003774859, 2021),
(114, 'Save=73191335', 'Ndawula', 'Innocent', 1003506742, 0),
(115, 'Save=253776797', 'Byarugaba', 'Francis', 1003906652, 2021),
(116, 'Save=143566782', 'Kiwuka', 'Andrew', 1003222839, 2021),
(118, 'Save=177935266', 'Wasswa', 'Peter', 1003721627, 0),
(119, 'Save=55337421', 'Nandawula', 'Magret', 1003499783, 0),
(120, 'Save=253197930', 'Kyaligonza', 'John Bosco', 1003820713, 0),
(121, 'Save=230214934', 'Kimera', 'Richard', 1003426984, 0),
(122, 'Save=78814264', 'Tumuhaire', 'Flavia', 1003233169, 2021),
(123, 'Save=284341143', 'Nabadda ', 'Catherine', 1003793087, 2021),
(124, 'Save=177238683', 'Nabachwa', 'Barbara', 1003352703, 2021),
(125, 'Save=23458707', 'Nakasi', 'Annet', 1003102410, 2021),
(126, 'Save=95331011', 'Kasirye', 'Martin', 1003765568, 0),
(127, 'Save=118004537', 'Kaweesa', 'Fred', 1003733198, 2021),
(128, 'Save=106394616', 'Kaweesa', 'Irene', 1003213266, 0),
(129, 'Save=198863730', 'Busulwa', 'Moses', 1003968978, 2021),
(130, 'Save=95821061', 'Kasirye', 'Naava Georgia', 1003408032, 2021),
(131, 'Save=22091674', 'Nakachwa', 'Angella', 1003172714, 0),
(132, 'Save=15759824', 'Bwanswa', 'Sylvester', 1003338387, 0),
(133, 'Save=247986037', 'Sanyu', 'Agness Kiwuka', 1003563818, 2021),
(134, 'Save=222976179', 'Nabadda', 'Mary', 1003613243, 2021),
(136, 'Save=253763789', 'Wasajja', 'Cedric', 1003872975, 2021),
(137, 'Save=153400605', 'Ndahura', 'Magdalene', 1003911781, 2021),
(138, 'Save=211310952', 'Mugabi', 'Mary Cloe', 1003428662, 2021),
(140, 'Save=254828115', 'Mirembe', 'Harriet', 1003211138, 0),
(141, 'Save=69951198', 'Kyomuhendo', 'Grace', 1003804193, 2021),
(142, 'Save=275793454', 'Leon Yawe', 'Christian', 1003979502, 2021),
(143, 'Save=91774641', 'Wanyana', 'Sarah', 1003653130, 2021),
(144, 'Save=147210147', 'Barongo', 'George', 1003252095, 2021),
(145, 'Save=330973264', 'Najjuko', 'Prossy', 1003376848, 0),
(146, 'Save=114364895', 'Antonia Flora', 'Yawe', 1003362410, 0),
(148, 'Save=283210596', 'Ndawula', 'Rose', 1003300061, 2021),
(149, 'Save=67833386', 'Businge', 'Camilla', 1003159657, 0),
(150, 'Save=218170668', 'Namuli', 'carol', 1003167720, 2021),
(151, 'Save=190060669', 'Ndawula', 'Micheal', 1003399002, 2021),
(152, 'Save=304093131', 'Wampamba', 'Conrad', 1003522436, 2021),
(153, 'Save=15960367', 'Cosmas', 'Ntale', 1003933300, 2021),
(154, 'Save=204522849', 'Nantale ', 'Promise Adrine', 1003269766, 0),
(156, 'Save=181347078', 'Angella', 'Nalwanga', 1003958963, 0),
(157, 'Save=139752892', 'Grayce Pearson', 'Kiyingi', 1003812679, 0),
(158, 'Save=268286448', 'Marianah', 'Nakiyinji', 1003409521, 0),
(159, 'Save=118810880', 'Godfrey', 'Mugisha', 1003538860, 0),
(160, 'Save=279289937', 'George ', 'Kasirye', 1003848482, 2021),
(161, 'Save=298225140', 'Teddy Clara', 'Batanda', 1003356000, 2021),
(162, 'Save=37828780', 'Calton', 'Junjju', 1003327251, 2021),
(163, 'Save=59362175', 'Malcom', 'Sunna', 1003286247, 2021),
(164, 'Save=201296822', 'Hellen', 'Nakato', 1003256123, 2021),
(165, 'Save=119484959', 'Joan ', 'Nalunga', 1003984583, 2021),
(166, 'Save=178289320', 'Maria Angella', 'Luswata', 1003856148, 2021),
(167, 'Save=245063841', 'Rose', 'Kitone ', 1003977189, 2021),
(168, 'Save=206446315', 'Patrick', 'Tinkasimire', 1003638001, 2021),
(169, 'Save=56854765', 'Charlse', 'kaggwa', 1003170433, 2021),
(170, 'Save=132417869', 'Denise', 'Kibenja', 1003279310, 2021),
(171, 'Save=297892286', 'Maria', 'Namuli', 1003850988, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `userid` int(20) NOT NULL,
  `id` varchar(200) NOT NULL,
  `loanId` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `account` varchar(200) NOT NULL,
  `loan` varchar(200) NOT NULL,
  `pay_date` varchar(100) NOT NULL,
  `amount_paid` varchar(200) NOT NULL,
  `Principal_Paid` int(100) NOT NULL,
  `Interest` int(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`userid`, `id`, `loanId`, `fname`, `lname`, `account`, `loan`, `pay_date`, `amount_paid`, `Principal_Paid`, `Interest`, `remarks`, `Year`) VALUES
(1, 'Save=117489709', '304449', 'Kakyomya', 'Raymond', '1003765123', '2700000', '2018-02-02', '2700000', 0, 0, '', '2018'),
(2, 'Save=117489709', '304449', 'Kakyomya', 'Raymond', '1003765123', '2700000', '2018-03-02', '324000', 0, 0, '', '2018'),
(3, 'Save=77662480', '310172', 'Luboobi', 'Johnmary', '1003558460', '700000', '2018-03-02', '700000', 0, 0, '', '2018'),
(4, 'Save=77662480', '310172', 'Luboobi', 'Johnmary', '1003558460', '700000', '2018-03-02', '67000', 0, 0, '', '2018'),
(5, 'Save=84980913', '159732', 'Musisi', 'Deogratius', '1003667506', '350000', '2018-01-03', '350000', 0, 0, '', '2018'),
(6, 'Save=84980913', '159732', 'Musisi', 'Deogratius', '1003667506', '350000', '2018-01-04', '22000', 0, 0, '', '2018'),
(8, 'Save=253197930', '316731', 'Kyaligonza', 'John Bosco', '1003820713', '750000', '2018-03-06', '750000', 750000, 0, '', '2018'),
(9, 'Save=253197930', '316731', 'Kyaligonza', 'John Bosco', '1003820713', '750000', '2018-03-06', '53000', 0, 53000, '', '2018'),
(10, 'Save=230214934', '337599', 'Kimera', 'Richard', '1003426984', '1500000', '2018-03-10', '195000', 150000, 45000, '', '2018'),
(11, 'Save=230214934', '337599', 'Kimera', 'Richard', '1003426984', '1500000', '2018-06-15', '1350000', 1350000, 0, '', '2018'),
(12, 'Save=230214934', '337599', 'Kimera', 'Richard', '1003426984', '1500000', '2018-07-10', '355000', 0, 355000, '', '2018'),
(13, 'Save=77662480', '173772', 'Luboobi', 'Johnmary', '1003558460', '300000', '2018-02-10', '300000', 300000, 0, '', '2018'),
(14, 'Save=77662480', '173772', 'Luboobi', 'Johnmary', '1003558460', '300000', '2018-02-10', '18000', 0, 18000, '', '2019'),
(15, 'Save=84980913', '236364', 'Musisi', 'Deogratius', '1003667506', '600000', '2018-03-10', '600000', 600000, 0, '', '2018'),
(16, 'Save=84980913', '236364', 'Musisi', 'Deogratius', '1003667506', '600000', '2018-03-15', '23000', 0, 23000, '', '2018'),
(17, 'Save=84980913', '268076', 'Musisi', 'Deogratius', '1003667506', '400000', '2018-06-10', '400000', 400000, 0, '', '2018'),
(18, 'Save=84980913', '268076', 'Musisi', 'Deogratius', '1003667506', '400000', '2018-06-10', '13000', 0, 13000, '', '2018'),
(19, 'Save=177238683', '309766', 'Nabachwa', 'Barbara', '1003352703', '1000000', '2018-12-06', '1000000', 1000000, 0, '', '2018'),
(20, 'Save=177238683', '309766', 'Nabachwa', 'Barbara', '1003352703', '1000000', '2018-12-06', '177536', 0, 177536, '', '2018'),
(21, 'Save=254577708', '110380', 'Ntale', 'Simon', '1003712665', '4000000', '2018-06-01', '4000000', 4000000, 0, '', '2018'),
(22, 'Save=254577708', '110380', 'Ntale', 'Simon', '1003712665', '4000000', '2019-06-01', '500000', 0, 500000, '', '2019'),
(23, 'Save=84980913', '297566', 'Musisi', 'Deogratius', '1003667506', '780000', '2019-08-11', '780000', 780000, 0, '', '2019'),
(24, 'Save=84980913', '297566', 'Musisi', 'Deogratius', '1003667506', '780000', '2018-08-11', '86000', 0, 86000, '', '2018'),
(25, 'Save=253197930', '295005', 'Kyaligonza', 'John Bosco', '1003820713', '260000', '2019-07-11', '267800', 260000, 7800, '', '2019'),
(26, 'Save=78044334', '207836', 'Baganjana', 'Ndawula', '1003986926', '1500000', '2018-08-02', '1545000', 1500000, 45000, '', '2018'),
(27, 'Save=253197930', '51356', 'Kyaligonza', 'John Bosco', '1003820713', '310000', '2019-08-11', '310000', 310000, 0, '', '2019'),
(28, 'Save=253197930', '51356', 'Kyaligonza', 'John Bosco', '1003820713', '310000', '2019-08-11', '20000', 0, 20000, '', '2019'),
(29, 'Save=183536355', '247158', 'Balikuddembe', 'John Fisher', '1003655767', '1000000', '2018-09-11', '1000000', 1000000, 0, '', '2018'),
(30, 'Save=183536355', '247158', 'Balikuddembe', 'John Fisher', '1003655767', '1000000', '2018-09-11', '124696', 0, 124696, '', '2018'),
(31, 'Save=78814264', '334486', 'Tumuhaire', 'Flavia', '1003233169', '1500000', '2019-11-11', '1500000', 1500000, 0, '', '2019'),
(32, 'Save=78814264', '334486', 'Tumuhaire', 'Flavia', '1003233169', '1500000', '2019-11-11', '159472', 0, 159472, '', '2019'),
(33, 'Save=253197930', '54002', 'Kyaligonza', 'John Bosco', '1003820713', '2100000', '2019-09-05', '2100000', 2100000, 0, '', '2019'),
(34, 'Save=253197930', '54002', 'Kyaligonza', 'John Bosco', '1003820713', '2100000', '2019-09-05', '464000', 0, 464000, '', '2019'),
(35, 'Save=78044334', '249064', 'Baganjana', 'Ndawula', '1003986926', '2000000', '2019-03-11', '2000000', 2000000, 0, '', '2019'),
(36, 'Save=78044334', '249064', 'Baganjana', 'Ndawula', '1003986926', '2000000', '2019-03-11', '120000', 0, 120000, '', '2019'),
(37, 'Save=177238683', '269503', 'Nabachwa', 'Barbara', '1003352703', '1500000', '2019-06-11', '1500000', 1500000, 0, '', '2019'),
(38, 'Save=177238683', '269503', 'Nabachwa', 'Barbara', '1003352703', '1500000', '2019-06-11', '164062', 0, 164062, '', '2019'),
(39, 'Save=84980913', '153176', 'Musisi', 'Deogratius', '1003667506', '6000000', '2019-05-06', '6000000', 6000000, 0, '', '2019'),
(40, 'Save=84980913', '153176', 'Musisi', 'Deogratius', '1003667506', '6000000', '2019-05-06', '630000', 0, 630000, '', '2019'),
(41, 'Save=172686353', '265166', 'Kisakye', 'Emma', '1003552975', '1000000', '2019-05-06', '1000000', 1000000, 0, '', '2019'),
(42, 'Save=172686353', '265166', 'Kisakye', 'Emma', '1003552975', '1000000', '2019-05-06', '80000', 0, 80000, '', '2019'),
(43, 'Save=153400605', '249660', 'Ndahura', 'Magdalene', '1003911781', '500000', '2019-06-12', '500000', 500000, 0, '', '2019'),
(44, 'Save=153400605', '249660', 'Ndahura', 'Magdalene', '1003911781', '500000', '2019-06-12', '30000', 0, 30000, '', '2019'),
(45, 'Save=147210147', '79463', 'Barongo', 'George', '1003252095', '4500000', '2019-06-11', '4500000', 4500000, 0, '', '2019'),
(46, 'Save=147210147', '79463', 'Barongo', 'George', '1003252095', '4500000', '2021-05-11', '486000', 0, 486000, '', '2021'),
(47, 'Save=222976179', '208811', 'Nabadda', 'Mary', '1003613243', '1000000', '2019-06-22', '1000000', 1000000, 0, '', '2019'),
(48, 'Save=222976179', '208811', 'Nabadda', 'Mary', '1003613243', '1000000', '2019-06-22', '92000', 0, 92000, '', '2019'),
(49, 'Save=78044334', '123076', 'Baganjana', 'Ndawula', '1003986926', '4800000', '2019-06-22', '4800000', 4800000, 0, '', '2019'),
(50, 'Save=78044334', '123076', 'Baganjana', 'Ndawula', '1003986926', '4800000', '2019-06-12', '770376', 0, 770376, '', '2019'),
(51, 'Save=77662480', '297430', 'Luboobi', 'Johnmary', '1003558460', '250000', '2019-06-12', '250000', 250000, 0, '', '2019'),
(52, 'Save=77662480', '297430', 'Luboobi', 'Johnmary', '1003558460', '250000', '2019-06-12', '12400', 0, 12400, '', '2019'),
(53, 'Save=284341143', '42787', 'Nabadda', 'Catherine', '1003793087', '300000', '2019-07-08', '300000', 300000, 0, '', '2019'),
(54, 'Save=284341143', '42787', 'Nabadda', 'Catherine', '1003793087', '300000', '2019-07-08', '74000', 0, 74000, '', '2019'),
(55, 'Save=172686353', '89558', 'Kisakye', 'Emma', '1003552975', '1500000', '2019-11-12', '1500000', 1500000, 0, '', '2019'),
(56, 'Save=172686353', '89558', 'Kisakye', 'Emma', '1003552975', '1500000', '2019-11-12', '161000', 0, 161000, '', '2019'),
(57, 'Save=78814264', '178453', 'Tumuhaire', 'Flavia', '1003233169', '1500000', '2019-10-15', '1500000', 1500000, 0, '', '2019'),
(58, 'Save=78814264', '178453', 'Tumuhaire', 'Flavia', '1003233169', '1500000', '2019-10-15', '248000', 0, 248000, '', '2019'),
(59, 'Save=23458707', '295705', 'Nakasi', 'Annet', '1003102410', '6000000', '2019-11-25', '6000000', 6000000, 0, '', '2019'),
(60, 'Save=23458707', '295705', 'Nakasi', 'Annet', '1003102410', '6000000', '2019-11-25', '645000', 0, 645000, '', '2019'),
(61, 'Save=84980913', '12737', 'Musisi', 'Deogratius', '1003667506', '9000000', '2019-10-09', '2400000', 2400000, 0, '', '2019'),
(62, 'Save=84980913', '12737', 'Musisi', 'Deogratius', '1003667506', '9000000', '2019-09-09', '270000', 0, 270000, '', '2019'),
(63, 'Save=127536278', '317658', 'Yawe', 'Tony', '1003343934', '5000000', '2019-09-12', '5000000', 5000000, 0, '', '2019'),
(64, 'Save=127536278', '317658', 'Yawe', 'Tony', '1003343934', '5000000', '2019-09-12', '200000', 0, 200000, '', '2019'),
(65, 'Save=147210147', '61537', 'Barongo', 'George', '1003252095', '6000000', '2019-11-03', '6000000', 6000000, 0, '', '2019'),
(66, 'Save=147210147', '61537', 'Barongo', 'George', '1003252095', '6000000', '2019-11-02', '623000', 0, 623000, '', '2019'),
(67, 'Save=253197930', '228476', 'Kyaligonza', 'John Bosco', '1003820713', '4000000', '2019-11-12', '316000', 316000, 0, '', '2019'),
(68, 'Save=253197930', '228476', 'Kyaligonza', 'John Bosco', '1003820713', '4000000', '2019-11-12', '84000', 0, 84000, '', '2019'),
(69, 'Save=78044334', '72024', 'Baganjana', 'Ndawula', '1003986926', '400000', '2019-10-12', '412000', 400000, 12000, '', '2019'),
(70, 'Save=73191335', '169987', 'Ndawula', 'Innocent', '1003506742', '2200000', '2019-12-12', '2200000', 2200000, 0, '', '2019'),
(71, 'Save=73191335', '169987', 'Ndawula', 'Innocent', '1003506742', '2200000', '2019-12-23', '66000', 0, 66000, '', '2019'),
(72, 'Save=95331011', '158940', 'Kasirye', 'Martin', '1003765568', '3000000', '2019-10-10', '3090000', 3000000, 90000, '', '2019'),
(73, 'Save=95331011', '29672', 'Kasirye', 'Martin', '1003765568', '2100000', '2019-12-12', '2163000', 2100000, 63000, '', '2019'),
(74, 'Save=183536355', '6727', 'Balikuddembe', 'John Fisher', '1003655767', '4000000', '2019-12-25', '4000000', 4000000, 0, '', '2019'),
(75, 'Save=183536355', '6727', 'Balikuddembe', 'John Fisher', '1003655767', '4000000', '2019-12-25', '601500', 0, 601500, '', '2019'),
(76, 'Save=153400605', '82383', 'Ndahura', 'Magdalene', '1003911781', '500000', '2020-01-12', '500000', 500000, 0, '', '2020'),
(77, 'Save=153400605', '82383', 'Ndahura', 'Magdalene', '1003911781', '500000', '2020-01-12', '42000', 0, 42000, '', '2020'),
(78, 'Save=95331011', '73246', 'Kasirye', 'Martin', '1003765568', '1500000', '2020-02-10', '1545000', 1500000, 45000, '', '2020'),
(79, 'Save=147210147', '18749', 'Barongo', 'George', '1003252095', '6000000', '2020-05-24', '6000000', 6000000, 0, '', '2020'),
(80, 'Save=147210147', '18749', 'Barongo', 'George', '1003252095', '6000000', '2020-05-24', '538100', 0, 538100, '', '2020'),
(81, 'Save=190060669', '254871', 'Ndawula', 'Micheal', '1003399002', '500000', '2020-03-24', '500000', 500000, 0, '', '2020'),
(82, 'Save=190060669', '254871', 'Ndawula', 'Micheal', '1003399002', '500000', '2020-03-24', '30000', 0, 30000, '', '2020'),
(83, 'Save=78044334', '197065', 'Baganjana', 'Ndawula', '1003986926', '10000000', '2020-10-27', '10000000', 0, 10000000, '', '2020'),
(84, 'Save=78044334', '197065', 'Baganjana', 'Ndawula', '1003986926', '10000000', '2020-10-27', '1545000', 0, 1545000, '', '2020'),
(85, 'Save=172686353', '245098', 'Kisakye', 'Emma', '1003552975', '2100000', '2020-04-07', '2100000', 2100000, 0, '', '2020'),
(86, 'Save=172686353', '245098', 'Kisakye', 'Emma', '1003552975', '2100000', '2020-04-13', '200000', 0, 200000, '', '2020'),
(87, 'Save=283210596', '28241', 'Ndawula', 'Rose', '1003300061', '1000000', '2020-06-18', '1000000', 1000000, 0, '', '2020'),
(88, 'Save=283210596', '28241', 'Ndawula', 'Rose', '1003300061', '1000000', '2020-06-18', '110000', 0, 110000, '', '2020'),
(89, 'Save=95331011', '32458', 'Kasirye', 'Martin', '1003765568', '3000000', '2020-03-13', '3090000', 3000000, 90000, '', '2020'),
(90, 'Save=254577708', '12451', 'Ntale', 'Simon', '1003712665', '23000000', '2020-06-13', '23000000', 23000000, 0, '', '2020'),
(91, 'Save=254577708', '124517', 'Ntale', 'Simon', '1003712665', '23000000', '2021-06-15', '4080000', 0, 4080000, '', '2021'),
(92, 'Save=95331011', '274922', 'Kasirye', 'Martin', '1003765568', '5000000', '2020-09-30', '5000000', 5000000, 0, '', '2020'),
(93, 'Save=95331011', '274922', 'Kasirye', 'Martin', '1003765568', '5000000', '2020-09-30', '500000', 0, 500000, '', '2020'),
(94, 'Save=198863730', '49030', 'Busulwa', 'Moses', '1003968978', '4000000', '2021-02-12', '1705300', 1705300, 0, '', '2021'),
(95, 'Save=198863730', '49030', 'Busulwa', 'Moses', '1003968978', '4000000', '2021-02-12', '584700', 0, 584700, '', '2021'),
(96, 'Save=147210147', '189945', 'Barongo', 'George', '1003252095', '6000000', '2020-12-06', '6000000', 6000000, 0, '', '2020'),
(97, 'Save=147210147', '189945', 'Barongo', 'George', '1003252095', '6000000', '2020-12-06', '642000', 0, 642000, '', '2020'),
(98, 'Save=106394616', '30821', 'Kaweesa', 'Irene', '1003213266', '30000000', '2020-11-25', '3000000', 3000000, 0, '', '2020'),
(99, 'Save=106394616', '30821', 'Kaweesa', 'Irene', '1003213266', '30000000', '2020-11-13', '180000', 0, 180000, '', '2020'),
(100, 'Save=133921604', '317528', 'Tumusiime', 'Joseph', '1003182918', '2000000', '2020-11-02', '700000', 640000, 60000, '', '2020'),
(101, 'Save=172686353', '63501', 'Kisakye', 'Emma', '1003552975', '3000000', '2020-12-28', '3000000', 3000000, 0, '', '2020'),
(102, 'Save=172686353', '63501', 'Kisakye', 'Emma', '1003552975', '3000000', '2020-12-28', '287867', 0, 287867, '', '2020'),
(103, 'Save=67833386', '305980', 'Businge', 'Camilla', '1003159657', '500000', '2021-01-02', '500000', 500000, 0, '', '2021'),
(104, 'Save=67833386', '305980', 'Businge', 'Camilla', '1003159657', '500000', '2021-01-02', '30000', 0, 30000, '', '2021'),
(105, 'Save=228285659', '248452', 'Nabakooza', 'Mildred', '1003774859', '500000', '2021-03-27', '500000', 500000, 0, '', '2021'),
(106, 'Save=228285659', '248452', 'Nabakooza', 'Mildred', '1003774859', '500000', '2020-03-27', '45000', 0, 45000, '', '2020'),
(107, 'Save=153400605', '61484', 'Ndahura', 'Magdalene', '1003911781', '500000', '2021-01-18', '515000', 500000, 15000, '', '2021'),
(108, 'Save=95331011', '195676', 'Kasirye', 'Martin', '1003765568', '5000000', '2021-03-24', '2936355', 2936355, 0, '', '2021'),
(109, 'Save=95331011', '195676', 'Kasirye', 'Martin', '1003765568', '5000000', '2021-03-24', '363645', 0, 363645, '', '2021'),
(110, 'Save=147210147', '311218', 'Barongo', 'George', '1003252095', '7000000', '2021-03-06', '7000000', 7000000, 0, '', '2021'),
(111, 'Save=147210147', '311218', 'Barongo', 'George', '1003252095', '7000000', '2021-03-06', '496000', 0, 496000, '', '2021'),
(112, 'Save=73191335', '315223', 'Ndawula', 'Innocent', '1003506742', '5000000', '2021-04-07', '914400', 914400, 0, '', '2021'),
(113, 'Save=73191335', '315223', 'Ndawula', 'Innocent', '1003506742', '5000000', '2021-04-07', '285600', 0, 285600, '', '2021'),
(114, 'Save=67833386', '117632', 'Businge', 'Camilla', '1003159657', '500000', '2021-04-06', '427050', 427050, 0, '', '2021'),
(115, 'Save=67833386', '117632', 'Businge', 'Camilla', '1003159657', '500000', '2021-04-06', '22950', 0, 22950, '', '2021'),
(116, 'Save=127536278', '119775', 'Yawe', 'Tony', '1003343934', '5103000', '2021-03-28', '5103000', 5103000, 0, '', '2021'),
(117, 'Save=127536278', '119775', 'Yawe', 'Tony', '1003343934', '5103000', '2021-03-28', '300000', 0, 300000, '', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `userid` int(20) NOT NULL,
  `id` varchar(200) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `account` varchar(200) NOT NULL,
  `cshare` varchar(200) NOT NULL,
  `nshare` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`userid`, `id`, `fname`, `lname`, `account`, `cshare`, `nshare`, `amount`, `date_time`) VALUES
(1, 'Save=172686353', 'Kisakye', 'Emma', '1003552975', '30000', '8', '240000.00', '2021-04-23'),
(2, 'Save=29289846', 'Namaganda', 'Ritah Bridget', '1003823735', '30000', '11', '330000.00', '2021-04-23'),
(3, 'Save=117489709', 'Kakyomya', 'Raymond', '1003765123', '30000', '61', '1830000.00', '2021-04-23'),
(4, 'Save=28410630', 'Nabiweke', 'Kate', '1003481883', '30000', '19', '570000.00', '2021-04-23'),
(5, 'Save=88831569', 'Katerega', 'Teddy', '1003477990', '30000', '80', '2400000.00', '2021-04-23'),
(6, 'Save=315094697', 'Kaggwa', 'Milly', '1003870838', '30000', '118', '3540000.00', '2021-04-23'),
(7, 'Save=84980913', 'Musisi', 'Deogratius', '1003667506', '30000', '18', '540000.00', '2021-04-23'),
(8, 'Save=133921604', 'Tumusiime', 'Joseph', '1003182918', '30000', '10', '300000.00', '2021-04-23'),
(9, 'Save=127536278', 'Yawe', 'Tony', '1003343934', '30000', '567', '17010000.00', '2021-04-23'),
(10, 'Save=77662480', 'Luboobi ', 'Johnmary', '1003558460', '30000', '11', '330000.00', '2021-04-23'),
(11, 'Save=254577708', 'Ntale', 'Simon', '1003712665', '30000', '18', '540000.00', '2021-04-23'),
(12, 'Save=78044334', 'Baganjana', 'Ndawula', '1003986926', '30000', '146', '4380000.00', '2021-04-23'),
(13, 'Save=183536355', 'Balikuddembe', 'John Fisher', '1003655767', '30000', '656', '19680000.00', '2021-04-23'),
(14, 'Save=228285659', 'Nabakooza', 'Mildred', '1003774859', '30000', '53', '1590000.00', '2021-04-23'),
(15, 'Save=73191335', 'Ndawula', 'Innocent', '1003506742', '30000', '102', '3060000.00', '2021-04-23'),
(16, 'Save=253776797', 'Byarugaba', 'Francis', '1003906652', '30000', '152', '4560000.00', '2021-04-23'),
(17, 'Save=143566782', 'Kiwuka', 'Andrew', '1003222839', '30000', '114', '3420000.00', '2021-04-23'),
(18, 'Save=55337421', 'Nandawula', 'Magret', '1003499783', '30000', '8', '240000.00', '2021-04-23'),
(19, 'Save=78814264', 'Tumuhaire', 'Flavia', '1003233169', '30000', '47', '1410000.00', '2021-04-23'),
(20, 'Save=284341143', 'Nabadda ', 'Catherine', '1003793087', '30000', '45', '1350000.00', '2021-04-23'),
(21, 'Save=177238683', 'Nabachwa', 'Barbara', '1003352703', '30000', '5', '150000.00', '2021-04-23'),
(22, 'Save=23458707', 'Nakasi', 'Annet', '1003102410', '30000', '81', '2430000.00', '2021-04-23'),
(23, 'Save=95331011', 'Kasirye', 'Martin', '1003765568', '30000', '18', '540000.00', '2021-04-23'),
(24, 'Save=118004537', 'Kaweesa', 'Fred', '1003733198', '30000', '47', '1410000.00', '2021-04-23'),
(25, 'Save=106394616', 'Kaweesa', 'Irene', '1003213266', '30000', '6', '180000.00', '2021-04-23'),
(26, 'Save=198863730', 'Busulwa', 'Moses', '1003968978', '30000', '44', '1320000.00', '2021-04-23'),
(27, 'Save=95821061', 'Kasirye', 'Naava Georgia', '1003408032', '30000', '13', '390000.00', '2021-04-23'),
(28, 'Save=22091674', 'Nakachwa', 'Angella', '1003172714', '30000', '6', '180000.00', '2021-04-23'),
(29, 'Save=15759824', 'Bwanswa', 'Sylvester', '1003338387', '30000', '8', '240000.00', '2021-04-23'),
(30, 'Save=247986037', 'Sanyu', 'Agness Kiwuka', '1003563818', '30000', '7', '210000.00', '2021-04-23'),
(31, 'Save=222976179', 'Nabadda', 'Mary', '1003613243', '30000', '14', '420000.00', '2021-04-23'),
(32, 'Save=253763789', 'Wasajja', 'Cedric', '1003872975', '30000', '20', '600000.00', '2021-04-23'),
(33, 'Save=153400605', 'Ndahura', 'Magdalene', '1003911781', '30000', '27', '810000.00', '2021-04-23'),
(34, 'Save=211310952', 'Mugabi', 'Mary Cloe', '1003428662', '30000', '3', '90000.00', '2021-04-23'),
(35, 'Save=69951198', 'Kyomuhendo', 'Grace', '1003804193', '30000', '13', '390000.00', '2021-04-23'),
(36, 'Save=190060669', 'Ndawula', 'Micheal', '1003399002', '30000', '7', '210000.00', '2021-04-23'),
(37, 'Save=275793454', 'Leon Yawe', 'Christian', '1003979502', '30000', '20', '600000.00', '2021-04-23'),
(38, 'Save=297892286', 'Maria', 'Namuli', '1003850988', '30000', '18', '540000.00', '2021-04-23'),
(39, 'Save=147210147', 'Barongo', 'George', '1003252095', '30000', '22', '660000.00', '2021-04-23'),
(40, 'Save=114364895', 'Antonia Flora', 'Yawe', '1003362410', '30000', '6', '180000.00', '2021-04-23'),
(41, 'Save=283210596', 'Ndawula', 'Rose', '1003300061', '30000', '9', '270000.00', '2021-04-23'),
(42, 'Save=67833386', 'Businge', 'Camilla', '1003159657', '30000', '7', '210000.00', '2021-04-23'),
(43, 'Save=218170668', 'Namuli', 'carol', '1003167720', '30000', '9', '270000.00', '2021-04-23'),
(44, 'Save=304093131', 'Wampamba', 'Conrad', '1003522436', '30000', '8', '240000.00', '2021-04-23'),
(45, 'Save=15960367', 'Cosmas', 'Ntale', '1003933300', '30000', '18', '540000.00', '2021-04-23'),
(46, 'Save=204522849', 'Nantale ', 'Promise Adrine', '1003269766', '30000', '6', '180000.00', '2021-04-23'),
(47, 'Save=230214934', 'Kimera', 'Richard', '1003426984', '30000', '16', '480000.00', '2021-04-23'),
(48, 'Save=181347078', 'Angella', 'Nalwanga', '1003958963', '30000', '6', '180000.00', '2021-04-23'),
(49, 'Save=139752892', 'Grayce Pearson', 'Kiyingi', '1003812679', '30000', '6', '180000.00', '2021-04-23'),
(50, 'Save=268286448', 'Marianah', 'Nakiyinji', '1003409521', '30000', '6', '180000.00', '2021-04-23'),
(51, 'Save=118810880', 'Godfrey', 'Mugisha', '1003538860', '30000', '1', '30000.00', '2021-04-23'),
(52, 'Save=279289937', 'George ', 'Kasirye', '1003848482', '30000', '8', '240000.00', '2021-04-23'),
(53, 'Save=298225140', 'Teddy Clara', 'Batanda', '1003356000', '30000', '11', '330000.00', '2021-04-23'),
(54, 'Save=37828780', 'Calton', 'Junjju', '1003327251', '30000', '12', '360000.00', '2021-04-23'),
(55, 'Save=59362175', 'Malcom', 'Sunna', '1003286247', '30000', '4', '120000.00', '2021-04-23'),
(56, 'Save=201296822', 'Hellen', 'Nakato', '1003256123', '30000', '4', '120000.00', '2021-04-23'),
(57, 'Save=178289320', 'Maria Angella', 'Luswata', '1003856148', '30000', '4', '120000.00', '2021-04-23'),
(58, 'Save=119484959', 'Joan ', 'Nalunga', '1003984583', '30000', '1', '30000.00', '2021-04-23'),
(59, 'Save=245063841', 'Rose', 'Kitone ', '1003977189', '30000', '13', '390000.00', '2021-04-23'),
(60, 'Save=159148021', 'Bafumba', 'Ritah', '1003400765', '30000', '10', '300000.00', '2021-04-23'),
(61, 'Save=206446315', 'Patrick', 'Tinkasimire', '1003638001', '30000', '1', '30000.00', '2021-04-23'),
(62, 'Save=56854765', 'Charlse', 'kaggwa', '1003170433', '30000', '3', '90000.00', '2021-04-23'),
(63, 'Save=132417869', 'Denise', 'Kibenja', '1003279310', '30000', '2', '60000.00', '2021-04-23'),
(64, 'Save=91774641', 'Wanyana', 'Sarah', '1003653130', '30000', '4', '120000.00', '2021-04-23'),
(65, 'Save=29289846', 'Namaganda', 'Ritah Bridget', '1003823735', '30000', '3', '90000.00', '2021-07-13'),
(66, 'Save=88831569', 'Katerega', 'Teddy', '1003477990', '30000', '14', '420000.00', '2021-07-13'),
(67, 'Save=315094697', 'Kaggwa', 'Milly', '1003870838', '30000', '3', '90000.00', '2021-07-13'),
(68, 'Save=84980913', 'Musisi', 'Deogratius', '1003667506', '30000', '1', '30000.00', '2021-07-13'),
(69, 'Save=78044334', 'Baganjana', 'Ndawula', '1003986926', '30000', '2', '60000.00', '2021-07-13'),
(70, 'Save=143566782', 'Kiwuka', 'Andrew', '1003222839', '30000', '4', '120000.00', '2021-07-13'),
(71, 'Save=284341143', 'Nabadda ', 'Catherine', '1003793087', '30000', '4', '120000.00', '2021-07-13'),
(72, 'Save=177238683', 'Nabachwa', 'Barbara', '1003352703', '30000', '6', '180000.00', '2021-07-13'),
(73, 'Save=23458707', 'Nakasi', 'Annet', '1003102410', '30000', '3', '90000.00', '2021-07-13'),
(74, 'Save=95331011', 'Kasirye', 'Martin', '1003765568', '30000', '2', '60000.00', '2021-07-13'),
(75, 'Save=95821061', 'Kasirye', 'Naava Georgia', '1003408032', '30000', '9', '270000.00', '2021-07-13'),
(76, 'Save=247986037', 'Sanyu', 'Agness Kiwuka', '1003563818', '30000', '1', '30000.00', '2021-07-13'),
(77, 'Save=153400605', 'Ndahura', 'Magdalene', '1003911781', '30000', '2', '60000.00', '2021-07-13'),
(78, 'Save=211310952', 'Mugabi', 'Mary Cloe', '1003428662', '30000', '3', '90000.00', '2021-07-13'),
(79, 'Save=190060669', 'Ndawula', 'Micheal', '1003399002', '30000', '6', '180000.00', '2021-07-13'),
(80, 'Save=283210596', 'Ndawula', 'Rose', '1003300061', '30000', '8', '240000.00', '2021-07-13'),
(81, 'Save=67833386', 'Businge', 'Camilla', '1003159657', '30000', '3', '90000.00', '2021-07-13'),
(82, 'Save=218170668', 'Namuli', 'carol', '1003167720', '30000', '3', '90000.00', '2021-07-13'),
(83, 'Save=15960367', 'Cosmas', 'Ntale', '1003933300', '30000', '1', '30000.00', '2021-07-13'),
(84, 'Save=230214934', 'Kimera', 'Richard', '1003426984', '30000', '2', '60000.00', '2021-07-13'),
(85, 'Save=279289937', 'George ', 'Kasirye', '1003848482', '30000', '4', '120000.00', '2021-07-13'),
(86, 'Save=178289320', 'Maria Angella', 'Luswata', '1003856148', '30000', '4', '120000.00', '2021-07-13'),
(87, 'Save=119484959', 'Joan ', 'Nalunga', '1003984583', '30000', '2', '60000.00', '2021-07-13'),
(88, 'Save=245063841', 'Rose', 'Kitone ', '1003977189', '30000', '1', '30000.00', '2021-07-13'),
(89, 'Save=91774641', 'Wanyana', 'Sarah', '1003653130', '30000', '9', '270000.00', '2021-07-13'),
(90, 'Save=91774641', 'Wanyana', 'Sarah', '1003653130', '30000', '2', '60000.00', '2021-07-15'),
(91, 'Save=91774641', 'Wanyana', 'Sarah', '1003653130', '30000', '17', '510000', '2021-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `systemset`
--

CREATE TABLE `systemset` (
  `sysid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `footer` text NOT NULL,
  `abb` varchar(200) NOT NULL,
  `currency` text NOT NULL,
  `website` text NOT NULL,
  `mobile` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `stamp` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systemset`
--

INSERT INTO `systemset` (`sysid`, `title`, `name`, `footer`, `abb`, `currency`, `website`, `mobile`, `image`, `email`, `stamp`) VALUES
(1, 'Ntwani Investment Club', 'Ntwani Investment Club', 'NIC. 2021 (c)', 'NI CLUB', 'Shs', 'www.ntwani.com', '0701982137', '../img/ntwani.jpg', 'isokians@gmail.com', 'stamp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `userid` int(100) NOT NULL,
  `txid` varchar(200) NOT NULL,
  `t_type` varchar(200) NOT NULL,
  `acctno` varchar(200) NOT NULL,
  `fn` varchar(200) NOT NULL,
  `ln` varchar(200) NOT NULL,
  `id` varchar(300) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`userid`, `txid`, `t_type`, `acctno`, `fn`, `ln`, `id`, `phone`, `amount`, `remark`, `date_time`) VALUES
(306, 'TXID-91903709', 'Deposit', '1003552975', 'Kisakye', 'Emma', 'Save=172686353', '+256704910233', '986000', 'Opening Balancing 2021', '2021-01-01'),
(307, 'TXID-81800636', 'Deposit', '1003823735', 'Namaganda', 'Ritah Bridget', 'Save=29289846', '0779923138', '760000', 'Opening Balance for 2021', '2021-01-01'),
(308, 'TXID-67732726', 'Deposit', '1003765123', 'Kakyomya', 'Raymond', 'Save=117489709', '0704808978', '400000', 'Opening Balance for 2021', '2021-01-01'),
(309, 'TXID-62821851', 'Deposit', '1003481883', 'Nabiweke', 'Kate', 'Save=28410630', '0718039369', '640000', 'Opening Balance for 2021', '2021-01-01'),
(310, 'TXID-79710359', 'Deposit', '1003870838', 'Kaggwa', 'Milly', 'Save=315094697', '0787965865', '2245000', 'Opening Balance for 2021', '2021-01-01'),
(311, 'TXID-48301656', 'Deposit', '1003477990', 'Katerega', 'Teddy', 'Save=88831569', '0772341042', '3940000', 'Opening Balance for 2021', '2021-01-01'),
(312, 'TXID-88134054', 'Deposit', '1003667506', 'Musisi', 'Deogratius', 'Save=84980913', '0788552338', '4440000', 'Opening Balance for 2021', '2021-01-01'),
(313, 'TXID-22803291', 'Deposit', '1003182918', 'Tumusiime', 'Joseph', 'Save=133921604', '0773219197', '740000', 'Opening Balance for 2021', '2021-01-01'),
(314, 'TXID-72370498', 'Deposit', '1003343934', 'Yawe', 'Tony', 'Save=127536278', '0772630576', '7668600', 'Opening Balance for 2021', '2021-01-01'),
(315, 'TXID-74424917', 'Deposit', '1003712665', 'Ntale', 'Simon', 'Save=254577708', '0701982137', '1700000', 'Opening Balance for 2021', '2021-01-01'),
(316, 'TXID-48377726', 'Deposit', '1003986926', 'Baganjana', 'Ndawula', 'Save=78044334', '0701318671', '7007624', 'Opening Balance for 2021', '2021-01-01'),
(317, 'TXID-77866321', 'Deposit', '1003655767', 'Balikuddembe', 'John Fisher', 'Save=183536355', '0782507606', '5130304', 'Opening Balance for 2021', '2021-01-01'),
(318, 'TXID-12830891', 'Deposit', '1003774859', 'Nabakooza', 'Mildred', 'Save=228285659', '0756073109', '1160000', 'Opening Balance for 2021', '2021-01-01'),
(319, 'TXID-2256430', 'Deposit', '1003506742', 'Ndawula', 'Innocent', 'Save=73191335', '0703882952', '1774000', 'Opening Balance for 2021', '2021-01-01'),
(320, 'TXID-22519449', 'Deposit', '1003906652', 'Byarugaba', 'Francis', 'Save=253776797', '0703237890', '4291700', 'Opening Balance for 2021', '2021-01-01'),
(321, 'TXID-65626674', 'Deposit', '1003222839', 'Kiwuka', 'Andrew', 'Save=143566782', '0772939092', '2410000', 'Opening Balance for 2021', '2021-01-01'),
(322, 'TXID-79535447', 'Deposit', '1003721627', 'Wasswa', 'Peter', 'Save=177935266', '0755203167', '1236000', 'Opening Balance for 2021', '2021-01-01'),
(323, 'TXID-14772948', 'Deposit', '1003499783', 'Nandawula', 'Magret', 'Save=55337421', '0782241086', '740000', 'Opening Balance for 2021', '2021-01-01'),
(324, 'TXID-75883051', 'Deposit', '1003820713', 'Kyaligonza', 'John Bosco', 'Save=253197930', '070000000', '1000200', 'Opening Balance for 2021', '2021-01-01'),
(325, 'TXID-43360693', 'Deposit', '1003233169', 'Tumuhaire', 'Flavia', 'Save=78814264', '0757631399', '1180528', 'Opening Balance for 2021', '2021-01-01'),
(326, 'TXID-58173338', 'Deposit', '1003793087', 'Nabadda ', 'Catherine', 'Save=284341143', '0702743814', '2220000', 'Opening Balance for 2021', '2021-01-01'),
(327, 'TXID-75381301', 'Deposit', '1003352703', 'Nabachwa', 'Barbara', 'Save=177238683', '0753908252', '760000', 'Opening Balance for 2021', '2021-01-01'),
(328, 'TXID-39689843', 'Deposit', '1003102410', 'Nakasi', 'Annet', 'Save=23458707', '0703641474', '3545000', 'Opening Balance for 2021', '2021-01-01'),
(329, 'TXID-97271516', 'Deposit', '1003765568', 'Kasirye', 'Martin', 'Save=95331011', '0703238667', '1721000', 'Opening Balance for 2021', '2021-01-01'),
(330, 'TXID-98021537', 'Deposit', '1003733198', 'Kaweesa', 'Fred', 'Save=118004537', '0703977966', '830000', 'Opening Balance for 2021', '2021-01-01'),
(331, 'TXID-99620030', 'Deposit', '1003213266', 'Kaweesa', 'Irene', 'Save=106394616', '0706662111', '840000', 'Opening Balance for 2021', '2021-01-01'),
(332, 'TXID-87483142', 'Deposit', '1003968978', 'Busulwa', 'Moses', 'Save=198863730', '0772105216', '2390000', 'Opening Balance for 2021', '2021-01-01'),
(333, 'TXID-93746791', 'Deposit', '1003408032', 'Kasirye', 'Naava Georgia', 'Save=95821061', '07000000', '543000', 'Opening Balance for 2021', '2021-01-01'),
(334, 'TXID-72824984', 'Deposit', '1003172714', 'Nakachwa', 'Angella', 'Save=22091674', '0752793050', '840000', 'Opening Balance for 2021', '2021-01-01'),
(335, 'TXID-91593300', 'Deposit', '1003338387', 'Bwanswa', 'Sylvester', 'Save=15759824', '0701057942', '530000', 'Opening Balance for 2021', '2021-01-01'),
(336, 'TXID-47313099', 'Deposit', '1003563818', 'Sanyu', 'Agness Kiwuka', 'Save=247986037', '0774161262', '840000', 'Opening Balance for 2021', '2021-01-01'),
(337, 'TXID-19323971', 'Deposit', '1003613243', 'Nabadda', 'Mary', 'Save=222976179', '+256756978805', '740000', 'Opening Balance for 2021', '2021-01-01'),
(338, 'TXID-40961554', 'Deposit', '1003872975', 'Wasajja', 'Cedric', 'Save=253763789', '070000000', '650000', 'Opening Balance for 2021', '2021-01-01'),
(339, 'TXID-35233947', 'Deposit', '1003911781', 'Ndahura', 'Magdalene', 'Save=153400605', '0704924309', '1380000', 'Opening Balance for 2021', '2021-01-01'),
(340, 'TXID-83305283', 'Deposit', '1003428662', 'Mugabi', 'Mary Cloe', 'Save=211310952', '0779923138', '310000', 'Opening Balance for 2021', '2021-01-01'),
(341, 'TXID-58760832', 'Deposit', '1003804193', 'Kyomuhendo', 'Grace', 'Save=69951198', '0752732904', '1670000', 'Opening Balance for 2021', '2021-01-01'),
(342, 'TXID-66791343', 'Deposit', '1003399002', 'Ndawula', 'Micheal', 'Save=190060669', '0758444424', '840000', 'Opening Balance for 2021', '2021-01-01'),
(343, 'TXID-86381507', 'Deposit', '1003979502', 'Leon Yawe', 'Christian', 'Save=275793454', '0772630576', '640000', 'Opening Balance for 2021', '2021-01-01'),
(344, 'TXID-24101660', 'Deposit', '1003850988', 'Maria', 'Namuli', 'Save=297892286', '07000000', '1220000', 'Opening Balance for 2021', '2021-01-01'),
(345, 'TXID-3875156', 'Deposit', '1003252095', 'Barongo', 'George', 'Save=147210147', '0772521577', '4310000', 'Opening Balance for 2021', '2021-04-01'),
(346, 'TXID-16688971', 'Deposit', '1003362410', 'Antonia Flora', 'Yawe', 'Save=114364895', '0752793050', '600000', 'Opening Balance for 2021', '2021-01-01'),
(347, 'TXID-98443804', 'Deposit', '1003300061', 'Ndawula', 'Rose', 'Save=283210596', '0705648867', '840000', 'Opening Balance for 2021', '2021-01-01'),
(348, 'TXID-39908367', 'Deposit', '1003159657', 'Businge', 'Camilla', 'Save=67833386', '070000000', '690000', 'Opening Balance for 2021', '2021-01-01'),
(349, 'TXID-6787767', 'Deposit', '1003167720', 'Namuli', 'carol', 'Save=218170668', '070000000', '1240000', 'Opening Balance for 2021', '2021-01-01'),
(350, 'TXID-61299172', 'Deposit', '1003522436', 'Wampamba', 'Conrad', 'Save=304093131', '070000000', '560000', 'Opening Balance for 2021', '2021-01-01'),
(351, 'TXID-88652554', 'Deposit', '1003933300', 'Cosmas', 'Ntale', 'Save=15960367', '0700000800', '240000', 'Opening Balance for 2021', '2021-01-01'),
(352, 'TXID-6559564', 'Deposit', '1003269766', 'Nantale ', 'Promise Adrine', 'Save=204522849', '07558855220', '240000', 'Opening Balance for 2021', '2021-01-01'),
(353, 'TXID-33914703', 'Deposit', '1003426984', 'Kimera', 'Richard', 'Save=230214934', '0701309881', '730000', 'Opening Balance for 2021', '2021-01-01'),
(354, 'TXID-85234293', 'Deposit', '1003958963', 'Angella', 'Nalwanga', 'Save=181347078', '070008005', '240000', 'Opening Balance for 2021', '2021-01-01'),
(355, 'TXID-78851744', 'Deposit', '1003812679', 'Grayce Pearson', 'Kiyingi', 'Save=139752892', '07055883800', '240000', 'Opening Balance for 2021', '2021-01-01'),
(356, 'TXID-34406389', 'Deposit', '1003409521', 'Marianah', 'Nakiyinji', 'Save=268286448', '070000000', '240000', 'Opening Balance for 2021', '2021-01-01'),
(357, 'TXID-46517577', 'Deposit', '1003538860', 'Godfrey', 'Mugisha', 'Save=118810880', '070000000', '30000', 'Opening Balance for 2021', '2021-01-01'),
(358, 'TXID-79494996', 'Deposit', '1003848482', 'George ', 'Kasirye', 'Save=279289937', '07000000', '325000', 'Opening Balance for 2021', '2021-01-01'),
(359, 'TXID-53868721', 'Deposit', '1003356000', 'Teddy Clara', 'Batanda', 'Save=298225140', '0700000', '240000', 'Opening Balance for 2021', '2021-01-01'),
(360, 'TXID-86716670', 'Deposit', '1003327251', 'Calton', 'Junjju', 'Save=37828780', '07000000', '240000', 'Opening Balance for 2021', '2021-01-01'),
(361, 'TXID-8032910', 'Shares', '1003552975', 'Kisakye', 'Emma', 'Save=172686353', '', '240000.00', '', '2021-04-23'),
(362, 'TXID-94445827', 'Shares', '1003823735', 'Namaganda', 'Ritah Bridget', 'Save=29289846', '', '330000.00', '', '2021-04-23'),
(363, 'TXID-7315946', 'Shares', '1003765123', 'Kakyomya', 'Raymond', 'Save=117489709', '', '1830000.00', '', '2021-04-23'),
(364, 'TXID-53466097', 'Shares', '1003481883', 'Nabiweke', 'Kate', 'Save=28410630', '', '570000.00', '', '2021-04-23'),
(365, 'TXID-98790870', 'Shares', '1003477990', 'Katerega', 'Teddy', 'Save=88831569', '', '2400000.00', '', '2021-04-23'),
(366, 'TXID-73643679', 'Shares', '1003870838', 'Kaggwa', 'Milly', 'Save=315094697', '', '3540000.00', '', '2021-04-23'),
(367, 'TXID-57593183', 'Shares', '1003667506', 'Musisi', 'Deogratius', 'Save=84980913', '', '540000.00', '', '2021-04-23'),
(368, 'TXID-27582930', 'Shares', '1003182918', 'Tumusiime', 'Joseph', 'Save=133921604', '', '300000.00', '', '2021-04-23'),
(369, 'TXID-66995507', 'Shares', '1003343934', 'Yawe', 'Tony', 'Save=127536278', '', '17010000.00', '', '2021-04-23'),
(370, 'TXID-65773607', 'Shares', '1003558460', 'Luboobi ', 'Johnmary', 'Save=77662480', '', '330000.00', '', '2021-04-23'),
(371, 'TXID-29920490', 'Shares', '1003712665', 'Ntale', 'Simon', 'Save=254577708', '', '540000.00', '', '2021-04-23'),
(372, 'TXID-42070913', 'Shares', '1003986926', 'Baganjana', 'Ndawula', 'Save=78044334', '', '4380000.00', '', '2021-04-23'),
(373, 'TXID-41084359', 'Shares', '1003655767', 'Balikuddembe', 'John Fisher', 'Save=183536355', '', '19680000.00', '', '2021-04-23'),
(374, 'TXID-86471698', 'Shares', '1003774859', 'Nabakooza', 'Mildred', 'Save=228285659', '', '1590000.00', '', '2021-04-23'),
(375, 'TXID-38937505', 'Shares', '1003506742', 'Ndawula', 'Innocent', 'Save=73191335', '', '3060000.00', '', '2021-04-23'),
(376, 'TXID-39866187', 'Shares', '1003906652', 'Byarugaba', 'Francis', 'Save=253776797', '', '4560000.00', '', '2021-04-23'),
(377, 'TXID-26642526', 'Shares', '1003222839', 'Kiwuka', 'Andrew', 'Save=143566782', '', '3420000.00', '', '2021-04-23'),
(378, 'TXID-64878128', 'Shares', '1003499783', 'Nandawula', 'Magret', 'Save=55337421', '', '240000.00', '', '2021-04-23'),
(379, 'TXID-49975893', 'Shares', '1003233169', 'Tumuhaire', 'Flavia', 'Save=78814264', '', '1410000.00', '', '2021-04-23'),
(380, 'TXID-22695150', 'Shares', '1003793087', 'Nabadda ', 'Catherine', 'Save=284341143', '', '1350000.00', '', '2021-04-23'),
(381, 'TXID-20304231', 'Shares', '1003352703', 'Nabachwa', 'Barbara', 'Save=177238683', '', '150000.00', '', '2021-04-23'),
(382, 'TXID-55355289', 'Shares', '1003102410', 'Nakasi', 'Annet', 'Save=23458707', '', '2430000.00', '', '2021-04-23'),
(383, 'TXID-83584754', 'Shares', '1003765568', 'Kasirye', 'Martin', 'Save=95331011', '', '540000.00', '', '2021-04-23'),
(384, 'TXID-67980558', 'Shares', '1003733198', 'Kaweesa', 'Fred', 'Save=118004537', '', '1410000.00', '', '2021-04-23'),
(385, 'TXID-55425779', 'Shares', '1003213266', 'Kaweesa', 'Irene', 'Save=106394616', '', '180000.00', '', '2021-04-23'),
(386, 'TXID-40147698', 'Shares', '1003968978', 'Busulwa', 'Moses', 'Save=198863730', '', '1320000.00', '', '2021-04-23'),
(387, 'TXID-26950121', 'Shares', '1003408032', 'Kasirye', 'Naava Georgia', 'Save=95821061', '', '390000.00', '', '2021-04-23'),
(388, 'TXID-79928558', 'Shares', '1003172714', 'Nakachwa', 'Angella', 'Save=22091674', '', '180000.00', '', '2021-04-23'),
(389, 'TXID-29089903', 'Shares', '1003338387', 'Bwanswa', 'Sylvester', 'Save=15759824', '', '240000.00', '', '2021-04-23'),
(390, 'TXID-35582962', 'Shares', '1003563818', 'Sanyu', 'Agness Kiwuka', 'Save=247986037', '', '210000.00', '', '2021-04-23'),
(391, 'TXID-75111507', 'Shares', '1003613243', 'Nabadda', 'Mary', 'Save=222976179', '', '420000.00', '', '2021-04-23'),
(392, 'TXID-21482341', 'Shares', '1003872975', 'Wasajja', 'Cedric', 'Save=253763789', '', '600000.00', '', '2021-04-23'),
(393, 'TXID-3047602', 'Shares', '1003911781', 'Ndahura', 'Magdalene', 'Save=153400605', '', '810000.00', '', '2021-04-23'),
(394, 'TXID-81189789', 'Shares', '1003428662', 'Mugabi', 'Mary Cloe', 'Save=211310952', '', '90000.00', '', '2021-04-23'),
(395, 'TXID-16074187', 'Shares', '1003804193', 'Kyomuhendo', 'Grace', 'Save=69951198', '', '390000.00', '', '2021-04-23'),
(396, 'TXID-94795321', 'Shares', '1003399002', 'Ndawula', 'Micheal', 'Save=190060669', '', '210000.00', '', '2021-04-23'),
(397, 'TXID-45456606', 'Shares', '1003979502', 'Leon Yawe', 'Christian', 'Save=275793454', '', '600000.00', '', '2021-04-23'),
(398, 'TXID-48362020', 'Shares', '1003850988', 'Maria', 'Namuli', 'Save=297892286', '', '540000.00', '', '2021-04-23'),
(399, 'TXID-4575578', 'Shares', '1003252095', 'Barongo', 'George', 'Save=147210147', '', '660000.00', '', '2021-04-23'),
(400, 'TXID-80262101', 'Shares', '1003362410', 'Antonia Flora', 'Yawe', 'Save=114364895', '', '180000.00', '', '2021-04-23'),
(401, 'TXID-63912248', 'Shares', '1003300061', 'Ndawula', 'Rose', 'Save=283210596', '', '270000.00', '', '2021-04-23'),
(402, 'TXID-20979512', 'Shares', '1003159657', 'Businge', 'Camilla', 'Save=67833386', '', '210000.00', '', '2021-04-23'),
(403, 'TXID-23175883', 'Shares', '1003167720', 'Namuli', 'carol', 'Save=218170668', '', '270000.00', '', '2021-04-23'),
(404, 'TXID-42886456', 'Shares', '1003522436', 'Wampamba', 'Conrad', 'Save=304093131', '', '240000.00', '', '2021-04-23'),
(405, 'TXID-77277856', 'Shares', '1003933300', 'Cosmas', 'Ntale', 'Save=15960367', '', '540000.00', '', '2021-04-23'),
(406, 'TXID-87600790', 'Shares', '1003269766', 'Nantale ', 'Promise Adrine', 'Save=204522849', '', '180000.00', '', '2021-04-23'),
(407, 'TXID-17738523', 'Shares', '1003426984', 'Kimera', 'Richard', 'Save=230214934', '', '480000.00', '', '2021-04-23'),
(408, 'TXID-39374067', 'Shares', '1003958963', 'Angella', 'Nalwanga', 'Save=181347078', '', '180000.00', '', '2021-04-23'),
(409, 'TXID-83851796', 'Shares', '1003812679', 'Grayce Pearson', 'Kiyingi', 'Save=139752892', '', '180000.00', '', '2021-04-23'),
(410, 'TXID-55806533', 'Shares', '1003409521', 'Marianah', 'Nakiyinji', 'Save=268286448', '', '180000.00', '', '2021-04-23'),
(411, 'TXID-65267067', 'Shares', '1003538860', 'Godfrey', 'Mugisha', 'Save=118810880', '', '30000.00', '', '2021-04-23'),
(412, 'TXID-78692223', 'Shares', '1003848482', 'George ', 'Kasirye', 'Save=279289937', '', '240000.00', '', '2021-04-23'),
(413, 'TXID-94584817', 'Shares', '1003356000', 'Teddy Clara', 'Batanda', 'Save=298225140', '', '330000.00', '', '2021-04-23'),
(414, 'TXID-27875730', 'Shares', '1003327251', 'Calton', 'Junjju', 'Save=37828780', '', '360000.00', '', '2021-04-23'),
(415, 'TXID-97833966', 'Shares', '1003286247', 'Malcom', 'Sunna', 'Save=59362175', '', '120000.00', '', '2021-04-23'),
(416, 'TXID-18129960', 'Shares', '1003256123', 'Hellen', 'Nakato', 'Save=201296822', '', '120000.00', '', '2021-04-23'),
(417, 'TXID-12399816', 'Shares', '1003856148', 'Maria Angella', 'Luswata', 'Save=178289320', '', '120000.00', '', '2021-04-23'),
(418, 'TXID-65290944', 'Shares', '1003984583', 'Joan ', 'Nalunga', 'Save=119484959', '', '30000.00', '', '2021-04-23'),
(419, 'TXID-35905673', 'Shares', '1003977189', 'Rose', 'Kitone ', 'Save=245063841', '', '390000.00', '', '2021-04-23'),
(420, 'TXID-92657598', 'Shares', '1003400765', 'Bafumba', 'Ritah', 'Save=159148021', '', '300000.00', '', '2021-04-23'),
(421, 'TXID-8917772', 'Shares', '1003638001', 'Patrick', 'Tinkasimire', 'Save=206446315', '', '30000.00', '', '2021-04-23'),
(422, 'TXID-25982374', 'Shares', '1003170433', 'Charlse', 'kaggwa', 'Save=56854765', '', '90000.00', '', '2021-04-23'),
(423, 'TXID-57332987', 'Shares', '1003279310', 'Denise', 'Kibenja', 'Save=132417869', '', '60000.00', '', '2021-04-23'),
(424, 'TXID-35342325', 'Shares', '1003653130', 'Wanyana', 'Sarah', 'Save=91774641', '', '120000.00', '', '2021-04-23'),
(425, 'TXID-83731915', 'Deposit', '1003870838', 'Kaggwa', 'Milly', 'Save=315094697', '0787965865', '20000', 'Jan 2021', '2021-01-10'),
(426, 'TXID-55554977', 'Membership Payment', '1003823735', 'Namaganda', 'Ritah Bridget', 'Save=29289846', '0779923138', '20000', 'Annual fee ', '2021-04-23'),
(427, 'TXID-41543686', 'Membership Payment', '1003870838', 'Kaggwa', 'Milly', 'Save=315094697', '0787965865', '20000', 'Annual fee ', '2021-04-23'),
(428, 'TXID-68917660', 'Membership Payment', '1003477990', 'Katerega', 'Teddy', 'Save=88831569', '0772341042', '20000', 'Annual fee ', '2021-04-23'),
(429, 'TXID-95866063', 'Membership Payment', '1003667506', 'Musisi', 'Deogratius', 'Save=84980913', '0788552338', '20000', 'Annual fee ', '2021-04-23'),
(430, 'TXID-54851758', 'Membership Payment', '1003182918', 'Tumusiime', 'Joseph', 'Save=133921604', '0773219197', '20000', 'Annual fee ', '2021-04-23'),
(431, 'TXID-16692557', 'Membership Payment', '1003343934', 'Yawe', 'Tony', 'Save=127536278', '0772630576', '20000', 'Annual fee ', '2021-04-23'),
(432, 'TXID-26409524', 'Membership Payment', '1003986926', 'Baganjana', 'Ndawula', 'Save=78044334', '0701318671', '20000', 'Annual fee ', '2021-04-23'),
(433, 'TXID-36435023', 'Membership Payment', '1003655767', 'Balikuddembe', 'John Fisher', 'Save=183536355', '0782507606', '20000', 'Annual fee ', '2021-04-23'),
(434, 'TXID-32310067', 'Membership Payment', '1003774859', 'Nabakooza', 'Mildred', 'Save=228285659', '0756073109', '20000', 'Annual fee ', '2021-04-23'),
(435, 'TXID-54998586', 'Membership Payment', '1003906652', 'Byarugaba', 'Francis', 'Save=253776797', '0703237890', '20000', 'Annual fee ', '2021-04-23'),
(436, 'TXID-74694267', 'Membership Payment', '1003222839', 'Kiwuka', 'Andrew', 'Save=143566782', '0772939092', '20000', 'Annual fee ', '2021-04-23'),
(437, 'TXID-28880261', 'Membership Payment', '1003233169', 'Tumuhaire', 'Flavia', 'Save=78814264', '0757631399', '20000', 'Annual fee ', '2021-04-23'),
(438, 'TXID-72673004', 'Membership Payment', '1003793087', 'Nabadda ', 'Catherine', 'Save=284341143', '0702743814', '20000', 'Annual fee ', '2021-04-23'),
(439, 'TXID-95014995', 'Membership Payment', '1003352703', 'Nabachwa', 'Barbara', 'Save=177238683', '0753908252', '20000', 'Annual fee ', '2021-04-23'),
(440, 'TXID-43389447', 'Membership Payment', '1003102410', 'Nakasi', 'Annet', 'Save=23458707', '0703641474', '20000', 'Annual fee ', '2021-04-23'),
(441, 'TXID-4350868', 'Membership Payment', '1003733198', 'Kaweesa', 'Fred', 'Save=118004537', '0703977966', '20000', 'Annual fee ', '2021-04-23'),
(442, 'TXID-99763227', 'Membership Payment', '1003968978', 'Busulwa', 'Moses', 'Save=198863730', '0772105216', '20000', 'Annual fee ', '2021-04-23'),
(443, 'TXID-49691816', 'Membership Payment', '1003408032', 'Kasirye', 'Naava Georgia', 'Save=95821061', '07000000', '20000', 'Annual fee ', '2021-04-23'),
(444, 'TXID-46672904', 'Membership Payment', '1003563818', 'Sanyu', 'Agness Kiwuka', 'Save=247986037', '0774161262', '20000', 'Annual fee ', '2021-04-23'),
(445, 'TXID-52960114', 'Membership Payment', '1003613243', 'Nabadda', 'Mary', 'Save=222976179', '+256756978805', '20000', 'Annual fee ', '2021-04-23'),
(446, 'TXID-93928720', 'Membership Payment', '1003872975', 'Wasajja', 'Cedric', 'Save=253763789', '070000000', '20000', 'Annual fee ', '2021-04-23'),
(447, 'TXID-12665406', 'Membership Payment', '1003911781', 'Ndahura', 'Magdalene', 'Save=153400605', '0704924309', '20000', 'Annual fee ', '2021-04-23'),
(448, 'TXID-48620985', 'Membership Payment', '1003428662', 'Mugabi', 'Mary Cloe', 'Save=211310952', '0779923138', '20000', 'Annual fee ', '2021-04-23'),
(449, 'TXID-13025324', 'Membership Payment', '1003804193', 'Kyomuhendo', 'Grace', 'Save=69951198', '0752732904', '20000', 'Annual fee ', '2021-04-23'),
(450, 'TXID-53230735', 'Membership Payment', '1003399002', 'Ndawula', 'Micheal', 'Save=190060669', '0758444424', '20000', 'Annual fee ', '2021-04-23'),
(451, 'TXID-41927007', 'Membership Payment', '1003979502', 'Leon Yawe', 'Christian', 'Save=275793454', '0772630576', '20000', 'Annual fee ', '2021-04-23'),
(452, 'TXID-32555999', 'Membership Payment', '1003850988', 'Maria', 'Namuli', 'Save=297892286', '07000000', '20000', 'Annual fee ', '2021-04-23'),
(453, 'TXID-31401445', 'Membership Payment', '1003252095', 'Barongo', 'George', 'Save=147210147', '0772521577', '20000', 'Annual fee ', '2021-04-23'),
(454, 'TXID-52379719', 'Membership Payment', '1003300061', 'Ndawula', 'Rose', 'Save=283210596', '0705648867', '20000', 'Annual fee ', '2021-04-23'),
(455, 'TXID-74068611', 'Membership Payment', '1003167720', 'Namuli', 'carol', 'Save=218170668', '070000000', '20000', 'Annual fee ', '2021-04-23'),
(456, 'TXID-16542843', 'Membership Payment', '1003522436', 'Wampamba', 'Conrad', 'Save=304093131', '070000000', '20000', 'Annual fee ', '2021-04-23'),
(457, 'TXID-42975339', 'Membership Payment', '1003933300', 'Cosmas', 'Ntale', 'Save=15960367', '0700000800', '20000', 'Annual fee ', '2021-04-23'),
(458, 'TXID-7128411', 'Membership Payment', '1003848482', 'George ', 'Kasirye', 'Save=279289937', '07000000', '20000', 'Annual fee ', '2021-04-23'),
(459, 'TXID-57812630', 'Membership Payment', '1003356000', 'Teddy Clara', 'Batanda', 'Save=298225140', '0700000', '20000', 'Annual fee ', '2021-04-23'),
(460, 'TXID-16735927', 'Membership Payment', '1003327251', 'Calton', 'Junjju', 'Save=37828780', '07000000', '20000', 'Annual fee ', '2021-04-23'),
(461, 'TXID-82097641', 'Membership Payment', '1003286247', 'Malcom', 'Sunna', 'Save=59362175', '070000000', '60000', 'Entry fee', '2021-04-23'),
(462, 'TXID-52060694', 'Membership Payment', '1003256123', 'Hellen', 'Nakato', 'Save=201296822', '070000000', '60000', 'Entry fee', '2021-04-23'),
(463, 'TXID-39822268', 'Membership Payment', '1003984583', 'Joan ', 'Nalunga', 'Save=119484959', '0753550181', '60000', 'Entry fee', '2021-04-23'),
(464, 'TXID-72007238', 'Membership Payment', '1003856148', 'Maria Angella', 'Luswata', 'Save=178289320', '07000000', '60000', 'Entry fee', '2021-04-23'),
(465, 'TXID-60592605', 'Membership Payment', '1003977189', 'Rose', 'Kitone ', 'Save=245063841', '070000000', '60000', 'Entry fee', '2021-04-23'),
(466, 'TXID-24144527', 'Membership Payment', '1003400765', 'Bafumba', 'Ritah', 'Save=159148021', '0757165350', '60000', 'Entry fee', '2021-04-23'),
(467, 'TXID-28687144', 'Membership Payment', '1003638001', 'Patrick', 'Tinkasimire', 'Save=206446315', '07000000', '60000', 'Entry fee', '2021-04-23'),
(468, 'TXID-71012489', 'Membership Payment', '1003170433', 'Charlse', 'kaggwa', 'Save=56854765', '070000000', '20000', 'Entry fee', '2021-04-23'),
(469, 'TXID-72573719', 'Membership Payment', '1003279310', 'Denise', 'Kibenja', 'Save=132417869', '070000000', '60000', 'Entry fee', '2021-04-23'),
(470, 'TXID-66275780', 'Membership Payment', '1003653130', 'Wanyana', 'Sarah', 'Save=91774641', '0790850909', '60000', 'Entry fee', '2021-04-23'),
(471, 'TXID-25582318', 'Deposit', '1003477990', 'Katerega', 'Teddy', 'Save=88831569', '0772341042', '240000', 'Jan 2021', '2021-01-14'),
(472, 'TXID-9527923', 'Deposit', '1003182918', 'Tumusiime', 'Joseph', 'Save=133921604', '0773219197', '5000', 'Jan 2021', '2021-01-14'),
(473, 'TXID-77536185', 'Deposit', '1003343934', 'Yawe', 'Tony', 'Save=127536278', '0772630576', '260000', 'Jan 2021', '2021-01-14'),
(474, 'TXID-53428279', 'Deposit', '1003986926', 'Baganjana', 'Ndawula', 'Save=78044334', '0701318671', '220000', 'Jan 2021', '2021-01-14'),
(475, 'TXID-52537474', 'Deposit', '1003655767', 'Balikuddembe', 'John Fisher', 'Save=183536355', '0782507606', '80000', 'Jan 2021', '2021-01-14'),
(476, 'TXID-89565918', 'Deposit', '1003906652', 'Byarugaba', 'Francis', 'Save=253776797', '0703237890', '140000', 'Jan 2021', '2021-01-14'),
(477, 'TXID-41469618', 'Deposit', '1003222839', 'Kiwuka', 'Andrew', 'Save=143566782', '0772939092', '20000', 'Jan', '2021-01-14'),
(478, 'TXID-5231494', 'Deposit', '1003499783', 'Nandawula', 'Magret', 'Save=55337421', '0782241086', '30000', 'Jan 2021', '2021-01-14'),
(479, 'TXID-67598216', 'Deposit', '1003233169', 'Tumuhaire', 'Flavia', 'Save=78814264', '0757631399', '220000', 'Jan 2021', '2021-01-14'),
(480, 'TXID-82993993', 'Deposit', '1003793087', 'Nabadda ', 'Catherine', 'Save=284341143', '0702743814', '60000', 'Jan 2021', '2021-01-14'),
(481, 'TXID-93843825', 'Deposit', '1003352703', 'Nabachwa', 'Barbara', 'Save=177238683', '0753908252', '20000', 'Jan 2021', '2021-01-14'),
(482, 'TXID-62431662', 'Deposit', '1003102410', 'Nakasi', 'Annet', 'Save=23458707', '0703641474', '280000', 'Jan 2021', '2021-01-14'),
(483, 'TXID-27408313', 'Deposit', '1003765568', 'Kasirye', 'Martin', 'Save=95331011', '0703238667', '40000', 'Jan 2021', '2021-01-14'),
(484, 'TXID-38079738', 'Deposit', '1003968978', 'Busulwa', 'Moses', 'Save=198863730', '0772105216', '80000', 'Jan 2021', '2021-01-14'),
(485, 'TXID-49096747', 'Deposit', '1003408032', 'Kasirye', 'Naava Georgia', 'Save=95821061', '07000000', '60000', 'Jan 2021', '2021-01-14'),
(486, 'TXID-17326464', 'Deposit', '1003563818', 'Sanyu', 'Agness Kiwuka', 'Save=247986037', '0774161262', '20000', 'Jan 2021', '2021-01-14'),
(487, 'TXID-93284158', 'Deposit', '1003613243', 'Nabadda', 'Mary', 'Save=222976179', '+256756978805', '20000', '2021', '2021-01-14'),
(488, 'TXID-31116781', 'Deposit', '1003872975', 'Wasajja', 'Cedric', 'Save=253763789', '070000000', '260000', 'Jan 2021', '2021-01-14'),
(489, 'TXID-52243465', 'Deposit', '1003911781', 'Ndahura', 'Magdalene', 'Save=153400605', '0704924309', '20000', 'Jan 2021', '2021-01-14'),
(490, 'TXID-56284212', 'Deposit', '1003804193', 'Kyomuhendo', 'Grace', 'Save=69951198', '0752732904', '20000', 'Jan 2021', '2021-01-14'),
(491, 'TXID-83124033', 'Deposit', '1003979502', 'Leon Yawe', 'Christian', 'Save=275793454', '0772630576', '260000', 'Jan 2021', '2021-01-14'),
(492, 'TXID-19501926', 'Deposit', '1003850988', 'Maria', 'Namuli', 'Save=297892286', '07000000', '240000', 'Jan 2021', '2021-01-14'),
(493, 'TXID-90263074', 'Deposit', '1003300061', 'Ndawula', 'Rose', 'Save=283210596', '0705648867', '40000', 'Jan 2021', '2021-01-14'),
(494, 'TXID-37688752', 'Deposit', '1003933300', 'Cosmas', 'Ntale', 'Save=15960367', '0700000800', '240000', 'Jan 2021', '2021-01-14'),
(495, 'TXID-97247781', 'Deposit', '1003426984', 'Kimera', 'Richard', 'Save=230214934', '0701309881', '60000', 'Jan 2021', '2021-01-14'),
(496, 'TXID-11845494', 'Deposit', '1003848482', 'George ', 'Kasirye', 'Save=279289937', '07000000', '20000', 'Jan 2021', '2021-01-14'),
(497, 'TXID-65242074', 'Deposit', '1003356000', 'Teddy Clara', 'Batanda', 'Save=298225140', '0700000', '100000', 'Jan 2021', '2021-01-14'),
(498, 'TXID-44907909', 'Deposit', '1003327251', 'Calton', 'Junjju', 'Save=37828780', '07000000', '100000', 'Jan 2021', '2021-01-14'),
(499, 'TXID-6794326', 'Deposit', '1003286247', 'Malcom', 'Sunna', 'Save=59362175', '070000000', '80000', 'Jan 2021', '2021-01-14'),
(500, 'TXID-9219510', 'Deposit', '1003256123', 'Hellen', 'Nakato', 'Save=201296822', '070000000', '80000', 'Jan 2021', '2021-01-14'),
(501, 'TXID-84424897', 'Deposit', '1003856148', 'Maria Angella', 'Luswata', 'Save=178289320', '07000000', '20000', 'Jan 2021', '2021-01-14'),
(502, 'TXID-27940582', 'Deposit', '1003977189', 'Rose', 'Kitone ', 'Save=245063841', '070000000', '260000', 'Jan 2021', '2021-01-14'),
(503, 'TXID-69484904', 'Deposit', '1003400765', 'Bafumba', 'Ritah', 'Save=159148021', '0757165350', '140000', 'Jan 2021', '2021-01-14'),
(504, 'TXID-94694788', 'Deposit', '1003638001', 'Patrick', 'Tinkasimire', 'Save=206446315', '07000000', '30000', 'Jan 2021', '2021-01-14'),
(505, 'TXID-46270726', 'Deposit', '1003170433', 'Charlse', 'kaggwa', 'Save=56854765', '070000000', '40000', 'Jan 2021', '2021-01-14'),
(506, 'TXID-64676799', 'Deposit', '1003279310', 'Denise', 'Kibenja', 'Save=132417869', '070000000', '40000', 'Jan 2021', '2021-01-14'),
(507, 'TXID-21387551', 'Deposit', '1003653130', 'Wanyana', 'Sarah', 'Save=91774641', '0790850909', '40000', 'Jan 2021', '2021-01-14'),
(508, 'TXID-8945729', 'Deposit', '1003552975', 'Kisakye', 'Emma', 'Save=172686353', '+256704910233', '20000', 'Feb 2021', '2021-02-18'),
(509, 'TXID-67810264', 'Deposit', '1003765123', 'Kakyomya', 'Raymond', 'Save=117489709', '0704808978', '220000', 'Feb 2021', '2021-02-18'),
(510, 'TXID-61511047', 'Deposit', '1003481883', 'Nabiweke', 'Kate', 'Save=28410630', '0718039369', '10000', 'Feb 2021', '2021-02-18'),
(511, 'TXID-8768228', 'Deposit', '1003870838', 'Kaggwa', 'Milly', 'Save=315094697', '0787965865', '60000', 'Feb 2021', '2021-02-18'),
(512, 'TXID-93185870', 'Deposit', '1003986926', 'Baganjana', 'Ndawula', 'Save=78044334', '0701318671', '470000', 'Jan 2021', '2021-02-11'),
(513, 'TXID-7147958', 'Deposit', '1003906652', 'Byarugaba', 'Francis', 'Save=253776797', '0703237890', '40000', 'Feb 2021', '2021-02-11'),
(514, 'TXID-35769251', 'Deposit', '1003222839', 'Kiwuka', 'Andrew', 'Save=143566782', '0772939092', '60000', 'Feb 2021', '2021-02-11'),
(515, 'TXID-18911103', 'Deposit', '1003765568', 'Kasirye', 'Martin', 'Save=95331011', '0703238667', '40000', 'Feb 2021', '2021-02-11'),
(516, 'TXID-93262052', 'Deposit', '1003733198', 'Kaweesa', 'Fred', 'Save=118004537', '0703977966', '4400000', 'Feb 2021', '2021-02-11'),
(517, 'TXID-7683629', 'Deposit', '1003252095', 'Barongo', 'George', 'Save=147210147', '0772521577', '20000', 'Feb 2021', '2021-02-18'),
(518, 'TXID-30520115', 'Deposit', '1003167720', 'Namuli', 'carol', 'Save=218170668', '070000000', '40000', 'Feb 2021', '2021-02-18'),
(519, 'TXID-46612190', 'Deposit', '1003856148', 'Maria Angella', 'Luswata', 'Save=178289320', '07000000', '60000', 'Feb 2021', '2021-02-18'),
(520, 'TXID-16197408', 'Deposit', '1003170433', 'Charlse', 'kaggwa', 'Save=56854765', '070000000', '20000', 'Feb 2021', '2021-02-11'),
(521, 'TXID-14082663', 'Deposit', '1003552975', 'Kisakye', 'Emma', 'Save=172686353', '+256704910233', '82133', 'Mar 2021', '2021-03-18'),
(522, 'TXID-56407395', 'Deposit', '1003765568', 'Kasirye', 'Martin', 'Save=95331011', '0703238667', '40000', 'Mar 2021', '2021-03-11'),
(523, 'TXID-5886256', 'Deposit', '1003911781', 'Ndahura', 'Magdalene', 'Save=153400605', '0704924309', '10000', 'Mar 2021', '2021-03-11'),
(524, 'TXID-15280269', 'Deposit', '1003252095', 'Barongo', 'George', 'Save=147210147', '0772521577', '120000', 'Mar 2021', '2021-03-18'),
(525, 'TXID-82017690', 'Deposit', '1003300061', 'Ndawula', 'Rose', 'Save=283210596', '0705648867', '20000', 'Mar 2021', '2021-03-11'),
(526, 'TXID-60421864', 'Deposit', '1003984583', 'Joan ', 'Nalunga', 'Save=119484959', '0753550181', '30000', 'Mar 2021', '2021-03-11'),
(527, 'TXID-17605547', 'Deposit', '1003870838', 'Kaggwa', 'Milly', 'Save=315094697', '0787965865', '40000', 'April 2021', '2021-04-08'),
(528, 'TXID-2800034', 'Deposit', '1003774859', 'Nabakooza', 'Mildred', 'Save=228285659', '0756073109', '165000', 'April 2021', '2021-04-08'),
(529, 'TXID-89626349', 'Deposit', '1003222839', 'Kiwuka', 'Andrew', 'Save=143566782', '0772939092', '40000', 'April 2021', '2021-04-08'),
(530, 'TXID-47893000', 'Deposit', '1003856148', 'Maria Angella', 'Luswata', 'Save=178289320', '07000000', '40000', 'April 2021', '2021-04-17'),
(531, 'TXID-18772522', 'Deposit', '1003653130', 'Wanyana', 'Sarah', 'Save=91774641', '0790850909', '40000', 'April 2021', '2021-04-06'),
(533, 'TXID-99349049', 'Payment', '1003765123', 'Kakyomya', 'Raymond', 'Save=117489709', '0704808978', '2700000', 'Loan Payment', '2021-05-02'),
(534, 'TXID-98370259', 'Payment', '1003765123', 'Kakyomya', 'Raymond', 'Save=117489709', '0704808978', '324000', 'Loan Payment', '2021-05-02'),
(535, 'TXID-17887576', 'Payment', '1003558460', 'Luboobi', 'Johnmary', 'Save=77662480', '0704924316', '700000', 'Loan Payment', '2021-05-02'),
(536, 'TXID-22176755', 'Payment', '1003558460', 'Luboobi', 'Johnmary', 'Save=77662480', '0704924316', '67000', 'Loan Payment', '2021-05-02'),
(537, 'TXID-82243415', 'Payment', '1003667506', 'Musisi', 'Deogratius', 'Save=84980913', '0788552338', '350000', 'Loan Payment', '2021-05-03'),
(538, 'TXID-63009704', 'Payment', '1003667506', 'Musisi', 'Deogratius', 'Save=84980913', '0788552338', '22000', 'Loan Payment', '2021-05-03'),
(540, 'TXID-88749537', 'Payment', '1003820713', 'Kyaligonza', 'John Bosco', 'Save=253197930', '070000000', '750000', 'Loan Payment', '2021-05-10'),
(541, 'TXID-91297131', 'Payment', '1003820713', 'Kyaligonza', 'John Bosco', 'Save=253197930', '070000000', '53000', 'Loan Payment', '2021-05-10'),
(542, 'TXID-14095939', 'Payment', '1003426984', 'Kimera', 'Richard', 'Save=230214934', '0701309881', '195000', 'Loan Payment', '2021-05-10'),
(543, 'TXID-27258076', 'Payment', '1003426984', 'Kimera', 'Richard', 'Save=230214934', '0701309881', '1350000', 'Loan Payment', '2021-05-10'),
(544, 'TXID-81989726', 'Payment', '1003426984', 'Kimera', 'Richard', 'Save=230214934', '0701309881', '355000', 'Loan Payment', '2021-05-10'),
(545, 'TXID-85895859', 'Payment', '1003558460', 'Luboobi', 'Johnmary', 'Save=77662480', '0704924316', '300000', 'Loan Payment', '2021-05-10'),
(546, 'TXID-27247720', 'Payment', '1003558460', 'Luboobi', 'Johnmary', 'Save=77662480', '0704924316', '18000', 'Loan Payment', '2021-05-10'),
(547, 'TXID-31325268', 'Payment', '1003667506', 'Musisi', 'Deogratius', 'Save=84980913', '0788552338', '600000', 'Loan Payment', '2021-05-10'),
(548, 'TXID-79379718', 'Payment', '1003667506', 'Musisi', 'Deogratius', 'Save=84980913', '0788552338', '23000', 'Loan Payment', '2021-05-10'),
(549, 'TXID-4296705', 'Payment', '1003667506', 'Musisi', 'Deogratius', 'Save=84980913', '0788552338', '400000', 'Loan Payment', '2021-05-10'),
(550, 'TXID-92541735', 'Payment', '1003667506', 'Musisi', 'Deogratius', 'Save=84980913', '0788552338', '13000', 'Loan Payment', '2021-05-10'),
(551, 'TXID-6807224', 'Payment', '1003352703', 'Nabachwa', 'Barbara', 'Save=177238683', '0753908252', '1000000', 'Loan Payment', '2021-05-10'),
(552, 'TXID-74629927', 'Payment', '1003352703', 'Nabachwa', 'Barbara', 'Save=177238683', '0753908252', '177536', 'Loan Payment', '2021-05-10'),
(553, 'TXID-69008197', 'Payment', '1003712665', 'Ntale', 'Simon', 'Save=254577708', '0701982137', '4000000', 'Loan Payment', '2021-05-11'),
(554, 'TXID-98268608', 'Payment', '1003712665', 'Ntale', 'Simon', 'Save=254577708', '0701982137', '500000', 'Loan Payment', '2021-05-11'),
(555, 'TXID-48687375', 'Payment', '1003667506', 'Musisi', 'Deogratius', 'Save=84980913', '0788552338', '780000', 'Loan Payment', '2021-05-11'),
(556, 'TXID-83476106', 'Payment', '1003667506', 'Musisi', 'Deogratius', 'Save=84980913', '0788552338', '86000', 'Loan Payment', '2021-05-11'),
(557, 'TXID-82950419', 'Payment', '1003820713', 'Kyaligonza', 'John Bosco', 'Save=253197930', '070000000', '267800', 'Loan Payment', '2021-05-11'),
(558, 'TXID-73272087', 'Payment', '1003986926', 'Baganjana', 'Ndawula', 'Save=78044334', '0701318671', '1545000', 'Loan Payment', '2021-05-11'),
(559, 'TXID-98950848', 'Payment', '1003820713', 'Kyaligonza', 'John Bosco', 'Save=253197930', '070000000', '310000', 'Loan Payment', '2021-05-11'),
(560, 'TXID-86649445', 'Payment', '1003820713', 'Kyaligonza', 'John Bosco', 'Save=253197930', '070000000', '20000', 'Loan Payment', '2021-05-11'),
(561, 'TXID-28153371', 'Payment', '1003655767', 'Balikuddembe', 'John Fisher', 'Save=183536355', '0782507606', '1000000', 'Loan Payment', '2021-05-11'),
(562, 'TXID-21875739', 'Payment', '1003655767', 'Balikuddembe', 'John Fisher', 'Save=183536355', '0782507606', '124696', 'Loan Payment', '2021-05-11'),
(563, 'TXID-57344396', 'Payment', '1003233169', 'Tumuhaire', 'Flavia', 'Save=78814264', '0757631399', '1500000', 'Loan Payment', '2021-05-11'),
(564, 'TXID-67707932', 'Payment', '1003233169', 'Tumuhaire', 'Flavia', 'Save=78814264', '0757631399', '159472', 'Loan Payment', '2021-05-11'),
(565, 'TXID-82989497', 'Payment', '1003820713', 'Kyaligonza', 'John Bosco', 'Save=253197930', '070000000', '2100000', 'Loan Payment', '2021-05-11'),
(566, 'TXID-11630010', 'Payment', '1003820713', 'Kyaligonza', 'John Bosco', 'Save=253197930', '070000000', '464000', 'Loan Payment', '2021-05-11'),
(567, 'TXID-81898676', 'Payment', '1003986926', 'Baganjana', 'Ndawula', 'Save=78044334', '0701318671', '2000000', 'Loan Payment', '2021-05-11'),
(568, 'TXID-16042163', 'Payment', '1003986926', 'Baganjana', 'Ndawula', 'Save=78044334', '0701318671', '120000', 'Loan Payment', '2021-05-11'),
(569, 'TXID-48074619', 'Payment', '1003352703', 'Nabachwa', 'Barbara', 'Save=177238683', '0753908252', '1500000', 'Loan Payment', '2021-05-11'),
(570, 'TXID-62060504', 'Payment', '1003352703', 'Nabachwa', 'Barbara', 'Save=177238683', '0753908252', '164062', 'Loan Payment', '2021-05-11'),
(571, 'TXID-63611168', 'Payment', '1003667506', 'Musisi', 'Deogratius', 'Save=84980913', '0788552338', '6000000', 'Loan Payment', '2021-05-12'),
(572, 'TXID-64708885', 'Payment', '1003667506', 'Musisi', 'Deogratius', 'Save=84980913', '0788552338', '630000', 'Loan Payment', '2021-05-12'),
(573, 'TXID-2540775', 'Payment', '1003552975', 'Kisakye', 'Emma', 'Save=172686353', '+256704910233', '1000000', 'Loan Payment', '2021-05-12'),
(574, 'TXID-18023859', 'Payment', '1003552975', 'Kisakye', 'Emma', 'Save=172686353', '+256704910233', '80000', 'Loan Payment', '2021-05-12'),
(575, 'TXID-96752997', 'Payment', '1003911781', 'Ndahura', 'Magdalene', 'Save=153400605', '0704924309', '500000', 'Loan Payment', '2021-05-12'),
(576, 'TXID-32257812', 'Payment', '1003911781', 'Ndahura', 'Magdalene', 'Save=153400605', '0704924309', '30000', 'Loan Payment', '2021-05-12'),
(577, 'TXID-93645130', 'Payment', '1003252095', 'Barongo', 'George', 'Save=147210147', '0772521577', '4500000', 'Loan Payment', '2021-05-12'),
(578, 'TXID-67666606', 'Payment', '1003252095', 'Barongo', 'George', 'Save=147210147', '0772521577', '486000', 'Loan Payment', '2021-05-12'),
(579, 'TXID-99728426', 'Payment', '1003613243', 'Nabadda', 'Mary', 'Save=222976179', '+256756978805', '1000000', 'Loan Payment', '2021-05-12'),
(580, 'TXID-22595083', 'Payment', '1003613243', 'Nabadda', 'Mary', 'Save=222976179', '+256756978805', '92000', 'Loan Payment', '2021-05-12'),
(581, 'TXID-94858897', 'Payment', '1003986926', 'Baganjana', 'Ndawula', 'Save=78044334', '0701318671', '4800000', 'Loan Payment', '2021-05-12'),
(582, 'TXID-65991686', 'Payment', '1003986926', 'Baganjana', 'Ndawula', 'Save=78044334', '0701318671', '770376', 'Loan Payment', '2021-05-12'),
(583, 'TXID-95733933', 'Payment', '1003558460', 'Luboobi', 'Johnmary', 'Save=77662480', '0704924316', '250000', 'Loan Payment', '2021-05-12'),
(584, 'TXID-36899096', 'Payment', '1003558460', 'Luboobi', 'Johnmary', 'Save=77662480', '0704924316', '12400', 'Loan Payment', '2021-05-12'),
(585, 'TXID-98084128', 'Payment', '1003793087', 'Nabadda', 'Catherine', 'Save=284341143', '0702743814', '300000', 'Loan Payment', '2021-05-12'),
(586, 'TXID-56229541', 'Payment', '1003793087', 'Nabadda', 'Catherine', 'Save=284341143', '0702743814', '74000', 'Loan Payment', '2021-05-12'),
(587, 'TXID-81356815', 'Payment', '1003552975', 'Kisakye', 'Emma', 'Save=172686353', '+256704910233', '1500000', 'Loan Payment', '2021-05-12'),
(588, 'TXID-13567382', 'Payment', '1003552975', 'Kisakye', 'Emma', 'Save=172686353', '+256704910233', '161000', 'Loan Payment', '2021-05-12'),
(589, 'TXID-2774307', 'Payment', '1003233169', 'Tumuhaire', 'Flavia', 'Save=78814264', '0757631399', '1500000', 'Loan Payment', '2021-05-12'),
(590, 'TXID-16707966', 'Payment', '1003233169', 'Tumuhaire', 'Flavia', 'Save=78814264', '0757631399', '248000', 'Loan Payment', '2021-05-12'),
(591, 'TXID-67235690', 'Payment', '1003102410', 'Nakasi', 'Annet', 'Save=23458707', '0703641474', '6000000', 'Loan Payment', '2021-05-12'),
(592, 'TXID-46548527', 'Payment', '1003102410', 'Nakasi', 'Annet', 'Save=23458707', '0703641474', '645000', 'Loan Payment', '2021-05-12'),
(593, 'TXID-11839114', 'Payment', '1003667506', 'Musisi', 'Deogratius', 'Save=84980913', '0788552338', '2400000', 'Loan Payment', '2021-05-12'),
(594, 'TXID-66638089', 'Payment', '1003667506', 'Musisi', 'Deogratius', 'Save=84980913', '0788552338', '270000', 'Loan Payment', '2021-05-12'),
(595, 'TXID-67485958', 'Payment', '1003343934', 'Yawe', 'Tony', 'Save=127536278', '0772630576', '5000000', 'Loan Payment', '2021-05-12'),
(596, 'TXID-54507271', 'Payment', '1003343934', 'Yawe', 'Tony', 'Save=127536278', '0772630576', '200000', 'Loan Payment', '2021-05-12'),
(597, 'TXID-69346976', 'Payment', '1003252095', 'Barongo', 'George', 'Save=147210147', '0772521577', '6000000', 'Loan Payment', '2021-05-12'),
(598, 'TXID-64803409', 'Payment', '1003252095', 'Barongo', 'George', 'Save=147210147', '0772521577', '623000', 'Loan Payment', '2021-05-12'),
(599, 'TXID-67847378', 'Payment', '1003820713', 'Kyaligonza', 'John Bosco', 'Save=253197930', '070000000', '316000', 'Loan Payment', '2021-05-12'),
(600, 'TXID-13784274', 'Payment', '1003820713', 'Kyaligonza', 'John Bosco', 'Save=253197930', '070000000', '84000', 'Loan Payment', '2021-05-12'),
(601, 'TXID-8006374', 'Payment', '1003986926', 'Baganjana', 'Ndawula', 'Save=78044334', '0701318671', '412000', 'Loan Payment', '2021-05-12'),
(602, 'TXID-53726641', 'Payment', '1003506742', 'Ndawula', 'Innocent', 'Save=73191335', '0703882952', '2200000', 'Loan Payment', '2021-05-12'),
(603, 'TXID-10990380', 'Payment', '1003506742', 'Ndawula', 'Innocent', 'Save=73191335', '0703882952', '66000', 'Loan Payment', '2021-05-12'),
(604, 'TXID-44040020', 'Payment', '1003765568', 'Kasirye', 'Martin', 'Save=95331011', '0703238667', '3090000', 'Loan Payment', '2021-05-12'),
(605, 'TXID-83594734', 'Payment', '1003765568', 'Kasirye', 'Martin', 'Save=95331011', '0703238667', '2163000', 'Loan Payment', '2021-05-12'),
(606, 'TXID-91488250', 'Payment', '1003655767', 'Balikuddembe', 'John Fisher', 'Save=183536355', '0782507606', '4000000', 'Loan Payment', '2021-05-12'),
(607, 'TXID-91353168', 'Payment', '1003655767', 'Balikuddembe', 'John Fisher', 'Save=183536355', '0782507606', '601500', 'Loan Payment', '2021-05-12'),
(608, 'TXID-96429355', 'Payment', '1003911781', 'Ndahura', 'Magdalene', 'Save=153400605', '0704924309', '500000', 'Loan Payment', '2021-05-12'),
(609, 'TXID-32736181', 'Payment', '1003911781', 'Ndahura', 'Magdalene', 'Save=153400605', '0704924309', '42000', 'Loan Payment', '2021-05-12'),
(610, 'TXID-74616361', 'Payment', '1003765568', 'Kasirye', 'Martin', 'Save=95331011', '0703238667', '1545000', 'Loan Payment', '2021-05-13'),
(611, 'TXID-29337319', 'Payment', '1003252095', 'Barongo', 'George', 'Save=147210147', '0772521577', '6000000', 'Loan Payment', '2021-05-13'),
(612, 'TXID-35267842', 'Payment', '1003252095', 'Barongo', 'George', 'Save=147210147', '0772521577', '538100', 'Loan Payment', '2021-05-13'),
(613, 'TXID-31812783', 'Payment', '1003399002', 'Ndawula', 'Micheal', 'Save=190060669', '0758444424', '500000', 'Loan Payment', '2021-05-13'),
(614, 'TXID-86888664', 'Payment', '1003399002', 'Ndawula', 'Micheal', 'Save=190060669', '0758444424', '30000', 'Loan Payment', '2021-05-13'),
(615, 'TXID-55162499', 'Payment', '1003986926', 'Baganjana', 'Ndawula', 'Save=78044334', '0701318671', '10000000', 'Loan Payment', '2021-05-13'),
(616, 'TXID-31751999', 'Payment', '1003986926', 'Baganjana', 'Ndawula', 'Save=78044334', '0701318671', '1545000', 'Loan Payment', '2021-05-13'),
(617, 'TXID-56141769', 'Payment', '1003552975', 'Kisakye', 'Emma', 'Save=172686353', '+256704910233', '2100000', 'Loan Payment', '2021-05-13'),
(618, 'TXID-11561715', 'Payment', '1003552975', 'Kisakye', 'Emma', 'Save=172686353', '+256704910233', '200000', 'Loan Payment', '2021-05-13'),
(619, 'TXID-20072435', 'Payment', '1003300061', 'Ndawula', 'Rose', 'Save=283210596', '0705648867', '1000000', 'Loan Payment', '2021-05-13'),
(620, 'TXID-69911129', 'Payment', '1003300061', 'Ndawula', 'Rose', 'Save=283210596', '0705648867', '110000', 'Loan Payment', '2021-05-13'),
(621, 'TXID-55070035', 'Payment', '1003765568', 'Kasirye', 'Martin', 'Save=95331011', '0703238667', '3090000', 'Loan Payment', '2021-05-13'),
(622, 'TXID-87009785', 'Payment', '1003712665', 'Ntale', 'Simon', 'Save=254577708', '0701982137', '23000000', 'Loan Payment', '2021-05-13'),
(623, 'TXID-29313409', 'Payment', '1003712665', 'Ntale', 'Simon', 'Save=254577708', '0701982137', '4080000', 'Loan Payment', '2021-05-13'),
(624, 'TXID-35217440', 'Payment', '1003765568', 'Kasirye', 'Martin', 'Save=95331011', '0703238667', '5000000', 'Loan Payment', '2021-05-13'),
(625, 'TXID-80488497', 'Payment', '1003765568', 'Kasirye', 'Martin', 'Save=95331011', '0703238667', '500000', 'Loan Payment', '2021-05-13'),
(626, 'TXID-48748762', 'Payment', '1003968978', 'Busulwa', 'Moses', 'Save=198863730', '0772105216', '1705300', 'Loan Payment', '2021-05-13'),
(627, 'TXID-53009703', 'Payment', '1003968978', 'Busulwa', 'Moses', 'Save=198863730', '0772105216', '584700', 'Loan Payment', '2021-05-13'),
(628, 'TXID-13112084', 'Payment', '1003252095', 'Barongo', 'George', 'Save=147210147', '0772521577', '6000000', 'Loan Payment', '2021-05-13'),
(629, 'TXID-37542210', 'Payment', '1003252095', 'Barongo', 'George', 'Save=147210147', '0772521577', '642000', 'Loan Payment', '2021-05-13'),
(630, 'TXID-69632043', 'Payment', '1003213266', 'Kaweesa', 'Irene', 'Save=106394616', '0706662111', '3000000', 'Loan Payment', '2021-05-13'),
(631, 'TXID-96205380', 'Payment', '1003213266', 'Kaweesa', 'Irene', 'Save=106394616', '0706662111', '180000', 'Loan Payment', '2021-05-13'),
(632, 'TXID-26112370', 'Payment', '1003182918', 'Tumusiime', 'Joseph', 'Save=133921604', '0773219197', '700000', 'Loan Payment', '2021-05-13'),
(633, 'TXID-93917740', 'Payment', '1003552975', 'Kisakye', 'Emma', 'Save=172686353', '+256704910233', '3000000', 'Loan Payment', '2021-05-14'),
(634, 'TXID-27854348', 'Payment', '1003552975', 'Kisakye', 'Emma', 'Save=172686353', '+256704910233', '287867', 'Loan Payment', '2021-05-14'),
(635, 'TXID-48534083', 'Payment', '1003159657', 'Businge', 'Camilla', 'Save=67833386', '070000000', '500000', 'Loan Payment', '2021-05-14'),
(636, 'TXID-91464242', 'Payment', '1003159657', 'Businge', 'Camilla', 'Save=67833386', '070000000', '30000', 'Loan Payment', '2021-05-14'),
(637, 'TXID-24812903', 'Payment', '1003774859', 'Nabakooza', 'Mildred', 'Save=228285659', '0756073109', '500000', 'Loan Payment', '2021-05-14'),
(638, 'TXID-10606583', 'Payment', '1003774859', 'Nabakooza', 'Mildred', 'Save=228285659', '0756073109', '45000', 'Loan Payment', '2021-05-14'),
(639, 'TXID-76096497', 'Payment', '1003911781', 'Ndahura', 'Magdalene', 'Save=153400605', '0704924309', '515000', 'Loan Payment', '2021-05-14'),
(640, 'TXID-44302422', 'Payment', '1003765568', 'Kasirye', 'Martin', 'Save=95331011', '0703238667', '2936355', 'Loan Payment', '2021-05-14'),
(641, 'TXID-44618761', 'Payment', '1003765568', 'Kasirye', 'Martin', 'Save=95331011', '0703238667', '363645', 'Loan Payment', '2021-05-14'),
(642, 'TXID-13228867', 'Payment', '1003252095', 'Barongo', 'George', 'Save=147210147', '0772521577', '7000000', 'Loan Payment', '2021-05-14'),
(643, 'TXID-21260698', 'Payment', '1003252095', 'Barongo', 'George', 'Save=147210147', '0772521577', '496000', 'Loan Payment', '2021-05-14'),
(644, 'TXID-90084949', 'Payment', '1003506742', 'Ndawula', 'Innocent', 'Save=73191335', '0703882952', '914400', 'Loan Payment', '2021-05-14'),
(645, 'TXID-38051612', 'Payment', '1003506742', 'Ndawula', 'Innocent', 'Save=73191335', '0703882952', '285600', 'Loan Payment', '2021-05-14'),
(646, 'TXID-9033631', 'Payment', '1003159657', 'Businge', 'Camilla', 'Save=67833386', '070000000', '427050', 'Loan Payment', '2021-05-14'),
(647, 'TXID-67662555', 'Payment', '1003159657', 'Businge', 'Camilla', 'Save=67833386', '070000000', '22950', 'Loan Payment', '2021-05-14'),
(648, 'TXID-24223255', 'Payment', '1003343934', 'Yawe', 'Tony', 'Save=127536278', '0772630576', '5103000', 'Loan Payment', '2021-05-15'),
(649, 'TXID-65293220', 'Payment', '1003343934', 'Yawe', 'Tony', 'Save=127536278', '0772630576', '300000', 'Loan Payment', '2021-05-15'),
(652, 'TXID-16259677', 'Deposit', 'Interest income on savings from bank for 2016', '', '', '', '', '10801', '2016 ', '2016-12-01'),
(653, 'TXID-42232368', 'Deposit', 'Interest income on savings from bank for 2017', '', '', '', '', '51020', 'Bank Interest 2017', '2017-12-16'),
(654, 'TX-644224', 'expense', '15% withholding tax on interest from 2016', 'Admin', 'Admin', 'Loan=21319580', '', '1620', 'Others', '2021-05-16'),
(655, 'TX-215291', 'expense', '15% withholding tax on interest from 2016', 'Admin', 'Admin', 'Loan=21319580', '', '7653', 'Others', '2021-05-17'),
(656, 'TX-901171', 'expense', 'Bank charges on withdraws made ', 'Admin', 'Admin', 'Loan=21319580', '', '10000', 'Others', '2021-05-16'),
(657, 'TX-242882', 'expense', 'Related 10% exercise duty on all withdraws', 'Admin', 'Admin', 'Loan=21319580', '', '1000', 'Others', '2021-05-16'),
(658, 'TXID-9077683', 'Deposit', 'Interest on our savings in the bank for 2018', '', '', '', '', '113161', 'Bank Interest 2018', '2018-12-30'),
(659, 'TX-604452', 'expense', '15% Withhold tax on interest for 2018', 'Admin', 'Admin', 'Loan=21319580', '', '16974', 'Others', '2021-05-16'),
(660, 'TX-507230', 'expense', 'Bank charges on withdraws made', 'Admin', 'Admin', 'Loan=21319580', '', '30000', 'Others', '2021-05-16'),
(661, 'TX-991035', 'expense', 'Related 10% (to June) & 15% (July onwards) excise duty on all withdraws', 'Admin', 'Admin', 'Loan=21319580', '', '3900', 'Others', '2021-05-16'),
(662, 'TX-986026', 'expense', 'Purchase of receipt books in April 2018', 'Admin', 'Admin', 'Loan=21319580', '', '50000', 'Others', '2021-05-16'),
(663, 'TX-836038', 'expense', 'Profit Sharing among 30 Members', 'Admin', 'Admin', 'Loan=21319580', '', '1200000', 'Others', '2021-05-16'),
(664, 'TX-533998', 'expense', 'AGM Drinks', 'Admin', 'Admin', 'Loan=21319580', '', '300000', 'Others', '2021-05-16'),
(665, 'TXID-56706253', 'Deposit', 'Interest on savings in the bank for 2019', '', '', '', '', '1726815', 'Bank interest 2019', '2019-12-30'),
(666, 'TX-988474', 'expense', '15% withholding tax on interest for 2019', 'Admin', 'Admin', 'Loan=21319580', '', '259022', 'Others', '2021-05-16');
INSERT INTO `transaction` (`userid`, `txid`, `t_type`, `acctno`, `fn`, `ln`, `id`, `phone`, `amount`, `remark`, `date_time`) VALUES
(667, 'TX-779185', 'expense', 'Bank charges on withdraws made', 'Admin', 'Admin', 'Loan=21319580', '', '102000', 'Others', '2021-05-16'),
(668, 'TX-933468', 'expense', 'Related 15% excise duty on all withdraws', 'Admin', 'Admin', 'Loan=21319580', '', '15300', 'Others', '2021-05-16'),
(669, 'TX-585230', 'expense', 'Member Booklets', 'Admin', 'Admin', 'Loan=21319580', '', '95000', 'Others', '2021-05-16'),
(670, 'TX-533418', 'expense', 'Awards for exceptional members', 'Admin', 'Admin', 'Loan=21319580', '', '240000', 'Administration', '2021-05-17'),
(671, 'TX-257956', 'expense', 'Profit sharing for 48 members', 'Admin', 'Admin', 'Loan=21319580', '', '5000000', 'Others', '2021-05-17'),
(672, 'TXID-34810318', 'Deposit', 'Bank interest on running balance', '', '', '', '', '1152669', 'Bank interest 2020', '2020-12-31'),
(673, 'TX-811873', 'expense', 'Withholding tax on bank interest', 'Admin', 'Admin', 'Loan=21319580', '', '172901', 'Others', '2021-05-17'),
(674, 'TX-566880', 'expense', 'Bank Charges', 'Admin', 'Admin', 'Loan=21319580', '', '85100', 'Administration', '2021-05-17'),
(675, 'TX-793735', 'expense', 'Facilitation for retreat in Oguzulu 2021', 'Admin', 'Admin', 'Loan=21319580', '', '1520000', 'Administration', '2021-05-17'),
(676, 'TX-352658', 'expense', 'Interest Sharing ', 'Admin', 'Admin', 'Loan=21319580', '', '10120000', 'Administration', '2021-05-17'),
(677, 'TX-860282', 'expense', 'Addition expenses on meals ', 'Admin', 'Admin', 'Loan=21319580', '', '270000', 'Administration', '2021-05-17'),
(678, 'TX-355596', 'expense', 'Purchase of 2 receipt books', 'Admin', 'Admin', 'Loan=21319580', '', '60000', 'Administration', '2021-05-17'),
(680, 'TXID-86281769', 'Deposit', '1003552975', 'Kisakye', 'Emma', 'Save=172686353', '+256704910233', '100000', 'May deposit', '2021-05-05'),
(681, 'TXID-90792550', 'Deposit', '1003823735', 'Namaganda', 'Ritah Bridget', 'Save=29289846', '0779923138', '60000', 'July 21', '2021-07-13'),
(682, 'TXID-17062092', 'Deposit', '1003870838', 'Kaggwa', 'Milly', 'Save=315094697', '0787965865', '80000', 'May & June 21', '2021-06-06'),
(683, 'TXID-38695291', 'Deposit', '1003477990', 'Katerega', 'Teddy', 'Save=88831569', '0772341042', '100000', 'Jun 21', '2021-06-01'),
(684, 'TXID-58300077', 'Deposit', '1003667506', 'Musisi', 'Deogratius', 'Save=84980913', '0788552338', '20000', 'May 21', '2021-05-15'),
(685, 'TXID-27270579', 'Withdraw', '1003343934', 'Yawe', 'Tony', 'Save=127536278', '0772630576', '3000000', 'Yawe IFO Simon Apr 21', '2021-07-13'),
(686, 'TXID-10377200', 'Deposit', '1003343934', 'Yawe', 'Tony', 'Save=127536278', '0772630576', '1000000', 'Simon IFO yawe May 21', '2021-05-05'),
(687, 'TXID-74705917', 'Withdraw', '1003343934', 'Yawe', 'Tony', 'Save=127536278', '0772630576', '1500000', 'Yawe IFO Amooti\'s meds', '2021-07-13'),
(688, 'TXID-47265302', 'Deposit', '1003343934', 'Yawe', 'Tony', 'Save=127536278', '0772630576', '700000', 'July 21', '2021-07-08'),
(689, 'TXID-18048735', 'Withdraw', '1003712665', 'Ntale', 'Simon', 'Save=254577708', '0701982137', '500000', 'Simon IFO Amooti\'s meds', '2021-07-13'),
(690, 'TXID-7819476', 'Deposit', '1003986926', 'Baganjana', 'Ndawula', 'Save=78044334', '0701318671', '100000', 'May 21', '2021-05-05'),
(691, 'TXID-55020248', 'Withdraw', '1003655767', 'Balikuddembe', 'John Fisher', 'Save=183536355', '0782507606', '2000000', 'Balix IFO Cathy', '2021-07-13'),
(692, 'TXID-30792366', 'Deposit', '1003222839', 'Kiwuka', 'Andrew', 'Save=143566782', '0772939092', '80000', 'May & Jun 21', '2021-06-06'),
(693, 'TXID-87784081', 'Deposit', '1003721627', 'Wasswa', 'Peter', 'Save=177935266', '0755203167', '200000', 'Jul 21', '2021-07-11'),
(694, 'TXID-37162005', 'Withdraw', '1003499783', 'Nandawula', 'Magret', 'Save=55337421', '0782241086', '300000', 'Margret\'s Auto loan closure Jun 21', '2021-07-13'),
(695, 'TXID-84446737', 'Deposit', '1003426984', 'Kimera', 'Richard', 'Save=230214934', '0701309881', '40000', 'May 21', '2021-05-05'),
(696, 'TXID-83644672', 'Deposit', '1003793087', 'Nabadda ', 'Catherine', 'Save=284341143', '0702743814', '86000', 'May 21', '2021-05-05'),
(697, 'TXID-68114321', 'Deposit', '1003352703', 'Nabachwa', 'Barbara', 'Save=177238683', '0753908252', '80000', 'Apr 21', '2021-04-04'),
(698, 'TXID-81915107', 'Withdraw', '1003352703', 'Nabachwa', 'Barbara', 'Save=177238683', '0753908252', '725938', 'Barbra\'s Loan Auto Closure Feb 21', '2021-07-13'),
(699, 'TXID-82857095', 'Deposit', '1003102410', 'Nakasi', 'Annet', 'Save=23458707', '0703641474', '80000', 'May & Jun 21', '2021-06-06'),
(700, 'TXID-57237757', 'Deposit', '1003765568', 'Kasirye', 'Martin', 'Save=95331011', '0703238667', '40000', 'May 21', '2021-05-05'),
(701, 'TXID-57359850', 'Deposit', '1003213266', 'Kaweesa', 'Irene', 'Save=106394616', '0706662111', '840000', 'Yawe IFO Irene', '2021-04-27'),
(702, 'TXID-92442908', 'Withdraw', '1003968978', 'Busulwa', 'Moses', 'Save=198863730', '0772105216', '2363541', 'Busuulwa\'s Auto Loan closure Feb 21', '2021-07-13'),
(703, 'TXID-99571586', 'Deposit', '1003408032', 'Kasirye', 'Naava Georgia', 'Save=95821061', '07000000', '330000', 'May & Jun 21', '2021-06-06'),
(704, 'TXID-81660657', 'Deposit', '1003563818', 'Sanyu', 'Agness Kiwuka', 'Save=247986037', '0774161262', '20000', 'Jun 21', '2021-06-09'),
(705, 'TXID-33941113', 'Deposit', '1003911781', 'Ndahura', 'Magdalene', 'Save=153400605', '0704924309', '10000', 'May 21', '2021-05-05'),
(706, 'TXID-60511663', 'Withdraw', '1003911781', 'Ndahura', 'Magdalene', 'Save=153400605', '0704924309', '200000', 'Amooti for meds', '2021-07-13'),
(707, 'TXID-44598357', 'Deposit', '1003428662', 'Mugabi', 'Mary Cloe', 'Save=211310952', '0779923138', '60000', 'Jul 21', '2021-07-13'),
(708, 'TXID-49891856', 'Deposit', '1003653130', 'Wanyana', 'Sarah', 'Save=91774641', '0790850909', '100000', 'May & Jun 21', '2021-06-06'),
(709, 'TXID-91070434', 'Deposit', '1003653130', 'Wanyana', 'Sarah', 'Save=91774641', '0790850909', '40000', 'Transfer from Denise', '2021-05-09'),
(710, 'TXID-39363681', 'Deposit', '1003300061', 'Ndawula', 'Rose', 'Save=283210596', '0705648867', '160000', 'Jun 21', '2021-06-06'),
(711, 'TXID-9614488', 'Deposit', '1003159657', 'Businge', 'Camilla', 'Save=67833386', '070000000', '60000', 'Jul 21', '2021-07-06'),
(712, 'TXID-3247276', 'Deposit', '1003167720', 'Namuli', 'carol', 'Save=218170668', '070000000', '60000', 'Apr, May & Jun 21', '2021-06-06'),
(713, 'TXID-40286135', 'Deposit', '1003399002', 'Ndawula', 'Micheal', 'Save=190060669', '0758444424', '120000', 'Jun 21', '2021-06-06'),
(714, 'TXID-71600890', 'Deposit', '1003399002', 'Ndawula', 'Micheal', 'Save=190060669', '0758444424', '20000', 'Savings', '2021-01-10'),
(715, 'TXID-95044433', 'Deposit', '1003933300', 'Cosmas', 'Ntale', 'Save=15960367', '0700000800', '40000', 'Savings', '2021-05-05'),
(716, 'TXID-13584748', 'Deposit', '1003848482', 'George ', 'Kasirye', 'Save=279289937', '07000000', '80000', 'May & Jun 21', '2021-06-06'),
(717, 'TXID-96347522', 'Deposit', '1003984583', 'Joan ', 'Nalunga', 'Save=119484959', '0753550181', '30000', 'Savings', '2021-05-05'),
(718, 'TXID-49939290', 'Deposit', '1003856148', 'Maria Angella', 'Luswata', 'Save=178289320', '07000000', '90000', 'May & Jun 21', '2021-06-06'),
(719, 'TXID-27445760', 'Deposit', '1003977189', 'Rose', 'Kitone ', 'Save=245063841', '070000000', '40000', 'savings', '2021-05-05'),
(720, 'TXID-77890059', 'Deposit', '1003638001', 'Patrick', 'Tinkasimire', 'Save=206446315', '07000000', '200000', 'Edward IFO Patrick', '2021-04-27'),
(721, 'TXID-43965102', 'Withdraw', '1003279310', 'Denise', 'Kibenja', 'Save=132417869', '070000000', '40000', 'Denise Transfer to Sarah May 21', '2021-07-13'),
(722, 'TXID-93862149', 'Shares', '1003823735', 'Namaganda', 'Ritah Bridget', 'Save=29289846', '', '90000.00', 'Shares', '2021-07-13'),
(723, 'TXID-33756993', 'Shares', '1003477990', 'Katerega', 'Teddy', 'Save=88831569', '', '420000.00', 'Shares', '2021-07-13'),
(724, 'TXID-64467558', 'Shares', '1003870838', 'Kaggwa', 'Milly', 'Save=315094697', '', '90000.00', 'Shares', '2021-07-13'),
(725, 'TXID-93955219', 'Shares', '1003667506', 'Musisi', 'Deogratius', 'Save=84980913', '', '30000.00', 'Shares', '2021-07-13'),
(726, 'TXID-5812215', 'Shares', '1003986926', 'Baganjana', 'Ndawula', 'Save=78044334', '', '60000.00', 'Shares', '2021-07-13'),
(727, 'TXID-36513262', 'Shares', '1003222839', 'Kiwuka', 'Andrew', 'Save=143566782', '', '120000.00', 'Shares', '2021-07-13'),
(728, 'TXID-11098024', 'Shares', '1003793087', 'Nabadda ', 'Catherine', 'Save=284341143', '', '120000.00', 'Shares', '2021-07-13'),
(729, 'TXID-39935872', 'Shares', '1003352703', 'Nabachwa', 'Barbara', 'Save=177238683', '', '180000.00', 'Shares', '2021-07-13'),
(730, 'TXID-94461015', 'Shares', '1003102410', 'Nakasi', 'Annet', 'Save=23458707', '', '90000.00', 'Shares', '2021-07-13'),
(731, 'TXID-99912418', 'Shares', '1003765568', 'Kasirye', 'Martin', 'Save=95331011', '', '60000.00', 'Shares', '2021-07-13'),
(732, 'TXID-24715425', 'Shares', '1003408032', 'Kasirye', 'Naava Georgia', 'Save=95821061', '', '270000.00', 'Shares', '2021-07-13'),
(733, 'TXID-93521217', 'Shares', '1003563818', 'Sanyu', 'Agness Kiwuka', 'Save=247986037', '', '30000.00', 'Shares', '2021-07-13'),
(734, 'TXID-18414635', 'Shares', '1003911781', 'Ndahura', 'Magdalene', 'Save=153400605', '', '60000.00', 'Shares', '2021-07-13'),
(735, 'TXID-19087541', 'Shares', '1003428662', 'Mugabi', 'Mary Cloe', 'Save=211310952', '', '90000.00', 'Shares', '2021-07-13'),
(736, 'TXID-86778969', 'Shares', '1003399002', 'Ndawula', 'Micheal', 'Save=190060669', '', '180000.00', 'Shares', '2021-07-13'),
(737, 'TXID-42141803', 'Shares', '1003300061', 'Ndawula', 'Rose', 'Save=283210596', '', '240000.00', 'Shares', '2021-07-13'),
(738, 'TXID-95309470', 'Shares', '1003159657', 'Businge', 'Camilla', 'Save=67833386', '', '90000.00', 'Shares', '2021-07-13'),
(739, 'TXID-44324970', 'Shares', '1003167720', 'Namuli', 'carol', 'Save=218170668', '', '90000.00', 'Shares', '2021-07-13'),
(740, 'TXID-9014141', 'Shares', '1003933300', 'Cosmas', 'Ntale', 'Save=15960367', '', '30000.00', 'Shares', '2021-07-13'),
(741, 'TXID-34247036', 'Shares', '1003426984', 'Kimera', 'Richard', 'Save=230214934', '', '60000.00', 'Shares', '2021-07-13'),
(742, 'TXID-14629622', 'Shares', '1003848482', 'George ', 'Kasirye', 'Save=279289937', '', '120000.00', 'Shares', '2021-07-13'),
(743, 'TXID-69202689', 'Shares', '1003856148', 'Maria Angella', 'Luswata', 'Save=178289320', '', '120000.00', 'Shares', '2021-07-13'),
(744, 'TXID-63658915', 'Shares', '1003984583', 'Joan ', 'Nalunga', 'Save=119484959', '', '60000.00', 'Shares', '2021-07-13'),
(745, 'TXID-69108689', 'Shares', '1003977189', 'Rose', 'Kitone ', 'Save=245063841', '', '30000.00', 'Shares', '2021-07-13'),
(746, 'TXID-17649890', 'Shares', '1003653130', 'Wanyana', 'Sarah', 'Save=91774641', '', '270000.00', 'Shares', '2021-07-13'),
(747, 'TXID-5739884', 'Deposit', '1003653130', 'Wanyana', 'Sarah', 'Save=91774641', '0790850909', '40000', 'Savings', '2021-07-14'),
(748, 'TXID-49216736', 'Shares', '1003653130', 'Wanyana', 'Sarah', 'Save=91774641', '', '60000.00', 'Shares', '2021-07-15'),
(749, 'TXID-83124320', 'Share Transfer', '1003653130', 'Wanyana', 'Sarah', 'Save=91774641', '', '510000', 'Denise IFO Sarah', '2021-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `tt_shares`
--

CREATE TABLE `tt_shares` (
  `userid` int(20) NOT NULL,
  `id` varchar(200) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `account` varchar(200) NOT NULL,
  `cshare` varchar(200) NOT NULL,
  `nshare` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tt_shares`
--

INSERT INTO `tt_shares` (`userid`, `id`, `fname`, `lname`, `account`, `cshare`, `nshare`, `amount`, `date_time`) VALUES
(1, 'Save=172686353', 'Kisakye', 'Emma', '1003552975', '30000', '8', '240000.00', '2021-04-23'),
(2, 'Save=29289846', 'Namaganda', 'Ritah Bridget', '1003823735', '30000', '14', '420000', '2021-04-23'),
(3, 'Save=117489709', 'Kakyomya', 'Raymond', '1003765123', '30000', '61', '1830000.00', '2021-04-23'),
(4, 'Save=28410630', 'Nabiweke', 'Kate', '1003481883', '30000', '19', '570000.00', '2021-04-23'),
(5, 'Save=88831569', 'Katerega', 'Teddy', '1003477990', '30000', '94', '2820000', '2021-04-23'),
(6, 'Save=315094697', 'Kaggwa', 'Milly', '1003870838', '30000', '121', '3630000', '2021-04-23'),
(7, 'Save=84980913', 'Musisi', 'Deogratius', '1003667506', '30000', '19', '570000', '2021-04-23'),
(8, 'Save=133921604', 'Tumusiime', 'Joseph', '1003182918', '30000', '10', '300000.00', '2021-04-23'),
(9, 'Save=127536278', 'Yawe', 'Tony', '1003343934', '30000', '567', '17010000.00', '2021-04-23'),
(10, 'Save=77662480', 'Luboobi ', 'Johnmary', '1003558460', '30000', '11', '330000.00', '2021-04-23'),
(11, 'Save=254577708', 'Ntale', 'Simon', '1003712665', '30000', '18', '540000.00', '2021-04-23'),
(12, 'Save=78044334', 'Baganjana', 'Ndawula', '1003986926', '30000', '148', '4440000', '2021-04-23'),
(13, 'Save=183536355', 'Balikuddembe', 'John Fisher', '1003655767', '30000', '656', '19680000.00', '2021-04-23'),
(14, 'Save=228285659', 'Nabakooza', 'Mildred', '1003774859', '30000', '53', '1590000.00', '2021-04-23'),
(15, 'Save=73191335', 'Ndawula', 'Innocent', '1003506742', '30000', '102', '3060000.00', '2021-04-23'),
(16, 'Save=253776797', 'Byarugaba', 'Francis', '1003906652', '30000', '152', '4560000.00', '2021-04-23'),
(17, 'Save=143566782', 'Kiwuka', 'Andrew', '1003222839', '30000', '118', '3540000', '2021-04-23'),
(18, 'Save=55337421', 'Nandawula', 'Magret', '1003499783', '30000', '8', '240000.00', '2021-04-23'),
(19, 'Save=78814264', 'Tumuhaire', 'Flavia', '1003233169', '30000', '47', '1410000.00', '2021-04-23'),
(20, 'Save=284341143', 'Nabadda ', 'Catherine', '1003793087', '30000', '49', '1470000', '2021-04-23'),
(21, 'Save=177238683', 'Nabachwa', 'Barbara', '1003352703', '30000', '11', '330000', '2021-04-23'),
(22, 'Save=23458707', 'Nakasi', 'Annet', '1003102410', '30000', '84', '2520000', '2021-04-23'),
(23, 'Save=95331011', 'Kasirye', 'Martin', '1003765568', '30000', '20', '600000', '2021-04-23'),
(24, 'Save=118004537', 'Kaweesa', 'Fred', '1003733198', '30000', '47', '1410000.00', '2021-04-23'),
(25, 'Save=106394616', 'Kaweesa', 'Irene', '1003213266', '30000', '6', '180000.00', '2021-04-23'),
(26, 'Save=198863730', 'Busulwa', 'Moses', '1003968978', '30000', '44', '1320000.00', '2021-04-23'),
(27, 'Save=95821061', 'Kasirye', 'Naava Georgia', '1003408032', '30000', '22', '660000', '2021-04-23'),
(28, 'Save=22091674', 'Nakachwa', 'Angella', '1003172714', '30000', '6', '180000.00', '2021-04-23'),
(29, 'Save=15759824', 'Bwanswa', 'Sylvester', '1003338387', '30000', '8', '240000.00', '2021-04-23'),
(30, 'Save=247986037', 'Sanyu', 'Agness Kiwuka', '1003563818', '30000', '8', '240000', '2021-04-23'),
(31, 'Save=222976179', 'Nabadda', 'Mary', '1003613243', '30000', '14', '420000.00', '2021-04-23'),
(32, 'Save=253763789', 'Wasajja', 'Cedric', '1003872975', '30000', '20', '600000.00', '2021-04-23'),
(33, 'Save=153400605', 'Ndahura', 'Magdalene', '1003911781', '30000', '29', '870000', '2021-04-23'),
(34, 'Save=211310952', 'Mugabi', 'Mary Cloe', '1003428662', '30000', '6', '180000', '2021-04-23'),
(35, 'Save=69951198', 'Kyomuhendo', 'Grace', '1003804193', '30000', '13', '390000.00', '2021-04-23'),
(36, 'Save=190060669', 'Ndawula', 'Micheal', '1003399002', '30000', '13', '390000', '2021-04-23'),
(37, 'Save=275793454', 'Leon Yawe', 'Christian', '1003979502', '30000', '20', '600000.00', '2021-04-23'),
(38, 'Save=297892286', 'Maria', 'Namuli', '1003850988', '30000', '18', '540000.00', '2021-04-23'),
(39, 'Save=147210147', 'Barongo', 'George', '1003252095', '30000', '22', '660000.00', '2021-04-23'),
(40, 'Save=114364895', 'Antonia Flora', 'Yawe', '1003362410', '30000', '6', '180000.00', '2021-04-23'),
(41, 'Save=283210596', 'Ndawula', 'Rose', '1003300061', '30000', '17', '510000', '2021-04-23'),
(42, 'Save=67833386', 'Businge', 'Camilla', '1003159657', '30000', '10', '300000', '2021-04-23'),
(43, 'Save=218170668', 'Namuli', 'carol', '1003167720', '30000', '12', '360000', '2021-04-23'),
(44, 'Save=304093131', 'Wampamba', 'Conrad', '1003522436', '30000', '8', '240000.00', '2021-04-23'),
(45, 'Save=15960367', 'Cosmas', 'Ntale', '1003933300', '30000', '19', '570000', '2021-04-23'),
(46, 'Save=204522849', 'Nantale ', 'Promise Adrine', '1003269766', '30000', '6', '180000.00', '2021-04-23'),
(47, 'Save=230214934', 'Kimera', 'Richard', '1003426984', '30000', '18', '540000', '2021-04-23'),
(48, 'Save=181347078', 'Angella', 'Nalwanga', '1003958963', '30000', '6', '180000.00', '2021-04-23'),
(49, 'Save=139752892', 'Grayce Pearson', 'Kiyingi', '1003812679', '30000', '6', '180000.00', '2021-04-23'),
(50, 'Save=268286448', 'Marianah', 'Nakiyinji', '1003409521', '30000', '6', '180000.00', '2021-04-23'),
(51, 'Save=118810880', 'Godfrey', 'Mugisha', '1003538860', '30000', '1', '30000.00', '2021-04-23'),
(52, 'Save=279289937', 'George ', 'Kasirye', '1003848482', '30000', '12', '360000', '2021-04-23'),
(53, 'Save=298225140', 'Teddy Clara', 'Batanda', '1003356000', '30000', '11', '330000.00', '2021-04-23'),
(54, 'Save=37828780', 'Calton', 'Junjju', '1003327251', '30000', '12', '360000.00', '2021-04-23'),
(55, 'Save=59362175', 'Malcom', 'Sunna', '1003286247', '30000', '4', '120000.00', '2021-04-23'),
(56, 'Save=201296822', 'Hellen', 'Nakato', '1003256123', '30000', '4', '120000.00', '2021-04-23'),
(57, 'Save=178289320', 'Maria Angella', 'Luswata', '1003856148', '30000', '8', '240000', '2021-04-23'),
(58, 'Save=119484959', 'Joan ', 'Nalunga', '1003984583', '30000', '3', '90000', '2021-04-23'),
(59, 'Save=245063841', 'Rose', 'Kitone ', '1003977189', '30000', '14', '420000', '2021-04-23'),
(60, 'Save=159148021', 'Bafumba', 'Ritah', '1003400765', '30000', '10', '300000.00', '2021-04-23'),
(61, 'Save=206446315', 'Patrick', 'Tinkasimire', '1003638001', '30000', '1', '30000.00', '2021-04-23'),
(62, 'Save=56854765', 'Charlse', 'kaggwa', '1003170433', '30000', '3', '90000.00', '2021-04-23'),
(63, 'Save=132417869', 'Denise', 'Kibenja', '1003279310', '30000', '0', '0', '2021-04-23'),
(64, 'Save=91774641', 'Wanyana', 'Sarah', '1003653130', '30000', '17', '510000', '2021-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `account` int(100) NOT NULL,
  `addrs` text NOT NULL,
  `keen` text NOT NULL,
  `village` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `balance` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `fname`, `lname`, `email`, `phone`, `account`, `addrs`, `keen`, `village`, `district`, `comment`, `username`, `password`, `id`, `image`, `balance`, `date`) VALUES
(1, 'Admin', 'Admin', 'dio@ntwani.com', '256754349059', 1003552956, 'seguku', 'Simon', 'seguku', 'Kampala', 'good', 'Ntwani', 'bnR3YW5p', 'Loan=21319580', 'mimg/6534.png', 0, '2019-09-10'),
(96, 'Kisakye', 'Emma', 'emma@ntwani.com', '+256704910233', 1003552975, 'Busoga', 'Muso', 'Busoga', 'Jinja', 'Active', 'Emma', 'ZW1tYQ==', 'Save=172686353', 'mimg/ass2.png', 1188133, '2019-09-10'),
(97, 'Namaganda', 'Ritah Bridget', 'bridget@ntwani.com', '0779923138', 1003823735, 'Garuga', 'Mega', 'Garuga', 'Wakiso', 'Active', 'Bridget', 'YnJpZGdldA==', 'Save=29289846', 'mimg/IMG_2341.jpg', 820000, '2019-10-28'),
(98, 'Kakyomya', 'Raymond', 'raymond@ntwani.com', '0704808978', 1003765123, 'Bayita', 'Simon', 'Bayita', 'Wakiso', 'Active', 'Raymond', 'cmF5bW9uZA==', 'Save=117489709', 'mimg/IMG_2285.jpg', 620000, '2019-10-28'),
(99, 'Nabiweke', 'Kate', 'kate@ntwani.com', '0718039369', 1003481883, 'Lungujja', 'Bwanswa', 'Lungujja', 'Kampala', 'Active', 'Kate', 'a2F0ZQ==', 'Save=28410630', 'mimg/IMG-20191012-WA0120.jpg', 650000, '2019-10-28'),
(103, 'Katerega', 'Teddy', 'teddy@ntwani.com', '0772341042', 1003477990, 'Lungujja', 'Tony', 'Lungujja', 'Kampala', 'Active', 'Teddy', 'dGVkZHk=', 'Save=88831569', 'mimg/IMG-20191012-WA0090.jpg', 4280000, '2019-10-28'),
(104, 'Kaggwa', 'Milly', 'milly@ntwani.com', '0787965865', 1003870838, 'Kanyanya', 'Kiwuka', 'Kanyanya', 'Kampala', 'Active', 'Milly', 'bWlsbHk=', 'Save=315094697', 'mimg/IMG-20191012-WA0051.jpg', 2445000, '2019-10-28'),
(105, 'Musisi', 'Deogratius', 'diogracom@gmail.com', '0788552338', 1003667506, 'Kitende', 'Simon', 'Kitende', 'Wakiso', 'Active', 'Dio', 'ZGlv', 'Save=84980913', 'mimg/IMG_2299.jpg', 4460000, '2019-10-28'),
(106, 'Tumusiime', 'Joseph', 'joseph@ntwani.com', '0773219197', 1003182918, 'Luzira', 'Musomesa', 'Luzira', 'Kampala', 'Active', 'Joseph', 'am9zZXBo', 'Save=133921604', 'mimg/IMG_2072.jpg', 745000, '2019-10-28'),
(107, 'Yawe', 'Tony', 'yawetony@gmail.com', '0772630576', 1003343934, 'Seguku', 'Balix', 'Katale', 'Wakiso', 'Active', 'Tony', 'dG9ueQ==', 'Save=127536278', 'mimg/IMG_2835.jpg', 5128600, '2019-10-28'),
(108, 'Luboobi ', 'Johnmary', 'johnmary@ntwani.com', '0704924316', 1003558460, 'Mubende', 'Simon', 'Mubende', 'Mubende', 'Active', 'Johnmary', 'Sm9obm1hcnk=', 'Save=77662480', 'mimg/2.jpg', 0, '2019-10-30'),
(109, 'Ntale', 'Simon', 'sntale@opportunitybank.co.ug', '0701982137', 1003712665, 'Kanyanya', 'Yawe Tony - 0772630576', 'Katale- Sseguku', 'Kampala', 'Active', 'Simon', 'U250YWxlOTYzMg==', 'Save=254577708', 'mimg/IMG_2070.jpg', 1200000, '2019-10-30'),
(110, 'Bafumba', 'Ritah', 'ritah@ntwani.com', '0757165350', 1003400765, 'Mulago', 'Musomesa', 'Mulago', 'Kampala', 'Inactive', 'Ritah', 'cml0YWg=', 'Save=159148021', 'mimg/IMG_2752.jpg', 140000, '2019-10-30'),
(111, 'Baganjana', 'Ndawula', 'ndawula@ndawula.com', '0701318671', 1003986926, 'Kanyanya', 'Amooti', 'Kanyanya', 'Kampala', 'Active', 'Ndawula', 'bmRhd3VsYQ==', 'Save=78044334', 'mimg/IMG_2908.jpg', 7797624, '2019-10-30'),
(112, 'Balikuddembe', 'John Fisher', 'jfbalixs@gmail.com', '0782507606', 1003655767, 'Kyaliwajala', 'Flavia', 'Namugongo', 'Kampala', 'Active', 'John', 'am9obg==', 'Save=183536355', 'mimg/IMG_2438.jpg', 3210304, '2019-10-30'),
(113, 'Nabakooza', 'Mildred', 'mildred@ntwani.com', '0756073109', 1003774859, 'Bugema', 'Mega', 'Bugema', 'Kampala', 'Active', 'Mildred', 'bWlsZHJlZA==', 'Save=228285659', 'mimg/3.jpg', 1325000, '2019-10-30'),
(114, 'Ndawula', 'Innocent', 'indawula@gmail.com', '0703882952', 1003506742, 'Namugongo', 'Ndawula', 'Namugongo', 'Kampala', 'Active', 'Innocent', 'aW5ub2NlbnQ=', 'Save=73191335', 'mimg/IMG_2566.jpg', 1774000, '2019-10-30'),
(115, 'Byarugaba', 'Francis', 'francis@ntwani.com', '0703237890', 1003906652, 'Kisubi', 'Ndawula', 'Kisubi', 'Wakiso', 'Active', 'Francis', 'ZnJhbmNpcw==', 'Save=253776797', 'mimg/IMG_2087.jpg', 4471700, '2019-10-30'),
(116, 'Kiwuka', 'Andrew', 'andrew@ntwani.com', '0772939092', 1003222839, 'Buddo', 'Kagwa Milly', 'Buddo', 'Wakiso', 'Active', 'Andrew', 'YW5kcmV3', 'Save=143566782', 'mimg/IMG_2019.jpg', 2610000, '2019-10-30'),
(118, 'Wasswa', 'Peter', 'peter@ntwani.com', '0755203167', 1003721627, 'Kisubi', 'Byarugaba', 'Kisubi', 'Wakiso', 'Active', 'Peter', 'cGV0ZXI=', 'Save=177935266', 'mimg/IMG-20191012-WA0035.jpg', 1436000, '2019-10-30'),
(119, 'Nandawula', 'Magret', 'magret@ntwani.com', '0782241086', 1003499783, 'Kawuku', 'Ritah', 'Kawuku', 'Wakiso', 'Active', 'Magret', 'bWFncmV0', 'Save=55337421', 'mimg/IMG-20191012-WA0102.jpg', 470000, '2019-10-30'),
(120, 'Kyaligonza', 'John Bosco', 'bosco@ntwani.com', '070000000', 1003820713, 'Kalisizo', 'Kimera', 'Kalisizo', 'Masaka', 'Active', 'Bosco', 'Ym9zY28=', 'Save=253197930', 'mimg/IMG-20191012-WA0118.jpg', 1000200, '2019-10-30'),
(121, 'Kimera', 'Richard', 'richard@ntwani.com', '0701309881', 1003426984, 'Namulanda', 'Musomesa', 'Namulanda', 'Wakiso', 'Inactive', 'Richard', 'cmljaGFyZA==', 'Save=230214934', 'mimg/IMG_2588.jpg', 830000, '2019-10-30'),
(122, 'Tumuhaire', 'Flavia', 'flavia@ntwani.com', '0757631399', 1003233169, 'Kyaliwajala', 'Balix', 'Namugongo', 'Kampala', 'Active', 'Flavia', 'Zmxhdmlh', 'Save=78814264', 'mimg/IMG_2448.jpg', 1400528, '2019-10-30'),
(123, 'Nabadda ', 'Catherine', 'cathy@ntwani.com', '0702743814', 1003793087, 'Kyaliwajala', 'Balix', 'Namugongo', 'Kampala', 'Active', 'Catherine', 'Y2F0aGVyaW5l', 'Save=284341143', 'mimg/IMG_2037-1.jpg', 2366000, '2019-10-30'),
(124, 'Nabachwa', 'Barbara', 'barbara@ntwani.com', '0753908252', 1003352703, 'Lungujja', 'Musomesa', 'Lungujja', 'Kampala', 'Active', 'Barbara', 'YmFyYmFyYQ==', 'Save=177238683', 'mimg/IMG_2732.jpg', 134062, '2019-10-30'),
(125, 'Nakasi', 'Annet', 'annet@ntwani.com', '0703641474', 1003102410, 'Nyanama', 'Martin', 'Zana', 'Kampala', 'Active', 'Annet', 'YW5uZXQ=', 'Save=23458707', 'mimg/IMG_1977.jpg', 3905000, '2019-10-30'),
(126, 'Kasirye', 'Martin', 'martin@ntwani.com', '0703238667', 1003765568, 'Nyanama', 'Annet', 'Zana', 'Kampala', 'Active', 'Martin', 'bWFydGlu', 'Save=95331011', 'mimg/IMG_1981.jpg', 1881000, '2019-10-30'),
(127, 'Kaweesa', 'Fred', 'fred@ntwani.com', '0703977966', 1003733198, 'Kanyanya', 'Ndwaula', 'Kanyanya', 'Kampala', 'Active', 'Fred', 'ZnJlZA==', 'Save=118004537', 'mimg/Fred.jpg', 5230000, '2019-10-30'),
(128, 'Kaweesa', 'Irene', 'irene@ntwani.com', '0706662111', 1003213266, 'Kanyanya', 'Fred', 'Kanyanya', 'Kampala', 'Active', 'Irene', 'aXJlbmU=', 'Save=106394616', 'mimg/Pink.jpg', 1680000, '2019-10-30'),
(129, 'Busulwa', 'Moses', 'moses@ntwani.com', '0772105216', 1003968978, 'Kampala', 'Kagwa', 'Kampala', 'Kampala', 'Active', 'Moses', 'bW9zZXM=', 'Save=198863730', 'mimg/5.jpg', 106459, '2019-10-30'),
(130, 'Kasirye', 'Naava Georgia', 'georgia@ntwani.com', '07000000', 1003408032, 'Nyanama', 'Annet', 'Nyanama', 'Kampala', 'Active', 'Georgia', 'Z2VvcmdpYQ==', 'Save=95821061', 'mimg/6.jpg', 933000, '2019-10-30'),
(131, 'Nakachwa', 'Angella', 'angella@ntwani.com', '0752793050', 1003172714, 'Seguku', 'Yawe', 'Katale', 'Wakiso', 'Active', 'Angella', 'YW5nZWxsYQ==', 'Save=22091674', 'mimg/Angello.jpg', 840000, '2019-10-30'),
(132, 'Bwanswa', 'Sylvester', 'Sylvester@ntwani.com', '0701057942', 1003338387, 'Buloba', 'Kate', 'Buloba', 'Wakiso', 'Active', 'Sylvester', 'c3lsdmVzdGVy', 'Save=15759824', 'mimg/Sylve.jpg', 530000, '2019-10-30'),
(133, 'Sanyu', 'Agness Kiwuka', 'agnes@ntwani.com', '0774161262', 1003563818, 'Buddo', 'Kiwuka', 'Buddo', 'Wakiso', 'Active', 'Agness', 'YWduZXNz', 'Save=247986037', 'mimg/Agie.jpg', 880000, '2019-10-30'),
(134, 'Nabadda', 'Mary', 'mary@ntwani.com', '+256756978805', 1003613243, 'Zana', 'Nakasi', 'Zana', 'Kampala', 'Active', 'Mary', 'bWFyeQ==', 'Save=222976179', 'mimg/IMG_2484.jpg', 760000, '2019-10-30'),
(136, 'Wasajja', 'Cedric', 'cedric@ntwani.com', '070000000', 1003872975, 'Kyaliwajjala', 'Balix', 'Namugongo', 'Kampala', 'Active', 'Cedric', 'MXMyZTN4NDU2', 'Save=253763789', 'mimg/8.jpg', 910000, '2019-10-30'),
(137, 'Ndahura', 'Magdalene', 'nagdalene@ntwani.com', '0704924309', 1003911781, 'Kanyanya', 'Ndawula', 'Kanyanya', 'Kampala', 'Active', 'Magdalene', 'bWFnZGFsZW5l', 'Save=153400605', 'mimg/IMG-20191012-WA0056.jpg', 1220000, '2019-10-30'),
(138, 'Mugabi', 'Mary Cloe', 'cloe@ntwani.com', '0779923138', 1003428662, 'Garuga', 'Ritah', 'Garuga', 'Wakiso', 'Active', 'Cloe', 'Y2xvZQ==', 'Save=211310952', 'mimg/IMG_2092.jpg', 370000, '2019-10-30'),
(141, 'Kyomuhendo', 'Grace', 'grace@ntwani.com', '0752732904', 1003804193, 'Kyengela', 'Ntwani', 'Kyengela', 'Wakiso', 'Active', 'Grace', 'Z3JhY2U=', 'Save=69951198', 'mimg/11.jpg', 1690000, '2019-10-30'),
(142, 'Leon Yawe', 'Christian', 'leon@ntwani.com', '0772630576', 1003979502, 'Seguku', 'Tony', 'Katale', 'Wakiso', 'Active', 'Leon', 'bGVvbg==', 'Save=275793454', 'mimg/IMG_2053-1.jpg', 900000, '2019-10-30'),
(143, 'Wanyana', 'Sarah', 'sarah@ntwani.com', '0790850909', 1003653130, 'Kampala', 'Kagwa', 'kampala', 'Kampala', 'Active', 'Sarah', 'MTIzNA==', 'Save=91774641', 'mimg/IMG_1975.jpg', 260000, '2019-10-30'),
(144, 'Barongo', 'George', 'george@ntwani.com', '0772521577', 1003252095, 'Namugongo', 'Balix', 'Namugongo', 'Kampala', 'Active', 'George', 'Z2Vvcmdl', 'Save=147210147', 'mimg/13.jpg', 4450000, '2019-10-30'),
(146, 'Antonia Flora', 'Yawe', 'flora@ntwani.com', '0752793050', 1003362410, 'Seguku', 'Nakachwa', 'Katale', 'Wakiso', 'Active', 'Flora', 'ZmxvcmE=', 'Save=114364895', 'mimg/IMG-20191012-WA0041.jpg', 600000, '2019-10-30'),
(148, 'Ndawula', 'Rose', 'rose@ntwani.com', '0705648867', 1003300061, 'Nalubude', 'Mike', 'Nalubude', 'Wakiso', 'Active', 'Rose', 'cm9zZQ==', 'Save=283210596', 'mimg/15.jpg', 1060000, '2019-10-31'),
(149, 'Businge', 'Camilla', 'camilla@ntwani.com', '070000000', 1003159657, 'kampala', 'Nakiwere Carol', 'kampala', 'Kampala', 'Active', 'Camilla', 'Y2FtaWxsYQ==', 'Save=67833386', 'mimg/16.jpg', 750000, '2019-10-31'),
(150, 'Namuli', 'carol', 'carol@ntwani.com', '070000000', 1003167720, 'Nkozi', 'Byarugaba', 'Nkozi', 'Masaka', 'Active', 'Carol', 'Y2Fyb2w=', 'Save=218170668', 'mimg/IMG-20191012-WA0092.jpg', 1340000, '2019-10-31'),
(151, 'Ndawula', 'Micheal', 'micheal@ntwani.com', '0758444424', 1003399002, 'Nalubude', 'Natabbi', 'Nalubude', 'Wakiso', 'Active', 'Micheal', 'bWljaGVhbA==', 'Save=190060669', 'mimg/IMG_2541.jpg', 980000, '2019-10-31'),
(152, 'Wampamba', 'Conrad', 'conrod@ntwani.com', '070000000', 1003522436, 'kyaliwajala', 'Balix', 'Namugongo', 'Kampala', 'Good', 'Conrad', 'Y29ucmFk', 'Save=304093131', 'mimg/21.jpg', 560000, '2019-12-08'),
(153, 'Cosmas', 'Ntale', 'cosmas@ntwani.com', '0700000800', 1003933300, 'Kanyanya', 'Simon', 'Kanyanya', 'Kampala', 'Active', 'Cosmas', 'Y29zbWFz', 'Save=15960367', 'mimg/17.jpg', 520000, '2021-04-11'),
(154, 'Nantale ', 'Promise Adrine', 'promise@ntwani.com', '07558855220', 1003269766, 'Kanyanya', 'Simon', 'Kanyanya', 'Kampala', 'Active ', 'Promise', 'cHJvbWlzZQ==', 'Save=204522849', 'mimg/18.jpg', 240000, '2021-04-11'),
(156, 'Angella', 'Nalwanga', 'nalwanga@ntwani.com', '070008005', 1003958963, 'Kanyanya', 'Simon', 'kanyanya', 'Kampala', 'Active', 'Nalwanga', 'bmFsd2FuZ2E=', 'Save=181347078', 'mimg/20.jpg', 240000, '2021-04-11'),
(157, 'Grayce Pearson', 'Kiyingi', 'grayce@ntwani.com', '07055883800', 1003812679, 'Kanyanya', 'Simon', 'Kanyanya', 'Wakiso', 'Active ', 'Grayce', 'Z3JheWNl', 'Save=139752892', 'mimg/21.jpg', 240000, '2021-04-11'),
(158, 'Marianah', 'Nakiyinji', 'marianah@ntwani.com', '070000000', 1003409521, 'kanyanya', 'simon', 'kanyanya', 'Wakiso', 'Active', 'Marianah', 'bWFyaWFuYWg=', 'Save=268286448', 'mimg/22.jpg', 240000, '2021-04-11'),
(159, 'Godfrey', 'Mugisha', 'godfrey@ntwani.com', '070000000', 1003538860, 'Kanyanya', 'simon', 'kanyanya', 'Mityana', 'Active', 'Godfrey', 'Z29kZnJleQ==', 'Save=118810880', 'mimg/23.jpg', 30000, '2021-04-11'),
(160, 'George ', 'Kasirye', 'kasirye@ntwani.com', '07000000', 1003848482, 'Zana', 'Annet', 'zana', 'Wakiso', 'Active', 'Kasirye', 'a2FzaXJ5ZQ==', 'Save=279289937', 'mimg/25.jpg', 425000, '2021-04-12'),
(161, 'Teddy Clara', 'Batanda', 'clara@ntwani.com', '0700000', 1003356000, 'kyaliwajara', 'Flavia', 'kyaliwajala', 'Wakiso', 'Active', 'Clara', 'Y2xhcmE=', 'Save=298225140', 'mimg/26.jpg', 340000, '2021-04-12'),
(162, 'Calton', 'Junjju', 'calton@ntwani.com', '07000000', 1003327251, 'kyaliwajala', 'Balix', 'kyaliwajala', 'Wakiso', 'Active', 'Calton', 'Y2FsdG9u', 'Save=37828780', 'mimg/27.jpg', 340000, '2021-04-12'),
(163, 'Malcom', 'Sunna', 'malcom@ntwani.com', '070000000', 1003286247, 'kyaliwajala', 'Balix', 'kyaliwajala', 'Wakiso', 'Active ', 'Malcom', 'bWFsY29t', 'Save=59362175', 'mimg/28.jpg', 80000, '2021-04-12'),
(164, 'Hellen', 'Nakato', 'hellen@ntwani.com', '070000000', 1003256123, 'kyaliwajala', 'Balix', 'kyaliwajjala', 'Kampala', 'Active', 'Hellen', 'aGVsbGVu', 'Save=201296822', 'mimg/24.jpg', 80000, '2021-04-20'),
(165, 'Joan ', 'Nalunga', 'joan@ntwani.com', '0753550181', 1003984583, 'Lweza', 'Deo Jr', 'Lweza', 'Wakiso', 'Active ', 'Joan', 'am9hbg==', 'Save=119484959', 'mimg/29.jpg', 60000, '2021-04-20'),
(166, 'Maria Angella', 'Luswata', 'luswata@ntwani.com', '07000000', 1003856148, 'buddo', 'kiwuka', 'buddo', 'Wakiso', 'Active ', 'Luswata', 'bHVzd2F0YQ==', 'Save=178289320', 'mimg/30.jpg', 210000, '2021-04-20'),
(167, 'Rose', 'Kitone ', 'kitone@ntwani.com', '070000000', 1003977189, 'kanyanya', 'Adyeeri', 'kanyanya', 'Wakiso', 'Active', 'Kitone', 'a2l0b25l', 'Save=245063841', 'mimg/31.jpg', 300000, '2021-04-20'),
(168, 'Patrick', 'Tinkasimire', 'patrick@ntwani.com', '07000000', 1003638001, 'lungujja', 'dambya', 'lungujja', 'Kampala', 'Active', 'Patrick', 'cGF0cmljaw==', 'Save=206446315', 'mimg/32.jpg', 230000, '2021-04-20'),
(169, 'Charlse', 'kaggwa', 'charlse@ntwani.com', '070000000', 1003170433, 'kanyanya', 'Sarah', 'kanyanya', 'Wakiso', 'Active', 'Charlse', 'Y2hhcmxzZQ==', 'Save=56854765', 'mimg/33.jpg', 60000, '2021-04-20'),
(170, 'Denise', 'Kibenja', 'denise@ntwani.com', '070000000', 1003279310, 'kampala', 'Sarah', 'kampala', 'Wakiso', 'ACCOUNT FROZEN ON REQUEST', 'Denise', 'ZGVuaXNl', 'Save=132417869', 'mimg/34.jpg', 0, '2021-04-20'),
(171, 'Maria', 'Namuli', 'namuli@ntwani.com', '07000000', 1003850988, 'kampala', 'Sarah', 'kampala', 'Wakiso', 'Active', 'Namuli', 'bmFtdWxp', 'Save=297892286', 'mimg/35.jpg', 1460000, '2021-04-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backup`
--
ALTER TABLE `backup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_permission`
--
ALTER TABLE `emp_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `last_update`
--
ALTER TABLE `last_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_info`
--
ALTER TABLE `loan_info`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `systemset`
--
ALTER TABLE `systemset`
  ADD PRIMARY KEY (`sysid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tt_shares`
--
ALTER TABLE `tt_shares`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backup`
--
ALTER TABLE `backup`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `emp_permission`
--
ALTER TABLE `emp_permission`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=579;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `last_update`
--
ALTER TABLE `last_update`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loan_info`
--
ALTER TABLE `loan_info`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `systemset`
--
ALTER TABLE `systemset`
  MODIFY `sysid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=750;

--
-- AUTO_INCREMENT for table `tt_shares`
--
ALTER TABLE `tt_shares`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
