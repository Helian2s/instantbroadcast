-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Час створення: Лют 04 2015 р., 12:57
-- Версія сервера: 5.6.21
-- Версія PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `whatsup`
--

-- --------------------------------------------------------

--
-- Структура таблиці `mobile_number`
--

CREATE TABLE IF NOT EXISTS `mobile_number` (
`id` int(11) NOT NULL,
  `mobile_number` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `mobile_number`
--

INSERT INTO `mobile_number` (`id`, `mobile_number`) VALUES
(1, '380999760371'),
(2, '380957506365'),
(3, '380999760371'),
(4, '380999760371'),
(5, '380501230934'),
(6, '380501230934'),
(7, '380975640134'),
(8, '380975640134'),
(9, '380663632926'),
(10, '380663632926'),
(11, '380447623560'),
(12, '380447623560'),
(13, '380661045178'),
(14, '380661045178'),
(15, '380612450189'),
(16, '380612450189'),
(17, '380999760372'),
(18, '380999760372'),
(19, '380935671093'),
(20, '380935671093'),
(21, '380612350208'),
(22, '380612350208'),
(23, '380508914502'),
(24, '380508914502'),
(25, '380950239173'),
(26, '380950239173'),
(27, '380442490123'),
(28, '380442490123'),
(29, '380983450151'),
(30, '380983450151'),
(31, '380509120374'),
(32, '380509120374'),
(33, '380661042398'),
(34, '380661042398'),
(35, '380669810254'),
(36, '380669810254'),
(37, '380993460371'),
(38, '380993460371'),
(39, '380448910351'),
(40, '380448910351'),
(41, '380999760378'),
(42, '380999760378'),
(43, '380980763418'),
(44, '380980763418'),
(45, '380999702371'),
(46, '380999702371'),
(47, '380975640134'),
(48, '380975640134'),
(49, '380663632926'),
(50, '380663632926'),
(51, '380447623560'),
(52, '380447623560'),
(53, '380661045178'),
(54, '380661045178'),
(55, '380612450189'),
(56, '380612450189'),
(57, '380999765601'),
(58, '380999765601'),
(59, '380935671093'),
(60, '380935671093'),
(61, '380612350208'),
(62, '380612350208'),
(63, '380612350204'),
(64, '380612350204'),
(65, '380950239173'),
(66, '380950239173'),
(67, '380442490123'),
(68, '380442490123'),
(69, '380982061383'),
(70, '380982061383'),
(71, '380509120374'),
(72, '380509120374'),
(73, '380661042398'),
(74, '380661042398'),
(75, '380669810254'),
(76, '380669810254'),
(77, '380999581371'),
(78, '380999581371'),
(79, '380448910351'),
(80, '380448910351'),
(81, '380999765602'),
(82, '380999765602'),
(83, '380980763418'),
(84, '380980763418'),
(85, '380501230934'),
(86, '380501230934'),
(87, '380975640134'),
(88, '380975640134'),
(89, '380663632926'),
(90, '380663632926'),
(91, '380447623560'),
(92, '380447623560'),
(93, '380661045178'),
(94, '380661045178'),
(95, '380612450189'),
(96, '380612450189'),
(97, '380999760372'),
(98, '380999760372'),
(99, '390999760371'),
(100, '390999760371'),
(101, '380612350208'),
(102, '380612350208'),
(103, '380508914502'),
(104, '380508914502'),
(105, '380950239173'),
(106, '380950239173'),
(107, '380442490123'),
(108, '380442490123'),
(109, '380983450151'),
(110, '380983450151'),
(111, '380509120374'),
(112, '380509120374'),
(113, '380661042398'),
(114, '380661042398'),
(115, '380669810254'),
(116, '380669810254'),
(117, '380993460371'),
(118, '380993460371'),
(119, '380999760371'),
(120, '380999760371'),
(121, '380999760378'),
(122, '380999760378'),
(123, '380980763418'),
(124, '380980763418'),
(125, '380501230934'),
(126, '380501230934'),
(127, '380975640134'),
(128, '380975640134'),
(129, '380663632926'),
(130, '380663632926'),
(131, '380447623560'),
(132, '380447623560'),
(133, '380661045178'),
(134, '380661045178'),
(135, '380612450189'),
(136, '380612450189'),
(137, '380999760372'),
(138, '380999760372'),
(139, '380935671093'),
(140, '380935671093'),
(141, '380612350208'),
(142, '380612350208'),
(143, '380508914502'),
(144, '380508914502'),
(145, '380950239173'),
(146, '380950239173'),
(147, '380442490123'),
(148, '380442490123'),
(149, '380983450151'),
(150, '380983450151'),
(151, '380509120374'),
(152, '380509120374'),
(153, '380661042398'),
(154, '380661042398'),
(155, '380669810254'),
(156, '380669810254'),
(157, '380999581371'),
(158, '380999581371'),
(159, '380448910351'),
(160, '380448910351'),
(161, '380999760378'),
(162, '380999760378'),
(163, '380980763418'),
(164, '380980763418'),
(165, '380501230934'),
(166, '380501230934'),
(167, '380975640134'),
(168, '380975640134'),
(169, '380663632926'),
(170, '380663632926'),
(171, '380447623560'),
(172, '380447623560'),
(173, '380661045178'),
(174, '380661045178'),
(175, '380612450189'),
(176, '380612450189'),
(177, '380999760372'),
(178, '380999760372'),
(179, '380999760371'),
(180, '380999760371'),
(181, '380612350208'),
(182, '380612350208'),
(183, '380508914502'),
(184, '380508914502'),
(185, '380950239173'),
(186, '380950239173'),
(187, '380442490123'),
(188, '380442490123'),
(189, '380983450151'),
(190, '380983450151'),
(191, '380509120374'),
(192, '380509120374'),
(193, '380661042398'),
(194, '380661042398'),
(195, '380669810254'),
(196, '380669810254'),
(197, '380999581371'),
(198, '380999581371'),
(199, '380999760371'),
(200, '380999760371'),
(201, '1'),
(202, '1'),
(203, '2'),
(204, '2'),
(205, '3'),
(206, '3'),
(207, '4'),
(208, '4'),
(209, '5'),
(210, '5'),
(211, '6'),
(212, '6'),
(213, '7'),
(214, '7'),
(215, '8'),
(216, '8'),
(217, '9'),
(218, '9'),
(219, '10'),
(220, '10'),
(221, '11'),
(222, '11'),
(223, '12'),
(224, '12'),
(225, '13'),
(226, '13'),
(227, '14'),
(228, '14'),
(229, '15'),
(230, '15'),
(231, '16'),
(232, '16'),
(233, '17'),
(234, '17'),
(235, '18'),
(236, '18'),
(237, '19'),
(238, '19'),
(239, '20'),
(240, '20'),
(241, '21'),
(242, '21'),
(243, '22'),
(244, '22'),
(245, '23'),
(246, '23'),
(247, '24'),
(248, '24'),
(249, '25'),
(250, '25'),
(251, '26'),
(252, '26'),
(253, '27'),
(254, '27'),
(255, '28'),
(256, '28'),
(257, '29'),
(258, '29'),
(259, '30'),
(260, '30'),
(261, '31'),
(262, '31'),
(263, '32'),
(264, '32'),
(265, '33'),
(266, '33'),
(267, '34'),
(268, '34'),
(269, '35'),
(270, '35'),
(271, '36'),
(272, '36'),
(273, '37'),
(274, '37'),
(275, '38'),
(276, '38'),
(277, '39'),
(278, '39'),
(279, '40'),
(280, '40'),
(281, '41'),
(282, '41'),
(283, '42'),
(284, '42'),
(285, '43'),
(286, '43'),
(287, '44'),
(288, '44'),
(289, '45'),
(290, '45'),
(291, '46'),
(292, '46'),
(293, '47'),
(294, '47'),
(295, '48'),
(296, '48'),
(297, '49'),
(298, '49'),
(299, '50'),
(300, '50'),
(301, '51'),
(302, '51'),
(303, '52'),
(304, '52'),
(305, '53'),
(306, '53'),
(307, '54'),
(308, '54'),
(309, '55'),
(310, '55'),
(311, '56'),
(312, '56'),
(313, '57'),
(314, '57'),
(315, '58'),
(316, '58'),
(317, '59'),
(318, '59'),
(319, '60'),
(320, '60'),
(321, '61'),
(322, '61'),
(323, '62'),
(324, '62'),
(325, '63'),
(326, '63'),
(327, '64'),
(328, '64'),
(329, '65'),
(330, '65'),
(331, '66'),
(332, '66'),
(333, '67'),
(334, '67'),
(335, '68'),
(336, '68'),
(337, '69'),
(338, '69'),
(339, '70'),
(340, '70'),
(341, '71'),
(342, '71'),
(343, '72'),
(344, '72'),
(345, '73'),
(346, '73'),
(347, '74'),
(348, '74'),
(349, '75'),
(350, '75'),
(351, '76'),
(352, '76'),
(353, '77'),
(354, '77'),
(355, '78'),
(356, '78'),
(357, '79'),
(358, '79'),
(359, '80'),
(360, '80'),
(361, '81'),
(362, '81'),
(363, '82'),
(364, '82'),
(365, '83'),
(366, '83'),
(367, '84'),
(368, '84'),
(369, '85'),
(370, '85'),
(371, '86'),
(372, '86'),
(373, '87'),
(374, '87'),
(375, '88'),
(376, '88'),
(377, '89'),
(378, '89'),
(379, '90'),
(380, '90'),
(381, '91'),
(382, '91'),
(383, '92'),
(384, '92'),
(385, '93'),
(386, '93'),
(387, '94'),
(388, '94'),
(389, '95'),
(390, '95'),
(391, '96'),
(392, '96'),
(393, '97'),
(394, '97'),
(395, '98'),
(396, '98'),
(397, '99'),
(398, '99'),
(399, '100'),
(400, '100'),
(401, '1'),
(402, '1'),
(403, '2'),
(404, '2'),
(405, '3'),
(406, '3'),
(407, '4'),
(408, '4'),
(409, '5'),
(410, '5'),
(411, '6'),
(412, '6'),
(413, '7'),
(414, '7'),
(415, '8'),
(416, '8'),
(417, '9'),
(418, '9'),
(419, '10'),
(420, '10'),
(421, '11'),
(422, '11'),
(423, '12'),
(424, '12'),
(425, '13'),
(426, '13'),
(427, '14'),
(428, '14'),
(429, '15'),
(430, '15'),
(431, '16'),
(432, '16'),
(433, '17'),
(434, '17'),
(435, '18'),
(436, '18'),
(437, '19'),
(438, '19'),
(439, '20'),
(440, '20'),
(441, '21'),
(442, '21'),
(443, '22'),
(444, '22'),
(445, '23'),
(446, '23'),
(447, '24'),
(448, '24'),
(449, '25'),
(450, '25'),
(451, '26'),
(452, '26'),
(453, '27'),
(454, '27'),
(455, '28'),
(456, '28'),
(457, '29'),
(458, '29'),
(459, '30'),
(460, '30'),
(461, '31'),
(462, '31'),
(463, '32'),
(464, '32'),
(465, '33'),
(466, '33'),
(467, '34'),
(468, '34'),
(469, '35'),
(470, '35'),
(471, '36'),
(472, '36'),
(473, '37'),
(474, '37'),
(475, '38'),
(476, '38'),
(477, '39'),
(478, '39'),
(479, '40'),
(480, '40'),
(481, '41'),
(482, '41'),
(483, '42'),
(484, '42'),
(485, '43'),
(486, '43'),
(487, '44'),
(488, '44'),
(489, '45'),
(490, '45'),
(491, '46'),
(492, '46'),
(493, '47'),
(494, '47'),
(495, '48'),
(496, '48'),
(497, '49'),
(498, '49'),
(499, '50'),
(500, '50'),
(501, '51'),
(502, '51'),
(503, '52'),
(504, '52'),
(505, '53'),
(506, '53'),
(507, '54'),
(508, '54'),
(509, '55'),
(510, '55'),
(511, '56'),
(512, '56'),
(513, '57'),
(514, '57'),
(515, '58'),
(516, '58'),
(517, '59'),
(518, '59'),
(519, '60'),
(520, '60'),
(521, '61'),
(522, '61'),
(523, '62'),
(524, '62'),
(525, '63'),
(526, '63'),
(527, '64'),
(528, '64'),
(529, '65'),
(530, '65'),
(531, '66'),
(532, '66'),
(533, '67'),
(534, '67'),
(535, '68'),
(536, '68'),
(537, '69'),
(538, '69'),
(539, '70'),
(540, '70'),
(541, '71'),
(542, '71'),
(543, '72'),
(544, '72'),
(545, '73'),
(546, '73'),
(547, '74'),
(548, '74'),
(549, '75'),
(550, '75'),
(551, '76'),
(552, '76'),
(553, '77'),
(554, '77'),
(555, '78'),
(556, '78'),
(557, '79'),
(558, '79'),
(559, '80'),
(560, '80'),
(561, '81'),
(562, '81'),
(563, '82'),
(564, '82'),
(565, '83'),
(566, '83'),
(567, '84'),
(568, '84'),
(569, '85'),
(570, '85'),
(571, '86'),
(572, '86'),
(573, '87'),
(574, '87'),
(575, '88'),
(576, '88'),
(577, '89'),
(578, '89'),
(579, '90'),
(580, '90'),
(581, '91'),
(582, '91'),
(583, '92'),
(584, '92'),
(585, '93'),
(586, '93'),
(587, '94'),
(588, '94'),
(589, '95'),
(590, '95'),
(591, '96'),
(592, '96'),
(593, '97'),
(594, '97'),
(595, '98'),
(596, '98'),
(597, '99'),
(598, '99'),
(599, '100'),
(600, '100'),
(601, '1'),
(602, '1'),
(603, '2'),
(604, '2'),
(605, '3'),
(606, '3'),
(607, '4'),
(608, '4'),
(609, '5'),
(610, '5'),
(611, '6'),
(612, '6'),
(613, '7'),
(614, '7'),
(615, '8'),
(616, '8'),
(617, '9'),
(618, '9'),
(619, '10'),
(620, '10'),
(621, '11'),
(622, '11'),
(623, '12'),
(624, '12'),
(625, '13'),
(626, '13'),
(627, '14'),
(628, '14'),
(629, '15'),
(630, '15'),
(631, '16'),
(632, '16'),
(633, '17'),
(634, '17'),
(635, '18'),
(636, '18'),
(637, '19'),
(638, '19'),
(639, '20'),
(640, '20'),
(641, '21'),
(642, '21'),
(643, '22'),
(644, '22'),
(645, '23'),
(646, '23'),
(647, '24'),
(648, '24'),
(649, '25'),
(650, '25'),
(651, '26'),
(652, '26'),
(653, '27'),
(654, '27'),
(655, '28'),
(656, '28'),
(657, '29'),
(658, '29'),
(659, '30'),
(660, '30'),
(661, '31'),
(662, '31'),
(663, '32'),
(664, '32'),
(665, '33'),
(666, '33'),
(667, '34'),
(668, '34'),
(669, '35'),
(670, '35'),
(671, '36'),
(672, '36'),
(673, '37'),
(674, '37'),
(675, '38'),
(676, '38'),
(677, '39'),
(678, '39'),
(679, '40'),
(680, '40'),
(681, '41'),
(682, '41'),
(683, '42'),
(684, '42'),
(685, '43'),
(686, '43'),
(687, '44'),
(688, '44'),
(689, '45'),
(690, '45'),
(691, '46'),
(692, '46'),
(693, '47'),
(694, '47'),
(695, '48'),
(696, '48'),
(697, '49'),
(698, '49'),
(699, '50'),
(700, '50'),
(701, '51'),
(702, '51'),
(703, '52'),
(704, '52'),
(705, '53'),
(706, '53'),
(707, '54'),
(708, '54'),
(709, '55'),
(710, '55'),
(711, '56'),
(712, '56'),
(713, '57'),
(714, '57'),
(715, '58'),
(716, '58'),
(717, '59'),
(718, '59'),
(719, '60'),
(720, '60'),
(721, '61'),
(722, '61'),
(723, '62'),
(724, '62'),
(725, '63'),
(726, '63'),
(727, '64'),
(728, '64'),
(729, '65'),
(730, '65'),
(731, '66'),
(732, '66'),
(733, '67'),
(734, '67'),
(735, '68'),
(736, '68'),
(737, '69'),
(738, '69'),
(739, '70'),
(740, '70'),
(741, '71'),
(742, '71'),
(743, '72'),
(744, '72'),
(745, '73'),
(746, '73'),
(747, '74'),
(748, '74'),
(749, '75'),
(750, '75'),
(751, '76'),
(752, '76'),
(753, '77'),
(754, '77'),
(755, '78'),
(756, '78'),
(757, '79'),
(758, '79'),
(759, '80'),
(760, '80'),
(761, '81'),
(762, '81'),
(763, '82'),
(764, '82'),
(765, '83'),
(766, '83'),
(767, '84'),
(768, '84'),
(769, '85'),
(770, '85'),
(771, '86'),
(772, '86'),
(773, '87'),
(774, '87'),
(775, '88'),
(776, '88'),
(777, '89'),
(778, '89'),
(779, '90'),
(780, '90'),
(781, '91'),
(782, '91'),
(783, '92'),
(784, '92'),
(785, '93'),
(786, '93'),
(787, '94'),
(788, '94'),
(789, '95'),
(790, '95'),
(791, '96'),
(792, '96'),
(793, '97'),
(794, '97'),
(795, '98'),
(796, '98'),
(797, '99'),
(798, '99'),
(799, '100'),
(800, '100'),
(801, '1'),
(802, '1'),
(803, '2'),
(804, '2'),
(805, '3'),
(806, '3'),
(807, '4'),
(808, '4'),
(809, '5'),
(810, '5'),
(811, '6'),
(812, '6'),
(813, '7'),
(814, '7'),
(815, '8'),
(816, '8'),
(817, '9'),
(818, '9'),
(819, '10'),
(820, '10'),
(821, '11'),
(822, '11'),
(823, '12'),
(824, '12'),
(825, '13'),
(826, '13'),
(827, '14'),
(828, '14'),
(829, '15'),
(830, '15'),
(831, '16'),
(832, '16'),
(833, '17'),
(834, '17'),
(835, '18'),
(836, '18'),
(837, '19'),
(838, '19'),
(839, '20'),
(840, '20'),
(841, '21'),
(842, '21'),
(843, '22'),
(844, '22'),
(845, '23'),
(846, '23'),
(847, '24'),
(848, '24'),
(849, '25'),
(850, '25'),
(851, '26'),
(852, '26'),
(853, '27'),
(854, '27'),
(855, '28'),
(856, '28'),
(857, '29'),
(858, '29'),
(859, '30'),
(860, '30'),
(861, '31'),
(862, '31'),
(863, '32'),
(864, '32'),
(865, '33'),
(866, '33'),
(867, '34'),
(868, '34'),
(869, '35'),
(870, '35'),
(871, '36'),
(872, '36'),
(873, '37'),
(874, '37'),
(875, '38'),
(876, '38'),
(877, '39'),
(878, '39'),
(879, '40'),
(880, '40'),
(881, '41'),
(882, '41'),
(883, '42'),
(884, '42'),
(885, '43'),
(886, '43'),
(887, '44'),
(888, '44'),
(889, '45'),
(890, '45'),
(891, '46'),
(892, '46'),
(893, '47'),
(894, '47'),
(895, '48'),
(896, '48'),
(897, '49'),
(898, '49'),
(899, '50'),
(900, '50'),
(901, '51'),
(902, '51'),
(903, '52'),
(904, '52'),
(905, '53'),
(906, '53'),
(907, '54'),
(908, '54'),
(909, '55'),
(910, '55'),
(911, '56'),
(912, '56'),
(913, '57'),
(914, '57'),
(915, '58'),
(916, '58'),
(917, '59'),
(918, '59'),
(919, '60'),
(920, '60'),
(921, '61'),
(922, '61'),
(923, '62'),
(924, '62'),
(925, '63'),
(926, '63'),
(927, '64'),
(928, '64'),
(929, '65'),
(930, '65'),
(931, '66'),
(932, '66'),
(933, '67'),
(934, '67'),
(935, '68'),
(936, '68'),
(937, '69'),
(938, '69'),
(939, '70'),
(940, '70'),
(941, '71'),
(942, '71'),
(943, '72'),
(944, '72'),
(945, '73'),
(946, '73'),
(947, '74'),
(948, '74'),
(949, '75'),
(950, '75'),
(951, '76'),
(952, '76'),
(953, '77'),
(954, '77'),
(955, '78'),
(956, '78'),
(957, '79'),
(958, '79'),
(959, '80'),
(960, '80'),
(961, '81'),
(962, '81'),
(963, '82'),
(964, '82'),
(965, '83'),
(966, '83'),
(967, '84'),
(968, '84'),
(969, '85'),
(970, '85'),
(971, '86'),
(972, '86'),
(973, '87'),
(974, '87'),
(975, '88'),
(976, '88'),
(977, '89'),
(978, '89'),
(979, '90'),
(980, '90'),
(981, '91'),
(982, '91'),
(983, '92'),
(984, '92'),
(985, '93'),
(986, '93'),
(987, '94'),
(988, '94'),
(989, '95'),
(990, '95'),
(991, '96'),
(992, '96'),
(993, '97'),
(994, '97'),
(995, '98'),
(996, '98'),
(997, '99'),
(998, '99'),
(999, '100'),
(1000, '100');

-- --------------------------------------------------------

--
-- Структура таблиці `sender`
--

CREATE TABLE IF NOT EXISTS `sender` (
`id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `identity` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `number` varchar(150) NOT NULL,
  `pause` float NOT NULL,
  `plus` int(11) DEFAULT NULL,
  `min` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `sender`
--

INSERT INTO `sender` (`id`, `name`, `identity`, `password`, `number`, `pause`, `plus`, `min`) VALUES
(1, 'Number_1', '%17%9fkd4ll%c5%c3ti%df%7cd%8b%a9%a9%fd%1du', 'ADBWpJ7j91cyNLTyApY97UfNWLA=', '380676188068', 1, 8, 0),
(4, 'test', 'trtr', 'yyy=', '333333333', 112, 0, 1);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `mobile_number`
--
ALTER TABLE `mobile_number`
 ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `sender`
--
ALTER TABLE `sender`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `mobile_number`
--
ALTER TABLE `mobile_number`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1001;
--
-- AUTO_INCREMENT для таблиці `sender`
--
ALTER TABLE `sender`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
