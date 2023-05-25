-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 08:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `investment-application`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'Andorra'),
(5, 'Angola'),
(6, 'Antigua and Barbuda'),
(7, 'Argentina'),
(8, 'Armenia'),
(9, 'Australia'),
(10, 'Austria'),
(11, 'Azerbaijan'),
(12, 'Bahamas'),
(13, 'Bahrain'),
(14, 'Bangladesh'),
(15, 'Barbados'),
(16, 'Belarus'),
(17, 'Belgium'),
(18, 'Belize'),
(19, 'Benin'),
(20, 'Bhutan'),
(21, 'Bolivia'),
(22, 'Bosnia and Herzegovina'),
(23, 'Botswana'),
(24, 'Brazil'),
(25, 'Brunei'),
(26, 'Bulgaria'),
(27, 'Burkina Faso'),
(28, 'Burundi'),
(29, 'Cabo Verde'),
(30, 'Cambodia'),
(31, 'Cameroon'),
(32, 'Canada'),
(33, 'Central African Republic'),
(34, 'Chad'),
(35, 'Chile'),
(36, 'China'),
(37, 'Colombia'),
(38, 'Comoros'),
(39, 'Congo (Brazzaville)'),
(40, 'Congo (Kinshasa)'),
(41, 'Costa Rica'),
(42, 'Croatia'),
(43, 'Cuba'),
(44, 'Cyprus'),
(45, 'Czech Republic'),
(46, 'Denmark'),
(47, 'Djibouti'),
(48, 'Dominica'),
(49, 'Dominican Republic'),
(50, 'East Timor'),
(51, 'Ecuador'),
(52, 'Egypt'),
(53, 'El Salvador'),
(54, 'Equatorial Guinea'),
(55, 'Eritrea'),
(56, 'Estonia'),
(57, 'Eswatini'),
(58, 'Ethiopia'),
(59, 'Fiji'),
(60, 'Finland'),
(61, 'France'),
(62, 'Gabon'),
(63, 'Gambia'),
(64, 'Georgia'),
(65, 'Germany'),
(66, 'Ghana'),
(67, 'Greece'),
(68, 'Grenada'),
(69, 'Guatemala'),
(70, 'Guinea'),
(71, 'Guinea-Bissau'),
(72, 'Guyana'),
(73, 'Haiti'),
(74, 'Holy See'),
(75, 'Honduras'),
(76, 'Hong Kong'),
(77, 'Hungary'),
(78, 'Iceland'),
(79, 'India'),
(80, 'Indonesia'),
(81, 'Iran'),
(82, 'Iraq'),
(83, 'Ireland'),
(84, 'Isle of Man'),
(85, 'Israel'),
(86, 'Italy'),
(87, 'Jamaica'),
(88, 'Japan'),
(89, 'Jordan'),
(90, 'Kazakhstan'),
(91, 'Kenya'),
(92, 'Kiribati'),
(93, 'Kuwait'),
(94, 'Kyrgyzstan'),
(95, 'Laos'),
(96, 'Latvia'),
(97, 'Lebanon'),
(98, 'Lesotho'),
(99, 'Liberia'),
(100, 'Libya'),
(101, 'Liechtenstein'),
(102, 'Lithuania'),
(103, 'Luxembourg'),
(104, 'Macau'),
(105, 'Macedonia'),
(106, 'Madagascar'),
(107, 'Malawi'),
(108, 'Malaysia'),
(109, 'Maldives'),
(110, 'Mali'),
(111, 'Malta'),
(112, 'Marshall Islands'),
(113, 'Mauritania'),
(114, 'Mauritius'),
(115, 'Mexico'),
(116, 'Micronesia'),
(117, 'Moldova'),
(118, 'Monaco'),
(119, 'Mongolia'),
(120, 'Montenegro'),
(121, 'Montserrat'),
(122, 'Morocco'),
(123, 'Mozambique'),
(124, 'Myanmar'),
(125, 'Namibia'),
(126, 'Nauru'),
(127, 'Nepal'),
(128, 'Netherlands'),
(129, 'New Caledonia'),
(130, 'New Zealand'),
(131, 'Nicaragua'),
(132, 'Niger'),
(133, 'Nigeria'),
(134, 'Niue'),
(135, 'Norfolk Island'),
(136, 'North Korea'),
(137, 'Northern Mariana Islands'),
(138, 'Norway'),
(139, 'Oman'),
(140, 'Pakistan'),
(141, 'Palau'),
(142, 'Palestine'),
(143, 'Panama'),
(144, 'Papua New Guinea'),
(145, 'Paraguay'),
(146, 'Peru'),
(147, 'Philippines'),
(148, 'Pitcairn'),
(149, 'Poland'),
(150, 'Portugal'),
(151, 'Puerto Rico'),
(152, 'Qatar'),
(153, 'Romania'),
(154, 'Russia'),
(155, 'Rwanda'),
(156, 'Saint Kitts and Nevis'),
(157, 'Saint Lucia'),
(158, 'Saint Vincent and the Grenadines'),
(159, 'Samoa'),
(160, 'San Marino'),
(161, 'Sao Tome and Principe'),
(162, 'Saudi Arabia'),
(163, 'Senegal'),
(164, 'Serbia'),
(165, 'Seychelles'),
(166, 'Sierra Leone'),
(167, 'Singapore'),
(168, 'Slovakia'),
(169, 'Slovenia'),
(170, 'Solomon Islands'),
(171, 'Somalia'),
(172, 'South Africa'),
(173, 'South Sudan'),
(174, 'Spain'),
(175, 'Sri Lanka'),
(176, 'Sudan'),
(177, 'Suriname'),
(178, 'Sweden'),
(179, 'Switzerland'),
(180, 'Syria'),
(181, 'Taiwan'),
(182, 'Tajikistan'),
(183, 'Tanzania'),
(184, 'Thailand'),
(185, 'Timor-Leste'),
(186, 'Togo'),
(187, 'Tonga'),
(188, 'Trinidad and Tobago'),
(189, 'Tunisia'),
(190, 'Turkey'),
(191, 'Turkmenistan'),
(192, 'Tuvalu'),
(193, 'Uganda'),
(194, 'Ukraine'),
(195, 'United Arab Emirates'),
(196, 'United Kingdom'),
(197, 'United States'),
(198, 'Uruguay'),
(199, 'Uzbekistan'),
(200, 'Vanuatu'),
(201, 'Vatican City'),
(202, 'Venezuela'),
(203, 'Vietnam'),
(204, 'Yemen'),
(205, 'Zambia'),
(206, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`) VALUES
(1, 'Afghan Afghani'),
(2, 'Albanian Lek'),
(3, 'Algerian Dinar'),
(4, 'Angolan Kwanza'),
(5, 'Argentine Peso'),
(6, 'Armenian Dram'),
(7, 'Aruban Florin'),
(8, 'Australian Dollar'),
(9, 'Azerbaijani Manat'),
(10, 'Bahamian Dollar'),
(11, 'Bahraini Dinar'),
(12, 'Bangladeshi Taka'),
(13, 'Barbadian Dollar'),
(14, 'Belarusian Ruble'),
(15, 'Belize Dollar'),
(16, 'Bermudian Dollar'),
(17, 'Bhutanese Ngultrum'),
(18, 'Bolivian Boliviano'),
(19, 'Bosnia and Herzegovina Convertible Mark'),
(20, 'Botswana Pula'),
(21, 'Brazilian Real'),
(22, 'British Pound'),
(23, 'Brunei Dollar'),
(24, 'Bulgarian Lev'),
(25, 'Burundian Franc'),
(26, 'Cambodian Riel'),
(27, 'Canadian Dollar'),
(28, 'Cape Verdean Escudo'),
(29, 'Cayman Islands Dollar'),
(30, 'Central African CFA Franc'),
(31, 'Chilean Peso'),
(32, 'Chinese Yuan'),
(33, 'Colombian Peso'),
(34, 'Comorian Franc'),
(35, 'Congolese Franc'),
(36, 'Costa Rican Colón'),
(37, 'Croatian Kuna'),
(38, 'Cuban Peso'),
(39, 'Czech Koruna'),
(40, 'Danish Krone'),
(41, 'Djiboutian Franc'),
(42, 'Dominican Peso'),
(43, 'East Caribbean Dollar'),
(44, 'Egyptian Pound'),
(45, 'Eritrean Nakfa'),
(46, 'Estonian Kroon'),
(47, 'Ethiopian Birr'),
(48, 'Euro'),
(49, 'Fijian Dollar'),
(50, 'Gambian Dalasi'),
(51, 'Georgian Lari'),
(52, 'Ghanaian Cedi'),
(53, 'Gibraltar Pound'),
(54, 'Guatemalan Quetzal'),
(55, 'Guinean Franc'),
(56, 'Guyanese Dollar'),
(57, 'Haitian Gourde'),
(58, 'Honduran Lempira'),
(59, 'Hong Kong Dollar'),
(60, 'Hungarian Forint'),
(61, 'Icelandic Króna'),
(62, 'Indian Rupee'),
(63, 'Indonesian Rupiah'),
(64, 'Iranian Rial'),
(65, 'Iraqi Dinar'),
(66, 'Israeli New Shekel'),
(67, 'Jamaican Dollar'),
(68, 'Japanese Yen'),
(69, 'Jordanian Dinar'),
(70, 'Kazakhstani Tenge'),
(71, 'Kenyan Shilling'),
(72, 'Kuwaiti Dinar'),
(73, 'Kyrgyzstani Som'),
(74, 'Lao Kip'),
(75, 'Latvian Lats'),
(76, 'Lebanese Pound'),
(77, 'Lesotho Loti'),
(78, 'Liberian Dollar'),
(79, 'Libyan Dinar'),
(80, 'Lithuanian Litas'),
(81, 'Macanese Pataca'),
(82, 'Macedonian Denar'),
(83, 'Malagasy Ariary'),
(84, 'Malawian Kwacha'),
(85, 'Malaysian Ringgit'),
(86, 'Maldivian Rufiyaa'),
(87, 'Mauritanian Ouguiya'),
(88, 'Mauritian Rupee'),
(89, 'Mexican Peso'),
(90, 'Moldovan Leu'),
(91, 'Mongolian Tögrög'),
(92, 'Moroccan Dirham'),
(93, 'Mozambican Metical'),
(94, 'Myanmar Kyat'),
(95, 'Namibian Dollar'),
(96, 'Nepalese Rupee'),
(97, 'Netherlands Antillean Guilder'),
(98, 'New Taiwan Dollar'),
(99, 'New Zealand Dollar'),
(100, 'Nicaraguan Córdoba'),
(101, 'Nigerian Naira'),
(102, 'North Korean Won'),
(103, 'Norwegian Krone'),
(104, 'Omani Rial'),
(105, 'Pakistani Rupee'),
(106, 'Panamanian Balboa'),
(107, 'Papua New Guinean Kina'),
(108, 'Paraguayan Guaraní'),
(109, 'Peruvian Sol'),
(110, 'Philippine Peso'),
(111, 'Polish Złoty'),
(112, 'Qatari Riyal'),
(113, 'Romanian Leu'),
(114, 'Russian Ruble'),
(115, 'Rwandan Franc'),
(116, 'Saint Helena Pound'),
(117, 'São Tomé and Príncipe Dobra'),
(118, 'Saudi Riyal'),
(119, 'Serbian Dinar'),
(120, 'Seychellois Rupee'),
(121, 'Sierra Leonean Leone'),
(122, 'Singapore Dollar'),
(123, 'Slovak Koruna'),
(124, 'Solomon Islands Dollar'),
(125, 'Somali Shilling'),
(126, 'South African Rand'),
(127, 'South Korean Won'),
(128, 'Sri Lankan Rupee'),
(129, 'Sudanese Pound'),
(130, 'Surinamese Dollar'),
(131, 'Swazi Lilangeni'),
(132, 'Swedish Krona'),
(133, 'Swiss Franc'),
(134, 'Syrian Pound'),
(135, 'Tajikistani Somoni'),
(136, 'Tanzanian Shilling'),
(137, 'Thai Baht'),
(138, 'Tongan Paanga'),
(139, 'Trinidad and Tobago Dollar'),
(140, 'Tunisian Dinar'),
(141, 'Turkish Lira'),
(142, 'Turkmenistani Manat'),
(143, 'Ugandan Shilling'),
(144, 'Ukrainian Hryvnia'),
(145, 'United Arab Emirates Dirham'),
(146, 'United States Dollar'),
(147, 'Uruguayan Peso'),
(148, 'Uzbekistani Som'),
(149, 'Vanuatu Vatu'),
(150, 'Venezuelan Bolívar'),
(151, 'Vietnamese Dong'),
(152, 'West African CFA Franc'),
(153, 'Yemeni Rial'),
(154, 'Zambian Kwacha'),
(155, 'Zimbabwean Dollar');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `abstract` longtext NOT NULL,
  `content` text NOT NULL,
  `expiry_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `major_sector_id` bigint(20) UNSIGNED NOT NULL,
  `minor_sector_id` bigint(20) UNSIGNED NOT NULL,
  `risk_rating_id` bigint(20) UNSIGNED NOT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `currency_id` bigint(20) UNSIGNED NOT NULL,
  `creator_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`id`, `title`, `abstract`, `content`, `expiry_date`, `created_at`, `updated_at`, `major_sector_id`, `minor_sector_id`, `risk_rating_id`, `region_id`, `country_id`, `currency_id`, `creator_id`) VALUES
(1, 'Repellat consequuntur at provident iusto.', 'Veniam nihil vel nisi ducimus. Cupiditate sit accusantium repellat nulla accusantium autem omnis. Nemo sequi iure expedita dolorum beatae voluptatem. Recusandae ipsa facere minus tenetur. Similique tenetur modi in sequi qui.', 'Distinctio minima eaque et voluptate ut necessitatibus. Nesciunt repudiandae dolor possimus consequuntur. Voluptatem pariatur qui quaerat rerum sed exercitationem nihil. Et eum repellat voluptatem vel delectus sed.', '2004-12-10', '2023-04-18 14:11:16', '2023-04-18 14:11:16', 6, 10, 3, 1, 4, 1, 1),
(2, 'Qui labore eum ut qui ut debitis rerum.', 'Aliquid architecto similique labore quia et aut. Voluptates est velit animi enim. Inventore voluptate vero et numquam ut. Hic voluptas minus aspernatur voluptatibus iusto voluptas et. Molestiae aut pariatur veniam deleniti. Sint minima cupiditate reprehenderit ut incidunt et officiis. Reiciendis et omnis id. Placeat voluptas est provident sapiente sunt et.', 'Cupiditate ullam possimus dolore. Quia et quis laboriosam dolor. Rerum tenetur quidem illum aliquid. Ducimus tenetur vel expedita sunt odit. Consectetur ut rerum voluptatem sunt.', '2002-08-06', '2023-04-18 14:11:16', '2023-04-18 14:11:16', 2, 2, 2, 3, 27, 23, 1),
(3, 'Quae dicta sunt ullam qui numquam nulla.', 'Non cupiditate commodi aut accusamus ea animi. Quo debitis aut voluptatem. Quasi placeat quam commodi quia sed. Minima omnis eligendi dolor et beatae.', 'Nam sed tempora provident unde fugit repellat. Ducimus in cumque dicta voluptatem quia est. Qui quia doloremque sit vel temporibus non.', '2009-11-26', '2023-04-18 14:11:16', '2023-04-18 14:11:16', 9, 9, 4, 2, 105, 112, 1),
(5, 'Bitcoin', 'This is an abstract on bitcoin', 'Bitcoin is a protocol which implements a highly available, public, permanent, and decentralized ledger. In order to add to the ledger, a user must prove they control an entry in the ledger. The protocol specifies that the entry indicates an amount of a token, bitcoin with a minuscule b', '2023-06-24', '2023-04-18 14:29:07', '2023-04-19 11:01:35', 8, 4, 2, 1, 77, 84, 4),
(6, 'Stock', 'This is an abstract on Stock', 'the capital raised by a company or corporation through the issue and subscription of shares.\r\n\"between 1982 and 1986 the value of the company\'s stock rose b', '2023-05-26', '2023-04-19 10:43:33', '2023-04-19 10:43:33', 10, 8, 2, 3, 18, 151, 4);

-- --------------------------------------------------------

--
-- Table structure for table `idea_assignations`
--

CREATE TABLE `idea_assignations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idea_id` bigint(20) UNSIGNED NOT NULL,
  `investor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('suggested','accepted','rejected') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `idea_instrument`
--

CREATE TABLE `idea_instrument` (
  `idea_id` bigint(20) UNSIGNED NOT NULL,
  `instrument_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `idea_instrument`
--

INSERT INTO `idea_instrument` (`idea_id`, `instrument_id`) VALUES
(1, 10),
(2, 12),
(2, 13),
(3, 6),
(3, 13),
(5, 3),
(5, 4),
(6, 4),
(6, 15);

-- --------------------------------------------------------

--
-- Table structure for table `idea_product`
--

CREATE TABLE `idea_product` (
  `idea_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `idea_product`
--

INSERT INTO `idea_product` (`idea_id`, `product_id`) VALUES
(1, 13),
(2, 11),
(2, 14),
(3, 1),
(3, 16),
(5, 4),
(5, 11),
(6, 4),
(6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `instruments`
--

CREATE TABLE `instruments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instruments`
--

INSERT INTO `instruments` (`id`, `name`) VALUES
(1, 'AAPL'),
(2, 'MSFT'),
(3, 'GOOGL'),
(4, 'TSLA'),
(5, 'FB'),
(6, 'AMZN'),
(7, 'NFLX'),
(8, 'BRK.A'),
(9, 'JPM'),
(10, 'V'),
(11, 'WMT'),
(12, 'JNJ'),
(13, 'NVDA'),
(14, 'XOM'),
(15, 'BA');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_03_06_151238_create_risk_ratings_table', 1),
(5, '2023_03_06_164559_create_sectors_table', 1),
(6, '2023_03_06_170745_create_regions_table', 1),
(7, '2023_03_06_170754_create_countries_table', 1),
(8, '2023_03_06_170803_create_currencies_table', 1),
(9, '2023_03_06_175121_create_products_table', 1),
(10, '2023_03_06_175138_create_instruments_table', 1),
(11, '2023_03_13_124455_create_ideas_table', 1),
(12, '2023_04_06_175852_create_idea_instrument_table', 1),
(13, '2023_04_06_175909_create_idea_product_table', 1),
(14, '2023_04_11_171015_create_idea_assignations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`) VALUES
(1, 'Bonds'),
(2, 'Equity'),
(3, 'Mutual Funds'),
(4, 'Index Funds'),
(5, 'Private Equity'),
(6, 'Exchange-traded Funds'),
(7, 'Stocks'),
(8, 'Fixed Deposit'),
(9, 'Certificates of Deposit'),
(10, 'Retirement Planning'),
(11, 'Insurance'),
(12, 'Provident Funds'),
(13, 'Annuity'),
(14, 'Trade'),
(15, 'Derivative'),
(16, 'Cash and Cash Equivalences');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`) VALUES
(1, 'Americas (North America, South America, Central America, Caribbean)'),
(2, 'Asia Pacific (Central & South Asia, Northeastern Asia, Southeastern Asia, Australia and Oceania)'),
(3, 'Europe (Northern Europe, Southern Europe, Eastern Europe, Western Europe)'),
(4, 'Middle East/Africa (Middle East, Northern Africa, Southern Africa)');

-- --------------------------------------------------------

--
-- Table structure for table `risk_ratings`
--

CREATE TABLE `risk_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `risk_ratings`
--

INSERT INTO `risk_ratings` (`id`, `name`) VALUES
(1, 'Highly suitable for conservative investors'),
(2, 'Suitable for conservative investors'),
(3, 'Suitable for moderate investors'),
(4, 'Suitable for aggressive investors'),
(5, 'Highly suitable for aggressive investors');

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`id`, `name`) VALUES
(1, 'Banking & Investment Services'),
(2, 'Technology'),
(3, 'Healthcare Services'),
(4, 'Real Estate'),
(5, 'Food & Beverages'),
(6, 'Automobiles'),
(7, 'Telecommunication'),
(8, 'Utilities'),
(9, 'Transportation'),
(10, 'Construction');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `email`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 'creator@example.com', 'Tyler Creator', '$2y$10$sPcEA6lM4VyKW8G9kBAfT.MjoNHYV8qs/tN7RAz21AH1JMqYAT10W', NULL, NULL),
(2, 2, 'investor@example.com', 'John Investor', '$2y$10$Sz2d/qJjjKxVAi3joVrXYePSOyfJJx7JGqLBvNelVXqZmz7YwpfRC', NULL, NULL),
(3, 3, 'manager@example.com', 'Phill Manager', '$2y$10$GnoD1yUca.MfmAkiPAL9BuaRMovfw5qmpLFRegHfveJmK4XYtVgA.', NULL, NULL),
(4, 1, 'awosikat@gmail.com', 'Tomisin Awosika', '$2y$10$XY/R0IwNw0ZX8SF.GJjyOOjmuBzd9Zi.PYScKa.p4jp0Im3RvcI4W', '2023-04-18 14:12:17', '2023-04-18 14:12:17'),
(5, 1, 'tma132@student.aru.ac.uk', 'Tomisin Awosika', '$2y$10$XXPx/pmCd7pgd6nJyfxsS.ihns2/4AzLR/0fIZwEGTb1JWs.mtIoO', '2023-04-23 19:34:36', '2023-04-23 19:34:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ideas_major_sector_id_foreign` (`major_sector_id`),
  ADD KEY `ideas_minor_sector_id_foreign` (`minor_sector_id`),
  ADD KEY `ideas_risk_rating_id_foreign` (`risk_rating_id`),
  ADD KEY `ideas_region_id_foreign` (`region_id`),
  ADD KEY `ideas_country_id_foreign` (`country_id`),
  ADD KEY `ideas_currency_id_foreign` (`currency_id`),
  ADD KEY `ideas_creator_id_foreign` (`creator_id`);

--
-- Indexes for table `idea_assignations`
--
ALTER TABLE `idea_assignations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idea_assignations_idea_id_investor_id_unique` (`idea_id`,`investor_id`),
  ADD KEY `idea_assignations_investor_id_foreign` (`investor_id`);

--
-- Indexes for table `idea_instrument`
--
ALTER TABLE `idea_instrument`
  ADD PRIMARY KEY (`idea_id`,`instrument_id`),
  ADD KEY `idea_instrument_instrument_id_foreign` (`instrument_id`);

--
-- Indexes for table `idea_product`
--
ALTER TABLE `idea_product`
  ADD PRIMARY KEY (`idea_id`,`product_id`),
  ADD KEY `idea_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `instruments`
--
ALTER TABLE `instruments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `risk_ratings`
--
ALTER TABLE `risk_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
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
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `idea_assignations`
--
ALTER TABLE `idea_assignations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instruments`
--
ALTER TABLE `instruments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `risk_ratings`
--
ALTER TABLE `risk_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ideas`
--
ALTER TABLE `ideas`
  ADD CONSTRAINT `ideas_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `ideas_creator_id_foreign` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ideas_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`),
  ADD CONSTRAINT `ideas_major_sector_id_foreign` FOREIGN KEY (`major_sector_id`) REFERENCES `sectors` (`id`),
  ADD CONSTRAINT `ideas_minor_sector_id_foreign` FOREIGN KEY (`minor_sector_id`) REFERENCES `sectors` (`id`),
  ADD CONSTRAINT `ideas_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`),
  ADD CONSTRAINT `ideas_risk_rating_id_foreign` FOREIGN KEY (`risk_rating_id`) REFERENCES `risk_ratings` (`id`);

--
-- Constraints for table `idea_assignations`
--
ALTER TABLE `idea_assignations`
  ADD CONSTRAINT `idea_assignations_idea_id_foreign` FOREIGN KEY (`idea_id`) REFERENCES `ideas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `idea_assignations_investor_id_foreign` FOREIGN KEY (`investor_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `idea_instrument`
--
ALTER TABLE `idea_instrument`
  ADD CONSTRAINT `idea_instrument_idea_id_foreign` FOREIGN KEY (`idea_id`) REFERENCES `ideas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `idea_instrument_instrument_id_foreign` FOREIGN KEY (`instrument_id`) REFERENCES `instruments` (`id`);

--
-- Constraints for table `idea_product`
--
ALTER TABLE `idea_product`
  ADD CONSTRAINT `idea_product_idea_id_foreign` FOREIGN KEY (`idea_id`) REFERENCES `ideas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `idea_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
