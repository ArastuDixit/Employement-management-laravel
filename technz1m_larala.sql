-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2023 at 06:20 AM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technz1m_larala`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clients` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('Approved','Pending','','') COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `invoice_no`, `clients`, `date`, `type`, `status`, `amount`) VALUES
(2, 'LA-5218', 'vPro tec LLC.', '2023-06-16', 'mastercard', 'Pending', '25000'),
(3, 'LA-1212', 'BT Technology', '2018-06-25', 'paypal', 'Approved', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status_self` enum('ACTIVE','DEACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `delete_status_admin` enum('ACTIVE','DELETED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `android_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ios_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `first_name`, `middle_name`, `last_name`, `phone_number`, `country`, `country_code`, `active_status_self`, `delete_status_admin`, `lat`, `lon`, `image`, `android_id`, `ios_id`, `username`) VALUES
(1, 'rakeshdongre9@gmail.com', '0000-00-00 00:00:00', '$2y$10$2zlbSiJGF5tg51SUUYXvXOR9RKWv1GFZLxfU3nSmpi.CqGPRrLG3m', NULL, '2023-01-02 11:46:54', '2023-01-02 11:46:54', '', '', '', '80856292980', '', '', '', '', '', '', '', '', '', 'rakeshdongre9'),
(5, 'rakeshdongre99@gmail.com', '0000-00-00 00:00:00', '$2y$10$QSO3qEKxFJjFeolD5.9vveZhwi0wVQH6hheSGQUALQkoo0WNGviNS', NULL, '2023-01-25 10:20:39', '2023-03-16 09:06:17', 'rakesh', 'Middle', 'dongre', '8085629298', '1', '93', 'ACTIVE', '', '', '', '1675402901_17065_ADMIN_PROFILE_IMAGE.jpg', '', '', 'rakeshdongre99');

-- --------------------------------------------------------

--
-- Table structure for table `countrys`
--

CREATE TABLE `countrys` (
  `country_id` int(11) NOT NULL,
  `country_iso` char(2) NOT NULL,
  `country_name` varchar(80) NOT NULL,
  `country_nicename` varchar(80) NOT NULL,
  `country_iso3` char(3) DEFAULT NULL,
  `country_numcode` smallint(6) DEFAULT NULL,
  `country_phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countrys`
--

INSERT INTO `countrys` (`country_id`, `country_iso`, `country_name`, `country_nicename`, `country_iso3`, `country_numcode`, `country_phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department_head` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_employee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `department_head`, `total_employee`) VALUES
(2, 'Web Development', 'Rakesh Dongre', 6);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `documents_id` int(11) NOT NULL,
  `documents_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`documents_id`, `documents_name`) VALUES
(1, 'Driving licence'),
(2, 'Passport'),
(3, '10th marksheet'),
(4, '12th marksheet'),
(5, 'Graduation Marksheet'),
(6, 'Post graduation marksheet'),
(7, 'Bank Cheque Rs. 10000'),
(8, 'Bank Cheque Rs. 20000'),
(9, 'Bank Cheque Rs. 30000'),
(10, 'Bank Cheque Rs. 40000'),
(11, 'Bank Cheque Rs. 50000'),
(12, 'Bank Cheque Rs. 60000'),
(13, 'Bank Cheque Rs. 70000'),
(14, 'Bank Cheque Rs. 80000'),
(15, 'Bank Cheque Rs. 90000'),
(16, 'Bank Cheque Rs. 100000'),
(17, 'Bank Cheque Rs. 150000'),
(18, 'Voter Id');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `emp_first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_skill` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_description` text COLLATE utf8_unicode_ci,
  `emp_short_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_start_date` date DEFAULT NULL,
  `emp_create_date` datetime DEFAULT NULL,
  `emp_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_linked_in` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_instagram` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_update_date` datetime DEFAULT NULL,
  `emp_gender` enum('MALE','FEMALE') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'MALE',
  `emp_resume` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emp_resume_text` text COLLATE utf8_unicode_ci,
  `emp_local_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_local_pincode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_local_landmark` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_local_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_local_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_local_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_local_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_parents_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_parents_pincode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_parents_landmark` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_parents_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_parents_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_parents_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_parents_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_friends_guardians_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_friends_guardians_pincode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_friends_guardians_landmark` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_friends_guardians_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_friends_guardians_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_friends_guardians_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_friends_guardians_friend_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_document_submitted` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_documnet_other` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_documnet_other_provided` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_relieving_date` date DEFAULT NULL,
  `emp_notice_period` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_notice_period_staus` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_bond_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_comment_text` text COLLATE utf8_unicode_ci,
  `emp_documnet_provided` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_first_name`, `emp_last_name`, `emp_role`, `emp_skill`, `emp_description`, `emp_short_description`, `emp_image`, `emp_phone`, `emp_start_date`, `emp_create_date`, `emp_email`, `emp_facebook`, `emp_twitter`, `emp_linked_in`, `emp_instagram`, `emp_update_date`, `emp_gender`, `emp_resume`, `emp_resume_text`, `emp_local_address`, `emp_local_pincode`, `emp_local_landmark`, `emp_local_city`, `emp_local_state`, `emp_local_country`, `emp_local_phone`, `emp_parents_address`, `emp_parents_pincode`, `emp_parents_landmark`, `emp_parents_city`, `emp_parents_state`, `emp_parents_country`, `emp_parents_phone`, `emp_friends_guardians_address`, `emp_friends_guardians_pincode`, `emp_friends_guardians_landmark`, `emp_friends_guardians_city`, `emp_friends_guardians_state`, `emp_friends_guardians_country`, `emp_friends_guardians_friend_phone`, `emp_document_submitted`, `emp_documnet_other`, `emp_documnet_other_provided`, `emp_relieving_date`, `emp_notice_period`, `emp_notice_period_staus`, `emp_bond_status`, `emp_comment_text`, `emp_documnet_provided`) VALUES
