-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2016 at 01:20 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sevenclothing_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `br_id` int(11) NOT NULL,
  `br_nm` varchar(100) NOT NULL,
  `id_kategori` char(3) NOT NULL,
  `idsub_kategori` char(3) NOT NULL,
  `harga` float NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tgl_insert` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`br_id`, `br_nm`, `id_kategori`, `idsub_kategori`, `harga`, `gambar`, `deskripsi`, `tgl_insert`) VALUES
(1, 'Rock Shirt Men', 'P01', 'S01', 72900, 'gambar/man/t-shirt/Rock Shirt Men.png', 'Cotton\r\nRegular Fit\r\nComfortable\r\nCasual\r\nStylish', '2016-01-03 00:00:00'),
(2, 'Rocks Knit Men''s T-Shirt ', 'P01', 'S01', 124750, 'gambar/man/t-shirt/Rocks Knit Men''s T-Shirt .png', 'Material cotton\r\nGarment wash\r\nComfortable to wear\r\nNeat stitching\r\nAttractive design', '2016-01-03 00:00:00'),
(3, 'Causel 3D T-shirt Men', 'P01', 'S01', 63000, 'gambar/man/t-shirt/Causel 3D T-shirt Men.png', 'Cotton Blended\r\nBlack\r\nShort Sleeves\r\nCrewneck\r\n3D\r\nCausel T-shirt\r\nHand Print\r\nKorean Style\r\nMen''s Fashion', '2016-01-03 00:00:00'),
(4, 'Poly Tricot Jacket', 'P01', 'S02', 210000, 'gambar/man/jacket/Poly Tricot Jacket.png', 'available in two colours, in sizes S to 3XL.\r\nEssential everyday jacket with long sleeves and full zipper. \r\nDouble stripes on both arms. \r\nSide pockets. \r\nEasy-care 100% polyester is machine-washable', '2016-01-03 00:00:00'),
(5, 'Cooper&Rocks Jacket', 'P01', 'S02', 629000, 'gambar/man/jacket/Cooper&Rocks Jacket.png', 'Signature by Levi Strauss & Co. Men''s Denim Trucker Jacket\r\nRelaxed fit\r\nButtons at front placket, chest pockets and cuffs\r\nStraight back yoke\r\nAdjustable button waistband tab\r\nSide pockets\r\n30"" long (size L)\r\n100% cotton\r\n', '2016-01-03 00:00:00'),
(6, 'Athletic Jacket', 'P01', 'S02', 238000, 'gambar/man/jacket/Athletic Jacket.png', 'High neck\r\nLong sleeves with elasticized cuff\r\nFront full zipper\r\nHidden hood with storeaway pocket with velcro closure\r\nSide zippered pocket\r\nAvailable in a variety of colours\r\nEmbroidered logo detail at hem 100% Polyester', '2016-01-03 00:00:00'),
(7, 'Cooper Denim Shirt', 'P01', 'S03', 244750, 'gambar/man/kemeja/Cooper Denim Shirt.png', 'Material cotton\r\nOmbre wash\r\nComfortable to wear\r\nNeat stitching\r\nAttractive design', '2016-01-03 00:00:00'),
(8, 'Belladiary Long Sleeve', 'P01', 'S03', 292000, 'gambar/man/kemeja/Belladiary Long Sleeve.png', 'No Warranty\r\nMachine washable - Cold (30?ax)(Recommended hand wash cool water)\r\nMaterial: Cotton\r\nBody Blouse\r\nSlim Fit\r\nmens see through shirts\r\ncamisa masculina\r\nmens designer clothes\r\ndenim shirts\r\nfloral shirt', '2016-01-03 00:00:00'),
(9, 'Dark Denim Shirt', 'P01', 'S03', 89900, 'gambar/man/kemeja/Dark Denim Shirt.png', 'Material Cotton Denim\r\nModel Regular Fit\r\nCasual Design', '2016-01-03 00:00:00'),
(10, 'Hammer Polo', 'P01', 'S04', 299900, 'gambar/man/polo/Hammer Polo.png', 'Quality soft material\r\nCasual design\r\nShort sleeve\r\nComfortable to wear\r\nEasily washed', '2016-01-03 00:00:00'),
(11, 'Sleeve polo', 'P01', 'S04', 212000, 'gambar/man/polo/Sleeve polo.png', 'Products of Production Manufacturing, not home\r\nStitches design neat\r\nCotton\r\nSizes S-XL\r\nCheap price', '2016-01-03 00:00:00'),
(12, 'Slim Fit Polo', 'P01', 'S04', 423000, 'gambar/man/polo/Slim Fit Polo.png', 'Slim Fit Stand Collar With 5 Button Placket\r\nBreathable And Also Soft\r\nStripes Splice Cuffs And Also Hems\r\nProduct Washable\r\nAny Your Queries,Please Contact Us Freely', '2016-01-03 00:00:00'),
(13, 'Bright Yellow', 'P02', 'S05', 120000, 'gambar/woman/cardigan/Bright Yellow.png', 'Main Fabric: Cotton\r\n                              Fabric main ingredients content: 65 (%)', '2016-01-03 00:00:00'),
(14, 'Jetting Buy', 'P02', 'S05', 95000, 'gambar/woman/cardigan/Jetting Buy.png', '100% Brand new & High quality, Material: Chiffon\r\n	                      Sleeve: 41CM/16.1"\r\n			      Length: 86CM/33.9"', '2016-01-03 00:00:00'),
(15, 'Cyber Batwing', 'P02', 'S05', 120000, 'gambar/woman/cardigan/Cyber Batwing.png', 'Technics: Computer Knitted, Decoration: Pockets\r\n		              Closure Type: Open Stitch, Sleeve Style: Batwing Sleeve', '2016-01-03 00:00:00'),
(16, 'Fancyqube', 'P02', 'S06', 62000, 'gambar/woman/dress/Fancyqube.png', 'Fabric Type:    Chiffon, Above Knee,Print, Off the Shoulder\r\n			      Casual, Cotton,Polyester', '2016-01-03 00:00:00'),
(17, 'Hequ Short Sleeve', 'P02', 'S06', 113000, 'gambar/woman/dress/Hequ Short Sleeve.png', '100% Brand New, Cap Sleeve, Chiffon Casual Shirt,Mini Dress With Belt\r\n    			      Women Casual Dress ', '2016-01-03 00:00:00'),
(18, 'Hequ Collar Sleeveless', 'P02', 'S06', 100000, 'gambar/woman/dress/Hequ Collar Sleeveless.png', 'This dress is suitable for the summer ,it is easy to match any shoes,\r\n			      New Style,Sexy and beauty.', '2016-01-03 00:00:00'),
(19, 'Blue LAns Batwing', 'P02', 'S07', 57000, 'gambar/woman/t-shirt/Blue LAns Batwing.png', 'Material chiffon, Regular size, convenient to use, easily washed\r\n    			      neat stitching', '2016-01-03 00:00:00'),
(20, 'Fancyqube', 'P02', 'S07', 57000, 'gambar/woman/t-shirt/Fancyqube.png', 'Fancyqube clothes, for fashion design, has a unique temperament,\r\n		 	      with the world trend. Due to the difference between different monitors,\r\n 			      the picture may not reflect the actual color of the item.', '2016-01-03 00:00:00'),
(21, 'Zanzea', 'P02', 'S07', 106000, 'gambar/woman/t-shirt/Zanzea.png', 'Casual T Shirt, Chiffon, Size may be 2cm/1 inch inaccuracy due to hand measure', '2016-01-03 00:00:00'),
(22, 'Army Rose', 'P02', 'S08', 250000, 'gambar/woman/jacket/Army Rose.png', 'Military, Material:Cotton+Polyester, Color:Camo', '2016-01-03 00:00:00'),
(23, 'Petit Berry', 'P02', 'S08', 220000, 'gambar/woman/jacket/Petit Berry.png', 'Original Petit Berry by Nissen Japan, Ladies Sweatshirt \r\n   		              Soft and comfortable to wearr,good cotton Baby Terry', '2016-01-03 00:00:00'),
(24, 'Sleeve Outwear', 'P02', 'S08', 230000, 'gambar/woman/jacket/Sleeve Outwear.png', 'Style:Coat/Jacket/Boleros & Shrugs, Material:Polyester Faux Leather', '2016-01-03 00:00:00'),
(25, 'Sherpa Hoodie', 'P03', 'S09', 120000, 'gambar/kids/hoodie/SherpaHoodie.png', 'Keep baby warm in this sweet layer,\r\n					Front pockets, \r\n					Front pockets\r\n					hood lining : 100% polyester jersey ', '2016-01-02 12:12:42'),
(26, 'Snow Fleece Hoodie', 'P03', 'S09', 150000, 'gambar/kids/hoodie/Snow Fleece Hoodie.png', 'With little lamb ears, \r\n					this super soft snow fleece keeps her warm, \r\n					cuddly and cute all winter!\r\n					Zip-front design\r\n					Jersey-lined hood\r\n					3D ears\r\n					Front pockets Hood lining: 100% cotton jersey', '2016-01-02 12:12:26'),
(27, 'Indigo French Terry Hoodie', 'P03', 'S09', 150000, 'gambar/kids/hoodie/Indigo French Terry Rugby Hoodie.png', 'Keep him warm and comfy in this vintage-looking sporty hoodie.\r\n					Zip-front design\r\n					Ribbed cuffs & hem\r\n					Screen-printed slogan\r\n					Front pockets\r\n					Rope-dyed indigo\r\n					Pre-washed for softness\r\n					100% French terry cotton', '2016-01-02 12:12:44'),
(28, 'Sherpa Jacket', 'P03', 'S10', 200000, 'gambar/kids/jaket/Sherpa Jacket.png', 'This soft sherpa gets sporty with matte athletic details! \r\n					With contrast binding, lining and zipper pulls, \r\n					this jacket is a stylish and comfy layer for your little guy.\r\n					Soft, fuzzy sherpa', '2016-01-02 12:12:01'),
(29, 'Carter''s Colorblock Jacket', 'P03', 'S10', 230000, 'gambar/kids/jaket/Carter''s Colorblock Jacket.png', 'Zip-front design. \r\n					Fully lined . \r\n					Side zip pockets.\r\n					100% polyester', '2016-01-03 11:14:12'),
(30, 'Lightweight Quilted Floral', 'P03', 'S10', 240000, 'gambar/kids/jaket/Lightweight Quilted Floral Bomber Jacket.png', 'With a quilted design and pretty floral print, \r\n					this zip-front bomber layers on a lot of style in one cute, \r\n					lightweight piece.\r\n					Zip-front design\r\n					Full jersey lining\r\n					Shell & lining: 100% cotton jersey\r\n					Polyester fill', '2016-01-03 00:00:00'),
(31, 'Fleece Sleepsuit', 'P03', 'S11', 110000, 'gambar/kids/sleepsuit/Fleece Sleepsuit.png', 'In soft fleece, \r\n					this sleepsuit will keep her warm and snug all night long. \r\n					A closed bottom makes sure her toes stay cozy, too!\r\n					Zip-front design\r\n					Long sleeves\r\n					Ribbed cuffs and neckline\r\n					100% polyester microfleece', '2016-01-03 00:00:00'),
(32, 'Applique Fleece Sleepsuit', 'P03', 'S11', 110000, 'gambar/kids/sleepsuit/Applique Fleece Sleepsuit.png', 'Perfect for colder nights, \r\n					this soft fleece 1-piece will keep baby warm and snug all night.\r\n					Zip-front design\r\n					Worry-free safety tab\r\n					Character appliqué\r\n					100% polyester microfleece', '2016-01-03 00:00:00'),
(33, 'Navy Little Sleepsuit', 'P03', 'S11', 100000, 'gambar/kids/sleepsuit/Navy Little Brother Sleepsuit.png', 'Crafted with durable twill, \r\n					a cinched waist and lots of pockets, \r\n					this utility jacket is just right for your stylish, \r\n					Cinched waist\r\n					Buttons at cuffs\r\n					Functional flap pockets\r\n					100% cotton twill', '2016-01-03 00:00:00'),
(34, '2-Piece Jumper Set', 'P03', 'S12', 230000, 'gambar/kids/jumper/2-Piece Jumper Set.png', 'Perfect for school or play, she''ll love wearing this leopard print French terry over soft cotton red! \r\n2-piece set Nickel-free snaps on reinforced panel \r\nAdjustable snap straps \r\n100% French terry cotton', '2016-01-03 00:00:00'),
(35, '2-Piece Cotton Bib Overall', 'P03', 'S12', 235000, 'gambar/kids/jumper/2-Piece Cotton Bib Overall Set.png', 'Super cute and comfy, \r\n					these floral French terry overalls pair up with a soft tee for an outfit that''s just right for school or play.\r\n					2-piece set\r\n					Adjustable snap straps\r\n					Snaps at the legs\r\n					Overalls: 100% French terry cotton', '2016-01-03 00:00:00'),
(36, '2-Piece Multi Jumper Set', 'P03', 'S12', 220000, 'gambar/kids/jumper/2-Piece multi Jumper Set.png', 'Perfect for school or play, she''ll love wearing this leopard print French terry over soft cotton red! \r\n2-piece set Nickel-free snaps on reinforced panel \r\nAdjustable snap straps \r\n100% cotton rib\r\n100% French terry cotton', '2016-01-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE IF NOT EXISTS `detail_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `br_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE IF NOT EXISTS `kabupaten` (
  `id_kab` int(11) NOT NULL,
  `nm_kab` varchar(50) NOT NULL,
  `id_prov` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id_kab`, `nm_kab`, `id_prov`) VALUES
