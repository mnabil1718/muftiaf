-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 08:55 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mufti`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_06_04_092554_create_news_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, '\r\nBerita Terbaru Virus Corona (Covid-19), Rabu, 20 Mei 2020 : Jumlah Pasien Positif Terus Bertambah', '<p class=\"lead text-justify\" style=\"margin-top: 3rem !important;\">\r\n            Jubir (Juru Bicara) Pemerintah Penanganan Covid-19 Achmad Yurianto menyampaikan berita terbaru mengenai pasien positif Virus Corona. Dan hasilnya, pasien Covid-19 di Indonesia terus bertambah dan menghawatirkan.\r\n            <br>\r\n            <br>\r\n            Pada hari ini, Rabu 20 Mei 2020, sebanyak 693 orang dinyatakan positif terkena Covid-19. Sedangkan untuk jumlah keseluruhan mancanegara lebih dari 4 juta orang di 216 negara, terpapar Covid-19 ini. Disadur dari WHO (covid19.go.id).\r\n            <br>\r\n            <br>\r\n            “Sehingga totalnya menjadi 19.189 orang,” ujar Yurianto melalui konferensi pers daring di Graha BNPB Jakarta tepat hari ini. Dan juga berdampak pada penurunan angka kejahatan, menurut Kombes Pol. Asep Adi Saputra selaku Humas BNPB (bnpb.go.id).\r\n            <br>\r\n            <br>\r\n            Total secara keseluruhan pasien sembuh dan negatif Covid-19 saat ini adalah 4.575 orang. Dan, pasien yang dirawat sebanyak 13.372 orang. (kompas.com).\r\n            <br>\r\n            <br>\r\n            Sebelumnya, Achmad Yurianto memaparkan ada penambahan jumlah pasien sembuh sebanyak 143 orang, sejak kemarin. Jadi, total pasien yang sembuh sebanyak 4.467 orang.\r\n            <br>\r\n            <br>\r\n            Yuri menambahkan, jumlah pasien positif berjumlah 486 orang, dan dari total sebanyak lebih dari 693 kasus dari berbagai pelosok negeri.\r\n        </p>\r\n        <span><em>Sumber : Liputan6.com</em></span>\r\n        <br>\r\n        <span><em>Dipublikasikan oleh : Rita Ayuningtyas (Reporter News Liputan6.com)</em></span>\r\n        <br>\r\n        <span><em>Editor : Ahmad Mufti F.R, Nabil M</em></span>', '2020-06-04 12:05:46', '2020-06-04 12:05:46'),
(2, 'Pemanfaatan Sinar Ultraviolet untuk Membasmi Virus Corona pada Kereta Bawah Tanah di New York', '<p class=\"lead text-justify\" style=\"margin-top: 3rem !important;\">\r\n            WASHINGTON DC, KOMPAS.com – Para pejabat di Kota New York, Amerika Serikat melakukan program pensterilisasi mobil dan kereta bawah tanah sebagai percontohan menggunakan sinar ultraviolet (UV) pada Selasa, 19 Mei 2020 kemarin (ABC News).\r\n            <br>\r\n            <br>\r\n            “Sepengetahuan kami, ini merupakan percontohan pertama yang dilakukan”, kata Patrick Foye selaku Kepala CEO Otoritas Transportasi Metropolitan (MTA) pada konferensi pers.\r\n            <br>\r\n            <br>\r\n            Kepada media, Foye menjelaskan bahwa teknologi UV bekerja dengan efektif dalam mensterilkan ruangan-ruangan di rumah sakit.\r\n            <br>\r\n            <br>\r\n            Menurutnya, ia tak ingin menyesatkan siapa pun tentang fungsi dari sinar UV. Namun, ia juga menjelaskan bahwa itu (UV) merupakan teknologi baru yang menjanjikan.\r\n            <br>\r\n            <br>\r\n            Fungsi dari sinar ultraviolet sendiri dapat membunuh kuman dalam bentuk radiasi elektromagnetik.\r\n            <br>\r\n            <br>\r\n            Senada dengan yang disampaikan oleh David Brenner sebagai direktur Pusat Penelitian Radiologi di Universitas Columbia, bahwa sinar UV sangat ampuh dalam membunuh virus dan bakteri. Berdasarkan penelitian lebih dari 100 tahun.\r\n            <br>\r\n            <br>\r\n            Brenner menuturkan bahwa para ilmuwan yang bekerja di laboratorium, yang berlangsung di Columbia. Telah menemukan sampel SARS CoV-2 dan virus Covid-19 pada sinar UV untuk mengukur efektifitasnya dalam membunuh virus. Dan hasilnya, tepat seperti sebelumnya, bahwa sinar UV sangat efektif untuk membunuh virus itu.\r\n            <br>\r\n            <br>\r\n            Gubernur New York, Andrew Cuomo telah mengumumkan penutupan sistem kereta bawah tanah di New York. Cuomo berusaha mensterilkan kereta bawah tanah dengan mengirimkan pasukan disinfektan kecil setiap malam untuk polisi, pekerja sosial dan perawat.\r\n            <br>\r\n            <br>\r\n            Foye mengatakan bahwa proses tersebut menghabiskan biaya “ratusan juta dolar” dan dapat dihemat menggunakan program sinar UV, dengan cara memasang lampu, menutup pintu dan menyalakannya.\r\n            <br>\r\n            <br>\r\n            Mark Dowd selaku Kepala Inovasi MTA menyebutkan bahwa para pekerja akan mulai menggunakan alat sterilisasi sinar UV pada pekan depan. MTA sendiri akan menghabiskan sekitar 1 juta dolar AS (sekitar 14 miliar rupiah) untuk membeli 150 lampu UV dari perusahaan start-up bernama Puro.\r\n\r\n        </p>\r\n        <span><em>Sumber : Kompas.com</em></span>\r\n        <br>\r\n        <span><em>Dipublikasikan oleh : Miranti Kencana Wirawan </em></span>\r\n        <br>\r\n        <span><em>Editor : Ahmad Mufti F.R</em></span>', '2020-06-05 06:45:34', '2020-06-05 06:45:34'),
(3, 'Gubernur Jabar: PSBB di Jawa Barat Diperpanjang Hingga 29 Mei', '<p class=\"lead text-justify\" style=\"margin-top: 3rem !important;\">\r\n            Bandung, CNBC Indonesia – PSBB (Pembatasan Sosial Berskala Besar) tingkat provinsi di Jawa Barat telah diperpanjang hinggu Jumat, 29 Mei 2020. Dengan itu, setiap daerah diberikan kebijakan untuk menentukan persentase maksimal pergerakan masyarakat selama PSBB.\r\n            <br>\r\n            <br>\r\n            “Kami juga mendapati kerawanan euforia dari Idul Fitri, maka kami sepakat gugus tugas untuk melanjutkan PSBB provinsi sampai tanggal 9 Mei 2020,” ujar Gubernur Jabar Ridwan Kamil dalam jumpa pers di Gedung Pakuan, Bandung.\r\n            <br>\r\n            <br>\r\n            Hasil evaluasi PSBB tingkat provinsi di Jawa Barat memang menunjukkan tren positif dengan penurunan jumlah penularan Covid-19. Hal itu dapat dilihat dari rata-rata penambahan kasus per hari, yaitu 40 kasus per hari pada April 2020 turun menjadi 21 kasus per hari setelah PSBB digalakkan.\r\n            <br>\r\n            <br>\r\n            Tingkat kematian di Jawa Barat pun menurut dari tujuh jiwa menjadi empat jiwa per hari. Sementara tingkat kesembuhan mencapai dua kali lipat. Dan, pasien yang dirawat mengalami penurunan sebanyak 160 pasien dari 430 pasien.\r\n            <br>\r\n            <br>\r\n            Tak hanya itu, reproduksi penularan Covid-19 mencapai indeks 3 di Jawa Barat menurun menjadi indeks 1.\r\n            <br>\r\n            <br>\r\n            Menjelang lebaran, terjadi kenaikan lalu lintas hingga 30 persen selama PSBB, dan minggu ini naik menuju 40 persen dikarenakan banyak warga yang tidak bisa menahan diri keluar rumah dan berbelanja menurut Kang Emil (sapaan akrab Ridwan Kamil).\r\n            <br>\r\n            <br>\r\n            Sementara itu Kapolda Jabar, Rudy Sufahriadi mengatakan bahwa Polda Jabar gencar menyosialiasikan kepada masyarakat untuk tetap berada di rumah apabila tidak ada kepentingan.\r\n        </p>\r\n        <span><em>Sumber : CNBC Indonesia</em></span>\r\n        <br>\r\n        <span><em>Dipublikasikan oleh : Muhammad Iqbal</em></span>\r\n        <br>\r\n        <span><em>Editor : Ahmad Mufti F.R, Nabil M</em></span>', '2020-06-05 06:47:06', '2020-06-05 06:47:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