(1, 'Sukrati', 'Thakur', 'HUMAN RESOURCE', '4', NULL, NULL, '1679046055.jpg', '8827122255', '2022-10-05', NULL, 'Sukratithakur14592@gmail.com', NULL, NULL, 'LINKEDIN', NULL, '2023-06-17 09:38:48', 'FEMALE', '1679046055.docx', NULL, 'KA-96,Gumasta Nagar indore (m.p.)', '4255001', 'Near Ranjeet Hanuman Temple', 'Indore', 'Mp', 'iNDIA', '-', 'KA-96,Gumasta Nagar indore (m.p.)', '4255001', 'Near Ranjeet Hanuman Temple', 'Indore', 'Mp', 'iNDIA', '-', '-', '-', '-', '-', '-', '-', '-', '9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'bvbv', 'bvb', 'PHP DEVELOPER', '2', NULL, NULL, '1683803698.jpg', '09926335358', '2023-05-11', NULL, 'bb@gmail.com', 'vcv', 'vcv', 'vcv', 'vcv', '2023-05-11 11:14:58', 'MALE', '1683803698.jpg', '<p>cvcvc</p>', 'tes', '32455', 'vcvc', 'indore', 'mp', 'India', 'vcv', 'vcv', 'vcv', 'vcv', 'vcv', 'vcv', 'vcv', 'vcv', 'vcv', 'vcv', 'vcv', 'vcv', 'vcv', 'vcv', 'vcv', '8', 'vcvcv', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Arastu', 'Dixit', 'PHP DEVELOPER', '2,3,4,9', NULL, NULL, '1686938968.jpg', '1234567890', '2023-06-15', NULL, 'arastu@gmail.com', NULL, NULL, NULL, NULL, '2023-06-16 18:09:28', 'MALE', '1686938968.docx', NULL, 'indore', '98797', 'kikug', 'indore', 'mp', 'india', '0970789789', 'indore', '9798', 'ohkli', 'indore', 'mp', 'india', '98768756754', 'kdhk', '87698', 'lkjvgh', 'indore', 'mp', 'ind', '8567564645', '3', 'na', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(11) NOT NULL,
  `day` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `holiday` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `day`, `date`, `holiday`) VALUES
(1, 'Tuesday', '2023-08-15', 'Independence day'),
(3, 'Wednesday', '2023-08-30', 'Rakshabandhan');

-- --------------------------------------------------------

--
-- Table structure for table `jobportal`
--

CREATE TABLE `jobportal` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apply_for` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `experience` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skills` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salary` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_type` enum('Full-time','Part-time','Work-from-home','Trainee') COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` enum('Interview','Cancel','Interviewed','') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobportal`
--

