-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 14, 2020 lúc 06:15 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `sex` int(1) NOT NULL,
  `address` text NOT NULL,
  `phone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `password`, `email`, `sex`, `address`, `phone`) VALUES
(1, 'adminn', 'lou', 'bin', 'e10adc3949ba59abbe56e057f20f883e', '', 0, '', 0),
(2, 'adminnn', 'lou', 'bin', 'e10adc3949ba59abbe56e057f20f883e', '', 0, '', 0),
(3, 'loubin', 'lou', 'bin', 'e10adc3949ba59abbe56e057f20f883e', '', 0, '', 0),
(4, 'admintest', 'lou', 'bin', 'e10adc3949ba59abbe56e057f20f883e', '', 0, '', 0),
(5, 'adminn11', 'lou', 'bin', 'e10adc3949ba59abbe56e057f20f883e', '', 0, '', 0),
(6, 'username', 'user', 'name', 'e10adc3949ba59abbe56e057f20f883e', '', 0, '', 0),
(7, 'longlienha', 'long', 'huu', 'e10adc3949ba59abbe56e057f20f883e', 'longlienha20@gmail.com', 0, '', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
