-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2017 at 06:30 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sabahtmed`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `disease_id` int(11) NOT NULL,
  `disease_name` varchar(255) NOT NULL,
  `disease_informtion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `herbs`
--

CREATE TABLE `herbs` (
  `herb_id` int(55) NOT NULL,
  `herb_name` varchar(255) DEFAULT NULL,
  `herb_part` varchar(50) DEFAULT NULL,
  `herb_disease` varchar(100) DEFAULT NULL,
  `herb_instruction` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `herbs`
--

INSERT INTO `herbs` (`herb_id`, `herb_name`, `herb_part`, `herb_disease`, `herb_instruction`) VALUES
(1, 'ASAM JAWA', 'Kulit Pohon Asam Jawa', 'Asma', 'Cincang dan rebus sekerat kulit kayu pohon asam jawa ke dalam 3 gelas air selama 10 minit. Minum 3 kali sehari.'),
(2, 'BETIK', 'Akar(1) Daun(2)', 'Sakit Perut', '1. Akar\r\nRebus akar selama 30 minit dan airnya diminum.\r\n2. Daun\r\nRebus pucuk betik selama 30 minit dan airnya diminum.\r\n'),
(3, 'DURIAN BELANDA', 'Daun', 'Sakit Perut', 'Rebus pucuk daun durian belanda selama 15 minit dan airnya diminum'),
(4, 'BETIK', 'Buah Betik', 'Sembelit', 'Makan sehiris besar buah betik pada setiap sarapan.'),
(5, 'DURIAN BELANDA', 'Daun', 'Cirit-birit', 'Rebus pucuk daun durian belanda selama 15 minit dan airnya diminum'),
(6, 'JAMBU BATU', 'Daun', 'Sakit Perut', 'Rebus 10 daun yang dicincang selama 15 minit dan airnya diminum'),
(7, 'JAMBU BATU', 'Daun', 'Cirit-birit', 'Rebus 10 daun yang dicincang selama 15 minit dan airnya diminum'),
(8, 'KELAPA MAWAR', 'Akar', 'Cacar', 'Rebus akar selama 30 minit dan airnya diminum ketika air tersebut masih suam'),
(9, 'LALANG', 'Akar', 'Buang Panas', 'Rebus 2 akar lalang segar selama 30 minit dan airnya diminum setelah sejuk.'),
(10, 'LALANG', 'Akar', 'Cirit-birit', 'Rebus 5 batang akar lalang segar yang kemudiannya dicincang dalam 2 gelas air selama 15 minit. Minum air tersebut ketika masih suam.'),
(11, 'SEMBUNG', 'Daun', 'Membuang Darah Beku', '(Untuk wanita yang baru bersalin)\r\nPanaskan daun sembung menggunakan api dan lekatkan pada perut wanita yang baru bersalin.'),
(12, 'RAMBUTAN', 'Buah Biji Rambutan', 'Mengurangkan Kolesterol', 'Hancurkan biji buah rambutan dan dimakan dengan mentah atau dicampurkan dengan makanan'),
(13, 'RAMBUTAN', 'Daun', 'Melebatkan Rambut', 'Hancurkan 10 heli daun rambutan dan lumurkan di kawasan permukaan kulit kepala yang dikehendaki. Kemudian rambut tersebut dibalut menggunakan kain dan dibiarkan selama 30 minit.'),
(14, 'RAMBUTAN', 'Akar', 'Demam', 'Bersihkan akar pokok rambutan dan rebus menggunakan 10 gelas air hingga mendidih dan diminum ketika suam.'),
(15, 'PANDAN', 'Daun', 'Darah Tinggi', 'Rebuskan daun pandan selama 40 minit dan airnya diminum ketiaka suam. Diambil 2 kali sehari.'),
(16, 'SERAI', 'Batang Serai', 'Darah Tinggi', 'Rebuskan batangnya serai sehingga mendidih dan airnya diminum ketika masih suam.'),
(17, 'SERAI', 'Daun', 'Cirit-birit', 'Rebus 10 daun muda serai dalam 2 gelas air selama 10 minit dan airnya diminum setelah sejuk'),
(18, 'MISAI KUCING', 'Batang Pokok', 'Darah Tinggi', 'Rebuskan batang pokok misai kucing sehingga mendidih dan airnya diminum'),
(19, 'MISAI KUCING', 'Daun', 'Batuk', 'Rebus 4 sudu makan daun kering atau  6 sudu makan daun segar dicincang dengan 2 gelas air selama 15 minit'),
(20, 'MISAI KUCING', 'Daun', 'Demam', 'Rebus 4 sudu makan daun kering atau  6 sudu makan daun segar dicincang dengan 2 gelas air selama 15 minit'),
(21, 'PISANG', 'Akar', 'Cacar', 'Rebus 3 batang akar pisang yang telah dibersihkan sehingga mendidih dan airnya diminum.'),
(22, 'PISANG', 'Daun', 'Luka Berdarah', 'Tumbuk daun pisang muda hingga lembek dan  berair. Titiskan airnya ke atas luka. Akhir sekali, balut luka tersebut.'),
(23, 'LIMAU PURUT', 'Buah Limau', 'Penawar Sengatan Ikan Keli', 'Potong 10 buah limau dan gosokan air limau tersebut ke atas luka hingga sakit reda.'),
(24, 'LIMAU PURUT', 'Buah Limau', 'Penawar Sengatan Tebuan', 'Gosok segera bahagian yang disengat dengan air limau sehingga rasa sakit reda'),
(25, 'RUMBIA', 'Akar', 'Buang Angin', 'Rebus 4 batang akar yang telah dibersihkan sehingga mendidih dan airnya diminum'),
(26, 'SENDUDUK', 'Akar', 'Mempercepatkan Kelahiran anak', '(Bagi kandungan yang melebihi 9 bulan)\r\nRebus 3 batang akar pokok senduduk yang telah dibershikan selama 10 minit dan airnya diminum'),
(27, 'GELENGGANG', 'Bunga(1) Biji(2)', 'Kurap', '1. Bunga\r\nHancurkan 5-10 bunga gelenggang bergantung kepada saiz kurap. Hancurkan bunga hingga sarinya keluar dan tampalkan kepada kurap tersebut selama 30 minit.\r\n2. Biji\r\nTumbuk halus dan campurkan dengan air dan diminum 2 jam setelah makan malam.\r\n'),
(28, 'KAYU ARANG', 'Arang', 'Sakit Perut', 'Hancurkan arang hingga halus dan campurkan dengan air dan diminum'),
(29, 'KAYU ARANG', 'Arang', 'Cirit-birit', 'Hancurkan arang hingga halus dan campurkan dengan air dan diminum'),
(30, 'KAYU ARANG', 'Arang', 'Muntah-muntah', 'Hancurkan arang hingga halus dan campurkan dengan air dan diminum'),
(31, 'MANGGIS', 'Kulit Buah Manggis', 'Buasir', 'Keringkan kulit buah manggis yang telah dibersihkan. Kemudian rebus kulit tersebut dengan 5 gelas air sehingga mendidih dan airnya diminum.\r\n'),
(32, 'LIDAH BUAYA', 'Daun', 'Jerawat', 'Ambil sekeping daun lidah buaya dan kupas kulitnya. Kemudian gosokkan sarinya pada muka setelah selesai mencucinya dengan air panas. Biarkan selama 30 minit; anda boleh membiarkannya sepanjang malam jika tahan\r\n'),
(33, 'LIDAH BUAYA', 'Daun', 'Kelimumur', 'Peras sari dari daun lidah buaya segar. Gosokkan sarinya pada kepala kemudian urut kepala 1 jam sebelum disyampo.\r\n'),
(34, 'LIDAH BUAYA', 'Daun', 'Luka Terbakar', 'Cuci daun lidah buaya dengan sabun dan air. Tumbuk daun dan ambil sarinya. Sapukan sarinya pada bahagian yang terbakar setelah merendamnya dalam larutan air garam panas.\r\n'),
(35, 'LIDAH BUAYA', 'Daun', 'Sakit Kerongkong', 'Cuci daunya dan potong dalam ukuran 1cm. Biarkan satu potongan dalam mulut sepanjang hari, sarinya ditelan dan ditukar dengan yang baru jika sarinya habis\r\n'),
(36, 'BAWANG PUTIH', 'Buah', 'Sakit Kerongkong', 'Cuci sepotong bawang putih dan dikupas. Biarkan dalam mulut selama beberapa minit, kemudian kunyah perlahan-lahan dan jusnya ditelan.'),
(37, 'BAWANG PUTIH', 'Buah', 'Sakit Gigi', 'Hiris sepotong kecil bawang putih, cukup untuk dimasukkan ke dalam lubang gigi. Tukar dua kali sehari.'),
(38, 'BAWANG PUTIH', 'Buah', 'Kurap', 'Kupas dan hancurkan bawang putih dan gosokkan pada bahagian yang berkurap hingga menjadi merah.'),
(39, 'HALIA', 'Halia', 'Sakit Kerongkong', 'Cuci dan kupas kulit sepotong halia. Kunyah perlahan-lahan selama beberapa minit atau kunyah sedikit demi sedikit.\r\n'),
(40, 'KEEMBONG', 'Daun', 'Gigitan Ular', 'Hancurkan 10 pucuk daun dan tampalkan pada permukaan yang digigit ular.'),
(41, 'NONA SRIKAYA', 'Daun', 'Pengsan', 'Jika pesakit bernafas dan denyutan nadinya kuat, hancurkan daun nono serikaya. Biarkan dia menghidu bau sarinya. Letakkan di atas hidung agar dihidunya. Biarkan dia menghidu hingga peningnya hilang atau dia sedar dari pengsannya.\r\n'),
(42, 'MANGGA', 'Kulit Kayu', 'Sakit Sendi Badan', 'Rebus sekerat kulit pohon mangga yang dicincang. Sehelai tuala dibasahkan menggunakan air rebusan panas tadi dan diletakan di atas kepala pesakit ketika tidur.'),
(43, 'MANGGA', 'Getah Pokok Mangga', 'Kudis', 'Campurkan dengan sabati getah dari batang ataupun kulit pokok mangga dengan minyak. Bubuhkan pada kudis, 2 kali sehari setiap selesai mandi dan pada malam hari sebelum tidur.\r\n'),
(44, 'PETOLA', 'Daun', 'Buasir', 'Cuci dan cincang kira-kira 20 helai daun petola dan rebus dalam 8 liter air selama 10 minit. Saring dan gunakan air rebusan panas ini untuk duduk rendam.'),
(45, 'UBI KAYU', 'Tepung Kanji Ubi Kayu', 'Alahan', 'Larutkan Kanji dengan air sejuk dalam sebuah besen kecil. Campurkan kanji tersebut dalam tab dan rendamkan pesakit dalam tab tersebut.\r\n'),
(46, 'BUNGA CEMPAKA', 'Getah Pokok Cempaka', 'Alahan', 'Peras getah atau sari dari daun bunga cempaka dan batangnya. Campurkan getah tadi dengan minyak kelapa. Gosokan campuran itu pada kulit yang terserang 2 kali sehari.\r\n'),
(47, 'HEMPEDU BERUANG', 'Hempedu Beruang', 'Lebam', 'Celupkan hempedu beruang yang telah diikat ke dalam cawan kecil selama tiga kali. Bagi lebam, sapukan air celupan tersebut ke atas lebam pesakit.\r\n'),
(48, 'HEMPEDU BERUANG', 'Hempedu Beruang', 'Pendarahan Dalaman', 'Celupkan hempedu beruang yang telah diikat dalam cawan kecil selama tiga kali. Bagi pesakit yang mengalami pendarahan dalaman yang serius berikan pesakit minum air celupan tersebut.'),
(49, 'RAJA KAYU', 'Daun', 'Alahan', 'Hancurkan daun raja kayu muda dan gosokkan pada bahagian yang terserang hingga bebas dari gatal-gatal.'),
(50, 'RAJA KAYU', 'Daun', 'Kurap', 'Cincang daun raja kayu dan lekatkan pada bahagian yang berkurap.\r\n\r\n'),
(51, 'BELIMBING MANIS', 'Daun', 'Demam', 'Rebus 2 cawan daun belimbing yang dicincang di dalam 2 liter air selama 10 minit. Air tersebut kemudainnya disaring dan disejukkan selama 2 jam. Gunakan air ini berserta tuala kemudian diletakan di atas kepala pesakit.\r\n'),
(52, 'BELIMBING MANIS', 'Daun', 'Cacar Air', 'Hancurkan atau cincang daun belimbing muda dan ambil sarinya. Bubuhkan sari pada kulit atau luka untuk menghilangkan rasa gatal dan jangan gosokan sari itu pada kulit.\r\n'),
(53, 'BELIMBING BULUH', 'Daun', 'Demam', 'Rebus 3 cawan daun belimbing yang dicincang ke dalam 4 liter air selama 15 minit dan kemudiannya disaring. Gunakan air rebusan tersebut untuk mandian (sejuk atau panas)\r\n'),
(54, 'BELIMBING BULUH', 'Daun', 'Buasir', 'Rebus 3 cawan daun segar yang dicincang ke dalam 8 liter air selama 10 minit dan kemudiannya disaring. Gunakan air rebusan panas ini untuk duduk rendam pesakit.\r\n'),
(55, 'BELIMBING BULUH', 'Buah Belimbing Buluh', 'Benguk', 'Cincang dan tumbuk hingga hancur belimbing buluh segar. Tampalkan belimbing tadi pada bahagian yang bengkak selama 30 minit dan diulang 3 kali sehari.\r\n'),
(56, 'KUNYIT', 'Kunyit', 'Kelimumur', 'Tumbuk kunyit dan gosok atau urutkan kunyit tersebut pada kulit kepala dan rambut. Biarkan semalaman dan cuci dengan syampo keesokan paginya.\r\n'),
(57, 'KUNYIT', 'Kunyit', 'Perut Berangin', 'Cincang dan rebus sepenggal kunyit di dalam 2 gelas air selama 10 minit. Minum 1 cawan air rebusan tersebut setiap 4 jam bagi orang dewasa.'),
(58, 'KUNYIT', 'Kunyit', 'Sakit Sendi Badan', 'Cincang atau lumatkan sebatang kunyit dan campur dengan minyak kelapa. Tampalkan pada sendi yang sakit sepanjang malam.'),
(59, 'PERIA', 'Akar(1) Buah Peria(2) Biji Peria(3)', 'Buasir', 'Cuci dan cincang akar, buah serta biji peria. Peras airnya dan campur dengan minyak. Gunakan sukatan setengah cawan akar, buah dan bijinya yang dicincang bersamaan dengan sesudu minyak makan. Basahi kapas dengan campuran tersebut kemudian tampalkan pada bahagian buasir setelah duduk rendam.\r\n'),
(60, 'KEMANGI', 'Daun', 'Kaki Makan Air', 'Cincang daun kemangi dan sarinya diambil. Bubuhkan sari tersebut terus pada bahagian yang berjangkit setelah merendanya dengan air putrawali.'),
(61, 'PATAWALI', 'Daun', 'Kaki Makan Air', 'Cincang daunnya dan ambil sarinya, bubuhkan sari tersebut terus pada bahagian yang terjangkit.'),
(62, 'PATAWALI', 'Batang Putrawali', 'Sakit Perut', 'Potong sebatang putrawali sepanjang 3 inchi, potong dan bershikan dan tuangkan dengan air panas dan tungu selama 15 minit sebelum diminum.'),
(63, 'PATAWALI', 'Batang Putrawali', 'Malaria', 'Potong sebatang putrawali sepanjang 3 inchi, potong dan bershikan dan tuangkan dengan air panas dan tungu selama 15 minit sebelum diminum.'),
(64, 'KEMBANG EMAS', 'Daun(1) Bunga(2)', 'Bisul', 'Hancurkan 3 keping daun dan 2 bunga kembang emas. Tampalkan pada bisul 2 kali sehari, pagi dan petang.'),
(65, 'BUNGA TAHI AYAM', 'Daun(1) Bunga(2)', 'Batuk', 'Rebus 1 cawan daun serta bunga segar yang dicincang dalam 2 gelas air selama 15 minit dan diminum.'),
(66, 'BUNGA TAHI AYAM', 'Daun', 'Benguk', 'Tumbuk dan cincang daunnya dan tampalkan pada kelenjar yang bengkak selama 30 minit, 3 kali sehari.'),
(67, 'KEKWA', 'Daun(1) Bunga(2)', 'Batuk', 'Rebus 1 cawan daun kering yang dicincang serta bunganya atau Â½ cawan daun segar bersama bunganya dlam 2 gelas air selama 15 minit.'),
(68, 'KEKWA', 'Daun', 'Perut Berangin', 'Tumbuk dan cincang daun kekwa dan campurkan dengan minyak kelapa. Gosok campuran minyak pada perut dan dibalut dengan kain pembalut. Biarkan kain pembalut semalaman atau sekurang-kurangnya 4 jam.\r\n'),
(69, 'SETAWAR', 'Daun', 'Gigitan Nyamuk', 'Tumbuk dan peras 5-10 helai daun setawar dan gosokkan pada bekas gigitan nyamuk. 3 kali sehari.'),
(70, 'SETAWAR', 'Daun', 'Terkehel', 'Hancurkan 10 helai daun setawar dan tampalkan pada bahagian yang sakit selama 30 minit, 3 kali sehari.'),
(71, 'SETAWAR', 'Daun', 'Sakit Gigi', 'Hancurkan daun setawar dan tampalkan pada muka yang bengkak.'),
(72, 'NENAS', 'Buah Nenas', 'Cacingan', 'Makan 2-3 hiris setiap masa makan selama seminggu. Perhatikan apabila cacing keluar pada malam hari melalui dubur, basahi kapas dengan minyak dan keluarkan cacing dengan kapas yang dicelup dalam minyak. Lakukan in setiap malam selama seminggu.\r\n'),
(73, 'NANGKA', 'Getah Pokok Nangka', 'Bisul', 'Ambil cairan dari batang pokok nangka dan campurkan dengan sedikit cuka. Panaskan campuran tadi dan gunakan untuk tampalan pada permukaan bisul.'),
(74, 'PEGAGA', 'Daun', 'Ruam Kulit Gatal', 'Cincang 10 keping daun pegaga dan tampalkan sebagai pada bahagian yang terkena ruam setelah rendam kaki dengan air panas dan dibiarkan semalaman.'),
(75, 'KOKO', 'Biji Koko', 'Ruam Kulit Gatal', 'Goreng tanpa minyak 10 biji koko dan ditumbuk. Tampalkan sebagai pada bahagian yang terkena ruam setelah rendam kaki dengan air panas dan dibiarkan semalaman.'),
(76, 'SENTOK', 'Kulit Kayu', 'Kelimumur', 'Rendam kulit sentok dalam besen yang berisi air sejuk selama 30 minit sebelum dicampur dengan syampu. Peras sari dalam air dan masukkan sari dari 3 limau kasturi. Gunakan campuran tersebut sebagai syampo untuk kelimumur.\r\n'),
(77, 'SEMALU', 'Daun', 'Benguk', 'Tumbuk daun-daunnya dan jadikan adunan. lekatkan pada kelenjar yang bengkak setelah di lapkan dengan air sejuk. Lekatkan selama 30 minit, 3 kali sehari.\r\n'),
(78, 'SEMALU', 'Daun', 'Cirit-birit', 'Rebus 1 cawan daun semalu yang dicincang dalam 2 gelas air selama 10 minit dan diminum.'),
(79, 'TEMBAKAU', 'Daun', 'Kurap', '(Mandi air rebusan jika terserang rambut dan kepala)\r\nRebus 10 helai daun tembakau segar dalam 2 litter air selama 15 minit. Sejukkan dan disaring. Campurkan dengan air secukupnya untuk memenuihi basen 12 liter. Syampokan rambut sekali sehari sehngga sembuh.'),
(80, 'TERUNG', 'Daun', 'Gusi Bengkak', 'Rebus 3 daun terung dalam 2 gelas air selama 10 minit. Gunakan air rebusannya untuk cuci mulut dan ubat kumur.\r\n'),
(81, 'SIRIH', 'Daun', 'Bau Badan', 'Peras sari dari daun sirih dan campur dengan sari limau kasturi. Gunakan sebagai deodorant setiap kali selesai mandi dan sebelum tidur.\r\n'),
(82, 'ATI-ATI', 'Daun', 'Terkehel', 'Hancurkan 10 helai daun ati-ati dan tampalkan pada bahagian terkehel selama 10 minit, 3 kali sehari.'),
(83, 'ATI-ATI', 'Daun', 'Luka Berdarah', 'Cuci daun muda, hancurkan dan ambil sarinya. Titiskan beberapa titis airnya ke atas luka. letakkan daun yang telah hancur itu ke atas luka. balut rapat tetapi tidak terlalu ketat agar peredaran darah tidak terganggu.\r\n'),
(84, 'OLEANDER', 'Daun(1)  Ranting(2)', 'Gigitan Ular', '-Tumbuk 10 helai daun dan setangkai rantingnya.\r\n-Tempelkan pada luka setelah darah dikeluarkan.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `herb_information`
--

CREATE TABLE `herb_information` (
  `herb_information_id` int(11) NOT NULL,
  `herb_name` varchar(255) NOT NULL,
  `herb_name_eng` varchar(255) NOT NULL,
  `herb_picture` varchar(255) DEFAULT NULL,
  `sci_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `herb_information`
--

INSERT INTO `herb_information` (`herb_information_id`, `herb_name`, `herb_name_eng`, `herb_picture`, `sci_name`) VALUES
(1, 'ASAM JAWA', 'Tamarind', 'Gambar-Buah-Asam-Jawa.jpg', 'Tamarindus indica L.'),
(2, 'BETIK', 'Papaya', 'Betik.JPG', 'Carica papaya'),
(3, 'DURIAN BELANDA', 'Soursop', 'Durian_Belanda.jpg', 'Annona muricata'),
(4, 'JAMBU BATU', 'Guava', 'Jambu Batu.jpg', 'Psidium guajava L.'),
(5, 'KELAPA MAWAR', 'Coconut', 'Kelapa Mawar.jpg', 'Cocos nucifera'),
(6, 'LALANG', '', 'lalang.jpg', ''),
(7, 'LALANG', 'Cogon Grass', 'lalang.jpg', 'Imperata cylindrical L. Beauv.'),
(8, 'SEMBUNG', 'Ngai camphor', 'Sembung.JPG', 'Blumea balsamifera'),
(9, 'RAMBUTAN', '', 'Rambutan.jpg', ''),
(10, 'RAMBUTAN', '', 'Rambutan.jpg', ''),
(11, 'RAMBUTAN', 'Rambutan', 'Rambutan.jpg', 'Nephelium lappaceum'),
(12, 'PANDAN', 'Fragrant Screwpine', 'pandan.jpg', 'Pandanus odoratissimus L.'),
(13, 'SERAI', '', 'serai.JPG', ''),
(14, 'SERAI', 'Lemon Grass, Ginger Grass, Sweet-Rush', 'serai.JPG', 'Andropogon citratus DC Stapf'),
(15, 'MISAI KUCING', '', 'misai kucing.jpg', ''),
(16, 'MISAI KUCING', '', 'misai kucing.jpg', ''),
(17, 'MISAI KUCING', 'Orthosiphon aristatus', 'misai kucing.jpg', 'Orthosiphon aristatus'),
(18, 'PISANG', '', 'pisang.jpg', ''),
(19, 'PISANG', 'Banana', 'pisang.jpg', 'Musa paradisiacal L.'),
(20, 'LIMAU PURUT', '', 'limau purut.jpg', ''),
(21, 'LIMAU PURUT', 'Chinese Orange', 'limau purut.jpg', 'Citrus microcarpa Bunge'),
(22, 'RUMBIA', 'Metroxylon sagu', 'rumbia.jpg', 'Metroxylon sagu'),
(23, 'SENDUDUK', 'Melastoma', 'senduduk.JPG', 'Melastoma'),
(24, 'GELENGGANG', 'Ringworm bush or shrub', 'gelenggang.jpg', 'Cassia alata L.'),
(25, 'Kayu Arang', '', 'arang.jpg', ''),
(26, 'KAYU ARANG', '', 'arang.jpg', ''),
(27, 'KAYU ARANG', 'Ebony', 'arang.jpg', 'Diospyros'),
(28, 'MANGGIS', 'Purple Mangosteen', 'mangis.jpg', 'Garcinia mangostana'),
(29, 'LIDAH BUAYA', '', 'lidah buaya.jpg', ''),
(30, 'LIDAH BUAYA', '', 'lidah buaya.jpg', ''),
(31, 'LIDAH BUAYA', '', 'lidah buaya.jpg', ''),
(32, 'LIDAH BUAYA', 'Aloe vera, Cruacoa Aloe', 'lidah buaya.jpg', 'Aloe Barbadensis Mill'),
(33, 'BAWANG PUTIH', '', 'bawangputih.jpg', ''),
(34, 'BAWANG PUTIH', '', 'bawangputih.jpg', ''),
(35, 'BAWANG PUTIH', 'Garlic', 'bawangputih.jpg', 'Allium sativum'),
(36, 'HALIA', 'Ginger', 'halia.jpg', 'Zingiber officinale Roscoe'),
(37, 'KEEMBONG', 'Touch Me Not Balsam', 'keembong.jpg', 'Impatiens balsamina L.'),
(38, 'NONA SRIKAYA', 'Sugar Apple, Sweet Sop', 'srikaya7.jpg', 'Anona squamosa L.'),
(39, 'MANGGA', '', 'buah mangga.jpg', ''),
(40, 'MANGGA', 'Mango', 'buah mangga.jpg', 'Mangifera indica Linn.'),
(41, 'PETOLA', 'Bath Sponge', 'petola.jpg', 'Luffa acutangula Linn.'),
(42, 'UBI KAYU', 'Tapioca Plant, Cassava, Manioc', 'ubi kayu.jpg', 'Manihot esculenta Crantz'),
(43, 'BUNGA CEMPAKA', 'Champak', 'cempaka.jpg', 'Magnolia champaca'),
(44, 'HEMPEDU BERUANG', '', 'pundi.jpg', ''),
(45, 'HEMPEDU BERUANG', 'Bear Bile', 'pundi.jpg', '-'),
(46, 'RAJA KAYU', '', 'Raja Kayu.jpg', ''),
(47, 'RAJA KAYU', 'Golden Shower, Pudding Pipe Tree', 'Raja Kayu.jpg', 'Cassia fistula L.'),
(48, 'BELIMBING MANIS', '', 'belimbing-manis.jpg', ''),
(49, 'BELIMBING MANIS', 'Starfruit', 'belimbing-manis.jpg', 'Averrhoa carambola L.'),
(50, 'BELIMBING BULUH', '', 'belimbingbuluh.jpg', ''),
(51, 'BELIMBING BULUH', '', 'belimbingbuluh.jpg', ''),
(52, 'BELIMBING BULUH', 'Bilimbi', 'belimbingbuluh.jpg', 'Averrhoa bilimbi'),
(53, 'KUNYIT', '', 'kunyit.jpg', ''),
(54, 'KUNYIT', '', 'kunyit.jpg', ''),
(55, 'KUNYIT', 'Turmeric, Round Turmeric', 'kunyit.jpg', 'Curcuma domestica Valet'),
(56, 'PERIA', 'Bitter Mellon', 'peria.jpg', 'Momordica charantia'),
(57, 'KEMANGI', 'Sweet Basil', 'Kemangi.jpg', 'Oscimum basilicum L.'),
(59, 'PATAWALI', '', 'patawali.jpg', ''),
(60, 'PATAWALI', 'Tinospara Crispa', 'patawali.jpg', 'Tinospora rumphii Boerl'),
(61, 'KEMBANG EMAS', 'Marigold', 'kembang emas.jpg', 'Tagetes erecta Linn.'),
(62, 'BUNGA TAHI AYAM', '', 'bunga tahi ayam.jpg', ''),
(63, 'BUNGA TAHI AYAM', 'Coronitas, Lantana Weed, Common Lantana', 'bunga tahi ayam.jpg', 'Lantana camara L.'),
(64, 'KEKWA', '', 'kekwa.jpg', ''),
(65, 'KEKWA', 'Indian Chrysanthemum', 'kekwa.jpg', 'Chrysanthemum indicum L.'),
(66, 'SETAWAR', '', 'setawar.jpg', ''),
(67, 'SETAWAR', '', 'setawar.jpg', ''),
(68, 'SETAWAR', 'Life Plan', 'setawar.jpg', 'Kalanchoe pinnata (Lam.) Pers.'),
(69, 'NENAS', 'Pineapple', 'nenas.jpg', 'Ananas comosus'),
(70, 'NANGKA', 'Jackfuit', 'nangka.jpg', 'Artocarpus heterophyllus Lmk.'),
(71, 'PEGAGA', 'Indian Hydocotyle', 'pegaga_gajah.jpg', 'Centella asiatica L.'),
(72, 'KOKO', 'Cocoa Plant', 'pokok koko.jpg', 'Theobroma cacao L.'),
(73, 'SENTOK', 'Gugo', 'sentok.jpg', 'Entada Phaseoloides'),
(74, 'SEMALU', '', 'semalu.jpg', ''),
(75, 'SEMALU', 'Sensitive Plant, Mimosa', 'semalu.jpg', 'Mimosa pudica L.'),
(76, 'TEMBAKAU', 'Tabacco', 'tembakau.jpg', 'Nicotina tabacum L.'),
(77, 'TERUNG', 'Eggplant', 'terung.JPG', 'Solanum melongena L.'),
(78, 'SIRIH', 'Betel Leaf Pepper', 'sirih.JPG', 'Piper beetle L.'),
(79, 'ATI-ATI', '', 'Ati-ati.JPG', ''),
(80, 'ATI-ATI', 'Solenostemon', 'Ati-ati.JPG', 'Solenostemon'),
(81, 'OLEANDER', 'Oleander', 'oleander.png', 'Nerium oleander');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `question_title` varchar(255) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `hp` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `answered_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question_title`, `question`, `answer`, `name`, `hp`, `email`, `answered_by`) VALUES
(1, 'Cara Memproses Akar Buah Betik', 'Bagaimanakah cara memproses akar buah betik untuk digunakan dalam perubatan? Selain itu, bahagian manakah akar tersebut harus diambil.', NULL, 'Amirul Rahman', '011-8991265', 'amirul@gmail.com', ''),
(2, 'Cara Mengeringkan Kulit Buah Manggis', 'Terangakan secara terpirinci proses menghasilkan kulit buah manggis agar dapat digunakan dalam perubatan buasir ', 'Bersihkan kulit manggis dan jemur hingga kering. Selepas itu, rebus kuli tersebut menggunakan 3 gelas air dan diminum ketika air masih suam.', 'Nurul Fatimah', '012-5682457', 'fatimah@google.com', 'Puan Maimunah'),
(3, 'Soalan Nenas', 'Bagaimanakah mengunakan dan menghasilan ubatan dari nenas ', ' keringkan nenas dan rebus..', 'HASNAH', '013559989', 'hasnah.com', 'Melati');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `herbs`
--
ALTER TABLE `herbs`
  ADD PRIMARY KEY (`herb_id`);

--
-- Indexes for table `herb_information`
--
ALTER TABLE `herb_information`
  ADD PRIMARY KEY (`herb_information_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `disease_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `herbs`
--
ALTER TABLE `herbs`
  MODIFY `herb_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `herb_information`
--
ALTER TABLE `herb_information`
  MODIFY `herb_information_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
