-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 08:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(2, 'Soho  3 Seat Sofa', 'Sederhana dengan garis lurus, ukuran: L205 x P87 x T81 cm, cocok untuk rumah bergaya kontemporer, perkiraan waktu produksi: 8-10 minggu, furnitur dirancang dan diproduksi di Indonesia, kain seperti yang ditunjukkan pada gambar: tipe 1 - Tenunan Alami', 'Living Room', 8000000, 142, 'sofa1.png'),
(4, 'Nara Daybed', 'Memiiki ukuran: L209 x P97 x T90 cm, termasuk satu bantal besar (55x55), termasuk satu bantal kecil (45x45), cocok untuk rumah kontemporer dan modern, perkiraan waktu produksi: 8 minggu, furniture dirancang dan diproduksi di Indonesia.', 'Living Room', 5000000, 148, 'sofa2.png'),
(6, 'Boston Oval Coffee Table', 'Terbuat dari kayu solid & veneer, hasil akhir semi-gloss, bahan kaca meja atas, ukuran: L114 x P87 x T42 cm, cocok untuk rumah bergaya modern atau klasik, perkiraan waktu produksi: 12 minggu, dirancang dan diproduksi di Indonesia.', 'Living Room', 350000, 149, 'boston.png'),
(7, 'Sedona Dining Chair', 'Terdiri dari punggung berumbai, desain unik dan berkelas dengan sandaran sedikit miring, dasar kursi lebih lebar yang menyempit ke arah atas, kaki kayu yang sedikit melebar, ukuran: L54 x P63 x T96 cm, cocok untuk rumah berkelas atau modern, perkiraan waktu produksi: 12 minggu, furnitur dirancang dan diproduksi di Indonesia.', 'Dining Room', 3000000, 149, 'sedona.png'),
(8, 'Presidio Dining Table', 'Terdiri dari dua pilihan ukuran: untuk 6 atau 8 orang, kaki meja melebar, furnitur dirancang dan diproduksi di Indonesia, desain dua warna: kaki hitam dengan bagian atas serat kayu , dua pilihan warna untuk bagian atas: oak standar atau 010 oak yang lebih gelap, perkiraan waktu produksi: 12 minggu.', 'Dining Room', 150000, 50, 'presidio.png'),
(9, 'Newbury Sideboard', 'Terdiri dari 9 laci, luas untuk penyimpanan ekstra, berwarna cokelat, hasil akhir mengkilap, kaki lurus, dimensi : L180 x P60 x T90 cm, perkiraan Waktu Produksi: 12 minggu, furnitur dirancang dan diproduksi di Indonesia. ', 'Dining Room', 60000, 50, 'newbury.png'),
(10, 'Camille Bed ', 'Lapisan mengkilap piano, cocok untuk rumah bergaya modern atau klasik, perkiraan waktu produksi: 10-12 minggu, dirancang dan diproduksi di Indonesia, (kasur tidak termasuk).', 'Bedroom ', 85000, 35, 'camille.png'),
(11, 'Cleopatra Bench ', 'Telah menggulung lengan, memiliki ukuran: P160 x P63 x T58 cm, cocok untuk rumah kontemporer atau klasik, perkiraan waktu produksi: 12 minggu, dirancang dan diproduksi di Indonesia.', 'Bedroom ', 50000, 35, 'cleopatra.png'),
(12, 'Newbury TV Bench', 'Memiliki empat laci dan dua kompartemen, ukuran: L220 x P45 x T60 cm, cocok untuk rumah kontemporer dan modern, perkiraan waktu produksi: 12 minggu, furnitur dirancang dan diproduksi di Indonesia.', 'Bedroom ', 35000, 50, 'newburytv.png'),
(14, 'Architecture Set of 5', 'Satu set arsitektur dari 5 karya seni berbingkai untuk menonjolkan rumah anda. Anda dapat menempatkan aksesori ini di dinding anda.Bahan: Bingkai PS hitam, anyaman ganda putih 1 mm dan anyaman hitam 1 mm, penutup akrilik transparan.Foto 36x56 cmBingkai 60x60 cm', 'Wall Art', 850000, 35, 'wallart1.png'),
(16, 'Shangrila Pilea Wall Art', 'Dimensi: 784x4x97 cm', 'Wall Art', 50000, 150, 'wallart2.png'),
(17, 'Monstera Square Wall Art', 'Seni dinding monstera bijih untuk menonjolkan rumah Anda. Anda dapat menempatkan aksesori ini di dinding Anda.Dimensi:  60 x 60 x 6 cm ', 'Wall Art', 121, 150, 'wallart3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `gambar` text NOT NULL,
  `jasa` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `gambar`, `jasa`, `bank`, `tgl_pesan`, `batas_bayar`) VALUES
