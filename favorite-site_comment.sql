-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-07-18 23:15:52
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `favorite-site_comment`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `send_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `send_at`) VALUES
(1, 'あ', '', 'あいうえお', '2024-05-20 17:18:08'),
(2, 'か', '', 'かきくけこ', '2024-05-20 17:19:15'),
(3, 'さ', '', 'さしすせそ', '2024-05-20 22:43:10'),
(4, 'た', '', 'たちつてと', '2024-05-21 11:55:11'),
(5, 'な', '', 'なにぬねの', '2024-05-21 13:26:39'),
(6, 'は', '', 'はひふへほ', '2024-05-21 13:35:15'),
(7, 'は', '', 'はひふへほ', '2024-05-21 13:35:50'),
(8, 'ま', '', 'まみむめも', '2024-05-21 13:39:23'),
(9, 'ま', '', 'まみむめも', '2024-05-21 13:40:34'),
(10, 'や', '', 'やゆよ', '2024-05-31 14:38:37'),
(11, 'や', '', 'やゆよ', '2024-05-31 15:51:49'),
(12, 'あ', '', 'あいうえお', '2024-05-31 16:24:29'),
(13, 'あ', '', 'あ', '2024-06-01 01:29:06');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
