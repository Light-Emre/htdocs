-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 28 Ara 2021, 21:44:09
-- Sunucu sürümü: 8.0.27
-- PHP Sürümü: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `vizedev`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comment`
--

CREATE TABLE `comment` (
  `c_id` int NOT NULL,
  `que_id` int NOT NULL,
  `u_id` int NOT NULL,
  `c_username` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `c_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `c_comment` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `comment`
--

INSERT INTO `comment` (`c_id`, `que_id`, `u_id`, `c_username`, `c_date`, `c_comment`) VALUES
(91, 89, 8, 'emre', '2021-12-28 20:31:12', 'Açıkçası ben her ürünün kendi rengini daha çok beğeniyorum, örneğin saf ahşap rengi.'),
(92, 45, 7, 'hulya', '2021-12-28 20:31:32', 'Kaç tane bip sesi geliyor? Ona göre bilgisayarın hangi parçasında sorun var öğrenmiş oluruz.'),
(93, 45, 7, 'hulya', '2021-12-28 20:31:34', 'Kaç tane bip sesi geliyor? Ona göre bilgisayarın hangi parçasında sorun var öğrenmiş oluruz.'),
(94, 44, 5, 'Emirhan', '2021-12-28 20:31:44', 'Maalesef bir bilgim yok ama daha çok teknoloji odaklı forum sitelerine baksan iyi olur.'),
(95, 45, 8, 'emre', '2021-12-28 20:33:04', 'O bip sesininde bir anlamı var internetten araştırırsan nedenini bulabiir ve ona göre yol izleyebilirsin.'),
(96, 46, 5, 'Emirhan', '2021-12-28 20:33:24', 'Evde direnç bantları kullanmanı tavsiye ederim, iyi bir başlangıç olur daha sonra spor salonuna gidebilirsin'),
(97, 93, 7, 'hulya', '2021-12-28 20:33:27', 'Evet.Özellikle yürüyüş, koşu gibi faaliyetlerde'),
(98, 90, 7, 'hulya', '2021-12-28 20:34:13', 'Evet,tavsiye ederim. Görüş kalitesini kesinlikle arttırıyor.'),
(99, 86, 7, 'hulya', '2021-12-28 20:35:55', 'Ben irobotun 974 modelini aldım fiyatı biraz yüksek ama değdi o parayı verdiğime telefondan evde olmasam da kontrol edip çalıştırabiliyorum .'),
(100, 44, 8, 'emre', '2021-12-28 20:36:15', 'Bu konu hakkında sanayiye gidip ustalarla konuşsan çok iyi olur, youtube dan da yararlanabilirsin.'),
(101, 48, 5, 'Emirhan', '2021-12-28 20:37:06', 'Hp den uzak dur eğer uzun ömürlü istiyorsan. Asus marka laptoplar uzun ömürlü olur genelde veya MSI olabilir. Model de soracaksan asusun x571 modeli iyidir'),
(102, 92, 7, 'hulya', '2021-12-28 20:38:33', 'Plates öneririm.'),
(103, 86, 5, 'Emirhan', '2021-12-28 20:38:49', 'Bende irobot un aynı modelini aldım . Tam bir fiyat performans ürünü.'),
(104, 86, 8, 'emre', '2021-12-28 20:38:59', 'Xioami nin  sensörlü bir modeli var baya iyi kendimde kullanıyorum tavsiye ederim.'),
(105, 49, 7, 'hulya', '2021-12-28 20:40:13', 'HDMI girişini dene'),
(106, 91, 5, 'Emirhan', '2021-12-28 20:40:38', 'Hayır abartmadığın sürece zayıflatmaz'),
(107, 91, 7, 'hulya', '2021-12-28 20:40:56', 'Sağlıksız bir diyetse, evet.'),
(108, 46, 8, 'emre', '2021-12-28 20:41:18', 'Çok teşekkürler hemen alıp başlıyıcam üstadım.'),
(109, 48, 8, 'emre', '2021-12-28 20:42:44', 'Siz yetkili bir abiye benziyorsunuz tavsiyenizi aldım eyv.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `c_likes`
--

CREATE TABLE `c_likes` (
  `id` int NOT NULL,
  `like_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL,
  `q_id` int NOT NULL,
  `c_id` int NOT NULL,
  `type` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `c_likes`
--

INSERT INTO `c_likes` (`id`, `like_date`, `user_id`, `q_id`, `c_id`, `type`) VALUES
(15, '2021-12-27 17:15:28', 5, 63, 84, 1),
(16, '2021-12-27 17:42:31', 0, 64, 88, 0),
(17, '2021-12-27 17:42:35', 0, 64, 89, 0),
(18, '2021-12-27 17:42:38', 5, 64, 89, 1),
(19, '2021-12-28 17:27:20', 0, 80, 90, 0),
(20, '2021-12-28 20:31:12', 0, 89, 91, 0),
(21, '2021-12-28 20:31:33', 0, 45, 92, 0),
(22, '2021-12-28 20:31:34', 0, 45, 93, 0),
(23, '2021-12-28 20:31:44', 0, 44, 94, 0),
(24, '2021-12-28 20:32:02', 8, 45, 92, 1),
(25, '2021-12-28 20:32:11', 8, 45, 93, 2),
(26, '2021-12-28 20:33:05', 0, 45, 95, 0),
(27, '2021-12-28 20:33:24', 0, 46, 96, 0),
(28, '2021-12-28 20:33:27', 0, 93, 97, 0),
(29, '2021-12-28 20:33:34', 7, 93, 97, 1),
(30, '2021-12-28 20:34:03', 5, 45, 93, 1),
(31, '2021-12-28 20:34:14', 0, 90, 98, 0),
(32, '2021-12-28 20:34:31', 5, 45, 92, 1),
(33, '2021-12-28 20:35:56', 0, 86, 99, 0),
(34, '2021-12-28 20:36:05', 7, 86, 99, 1),
(35, '2021-12-28 20:36:16', 0, 44, 100, 0),
(36, '2021-12-28 20:37:06', 0, 48, 101, 0),
(37, '2021-12-28 20:37:12', 5, 48, 101, 1),
(38, '2021-12-28 20:37:58', 5, 86, 99, 1),
(39, '2021-12-28 20:38:34', 0, 92, 102, 0),
(40, '2021-12-28 20:38:49', 7, 92, 102, 1),
(41, '2021-12-28 20:38:49', 0, 86, 103, 0),
(42, '2021-12-28 20:38:59', 0, 86, 104, 0),
(43, '2021-12-28 20:39:15', 8, 86, 103, 1),
(44, '2021-12-28 20:40:13', 0, 49, 105, 0),
(45, '2021-12-28 20:40:38', 0, 91, 106, 0),
(46, '2021-12-28 20:40:49', 8, 46, 96, 1),
(47, '2021-12-28 20:40:56', 0, 91, 107, 0),
(48, '2021-12-28 20:41:12', 7, 91, 106, 2),
(49, '2021-12-28 20:41:19', 0, 46, 108, 0),
(50, '2021-12-28 20:41:21', 7, 91, 107, 1),
(51, '2021-12-28 20:42:45', 0, 48, 109, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `likes`
--

CREATE TABLE `likes` (
  `id` int NOT NULL,
  `like_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL,
  `q_id` int NOT NULL,
  `type` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `likes`
--

INSERT INTO `likes` (`id`, `like_date`, `user_id`, `q_id`, `type`) VALUES
(224, '2021-12-26 00:50:45', 0, 39, 0),
(225, '2021-12-26 00:51:08', 0, 40, 0),
(226, '2021-12-26 00:51:16', 0, 41, 0),
(227, '2021-12-26 00:51:26', 0, 42, 0),
(236, '2021-12-26 00:56:17', 5, 40, 1),
(239, '2021-12-26 00:56:46', 5, 39, 2),
(240, '2021-12-26 00:56:58', 7, 39, 2),
(241, '2021-12-26 14:35:48', 0, 43, 0),
(242, '2021-12-26 14:42:12', 0, 44, 0),
(243, '2021-12-26 18:44:20', 0, 45, 0),
(244, '2021-12-26 18:46:36', 0, 46, 0),
(245, '2021-12-26 18:54:27', 0, 47, 0),
(246, '2021-12-26 19:07:28', 0, 48, 0),
(247, '2021-12-26 19:09:04', 0, 49, 0),
(248, '2021-12-26 19:09:14', 0, 50, 0),
(249, '2021-12-26 19:09:57', 0, 51, 0),
(250, '2021-12-26 19:13:02', 0, 52, 0),
(251, '2021-12-26 19:13:23', 0, 53, 0),
(255, '2021-12-27 14:15:35', 0, 40, 0),
(257, '2021-12-27 14:37:55', 0, 41, 0),
(258, '2021-12-27 16:11:03', 5, 40, 1),
(259, '2021-12-27 13:04:43', 0, 54, 0),
(260, '2021-12-27 16:25:50', 0, 42, 0),
(261, '2021-12-27 16:26:09', 0, 43, 0),
(273, '2021-12-27 17:10:45', 8, 41, 1),
(278, '2021-12-28 15:30:57', 0, 44, 0),
(279, '2021-12-28 15:33:59', 0, 45, 0),
(280, '2021-12-28 15:35:47', 0, 46, 0),
(281, '2021-12-28 15:40:14', 0, 47, 0),
(282, '2021-12-28 15:43:22', 0, 48, 0),
(283, '2021-12-28 15:45:59', 0, 49, 0),
(284, '2021-12-28 15:47:03', 0, 50, 0),
(285, '2021-12-28 15:52:58', 0, 51, 0),
(286, '2021-12-28 15:56:06', 0, 52, 0),
(287, '2021-12-28 16:00:42', 0, 53, 0),
(288, '2021-12-28 16:01:20', 0, 54, 0),
(297, '2021-12-27 14:39:01', 0, 55, 0),
(298, '2021-12-27 14:39:07', 0, 56, 0),
(299, '2021-12-27 14:39:12', 0, 57, 0),
(300, '2021-12-27 14:39:21', 0, 58, 0),
(301, '2021-12-27 14:39:29', 0, 59, 0),
(302, '2021-12-27 14:39:38', 0, 60, 0),
(303, '2021-12-27 16:10:32', 5, 58, 2),
(309, '2021-12-27 16:20:58', 5, 60, 1),
(310, '2021-12-27 16:36:44', 0, 61, 0),
(320, '2021-12-27 16:59:15', 0, 62, 0),
(325, '2021-12-27 17:04:52', 0, 63, 0),
(331, '2021-12-27 17:25:18', 0, 64, 0),
(334, '2021-12-27 17:43:14', 5, 64, 1),
(335, '2021-12-27 18:57:52', 0, 65, 0),
(340, '2021-12-27 20:12:20', 0, 66, 0),
(341, '2021-12-27 20:27:06', 0, 67, 0),
(342, '2021-12-27 20:27:17', 0, 68, 0),
(343, '2021-12-28 02:25:02', 7, 68, 1),
(350, '2021-12-28 14:24:42', 5, 68, 1),
(352, '2021-12-28 15:50:24', 0, 69, 0),
(353, '2021-12-28 15:54:37', 0, 70, 0),
(354, '2021-12-28 15:55:59', 0, 71, 0),
(355, '2021-12-28 15:57:26', 0, 72, 0),
(356, '2021-12-28 15:57:43', 0, 73, 0),
(357, '2021-12-28 15:58:36', 0, 74, 0),
(358, '2021-12-28 15:59:48', 0, 75, 0),
(359, '2021-12-28 16:00:46', 0, 76, 0),
(360, '2021-12-28 16:01:16', 0, 77, 0),
(361, '2021-12-28 16:02:52', 0, 78, 0),
(362, '2021-12-28 16:56:02', 0, 79, 0),
(363, '2021-12-28 17:26:39', 0, 80, 0),
(364, '2021-12-28 18:16:13', 7, 44, 1),
(365, '2021-12-28 18:16:15', 7, 45, 2),
(369, '2021-12-28 18:16:46', 5, 49, 2),
(370, '2021-12-28 18:16:52', 5, 53, 1),
(371, '2021-12-28 19:40:52', 0, 81, 0),
(372, '2021-12-28 19:49:01', 0, 82, 0),
(373, '2021-12-28 19:56:27', 0, 86, 0),
(374, '2021-12-28 20:02:54', 0, 87, 0),
(375, '2021-12-28 20:04:47', 0, 88, 0),
(376, '2021-12-28 20:09:14', 0, 89, 0),
(377, '2021-12-28 20:20:54', 0, 90, 0),
(378, '2021-12-28 20:24:01', 0, 91, 0),
(379, '2021-12-28 20:24:09', 5, 90, 1),
(381, '2021-12-28 20:24:16', 5, 48, 2),
(382, '2021-12-28 20:27:56', 0, 92, 0),
(383, '2021-12-28 20:30:02', 0, 93, 0),
(384, '2021-12-28 20:30:08', 5, 93, 1),
(386, '2021-12-28 20:30:27', 5, 87, 1),
(388, '2021-12-28 20:33:52', 0, 94, 0),
(389, '2021-12-28 20:31:18', 8, 89, 1),
(390, '2021-12-28 20:33:22', 8, 45, 1),
(391, '2021-12-28 20:34:55', 5, 45, 1),
(392, '2021-12-28 20:34:56', 8, 44, 2),
(393, '2021-12-28 20:36:10', 7, 86, 2),
(394, '2021-12-28 20:38:52', 7, 92, 1),
(395, '2021-12-28 20:40:03', 8, 86, 1),
(396, '2021-12-28 20:41:07', 5, 91, 2),
(397, '2021-12-28 20:41:44', 8, 46, 1),
(398, '2021-12-28 20:42:56', 8, 48, 1),
(399, '2021-12-28 20:43:21', 8, 94, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `questions`
--

CREATE TABLE `questions` (
  `q_id` int NOT NULL,
  `q_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `question` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `category` enum('Teknoloji','Ev/Yaşam','Spor','Sağlık') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `d_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `q_username` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `questions`
--

INSERT INTO `questions` (`q_id`, `q_title`, `question`, `category`, `d_date`, `q_username`, `user_id`) VALUES
(44, 'Özel Tasarım El yapımı e-moped', 'Kendi tasarladığım elektrikli bisiklet projemi hayata geçirmek istiyorum , daha öce yapmış olanlarınız varsa nasıl bir yol izlemem hakkında bilgi verebilir mi ?', 'Teknoloji', '2021-12-28 15:30:57', 'hulya', 8),
(45, 'Bilgisayar Kendiliğinden Kapanıyor', 'Bilgisayarım açıldıktan birkaç saniye sonra bip sesi çıkartıp kapanıyor, sizce sorun ne olabilir?', 'Teknoloji', '2021-12-28 15:33:59', 'Emirhan', 8),
(46, 'Spora nasıl başlamalıyım ?', 'Spora başlamak istiyorum fakat korona yüzünden  çok hamlanmış durumdayım nasıl  bir yol izlemem gerek  ?', 'Spor', '2021-12-28 15:35:47', 'emre', 8),
(48, 'Laptop tavsiyesi', 'Üniversite için bir leptopa ihtiyacım var, yazılım programları ağırlıklı kullanıcam, almışkende sağlam uzun ömürlü birşey istiyorum tavsiyeleriniz neler ?', 'Teknoloji', '2021-12-28 15:43:22', 'emre', 8),
(49, 'Ekrana görüntü gelmiyor', 'Yeni ekran kartı aldım daha inceden intel hd graphic kullanıyordum ekran kartını taktım fakat görüntü alamıyorum, anakartın vga girişinden görüntü geliyor fakat ekran kartına takınca gelmiyor nedendir acaba ?', 'Teknoloji', '2021-12-28 15:45:59', 'emre', 8),
(86, 'Hangi Robot Süpürge Daha İyi? Marka Öneriniz Var mı?', 'Piyasada bir sürü robot süpürge var, bunlardan hangisi daha iyi bilemiyorum. Burada kullanan varsa hangi robot süpürge daha iyi söyleyebilir mi?', 'Ev/Yaşam', '2021-12-28 19:56:27', 'Emirhan', 5),
(87, 'Yeni ofisime dekorasyon fikirleri verebilir misiniz?', 'Yeni ofisime geçtim ancak dekore konusunda yardıma ihtiyacım var.\r\n', 'Ev/Yaşam', '2021-12-28 20:02:54', 'hulya', 7),
(89, 'Dekorasyonda renk kullanmaktan hoşlanır mısınız?', 'Dekorasyonda renk kullanmaktan hoşlanır mısınız?', 'Ev/Yaşam', '2021-12-28 20:09:14', 'hulya', 7),
(90, 'Daha önce kontak lens kullanmış olan var mı?', 'Daha önce lens takanlar var mı? Numaralı ya da numarasız? Ben numaralı olandan kullanmak istiyorum, önerir misiniz?', 'Sağlık', '2021-12-28 20:20:54', 'hulya', 7),
(91, 'Diyet', 'Diyet yapmak bağışıklık sistemini zayıflatır mı?', 'Sağlık', '2021-12-28 20:24:01', 'Emirhan', 5),
(92, 'Evde nasıl spor yapabilirim?', ' Ben genel olarak zayıf sayılırım ama çok sağlıksız beslenmeden dolayı kilo aldım. Youtube kanalı uygulama vs. önerebilirsiniz.  Tavsiyeler verirseniz çok sevinirim.', 'Spor', '2021-12-28 20:27:56', 'Emirhan', 5),
(93, 'Akıllı saatler spor için motivasyon sağlıyor mu?', 'Akıllı saatler, çeşitli sporlar için veri sunuyor. Ne kadar yürüdüğümüz, ne kadar kalori yaktığımız vs. Peki sizce akıllı saatler spor için motivasyon sağlıyor mu, yani spor yapma noktasında kullanıcıyı heveslendiriyor mu?\r\n', 'Spor', '2021-12-28 20:30:02', 'Emirhan', 5),
(94, 'Koyu renkler mi, açık renkler mi?', 'Evin duvarlarında koyu renkler mi, açık renkler mi tercih edilmeli?', 'Ev/Yaşam', '2021-12-28 20:33:52', 'Emirhan', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `full_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `number` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `mail` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `full_name`, `number`, `mail`) VALUES
(5, 'Emirhan', '58260cf7ebba2adf4806b03bf134bb43', 'Emirhan Acar', '052354', 'emrhn@hotmail.com'),
(7, 'hulya', '81dc9bdb52d04dc20036dbd8313ed055', 'Hülya Sali', '12351231', 'adpofjdsovjsd'),
(8, 'emre', 'c4ca4238a0b923820dcc509a6f75849b', 'emre ışık', '', 'emre@gmail.com');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`c_id`);

--
-- Tablo için indeksler `c_likes`
--
ALTER TABLE `c_likes`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `comment`
--
ALTER TABLE `comment`
  MODIFY `c_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- Tablo için AUTO_INCREMENT değeri `c_likes`
--
ALTER TABLE `c_likes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Tablo için AUTO_INCREMENT değeri `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400;

--
-- Tablo için AUTO_INCREMENT değeri `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