(11, 'Samosir', 1),
(12, 'Binjai', 1),
(13, 'Medan', 1),
(21, 'Payakumbuh', 2),
(22, 'Bukittinggi', 2),
(23, 'Padang', 2),
(31, 'Banyuasin', 3),
(32, 'Empat Lawang', 3),
(33, 'Palembang', 3),
(41, 'Jakarta Barat', 4),
(42, 'Jakarta Timur', 4),
(43, 'Jakarta Selatan', 4),
(51, 'Bandung', 5),
(52, 'Karawang', 5),
(53, 'Indramayu', 5),
(61, 'Surabaya', 6),
(62, 'Bojonegoro', 6),
(63, 'Malang', 6),
(71, 'Kendal', 7),
(72, 'Demak', 7),
(73, 'Semarang', 7),
(81, 'Bantul', 8),
(82, 'Gunung Kidul', 8),
(83, 'Kulon Progo', 8),
(92, 'Gianyar', 9),
(93, 'Bangli', 9);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` char(3) NOT NULL,
  `nama_kat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kat`) VALUES
('P01', 'Mens'),
('P02', 'Womens'),
('P03', 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pembayaran`
--

CREATE TABLE IF NOT EXISTS `konfirmasi_pembayaran` (
  `id_transaksi` int(11) NOT NULL,
  `nama_pengirim` varchar(25) NOT NULL,
  `nama_bank` varchar(25) NOT NULL,
  `no_rekening` varchar(25) NOT NULL,
  `jumlah_transfer` int(11) NOT NULL,
  `tgl_transfer` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi_pembayaran`
--

INSERT INTO `konfirmasi_pembayaran` (`id_transaksi`, `nama_pengirim`, `nama_bank`, `no_rekening`, `jumlah_transfer`, `tgl_transfer`) VALUES
(107, 'muhammad lukman fariq', 'BNI', '3663647473828288283', 429000, '2016-01-10'),
(108, 'muhammad lukman fariq', 'Mandiri', '2398286751425', 491000, '2016-01-10'),
(109, 'muhammad lukman fariq', 'BNI', '245286751480', 250000, '2016-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id_usr` int(11) NOT NULL,
  `nm_usr` varchar(25) NOT NULL,
  `email_usr` varchar(25) NOT NULL,
  `pas_usr` varchar(25) NOT NULL,
  `almt_usr` text NOT NULL,
  `id_prov` int(11) NOT NULL,
  `id_kab` int(11) NOT NULL,
  `kd_pos` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_usr`, `nm_usr`, `email_usr`, `pas_usr`, `almt_usr`, `id_prov`, `id_kab`, `kd_pos`) VALUES
(11, 'muhammad lukman fariq', 'lukman@gmail.com', 'lukman', 'gondang barat 4', 7, 73, 50664),
(13, 'darmawan', 'darmawan@gmail.com', 'darmawan', 'kramas', 7, 71, 50999),
(14, 'afifah', 'afifah@gmail.com', 'afifah', 'timoho', 5, 53, 45211),
(15, 'ifah fauziah', 'ifah@gmail.com', 'fauziah', 'tlogo sari', 7, 73, 57292),
(16, 'alfitra zaki', 'zaki@gmail.com', 'alfitra', 'anugerah', 7, 72, 50599);

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `id_prov` int(11) NOT NULL,
  `nm_prov` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `nm_prov`) VALUES
(1, 'Sumatera Utara '),
(2, 'Sumatera Barat'),
(3, ' Sumatera Selatan'),
(4, 'DKI Jakarta'),
(5, 'Jawa Barat'),
(6, 'Jawa Timur'),
(7, ' Jawa Tengah'),
(8, ' Daerah Istimewa Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `status_transaksi`
--

CREATE TABLE IF NOT EXISTS `status_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `tgl_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_transaksi`
--

INSERT INTO `status_transaksi` (`id_transaksi`, `id_user`, `status`, `tgl_update`) VALUES
(107, 11, ' waiting for confirmation', '2016-01-10'),
(108, 11, 'waiting for confirmation', '2016-01-10'),
(109, 11, 'waiting for confirmation', '2016-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategori`
--

CREATE TABLE IF NOT EXISTS `sub_kategori` (
  `idsub_kategori` char(3) NOT NULL,
  `nama_sub` varchar(100) NOT NULL,
  `id_kategori` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_kategori`
--

INSERT INTO `sub_kategori` (`idsub_kategori`, `nama_sub`, `id_kategori`) VALUES
('S01', 'T-Shirt', 'P01'),
('S02', 'Jacket', 'P01'),
('S03', 'Kemeja', 'P01'),
('S04', 'Polo Shirt', 'P01'),
('S05', 'Cardigan', 'P02'),
('S06', 'Dress', 'P02'),
('S07', 'T-Shirt', 'P02'),
('S08', 'Jacket', 'P02'),
('S09', 'Hoodie', 'P03'),
('S10', 'Jacket', 'P03'),
('S11', 'Sleep Suit', 'P03'),
('S12', 'Jumper Baby', 'P03');

-- --------------------------------------------------------

--
-- Table structure for table `tarif_pengiriman`
--

CREATE TABLE IF NOT EXISTS `tarif_pengiriman` (
  `idkab_tujuan` int(11) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif_pengiriman`
--

INSERT INTO `tarif_pengiriman` (`idkab_tujuan`, `tarif`) VALUES
(11, 95000),
(12, 90000),
(13, 93000),
(21, 87000),
(22, 85000),
(23, 80000),
(31, 75000),
(32, 70000),
(33, 73000),
(41, 30000),
(42, 30000),
(43, 30000),
(51, 27000),
(52, 25000),
(53, 28000),
(61, 20000),
(62, 23000),
(63, 22000),
(71, 8000),
(72, 10000),
(73, 6000),
(81, 15000),
(82, 18000),
(83, 15000),
(91, 40000),
(92, 45000),
(93, 47000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_usr` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `alamat_kirim` text NOT NULL,
  `id_provinsi_kirim` int(11) NOT NULL,
  `id_kabupaten_kirim` int(11) NOT NULL,
  `kodepos_kirim` int(11) NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `biaya_kirim` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_usr`, `tgl_transaksi`, `alamat_kirim`, `id_provinsi_kirim`, `id_kabupaten_kirim`, `kodepos_kirim`, `total_item`, `total_harga`, `biaya_kirim`) VALUES
(107, 11, '2016-01-10', 'gondang barat', 7, 73, 50664, 1, 429000, 6000),
(108, 11, '2016-01-10', 'gondang timur', 7, 73, 60898, 1, 491000, 6000),
(109, 11, '2016-01-10', 'timoho', 4, 41, 44444, 1, 250000, 30000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kab`),
  ADD KEY `id_prof` (`id_prov`),
  ADD KEY `id_prof_2` (`id_prov`),
  ADD KEY `id_prof_3` (`id_prov`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_usr`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indexes for table `status_transaksi`
--
ALTER TABLE `status_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD PRIMARY KEY (`idsub_kategori`);

--
-- Indexes for table `tarif_pengiriman`
--
ALTER TABLE `tarif_pengiriman`
  ADD PRIMARY KEY (`idkab_tujuan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_usr` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=110;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