INSERT INTO `jobportal` (`id`, `name`, `email`, `image`, `apply_for`, `experience`, `skills`, `salary`, `job_type`, `address`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Arastu Dixit', 'admin@example.com', '1688046393.png', 'laravel/Wordpress developer', '1 year', 'php,wordpress', '5000', 'Trainee', '12,indore', '2023-06-28', 'Interview', NULL, '2023-06-30 07:54:18'),
(2, 'Rakesh Dongre', 'rakesh@gmail.com', '1688025090.png', 'php/laravel developer', '5-6 years', 'PHP,LARAVEL,DATABASE', '35000', 'Full-time', 'indore', '2023-06-15', 'Interviewed', NULL, '2023-06-30 06:34:10'),
(3, 'Ramavtar Prajapati', 'test@gmail.com', '1688025476.png', 'PHP/CI developer', '5-6 years', 'PHP,LARAVEL,CI', '35000', 'Full-time', 'shivpuri', '2023-06-16', 'Interviewed', NULL, '2023-06-30 06:35:08'),
(5, 'Ajay Rajput', 'ajay@gmail.com', '1688126505.png', 'codigniter Developer', '2-5 years', 'PHP,Codeigniter,DATABASE', '40000', 'Full-time', 'bhawarkua', '2023-06-13', 'Interviewed', '2023-06-30 06:31:45', '2023-06-30 07:59:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(6, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(7, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(8, '2016_06_01_000004_create_oauth_clients_table', 2),
(9, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('000d708640e7253cdac00be0011da5cf9213dcdd6df5b54b4965dc95659fe86d4b0c6e6fbf2b2499', 12, 1, 'MyLaravelApp', '[]', 0, '2023-05-25 06:24:16', '2023-05-25 06:24:16', '2024-05-25 11:54:16'),
('039772bae744ddf17be3091638d072bafcd8c1b1411d93295b68a4360d52ca9e408719879c2e6415', 4, 1, 'MyLaravelApp', '[]', 0, '2022-09-10 07:23:08', '2022-09-10 07:23:08', '2023-09-10 07:23:08'),
('05d92fe183893edc9c5482e2e011f0b29f2fd76f395701fda13a5b965830d4d34ca988efceb8b3a0', 31, 1, 'MyLaravelApp', '[]', 0, '2023-05-29 06:48:52', '2023-05-29 06:48:52', '2024-05-29 12:18:52'),
('0690c8d7360b3dbe6a51c386d8fd7bdbf303cb9a59c29af2f1507ddbda4aaa59340a176bebbbc7f8', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 05:42:43', '2022-09-09 05:42:43', '2023-09-09 05:42:43'),
('08b97ffb0c51dde4f8b17459f3f5cf37e3919666d8eac9e1c21fac890ea272aeb1d0a56c32c53c87', 4, 1, 'MyLaravelApp', '[]', 0, '2022-09-10 07:22:43', '2022-09-10 07:22:43', '2023-09-10 07:22:43'),
('0910fce9c29ee0243a540fe18d939bdc6ad90f0726e5253b7702cde3bf288f75d4c3a5f79ad6386d', 2, 1, 'MyLaravelApp', '[]', 0, '2022-09-10 06:58:14', '2022-09-10 06:58:14', '2023-09-10 06:58:14'),
('0acec15d56581d69bfedce26ab267e5ca65a86f337a5a3275efa5c9d8a9bba0f4e8008de5a357526', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 05:40:02', '2022-09-09 05:40:02', '2023-09-09 05:40:02'),
('0af30d5f353b53e69c7e554ada40cba822a6714c21dc5416837166c5caec912e17b757fe07c3c6cf', 2, 1, 'MyLaravelApp', '[]', 0, '2022-09-07 14:07:21', '2022-09-07 14:07:21', '2023-09-07 14:07:21'),
('0c071ca5e1b5715f695d53ecf28f683f726e2550dc39f520b8b667d48a5ba7003ed0b0b709b0c7d9', 12, 1, 'MyLaravelApp', '[]', 0, '2023-05-29 05:19:09', '2023-05-29 05:19:09', '2024-05-29 10:49:09'),
('0e94f9cf98e6db132b901adc9da1d69d01f20ef04654831d31f5c29821200bef05c62190054d54ae', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 05:59:49', '2022-09-09 05:59:49', '2023-09-09 05:59:49'),
('127a0f7c0fc09b60ba5deea12a58527acbe5f88629044a9b62ae9efc7b523350012cc1d5999c9907', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 06:11:04', '2022-09-09 06:11:04', '2023-09-09 06:11:04'),
('12f0f73ec745828ee3f0afb8a059dcd40b1efada30e7245b68b6dcf02755e7fe2c37fe496a732388', 12, 1, 'MyLaravelApp', '[]', 0, '2023-05-26 00:21:05', '2023-05-26 00:21:05', '2024-05-26 05:51:05'),
('148b1de395acfbc770e76600135b1175adb14b5e093586b32c17a6180bd54b408a2588197ed8e667', 36, 1, 'MyLaravelApp', '[]', 0, '2023-05-30 00:54:38', '2023-05-30 00:54:38', '2024-05-30 06:24:38'),
('192992c7e1f8b0652df8e899f2bfc7ade1c54f52582f10f524de8bc45aa030351bccae7876552bb2', 5, 1, 'MyLaravelApp', '[]', 0, '2023-03-17 07:48:37', '2023-03-17 07:48:37', '2024-03-17 07:48:37'),
('1c0159818e08d461bb6c300bc6c980c510a5302216c599f287b001ec85b30fa9f2c011441288ac86', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 07:35:46', '2022-09-09 07:35:46', '2023-09-09 07:35:46'),
('20b440dac6cffadd887a59bfd0c15599332bf5f2c935a9f3f06642d871592d59f95303490bc9d7bb', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-07 14:08:51', '2022-09-07 14:08:51', '2023-09-07 14:08:51'),
('22222728b4e8fdc86cba2a1186ac8641768b35ccfc8f9897a5432c73378d601984e76c1f67972a95', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 09:00:49', '2022-09-09 09:00:49', '2023-09-09 09:00:49'),
('236eaa69f81c6d029d5980702eff9ac5dbc1120ad54093880ba69fe3143aeca3db0c662f6f1c9910', 4, 1, 'MyLaravelApp', '[]', 0, '2022-09-10 07:03:13', '2022-09-10 07:03:13', '2023-09-10 07:03:13'),
('24dfa44f00e67253317d390812b91a76433e3d1050ee8dc39c60d08a96a2e5ff109dcb81baf60914', 12, 1, 'MyLaravelApp', '[]', 0, '2023-05-27 07:39:43', '2023-05-27 07:39:43', '2024-05-27 13:09:43'),
('2a8dff0e1da9ce738cc154b9c2426bc71f7ae79cbfd12e6f6466eac408f797b0a64d4fc532a9d699', 2, 1, 'MyLaravelApp', '[]', 0, '2022-09-10 06:58:26', '2022-09-10 06:58:26', '2023-09-10 06:58:26'),
('2b77ffc3ed5d971f65e764069e052c2bb9a0f6b6021e58e7c54fbeab3e293a8851a26ada5a184aef', 35, 1, 'MyLaravelApp', '[]', 0, '2023-05-29 06:53:28', '2023-05-29 06:53:28', '2024-05-29 12:23:28'),
('327be55d204398dc450ee49d1efd661d82c86976269cffa6a2651222d73162e839cb14b3f390cefc', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 06:11:07', '2022-09-09 06:11:07', '2023-09-09 06:11:07'),
('33cf25c04f78057198babdcd62e69846323342497ee82600a416f999fffb1adec82f71918e4e5cd3', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 05:59:46', '2022-09-09 05:59:46', '2023-09-09 05:59:46'),
('389cb97719c9d8d5edca52ec06eb712428f09dbd725c0ab0535030179406106bfe7e6dcf3c92c74b', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 09:00:46', '2022-09-09 09:00:46', '2023-09-09 09:00:46'),
('39f1a4b83d519c409a822df005769abcccf4b9f2a4faf78a7369fbe8b2fe11e6a72594b6e60e691d', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 07:00:39', '2022-09-09 07:00:39', '2023-09-09 07:00:39'),
('3c89e42c03bff14d6805c79d77a6827f946357d794df0f70a90111e87391f7e7acca3e8f7e29bb89', 5, 1, 'MyLaravelApp', '[]', 0, '2023-02-24 13:29:58', '2023-02-24 13:29:58', '2024-02-24 13:29:58'),
('45bcb72d76ec94b8cff919cea10807beeaa3271a21ed2224f6f20eac69f0837697f2cfbbacda6447', 12, 1, 'MyLaravelApp', '[]', 0, '2023-05-26 00:19:50', '2023-05-26 00:19:50', '2024-05-26 05:49:50'),
('4b00b61e3991c05bacdc439f2a2efb1311223f04fc554a0917f976977c860327bbb16fe395da9551', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 07:35:54', '2022-09-09 07:35:54', '2023-09-09 07:35:54'),
('4b7a8de3a7ad87108fe578fdfc006fab2477f04632c665e97dfe43defdf52ea796adbbba69cb06c9', 4, 1, 'MyLaravelApp', '[]', 0, '2022-09-10 07:22:13', '2022-09-10 07:22:13', '2023-09-10 07:22:13'),
('4b8a436d2f4c2341d4b358c09284ce7ec132abad39d59e4743e3fa517a88af348ce88008e93fde4f', 4, 1, 'MyLaravelApp', '[]', 0, '2022-09-10 07:22:16', '2022-09-10 07:22:16', '2023-09-10 07:22:16'),
('4d107ceb284c9757c408cd3590fdb5afea57b871407d3a4785ea3945c608b62fd8045cee392a2663', 5, 1, NULL, '[]', 0, '2023-02-06 13:54:19', '2023-02-06 13:54:19', '2024-02-06 13:54:19'),
('506c0b3c6e85088192d9a00912a3769d9bf024174f9748e2ec7846641c9ce424c77808353e679804', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 05:35:06', '2022-09-09 05:35:06', '2023-09-09 05:35:06'),
('535562df77d37d87b583c90edc3dfed1821f65e7437c69623183607d7ac65621e4080022df592356', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 05:38:00', '2022-09-09 05:38:00', '2023-09-09 05:38:00'),
('58265736d5da4b63481f1c9efcbbbf2ea18da79a07090fb6e384b57dd9e8453195f50a86e506230f', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 07:35:50', '2022-09-09 07:35:50', '2023-09-09 07:35:50'),
('590b4b57e1f68c5d1ad02ff2b03b4101ee008106c4089cfc301443f26937aafed3918cf5a336abb6', 28, 1, 'MyLaravelApp', '[]', 0, '2023-05-29 05:38:22', '2023-05-29 05:38:22', '2024-05-29 11:08:22'),
('607035e98a2a36cec6054f5661dc739ebb5a99c13459efc7ea6953a40bc9474a4772c76f12a031a3', 5, 1, NULL, '[]', 0, '2023-02-04 13:35:12', '2023-02-04 13:35:12', '2024-02-04 13:35:12'),
('682ff3b069b5b1fd941c6847a0e64b4db1ca0fb11a2f871898545c913347dc1c7c90e7cc0d701089', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 05:38:28', '2022-09-09 05:38:28', '2023-09-09 05:38:28'),
('68550c102b888fa73eca68cc83b1de3bd842f03f6a6bb06093ce692485bb1c741bcba1f8ce572b54', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 05:59:33', '2022-09-09 05:59:33', '2023-09-09 05:59:33'),
('69e61d31fb092072d286bb42dc479b11659f147946f559df06cce72e691c1c3695c367bf25784dca', 35, 1, 'MyLaravelApp', '[]', 0, '2023-05-29 06:53:12', '2023-05-29 06:53:12', '2024-05-29 12:23:12'),
('6cbff1fbae9b8da6565689d807ccd44bc7ab90f8334c914a952dd5ff0af1d9bda256840e1a986a4d', 35, 1, 'MyLaravelApp', '[]', 0, '2023-05-29 06:52:52', '2023-05-29 06:52:52', '2024-05-29 12:22:52'),
('702a148bc1cb0f1ecb8a91d6c1ce030a30361de8f63672307f4d4dbc3c122f5246d66a95060aea3c', 8, 1, 'MyLaravelApp', '[]', 0, '2023-04-03 03:07:59', '2023-04-03 03:07:59', '2024-04-03 08:37:59'),
('7183435c68e79e828cd35f85cb35c91f18cc7c7efe62dae9a2fded930b66d356e51833ca05acafe9', 36, 1, 'MyLaravelApp', '[]', 0, '2023-05-30 00:42:56', '2023-05-30 00:42:56', '2024-05-30 06:12:56'),
('7439397edeb8e484d37d29b15eadc8dc516d409174b382bafbf3fbeb5bcedbd3551131a87ee633e4', 8, 1, 'MyLaravelApp', '[]', 0, '2023-05-24 23:44:26', '2023-05-24 23:44:26', '2024-05-25 05:14:26'),
('7a226aaa861ad264425d4851a76dd17ce8b4f132e14d2ec5fb405714738f1466c2aef897b945738c', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 09:01:03', '2022-09-09 09:01:03', '2023-09-09 09:01:03'),
('7ced6f7335e0656e210bc5cb1bcb215b783fc9ae936e2def515e20c4e073ca0fff63838b4c2d80bc', 4, 1, 'MyLaravelApp', '[]', 0, '2022-09-10 07:04:16', '2022-09-10 07:04:16', '2023-09-10 07:04:16'),
('7e152d1440901a755efcdb7826cad85ae1db786a66e4f31d2b84417b773603fb648942d323c59ae5', 38, 1, 'MyLaravelApp', '[]', 0, '2023-05-30 02:13:33', '2023-05-30 02:13:33', '2024-05-30 07:43:33'),
('830e6222d52a32bcdd089364a879f4beb16ca61efc0ef9bd2e31d1d8e5c0c27820da30d45a7a5436', 35, 1, 'MyLaravelApp', '[]', 0, '2023-05-29 06:54:24', '2023-05-29 06:54:24', '2024-05-29 12:24:24'),
('8ab04c6f5b1d13f7a71f33edf50c47c0a24bb02e74c1e685e71425ba90f055220fe3223267c76dc4', 5, 1, 'MyLaravelApp', '[]', 0, '2023-02-06 14:01:29', '2023-02-06 14:01:29', '2024-02-06 14:01:29'),
('8b7badb88db994e3bad7991b70270ab436ce76d0af16af5ec97ae437014d6375a738179c93c5f1e6', 2, 1, 'MyLaravelApp', '[]', 0, '2022-09-07 13:51:33', '2022-09-07 13:51:33', '2023-09-07 13:51:33'),
('8e6b0eea5055878a48fe6ed1c91eac791fdea8a353211f62efb51871b888ab0894c21c4b40f87f7c', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 06:26:57', '2022-09-09 06:26:57', '2023-09-09 06:26:57'),
('8f7c1f2fe02d97cbcf58f1ba2205f0f5e5a17b2448574ca625e26b4302d4a93ebeddaae7f7852532', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 07:18:14', '2022-09-09 07:18:14', '2023-09-09 07:18:14'),
('9362c75cf2e7f8c004fb70e3ce910dc41983efee66a4c64e3210586b32aef905d1cb3af210f40232', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 06:10:49', '2022-09-09 06:10:49', '2023-09-09 06:10:49'),
('976cebf79bd09c2fafc013460a0ad19fe07157bb4c60ce7dd9406ccaf9fd1a057a97a40ae65834c3', 5, 1, NULL, '[]', 0, '2023-02-06 13:54:56', '2023-02-06 13:54:56', '2024-02-06 13:54:56'),
('9ab71fb360650a536fe36b15b93878a2e8a7e4da8479b1ceb1fac01ef7ef7ab40c0d26240291c0af', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 06:24:53', '2022-09-09 06:24:53', '2023-09-09 06:24:53'),
('9cb9085feaedbefb94f79dd7f625da9d33925ebbf2f2e13dee99a6ef18cff412b58c1f4549b55884', 8, 1, 'MyLaravelApp', '[]', 0, '2023-04-20 07:52:00', '2023-04-20 07:52:00', '2024-04-20 13:22:00'),
('a021a5c3da6f086196d4d3d5e7143d759db5fff3c32f1e523615f798de6373dbbe522feff1467693', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 07:36:25', '2022-09-09 07:36:25', '2023-09-09 07:36:25'),
('a1f210be20ae0e55f2121a36ba7ea1435fb7eeaa02c9e1b16003cde34947aa4ce3f3e5b71dd2b576', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 05:37:23', '2022-09-09 05:37:23', '2023-09-09 05:37:23'),
('a5277d7fb825be54c2b4e2724a40bf72f1f9292bb719e86c4e1056bc72bfa79744fdffc4b6671831', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 05:59:51', '2022-09-09 05:59:51', '2023-09-09 05:59:51'),
('a7280903c1f09de1e87a45e84620f05a127a0a416a4e2558abe9e39ad904016f9d53a5fa52ff02e8', 36, 1, 'MyLaravelApp', '[]', 0, '2023-05-30 00:42:48', '2023-05-30 00:42:48', '2024-05-30 06:12:48'),
('aae443765586c522487cffb9d39c3447846d59680cb414f50ec7051ae9ac8a279f515d11097fbaa1', 35, 1, 'MyLaravelApp', '[]', 0, '2023-05-29 06:53:32', '2023-05-29 06:53:32', '2024-05-29 12:23:32'),
('acf4f94685cb05426c17a104c3ac93d243693be5b0db505b37736fc9ef1824642916a21123cbc620', 33, 1, 'MyLaravelApp', '[]', 0, '2023-05-29 06:49:30', '2023-05-29 06:49:30', '2024-05-29 12:19:30'),
('adbb25702e1f2cc45217e0008b94aef2ae91c40b045e3472bceab46e5711155f18c527144e765944', 4, 1, 'MyLaravelApp', '[]', 0, '2022-09-10 07:22:41', '2022-09-10 07:22:41', '2023-09-10 07:22:41'),
('afb5323547956070bef3ec2bcdba1d798cd68cbcefab9f6ec0131c9aeebc89de02edb8bda8874859', 8, 1, NULL, '[]', 0, '2023-02-04 13:29:47', '2023-02-04 13:29:47', '2024-02-04 13:29:47'),
('b093fdb0e7375c52c39033f69a8cad5c7a13111d742b403a4594a1d21d25d25fa279dbb26c4066c1', 24, 1, 'MyLaravelApp', '[]', 0, '2023-05-29 04:14:54', '2023-05-29 04:14:54', '2024-05-29 09:44:54'),
('b102f5a14cd7412b2b6879f4a0c7b164492be35d01d7228d1de9eda2a77ad45040f52f911945e61c', 36, 1, 'MyLaravelApp', '[]', 0, '2023-05-30 00:43:00', '2023-05-30 00:43:00', '2024-05-30 06:13:00'),
('b24d42793d5abaac9220673d99444417da1624e59799ae87f729abf11461a35738735fe0f7bd2e85', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 09:01:11', '2022-09-09 09:01:11', '2023-09-09 09:01:11'),
('b32af789869d77334b41d65fb44f8d0bfc49b5cd09658e573924d0396e6945ee9e59c4bdcd5b7fa3', 2, 1, 'MyLaravelApp', '[]', 0, '2022-09-10 06:58:42', '2022-09-10 06:58:42', '2023-09-10 06:58:42'),
('b7e5576aecf375d831c15dcb500bb5c1300e8bb04e8214bca1b27e8099f4dab4438c8c9992e67c2c', 35, 1, 'MyLaravelApp', '[]', 0, '2023-05-29 06:53:37', '2023-05-29 06:53:37', '2024-05-29 12:23:37'),
('bdb8334c06c22684f4349ac20b83075cb8e813583fe5d67f51829a0a0bd8db07df1230e45210c3d0', 5, 1, NULL, '[]', 0, '2023-02-04 13:31:17', '2023-02-04 13:31:17', '2024-02-04 13:31:17'),
('be012d4c82efa8021b301af5315bb74eead849c1c003963080d82535af8a4097bca38ded8214ae26', 4, 1, 'MyLaravelApp', '[]', 0, '2022-09-10 07:22:46', '2022-09-10 07:22:46', '2023-09-10 07:22:46'),
('c420ec51e63cfe04f6bf699c9ca97d629b804f642961ca5aff0a66ebedc92461ca5c8b8e4cb06321', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 06:11:12', '2022-09-09 06:11:12', '2023-09-09 06:11:12'),
('c4dd5d1197631517c5f37aa511a19977470feab8fd997245429025910d7e73c09b488459f9960950', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 05:58:15', '2022-09-09 05:58:15', '2023-09-09 05:58:15'),
('c685a542f3cc497f28e941c7319483e76aaebc54fe0389bb327f5d46b7124a700368995d55c8d2b3', 18, 1, 'MyLaravelApp', '[]', 0, '2023-05-29 04:10:22', '2023-05-29 04:10:22', '2024-05-29 09:40:22'),
('c75160015cae64d9ff5fdf93a8f9de1925c53bef941290c35a1a9f02d319f0ee074ad34aad8372c1', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 06:12:20', '2022-09-09 06:12:20', '2023-09-09 06:12:20'),
('c945ac1d125993eeb490c5a738cde8bd58acb0edade8b5b41c504b6fa34ee9e7f18cfac1fc7d6928', 4, 1, 'MyLaravelApp', '[]', 0, '2022-09-10 07:02:59', '2022-09-10 07:02:59', '2023-09-10 07:02:59'),
('ca391f768d08cf48f66d61c283afaefab438a1873ca56892139126ed1af25f380ce2387536080f70', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 09:00:54', '2022-09-09 09:00:54', '2023-09-09 09:00:54'),
('ca8da6a99f93043e19b8163638bf804b47363af928f3fbf5e6d51cad29fafb6855e908402335d8c9', 30, 1, 'MyLaravelApp', '[]', 0, '2023-05-29 05:39:06', '2023-05-29 05:39:06', '2024-05-29 11:09:06'),
('cb37ac8b68aeb78ee2601520208adae4d58437fb97748969dd76e14c9dbdb0cf7a47b9f64eb2d9af', 4, 1, 'MyLaravelApp', '[]', 0, '2022-09-10 07:23:05', '2022-09-10 07:23:05', '2023-09-10 07:23:05'),
('cbf720ec9cebf92621e617f688324028331655d2de7d4ab3dfd4cee2f4cfbe25d5a42717a71e7c2f', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 05:29:55', '2022-09-09 05:29:55', '2023-09-09 05:29:55'),
('ce5e4b9ff392f043239fd08f2c236a24ae8087ee71ea67073f945a5cb281fae77c1cfc266c1c7666', 2, 1, 'MyLaravelApp', '[]', 0, '2022-09-10 07:48:15', '2022-09-10 07:48:15', '2023-09-10 07:48:15'),
('d8f4d7e1893bee1ac702268b9e367f253de23d765e4e985760ff7cf1ac7516d262b5dc4de53b4a95', 5, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 06:59:17', '2022-09-09 06:59:17', '2023-09-09 06:59:17'),
('d9339717c923dea0427ac12087ff7804fb047f18497847461b6eddeae4949ea6dc858767d0d33442', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 06:11:15', '2022-09-09 06:11:15', '2023-09-09 06:11:15'),
('dd915bbafe3e1546012315a3baa4102711d2f279602ab6118709f268a9a0a7de669f829c798233b7', 4, 1, 'MyLaravelApp', '[]', 0, '2022-09-10 07:23:42', '2022-09-10 07:23:42', '2023-09-10 07:23:42'),
('ddc47b3e3f63b240888a05ea1ff0ca9368d4fa56b83c49463c73ce5576c3b642556178eaa4564ff2', 4, 1, 'MyLaravelApp', '[]', 0, '2022-09-10 07:23:46', '2022-09-10 07:23:46', '2023-09-10 07:23:46'),
('e1085be3192717e280e01cebbb8ac04aa5c0a1eb744f19c05310846f610a163e8e28f4c98e8d4924', 12, 1, 'MyLaravelApp', '[]', 0, '2023-05-29 06:47:31', '2023-05-29 06:47:31', '2024-05-29 12:17:31'),
('e1d7745de27ad2dca2ac2e4cae7ee0be4b6b9db1e4186f630d3f69ad244163ae33227047c37ac4bf', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 07:36:11', '2022-09-09 07:36:11', '2023-09-09 07:36:11'),
('e6a8b7a0be53546cbb12ecd78e3881648026660c1df653ed12a2d91a12c66780ae2f79500077d904', 12, 1, 'MyLaravelApp', '[]', 0, '2023-05-26 00:20:17', '2023-05-26 00:20:17', '2024-05-26 05:50:17'),
('f03e915441662d04138fa9e4d6bfd998cc199743ee412309dd3c722875d636331a061ea0fc419b43', 36, 1, 'MyLaravelApp', '[]', 0, '2023-05-30 04:15:09', '2023-05-30 04:15:09', '2024-05-30 09:45:09'),
('f18d07ce84b93405f525ce56cf1c15005f85bdf44a9a9a65de08f667d98ce82df7f7cb80451d5ee3', 19, 1, 'MyLaravelApp', '[]', 0, '2023-05-29 04:12:21', '2023-05-29 04:12:21', '2024-05-29 09:42:21'),
('f2f51dd9604bb7bfa387c3edd09ad8982326b9ae4a9ad4d4fe4b11aafd68c2b13b24edac5bcb932f', 12, 1, 'MyLaravelApp', '[]', 0, '2023-05-26 00:22:45', '2023-05-26 00:22:45', '2024-05-26 05:52:45'),
('f379b29e26616d8294f5b28bf7d6e25939901a9d0b3a7a139a87a94652f27ff4e12d8e258271af27', 12, 1, 'MyLaravelApp', '[]', 0, '2023-05-26 00:20:15', '2023-05-26 00:20:15', '2024-05-26 05:50:15'),
('f3ff6367bc30610ce52f22f11ea091ba557f0eaa2d391b61dac15485df65675da0acda669e28b75a', 36, 1, 'MyLaravelApp', '[]', 0, '2023-05-30 00:42:58', '2023-05-30 00:42:58', '2024-05-30 06:12:58'),
('fdd1a017e183e21ce5d86e809ce89ddd5eb6bf9f2d712cb1840b7f39381ad9a4c102e432d0702d20', 5, 1, NULL, '[]', 0, '2023-02-06 14:00:05', '2023-02-06 14:00:05', '2024-02-06 14:00:05'),
('fea04e89e8629b9d3a0ac092664ee0ab635ba3e0b287747eb4300b3520e6f39d764034cf7c56abf7', 36, 1, 'MyLaravelApp', '[]', 0, '2023-05-30 02:24:00', '2023-05-30 02:24:00', '2024-05-30 07:54:00'),
('ff3e14244cdd5afe3189ef418ce41553e7117698e7e503f90d4e4ac77f28bbfa0fbe9bb67c1dc377', 1, 1, 'MyLaravelApp', '[]', 0, '2022-09-09 07:18:32', '2022-09-09 07:18:32', '2023-09-09 07:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'fIS8bj7TYWPhLH9oKdYe6FL4sAZxUJ3yDefpy73z', NULL, 'http://localhost', 1, 0, 0, '2022-09-07 13:31:07', '2022-09-07 13:31:07'),
(2, NULL, 'Laravel Password Grant Client', '6Ws2rtBItrajnCl0GiWq0mjxtlz5eplJGN7WBfo3', 'users', 'http://localhost', 0, 1, 0, '2022-09-07 13:31:07', '2022-09-07 13:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-09-07 13:31:07', '2022-09-07 13:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `emp_first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `basic_salary` decimal(8,2) DEFAULT NULL,
  `hra` decimal(8,2) DEFAULT NULL,
  `tds` decimal(8,2) DEFAULT NULL,
  `pf` decimal(8,2) DEFAULT NULL,
  `esic` decimal(8,2) DEFAULT NULL,
  `bank_loan` decimal(8,2) DEFAULT NULL,
  `allowance` decimal(8,2) DEFAULT NULL,
  `total_salary` decimal(8,2) DEFAULT NULL,
  `status` enum('Done','Pending','','') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `emp_id`, `emp_first_name`, `emp_last_name`, `emp_role`, `emp_image`, `emp_email`, `basic_salary`, `hra`, `tds`, `pf`, `esic`, `bank_loan`, `allowance`, `total_salary`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sukrati', 'Thakur', 'HUMAN RESOURCE', '1679046055.jpg', 'Sukratithakur14592@gmail.com', 40000.00, 4000.00, 1500.00, 1000.00, 1000.00, 0.00, 1000.00, 48500.00, 'Pending', '2023-06-16 02:03:26', '2023-06-16 07:10:43'),
(2, 3, 'Arastu', 'Dixit', 'PHP DEVELOPER', '1686938968.jpg', 'arastu@gmail.com', 10000.00, 2000.00, 500.00, 500.00, 400.00, 0.00, 300.00, 13700.00, 'Done', '2023-06-16 02:10:16', '2023-06-16 02:10:16'),
(3, 2, 'bvbv', 'bvb', 'PHP DEVELOPER', '1683803698.jpg', 'bb@gmail.com', 5000.00, 1000.00, 1000.00, 1000.00, NULL, 1000.00, 1000.00, 10000.00, 'Done', '2023-06-16 04:56:47', '2023-06-16 07:17:17'),
(4, 3, 'Arastu', 'Dixit', 'PHP DEVELOPER', '1686938968.jpg', 'arastu@gmail.com', 10000.00, 500.00, 500.00, 500.00, 400.00, 0.00, 500.00, 12400.00, 'Pending', '2023-06-16 12:42:23', '2023-06-16 12:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projectdashboard`
--

CREATE TABLE `projectdashboard` (
  `id` int(11) NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `team` varchar(1048) COLLATE utf8_unicode_ci NOT NULL,
  `project_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `technology` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `project_cost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `milestone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `work` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `priority` enum('Medium','High','None','') COLLATE utf8_unicode_ci DEFAULT NULL,
  `progress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment` enum('Done','Pending','','') COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('Delivered','Submit','','') COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projectdashboard`
--

INSERT INTO `projectdashboard` (`id`, `invoice_no`, `client_name`, `team`, `project_name`, `technology`, `short_description`, `project_cost`, `created`, `milestone`, `work`, `duration`, `priority`, `progress`, `payment`, `status`) VALUES
(2, 'AD1246', 'Sean Black', 'Arastu Dixit', 'Laravel Admin', 'Laravel', 'Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis temporibus!', '$14,500', '2022-06-15 11:15:00', 'Account not receivable', '40:00', '40:0 hrs', 'High', '70%', 'Pending', 'Submit'),
(3, 'DF1937', 'Merri Diamond', 'Rakesh Dongre', 'Wordpress One page', 'PHP/Wordpress', 'Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis temporibus!', '$1,500', '2023-06-08 12:26:00', 'Approval site', '74:00', '89:0 hrs', 'None', '50%', 'Pending', 'Submit'),
(4, 'DF1937', 'Sean Black', 'Ramavtar Prajapati', 'APP DESIGN AND DEVELOPMENT', 'PHP/Codeigniter', 'Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis temporibus!', '$9,500', '2023-06-21 10:56:00', 'Basement slab preparation', '88:00', '88:00', 'None', '40%', 'Pending', 'Submit');

-- --------------------------------------------------------

--
-- Table structure for table `projecttodo`
--

CREATE TABLE `projecttodo` (
  `id` int(11) NOT NULL,
  `short_description` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `due` datetime NOT NULL,
  `priority` enum('Med','High','','') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projecttodo`
--

INSERT INTO `projecttodo` (`id`, `short_description`, `due`, `priority`, `user`) VALUES
(1, 'Report Panel Usage', '2023-06-08 20:31:00', 'Med', 'RK'),
(2, 'short_description1updated', '2023-06-19 00:00:00', 'High', NULL),
(3, 'short_description3updated', '2023-06-15 00:00:00', 'Med', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `item` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_from` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `paid_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('Pending','Approved','','') COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `item`, `category`, `order_by`, `order_from`, `date`, `paid_by`, `status`, `amount`) VALUES
(1, 'HP Laptop', 'Laptop', 'Marshall Nichols', 'Flipkart', '2023-06-07', 'Paypal', 'Approved', '$205'),
(2, 'Dell Monitor 28 inch', 'Computer', 'Ava Alexander', 'Amazon', '2023-02-15', 'mastercard', 'Pending', '$800');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_title`, `role_category`) VALUES
(1, 'PHP DEVELOPER', ''),
(2, 'NODE JS DEVELOPER', ''),
(3, 'REACT NATIVE DEVELOPER', ''),
(4, 'MARKETING AND SALES', ''),
(5, 'IOS DEVELOPER', ''),
(6, 'GRAPHIC DESIGNER', ''),
(7, 'OFFICE ADMIN', ''),
(8, 'HUMAN RESOURCE', ''),
(9, 'SEO & DIGITAL MARKETING', '');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skills_id` int(11) NOT NULL,
  `skills_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skills_id`, `skills_name`) VALUES
(1, 'NODE JS'),
(2, 'PHP'),
(3, 'LARAVEL'),
(4, 'WORDPRESS'),
(5, 'CODEIGNITER'),
(6, 'DRUPAL'),
(7, 'MAGENTO'),
(8, 'CORE PHP'),
(9, 'MYSQL'),
(10, 'MONGOOSE DB'),
(11, 'POSTGRESQL');

-- --------------------------------------------------------

--
-- Table structure for table `taskboard`
--

CREATE TABLE `taskboard` (
  `id` int(11) NOT NULL,
  `task` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `team` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration_from` timestamp NULL DEFAULT NULL,
  `duration_to` timestamp NULL DEFAULT NULL,
  `status` enum('Planned','Completed','In progress','In completed') COLLATE utf8_unicode_ci DEFAULT NULL,
  `progress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taskboard`
--

INSERT INTO `taskboard` (`id`, `task`, `team`, `duration_from`, `duration_to`, `status`, `progress`) VALUES
(1, 'New code Update on github', 'Arastu Dixit', '2023-06-01 17:10:00', '2023-06-30 15:10:00', 'In progress', '80%'),
(2, 'Laravel Admin Panel', 'Rakesh Dongre', '2023-06-15 05:12:00', '2023-07-14 17:12:00', 'Planned', '20%');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trainer_first_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `trainer_last_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trainer_which_profile` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `trainer_month` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `trainer_amount` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `trainer_start_date` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `trainer_end_date` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `trainer_regular_job` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `fees_mode` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `installmenst_1` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `amount_status` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `education` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `unique_id`, `trainer_first_name`, `trainer_last_name`, `email`, `phone`, `gender`, `trainer_which_profile`, `trainer_month`, `trainer_amount`, `trainer_start_date`, `trainer_end_date`, `trainer_regular_job`, `fees_mode`, `installmenst_1`, `amount_status`, `education`, `date_time`) VALUES
(4, '', 'jitu', 'raghuwanshi', 'jitu@gmail.com', '9926335358', 'MALE', 'MARKETING AND SALES', '2', '20000', '2023-05-11', '', '', 'cash', '2', 'paid', 'non tech', '2023-05-11 13:46:13'),
(5, 'TR-2023-12699474', 'tesst', 'test', 'rakeshdongre99@gmail.com', '1234567890', 'MALE', 'NODE JS DEVELOPER', '2', '88', '2023-05-14', '', '', 'online', '1', 'paid', 'non tech', '2023-05-13 17:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_type` enum('Super Admin','Admin','Employee') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Employee',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('Active','Deactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_id`, `first_name`, `last_name`, `username`, `email`, `email_verified_at`, `password`, `mobile_no`, `role_type`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, '', '', '', 'rakesh dongre', 'rakeshdongre9@gmail.com', '0000-00-00 00:00:00', '$2y$10$xR/8Ym8yUsU781K0X4PqfOQzOM6vaHAsBnj5F21JoqDBFvFZLjwr6', '', '', NULL, '2023-01-02 06:33:32', '2023-01-02 06:33:32', 'Active'),
(2, '', '', '', 'rakeshdongre999@gmail.com', 'rakeshdongre999@gmail.com', '0000-00-00 00:00:00', '$2y$10$K2ktcokpq2sFcjfMUDALCOpVA2Jvh1RCOqcvdlmvOiItC/EGX9ab2', '', '', NULL, '2023-01-24 11:59:14', '2023-01-24 11:59:14', 'Active'),
(3, '', '', '', 'rakeshdongre993@gmail.com', 'rakeshdongre993@gmail.com', '0000-00-00 00:00:00', '$2y$10$X3bp.CvSrCmzGIXqSZmAnOWqrmp05BkYATCNnhRnjlzJu8zCYp3K.', '', '', NULL, '2023-01-24 12:00:01', '2023-01-24 12:00:01', 'Active'),
(4, '', '', '', 'rakeshdongre994@gmail.com', 'rakeshdongre994@gmail.com', '0000-00-00 00:00:00', '$2y$10$ArS1eHo40Fpq16uiQ8Xy3.oxZB3RDBHMZfDPDVinx54R8JflKNXpG', '', '', NULL, '2023-01-24 12:03:58', '2023-01-24 12:03:58', 'Active'),
(5, '', '', '', 'rakeshdongre998@gmail.com', 'rakeshdongre998@gmail.com', '0000-00-00 00:00:00', '$2y$10$YtkcQL4ILnquYWWa6AoZKO805l5vBLIM5oDMbSyglEaiosSqJUOLm', '', '', NULL, '2023-01-24 12:06:56', '2023-01-24 12:06:56', 'Active'),
(6, '', '', '', 'rakeshdongre9991@gmail.com', 'rakeshdongre9991@gmail.com', '0000-00-00 00:00:00', '$2y$10$Ua46z13Y3vb0YsZmDEJefem1kXXWIw6XV58c/vsFAypTLRfkgYyu.', '', '', NULL, '2023-01-24 12:08:25', '2023-01-24 12:08:25', 'Active'),
(7, '', '', '', 'rakeshdongre199@gmail.com', 'rakeshdongre199@gmail.com', '0000-00-00 00:00:00', '$2y$10$3dcp9IwdUzvfbI5Yiw8/ceIRaY0wgd6C8Ain8iZyAd4gjmx16yh12', '', '', NULL, '2023-01-24 12:10:37', '2023-01-24 12:10:37', 'Active'),
(8, '', '', '', 'rakeshdongre99@gmail.com', 'rakeshdongre99@gmail.com', '0000-00-00 00:00:00', '$2y$10$asUoJIiR2fl7n8Urzig8WOcMBfp4vrMROD82B3hyyTuISk60cP..u', '', '', NULL, '2023-01-25 13:57:30', '2023-01-25 13:57:30', 'Active'),
(9, '', '', '', 'aaaaaaaa', 'aaaaaaaa@gmail.com', '0000-00-00 00:00:00', '$2y$10$Ry.mKsM90OJZH0oZb3BFD.im2Nnj.JetXdm.9y.g1oHpFh6/qcDgK', '', '', NULL, '2023-01-31 11:14:46', '2023-01-31 11:14:46', 'Active'),
(10, '', '', '', 'rakeshdongre11@gmail.com', 'rakeshdongre11@gmail.com', '0000-00-00 00:00:00', '$2y$10$Zvmaby/yUPAdD0XP6GNiJe/IAKQjMCqeAPo5ubzPsjCOO3LqFyQta', '', '', NULL, '2023-02-01 12:53:29', '2023-02-01 12:53:29', 'Active'),
(11, '', '', '', 'rakeshdongre1999@gmail.com', 'rakeshdongre1999@gmail.com', '0000-00-00 00:00:00', '$2y$10$FHmAavYbknAd0CuexjvQCOmOjq7FyL0TuM3HtjqmkjjCtrAjV4MsK', '', '', NULL, '2023-02-06 13:52:11', '2023-02-06 13:52:11', 'Active'),
(12, '', '', '', 'ram', 'ram@gmail.com', '0000-00-00 00:00:00', '$2y$10$vSZ9LidxvEcDdLhry.tVUO0fIFTSU.bmfYcoDEPQmrks/ITG86izu', '', '', NULL, '2023-05-25 05:49:25', '2023-05-25 05:49:25', 'Active'),
(18, '', '', '', 'ram', 'rama@gmail.com', '0000-00-00 00:00:00', '$2y$10$l4AzEjqO4LPCT5LELrRLcuSp/v.ju/1V4b062yVFYl.jr5ZR7ABS.', '', '', NULL, '2023-05-29 04:10:22', '2023-05-29 04:10:22', 'Active'),
(24, '', '', '', '', 'ghgh', '0000-00-00 00:00:00', '', '', '', NULL, '2023-05-29 04:14:54', '2023-05-29 04:14:54', 'Active'),
(28, '', '', '', '', 'rr', '0000-00-00 00:00:00', '$2y$10$fWDEkVqu0jR/xcM3wdTSnuSwsBu7SMBC97mKRa6R4Tafx4m5AwRRS', '', '', NULL, '2023-05-29 05:38:22', '2023-05-29 05:38:22', 'Active'),
(30, '', '', '', '', 'rrr', '0000-00-00 00:00:00', '$2y$10$zoN2BItI35UeIisyN0WYtOKgoFJ4F4RKOW3ds3JmgR7IlP2VtDbky', '', '', NULL, '2023-05-29 05:39:06', '2023-05-29 05:39:06', 'Active'),
(31, '', '', '', '', '1234567891', '0000-00-00 00:00:00', '$2y$10$aA395VzpTVWFqeUJoc7hJuS7aJH1cpUs.dn9q7GOA33wVqZ90RKFK', '', '', NULL, '2023-05-29 06:48:52', '2023-05-29 06:48:52', 'Active'),
(33, '3', 'arastu', 'dixit', 'Arastu Dixit', 'arastu@gmail.com', '0000-00-00 00:00:00', '$2y$10$KI3V7FEFs9mVzflycnLxVOVLbZ38aS8USPaRzouNTTec8eQ/EKDcO', '1234', 'Employee', NULL, '2023-05-29 06:49:30', '2023-06-07 04:25:53', 'Active'),
(35, '', '', '', 'arastu', '1234@5678910', '0000-00-00 00:00:00', '$2y$10$4u6FsGqjqyrm.Q2o/7fGbezDU2EGidCw1h5ovPKZSXimzCfVfibN2', '', '', NULL, '2023-05-29 06:52:52', '2023-06-05 05:59:00', 'Deactive'),
(40, '', '', '', 'admin', 'admin@gmail.com', '0000-00-00 00:00:00', '$2y$10$2.av.TSJBuxk6HoWL0i2Kul6H4lLsTbkQnpPxcWlwt9IaXP3KNSV.', '', '', NULL, '2023-05-31 04:09:38', '2023-05-31 04:09:38', 'Active'),
(43, '11', 'dixit', 'arastu', 'dixit', 'example@gmail.com', '0000-00-00 00:00:00', '$2y$10$vg7T1kLqcmPfMqcc7A/nguXwnwSgIDDnNaOWLH30N3iiIndXIl5Am', '09876543211', 'Employee', NULL, '2023-06-07 05:12:58', '2023-06-07 05:21:33', 'Deactive'),
(44, '102', 'd1', 'b1', 'sachin', 'de@gmail.com', '0000-00-00 00:00:00', '$2y$10$spe7o4yJo3.mh90I1lRbJOzfjBqpvG3l65w8Ae4D1lcKrBbJL4J/u', '0987837594', 'Super Admin', NULL, NULL, '2023-06-07 12:31:11', 'Deactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `countrys`
--
ALTER TABLE `countrys`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`documents_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobportal`
--
ALTER TABLE `jobportal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projectdashboard`
--
ALTER TABLE `projectdashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projecttodo`
--
ALTER TABLE `projecttodo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skills_id`);

--
-- Indexes for table `taskboard`
--
ALTER TABLE `taskboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `countrys`
--
ALTER TABLE `countrys`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `documents_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobportal`
--
ALTER TABLE `jobportal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projectdashboard`
--
ALTER TABLE `projectdashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projecttodo`
--
ALTER TABLE `projecttodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skills_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `taskboard`
--
ALTER TABLE `taskboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payroll`
--
ALTER TABLE `payroll`
  ADD CONSTRAINT `payroll_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
