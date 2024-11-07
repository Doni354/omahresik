-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2024 at 04:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1658729_omahresik1`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(13, '2023-07-20-081917', 'App\\Database\\Migrations\\TbProduk', 'default', 'App', 1690513521, 1),
(14, '2023-07-20-084755', 'App\\Database\\Migrations\\TbSlider', 'default', 'App', 1690513521, 1),
(15, '2023-07-20-085024', 'App\\Database\\Migrations\\TbProfil', 'default', 'App', 1690513521, 1),
(16, '2023-07-28-035902', 'App\\Database\\Migrations\\TbAktivitas', 'default', 'App', 1690517128, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_aktivitas`
--

CREATE TABLE `tb_aktivitas` (
  `id_aktivitas` int(5) UNSIGNED NOT NULL,
  `nama_aktivitas_in` varchar(200) NOT NULL,
  `nama_aktivitas_en` varchar(200) NOT NULL,
  `foto_aktivitas` varchar(100) NOT NULL,
  `deskripsi_aktivitas_in` text DEFAULT NULL,
  `deskripsi_aktivitas_en` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_aktivitas`
--

INSERT INTO `tb_aktivitas` (`id_aktivitas`, `nama_aktivitas_in`, `nama_aktivitas_en`, `foto_aktivitas`, `deskripsi_aktivitas_in`, `deskripsi_aktivitas_en`) VALUES
(6, 'Pembersihan Harian yang Komprehensif', 'Comprehensive Daily Cleaning', 'Lorem Ipsum_Ekspor Lorem Ipsum_10072024153705.jpg', '<p>Aktivitas pembersihan harian kami meliputi serangkaian tindakan yang bertujuan untuk menjaga kebersihan dan keteraturan ruangan setiap hari. Tim kami akan memulai dengan membersihkan area-area umum seperti lobi, koridor, dan ruang tunggu dengan menyapu dan mengepel lantai secara menyeluruh. Selanjutnya, mereka akan membersihkan dan merapikan area meja, kursi, dan perabotan lainnya untuk memastikan bahwa setiap tamu atau pengunjung merasa nyaman dan terkesan dengan kebersihan ruangan.</p>', '<p>Our daily cleaning activities include a series of actions aimed at maintaining the cleanliness and order of the room every day. Our team will start by cleaning public areas such as the lobby, corridors and waiting rooms by sweeping and mopping the floors thoroughly. Next, they will clean and tidy up the table area, chairs and other furniture to ensure that every guest or visitor feels comfortable and impressed with the cleanliness of the room.</p>'),
(7, 'Pembersihan Mendalam Rutin', 'Regular Deep Cleaning', 'hello_tes aktifitas_10072024114923.jpg', '<p>Aktivitas pembersihan mendalam adalah bagian integral dari layanan kami untuk memastikan bahwa setiap sudut ruangan terjaga dari kotoran yang membandel dan kuman yang berpotensi berbahaya. Pembersihan mendalam ini meliputi langkah-langkah seperti membersihkan karpet dengan mesin vakum khusus yang mampu menarik kotoran tersembunyi di dalam serat, serta mencuci dan mensterilkan lantai dengan produk pembersih yang efektif dan aman.</p>', '<p>Deep cleaning activities are an integral part of our services to ensure that every corner of the room is protected from stubborn dirt and potentially harmful germs. This deep cleaning includes steps such as cleaning the carpet with a special vacuum machine that can pull out hidden dirt in the fibers, as well as washing and sterilizing the floor with effective and safe cleaning products.</p>'),
(8, 'Pembersihan Khusus untuk Acara Spesial', 'Special Cleaning for Special Events', 'testess_testess_10072024153628.jpg', '<p>Selain pembersihan harian dan mendalam, kami juga menyediakan layanan pembersihan khusus untuk acara-acara spesial seperti pernikahan, konferensi, atau acara perusahaan besar lainnya. Aktivitas ini meliputi persiapan sebelum acara dimulai dengan membersihkan dan menyusun ulang ruang acara, termasuk pembersihan dan penyediaan meja, kursi, dan dekorasi lainnya sesuai dengan kebutuhan dan tema acara.</p>', '<p>In addition to daily and deep cleaning, we also provide special cleaning services for special events such as weddings, conferences or other large corporate events. This activity includes preparation before the event starts by cleaning and rearranging the event space, including cleaning and providing tables, chairs and other decorations according to the needs and theme of the event.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(5) UNSIGNED NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `foto_artikel` varchar(255) NOT NULL,
  `deskripsi_artikel` longtext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `foto_artikel`, `deskripsi_artikel`, `created_at`) VALUES
(1, 'Menghadirkan Pengalaman Menginap yang Bersih dan Nyaman di Era Perhotelan Modern', '1720578892_4c4fdc83f76efae82bbf.jpg', '<p>Di PT. Omah Resik, kami mengerti bahwa kebersihan hotel bukanlah sekadar tugas rutin, tetapi sebuah komitmen untuk memberikan standar kebersihan tertinggi kepada tamu. Kami menawarkan layanan pembersihan harian yang mencakup pembersihan kamar, pengelolaan linen, dan perawatan area publik. Kami juga menyediakan layanan pembersihan mendalam yang mencakup perawatan karpet, penanganan khusus untuk fasilitas umum seperti spa dan kolam renang, serta pengelolaan sampah yang efisien dan ramah lingkungan. Dengan layanan kami, Anda dapat memberikan pengalaman menginap yang bersih, nyaman, dan mengesankan bagi tamu Anda.</p>', '2024-06-06 04:29:36'),
(2, 'Mengoptimalkan Produktivitas Kantor Melalui Layanan Kebersihan Profesional', '1720578932_03010d5135e4853f9ba6.jpg', '<p>Memiliki lingkungan kerja yang bersih bukan hanya tentang estetika tetapi juga mempengaruhi efisiensi operasional dan kesejahteraan karyawan. Layanan kebersihan harian kami meliputi pembersihan dan penyediaan perlengkapan kantor yang bersih dan siap digunakan setiap hari. Kami juga menawarkan pembersihan mendalam secara berkala untuk memastikan kebersihan menyeluruh di area-area kritis seperti ruang rapat dan ruang server. Dengan fokus pada detil, kami membantu kantor Anda tetap bersih dan terorganisir, meningkatkan produktivitas dan kenyamanan lingkungan kerja.</p>', '2024-06-06 04:29:36'),
(3, 'Layanan Kebersihan Khusus untuk Pesta dan Acara Besar: Memastikan Semua Tetap Bersinar', '1720578954_72ca6ff39a9c41959498.jpg', '<p>Menyelenggarakan acara besar membutuhkan perencanaan yang cermat, termasuk perawatan kebersihan yang teliti. Tim kami tidak hanya mengelola pembersihan dan penataan sebelum acara dimulai, tetapi juga hadir selama acara untuk memastikan bahwa setiap area tetap bersih dan rapi. Dari membersihkan area tempat duduk hingga perawatan khusus untuk ruang makan dan area umum, kami memastikan bahwa acara Anda berjalan lancar dan tamu Anda merasa nyaman dan terkesan dengan kebersihan yang kami tawarkan.</p>', '2024-06-06 04:29:36'),
(4, 'Strategi Kebersihan yang Ramah Lingkungan: Mendukung Bisnis yang Berkelanjutan', '1720578976_356001d1fc23281626d6.jpg', '<p>Kami berkomitmen untuk menggunakan bahan pembersih yang ramah lingkungan dan mengimplementasikan praktik pengelolaan sampah yang berkelanjutan. Dengan memprioritaskan penggunaan produk yang aman untuk lingkungan dan daur ulang material yang dapat didaur ulang, kami tidak hanya membantu menjaga kebersihan, tetapi juga mengurangi jejak lingkungan kami. Bersama PT. Omah Resik, Anda dapat membangun citra bisnis yang bertanggung jawab dan peduli lingkungan.</p>', '2024-06-06 04:29:36'),
(5, 'Kebersihan Tidak Hanya Penting, Tapi Esensial dalam Industri Kuliner', '1720581877_9f47161c931811d7bbaf.jpg', '<p>Restoran dan kafe adalah tempat di mana kebersihan tidak boleh dipertaruhkan. Tim kebersihan kami tidak hanya membersihkan area makan dan dapur secara rutin tetapi juga memastikan bahwa semua peralatan dan permukaan dijaga dalam keadaan bersih dan steril. Kami menggunakan bahan pembersih yang aman untuk makanan dan mematuhi standar kebersihan makanan yang ketat, sehingga Anda dapat memastikan bahwa setiap hidangan disajikan dengan kebersihan dan kualitas terbaik.</p>', '2024-06-06 04:29:36'),
(6, 'Mengapa Layanan Kebersihan Profesional Penting untuk Kesehatan dan Kesejahteraan Masyarakat', '10072024033858.jpg', '<p>Layanan kebersihan tidak hanya tentang membersihkan permukaan, tetapi juga tentang melindungi kesehatan masyarakat dari penyebaran penyakit dan meningkatkan kualitas hidup. Di PT. Omah Resik, kami memahami pentingnya praktik kebersihan yang tepat dalam mencegah penularan penyakit dan menjaga lingkungan yang sehat untuk semua. Dengan menggunakan teknik pembersihan yang efektif dan bahan-bahan pembersih yang aman, kami berkontribusi pada kesejahteraan umum dan meningkatkan standar kebersihan di komunitas tempat kami beroperasi.</p>', '2024-07-10 10:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(5) UNSIGNED NOT NULL,
  `nama_produk_in` varchar(200) NOT NULL,
  `nama_produk_en` varchar(200) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk_in` text DEFAULT NULL,
  `deskripsi_produk_en` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk_in`, `nama_produk_en`, `foto_produk`, `deskripsi_produk_in`, `deskripsi_produk_en`) VALUES
(2, 'Gedung Perkantoran', 'Cloves', 'Cloves_Gedung Perkantoran_09072024062850.jpg', '<p>menawarkan layanan kebersihan kantor dan gedung yang dirancang khusus untuk memastikan lingkungan kerja yang bersih, nyaman, dan produktif. Kami memahami bahwa kebersihan kantor tidak hanya memengaruhi kesehatan dan kesejahteraan karyawan, tetapi juga mencerminkan citra profesional perusahaan Anda.</p>', '<p>Cloves or cloves are the fragrant dried flower buds of the Myrtaceae tree family. Cloves are native to Indonesia, widely used as a spice for spicy dishes in European countries, and as the main ingredient for Indonesian clove cigarettes.</p>'),
(3, 'Restoran atau Kafe', 'Restaurant or Cafe', 'Nutmeg_Restoran atau Kafe_09072024062407.jpg', '<p>menawarkan layanan kebersihan khusus untuk restoran dan kafe yang dirancang untuk memenuhi standar kebersihan tertinggi. Kami memahami bahwa kebersihan adalah faktor krusial dalam menjaga kualitas makanan, kesehatan pelanggan, dan reputasi bisnis Anda.</p>', '<p>offers specialized cleaning services for restaurants and cafes designed to meet the highest hygiene standards. We understand that cleanliness is a crucial factor in maintaining food quality, customer health and your business reputation.</p>'),
(4, 'Hotel dan Penginapan', 'Hotels and Lodgings', 'Cumin_Hotel dan Penginapan_09072024063347.jpg', '<p>menawarkan layanan kebersihan khusus untuk hotel dan penginapan yang dirancang untuk memenuhi standar kebersihan tertinggi dalam industri perhotelan. Kami memahami bahwa kebersihan adalah faktor penting dalam memberikan pengalaman menginap yang menyenangkan dan nyaman bagi tamu.</p>', '<p>offers specialized cleaning services for hotels and inns designed to meet the highest hygiene standards in the hospitality industry. We understand that cleanliness is an important factor in providing a pleasant and comfortable stay for guests.</p>'),
(6, 'Pembersihan Harian', 'Daily Cleaning', 'Daily Cleaning_Pembersihan Harian_10072024190854.jpg', '<p>Layanan pembersihan harian kami dirancang untuk menjaga kebersihan dan keteraturan ruangan secara teratur. Tim kami akan membersihkan dan merapikan area kerja, termasuk meja, kursi, dan area umum lainnya. Selain itu, kami menyediakan penyedotan debu, penyiraman tanaman, serta membersihkan dan merawat toilet dan dapur. Layanan ini penting untuk memastikan lingkungan kerja atau tempat tinggal tetap bersih, nyaman, dan sehat setiap hari.</p>', '<p>Our daily cleaning service is designed to keep rooms clean and organized on a regular basis. Our team will clean and tidy up the work area, including tables, chairs and other common areas. In addition, we provide vacuuming, watering plants, as well as cleaning and maintaining toilets and kitchens. This service is important to ensure the work or living environment remains clean, comfortable and healthy every day.</p>'),
(7, 'Pembersihan Mendalam', 'Deep Cleaning', 'Deep Cleaning_Pembersihan Mendalam_10072024191104.jpg', '<p>Layanan pembersihan mendalam kami mencakup proses pembersihan yang lebih intensif untuk menghilangkan noda dan kotoran yang sulit dihilangkan. Ini meliputi pembersihan karpet, lantai, dinding, dan langit-langit dengan peralatan khusus untuk memastikan kebersihan menyeluruh. Pembersihan mendalam ini direkomendasikan dilakukan secara berkala untuk menjaga lingkungan tetap bersih dan sehat dari kuman dan alergen.</p>', '<p>Our deep cleaning services include a more intensive cleaning process to remove stubborn stains and dirt. This includes cleaning carpets, floors, walls and ceilings with special equipment to ensure thorough cleanliness. It is recommended that this deep cleaning be carried out periodically to keep the environment clean and healthy from germs and allergens.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(5) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `logo_perusahaan` varchar(100) NOT NULL,
  `deskripsi_perusahaan_in` text DEFAULT NULL,
  `deskripsi_perusahaan_en` text DEFAULT NULL,
  `deskripsi_kontak_in` text DEFAULT NULL,
  `deskripsi_kontak_en` text DEFAULT NULL,
  `link_maps` text DEFAULT NULL,
  `link_whatsapp` text DEFAULT NULL,
  `favicon_website` varchar(100) NOT NULL,
  `title_website` varchar(100) NOT NULL,
  `foto_utama` varchar(100) NOT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `teks_footer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `username`, `password`, `nama_perusahaan`, `logo_perusahaan`, `deskripsi_perusahaan_in`, `deskripsi_perusahaan_en`, `deskripsi_kontak_in`, `deskripsi_kontak_en`, `link_maps`, `link_whatsapp`, `favicon_website`, `title_website`, `foto_utama`, `alamat`, `no_hp`, `email`, `teks_footer`) VALUES
