-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Oca 2022, 21:16:45
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comment`
--

CREATE TABLE `comment` (
  `c_id` int(11) NOT NULL,
  `que_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `c_username` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `c_date` datetime NOT NULL DEFAULT current_timestamp(),
  `c_comment` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `comment`
--

INSERT INTO `comment` (`c_id`, `que_id`, `u_id`, `c_username`, `c_date`, `c_comment`) VALUES
(110, 97, 5, 'Emirhan', '2022-01-05 22:33:52', 'Kaç tane bip sesi geliyor? Ona göre bilgisayarın hangi parçasında sorun var öğrenmiş oluruz.'),
(111, 97, 8, 'emre', '2022-01-05 22:34:27', 'O bip sesininde bir anlamı var internetten araştırırsan nedenini bulabiir ve ona göre yol izleyebilirsin.'),
(112, 98, 8, 'emre', '2022-01-05 22:34:44', 'Maalesef bir bilgim yok ama daha çok teknoloji odaklı forum sitelerine baksan iyi olur.'),
(113, 98, 5, 'Emirhan', '2022-01-05 22:35:06', 'Bu konu hakkında sanayiye gidip ustalarla konuşsan çok iyi olur, youtube dan da yararlanabilirsin.'),
(114, 99, 5, 'Emirhan', '2022-01-05 22:35:20', 'Evde direnç bantları kullanmanı tavsiye ederim, iyi bir başlangıç olur daha sonra spor salonuna gidebilirsin .'),
(115, 101, 5, 'Emirhan', '2022-01-05 22:36:00', 'Açıkçası ben her ürünün kendi rengini daha çok beğeniyorum, örneğin saf ahşap rengi.'),
(116, 102, 8, 'emre', '2022-01-05 22:36:46', 'HDMI girişini dene'),
(117, 103, 8, 'emre', '2022-01-05 22:37:16', 'Ben irobotun 974 modelini aldım fiyatı biraz yüksek ama değdi o parayı verdiğime telefondan evde olmasam da kontrol edip çalıştırabiliyorum .'),
(118, 103, 5, 'Emirhan', '2022-01-05 22:37:42', 'Bende irobot un aynı modelini aldım . Tam bir fiyat performans ürünü.  '),
(119, 103, 5, 'Emirhan', '2022-01-05 22:38:02', 'Xioami nin sensörlü bir modeli var baya iyi kendimde kullanıyorum tavsiye ederim.   '),
(120, 105, 5, 'Emirhan', '2022-01-05 22:38:22', 'Evet,tavsiye ederim. Görüş kalitesini kesinlikle arttırıyor.'),
(121, 106, 5, 'Emirhan', '2022-01-05 22:38:37', 'Plates öneririm. '),
(122, 107, 8, 'emre', '2022-01-05 22:39:21', 'Evet.Özellikle yürüyüş, koşu gibi faaliyetlerde'),
(123, 109, 8, 'emre', '2022-01-05 22:39:34', 'Sağlıksız bir diyetse, evet. '),
(124, 109, 7, 'hulya', '2022-01-05 22:40:34', 'Hayır abartmadığın sürece zayıflatmaz'),
(125, 108, 10, 'yasemin', '2022-01-05 22:54:57', 'Ben açık renk taraftarıyım, heleki dar nbir alanda kullanılıcaksa açık renkler ortamı ferah gösterir.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `c_likes`
--

CREATE TABLE `c_likes` (
  `id` int(11) NOT NULL,
  `like_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `c_likes`
--

INSERT INTO `c_likes` (`id`, `like_date`, `user_id`, `q_id`, `c_id`, `type`) VALUES
(72, '2022-01-05 22:33:52', 0, 97, 110, 0),
(73, '2022-01-05 22:34:27', 0, 97, 111, 0),
(74, '2022-01-05 22:34:44', 0, 98, 112, 0),
(75, '2022-01-05 22:35:06', 0, 98, 113, 0),
(76, '2022-01-05 22:35:20', 0, 99, 114, 0),
(77, '2022-01-05 22:36:00', 0, 101, 115, 0),
(78, '2022-01-05 22:36:46', 0, 102, 116, 0),
(79, '2022-01-05 22:37:16', 0, 103, 117, 0),
(80, '2022-01-05 22:37:42', 0, 103, 118, 0),
(81, '2022-01-05 22:38:02', 0, 103, 119, 0),
(82, '2022-01-05 22:38:22', 0, 105, 120, 0),
(83, '2022-01-05 22:38:37', 0, 106, 121, 0),
(84, '2022-01-05 22:39:21', 0, 107, 122, 0),
(85, '2022-01-05 22:39:34', 0, 109, 123, 0),
(86, '2022-01-05 22:40:34', 0, 109, 124, 0),
(87, '2022-01-05 22:43:01', 7, 97, 110, 2),
(88, '2022-01-05 22:46:27', 8, 97, 110, 1),
(89, '2022-01-05 22:46:40', 8, 98, 113, 1),
(90, '2022-01-05 22:46:54', 8, 99, 114, 1),
(91, '2022-01-05 22:47:04', 8, 101, 115, 1),
(92, '2022-01-05 22:47:31', 8, 103, 118, 1),
(93, '2022-01-05 22:47:33', 8, 103, 119, 1),
(94, '2022-01-05 22:47:40', 8, 105, 120, 1),
(95, '2022-01-05 22:47:46', 8, 109, 124, 2),
(96, '2022-01-05 22:54:57', 0, 108, 125, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `like_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `likes`
--

INSERT INTO `likes` (`id`, `like_date`, `user_id`, `q_id`, `type`) VALUES
(403, '2022-01-05 22:26:52', 0, 97, 0),
(404, '2022-01-05 22:27:27', 0, 98, 0),
(405, '2022-01-05 22:28:16', 0, 99, 0),
(406, '2022-01-05 22:28:40', 0, 100, 0),
(407, '2022-01-05 22:28:53', 0, 101, 0),
(408, '2022-01-05 22:29:10', 0, 102, 0),
(409, '2022-01-05 22:30:02', 0, 103, 0),
(410, '2022-01-05 22:30:28', 0, 104, 0),
(411, '2022-01-05 22:30:49', 0, 105, 0),
(412, '2022-01-05 22:31:11', 0, 106, 0),
(413, '2022-01-05 22:32:02', 0, 107, 0),
(414, '2022-01-05 22:32:20', 0, 108, 0),
(415, '2022-01-05 22:32:34', 0, 109, 0),
(430, '2022-01-05 22:45:35', 8, 97, 1),
(431, '2022-01-05 22:45:38', 8, 98, 1),
(432, '2022-01-05 22:45:39', 8, 99, 1),
(433, '2022-01-05 22:45:42', 8, 100, 2),
(434, '2022-01-05 22:45:46', 8, 101, 1),
(435, '2022-01-05 22:45:50', 8, 102, 2),
(436, '2022-01-05 22:45:54', 8, 107, 1),
(437, '2022-01-05 22:45:57', 8, 109, 2),
(438, '2022-01-05 22:46:00', 8, 108, 1),
(439, '2022-01-05 22:46:04', 8, 106, 1),
(441, '2022-01-05 22:52:47', 0, 110, 0),
(442, '2022-01-05 22:52:52', 10, 108, 1),
(443, '2022-01-05 22:52:56', 10, 99, 2),
(444, '2022-01-05 22:53:16', 10, 109, 1),
(445, '2022-01-05 22:53:23', 10, 105, 1),
(446, '2022-01-05 22:53:31', 10, 103, 2),
(447, '2022-01-05 22:53:36', 10, 104, 1),
(448, '2022-01-05 22:53:51', 10, 102, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `questions`
--

CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL,
  `q_title` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `question` text COLLATE utf8_turkish_ci NOT NULL,
  `category` enum('Teknoloji','Ev/Yaşam','Spor','Sağlık') COLLATE utf8_turkish_ci NOT NULL,
  `d_date` datetime DEFAULT current_timestamp(),
  `q_username` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `questions`
--

INSERT INTO `questions` (`q_id`, `q_title`, `question`, `category`, `d_date`, `q_username`, `user_id`) VALUES
(97, 'Bilgisayar Kendiliğinden Kapanıyor', 'Bilgisayarım açıldıktan birkaç saniye sonra bip sesi çıkartıp kapanıyor, sizce sorun ne olabilir?', 'Teknoloji', '2022-01-05 22:26:52', 'hulya', 7),
(98, 'Özel Tasarım El yapımı e-moped', 'Kendi tasarladığım elektrikli bisiklet projemi hayata geçirmek istiyorum , daha öce yapmış olanlarınız varsa nasıl bir yol izlemem hakkında bilgi verebilir mi ?', 'Teknoloji', '2022-01-05 22:27:27', 'hulya', 7),
(99, 'Spora nasıl başlamalıyım ?', 'Spora başlamak istiyorum fakat korona yüzünden çok hamlanmış durumdayım nasıl bir yol izlemem gerek ?', 'Spor', '2022-01-05 22:28:16', 'hulya', 7),
(100, 'Laptop tavsiyesi', 'Üniversite için bir leptopa ihtiyacım var, yazılım programları ağırlıklı kullanıcam, almışkende sağlam uzun ömürlü birşey istiyorum tavsiyeleriniz neler ?', 'Teknoloji', '2022-01-05 22:28:40', 'hulya', 7),
(101, 'Dekorasyonda renk kullanmaktan hoşlanır mısınız?', 'Dekorasyonda renk kullanmaktan hoşlanır mısınız?', 'Teknoloji', '2022-01-05 22:28:53', 'hulya', 7),
(102, 'Ekrana görüntü gelmiyor', 'Yeni ekran kartı aldım daha inceden intel hd graphic kullanıyordum ekran kartını taktım fakat görüntü alamıyorum, anakartın vga girişinden görüntü geliyor fakat ekran kartına takınca gelmiyor nedendir acaba ?', 'Teknoloji', '2022-01-05 22:29:10', 'hulya', 7),
(103, 'Hangi Robot Süpürge Daha İyi? Marka Öneriniz Var mı?', 'Piyasada bir sürü robot süpürge var, bunlardan hangisi daha iyi bilemiyorum. Burada kullanan varsa hangi robot süpürge daha iyi söyleyebilir mi?', 'Teknoloji', '2022-01-05 22:30:02', 'emre', 8),
(104, 'Yeni ofisime dekorasyon fikirleri verebilir misiniz?', 'Yeni ofisime geçtim ancak dekore konusunda yardıma ihtiyacım var.', 'Ev/Yaşam', '2022-01-05 22:30:28', 'emre', 8),
(105, 'Daha önce kontak lens kullanmış olan var mı?', 'Daha önce lens takanlar var mı? Numaralı ya da numarasız? Ben numaralı olandan kullanmak istiyorum, önerir misiniz?', 'Ev/Yaşam', '2022-01-05 22:30:49', 'emre', 8),
(106, 'Evde nasıl spor yapabilirim?', 'Ben genel olarak zayıf sayılırım ama çok sağlıksız beslenmeden dolayı kilo aldım. Youtube kanalı uygulama vs. önerebilirsiniz. Tavsiyeler verirseniz çok sevinirim.', 'Spor', '2022-01-05 22:31:11', 'emre', 8),
(107, 'Akıllı saatler spor için motivasyon sağlıyor mu?', 'Akıllı saatler, çeşitli sporlar için veri sunuyor. Ne kadar yürüdüğümüz, ne kadar kalori yaktığımız vs. Peki sizce akıllı saatler spor için motivasyon sağlıyor mu, yani spor yapma noktasında kullanıcıyı heveslendiriyor mu?', 'Spor', '2022-01-05 22:32:02', 'Emirhan', 5),
(108, 'Koyu renkler mi, açık renkler mi?', 'Evin duvarlarında koyu renkler mi, açık renkler mi tercih edilmeli?', 'Ev/Yaşam', '2022-01-05 22:32:20', 'Emirhan', 5),
(109, 'Diyet', 'Diyet yapmak bağışıklık sistemini zayıflatır mı?', 'Sağlık', '2022-01-05 22:32:34', 'Emirhan', 5),
(110, 'Kilo alamıyorum !!!!', 'Bir türlü kilo alamıyorum , kilo almak için ne önerirsiniz  ilaç önerirmisiniz ?', 'Teknoloji', '2022-01-05 22:52:47', 'yasemin', 10);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `full_name` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `number` varchar(11) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `full_name`, `number`, `mail`) VALUES
(5, 'Emirhan', '58260cf7ebba2adf4806b03bf134bb43', 'Emirhan Acar', '052354', 'emrhn@hotmail.com'),
(7, 'hulya', '81dc9bdb52d04dc20036dbd8313ed055', 'Hülya Sali', '12351231', 'adpofjdsovjsd'),
(8, 'emre', 'c4ca4238a0b923820dcc509a6f75849b', 'emre ışık', '', 'emre@gmail.com'),
(10, 'yasemin', 'c4ca4238a0b923820dcc509a6f75849b', 'yasemin mengükan', '', 'yasemin@gmail.com');

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
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- Tablo için AUTO_INCREMENT değeri `c_likes`
--
ALTER TABLE `c_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- Tablo için AUTO_INCREMENT değeri `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=449;

--
-- Tablo için AUTO_INCREMENT değeri `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
