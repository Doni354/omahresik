-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2024 at 08:12 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resik`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  `id_aktivitas` int UNSIGNED NOT NULL,
  `nama_aktivitas_in` varchar(200) NOT NULL,
  `nama_aktivitas_en` varchar(200) NOT NULL,
  `foto_aktivitas` varchar(100) NOT NULL,
  `deskripsi_aktivitas_in` text,
  `deskripsi_aktivitas_en` text,
  `meta_title_id` varchar(255) NOT NULL,
  `meta_description_id` varchar(255) NOT NULL,
  `meta_title_en` varchar(255) NOT NULL,
  `meta_description_en` varchar(255) NOT NULL,
  `slug_en` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `slug_in` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tb_aktivitas`
--

INSERT INTO `tb_aktivitas` (`id_aktivitas`, `nama_aktivitas_in`, `nama_aktivitas_en`, `foto_aktivitas`, `deskripsi_aktivitas_in`, `deskripsi_aktivitas_en`, `meta_title_id`, `meta_description_id`, `meta_title_en`, `meta_description_en`, `slug_en`, `slug_in`) VALUES
(6, 'Pembersihan Harian yang Komprehensif', 'Comprehensive Daily Cleaning', 'Lorem Ipsum_Ekspor Lorem Ipsum_10072024153705.jpg', '<p>Aktivitas pembersihan harian kami meliputi serangkaian tindakan yang bertujuan untuk menjaga kebersihan dan keteraturan ruangan setiap hari. Tim kami akan memulai dengan membersihkan area-area umum seperti lobi, koridor, dan ruang tunggu dengan menyapu dan mengepel lantai secara menyeluruh. Selanjutnya, mereka akan membersihkan dan merapikan area meja, kursi, dan perabotan lainnya untuk memastikan bahwa setiap tamu atau pengunjung merasa nyaman dan terkesan dengan kebersihan ruangan.</p>', '<p>Our daily cleaning activities include a series of actions aimed at maintaining the cleanliness and order of the room every day. Our team will start by cleaning public areas such as the lobby, corridors and waiting rooms by sweeping and mopping the floors thoroughly. Next, they will clean and tidy up the table area, chairs and other furniture to ensure that every guest or visitor feels comfortable and impressed with the cleanliness of the room.</p>', '<p>Layanan Pembersihan Harian &ndash; Omah Resik</p>', '<p>Aktivitas pembersihan harian kami mencakup penyapuan, pengepelan, dan perapian area meja dan perabotan untuk memastikan ruangan tetap bersih dan nyaman setiap hari.</p>', '<p>daily-cleaning-service-omah-resik</p>', '<p>layanan-kebersihan-harian-omah-resik</p>', 'comprehensive-daily-cleaning', 'pembersihan-harian-yang-komprehensif'),
(7, 'Pembersihan Mendalam Rutin', 'Regular Deep Cleaning', 'hello_tes aktifitas_10072024114923.jpg', '<p>Aktivitas pembersihan mendalam adalah bagian integral dari layanan kami untuk memastikan bahwa setiap sudut ruangan terjaga dari kotoran yang membandel dan kuman yang berpotensi berbahaya. Pembersihan mendalam ini meliputi langkah-langkah seperti membersihkan karpet dengan mesin vakum khusus yang mampu menarik kotoran tersembunyi di dalam serat, serta mencuci dan mensterilkan lantai dengan produk pembersih yang efektif dan aman.</p>', '<p>Deep cleaning activities are an integral part of our services to ensure that every corner of the room is protected from stubborn dirt and potentially harmful germs. This deep cleaning includes steps such as cleaning the carpet with a special vacuum machine that can pull out hidden dirt in the fibers, as well as washing and sterilizing the floor with effective and safe cleaning products.</p>', '<p>Layanan Pembersihan Mendalam &ndash; Omah Resik</p>', '<p>Aktivitas pembersihan mendalam kami mencakup pembersihan karpet dan lantai dengan peralatan khusus untuk menghilangkan kotoran membandel dan menjaga kebersihan menyeluruh.</p>', '<p>layanan-pembersihan-mendalam-omah-resik</p>', '<p>deep-cleaning-service-omah-resik</p>', 'regular-deep-cleaning', 'pembersihan-mendalam-rutin'),
(8, 'Pembersihan Khusus untuk Acara Spesial', 'Special Cleaning for Special Events', 'testess_testess_10072024153628.jpg', '<p>Selain pembersihan harian dan mendalam, kami juga menyediakan layanan pembersihan khusus untuk acara-acara spesial seperti pernikahan, konferensi, atau acara perusahaan besar lainnya. Aktivitas ini meliputi persiapan sebelum acara dimulai dengan membersihkan dan menyusun ulang ruang acara, termasuk pembersihan dan penyediaan meja, kursi, dan dekorasi lainnya sesuai dengan kebutuhan dan tema acara.</p>', '<p>In addition to daily and deep cleaning, we also provide special cleaning services for special events such as weddings, conferences or other large corporate events. This activity includes preparation before the event starts by cleaning and rearranging the event space, including cleaning and providing tables, chairs and other decorations according to the needs and theme of the event.</p>', '<p>Layanan Pembersihan Acara Spesial &ndash; Omah Resik</p>', '<p>Kami menyediakan layanan pembersihan khusus untuk acara pernikahan, konferensi, dan acara perusahaan besar. Termasuk pembersihan dan pengaturan ruang sebelum acara dimulai.</p>', '<p>layanan-pembersihan-acara-khusus-omah-resik</p>', '<p>special-event-cleaning-service-omah-resik</p>', 'special-cleaning-for-special-events', 'pembersihan-khusus-untuk-acara-spesial');

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int UNSIGNED NOT NULL,
  `judul_artikel_in` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto_artikel` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_artikel` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `meta_title_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `meta_description_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `meta_title_en` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `meta_description_en` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `slug_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug_in` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `judul_artikel_en` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel_in`, `foto_artikel`, `deskripsi_artikel`, `created_at`, `meta_title_id`, `meta_description_id`, `meta_title_en`, `meta_description_en`, `slug_en`, `slug_in`, `judul_artikel_en`) VALUES
(1, 'Menghadirkan Pengalaman Menginap yang Bersih dan Nyaman di Era Perhotelan Modern', '1720578892_4c4fdc83f76efae82bbf.jpg', '<p>Di PT. Omah Resik, kami mengerti bahwa kebersihan hotel bukanlah sekadar tugas rutin, tetapi sebuah komitmen untuk memberikan standar kebersihan tertinggi kepada tamu. Kami menawarkan layanan pembersihan harian yang mencakup pembersihan kamar, pengelolaan linen, dan perawatan area publik. Kami juga menyediakan layanan pembersihan mendalam yang mencakup perawatan karpet, penanganan khusus untuk fasilitas umum seperti spa dan kolam renang, serta pengelolaan sampah yang efisien dan ramah lingkungan. Dengan layanan kami, Anda dapat memberikan pengalaman menginap yang bersih, nyaman, dan mengesankan bagi tamu Anda.</p>', '2024-06-06 04:29:36', '<p>Layanan Pembersihan Hotel Berkualitas &ndash; PT. Omah Resik</p>', '<p>PT. Omah Resik menyediakan layanan pembersihan hotel harian dan mendalam, mencakup pembersihan kamar, pengelolaan linen, area publik, hingga perawatan spa dan kolam renang, untuk memberikan pengalaman menginap yang nyaman dan bersih.</p>', '<p>High-Quality Hotel Cleaning Services &ndash; PT. Omah Resik</p>', '<p>PT. Omah Resik offers daily and deep cleaning services for hotels, including room cleaning, linen management, public area maintenance, spa and pool care, and eco-friendly waste management, ensuring a clean and comfortable guest experience.</p>', 'providing-a-clean-and-comfortable-stay-experience-in-the-modern-hospitality-era', 'menghadirkan-pengalaman-menginap-yang-bersih-dan-nyaman-di-era-perhotelan-modern', '\"Providing a Clean and Comfortable Stay Experience in the Modern Hospitality Era\"'),
(2, 'Mengoptimalkan Produktivitas Kantor Melalui Layanan Kebersihan Profesional', '1720578932_03010d5135e4853f9ba6.jpg', '<p>Memiliki lingkungan kerja yang bersih bukan hanya tentang estetika tetapi juga mempengaruhi efisiensi operasional dan kesejahteraan karyawan. Layanan kebersihan harian kami meliputi pembersihan dan penyediaan perlengkapan kantor yang bersih dan siap digunakan setiap hari. Kami juga menawarkan pembersihan mendalam secara berkala untuk memastikan kebersihan menyeluruh di area-area kritis seperti ruang rapat dan ruang server. Dengan fokus pada detil, kami membantu kantor Anda tetap bersih dan terorganisir, meningkatkan produktivitas dan kenyamanan lingkungan kerja.</p>', '2024-06-06 04:29:36', '<p>Layanan Kebersihan Kantor Profesional &ndash; PT. Omah Resik</p>', '<p>PT. Omah Resik menawarkan layanan kebersihan harian dan mendalam untuk kantor, mencakup pembersihan ruang rapat, ruang server, dan perlengkapan kantor, menjaga lingkungan kerja tetap bersih, produktif, dan terorganisir</p>', '<p>Professional Office Cleaning Services &ndash; PT. Omah Resik</p>', '<p>PT. Omah Resik provides daily and deep cleaning services for offices, covering meeting rooms, server rooms, and office equipment, ensuring a clean, productive, and organized work environment.</p>', 'optimizing-office-productivity-through-professional-cleaning-services', 'mengoptimalkan-produktivitas-kantor-melalui-layanan-kebersihan-profesional', '\"Optimizing Office Productivity Through Professional Cleaning Services\"'),
(3, 'Layanan Kebersihan Khusus untuk Pesta dan Acara Besar: Memastikan Semua Tetap Bersinar', '1720578954_72ca6ff39a9c41959498.jpg', '<p>Menyelenggarakan acara besar membutuhkan perencanaan yang cermat, termasuk perawatan kebersihan yang teliti. Tim kami tidak hanya mengelola pembersihan dan penataan sebelum acara dimulai, tetapi juga hadir selama acara untuk memastikan bahwa setiap area tetap bersih dan rapi. Dari membersihkan area tempat duduk hingga perawatan khusus untuk ruang makan dan area umum, kami memastikan bahwa acara Anda berjalan lancar dan tamu Anda merasa nyaman dan terkesan dengan kebersihan yang kami tawarkan.</p>', '2024-06-06 04:29:36', '<p>Layanan Kebersihan untuk Acara Besar &ndash; PT. Omah Resik</p>', '<p>PT. Omah Resik menyediakan layanan kebersihan profesional untuk acara besar, memastikan kebersihan area tempat duduk, ruang makan, dan area umum selama acara berlangsung, sehingga tamu merasa nyaman dan acara berjalan lancar.</p>', '<p>Event Cleaning Services for Large Events &ndash; PT. Omah Resik</p>', '<p>PT. Omah Resik offers professional cleaning services for large events, ensuring cleanliness in seating areas, dining spaces, and common areas during the event, making sure your guests feel comfortable and your event runs smoothly.</p>', 'specialized-cleaning-services-for-parties-and-large-events-keeping-everything-sparkling', 'layanan-kebersihan-khusus-untuk-pesta-dan-acara-besar-memastikan-semua-tetap-bersinar', '\"Specialized Cleaning Services for Parties and Large Events: Keeping Everything Sparkling\"'),
(4, 'Strategi Kebersihan yang Ramah Lingkungan: Mendukung Bisnis yang Berkelanjutan', '1720578976_356001d1fc23281626d6.jpg', '<p>Kami berkomitmen untuk menggunakan bahan pembersih yang ramah lingkungan dan mengimplementasikan praktik pengelolaan sampah yang berkelanjutan. Dengan memprioritaskan penggunaan produk yang aman untuk lingkungan dan daur ulang material yang dapat didaur ulang, kami tidak hanya membantu menjaga kebersihan, tetapi juga mengurangi jejak lingkungan kami. Bersama PT. Omah Resik, Anda dapat membangun citra bisnis yang bertanggung jawab dan peduli lingkungan.</p>', '2024-06-06 04:29:36', '<p>Layanan Kebersihan Ramah Lingkungan &ndash; PT. Omah Resik</p>', '<p>PT. Omah Resik berkomitmen menggunakan bahan pembersih ramah lingkungan dan praktik pengelolaan sampah berkelanjutan, membantu menjaga kebersihan sekaligus mengurangi dampak lingkungan untuk bisnis yang bertanggung jawab.</p>', '<p>Eco-Friendly Cleaning Services &ndash; PT. Omah Resik</p>', '<p>PT. Omah Resik is committed to using eco-friendly cleaning products and sustainable waste management practices, helping maintain cleanliness while reducing environmental impact, supporting your business\'s responsible image.</p>', 'eco-friendly-cleaning-strategies-supporting-sustainable-business', 'strategi-kebersihan-yang-ramah-lingkungan-mendukung-bisnis-yang-berkelanjutan', '\"Eco-Friendly Cleaning Strategies: Supporting Sustainable Business\"'),
(5, 'Kebersihan Tidak Hanya Penting, Tapi Esensial dalam Industri Kuliner', '1720581877_9f47161c931811d7bbaf.jpg', '<p>Restoran dan kafe adalah tempat di mana kebersihan tidak boleh dipertaruhkan. Tim kebersihan kami tidak hanya membersihkan area makan dan dapur secara rutin tetapi juga memastikan bahwa semua peralatan dan permukaan dijaga dalam keadaan bersih dan steril. Kami menggunakan bahan pembersih yang aman untuk makanan dan mematuhi standar kebersihan makanan yang ketat, sehingga Anda dapat memastikan bahwa setiap hidangan disajikan dengan kebersihan dan kualitas terbaik.</p>', '2024-06-06 04:29:36', '<p>&nbsp;Layanan Kebersihan Profesional untuk Restoran dan Kafe &ndash; PT. Omah Resik</p>', '<p>PT. Omah Resik menawarkan layanan kebersihan menyeluruh untuk restoran dan kafe, memastikan area makan, dapur, dan peralatan tetap bersih dan steril, mematuhi standar kebersihan makanan yang ketat.</p>', '<p>Professional Cleaning Services for Restaurants and Cafes &ndash; PT. Omah Resik</p>', '<p>PT. Omah Resik provides comprehensive cleaning services for restaurants and cafes, ensuring dining areas, kitchens, and equipment stay clean and sterile, adhering to strict food hygiene standards</p>', 'cleanliness-is-not-just-important-but-essential-in-the-culinary-industry', 'kebersihan-tidak-hanya-penting-tapi-esensial-dalam-industri-kuliner', '\"Cleanliness Is Not Just Important, But Essential in the Culinary Industry\"'),
(6, 'Mengapa Layanan Kebersihan Profesional Penting untuk Kesehatan dan Kesejahteraan Masyarakat', '10072024033858.jpg', '<p>Layanan kebersihan tidak hanya tentang membersihkan permukaan, tetapi juga tentang melindungi kesehatan masyarakat dari penyebaran penyakit dan meningkatkan kualitas hidup. Di PT. Omah Resik, kami memahami pentingnya praktik kebersihan yang tepat dalam mencegah penularan penyakit dan menjaga lingkungan yang sehat untuk semua. Dengan menggunakan teknik pembersihan yang efektif dan bahan-bahan pembersih yang aman, kami berkontribusi pada kesejahteraan umum dan meningkatkan standar kebersihan di komunitas tempat kami beroperasi.</p>', '2024-07-10 10:38:58', '<p>Layanan Kebersihan untuk Kesehatan dan Kesejahteraan &ndash; PT. Omah Resik</p>', '<p>PT. Omah Resik menyediakan layanan kebersihan yang efektif dan aman, menjaga kesehatan masyarakat dengan mencegah penyebaran penyakit dan meningkatkan kualitas hidup di lingkungan yang bersih.</p>', '<p>Cleaning Services for Public Health and Well-being &ndash; PT. Omah Resik</p>', '<p>PT. Omah Resik offers effective and safe cleaning services, protecting public health by preventing disease transmission and enhancing quality of life in clean environments.</p>', 'why-professional-cleaning-services-are-essential-for-public-health-and-well-being', 'mengapa-layanan-kebersihan-profesional-penting-untuk-kesehatan-dan-kesejahteraan-masyarakat', '\"Why Professional Cleaning Services Are Essential for Public Health and Well-Being\"');

-- --------------------------------------------------------

--
-- Table structure for table `tb_meta`
--

CREATE TABLE `tb_meta` (
  `id_seo` int UNSIGNED NOT NULL,
  `nama_halaman` varchar(255) DEFAULT NULL,
  `meta_title_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `meta_description_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `canonical_url` varchar(255) DEFAULT NULL,
  `meta_title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `meta_description_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_meta`
