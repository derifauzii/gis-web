-- --------------------------------------------------------
-- Host:                         localhost
-- Versi server:                 5.7.24 - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk db_gis
CREATE DATABASE IF NOT EXISTS `db_gis` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_gis`;

-- membuang struktur untuk table db_gis.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel db_gis.admin: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`) VALUES
	(1, 'admin', 'admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- membuang struktur untuk table db_gis.faskes
CREATE TABLE IF NOT EXISTS `faskes` (
  `id_faskes` int(100) NOT NULL AUTO_INCREMENT,
  `nama_faskes` varchar(255) NOT NULL,
  `alamat` tinytext NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  PRIMARY KEY (`id_faskes`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel db_gis.faskes: ~19 rows (lebih kurang)
/*!40000 ALTER TABLE `faskes` DISABLE KEYS */;
INSERT INTO `faskes` (`id_faskes`, `nama_faskes`, `alamat`, `telepon`, `latitude`, `longitude`) VALUES
	(1, 'Puskesmas Dinoyo', 'Jalan Mayjend M.T. Haryono, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', '(0341) 581442', '-7.943171209402488', '112.61203987333857'),
	(2, 'Puskesmas Mojolangu', 'Jl. Sudimoro No.17 A, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142', '(0341) 482905', '-7.938372994281878', '112.6322277793458'),
	(3, 'Puskesmas Kendalsari', 'Jl. Cengger Ayam I No.8, RW.02, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '(0341) 478215', '-7.946103656220934', '112.63065336090774'),
	(4, 'RSI Unisma', 'Jalan Mayjen Haryono No.139, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur', '(0341)551356', '-7.9402068079102035', '112.60898560084286'),
	(5, 'Klinik Daqu Sehat New', 'Jl. Sunan Muria No.2, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', '(0341)2991199', '-7.954009727640979', '112.60651885603258'),
	(6, 'Klinik CVT', 'JL. M.T. Haryono, No. 139, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144', '(0341)551356', '-7.942705643115088', '112.60987955112145'),
	(7, 'RS Universitas Brawijaya', 'Jl. Soekarno - Hatta, Lowokwaru, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '(0341)403000', '-7.941223107576198', '112.62154427069426'),
	(8, 'Praktek Dr. Rejekining Diah', 'Jalan Mayjend Jl. MT. Haryono No.110, Dinoyo, Lowokwaru, Malang City, East Java 65144', '(0341)7038108', '-7.941864919393064', '112.60928183311215'),
	(9, 'Poliklinik UMMI Malang', 'Jl. Gajayana No.50, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144', 'tidak tersedia', '-7.9513954438093934', '112.60881869532663'),
	(10, 'Puskesmas Pembantu Merjosari', 'Jl. Mertojoyo, Merjosari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'tidak tersedia', '-7.945787395502137', '112.60370851813315'),
	(11, 'Klinik UB', 'Jl. MT. Haryono, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65113', '(0341)571197', '-7.950698294273228', '112.61564562658472'),
	(12, 'Poliklinik UM ', 'Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', '(0341)551312', '-7.961868185980653', '112.61899245112164'),
	(13, 'Klinik Panti Rahayu', 'Jl. Simpang Borobudur No.1, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142', '(0851)73021670', '-7.939793824790993', '112.63864780204793'),
	(14, 'Klinik Rawat Inap Amanah Husada', 'Jl. Kalpataru No.20, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '(0341)410850', '-7.950707645527666', '112.63147120327122'),
	(15, 'Klinik Istana Sehat Abadi', 'Jl. Cengkeh No.23, RW.02, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '0812 16073408', '-7.946816605985887', '112.62312453640672'),
	(16, 'Klinik Widya Husada', 'Jl. Terusan Sudimoro No.16, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142', '(0341)4382958', '-7.938222901901858', '112.63232833824135'),
	(17, 'Klinik Argaraya Medika', 'Jl. Kalpataru No.39, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '0858 06445804', '-7.950554673739549', '112.6298866560324'),
	(18, 'Puskesmas Pembantu Jatimulyo', 'Jl. Simbar Menjangan, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', 'tidak tersedia', '-7.944302444902429', '112.61713005542096');
/*!40000 ALTER TABLE `faskes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
