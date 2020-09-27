-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Haz 2020, 18:31:35
-- Sunucu sürümü: 10.4.8-MariaDB
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kanbagisibys`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `talepler`
--

CREATE TABLE `talepler` (
  `talepid` int(11) NOT NULL,
  `talepadsoyad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `talepcinsiyet` varchar(6) COLLATE utf8_turkish_ci NOT NULL,
  `taleptelefon` varchar(12) COLLATE utf8_turkish_ci NOT NULL,
  `talepkonum` text COLLATE utf8_turkish_ci NOT NULL,
  `talepkangrubu` varchar(5) COLLATE utf8_turkish_ci NOT NULL,
  `taleptarih` datetime NOT NULL DEFAULT current_timestamp(),
  `talepyazar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `talepler`
--

INSERT INTO `talepler` (`talepid`, `talepadsoyad`, `talepcinsiyet`, `taleptelefon`, `talepkonum`, `talepkangrubu`, `taleptarih`, `talepyazar`) VALUES
(11, 'elif öztürk', 'kadın', '05555555555', 'trabzon farabi hast', 'O Rh+', '2020-05-02 17:33:17', 7),
(12, 'samet al', 'erkek', '05555555555', 'trabzon vakfıkebir devlet hast.', 'A Rh-', '2020-05-02 17:33:58', 6),
(15, 'mert kısa', 'erkek', '05555555555', 'trabzon imperial hast.', 'A Rh-', '2020-05-03 14:52:36', 1),
(16, 'mert kısa', 'erkek', '05555555555', 'trabzon fatih devlet hast.', 'B Rh-', '2020-05-03 15:03:38', 1),
(18, 'mert kısa', 'erkek', '05555555555', 'trabzon farabi hast', 'B Rh-', '2020-05-03 15:11:38', 1),
(19, 'metehan tuncer', 'erkek', '05555555555', 'Trabzon kaşüstü devlet hast. ', 'B Rh-', '2020-05-03 15:19:12', 2),
(20, 'metehan tuncer', 'erkek', '05555555555', 'trabzon farabi hast', 'O Rh-', '2020-05-03 15:20:29', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `uyeid` int(11) NOT NULL,
  `uyead` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `uyesoyad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `uyemail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `uyesifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `uyetarih` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uyeid`, `uyead`, `uyesoyad`, `uyemail`, `uyesifre`, `uyetarih`) VALUES
(1, 'mert', 'kısa', 'mertkisa@yaani.com', 'mert12345', '2020-04-21'),
(2, 'metehan', 'tuncer', 'metehantuncer@mail.com', 'mete12345', '2020-04-22'),
(4, 'ali', 'yılmaz', 'aliyilmaz@mail.com', 'ali12345', '2020-04-24'),
(6, 'samet', 'al', 'sametal@mail.com', 'samet12345', '2020-05-01'),
(7, 'elif', 'karadeniz', 'elifkaradeniz@mail.com', 'elif12345', '2020-05-02'),
(8, 'ahmet', 'güneş', 'ahmetgunes@mail.com', 'ahmet12345', '2020-05-03'),
(9, 'ozansu', 'balta', 'ozan@mail.com', 'ozan12345', '2020-05-27');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `talepler`
--
ALTER TABLE `talepler`
  ADD PRIMARY KEY (`talepid`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`uyeid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `talepler`
--
ALTER TABLE `talepler`
  MODIFY `talepid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `uyeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
