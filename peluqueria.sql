-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-05-26 19:43:51
-- 服务器版本： 10.4.16-MariaDB
-- PHP 版本： 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `peluqueria`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usuario` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `password`) VALUES
(2, 'admin', '123');

-- --------------------------------------------------------

--
-- 表的结构 `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `tiempo` varchar(255) NOT NULL,
  `texto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `blog`
--

INSERT INTO `blog` (`id`, `titulo`, `subtitulo`, `autor`, `tiempo`, `texto`) VALUES
(4, 'socorro', 'prisa', 'wei', '2021-05-26 19:16:34', 'Hola a todos');

-- --------------------------------------------------------

--
-- 表的结构 `peluquero`
--

CREATE TABLE `peluquero` (
  `id` int(11) NOT NULL,
  `dia` date NOT NULL,
  `tiempo` varchar(255) NOT NULL,
  `citado` int(255) NOT NULL,
  `peluquero` varchar(255) NOT NULL,
  `certificado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `peluquero`
--

INSERT INTO `peluquero` (`id`, `dia`, `tiempo`, `citado`, `peluquero`, `certificado`) VALUES
(7, '2020-12-16', '10:00-11:00', 1, 'Luna', '1033214726'),
(9, '2020-12-09', '11:00-12:00', 1, 'Luna', '1806666213'),
(12, '2020-12-08', '10:00-11:00', 1, 'Juan', '1341096048'),
(13, '2020-12-02', 'seleccionar', 1, 'Jose', '2080950804'),
(16, '2021-04-29', '10:00-11:00', 1, 'Jose', '32330031'),
(18, '2021-05-19', '10:00-11:00', 1, 'Juan', '242363061'),
(22, '2021-04-27', '11:00-12:00', 1, 'Luna', '408228517');

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `peluquero`
--
ALTER TABLE `peluquero`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `peluquero`
--
ALTER TABLE `peluquero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
