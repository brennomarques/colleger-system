-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 31/12/2021 às 09:09
-- Versão do servidor: 8.0.27-0ubuntu0.20.04.1
-- Versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `college_system`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `coursename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qntmax` int NOT NULL,
  `createdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updatedate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthlypayment` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `courses`
--

INSERT INTO `courses` (`id`, `coursename`, `qntmax`, `createdate`, `updatedate`, `category`, `monthlypayment`, `created_at`, `updated_at`) VALUES
(1, 'C#1', 19, '2010-06-21 11:23:15', '1977-12-01 22:06:13', 'Programação', 2978, '2021-12-30 18:33:09', '2021-12-30 18:44:58'),
(2, 'PHP', 13, '2005-01-25 15:10:03', '2007-11-12 07:28:01', 'Programação', 1533, '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(3, 'Javascript', 15, '1995-08-13 05:10:19', '1999-10-15 17:52:12', 'Programação', 2536, '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(4, 'PHP', 19, '1987-08-17 00:09:19', '2008-08-03 22:11:58', 'Programação', 2655, '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(5, 'Java', 14, '1995-09-07 10:24:38', '2021-03-24 08:17:53', 'Programação', 1171, '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(6, 'C++', 20, '1999-08-24 15:09:32', '2000-02-07 23:44:59', 'Programação', 2060, '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(7, 'PHP', 14, '1984-05-27 20:18:45', '1987-06-26 03:25:05', 'Programação', 1931, '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(8, 'C++', 17, '1973-11-05 21:10:07', '2015-01-26 09:15:47', 'Programação', 1749, '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(9, 'AAAaaa', 123, '12/04/1998', '13/05/2021', '123213', 1232, '2021-12-30 18:50:22', '2021-12-30 18:50:22');

-- --------------------------------------------------------

--
-- Estrutura para tabela `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lessonnumber` int NOT NULL,
  `theme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courseid` int NOT NULL,
  `teacherid` int NOT NULL,
  `createdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updatedate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `lessons`
--

INSERT INTO `lessons` (`id`, `created_at`, `updated_at`, `lessonnumber`, `theme`, `duration`, `note`, `courseid`, `teacherid`, `createdate`, `updatedate`) VALUES
(1, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 181, 'Programming', '3', 'Iure repudiandae ex id fugiat ea vero doloribus. Ullam neque voluptas consequatur soluta. Enim aut facere placeat aliquam.', 8, 1, '2021-04-19 16:07:29', '1992-10-24 11:26:16'),
(2, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 155, 'Programming', '3', 'Quisquam nobis enim culpa sed sunt atque commodi. Et nostrum dolor animi natus. Excepturi amet perspiciatis eius iusto dolores quia.', 5, 7, '1982-02-14 16:21:42', '2014-03-30 15:11:05'),
(3, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 181, 'Programming', '1', 'Ut omnis libero minus earum. Id sapiente maiores maxime quisquam eius exercitationem ab aspernatur. Dolores fuga nam et hic dolores.', 2, 4, '2001-03-02 17:32:08', '1989-02-20 07:26:02'),
(4, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 138, 'DEVOps', '2', 'Amet dolores enim quas voluptatem cum explicabo. Fugit ratione et tempore possimus cum velit ut voluptatum.', 3, 4, '2012-03-11 02:56:32', '1988-05-11 06:48:43'),
(5, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 180, 'Programming', '3', 'Nemo repellat nihil ut. Dolorum maxime ea rerum velit. Perferendis et corrupti non ratione cum molestiae dolores.', 6, 2, '2012-01-29 04:30:21', '2013-02-13 22:39:56'),
(6, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 73, 'Design and UX', '1', 'Illum vero quasi veniam. Dolores vel qui et voluptatum quia et iure. Et voluptas qui vel.', 3, 6, '2011-03-01 17:08:29', '1993-04-11 22:59:10'),
(7, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 32, 'Design and UX', '2', 'Iste voluptates aut dignissimos maiores magni rerum totam. Et atque magnam laudantium sed. Omnis est repudiandae eum assumenda ut dolore qui.', 7, 5, '1978-12-18 23:04:43', '1993-12-21 21:35:58'),
(8, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 106, 'Programming', '3', 'Esse impedit ut voluptatem. Temporibus saepe repudiandae animi. Necessitatibus non libero et ullam ipsum et. Corrupti velit praesentium omnis.', 2, 6, '1983-10-02 12:54:55', '2012-06-25 18:07:34'),
(9, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 119, 'Design and UX', '1', 'Et vel commodi labore dolor eum tempore laboriosam. Dolores voluptatem omnis quia eligendi ipsa et optio. Doloremque autem sed eos ratione amet.', 1, 9, '1986-03-15 05:42:26', '1986-03-02 13:34:42'),
(10, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 88, 'Design and UX', '2', 'Non ut perspiciatis ipsa. Quo voluptatem et sed ab. Et ab minima consequatur in sint.', 4, 1, '1978-10-23 22:45:11', '1996-10-04 14:38:16'),
(11, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 147, 'Design and UX', '1', 'Non dolore excepturi sit. Aut vel officiis blanditiis quidem cumque.', 2, 8, '2018-04-20 07:00:32', '2010-05-20 00:10:08'),
(12, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 17, 'Programming', '1', 'Aut id aut dolores qui sunt in eveniet. Odit voluptatum pariatur necessitatibus rerum dolorem. Tempora quidem error sed eos ea sint. Nihil in reprehenderit consequuntur molestiae.', 1, 2, '1975-10-23 01:50:13', '1998-08-11 16:45:00'),
(13, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 112, 'Programming', '1', 'Quia reiciendis sit quisquam exercitationem quo quidem. Facere eum expedita consequatur. Aut asperiores aut illo unde consectetur. Eos saepe repudiandae suscipit laborum.', 3, 6, '1992-10-07 10:00:14', '1976-03-05 11:01:03'),
(14, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 42, 'Programming', '2', 'Optio quae voluptas qui sint unde. Dicta sint recusandae quam. Quas enim est ipsum natus.', 1, 3, '1994-10-01 16:30:46', '1988-12-14 16:14:15'),
(15, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 49, 'DEVOps', '2', 'Ut aut quasi quidem dolor impedit fugiat. Minima excepturi veniam et debitis. Commodi qui tenetur aut ut ut dolore. At non laboriosam officia aut. Repellat nostrum dolorem eum neque molestiae.', 4, 8, '1986-09-11 20:56:49', '2021-06-23 14:48:03'),
(16, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 39, 'DEVOps', '3', 'Optio alias non aut pariatur et illum tempora. Ratione delectus quisquam quam et. Omnis consectetur perspiciatis provident natus veritatis. Voluptatibus omnis cum et voluptatem eius dolor.', 5, 5, '1998-11-28 13:04:10', '2006-04-26 06:08:31'),
(17, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 40, 'Design and UX', '3', 'Assumenda eius aut reprehenderit. Nihil voluptatum possimus dignissimos doloribus iste sit doloremque. Et consequatur voluptatem explicabo ut ea quas. Quae soluta est non itaque similique.', 2, 3, '1979-11-09 04:20:56', '1973-10-16 05:07:31'),
(18, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 87, 'Design and UX', '1', 'Laudantium maiores sequi sunt nihil. Voluptatum ut architecto voluptate accusantium nisi laborum aliquid. Vel accusamus ullam in molestias fuga vero quasi libero.', 1, 3, '2016-11-20 23:03:23', '1994-02-04 16:32:41'),
(19, '2021-12-30 18:33:09', '2021-12-30 18:33:09', 109, 'Design and UX', '3', 'Omnis dignissimos nam voluptate vel et. Perspiciatis labore ducimus maiores iure id nemo.', 5, 3, '2000-01-11 09:49:50', '1978-03-05 03:50:39'),
(20, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 195, 'Design and UX', '3', 'Commodi iusto dolores tenetur unde voluptas nesciunt autem eaque. Et autem praesentium facilis ullam distinctio aperiam. Praesentium impedit quo odio velit repudiandae.', 4, 1, '1987-06-27 17:48:29', '2011-09-21 13:25:29'),
(21, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 40, 'DEVOps', '3', 'Eum optio eum facere. Esse minus ipsum illum sunt tempora. Id incidunt eaque error exercitationem quo dolor praesentium. Fuga qui eum et adipisci dolor atque id.', 6, 4, '1976-03-01 01:27:24', '2008-11-17 04:49:52'),
(22, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 170, 'Programming', '3', 'Sed facere magni ducimus dolor. Sequi ipsa quis nulla eaque harum laboriosam velit. Dolorem dolores quae accusamus. Sapiente a quas dolore maxime.', 8, 10, '1995-08-25 05:20:20', '2021-07-04 16:52:57'),
(23, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 118, 'DEVOps', '3', 'Et sed nobis eum voluptates. Soluta reprehenderit sed quia non itaque. Aut facere omnis est porro est quasi quae temporibus. Nobis molestiae saepe tempora quia et.', 5, 1, '1982-12-18 04:17:11', '1970-04-14 06:52:58'),
(24, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 153, 'Programming', '3', 'Deserunt ullam et sapiente voluptatem fugiat et. Et ut rerum tenetur non debitis officia sit.', 4, 5, '2005-12-04 02:19:23', '1986-01-10 02:34:59'),
(25, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 17, 'DEVOps', '1', 'Nobis nam officia officia ipsa enim veniam. Sit deserunt ratione consequuntur voluptatibus qui sit. Error autem vero vitae totam. Ex est reiciendis odit est.', 4, 4, '2013-01-03 19:31:50', '2019-05-24 16:30:11'),
(26, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 174, 'Programming', '2', 'Hic velit dignissimos id deserunt repellendus eius. Cum saepe id repudiandae aspernatur dolorem. Et reiciendis impedit sunt sint nihil deleniti veritatis. Aperiam omnis laborum alias voluptas.', 7, 4, '2014-02-17 06:24:31', '2005-09-30 09:09:48'),
(27, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 104, 'Design and UX', '3', 'Aut aut qui ea molestiae. Sit et modi aut sequi. Atque qui odio libero iure. Aut repellendus sit eos voluptate incidunt numquam.', 5, 10, '1985-06-21 16:47:43', '1980-05-01 12:07:10'),
(28, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 177, 'DEVOps', '2', 'Unde omnis labore deleniti corrupti. Voluptatem repellat et corrupti ipsum molestiae minus. Blanditiis nihil officia soluta eveniet voluptatem voluptas aut nihil.', 4, 9, '1977-07-14 17:02:35', '1987-03-02 06:55:36'),
(29, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 70, 'Design and UX', '2', 'Harum nulla quas culpa consectetur. Consequatur ad laboriosam deserunt illum quia aperiam quia. Beatae sit autem aut ab dolorem similique. Dolorum sit adipisci quod.', 7, 2, '1986-11-27 20:15:31', '1989-09-01 21:46:15'),
(30, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 128, 'DEVOps', '3', 'Dolore odit est non incidunt velit. Nihil officiis repellendus suscipit aut. Eius et quae sed ut eius.', 7, 2, '1973-08-20 14:19:59', '2015-07-15 00:09:55'),
(31, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 52, 'Design and UX', '3', 'Laborum dicta in nisi at. Ex omnis maxime eum et temporibus consectetur est. Et quia vitae eum repellendus sed itaque consectetur qui. Quis sed beatae repellendus quibusdam alias enim.', 6, 2, '2003-12-27 09:34:42', '2006-06-23 09:20:15'),
(32, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 118, 'DEVOps', '2', 'Delectus delectus quidem hic maiores qui. Possimus sunt mollitia et aut sit nihil. Eveniet veritatis reiciendis necessitatibus.', 3, 9, '2016-08-08 10:34:24', '1978-12-30 08:46:59'),
(33, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 3, 'DEVOps', '2', 'Quaerat hic sed et voluptas voluptate ullam. Consequatur voluptas ea tempora modi nihil. Minus consequatur vel quia atque molestiae rerum saepe.', 1, 7, '2012-02-01 21:50:00', '1975-02-05 21:42:24'),
(34, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 59, 'DEVOps', '1', 'Ipsam maiores in suscipit iure nihil adipisci nemo. Dolorum adipisci non mollitia sed. Velit molestiae eius cum possimus sequi.', 6, 9, '1972-10-19 20:03:03', '2018-09-02 21:08:52'),
(35, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 92, 'DEVOps', '1', 'Ea amet sit eveniet et praesentium quae. Et nulla rerum cupiditate repudiandae impedit. Consequatur et dolores dolorem nam.', 2, 1, '2002-05-27 14:10:42', '2018-05-31 19:30:34'),
(36, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 68, 'Design and UX', '3', 'Sunt vitae dolor numquam ex pariatur eos. Fuga sunt reiciendis porro omnis error hic et. Accusantium et et suscipit itaque earum. Voluptatem dolorem sint est aut.', 2, 10, '2003-08-21 07:36:15', '2006-04-14 01:46:55'),
(37, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 78, 'Design and UX', '1', 'Qui voluptatem dolorem saepe aut aspernatur maxime et sed. Magnam aut aut quisquam quo. Voluptas fugit aperiam minima et quae laborum.', 5, 5, '2009-03-03 20:41:39', '1971-01-27 18:07:23'),
(38, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 200, 'DEVOps', '2', 'In dolorem aspernatur incidunt est consequatur. Repudiandae aspernatur ex rerum sunt odit.', 4, 2, '2011-08-03 09:30:04', '1979-12-10 14:08:24'),
(39, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 20, 'Programming', '3', 'Quia odit consequatur eos quam qui et rem et. Rerum fugit maiores omnis deserunt tempora.', 6, 1, '1976-04-03 09:16:23', '2019-01-13 08:07:44'),
(40, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 82, 'DEVOps', '3', 'Magni nobis animi autem sint rem non. Ipsa earum non dolores facilis amet dignissimos. Rerum nam explicabo consequatur eos laudantium aut velit.', 1, 8, '1992-03-31 11:23:07', '2012-11-29 17:38:58'),
(41, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 184, 'Design and UX', '1', 'Quas est molestiae officia quibusdam rem natus. Reprehenderit perferendis perferendis ab minima qui sit. Sed itaque ut harum itaque non.', 5, 4, '1982-04-22 00:03:47', '1991-11-25 05:57:51'),
(42, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 78, 'Programming', '2', 'Impedit praesentium aut aut asperiores illo eos veritatis molestiae. Molestiae dolore vel inventore soluta eos. Debitis ut quis vero tempora nam voluptatem molestiae. Non adipisci aut esse quas quo.', 6, 3, '2018-11-06 08:01:02', '1992-12-02 05:59:09'),
(43, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 163, 'DEVOps', '2', 'Sint ad qui voluptates qui. Vel quaerat rerum nisi molestiae rem. Quas porro excepturi debitis sequi eveniet veritatis.', 5, 5, '1972-06-14 05:12:35', '1984-12-09 06:24:26'),
(44, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 153, 'Programming', '2', 'Ut autem quia repellendus eveniet. Aperiam amet dolorum omnis quas iure rerum tempora. Molestiae tempora et dolores est ut enim non. Fuga tenetur cum quaerat nihil nulla at voluptatem eum.', 6, 9, '2019-03-17 10:53:54', '1971-05-06 03:55:56'),
(45, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 23, 'DEVOps', '2', 'Consequatur ut ad nulla doloremque ad delectus voluptas doloribus. Rem vel magnam corrupti aut et consequuntur. Quas quo aut qui optio porro possimus impedit necessitatibus.', 6, 5, '1993-03-08 08:32:02', '1989-04-28 22:06:54'),
(46, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 64, 'DEVOps', '1', 'Numquam omnis molestiae est. Voluptates qui consequatur et fuga nostrum animi.', 5, 10, '2002-12-14 22:20:37', '1999-06-08 12:00:50'),
(47, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 178, 'DEVOps', '2', 'Veniam eveniet facere voluptatem aut aut. Sint aspernatur iste commodi quas quia. Non at commodi illo qui. Consequuntur dignissimos voluptatem voluptate dolores qui nam unde.', 4, 1, '2011-11-30 03:29:07', '1990-09-24 06:57:34'),
(48, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 67, 'Design and UX', '3', 'Distinctio sint quia accusamus aliquam amet. Necessitatibus et qui incidunt autem iste. Est enim et omnis blanditiis ipsam dolor quia. Ullam tempora sequi harum sapiente.', 2, 8, '2000-04-24 03:09:55', '2009-01-12 02:43:33'),
(49, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 29, 'Design and UX', '2', 'Eum eveniet at eos veniam. Culpa et ipsa sit optio cumque accusantium. Quia eveniet veniam aperiam rerum ut corrupti quia. Quo dolorum vero veritatis debitis.', 2, 1, '1977-12-03 14:27:17', '2002-12-24 01:43:12'),
(50, '2021-12-30 18:33:10', '2021-12-30 18:33:10', 164, 'DEVOps', '1', 'Animi vero qui architecto numquam voluptatem. Explicabo qui voluptatem ut reprehenderit mollitia rerum. Distinctio commodi eos blanditiis eveniet adipisci cupiditate distinctio exercitationem.', 2, 6, '1984-03-11 14:50:53', '1991-06-22 16:40:55');

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(147, '2014_10_12_000000_create_users_table', 1),
(148, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(149, '2021_12_23_183551_create_teachers_table', 1),
(150, '2021_12_29_121059_create_students_table', 1),
(151, '2021_12_29_141907_create_courses_table', 1),
(152, '2021_12_29_171411_create_plans_table', 1),
(153, '2021_12_29_201647_create_lessons_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `plans`
--

CREATE TABLE `plans` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `plans`
--

INSERT INTO `plans` (`id`, `name`, `discount`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Tâmara Esteves Faro Sobrinho', 70, 'Tenetur officia nihil illum ducimus.', '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(2, 'Dr. Willian Santacruz Jr.', 69, 'Eos blanditiis aut quo maxime hic qui consectetur cumque.', '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(3, 'Sr. Thiago Ramos', 7, 'Et reiciendis sunt mollitia ea est accusamus qui.', '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(4, 'Liz Queirós Neto', 22, 'Et consequuntur qui vel.', '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(5, 'Dr. Emiliano Nelson Zamana Filho', 16, 'Rerum voluptatem iusto aut id nemo ullam quia.', '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(6, 'Sr. Maximiano Lourenço D\'ávila', 30, 'Sapiente autem amet eos sed.', '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(7, 'Sra. Olívia Galindo Filho', 95, 'Et sed odio non eum ea est.', '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(8, 'Máximo da Cruz da Silva Jr.', 13, 'Blanditiis quasi ea aliquid alias cupiditate.', '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(9, 'Cauan Marés Sobrinho', 46, 'Perferendis exercitationem mollitia dolores.', '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(10, 'Thalissa Melinda Lira', 82, 'Voluptates est porro sed quo quisquam.', '2021-12-30 18:33:10', '2021-12-30 18:33:10');

-- --------------------------------------------------------

--
-- Estrutura para tabela `students`
--

CREATE TABLE `students` (
  `id` int UNSIGNED NOT NULL,
  `register` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `financial_officer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_course` int NOT NULL,
  `id_plan` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `students`
--

INSERT INTO `students` (`id`, `register`, `name`, `birth`, `financial_officer`, `cpf`, `id_course`, `id_plan`, `created_at`, `updated_at`) VALUES
(1, '42485131', 'Rogério Matos Bonilha Neto', '28-11-18', 'Administrativo', '489.938.626-56', 5, 2, '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(2, '62918145', 'Sra. Milena Branco', '26-08-15', 'Comercial', '305.118.185-48', 8, 4, '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(3, '68474966', 'Srta. Lúcia Franco', '18-12-00', 'Administrativo', '051.622.549-91', 6, 4, '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(4, '01798357', 'Sra. Adriana Queirós Quintana', '01-10-02', 'Auditoria', '277.486.651-09', 2, 2, '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(5, '85933354', 'Dr. Naiara Manuela Santos', '29-12-07', 'Auditoria', '947.784.974-06', 7, 3, '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(6, '36059904', 'Srta. Raissa Toledo Leal', '27-08-81', 'Auditoria', '579.789.746-69', 8, 1, '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(7, '32183313', 'Diego Salazar', '04-11-78', 'Auditoria', '093.852.850-50', 8, 5, '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(8, '87503852', 'Rodrigo Santana Cortês', '06-06-89', 'Comercial', '224.847.667-18', 3, 3, '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(9, '62915632', 'Walter Padrão Verdara Neto', '10-06-02', 'Auditoria', '027.980.653-13', 7, 5, '2021-12-30 18:33:10', '2021-12-30 18:33:10'),
(10, '15772039', 'Rafael Queirós', '17-01-78', 'Comunicação', '533.974.312-80', 3, 1, '2021-12-30 18:33:10', '2021-12-30 18:33:10');

-- --------------------------------------------------------

--
-- Estrutura para tabela `teachers`
--

CREATE TABLE `teachers` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `register` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `competence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schooling` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `register`, `competence`, `schooling`, `created_at`, `updated_at`) VALUES
(1, 'Mayara Camacho Sobrinho', '85140141', 'Pós-graduado', 'Repellat saepe vitae vero id voluptas vero.', '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(2, 'Sr. João Fonseca', '51007065', 'Mestre', 'Modi esse et ullam et explicabo rerum.', '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(3, 'André Solano Padilha Filho', '48729932', 'Mestre', 'Tempora rerum quos fugiat rerum.', '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(4, 'Josefina Eloah Padrão', '27757192', 'Aluno', 'Et illo et officia ea qui deleniti sunt aliquid.', '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(5, 'Sra. Eloá Luiza Bezerra', '19555867', 'Mestre', 'Sunt maxime deserunt accusamus et est id.', '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(6, 'Sra. Isabelly Janaina Serra', '57153902', 'Doutor', 'Voluptas ratione suscipit quia dolore omnis suscipit.', '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(7, 'Isaac Sérgio Gusmão Neto', '06509781', 'Mestre', 'Dolore sit quia eos itaque aliquam consequatur.', '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(8, 'Sergio Rezende Aguiar Filho', '13395841', 'Aluno', 'Libero nam id suscipit est corrupti.', '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(9, 'Emanuel Simão Marés', '55125673', 'Pós-graduado', 'Quis modi molestiae cupiditate quia nihil.', '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(10, 'Sra. Gisela Sepúlveda Esteves', '05660131', 'Pós-graduado', 'Id eaque praesentium doloribus quis.', '2021-12-30 18:33:09', '2021-12-30 18:33:09');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Srta. Stefany Michelle Colaço Jr.', 'galvao.joana@example.net', '2021-12-30 18:33:09', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'trgQzJefsT', '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(2, 'Lara Verdara Filho', 'milene.santiago@example.com', '2021-12-30 18:33:09', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zLr5TEyHOD', '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(3, 'Sra. Melina Rocha', 'theo41@example.org', '2021-12-30 18:33:09', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tNRgFBZW0p', '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(4, 'Dr. Lucas Cezar Abreu', 'correia.diego@example.org', '2021-12-30 18:33:09', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'O4nyaMzYVZ', '2021-12-30 18:33:09', '2021-12-30 18:33:09'),
(5, 'Sra. Tatiana Escobar Ramires', 'alessandro.davila@example.com', '2021-12-30 18:33:09', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oP2RDM91q4', '2021-12-30 18:33:09', '2021-12-30 18:33:09');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices de tabela `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `students`
--
ALTER TABLE `students`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
