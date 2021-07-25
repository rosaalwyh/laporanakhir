-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2021 pada 06.18
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipkl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagians`
--

CREATE TABLE `bagians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_bagian` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kuota` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bagians`
--

INSERT INTO `bagians` (`id`, `nama_bagian`, `kuota`, `created_at`, `updated_at`) VALUES
(1, 'Ruang Kebidanan', 15, '2021-07-21 04:09:05', '2021-07-21 04:09:05'),
(2, 'Ruang Zal Wanita', 10, '2021-07-21 04:09:05', '2021-07-21 04:09:05'),
(3, 'Ruang Zal Laki', 15, '2021-07-21 04:09:05', '2021-07-21 04:09:05'),
(4, 'Ruang Zal Anak', 15, '2021-07-21 04:09:05', '2021-07-21 04:09:05'),
(5, 'Ruang UGD', 10, '2021-07-21 04:09:05', '2021-07-21 04:09:05'),
(6, 'Poliklinik KIA', 5, '2021-07-21 04:09:05', '2021-07-21 04:09:05'),
(7, 'Poliklinik Gigi', 10, '2021-07-21 04:09:05', '2021-07-21 04:09:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diklats`
--

CREATE TABLE `diklats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `nip` varchar(100) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diklats`
--

INSERT INTO `diklats` (`id`, `user_id`, `nama_lengkap`, `nip`, `jabatan`, `tanggal_lahir`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, 7, 'Nurmalena', '196607241997090712', 'Kepala Bagian', '1966-07-24', 'Perempuan', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mentors`
--

CREATE TABLE `mentors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mentors`
--

INSERT INTO `mentors` (`id`, `user_id`, `nama_lengkap`, `nip`, `jenis_kelamin`, `tanggal_lahir`, `created_at`, `updated_at`) VALUES
(1, 6, 'Ummurida', '1978090320011091211', '', '1978-03-09', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_06_083644_create_mentors_table', 1),
(5, '2021_07_20_131140_create_bagians_table', 1),
(6, '2021_07_20_133628_create_pendaftars_table', 1),
(7, '2021_07_21_104026_create_sertifikats_table', 1),
(8, '2021_07_21_104036_create_nilais_table', 1),
(9, '2021_07_21_104050_create_surat_balasans_table', 1),
(10, '2021_07_21_104130_create_pesertas_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilais`
--

CREATE TABLE `nilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `peserta_id` bigint(20) UNSIGNED DEFAULT NULL,
  `partisipasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capaian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etika` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `askep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `praktik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilais`
--

INSERT INTO `nilais` (`id`, `peserta_id`, `partisipasi`, `capaian`, `etika`, `askep`, `praktik`, `created_at`, `updated_at`) VALUES
(1, 2, 'Mahasiswa ini sangat pasif. Pada beberapa pertemuan yang dijadwalkan untuk bimbingan, mahasiswa aji ini tidak menghadiri kegiatan. Kemudian pada waktu jadwal dinas hari kedua, mahasiswa tersebut hadir tanpa keterangan.  Hanya dengan minta tolong temannya ', 'Untuk pencapaian dalam hal penugasan secara individu, mahasiswa tersebut tidak mengumpulkan tugas yang dibebankan. Pada saat periode dinas, mahasiswa tersebut kita berikan tugas membuat SPO Cara perawatan luka. Ketika periode waktu yang ditentukan mahasis', 'Untuk masalah sikap, mahasiswa ini tidak banyak bicara, namun melihat sikapnya yang mengabaikan beban kerja waktu dinas, mengabaikan penugasan yang dibebankan, mengabaikan aturan yang kita tetapkan untuk senantiasa menjaga kerapian rambut. Untuk rambut te', 'Begitu juga untuk penugasan ASKEP, sampai periode praktik askep belum dikerjakan. Askep disetorkan setelah satu minggu kegiatan.', 'Untuk praktek, mahasiswa tersebut bekerja berdasarkan perintah, dan tidak memiliki target pencapaian.', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_seminars`
--

CREATE TABLE `nilai_seminars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `peserta_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pre_test` int(11) DEFAULT NULL,
  `post_test` int(11) DEFAULT NULL,
  `total_nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai_seminars`
--

INSERT INTO `nilai_seminars` (`id`, `peserta_id`, `pre_test`, `post_test`, `total_nilai`, `created_at`, `updated_at`) VALUES
(1, 2, 80, 80, 80, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftars`
--

CREATE TABLE `pendaftars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bagian_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nim` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asal_kampus` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proposal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktm` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surat_pengantar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('terekomendasi','terima','belum','tidak') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftars`
--

INSERT INTO `pendaftars` (`id`, `user_id`, `bagian_id`, `nama_lengkap`, `nim`, `tanggal_lahir`, `jenis_kelamin`, `asal_kampus`, `jurusan`, `proposal`, `ktm`, `surat_pengantar`, `status`, `created_at`, `updated_at`) VALUES
(3, NULL, 2, 'Muhammad Yusron Hartoyo', '06193081', '1997-07-17', 'Laki-laki', 'Politeknik Negeri Kesehatan Palembang', 'Kesehatan Masyarakat', NULL, NULL, NULL, NULL, '2021-07-21 04:09:08', '2021-07-21 04:09:08'),
(6, 5, 6, 'Rosa Alawiyah', '061830801191', '1999-09-29', 'Perempuan', 'Politeknik Kesehatan Palembang', 'DII Kebidanan', NULL, NULL, NULL, 'belum', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesertas`
--

CREATE TABLE `pesertas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pendaftar_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mentor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bagian_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesertas`
--

INSERT INTO `pesertas` (`id`, `user_id`, `pendaftar_id`, `mentor_id`, `bagian_id`, `tanggal_mulai`, `tanggal_selesai`, `status`, `created_at`, `updated_at`) VALUES
(2, 5, 6, NULL, 6, '2021-07-29', '2021-09-02', 'Akan dimulai', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pimpinans`
--

CREATE TABLE `pimpinans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `nip` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pimpinans`
--

INSERT INTO `pimpinans` (`id`, `user_id`, `nama_lengkap`, `nip`, `tanggal_lahir`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(2, 8, 'Ini pimpinan', '198901012009101011', '1989-06-01', 'Laki-Laki', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikats`
--

CREATE TABLE `sertifikats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `peserta_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_balasans`
--

CREATE TABLE `surat_balasans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pendaftar_id` bigint(20) UNSIGNED NOT NULL,
  `no_surat_balasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_balasan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'admin@gmail.com', NULL, 1, '$2y$10$Va67//9kfvB5ej/ZEMvIrevUnhUiVWg0G/Mc9TSCCfwCpt18UWav.', NULL, '2021-07-21 22:46:51', '2021-07-21 22:46:51'),
(5, 'rosaalwyh', 'alawiyahrosa@gmail.com', NULL, 2, '$2y$10$aDTqerukpaqqm6yOaDyklOrQEwZDNVglGgsj/x6.gLu2QGnILK7U.', NULL, '2021-07-21 22:46:51', '2021-07-21 22:46:51'),
(6, 'umurida', 'umurida@gmail.com', NULL, 3, '$2y$10$pZLwHJv7n6IzaJo9CGKIXuTP2CvfsuZUffIK77EmKSXW7tphM3xsy', NULL, '2021-07-21 22:46:51', '2021-07-21 22:46:51'),
(7, 'lena', 'lena@gmail.com', NULL, 4, '$2y$10$rBN/MoeffEXGvlw0iCwy4O7SyaIGWFx5It5xvqrEI.LBZ9MElJuXG', NULL, '2021-07-21 22:46:51', '2021-07-21 22:46:51'),
(8, 'pimpinan', 'pimpinan@gmail.com', NULL, 5, '$2y$10$5tScMC.t5099gY9dBXP44e6OO5FhubbpsJqgpOxBSjTPJuJwgXkiO', NULL, '2021-07-22 22:14:54', '2021-07-22 22:14:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bagians`
--
ALTER TABLE `bagians`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `diklats`
--
ALTER TABLE `diklats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_id` (`peserta_id`);

--
-- Indeks untuk tabel `nilai_seminars`
--
ALTER TABLE `nilai_seminars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_id` (`peserta_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pendaftars`
--
ALTER TABLE `pendaftars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftars_user_id_foreign` (`user_id`),
  ADD KEY `pendaftars_bagian_id_foreign` (`bagian_id`);

--
-- Indeks untuk tabel `pesertas`
--
ALTER TABLE `pesertas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `pendaftar_id` (`pendaftar_id`),
  ADD KEY `bagian_id` (`bagian_id`),
  ADD KEY `mentor_id` (`mentor_id`);

--
-- Indeks untuk tabel `pimpinans`
--
ALTER TABLE `pimpinans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `sertifikats`
--
ALTER TABLE `sertifikats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_id` (`peserta_id`);

--
-- Indeks untuk tabel `surat_balasans`
--
ALTER TABLE `surat_balasans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftar_id` (`pendaftar_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bagians`
--
ALTER TABLE `bagians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `diklats`
--
ALTER TABLE `diklats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nilai_seminars`
--
ALTER TABLE `nilai_seminars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pendaftars`
--
ALTER TABLE `pendaftars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pesertas`
--
ALTER TABLE `pesertas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pimpinans`
--
ALTER TABLE `pimpinans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sertifikats`
--
ALTER TABLE `sertifikats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surat_balasans`
--
ALTER TABLE `surat_balasans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `diklats`
--
ALTER TABLE `diklats`
  ADD CONSTRAINT `diklats_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `mentors`
--
ALTER TABLE `mentors`
  ADD CONSTRAINT `mentors_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `nilais`
--
ALTER TABLE `nilais`
  ADD CONSTRAINT `nilais_ibfk_1` FOREIGN KEY (`peserta_id`) REFERENCES `pesertas` (`id`);

--
-- Ketidakleluasaan untuk tabel `nilai_seminars`
--
ALTER TABLE `nilai_seminars`
  ADD CONSTRAINT `nilai_seminars_ibfk_1` FOREIGN KEY (`peserta_id`) REFERENCES `pesertas` (`id`);

--
-- Ketidakleluasaan untuk tabel `pendaftars`
--
ALTER TABLE `pendaftars`
  ADD CONSTRAINT `pendaftars_bagian_id_foreign` FOREIGN KEY (`bagian_id`) REFERENCES `bagians` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pendaftars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesertas`
--
ALTER TABLE `pesertas`
  ADD CONSTRAINT `pesertas_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pesertas_ibfk_2` FOREIGN KEY (`pendaftar_id`) REFERENCES `pendaftars` (`id`),
  ADD CONSTRAINT `pesertas_ibfk_3` FOREIGN KEY (`bagian_id`) REFERENCES `bagians` (`id`),
  ADD CONSTRAINT `pesertas_ibfk_4` FOREIGN KEY (`mentor_id`) REFERENCES `mentors` (`id`);

--
-- Ketidakleluasaan untuk tabel `pimpinans`
--
ALTER TABLE `pimpinans`
  ADD CONSTRAINT `pimpinans_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `sertifikats`
--
ALTER TABLE `sertifikats`
  ADD CONSTRAINT `sertifikats_ibfk_1` FOREIGN KEY (`peserta_id`) REFERENCES `pesertas` (`id`);

--
-- Ketidakleluasaan untuk tabel `surat_balasans`
--
ALTER TABLE `surat_balasans`
  ADD CONSTRAINT `surat_balasans_ibfk_1` FOREIGN KEY (`pendaftar_id`) REFERENCES `pendaftars` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
