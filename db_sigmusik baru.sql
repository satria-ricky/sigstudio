-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2023 pada 01.36
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sigmusik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alat`
--

CREATE TABLE `tb_alat` (
  `id_alat` int(7) NOT NULL,
  `nama_alat` varchar(20) NOT NULL,
  `foto_alat` varchar(30) NOT NULL,
  `jenis_alat` varchar(20) NOT NULL,
  `kondisi_alat` varchar(20) NOT NULL,
  `alat_idruangan` int(7) NOT NULL,
  `alat_idstudio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_alat`
--

INSERT INTO `tb_alat` (`id_alat`, `nama_alat`, `foto_alat`, `jenis_alat`, `kondisi_alat`, `alat_idruangan`, `alat_idstudio`) VALUES
(2, 'drum', 'PHP-logo_svg.png', 'Pukul', 'Rusak', 2, 2),
(3, 'gitar', 'PHP-logo_svg1.png', 'Petik', 'Baik', 2, 2),
(4, 'nama alat', '025__Rifai_Ahmad_Yani.png', 'Pukul', 'Pukul', 4, 4),
(5, 'gitar 1', 'PHP-logo_svg1.png', 'Petik', 'Baik', 2, 2),
(6, 'gitar 2', 'PHP-logo_svg1.png', 'Petik', 'Baik', 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal_boking`
--

