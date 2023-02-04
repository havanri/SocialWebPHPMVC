-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 06, 2022 lúc 06:26 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `social_media`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `addfriend`
--

CREATE TABLE `addfriend` (
  `id_addfriend` int(11) NOT NULL,
  `id_user_send` int(11) NOT NULL,
  `id_user_receive` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `addfriend`
--

INSERT INTO `addfriend` (`id_addfriend`, `id_user_send`, `id_user_receive`, `status`) VALUES
(10, 3, 2, 'success'),
(11, 1, 2, 'success'),
(12, 1, 3, 'success');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id_comment`, `id_user`, `id_post`, `content`) VALUES
(88, 3, 1, 'Cháy mô rứa @@'),
(89, 1, 1, 'Tuổi thơ T_T'),
(90, 1, 2, 'So beutiful <3'),
(91, 1, 2, 'Love'),
(92, 1, 2, '<3'),
(93, 1, 2, '????  ????'),
(94, 1, 4, 'So chill ~~'),
(95, 1, 5, 'Idol'),
(96, 1, 5, 'Idol'),
(97, 1, 5, 'Idol'),
(98, 1, 5, 'Idol'),
(99, 1, 5, 'Idol'),
(100, 1, 5, 'Idol'),
(101, 1, 5, 'Idol'),
(102, 1, 5, 'Idol'),
(103, 1, 5, 'Idol'),
(104, 1, 5, 'Idol'),
(105, 1, 5, 'Idol'),
(106, 1, 5, 'Idol'),
(107, 1, 5, 'Idol'),
(108, 1, 5, 'Idol'),
(109, 1, 5, 'Idol'),
(110, 1, 5, 'Idol'),
(111, 1, 5, 'Idol'),
(112, 1, 5, 'Idol'),
(113, 1, 5, 'Idol'),
(114, 1, 5, 'Idol'),
(115, 1, 5, 'Idol'),
(116, 1, 5, 'Idol'),
(117, 1, 5, 'Idol'),
(118, 1, 5, 'Idol'),
(119, 1, 5, 'Idol'),
(120, 1, 5, 'Idol'),
(121, 1, 5, 'Idol'),
(122, 1, 5, 'Idol'),
(123, 1, 5, 'Idol'),
(124, 1, 5, 'Idol'),
(125, 1, 5, 'Idol'),
(126, 1, 5, 'Idol'),
(127, 1, 5, 'Idol'),
(128, 1, 5, 'Idol'),
(129, 1, 5, 'Idol'),
(130, 1, 5, 'Idol'),
(131, 1, 5, 'Idol'),
(132, 1, 5, 'Idol'),
(133, 1, 5, 'Idol'),
(134, 1, 5, 'Idol'),
(135, 1, 5, 'Idol'),
(136, 1, 5, 'Idol'),
(137, 1, 5, 'Idol'),
(138, 1, 5, 'Idol'),
(139, 1, 5, 'Idol'),
(140, 1, 5, 'Idol'),
(141, 1, 5, 'Idol'),
(142, 1, 5, 'Idol'),
(143, 1, 5, 'Idol'),
(144, 1, 5, 'Idol'),
(145, 1, 5, 'Idol'),
(146, 1, 5, 'Idol'),
(147, 1, 5, 'Idol'),
(148, 1, 5, 'Idol'),
(149, 1, 5, 'Idol'),
(150, 1, 5, 'Idol'),
(151, 1, 5, 'Idol'),
(152, 1, 5, 'Idol'),
(153, 1, 5, 'Idol'),
(154, 1, 5, 'Idol'),
(155, 1, 5, 'Idol'),
(156, 1, 5, 'Idol'),
(157, 1, 5, 'Idol'),
(158, 1, 5, 'Idol'),
(159, 1, 5, 'Idol'),
(160, 1, 5, 'Idol'),
(161, 1, 5, 'Idol'),
(162, 1, 5, 'Idol'),
(163, 1, 5, 'Idol'),
(164, 1, 5, 'Idol'),
(165, 1, 5, 'Idol'),
(166, 1, 5, 'Idol'),
(167, 1, 5, 'Idol'),
(168, 1, 5, 'Idol'),
(169, 1, 5, 'Idol'),
(170, 1, 5, 'Idol'),
(171, 1, 5, 'Idol'),
(172, 1, 5, 'Idol'),
(173, 1, 5, 'Idol'),
(174, 1, 5, 'Idol'),
(175, 1, 5, 'Idol'),
(176, 1, 5, 'Idol'),
(177, 1, 5, 'Idol'),
(178, 1, 5, 'Idol'),
(179, 1, 5, 'Idol'),
(180, 1, 5, 'Idol'),
(181, 1, 5, 'Idol'),
(182, 1, 5, 'Idol'),
(183, 1, 5, 'Idol'),
(184, 1, 5, 'Idol'),
(185, 1, 5, 'Idol'),
(186, 1, 5, 'Idol'),
(187, 1, 5, 'Idol'),
(188, 1, 5, 'Idol'),
(189, 1, 5, 'Idol'),
(190, 1, 5, 'Idol'),
(191, 1, 5, 'Idol'),
(192, 1, 5, 'Idol'),
(193, 1, 5, 'Idol'),
(194, 1, 5, 'Idol'),
(195, 1, 5, 'Idol'),
(196, 1, 5, 'Idol'),
(197, 1, 5, 'Idol'),
(198, 1, 5, 'Idol'),
(199, 1, 5, 'Idol'),
(200, 1, 5, 'Idol'),
(201, 1, 5, 'Idol'),
(202, 1, 5, 'Idol'),
(203, 1, 5, 'Idol'),
(204, 1, 5, 'Idol'),
(205, 1, 5, 'Idol'),
(206, 1, 5, 'Idol'),
(207, 1, 5, 'Idol'),
(208, 1, 5, 'Idol'),
(209, 1, 5, 'Idol'),
(210, 1, 5, 'Idol'),
(211, 1, 5, 'Idol'),
(212, 1, 5, 'Idol'),
(213, 1, 5, 'Idol'),
(214, 1, 5, 'Idol'),
(215, 1, 5, 'Idol'),
(216, 1, 5, 'Idol'),
(217, 1, 5, 'Idol'),
(218, 1, 5, 'Idol'),
(219, 1, 5, 'Idol'),
(220, 1, 5, 'Idol'),
(221, 1, 5, 'Idol'),
(222, 1, 5, 'Idol'),
(223, 1, 5, 'Idol'),
(224, 1, 5, 'Idol'),
(225, 1, 5, 'Idol'),
(226, 1, 5, 'Idol'),
(227, 1, 5, 'Idol'),
(228, 1, 5, 'Idol'),
(229, 1, 5, 'Idol'),
(230, 1, 5, 'Idol'),
(231, 1, 5, 'Idol'),
(232, 1, 5, 'Idol'),
(233, 1, 5, 'Idol'),
(234, 1, 5, 'Idol'),
(235, 1, 5, 'Idol'),
(236, 1, 5, 'Idol'),
(237, 1, 5, 'Idol'),
(238, 1, 5, 'Idol'),
(239, 1, 5, 'Idol'),
(240, 1, 5, 'Idol'),
(241, 1, 5, 'Idol'),
(242, 1, 5, 'Idol'),
(243, 1, 5, 'Idol'),
(244, 1, 5, 'Idol'),
(245, 1, 5, 'Idol'),
(246, 1, 5, 'Idol'),
(247, 1, 5, 'Idol'),
(248, 1, 5, 'Idol'),
(249, 1, 5, 'Idol'),
(250, 1, 5, 'Idol'),
(251, 1, 5, 'Idol'),
(252, 1, 5, 'Idol'),
(253, 1, 5, 'Idol'),
(254, 1, 5, 'Idol'),
(255, 1, 5, 'Idol'),
(256, 1, 5, 'Idol'),
(257, 1, 5, 'Idol'),
(258, 1, 5, 'Idol'),
(259, 1, 5, 'Idol'),
(260, 1, 5, 'Idol'),
(261, 1, 5, 'Idol'),
(262, 1, 5, 'Idol'),
(263, 1, 5, 'Idol'),
(264, 1, 5, 'Idol'),
(265, 1, 5, 'Idol'),
(266, 1, 5, 'Idol'),
(267, 1, 5, 'Idol'),
(268, 1, 5, 'Idol'),
(269, 1, 5, 'Idol'),
(270, 1, 5, 'Idol'),
(271, 1, 5, 'Idol'),
(272, 1, 5, 'Idol'),
(273, 1, 5, 'Idol'),
(274, 1, 5, 'Idol'),
(275, 1, 5, 'Idol'),
(276, 1, 5, 'Idol'),
(277, 1, 5, 'Idol'),
(278, 1, 5, 'Idol'),
(279, 1, 5, 'Idol'),
(280, 1, 5, 'Idol'),
(281, 1, 5, 'Idol'),
(282, 1, 5, 'Idol'),
(283, 1, 5, 'Idol'),
(284, 1, 5, 'Idol'),
(285, 1, 5, 'Idol'),
(286, 1, 5, 'Idol'),
(287, 1, 5, 'Idol'),
(288, 1, 5, 'Idol'),
(289, 1, 5, 'Idol'),
(290, 1, 5, 'Idol'),
(291, 1, 5, 'Idol'),
(292, 1, 5, 'Idol'),
(293, 1, 5, 'Idol'),
(294, 1, 5, 'Idol'),
(295, 1, 5, 'Idol'),
(296, 1, 5, 'Idol'),
(297, 1, 5, 'Idol'),
(298, 1, 5, 'Idol'),
(299, 1, 5, 'Idol'),
(300, 1, 5, 'Idol'),
(301, 1, 5, 'Idol'),
(302, 1, 5, 'Idol'),
(303, 1, 5, 'Idol'),
(304, 1, 5, 'Idol'),
(305, 1, 5, 'Idol'),
(306, 1, 5, 'Idol'),
(307, 1, 5, 'Idol'),
(308, 1, 5, 'Idol'),
(309, 1, 5, 'Idol'),
(310, 1, 5, 'Idol'),
(311, 1, 5, 'Idol'),
(312, 1, 5, 'Idol'),
(313, 1, 5, 'Idol'),
(314, 1, 5, 'Idol'),
(315, 1, 5, 'Idol'),
(316, 1, 5, 'Idol'),
(317, 1, 5, 'Idol'),
(318, 1, 5, 'Idol'),
(319, 1, 5, 'Idol'),
(320, 1, 5, 'Idol'),
(321, 1, 5, 'Idol'),
(322, 1, 5, 'Idol'),
(323, 1, 5, 'Idol'),
(324, 1, 5, 'Idol'),
(325, 1, 5, 'Idol'),
(326, 1, 5, 'Idol'),
(327, 1, 5, 'Idol'),
(328, 1, 5, 'Idol'),
(329, 1, 5, 'Idol'),
(330, 1, 5, 'Idol'),
(331, 1, 5, 'Idol'),
(332, 1, 5, 'Idol'),
(333, 1, 5, 'Idol'),
(334, 1, 5, 'Idol'),
(335, 1, 5, 'Idol'),
(336, 1, 5, 'Idol'),
(337, 1, 5, 'Idol'),
(338, 1, 5, 'Idol'),
(339, 1, 5, 'Idol'),
(340, 1, 5, 'Idol'),
(341, 1, 5, 'Idol'),
(342, 1, 5, 'Idol'),
(343, 1, 5, 'Idol'),
(344, 1, 5, 'Idol'),
(345, 1, 5, 'Idol'),
(346, 1, 5, 'Idol'),
(347, 1, 5, 'Idol'),
(348, 1, 5, 'Idol'),
(349, 1, 5, 'Idol'),
(350, 1, 5, 'Idol'),
(351, 1, 5, 'Idol'),
(352, 1, 5, 'Idol'),
(353, 1, 5, 'Idol'),
(354, 1, 5, 'Idol'),
(355, 1, 5, 'Idol'),
(356, 1, 5, 'Idol'),
(357, 1, 5, 'Idol'),
(358, 1, 5, 'Idol'),
(359, 1, 5, 'Idol'),
(360, 1, 5, 'Idol'),
(361, 1, 5, 'Idol'),
(362, 1, 5, 'Idol'),
(363, 1, 5, 'Idol'),
(364, 1, 5, 'Idol'),
(365, 1, 5, 'Idol'),
(366, 1, 5, 'Idol'),
(367, 1, 5, 'Idol'),
(368, 1, 5, 'Idol'),
(369, 1, 5, 'Idol'),
(370, 1, 5, 'Idol'),
(371, 1, 5, 'Idol'),
(372, 1, 5, 'Idol'),
(373, 1, 5, 'Idol'),
(374, 1, 5, 'Idol'),
(375, 1, 5, 'Idol'),
(376, 1, 5, 'Idol'),
(377, 1, 5, 'Idol'),
(378, 1, 5, 'Idol'),
(379, 1, 5, 'Idol'),
(380, 1, 5, 'Idol'),
(381, 1, 5, 'Idol'),
(382, 1, 5, 'Idol'),
(383, 1, 5, 'Idol'),
(384, 1, 5, 'Idol'),
(385, 1, 5, 'Idol'),
(386, 1, 5, 'Idol'),
(387, 1, 5, 'Idol'),
(388, 1, 5, 'Idol'),
(389, 1, 5, 'Idol'),
(390, 1, 5, 'Idol'),
(391, 1, 5, 'Idol'),
(392, 1, 5, 'Idol'),
(393, 1, 5, 'Idol'),
(394, 1, 5, 'Idol'),
(395, 1, 5, 'Idol'),
(396, 1, 5, 'Idol'),
(397, 1, 5, 'Idol'),
(398, 1, 5, 'Idol'),
(399, 1, 5, 'Idol'),
(400, 1, 5, 'Idol'),
(401, 1, 5, 'Idol'),
(402, 1, 5, 'Idol'),
(403, 1, 5, 'Idol'),
(404, 1, 5, 'Idol'),
(405, 1, 5, 'Idol'),
(406, 1, 5, 'Idol'),
(407, 1, 5, 'Idol'),
(408, 1, 5, 'Idol'),
(409, 1, 5, 'Idol'),
(410, 1, 5, 'Idol'),
(411, 1, 5, 'Idol'),
(412, 1, 5, 'Idol'),
(413, 1, 5, 'Idol'),
(414, 1, 5, 'Idol'),
(415, 1, 5, 'Idol'),
(416, 1, 5, 'Idol'),
(417, 1, 5, 'Idol'),
(418, 1, 5, 'Idol'),
(419, 1, 5, 'Idol'),
(420, 1, 5, 'Idol'),
(421, 1, 5, 'Idol'),
(422, 1, 5, 'Idol'),
(423, 1, 5, 'Idol'),
(424, 1, 5, 'Idol'),
(425, 1, 5, 'Idol'),
(426, 1, 5, 'Idol'),
(427, 1, 5, 'Idol'),
(428, 1, 5, 'Idol'),
(429, 1, 5, 'Idol'),
(430, 1, 5, 'Idol'),
(431, 1, 5, 'Idol'),
(432, 1, 5, 'Idol'),
(433, 1, 5, 'Idol'),
(434, 1, 5, 'Idol'),
(435, 1, 5, 'Idol'),
(436, 1, 5, 'Idol'),
(437, 1, 5, 'Idol'),
(438, 1, 5, 'Idol'),
(439, 1, 5, 'Idol'),
(440, 1, 5, 'Idol'),
(441, 1, 5, 'Idol'),
(442, 1, 5, 'Idol'),
(443, 1, 5, 'Idol'),
(444, 1, 5, 'Idol'),
(445, 1, 5, 'Idol'),
(446, 1, 5, 'Idol'),
(447, 1, 5, 'Idol'),
(448, 1, 5, 'Idol'),
(449, 1, 5, 'Idol'),
(450, 1, 5, 'Idol'),
(451, 1, 5, 'Idol'),
(452, 1, 5, 'Idol'),
(453, 1, 5, 'Idol'),
(454, 1, 5, 'Idol'),
(455, 1, 5, 'Idol'),
(456, 1, 5, 'Idol'),
(457, 1, 5, 'Idol'),
(458, 1, 5, 'Idol'),
(459, 1, 5, 'Idol'),
(460, 1, 5, 'Idol'),
(461, 1, 5, 'Idol'),
(462, 1, 5, 'Idol'),
(463, 1, 5, 'Idol'),
(464, 1, 5, 'Idol'),
(465, 1, 5, 'Idol'),
(466, 1, 5, 'Idol'),
(467, 1, 5, 'Idol'),
(468, 1, 5, 'Idol'),
(469, 1, 5, 'Idol'),
(470, 1, 5, 'Idol'),
(471, 1, 5, 'Idol'),
(472, 1, 5, 'Idol'),
(473, 1, 5, 'Idol'),
(474, 1, 5, 'Idol'),
(475, 1, 5, 'Idol'),
(476, 1, 5, 'Idol'),
(477, 1, 5, 'Idol'),
(478, 1, 5, 'Idol'),
(479, 1, 5, 'Idol'),
(480, 1, 5, 'Idol'),
(481, 1, 5, 'Idol'),
(482, 1, 5, 'Idol'),
(483, 1, 5, 'Idol'),
(484, 1, 5, 'Idol'),
(485, 1, 5, 'Idol'),
(486, 1, 5, 'Idol'),
(487, 1, 5, 'Idol'),
(488, 1, 5, 'Idol'),
(489, 1, 5, 'Idol'),
(490, 1, 5, 'Idol'),
(491, 1, 5, 'Idol'),
(492, 1, 5, 'Idol'),
(493, 1, 5, 'Idol'),
(494, 1, 5, 'Idol'),
(495, 1, 5, 'Idol'),
(496, 1, 5, 'Idol'),
(497, 1, 5, 'Idol'),
(498, 1, 5, 'Idol'),
(499, 1, 5, 'Idol'),
(500, 1, 5, 'Idol'),
(501, 1, 5, 'Idol'),
(502, 1, 5, 'Idol'),
(503, 1, 5, 'Idol'),
(504, 1, 5, 'Idol'),
(505, 1, 5, 'Idol'),
(506, 1, 5, 'Idol'),
(507, 1, 5, 'Idol'),
(508, 1, 5, 'Idol'),
(509, 1, 5, 'Idol'),
(510, 1, 5, 'Idol'),
(511, 1, 5, 'Idol'),
(512, 1, 5, 'Idol'),
(513, 1, 5, 'Idol'),
(514, 1, 5, 'Idol'),
(515, 1, 5, 'Idol'),
(516, 1, 5, 'Idol'),
(517, 1, 5, 'Idol'),
(518, 1, 5, 'Idol'),
(519, 1, 5, 'Idol'),
(520, 1, 5, 'Idol'),
(521, 1, 5, 'Idol'),
(522, 1, 5, 'Idol'),
(523, 1, 5, 'Idol'),
(524, 1, 5, 'Idol'),
(525, 1, 5, 'Idol'),
(526, 1, 5, 'Idol'),
(527, 1, 5, 'Idol'),
(528, 1, 5, 'Idol'),
(529, 1, 5, 'Idol'),
(530, 1, 5, 'Idol'),
(531, 1, 5, 'Idol'),
(532, 1, 5, 'Idol'),
(533, 1, 5, 'Idol'),
(534, 1, 5, 'Idol'),
(535, 1, 5, 'Idol'),
(536, 1, 5, 'Idol'),
(537, 1, 5, 'Idol'),
(538, 1, 5, 'Idol'),
(539, 1, 5, 'Idol'),
(540, 1, 5, 'Idol'),
(541, 1, 5, 'Idol'),
(542, 1, 5, 'Idol'),
(543, 1, 5, 'Idol'),
(544, 1, 5, 'Idol'),
(545, 1, 5, 'Idol'),
(546, 1, 5, 'Idol'),
(547, 1, 5, 'Idol'),
(548, 1, 5, 'Idol'),
(549, 1, 5, 'Idol'),
(550, 1, 5, 'Idol'),
(551, 1, 5, 'Idol'),
(552, 1, 5, 'Idol'),
(553, 1, 5, 'Idol'),
(554, 1, 5, 'Idol'),
(555, 1, 5, 'Idol'),
(556, 1, 5, 'Idol'),
(557, 1, 5, 'Idol'),
(558, 1, 5, 'Idol'),
(559, 1, 5, 'Idol'),
(560, 1, 5, 'Idol'),
(561, 1, 5, 'Idol'),
(562, 1, 5, 'Idol'),
(563, 1, 5, 'Idol'),
(564, 1, 5, 'Idol'),
(565, 1, 5, 'Idol'),
(566, 1, 5, 'Idol'),
(567, 1, 5, 'Idol'),
(568, 1, 5, 'Idol'),
(569, 1, 5, 'Idol'),
(570, 1, 5, 'Idol'),
(571, 1, 5, 'Idol'),
(572, 1, 5, 'Idol'),
(573, 1, 5, 'Idol'),
(574, 1, 5, 'Idol'),
(575, 1, 5, 'Idol'),
(576, 1, 5, 'Idol'),
(577, 1, 5, 'Idol'),
(578, 1, 5, 'Idol'),
(579, 1, 5, 'Idol'),
(580, 1, 5, 'Idol'),
(581, 1, 5, 'Idol'),
(582, 1, 5, 'Idol'),
(583, 1, 5, 'Idol'),
(584, 1, 5, 'Idol'),
(585, 1, 5, 'Idol'),
(586, 1, 5, 'Idol'),
(587, 1, 5, 'Idol'),
(588, 1, 5, 'Idol'),
(589, 1, 5, 'Idol'),
(590, 1, 5, 'Idol'),
(591, 1, 5, 'Idol'),
(592, 1, 5, 'Idol'),
(593, 1, 5, 'Idol'),
(594, 1, 5, 'Idol'),
(595, 1, 5, 'Idol'),
(596, 1, 5, 'Idol'),
(597, 1, 5, 'Idol'),
(598, 1, 5, 'Idol'),
(599, 1, 5, 'Idol'),
(600, 1, 5, 'Idol'),
(601, 1, 5, 'Idol'),
(602, 1, 5, 'Idol'),
(603, 1, 5, 'Idol'),
(604, 1, 5, 'Idol'),
(605, 1, 5, 'Idol'),
(606, 1, 5, 'Idol'),
(607, 1, 5, 'Idol'),
(608, 1, 5, 'Idol'),
(609, 1, 5, 'Idol'),
(610, 1, 5, 'Idol'),
(611, 1, 5, 'Idol'),
(612, 1, 5, 'Idol'),
(613, 1, 5, 'Idol'),
(614, 1, 5, 'Idol'),
(615, 1, 5, 'Idol'),
(616, 1, 5, 'Idol'),
(617, 1, 5, 'Idol'),
(618, 1, 5, 'Idol'),
(619, 1, 5, 'Idol'),
(620, 1, 5, 'Idol'),
(621, 1, 5, 'Idol'),
(622, 1, 5, 'Idol'),
(623, 1, 5, 'Idol'),
(624, 1, 5, 'Idol'),
(625, 1, 5, 'Idol'),
(626, 1, 5, 'Idol'),
(627, 1, 5, 'Idol'),
(628, 1, 5, 'Idol'),
(629, 1, 5, 'Idol'),
(630, 1, 5, 'Idol'),
(631, 1, 5, 'Idol'),
(632, 1, 5, 'Idol'),
(633, 1, 5, 'Idol'),
(634, 1, 5, 'Idol'),
(635, 1, 5, 'Idol'),
(636, 1, 5, 'Idol'),
(637, 1, 5, 'Idol'),
(638, 1, 5, 'Idol'),
(639, 1, 2, 'Tym'),
(640, 1, 2, 'Đẹp quá');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `likes`
--

CREATE TABLE `likes` (
  `id_like` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `likes`
--

INSERT INTO `likes` (`id_like`, `id_user`, `id_post`) VALUES
(506, 3, 1),
(507, 3, 3),
(508, 3, 6),
(509, 2, 3),
(510, 2, 6),
(715, 1, 4),
(721, 1, 2),
(737, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `post_url` varchar(300) NOT NULL,
  `post_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id_post`, `id_user`, `content`, `post_url`, `post_time`) VALUES
(1, 1, 'So Sad T_T', 'https://vtv1.mediacdn.vn/thumb_w/640/2022/5/28/hien-2-16537786243901589590384.jpg', '2022-05-10'),
(2, 3, 'Iu :\"3 :\"3', 'https://tophinhanh.com/wp-content/uploads/2021/12/31_hinh-anh-iu-cute-hinh-lee-ji-eun-xinh-dep-nhat-526x375.jpg', '2022-05-03'),
(3, 2, 'I\'m Boffew', 'https://symbols.vn/wp-content/uploads/2022/02/Hinh-Blackpink-Chibi-cute-xinh-dep.jpg', '2022-05-12'),
(4, 1, 'Hi am Ri', './public/image/anh1.jpg', '2022-06-01'),
(5, 1, 'NThuyeen Sky <3 <3', './public/image/mtp.jpg', '2022-06-01'),
(6, 2, 'local kpop fan or whateva', './public/image/fandom-kpop.jpg', '2022-06-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `avatar_url` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `full_name`, `avatar_url`) VALUES
(1, 'ri', '$2y$10$dSHaLA5WAFxKThxD7uasJ.p/QPHQkF1uKH1.N.1DlVpfHRdkGcq12', 'Hà Văn Ri', 'https://meta.vn/Data/image/2022/03/13/anh-itachi-22.jpg'),
(2, 'long', '$2y$10$tAGo0.rOuGMAMLG9VMEYhOg9ou8omLjZYNpw8S/.BzUvjxqjUu98i', 'Long Nguyễn', 'https://scontent.fsgn2-1.fna.fbcdn.net/v/t1.6435-9/86411325_803484543499526_4009216881209638912_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=yCc5OOD1BU4AX_dVNuS&_nc_ht=scontent.fsgn2-1.fna&oh=00_AT9y2yS-Crf0aoqDMqff6KtVPXhOCZmTiTztf4UFjoplxQ&oe=62B78A7F'),
(3, 'duy', '$2y$10$4Nv31cy91T7LLD9ME/E1R.GRIlbfKvmBXqKISisHEpDO4sHiDml2S', 'Nguyễn Công Quốc Duy', 'https://profilepicture7.com/img/img_shouhui/1/-1686280499.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `addfriend`
--
ALTER TABLE `addfriend`
  ADD PRIMARY KEY (`id_addfriend`),
  ADD KEY `id_user_receive` (`id_user_receive`),
  ADD KEY `id_user_send` (`id_user_send`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_post` (`id_post`);

--
-- Chỉ mục cho bảng `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `addfriend`
--
ALTER TABLE `addfriend`
  MODIFY `id_addfriend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=641;

--
-- AUTO_INCREMENT cho bảng `likes`
--
ALTER TABLE `likes`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=738;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `addfriend`
--
ALTER TABLE `addfriend`
  ADD CONSTRAINT `addfriend_ibfk_1` FOREIGN KEY (`id_user_receive`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `addfriend_ibfk_2` FOREIGN KEY (`id_user_send`) REFERENCES `users` (`id_user`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id_post`);

--
-- Các ràng buộc cho bảng `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id_post`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
