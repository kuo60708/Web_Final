-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-03-02 16:39:44
-- 伺服器版本： 10.4.27-MariaDB
-- PHP 版本： 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `j_asset`
--

-- --------------------------------------------------------

--
-- 資料表結構 `asset`
--

CREATE TABLE `asset` (
  `a_id` int(11) NOT NULL COMMENT '遊戲/素材編號',
  `a_name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '遊戲/素材名稱',
  `a_platform` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '平台',
  `a_filepic_name` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '遊戲圖片檔名',
  `a_val` int(5) NOT NULL COMMENT '推薦星星',
  `a_des` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '遊戲/素材描述',
  `a_price` int(5) DEFAULT NULL COMMENT '價格'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `asset`
--

INSERT INTO `asset` (`a_id`, `a_name`, `a_platform`, `a_filepic_name`, `a_val`, `a_des`, `a_price`) VALUES
(1, 'HorrorVale', 'PC', 'as_1.PNG', 3, 'Welcome to HorrorVale, a world full of monsters, ghouls, and all sorts of fiendish undead.', 100),
(2, 'Manacircle', 'PC', 'as_2.PNG', 1, 'Welcome to Manacircle. This game is a combat adventure game about exploring the deep unknown and solving the problem in a way.', 120),
(3, 'Nanotale', 'PC', 'as_3.PNG', 4, 'Typing Chronicles is an atmospheric typing adventure RPG set in a colorful vibrant world.', 150),
(4, 'Epistory', 'PC', 'as_4.PNG', 5, 'Epistory is an atmospheric adventure typing game that tells the story of a writer lacking inspiration who asks her muse to help write her latest book.', 170),
(5, 'Freeborn', 'PC', 'as_5.PNG', 0, 'Freeborn is a visual novel adventure about messy old friendships, card battles, and psychological chaos.', 199),
(6, 'Time to Morp', 'PC', 'as_6.PNG', 0, 'Time To Morp is a game about weird and quirky creatures, building bases, exploring worlds, automation, research and much more. But most importantly - friendship!', 200),
(7, 'Mayhem in Single Valley: Prologue', 'PC', 'as_7.PNG', 0, 'Mayhem in Single Valley (MSV) is a thoughtful top-down action adventure. Its focus on family and everyday struggles mixed with its combat and puzzles provides an action-packed but emotional gameplay experience.', 250),
(8, 'Calico', 'PC', 'as_8.PNG', 0, 'Calico is meant to make you feel all warm and fuzzy inside. The gameplay reflects that with a laid back, low stress creative environment to explore and play in.', 400),
(9, 'Nightkeep - Indie RPG', 'PC', 'as_9.PNG', 0, 'Nightkeep is a fantasy action RPG platformer influenced by many PS1 JRPG games set in a fictional medieval fantasy world, accompanied by an original story.', 500),
(10, 'Merchant of the Skies', 'PC', 'as_10.PNG', 0, 'Merchant of the skies is an experimental game: it does not have a distinct genre, but tries to capture the feeling of traveling the world and establishing your own company.', 1000);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`a_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `asset`
--
ALTER TABLE `asset`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '遊戲/素材編號', AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