CREATE TABLE `tb_jadwal_boking` (
  `no_boking` int(7) NOT NULL,
  `nama_boking` varchar(30) NOT NULL,
  `tanggal_boking` date NOT NULL,
  `jam_mulai` varchar(10) NOT NULL,
  `jam_berakhir` varchar(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `boking_idruangan` int(7) NOT NULL,
  `boking_idstudio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jadwal_boking`
--

INSERT INTO `tb_jadwal_boking` (`no_boking`, `nama_boking`, `tanggal_boking`, `jam_mulai`, `jam_berakhir`, `harga`, `boking_idruangan`, `boking_idstudio`) VALUES
(1, '1', '2023-04-19', '12', '32', 44, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ruangan`
--

CREATE TABLE `tb_ruangan` (
  `id_ruangan` int(5) NOT NULL,
  `nama_ruangan` varchar(20) NOT NULL,
  `ruangan_idstudio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ruangan`
--

INSERT INTO `tb_ruangan` (`id_ruangan`, `nama_ruangan`, `ruangan_idstudio`) VALUES
(1, 'Ruang Standar', 1),
(2, 'Ruang Master', 1),
(3, 'Ruangan Rekaman', 2),
(4, 'Ruangan Standar', 2),
(5, 'Ruang Standar', 7),
(6, 'Ruang Master', 7),
(7, 'Ruangan Standar', 8),
(8, 'Ruang Khusus', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_studio`
--

CREATE TABLE `tb_studio` (
  `id_studio` int(7) NOT NULL,
  `nama_studio` varchar(25) NOT NULL,
  `alamat_studio` varchar(50) NOT NULL,
  `tahun_didirikan` int(4) NOT NULL,
  `foto_studio` varchar(50) NOT NULL,
  `longitude` varchar(25) NOT NULL,
  `latitude` varchar(25) DEFAULT NULL,
  `harga_sewa` varchar(15) NOT NULL,
  `status_studio` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_studio`
--

INSERT INTO `tb_studio` (`id_studio`, `nama_studio`, `alamat_studio`, `tahun_didirikan`, `foto_studio`, `longitude`, `latitude`, `harga_sewa`, `status_studio`) VALUES
(1, 'Big Studio', 'Jalan Pramuka No.28 Mataram Barat', 2011, 'foto', '116.106461235755', '-8.5873482549278', '40000', 'Aktif'),
(2, 'D&B Studio', 'Jalan Gunung Dieng No.2, Kota Mataram', 2018, 'foto.jpg', '116.089180311086', '-8.57891439737957', '40000', 'Aktif'),
(3, 'Darkshine Music Studio', 'Jalan Bung Karno, Pagesangan Timur, Kota Mataram', 2010, 'foto', '116.114006880401', '-8.60436992211718', '40000', 'Aktif'),
(4, 'Blackred', 'Jalan Panji Semirang No.1B, Mataram', 2011, 'foto', '116.086665119905', '-8.59311679382755', '45000', 'Aktif'),
(5, 'DZM Music Studio', 'Jalan Jendral Sudirman No.23 ', 2016, 'foto', '116.109573354682', '-8.56216173023863', '35000', 'Aktif'),
(6, 'Grindever', 'Jalan Merpati No.12, Monjok, Kota Mataram', 2013, 'foto', '116.117355457115', '-8.57801262500523', '35000', 'Tidak Aktif'),
(7, 'Big Boy Studio', 'Jalan Cendrawasih No.3', 2020, 'foto', '116.1313969878', '-8.56299352497475', '40000', 'Aktif'),
(8, 'Ninner Studio', 'Jalan Diponegoro No.25', 2013, '-', '116.132040717942', '-8.55819811877397', '45000', 'Aktif'),
(9, 'Ang Studio Musik', 'Jalan Lestari, RT 01, Pejeruk Bangket, Ampenan', 2015, '-', '116.090496090519', '-8.56967038882094', '35000', 'Aktif'),
(10, 'Studio Musik Rima ', 'Jalan Gotong Royong No.164A', 2010, '-', '116.093972233285', '-8.57408372911821', '40000', 'Aktif'),
(11, 'XSIS Studio', 'Jalan Arwana No.29', 2013, 'foto', '116.071911795744', '-8.58077646207717', '35000', 'Tidak Aktif'),
(12, 'Symphony Studio Music', 'Jalan Bung Karno, No.3', 2011, 'foto', '116.112831803143', '-8.59691473845855', '35000', 'Tidak Aktif'),
(13, 'Purwa Caraka Music Studio', 'JL Sriwijaya, No. 398 Blok 4, Komplek Ruko', 2018, '-', '116.114074665058', '-8.59281829389158', '40000', 'Aktif'),
(14, 'Melodic Studio', 'Jalan Catur Warga, RT.04', 2016, '-', '116.113917', '-8.587685', '40000', 'Aktif'),
(15, 'Grace Studio', 'Jalan Abdul Kadir Munsyi, No.4, Karang Bedil', 2013, '-', '116.107175', '-8.588526', '35000', 'Tidak Aktif'),
(16, 'Lombok Hardcore Studio', 'Jalan Panca Usaha No.7A', 2011, '-', '116.121780738429', '-8.58830404879259', '45000', 'Aktif'),
(17, 'Thank\'s Music Studio', 'Jalan Pancaka No.65', 2011, '-', '116.101114923475', '-8.5861079044197', '40000', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(7) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level_user` int(1) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `id_studio` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level_user`, `nama_user`, `id_studio`) VALUES
(0, 'Admin', 'Admin', 2, 'Admin Website', 0),
(1, 'big_studio', 'pass', 1, 'Admin Big Studio', 1),
(10, 'dnbmusic', 'pass', 1, 'Admin D&B Music', 2),
(11, 'darkshine', 'pass', 1, 'Admin Darkshine Music Studio', 3),
(12, 'blackred', 'pass', 1, 'Admin Blackred Studio', 4),
(13, 'dzm', 'pass', 1, 'Admin DZM Music Studio', 5),
(14, 'bigboy', 'pass', 1, 'Admin Big Boy Studio', 7),
(15, 'ninner', 'pass', 1, 'Admin Ninner Studio', 8),
(16, 'rimastudio', 'pass', 1, 'Admin Studio Musik Rima', 9),
(17, 'angstudio', 'pass', 1, 'Admin Ang Music Studio', 10),
(18, 'pwc', 'pass', 1, 'Admin Purwa Caraka Music Studi', 13),
(19, 'melodic', 'pass', 1, 'Admin Melodic Studio', 14),
(20, 'hardcore', 'pass', 1, 'Admin Lombok Hardcore', 16),
(21, 'thanks', 'pass', 1, 'Admin Thank\'s Music Studio', 17);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_alat`
--
ALTER TABLE `tb_alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indeks untuk tabel `tb_jadwal_boking`
--
ALTER TABLE `tb_jadwal_boking`
  ADD PRIMARY KEY (`no_boking`);

--
-- Indeks untuk tabel `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indeks untuk tabel `tb_studio`
--
ALTER TABLE `tb_studio`
  ADD PRIMARY KEY (`id_studio`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_alat`
--
ALTER TABLE `tb_alat`
  MODIFY `id_alat` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal_boking`
--
ALTER TABLE `tb_jadwal_boking`
  MODIFY `no_boking` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  MODIFY `id_ruangan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_studio`
--
ALTER TABLE `tb_studio`
  MODIFY `id_studio` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3914;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
