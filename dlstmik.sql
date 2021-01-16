/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - dlstmiks
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dlstmiks` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `dlstmiks`;

/*Table structure for table `bku_daftar` */

DROP TABLE IF EXISTS `bku_daftar`;

CREATE TABLE `bku_daftar` (
  `id` int(16) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isbnissn` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengarang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penerbit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun` int(8) DEFAULT NULL,
  `jumlah` int(16) DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `bku_daftar` */

insert  into `bku_daftar`(`id`,`judul`,`isbnissn`,`pengarang`,`penerbit`,`tahun`,`jumlah`,`deskripsi`,`lokasi`,`cover`,`created_at`,`updated_at`) values 
(1,'PHP 5 for dummies','0764541668','Valade, Janet','Wiley',2004,1,'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.','rak1','BxZ6lpWc6kAI8j81zACAbmVIOaFYEPTr7OTAEv6s.jpeg','2020-09-01 08:46:46','2020-12-21 04:19:18'),
(2,'Linux In a Nutshell','9780596009304','Siever, Ellen - Love, Robert - Robbins, Arnold - Figgins, Stephen - Weber, Aaron','OReilly',2005,1,'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.asd2','rak1','NDB2xIO579jCNQiRe7qiUEe06rbRoiEh1tJ9FS1Q.jpeg','2020-09-01 08:46:46','2020-12-21 04:19:30'),
(3,'The Definitive Guide to MySQL 5','9781590595350','Kofler, Michael - Kramer, David','Apress',2005,1,'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.','rak1','SePCWSdOkBBqs5lqdCjGojg1vRmwmJk3KvgjEptL.jpeg','2020-09-01 08:46:46','2020-12-21 04:19:53'),
(4,'Cathedral and the Bazaar: Musings on Linux and Open Source by an Accidental Revolutionary','0-596-00108-8','Raymond, Eric','OReilly',2001,1,'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.','rak2','4IWRyphR7MhoXFSeFnrnhjNw5otJi59t9JMkvkaH.jpeg','2020-09-01 08:46:46','2020-12-21 04:20:03'),
(5,'Producing open source software : how to run a successful free software project','9780596007591','Fogel, Karl','OReilly',2005,1,'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.','rak2','vAKxbV55LryXR18cKpsUPIp89JBpx5fv3W9jkxV2.jpeg','2020-09-01 08:46:46','2020-12-21 04:20:19'),
(6,'PostgreSQL : a comprehensive guide to building, programming, and administering PostgreSQL databases','0735712573','Douglas, Korry - Douglas, Susan','Sams',2003,1,'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.','rak1','XvxgQRTNuHHuqjEtYreXeXuatvUZjM6p7iysrGZ4.jpeg','2020-09-01 08:46:46','2020-12-21 04:20:33'),
(7,'Web application architecture : principles, protocols, and practices','0471486566','Shklar, Leon - Rosen, Richard','John Wiley',2003,1,'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.','rak1','p8egF1K52szkBNpmoz2Y11lLX9VhmkjZLpG1PJAF.jpeg','2020-09-01 08:46:46','2020-12-21 04:20:47'),
(8,'Ajax : creating Web pages with asynchronous JavaScript and XML','9780132272674','Woychowsky, Edmond','Prentice Hall',2007,1,'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.','rak1','tfQTPMvcvxRDjJUVLRx2INGBfmblJl04eyvHGqFo.jpeg','2020-09-01 08:46:46','2020-12-21 04:20:59'),
(9,'The organization of information','1563089769','Taylor, Arlene G.','Libraries Unlimited',2004,1,'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.','rak1','POUhLEp0WY6PVtBfGkjpplEaGxhXMmZ02vEbBSET.jpeg','2020-09-01 08:46:46','2020-12-21 04:21:12'),
(10,'Library and Information Center Management','9781591584063','Stueart, Robert D. - Moran, Barbara B.','Libraries Unlimited',2007,1,'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.','rak1','G5Br7kb85VXpODmoYcecRJfjcEFlIUlFlrVE0Eyl.jpeg','2020-09-01 08:46:46','2020-12-21 04:21:25');

/*Table structure for table `bukutamu` */

DROP TABLE IF EXISTS `bukutamu`;

CREATE TABLE `bukutamu` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `nim` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prodi` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `bukutamu` */