--

INSERT INTO `tb_meta` (`id_seo`, `nama_halaman`, `meta_title_id`, `meta_description_id`, `canonical_url`, `meta_title_en`, `meta_description_en`) VALUES
(2, 'Tentang', 'Omah Resik - Layanan Kebersihan Komersial dan Residensial Terpercaya', 'Omah Resik menyediakan layanan kebersihan berkualitas tinggi untuk kantor, restoran, hotel, rumah, dan apartemen. Kami berkomitmen pada kesehatan, kenyamanan, dan kebersihan yang efektif sesuai kebutuhan spesifik Anda.', '', 'Omah Resik - Trusted Commercial and Residential Cleaning Services', 'Omah Resik offers high-quality cleaning services for offices, restaurants, hotels, homes, and apartments. We are committed to providing effective cleaning solutions tailored to your specific needs, ensuring health and comfort.'),
(3, 'Artikel', 'Artikel Kebersihan Terbaru dari Omah Resik - Tips dan Solusi Kebersihan', 'Baca artikel terbaru dari Omah Resik untuk mendapatkan tips dan solusi kebersihan yang efektif untuk rumah dan bisnis Anda. Kami berbagi panduan lengkap tentang menjaga kebersihan dan kesehatan di berbagai lingkungan.', '', 'Latest Cleaning Articles from Omah Resik - Tips and Cleaning Solutions', 'Read the latest articles from Omah Resik for effective cleaning tips and solutions for your home and business. We provide comprehensive guides on maintaining cleanliness and health in various environments.'),
(4, 'Product', 'Layanan Kebersihan Profesional dari Omah Resik - Komersial dan Residensial', 'Omah Resik menyediakan layanan kebersihan profesional untuk kantor, restoran, hotel, rumah, dan apartemen. Kami menawarkan solusi kebersihan yang efisien dan terpercaya sesuai kebutuhan Anda, dengan fokus pada kualitas dan kesehatan.', '', 'Professional Cleaning Services from Omah Resik - Commercial and Residential', 'Omah Resik offers professional cleaning services for offices, restaurants, hotels, homes, and apartments. We provide efficient and reliable cleaning solutions tailored to your needs, with a strong emphasis on quality and health.'),
(5, 'Aktivitas', 'Aktivitas dan Proyek Omah Resik - Solusi Kebersihan Terpercaya', 'Lihat aktivitas terbaru Omah Resik dalam menyediakan layanan kebersihan untuk berbagai bisnis dan hunian. Kami berkomitmen untuk memberikan hasil kebersihan berkualitas tinggi dengan standar terbaik.', '', 'Omah Resik Activities and Projects - Trusted Cleaning Solutions', 'Explore the latest activities of Omah Resik in providing cleaning services for various businesses and residences. We are committed to delivering high-quality cleaning results with the highest standards.'),
(6, 'Beranda', 'Omah Resik - Layanan Kebersihan Profesional untuk Komersial dan Residensial', 'Selamat datang di Omah Resik, penyedia layanan kebersihan terpercaya untuk kantor, restoran, hotel, rumah, dan apartemen. Kami menawarkan solusi kebersihan yang efisien dan berkualitas tinggi sesuai kebutuhan Anda.', '', 'Omah Resik - Professional Cleaning Services for Commercial and Residential', 'Welcome to Omah Resik, your trusted provider of cleaning services for offices, restaurants, hotels, homes, and apartments. We offer efficient, high-quality cleaning solutions tailored to your needs.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int UNSIGNED NOT NULL,
  `nama_produk_in` varchar(200) NOT NULL,
  `nama_produk_en` varchar(200) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk_in` text,
  `deskripsi_produk_en` text,
  `meta_title_id` varchar(255) NOT NULL,
  `meta_description_id` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `meta_title_en` varchar(255) NOT NULL,
  `meta_description_en` varchar(255) NOT NULL,
  `slug_in` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `slug_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk_in`, `nama_produk_en`, `foto_produk`, `deskripsi_produk_in`, `deskripsi_produk_en`, `meta_title_id`, `meta_description_id`, `meta_title_en`, `meta_description_en`, `slug_in`, `slug_en`) VALUES
(2, 'Gedung Perkantoran', 'Cloves', 'Cloves_Gedung Perkantoran_09072024062850.jpg', '<p>&nbsp;Layanan kebersihan kantor dan gedung dari PT. Omah Resik dirancang untuk memastikan lingkungan kerja yang bersih, nyaman, dan produktif. Kami menawarkan solusi pembersihan harian dan berkala yang mencakup pembersihan area kerja, ruang rapat, koridor, dan fasilitas umum lainnya. Tim profesional kami menggunakan bahan pembersih yang aman dan ramah lingkungan untuk menjaga kesehatan dan keselamatan seluruh penghuni gedung. Dengan layanan yang fleksibel dan sesuai kebutuhan, kami membantu menciptakan ruang kerja yang terorganisir dan memberikan kesan profesional.</p>', '<p>Omah Resik&rsquo;s office and building cleaning services are designed to ensure a clean, comfortable, and productive work environment. We offer daily and periodic cleaning solutions that cover workspaces, meeting rooms, corridors, and other common areas. Our professional team uses safe and eco-friendly cleaning products to ensure the health and safety of all building occupants. With flexible services tailored to your needs, we help create an organized workspace that leaves a lasting professional impression.</p>', '<p>Layanan Kebersihan Kantor dan Gedung | Omah Resik</p>', '<p>Omah Resik menawarkan layanan kebersihan kantor dan gedung untuk memastikan lingkungan kerja yang bersih, nyaman, dan produktif. Jaga kesehatan dan citra profesional perusahaan Anda bersama kami.</p>', '<p>layanan-kebersihan-kantor-dan-gedung-omah-resik</p>', '<p>office-and-building-cleaning-services-omah-resik</p>', 'gedung-perkantoran', 'cloves'),
(3, 'Restoran atau Kafe', 'Restaurant or Cafe', 'Nutmeg_Restoran atau Kafe_09072024062407.jpg', '<p>menawarkan layanan kebersihan khusus untuk restoran dan kafe yang dirancang untuk memenuhi standar kebersihan tertinggi. Kami memahami bahwa kebersihan adalah faktor krusial dalam menjaga kualitas makanan, kesehatan pelanggan, dan reputasi bisnis Anda.</p>', '<p>offers specialized cleaning services for restaurants and cafes designed to meet the highest hygiene standards. We understand that cleanliness is a crucial factor in maintaining food quality, customer health and your business reputation.</p>', '<p>Layanan Kebersihan Restoran dan Kafe | Omah Resik</p>', '<p>Omah Resik menawarkan layanan kebersihan khusus untuk restoran dan kafe dengan standar kebersihan tertinggi, menjaga kualitas makanan, kesehatan pelanggan, dan reputasi bisnis Anda.</p>', '<p>layanan-kebersihan-restoran-dan-kafe-omah-resik</p>', '<p>restaurant-and-cafe-cleaning-services-omah-resik</p>', 'restoran-atau-kafe', 'restaurant-or-cafe'),
(4, 'Hotel dan Penginapan', 'Hotels and Lodgings', 'Cumin_Hotel dan Penginapan_09072024063347.jpg', '<p>menawarkan layanan kebersihan khusus untuk hotel dan penginapan yang dirancang untuk memenuhi standar kebersihan tertinggi dalam industri perhotelan. Kami memahami bahwa kebersihan adalah faktor penting dalam memberikan pengalaman menginap yang menyenangkan dan nyaman bagi tamu.</p>', '<p>offers specialized cleaning services for hotels and inns designed to meet the highest hygiene standards in the hospitality industry. We understand that cleanliness is an important factor in providing a pleasant and comfortable stay for guests.</p>', '<p>Layanan Kebersihan Hotel dan Penginapan | Omah Resik</p>', '<p>Omah Resik menawarkan layanan kebersihan khusus untuk hotel dan penginapan dengan standar tertinggi, memastikan kenyamanan dan pengalaman menginap yang menyenangkan bagi tamu.</p>', '<p>layanan-kebersihan-hotel-dan-akomodasi-omah-resik</p>', '<p>hotel-and-accommodation-cleaning-services-omah-resik</p>', 'hotel-dan-penginapan', 'hotels-and-lodgings'),
(6, 'Pembersihan Harian', 'Daily Cleaning', 'Daily Cleaning_Pembersihan Harian_10072024190854.jpg', '<p>Layanan pembersihan harian kami dirancang untuk menjaga kebersihan dan keteraturan ruangan secara teratur. Tim kami akan membersihkan dan merapikan area kerja, termasuk meja, kursi, dan area umum lainnya. Selain itu, kami menyediakan penyedotan debu, penyiraman tanaman, serta membersihkan dan merawat toilet dan dapur. Layanan ini penting untuk memastikan lingkungan kerja atau tempat tinggal tetap bersih, nyaman, dan sehat setiap hari.</p>', '<p>Our daily cleaning service is designed to keep rooms clean and organized on a regular basis. Our team will clean and tidy up the work area, including tables, chairs and other common areas. In addition, we provide vacuuming, watering plants, as well as cleaning and maintaining toilets and kitchens. This service is important to ensure the work or living environment remains clean, comfortable and healthy every day.</p>', '<p>Layanan Pembersihan Harian untuk Ruang Kerja dan Rumah | Omah Resik</p>', '<p>Jaga kebersihan dan kenyamanan lingkungan Anda setiap hari dengan layanan pembersihan harian dari Omah Resik. Kami menawarkan pembersihan area kerja, penyedotan debu, perawatan toilet dan dapur, serta penyiraman tanaman.</p>', '<p>layanan-kebersihan-harian-untuk-ruang-kerja-dan-rumah-omah-resik</p>', '<p>daily-cleaning-services-for-workspace-and-home-omah-resik</p>', 'pembersihan-harian', 'daily-cleaning'),
(7, 'Pembersihan Mendalam', 'Deep Cleaning', 'Deep Cleaning_Pembersihan Mendalam_10072024191104.jpg', '<p>Layanan pembersihan mendalam kami mencakup proses pembersihan yang lebih intensif untuk menghilangkan noda dan kotoran yang sulit dihilangkan. Ini meliputi pembersihan karpet, lantai, dinding, dan langit-langit dengan peralatan khusus untuk memastikan kebersihan menyeluruh. Pembersihan mendalam ini direkomendasikan dilakukan secara berkala untuk menjaga lingkungan tetap bersih dan sehat dari kuman dan alergen.</p>', '<p>Our deep cleaning services include a more intensive cleaning process to remove stubborn stains and dirt. This includes cleaning carpets, floors, walls and ceilings with special equipment to ensure thorough cleanliness. It is recommended that this deep cleaning be carried out periodically to keep the environment clean and healthy from germs and allergens.</p>', '<p>Layanan Pembersihan Mendalam untuk Kebersihan Total | Omah Resik</p>', '<p>Layanan pembersihan mendalam Omah Resik mencakup pembersihan karpet, lantai, dinding, dan langit-langit untuk menghilangkan noda membandel dan menjaga kebersihan menyeluruh di rumah atau tempat kerja Anda.</p>', '<p>layanan-deep-cleaning-untuk-kebersihan-menyeluruh-omah-resik</p>', '<p>deep-cleaning-services-for-thorough-cleanliness-omah-resik</p>', 'pembersihan-mendalam', 'deep-cleaning');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `logo_perusahaan` varchar(100) NOT NULL,
  `deskripsi_perusahaan_in` text,
  `deskripsi_perusahaan_en` text,
  `deskripsi_kontak_in` text,
  `deskripsi_kontak_en` text,
  `link_maps` text,
  `link_whatsapp` text,
  `favicon_website` varchar(100) NOT NULL,
  `title_website` varchar(100) NOT NULL,
  `foto_utama` varchar(100) NOT NULL,
  `alamat` text,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `teks_footer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  `id_slider` int UNSIGNED NOT NULL,
  `file_foto_slider` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
-- Indexes for table `tb_meta`
--
ALTER TABLE `tb_meta`
  ADD PRIMARY KEY (`id_seo`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  MODIFY `id_aktivitas` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_meta`
--
ALTER TABLE `tb_meta`
  MODIFY `id_seo` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