(1, 'user', 'user', 'Omah Resik', 'Logo_Omah-Resik_11072024043810.svg', '<p>adalah sebuah perusahaan terpercaya yang mengkhususkan diri dalam menyediakan layanan kebersihan komersial dan residensial. Dengan penekanan kuat pada kualitas dan efisiensi, kami adalah tujuan utama bagi bisnis dan pemilik rumah yang mencari layanan kebersihan berkualitas tinggi. Di Omah Resik, kami bangga akan berbagai layanan kebersihan kami yang luas, termasuk pembersihan kantor, pusat perbelanjaan, restoran, hotel, rumah tinggal, apartemen, dan banyak lagi.</p>\r\n<p>Didirikan dengan misi untuk memberikan solusi kebersihan yang efektif dan handal bagi masyarakat. Kami memahami bahwa kebersihan tidak hanya tentang penampilan, tetapi juga tentang kesehatan dan kenyamanan. Oleh karena itu, kami berkomitmen untuk menyediakan layanan kebersihan yang berkualitas tinggi, sesuai dengan kebutuhan spesifik setiap klien.</p>', '<p>is a trusted company specializing in the trading of premium Indonesian spices. With a strong emphasis on quality and a vast array of exquisite flavors, we are the go-to destination for importers seeking to source high-quality Indonesian spices for big trading ventures. At Indonesia Spices (PT NAKAM Foods Indonesia), we pride ourselves on our extensive selection of Indonesian spices, including cinnamon, cloves, nutmeg, cardamom, and more. These aromatic treasures are sourced directly from trusted local farmers and growers who have been cultivating these spices for generations. Our commitment to authenticity and sustainability ensures that our products are of the highest quality, delivering the true essence of Indonesian cuisine. We understand the unique demands of big trading, and our dedicated team is well-versed in catering to the needs of importers.</p>', '<p>Malang Kota</p>', '<p>Malang City</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4046040.312635006!2d108.0530452!3d-7.9771059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629c21940f685%3A0xce6adb8a6aba4f5!2sNakam%20Foods%20Indonesia!5e0!3m2!1sid!2sid!4v1691128148640!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '+6282131222332', 'Favicon_Omah-Resik_11072024023258.svg', 'Omah Resik', '1720454223_8e1b75112183909fb7d1.jpg', '<p>Jl. Danau Bratan Tim. No.H5 A5, Madyopuro, Kec. Kedungkandang, Kota Malang, Jawa Timur 65139</p>', '0812345678', 'omahresik@gmail.com', 'Edited by me Herlambang Ramadhan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` int(5) UNSIGNED NOT NULL,
  `file_foto_slider` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id_slider`, `file_foto_slider`) VALUES
(1, 'Omah-Resik_08072024222946.jpg'),
(6, 'Omah-Resik_08072024223117.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  ADD PRIMARY KEY (`id_aktivitas`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  MODIFY `id_aktivitas` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