insert  into `bukutamu`(`id`,`nim`,`nama`,`kelas`,`prodi`,`created_at`,`updated_at`) values 
(1,'A2.1700039','Fahmi Muhammad Anshory','B','TI','2020-12-26 10:53:16','2020-12-26 10:53:16'),
(2,'A2.1700032','Deden Nuryadin','A','TI','2021-01-06 17:45:55','2021-01-05 17:45:59'),
(3,'A2.1700035','Dhery Anggara Setiawan','B','TI','2021-01-12 17:47:20','2021-01-12 17:47:29'),
(4,'A2.1700036','Dicky Alamsyah','C','TI','2021-01-12 17:47:23','2021-01-12 17:47:31'),
(5,'A3.1700025','Ilham Fadillah','A','SI','2021-01-12 17:47:25','2021-01-12 17:47:34'),
(6,'A3.1700031','Nani Diar Anggita','A','SI','2021-01-12 17:47:37','2021-01-12 17:47:35');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `profil` */

DROP TABLE IF EXISTS `profil`;

CREATE TABLE `profil` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `nama` varchar(64) DEFAULT NULL,
  `alamat` varchar(64) DEFAULT NULL,
  `google_maps` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tlp` varchar(32) DEFAULT NULL,
  `situs` varchar(64) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `profil` */

insert  into `profil`(`id`,`nama`,`alamat`,`google_maps`,`email`,`tlp`,`situs`,`create_at`,`updated_at`) values 
(1,'STMIK Sumedang','Jl.Angkrek Situ No.19 Sumedang','https://goo.gl/maps/xeYbmgLYcCiYUrtTA','perpustakaan@stmik-sumedang.ac.id','(0261) 207395','https://stmik-sumedang.ac.id/','2020-12-26 19:07:55','2020-12-26 12:08:09');

/*Table structure for table `trs_daftar` */

DROP TABLE IF EXISTS `trs_daftar`;

CREATE TABLE `trs_daftar` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_buku` int(16) DEFAULT NULL,
  `id_anggota` int(16) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `status` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_buku` (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `trs_daftar` */

insert  into `trs_daftar`(`id`,`id_buku`,`id_anggota`,`tgl_pinjam`,`tgl_kembali`,`status`,`ket`,`created_at`,`updated_at`) values 
(1,1,2,'2020-12-01','2021-01-08','Pinjam',NULL,NULL,'2021-01-12 10:42:49'),
(2,1,2,'2020-12-31','2021-01-08','Kembali','Ok','2021-01-08 02:12:05','2021-01-12 10:43:04');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tlp` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prodi` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.jpg',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`nim`,`email`,`password`,`tgl_lahir`,`jk`,`alamat`,`tlp`,`prodi`,`foto`,`email_verified_at`,`remember_token`,`is_admin`,`created_at`,`updated_at`) values 
(1,'Admin Demo','Admin','admin@admin.com','$2y$10$ZqZmxCRyHvz5fnmvRTP/h.JPC7x/gQM/cv4tnPKouaTsGXhZRYf7K',NULL,NULL,NULL,NULL,NULL,'default.jpg',NULL,NULL,1,'2020-12-26 08:44:55','2020-12-26 08:44:57'),
(2,'User Demo','User','user@user.com','$2y$10$iW.IkL2PLGS5U.z0px5KDuX.jB6sic8Xe3rGnMITiOLfXqcdY.p/C',NULL,NULL,NULL,NULL,NULL,'default.jpg',NULL,NULL,0,'2020-12-03 08:59:37','2020-12-03 08:59:37');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
