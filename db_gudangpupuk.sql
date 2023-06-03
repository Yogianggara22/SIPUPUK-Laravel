-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Jun 2023 pada 22.14
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gudangpupuk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gudang`
--

CREATE TABLE `tb_gudang` (
  `Kode_Gudang` varchar(10) NOT NULL,
  `ID_Karyawan_Gudang` varchar(10) NOT NULL,
  `Stock_Semua_Pupuk` int(11) NOT NULL,
  `Jumlah_Pupuk_Masuk` int(11) NOT NULL,
  `Jumlah_Pupuk_Keluar` int(11) NOT NULL,
  `Kode_Pupuk_Keluar` varchar(10) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_gudang`
--

INSERT INTO `tb_gudang` (`Kode_Gudang`, `ID_Karyawan_Gudang`, `Stock_Semua_Pupuk`, `Jumlah_Pupuk_Masuk`, `Jumlah_Pupuk_Keluar`, `Kode_Pupuk_Keluar`, `updated_at`, `created_at`) VALUES
('G01', 'KG010', 500, 50, 50, 'PK022', '2023-06-03 11:51:48', '2023-05-28 07:40:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal_kirim`
--

CREATE TABLE `tb_jadwal_kirim` (
  `Kode_Jadwal` varchar(5) NOT NULL,
  `Kode_Pengiriman` varchar(5) NOT NULL,
  `ID_Supir` varchar(10) NOT NULL,
  `Tanggal` date NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jadwal_kirim`
--

INSERT INTO `tb_jadwal_kirim` (`Kode_Jadwal`, `Kode_Pengiriman`, `ID_Supir`, `Tanggal`, `updated_at`, `created_at`) VALUES
('JK01', 'KRM01', 'SP01', '2023-05-24', '2023-05-28 00:45:25', '2023-05-28 00:45:25'),
('JK012', 'KRM01', 'SP02', '2023-06-13', '2023-06-03 11:57:28', '2023-06-03 11:57:07'),
('JK03', 'KRM03', 'SP03', '2023-05-31', '2023-05-28 00:46:03', '2023-05-28 00:46:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_pupuk`
--

CREATE TABLE `tb_jenis_pupuk` (
  `ID_Pupuk` varchar(5) NOT NULL,
  `Kode_Jenis_Pupuk` varchar(5) NOT NULL,
  `Nama_Pupuk` varchar(25) NOT NULL,
  `Berat` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jenis_pupuk`
--

INSERT INTO `tb_jenis_pupuk` (`ID_Pupuk`, `Kode_Jenis_Pupuk`, `Nama_Pupuk`, `Berat`, `created_at`, `updated_at`) VALUES
('P0011', 'U02', 'UREA', '50 KG', '2023-06-03 11:32:41', '2023-06-03 11:32:41'),
('PK02', 'K01', 'KOMPOS', '100 KG', '2023-06-03 11:44:19', '2023-06-03 11:44:19'),
('PPK01', 'K01', 'K0MPOS', '20 KG', '2023-05-28 00:42:52', '2023-06-03 11:44:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan_gudang`
--

CREATE TABLE `tb_karyawan_gudang` (
  `ID_Karyawan_Gudang` varchar(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` text NOT NULL,
  `No_Telephone` varchar(13) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_karyawan_gudang`
--

INSERT INTO `tb_karyawan_gudang` (`ID_Karyawan_Gudang`, `Nama`, `Alamat`, `No_Telephone`, `updated_at`, `created_at`) VALUES
('KG010', 'SUTRISNO', 'JL. Indah Jaya', '08510043121', '2023-06-03 11:49:22', '2023-06-03 11:49:22'),
('KR02', 'MIA SUTRA INDAH', 'Jl. Sentuli Andor', '085190223241', '2023-05-28 00:24:34', '2023-05-28 00:24:34'),
('KR03', 'DIAS SANTOSO', 'Jl. Pacet Jaya', '085100901132', '2023-05-28 00:48:11', '2023-05-28 00:44:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kendaraan_truk`
--

CREATE TABLE `tb_kendaraan_truk` (
  `Kode_Truk` varchar(10) NOT NULL,
  `Jumlah_Truk_Tersedia` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kendaraan_truk`
--

INSERT INTO `tb_kendaraan_truk` (`Kode_Truk`, `Jumlah_Truk_Tersedia`, `updated_at`, `created_at`) VALUES
('TR021', 50, '2023-06-03 11:55:58', '2023-06-03 11:55:58'),
('TRK01', 12, '2023-05-28 00:29:13', '2023-05-28 00:29:13'),
('TRK02', 19, '2023-05-28 00:29:28', '2023-05-28 00:29:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_outlet_toko`
--

CREATE TABLE `tb_outlet_toko` (
  `No_Antrian` varchar(5) NOT NULL,
  `Alamat_Penerima` text NOT NULL,
  `Jumlah_Pupuk_Dipesan` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_outlet_toko`
--

INSERT INTO `tb_outlet_toko` (`No_Antrian`, `Alamat_Penerima`, `Jumlah_Pupuk_Dipesan`, `updated_at`, `created_at`) VALUES
('PSN01', 'Jl. Gedeg RT/RW 02/013', 25, '2023-05-28 00:52:05', '2023-05-28 00:30:32'),
('PSN02', 'Jl. Kemlagi RT/RW 04/01', 50, '2023-05-28 00:31:01', '2023-05-28 00:31:01'),
('PSN03', 'Jl. Makmur Jaya RT/RW 05/03', 200, '2023-06-03 11:59:03', '2023-05-28 00:31:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `ID_Pegawai` varchar(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` text NOT NULL,
  `No_Telephone` varchar(13) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`ID_Pegawai`, `Nama`, `Alamat`, `No_Telephone`, `updated_at`, `created_at`) VALUES
('P004', 'Siti Kodijah', 'Jl. Mawar Melati', '085100877123', '2023-06-03 11:31:26', '2023-06-03 11:13:58'),
('PG02', 'Sumanto', 'Jl. Manaaja', '0851009008891', '2023-06-03 11:42:07', '2023-06-03 11:42:07'),
('PM010', 'Siti Maimunah', 'Jl. Mawar Wangi', '085100891132', '2023-06-03 11:42:51', '2023-06-03 11:30:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengiriman`
--

CREATE TABLE `tb_pengiriman` (
  `Kode_Pengiriman` varchar(10) NOT NULL,
  `ID_Supir` varchar(10) DEFAULT NULL,
  `Kode_Truk` varchar(10) DEFAULT NULL,
  `No_Antrian` varchar(5) DEFAULT NULL,
  `Tanggal_Pengiriman` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pengiriman`
--

INSERT INTO `tb_pengiriman` (`Kode_Pengiriman`, `ID_Supir`, `Kode_Truk`, `No_Antrian`, `Tanggal_Pengiriman`, `updated_at`, `created_at`) VALUES
('KRM01', 'SP01', 'TRK01', 'PSN01', '2023-06-02', '2023-05-28 00:32:47', '2023-05-28 00:32:47'),
('KRM02', 'SP02', 'TRK02', 'PSN02', '2023-06-03', '2023-05-28 00:52:22', '2023-05-28 00:33:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pupuk`
--

CREATE TABLE `tb_pupuk` (
  `Kode_Jenis_Pupuk` varchar(5) NOT NULL,
  `Jenis_Pupuk` varchar(15) NOT NULL,
  `ID_Pegawai` varchar(10) NOT NULL,
  `Kode_Pupuk_Masuk` varchar(10) NOT NULL,
  `Kode_Gudang` varchar(10) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pupuk`
--

INSERT INTO `tb_pupuk` (`Kode_Jenis_Pupuk`, `Jenis_Pupuk`, `ID_Pegawai`, `Kode_Pupuk_Masuk`, `Kode_Gudang`, `updated_at`, `created_at`) VALUES
('K01', 'ZETA', 'PG02', 'PM02', 'G01', '2023-06-03 11:54:03', '2023-05-28 00:41:47'),
('PN010', 'PONKSA', 'PG02', 'PM02', 'G01', '2023-06-03 11:53:25', '2023-06-03 11:53:25'),
('U02', 'UREA', 'PG01', 'PM02', 'KG02', '2023-05-28 00:49:13', '2023-05-28 00:42:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pupuk_keluar`
--

CREATE TABLE `tb_pupuk_keluar` (
  `Kode_Pupuk_Keluar` varchar(10) NOT NULL,
  `Jenis_Pupuk` varchar(15) DEFAULT NULL,
  `Jumlah_Pupuk_Keluar` int(11) DEFAULT NULL,
  `Kode_Pengiriman` varchar(10) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pupuk_keluar`
--

INSERT INTO `tb_pupuk_keluar` (`Kode_Pupuk_Keluar`, `Jenis_Pupuk`, `Jumlah_Pupuk_Keluar`, `Kode_Pengiriman`, `Tanggal`, `updated_at`, `created_at`) VALUES
('PK01', 'KOMPOS', 25, 'KRM01', '2023-05-30', '2023-05-28 00:39:14', '2023-05-28 00:39:14'),
('PK0121', 'UREA', 15, 'KRM02', '2023-06-20', '2023-06-03 11:48:01', '2023-06-03 11:48:01'),
('PK02', 'PONSKA', 50, 'KRM02', '2023-05-31', '2023-06-03 11:48:30', '2023-05-28 00:39:49'),
('PK022', 'PONKSA', 15, 'KRM02', '2023-06-15', '2023-06-03 11:35:32', '2023-06-03 11:35:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pupuk_masuk`
--

CREATE TABLE `tb_pupuk_masuk` (
  `Kode_Pupuk_Masuk` varchar(10) NOT NULL,
  `Jenis_Pupuk` varchar(15) NOT NULL,
  `Jumlah_Pupuk_Masuk` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pupuk_masuk`
--

INSERT INTO `tb_pupuk_masuk` (`Kode_Pupuk_Masuk`, `Jenis_Pupuk`, `Jumlah_Pupuk_Masuk`, `Tanggal`, `created_at`, `updated_at`) VALUES
('PM02', 'PONSKA', 250, '2023-05-10', '2023-05-28 00:25:25', '2023-05-28 00:25:25'),
('PM023', 'PONKSA', 200, '2023-06-04', '2023-06-03 11:34:24', '2023-06-03 11:34:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_stock_pupuk`
--

CREATE TABLE `tb_stock_pupuk` (
  `Kode_Stock` varchar(5) NOT NULL,
  `Kode_Jenis_Pupuk` varchar(5) NOT NULL,
  `Jumlah_Stock` int(10) NOT NULL,
  `Nama_Pupuk` varchar(25) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_stock_pupuk`
--

INSERT INTO `tb_stock_pupuk` (`Kode_Stock`, `Kode_Jenis_Pupuk`, `Jumlah_Stock`, `Nama_Pupuk`, `updated_at`, `created_at`) VALUES
('KS01', 'U02', 100, 'UREA', '2023-06-03 11:52:43', '2023-05-28 00:44:32'),
('S022', 'U01', 100, 'PONSKA', '2023-06-03 11:52:23', '2023-06-03 11:52:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_supir_pengirim`
--

CREATE TABLE `tb_supir_pengirim` (
  `ID_Supir` varchar(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` text NOT NULL,
  `No_Telephone` varchar(13) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_supir_pengirim`
--

INSERT INTO `tb_supir_pengirim` (`ID_Supir`, `Nama`, `Alamat`, `No_Telephone`, `updated_at`, `created_at`) VALUES
('S12', 'NUR KOLIS', 'Jl. Aja dulu', '085100981121', '2023-06-03 11:54:47', '2023-06-03 11:54:47'),
('SP01', 'SUMANTO MUKI', 'Jl. Kanibal Sten', '085196532011', '2023-05-28 00:49:38', '2023-05-28 00:27:42'),
('SP02', 'SUKIJAN KIMEN', 'Jl. Mana Tau', '085190221111', '2023-05-28 00:28:13', '2023-05-28 00:28:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `Id` varchar(15) NOT NULL,
  `Nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('superadmin','pegawai','karyawangudang','supir') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`Id`, `Nama`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
('1', 'Yogi', 'admin', '$2y$10$KDj0Ekf3qJUDFQ8cveDOeeig9tpcwDJyWe0k7Bkfnuy1NJo1xJQzK', 'superadmin', NULL, NULL),
('2', 'Milla', 'Pegawai', '$2y$10$KDj0Ekf3qJUDFQ8cveDOeeig9tpcwDJyWe0k7Bkfnuy1NJo1xJQzK', 'pegawai', NULL, NULL),
('3', 'Rudi', 'Karyawan', '$2y$10$KDj0Ekf3qJUDFQ8cveDOeeig9tpcwDJyWe0k7Bkfnuy1NJo1xJQzK', 'karyawangudang', NULL, NULL),
('4', 'Supri', 'Supir', '$2y$10$KDj0Ekf3qJUDFQ8cveDOeeig9tpcwDJyWe0k7Bkfnuy1NJo1xJQzK', 'supir', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_gudang`
--
ALTER TABLE `tb_gudang`
  ADD PRIMARY KEY (`Kode_Gudang`),
  ADD KEY `ID_Karyawan_Gudang` (`ID_Karyawan_Gudang`,`Kode_Pupuk_Keluar`),
  ADD KEY `Kode_Pupuk_Keluar` (`Kode_Pupuk_Keluar`);

--
-- Indeks untuk tabel `tb_jadwal_kirim`
--
ALTER TABLE `tb_jadwal_kirim`
  ADD PRIMARY KEY (`Kode_Jadwal`),
  ADD KEY `Kode_Pengiriman` (`Kode_Pengiriman`,`ID_Supir`);

--
-- Indeks untuk tabel `tb_jenis_pupuk`
--
ALTER TABLE `tb_jenis_pupuk`
  ADD PRIMARY KEY (`ID_Pupuk`),
  ADD KEY `Kode_Jenis_Pupuk` (`Kode_Jenis_Pupuk`);

--
-- Indeks untuk tabel `tb_karyawan_gudang`
--
ALTER TABLE `tb_karyawan_gudang`
  ADD PRIMARY KEY (`ID_Karyawan_Gudang`);

--
-- Indeks untuk tabel `tb_kendaraan_truk`
--
ALTER TABLE `tb_kendaraan_truk`
  ADD PRIMARY KEY (`Kode_Truk`);

--
-- Indeks untuk tabel `tb_outlet_toko`
--
ALTER TABLE `tb_outlet_toko`
  ADD PRIMARY KEY (`No_Antrian`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`ID_Pegawai`);

--
-- Indeks untuk tabel `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  ADD PRIMARY KEY (`Kode_Pengiriman`),
  ADD KEY `Kode_Truk` (`Kode_Truk`,`No_Antrian`),
  ADD KEY `No_Antrian` (`No_Antrian`),
  ADD KEY `ID_Supir` (`ID_Supir`);

--
-- Indeks untuk tabel `tb_pupuk`
--
ALTER TABLE `tb_pupuk`
  ADD PRIMARY KEY (`Kode_Jenis_Pupuk`),
  ADD KEY `ID_Pegawai` (`ID_Pegawai`,`Kode_Pupuk_Masuk`,`Kode_Gudang`);

--
-- Indeks untuk tabel `tb_pupuk_keluar`
--
ALTER TABLE `tb_pupuk_keluar`
  ADD PRIMARY KEY (`Kode_Pupuk_Keluar`),
  ADD KEY `Kode_Pengiriman` (`Kode_Pengiriman`);

--
-- Indeks untuk tabel `tb_pupuk_masuk`
--
ALTER TABLE `tb_pupuk_masuk`
  ADD PRIMARY KEY (`Kode_Pupuk_Masuk`);

--
-- Indeks untuk tabel `tb_stock_pupuk`
--
ALTER TABLE `tb_stock_pupuk`
  ADD PRIMARY KEY (`Kode_Stock`),
  ADD KEY `Kode_Jenis_Pupuk` (`Kode_Jenis_Pupuk`);

--
-- Indeks untuk tabel `tb_supir_pengirim`
--
ALTER TABLE `tb_supir_pengirim`
  ADD PRIMARY KEY (`ID_Supir`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`Id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_gudang`
--
ALTER TABLE `tb_gudang`
  ADD CONSTRAINT `tb_gudang_ibfk_1` FOREIGN KEY (`Kode_Pupuk_Keluar`) REFERENCES `tb_pupuk_keluar` (`Kode_Pupuk_Keluar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_gudang_ibfk_2` FOREIGN KEY (`ID_Karyawan_Gudang`) REFERENCES `tb_karyawan_gudang` (`ID_Karyawan_Gudang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  ADD CONSTRAINT `tb_pengiriman_ibfk_1` FOREIGN KEY (`No_Antrian`) REFERENCES `tb_outlet_toko` (`No_Antrian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pengiriman_ibfk_2` FOREIGN KEY (`Kode_Truk`) REFERENCES `tb_kendaraan_truk` (`Kode_Truk`),
  ADD CONSTRAINT `tb_pengiriman_ibfk_3` FOREIGN KEY (`ID_Supir`) REFERENCES `tb_supir_pengirim` (`ID_Supir`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pupuk_keluar`
--
ALTER TABLE `tb_pupuk_keluar`
  ADD CONSTRAINT `tb_pupuk_keluar_ibfk_1` FOREIGN KEY (`Kode_Pengiriman`) REFERENCES `tb_pengiriman` (`Kode_Pengiriman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