(84, 'Alan Walkerr', 'Jl. Semeru Raya', 'bukti_bca.jpg', 'JNE', 'BCA - 123456', '2022-12-08 07:46:36', '2022-12-09 07:46:36'),
(85, 'aa', 's', '', 'JNE', 'BCA - 123456', '2022-12-08 09:58:14', '2022-12-09 09:58:14'),
(86, 'ddd', 'ddd', 'woi.jpg', 'JNE', 'BCA - 123456', '2022-12-08 09:58:37', '2022-12-09 09:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 2, 'Laptop Mackbook', 1, 8000000, ''),
(2, 2, 4, 'Kamera Boy', 1, 5000000, ''),
(3, 3, 2, 'Laptop Mackbook', 1, 8000000, ''),
(4, 4, 2, 'Laptop Mackbook', 1, 8000000, ''),
(7, 7, 6, 'Sepatu Keren', 1, 350000, ''),
(8, 8, 2, 'Laptop Mackbook', 1, 8000000, ''),
(9, 9, 9, 'Jacket Jaket Baseball Wanita Korean Style', 1, 60000, ''),
(10, 10, 4, 'Kamera Boy', 1, 5000000, ''),
(11, 11, 2, 'Laptop NOPAL', 1, 8000000, ''),
(12, 12, 7, ' Famo Sweater Rajut Pria', 1, 3000000, ''),
(13, 13, 4, 'Kamera Boy', 1, 5000000, ''),
(14, 14, 4, 'Kamera Boy', 1, 5000000, ''),
(15, 15, 4, 'Kamera Boy', 1, 5000000, ''),
(16, 16, 4, 'Nara Daybed', 1, 5000000, ''),
(17, 17, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(18, 18, 4, 'Nara Daybed', 1, 5000000, ''),
(19, 19, 2, 'Soho  3 Seat Sofa', 2, 8000000, ''),
(20, 21, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(21, 22, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(22, 23, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(23, 24, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(24, 26, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(25, 28, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(26, 29, 4, 'Nara Daybed', 1, 5000000, ''),
(27, 30, 8, 'Presidio Dining Table', 1, 150000, ''),
(28, 31, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(29, 32, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(30, 35, 12, 'Newbury TV Bench', 1, 35000, ''),
(31, 37, 12, 'Newbury TV Bench', 1, 35000, ''),
(32, 39, 17, 'Monstera Square Wall Art', 1, 121, ''),
(33, 43, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(34, 45, 9, 'Newbury Sideboard', 1, 60000, ''),
(35, 45, 4, 'Nara Daybed', 1, 5000000, ''),
(36, 47, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(37, 49, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(38, 53, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(39, 54, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(40, 55, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(41, 57, 12, 'Newbury TV Bench', 1, 35000, ''),
(42, 59, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(43, 61, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(44, 66, 12, 'Newbury TV Bench', 1, 35000, ''),
(45, 67, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(46, 68, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(47, 69, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(48, 70, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(49, 71, 4, 'Nara Daybed', 1, 5000000, ''),
(50, 72, 4, 'Nara Daybed', 1, 5000000, ''),
(51, 73, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(52, 74, 4, 'Nara Daybed', 1, 5000000, ''),
(53, 75, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(54, 76, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(55, 77, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(56, 78, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(57, 79, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(58, 80, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(59, 81, 4, 'Nara Daybed', 1, 5000000, ''),
(60, 82, 6, 'Boston Oval Coffee Table', 1, 350000, ''),
(61, 83, 7, 'Sedona Dining Chair', 1, 3000000, ''),
(62, 84, 2, 'Soho  3 Seat Sofa', 1, 8000000, ''),
(63, 85, 4, 'Nara Daybed', 1, 5000000, ''),
(64, 86, 2, 'Soho  3 Seat Sofa', 1, 8000000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN 
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'user', 'user', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
