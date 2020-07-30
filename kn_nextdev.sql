-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2019 at 12:56 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kn_nextdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal_terbit` datetime NOT NULL,
  `tanggal_edit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id`, `judul`, `konten`, `gambar`, `tanggal_terbit`, `tanggal_edit`) VALUES
(1, 'Menanam Pohon di Pekarangan Sekolah', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis felis sit amet luctus ultrices. In hac habitasse platea dictumst. Ut tortor urna, fermentum at ultrices sit amet, placerat in odio. Curabitur id pulvinar massa. Pellentesque scelerisque tempor urna. Donec luctus nibh lorem, ut mollis ipsum fringilla ut. Nullam nec magna a massa commodo molestie. Integer ut iaculis purus, non luctus velit. Sed faucibus vulputate nibh consequat maximus. Maecenas id nisi lorem. Integer a dolor at elit interdum fermentum quis ornare augue. Nullam auctor nunc eget odio tincidunt sagittis. Ut tellus orci, ultricies ac justo eget, scelerisque bibendum elit. Aenean venenatis dui dui, a condimentum ligula vestibulum a.</div><div><br></div><div>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi mattis placerat mauris pharetra porttitor. Vestibulum aliquam maximus purus in aliquet. Mauris tempor finibus egestas. Cras malesuada purus metus, quis congue enim sagittis vitae. Aenean risus sem, hendrerit sed turpis sagittis, sagittis ultricies dui. In id nisl a libero viverra commodo. Sed fermentum viverra nunc, nec hendrerit eros consectetur eget. Donec auctor nisl at ex porta aliquam. Maecenas tempus auctor varius.</div><div><br></div><div>Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec varius mauris turpis, eget lobortis dolor interdum at. Nam rhoncus consequat leo id hendrerit. Sed lacus risus, sollicitudin ac gravida vel, dignissim eu massa. Donec eget accumsan sem. Donec vulputate interdum felis sed vehicula. Pellentesque ut gravida lacus. Praesent sed vestibulum tortor, pulvinar dignissim odio. Donec molestie eros ac ante molestie pulvinar. Suspendisse et condimentum sem, eget ultrices sapien. Integer accumsan sed tortor eget convallis. Aenean non magna sit amet nibh ullamcorper porttitor. Quisque faucibus velit nunc, sed tincidunt mauris sagittis posuere. Suspendisse dignissim, metus at cursus aliquet, justo tortor tristique velit, at imperdiet mauris odio sit amet tortor.</div>', 'p-activity-1.jpg', '2019-04-02 09:00:00', '2019-04-02 09:00:00'),
(2, 'Proyek Bercocok Tanam Dari Dini', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis felis sit amet luctus ultrices. In hac habitasse platea dictumst. Ut tortor urna, fermentum at ultrices sit amet, placerat in odio. Curabitur id pulvinar massa. Pellentesque scelerisque tempor urna. Donec luctus nibh lorem, ut mollis ipsum fringilla ut. Nullam nec magna a massa commodo molestie. Integer ut iaculis purus, non luctus velit. Sed faucibus vulputate nibh consequat maximus. Maecenas id nisi lorem. Integer a dolor at elit interdum fermentum quis ornare augue. Nullam auctor nunc eget odio tincidunt sagittis. Ut tellus orci, ultricies ac justo eget, scelerisque bibendum elit. Aenean venenatis dui dui, a condimentum ligula vestibulum a.</div><div><br></div><div>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi mattis placerat mauris pharetra porttitor. Vestibulum aliquam maximus purus in aliquet. Mauris tempor finibus egestas. Cras malesuada purus metus, quis congue enim sagittis vitae. Aenean risus sem, hendrerit sed turpis sagittis, sagittis ultricies dui. In id nisl a libero viverra commodo. Sed fermentum viverra nunc, nec hendrerit eros consectetur eget. Donec auctor nisl at ex porta aliquam. Maecenas tempus auctor varius.</div><div><br></div><div>Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec varius mauris turpis, eget lobortis dolor interdum at. Nam rhoncus consequat leo id hendrerit. Sed lacus risus, sollicitudin ac gravida vel, dignissim eu massa. Donec eget accumsan sem. Donec vulputate interdum felis sed vehicula. Pellentesque ut gravida lacus. Praesent sed vestibulum tortor, pulvinar dignissim odio. Donec molestie eros ac ante molestie pulvinar. Suspendisse et condimentum sem, eget ultrices sapien. Integer accumsan sed tortor eget convallis. Aenean non magna sit amet nibh ullamcorper porttitor. Quisque faucibus velit nunc, sed tincidunt mauris sagittis posuere. Suspendisse dignissim, metus at cursus aliquet, justo tortor tristique velit, at imperdiet mauris odio sit amet tortor.</div>', 'p-activity-2.jpg', '2019-04-18 14:06:00', '2019-04-18 14:06:00'),
(3, 'Lautku Jangan Kau Racuni. Program pembersihan Laut Manado', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis felis sit amet luctus ultrices. In hac habitasse platea dictumst. Ut tortor urna, fermentum at ultrices sit amet, placerat in odio. Curabitur id pulvinar massa. Pellentesque scelerisque tempor urna. Donec luctus nibh lorem, ut mollis ipsum fringilla ut. Nullam nec magna a massa commodo molestie. Integer ut iaculis purus, non luctus velit. Sed faucibus vulputate nibh consequat maximus. Maecenas id nisi lorem. Integer a dolor at elit interdum fermentum quis ornare augue. Nullam auctor nunc eget odio tincidunt sagittis. Ut tellus orci, ultricies ac justo eget, scelerisque bibendum elit. Aenean venenatis dui dui, a condimentum ligula vestibulum a.</div><div><br></div><div>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi mattis placerat mauris pharetra porttitor. Vestibulum aliquam maximus purus in aliquet. Mauris tempor finibus egestas. Cras malesuada purus metus, quis congue enim sagittis vitae. Aenean risus sem, hendrerit sed turpis sagittis, sagittis ultricies dui. In id nisl a libero viverra commodo. Sed fermentum viverra nunc, nec hendrerit eros consectetur eget. Donec auctor nisl at ex porta aliquam. Maecenas tempus auctor varius.</div><div><br></div><div>Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec varius mauris turpis, eget lobortis dolor interdum at. Nam rhoncus consequat leo id hendrerit. Sed lacus risus, sollicitudin ac gravida vel, dignissim eu massa. Donec eget accumsan sem. Donec vulputate interdum felis sed vehicula. Pellentesque ut gravida lacus. Praesent sed vestibulum tortor, pulvinar dignissim odio. Donec molestie eros ac ante molestie pulvinar. Suspendisse et condimentum sem, eget ultrices sapien. Integer accumsan sed tortor eget convallis. Aenean non magna sit amet nibh ullamcorper porttitor. Quisque faucibus velit nunc, sed tincidunt mauris sagittis posuere. Suspendisse dignissim, metus at cursus aliquet, justo tortor tristique velit, at imperdiet mauris odio sit amet tortor.</div>', 'p-activity-3.jpg', '2019-05-10 09:13:00', '2019-05-10 09:13:00'),
(4, 'Berpartisipasi Membenahi Selokan', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis felis sit amet luctus ultrices. In hac habitasse platea dictumst. Ut tortor urna, fermentum at ultrices sit amet, placerat in odio. Curabitur id pulvinar massa. Pellentesque scelerisque tempor urna. Donec luctus nibh lorem, ut mollis ipsum fringilla ut. Nullam nec magna a massa commodo molestie. Integer ut iaculis purus, non luctus velit. Sed faucibus vulputate nibh consequat maximus. Maecenas id nisi lorem. Integer a dolor at elit interdum fermentum quis ornare augue. Nullam auctor nunc eget odio tincidunt sagittis. Ut tellus orci, ultricies ac justo eget, scelerisque bibendum elit. Aenean venenatis dui dui, a condimentum ligula vestibulum a.</div><div><br></div><div>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi mattis placerat mauris pharetra porttitor. Vestibulum aliquam maximus purus in aliquet. Mauris tempor finibus egestas. Cras malesuada purus metus, quis congue enim sagittis vitae. Aenean risus sem, hendrerit sed turpis sagittis, sagittis ultricies dui. In id nisl a libero viverra commodo. Sed fermentum viverra nunc, nec hendrerit eros consectetur eget. Donec auctor nisl at ex porta aliquam. Maecenas tempus auctor varius.</div><div><br></div><div>Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec varius mauris turpis, eget lobortis dolor interdum at. Nam rhoncus consequat leo id hendrerit. Sed lacus risus, sollicitudin ac gravida vel, dignissim eu massa. Donec eget accumsan sem. Donec vulputate interdum felis sed vehicula. Pellentesque ut gravida lacus. Praesent sed vestibulum tortor, pulvinar dignissim odio. Donec molestie eros ac ante molestie pulvinar. Suspendisse et condimentum sem, eget ultrices sapien. Integer accumsan sed tortor eget convallis. Aenean non magna sit amet nibh ullamcorper porttitor. Quisque faucibus velit nunc, sed tincidunt mauris sagittis posuere. Suspendisse dignissim, metus at cursus aliquet, justo tortor tristique velit, at imperdiet mauris odio sit amet tortor.</div>', 'p-activity-4.jpg', '2019-06-23 13:18:30', '2019-06-23 13:18:30'),
(5, 'Bekerjasama dengan TNI Menanam Pohon', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis felis sit amet luctus ultrices. In hac habitasse platea dictumst. Ut tortor urna, fermentum at ultrices sit amet, placerat in odio. Curabitur id pulvinar massa. Pellentesque scelerisque tempor urna. Donec luctus nibh lorem, ut mollis ipsum fringilla ut. Nullam nec magna a massa commodo molestie. Integer ut iaculis purus, non luctus velit. Sed faucibus vulputate nibh consequat maximus. Maecenas id nisi lorem. Integer a dolor at elit interdum fermentum quis ornare augue. Nullam auctor nunc eget odio tincidunt sagittis. Ut tellus orci, ultricies ac justo eget, scelerisque bibendum elit. Aenean venenatis dui dui, a condimentum ligula vestibulum a.</div><div><br></div><div>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi mattis placerat mauris pharetra porttitor. Vestibulum aliquam maximus purus in aliquet. Mauris tempor finibus egestas. Cras malesuada purus metus, quis congue enim sagittis vitae. Aenean risus sem, hendrerit sed turpis sagittis, sagittis ultricies dui. In id nisl a libero viverra commodo. Sed fermentum viverra nunc, nec hendrerit eros consectetur eget. Donec auctor nisl at ex porta aliquam. Maecenas tempus auctor varius.</div><div><br></div><div>Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec varius mauris turpis, eget lobortis dolor interdum at. Nam rhoncus consequat leo id hendrerit. Sed lacus risus, sollicitudin ac gravida vel, dignissim eu massa. Donec eget accumsan sem. Donec vulputate interdum felis sed vehicula. Pellentesque ut gravida lacus. Praesent sed vestibulum tortor, pulvinar dignissim odio. Donec molestie eros ac ante molestie pulvinar. Suspendisse et condimentum sem, eget ultrices sapien. Integer accumsan sed tortor eget convallis. Aenean non magna sit amet nibh ullamcorper porttitor. Quisque faucibus velit nunc, sed tincidunt mauris sagittis posuere. Suspendisse dignissim, metus at cursus aliquet, justo tortor tristique velit, at imperdiet mauris odio sit amet tortor.</div>', 'p-activity-5.jpg', '2019-06-30 19:25:11', '2019-06-30 19:25:11'),
(6, 'Pemeliharaan Lingkungan Kembali Dilakukan', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis felis sit amet luctus ultrices. In hac habitasse platea dictumst. Ut tortor urna, fermentum at ultrices sit amet, placerat in odio. Curabitur id pulvinar massa. Pellentesque scelerisque tempor urna. Donec luctus nibh lorem, ut mollis ipsum fringilla ut. Nullam nec magna a massa commodo molestie. Integer ut iaculis purus, non luctus velit. Sed faucibus vulputate nibh consequat maximus. Maecenas id nisi lorem. Integer a dolor at elit interdum fermentum quis ornare augue. Nullam auctor nunc eget odio tincidunt sagittis. Ut tellus orci, ultricies ac justo eget, scelerisque bibendum elit. Aenean venenatis dui dui, a condimentum ligula vestibulum a.</div><div><br></div><div>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi mattis placerat mauris pharetra porttitor. Vestibulum aliquam maximus purus in aliquet. Mauris tempor finibus egestas. Cras malesuada purus metus, quis congue enim sagittis vitae. Aenean risus sem, hendrerit sed turpis sagittis, sagittis ultricies dui. In id nisl a libero viverra commodo. Sed fermentum viverra nunc, nec hendrerit eros consectetur eget. Donec auctor nisl at ex porta aliquam. Maecenas tempus auctor varius.</div><div><br></div><div>Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec varius mauris turpis, eget lobortis dolor interdum at. Nam rhoncus consequat leo id hendrerit. Sed lacus risus, sollicitudin ac gravida vel, dignissim eu massa. Donec eget accumsan sem. Donec vulputate interdum felis sed vehicula. Pellentesque ut gravida lacus. Praesent sed vestibulum tortor, pulvinar dignissim odio. Donec molestie eros ac ante molestie pulvinar. Suspendisse et condimentum sem, eget ultrices sapien. Integer accumsan sed tortor eget convallis. Aenean non magna sit amet nibh ullamcorper porttitor. Quisque faucibus velit nunc, sed tincidunt mauris sagittis posuere. Suspendisse dignissim, metus at cursus aliquet, justo tortor tristique velit, at imperdiet mauris odio sit amet tortor.</div>', 'p-activity-6.jpg', '2019-07-04 07:47:00', '2019-07-04 07:47:00'),
(7, 'Test WYSIWYG 2', '<div style=\"margin: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\" id=\"lipsum\"><p style=\"margin-bottom: 15px;\"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempus, erat in fringilla laoreet, neque sem tincidunt est, non tincidunt neque nibh sit amet ante. Sed tristique fringilla sapien ut vestibulum. </b><i>Pellentesque ultrices massa et venenatis ultricies. Vestibulum at ante consectetur, semper libero id, semper lorem. Nam condimentum commodo lobortis. Praesent nulla lorem, rutrum nec urna id, bibendum hendrerit lorem. </i>I<strike>nteger varius, mi et rutrum pellentesque, mi mauris eleifend mauris, eget dapibus ex massa sit amet justo. Praesent ut tellus pharetra, pulvinar tellus vel, lacinia nibh. Nulla blandit sed felis vel luctus. Phasellus viverra maximus dictum. </strike><u>Quisque tortor neque, mattis id pulvinar a, tincidunt ut nibh. Suspendisse at metus id ipsum blandit laoreet sit amet ut elit. Curabitur sit amet leo vitae risus vehicula auctor sit amet vehicula eros.</u></p><p style=\"margin-bottom: 15px;\"></p><ul><li>Proin sed risus a sem placerat suscipit ac sed diam.Â </li><li>Quisque dignissim id mauris in varius. Etiam a rutrum diam, id blandit elit.Â </li></ul><ol><li><span style=\"font-size: 1.1em; letter-spacing: 0px;\">Maecenas quis tortor id leo laoreet ultrices. Sed diam nunc,</span></li><li><span style=\"font-size: 1.1em; letter-spacing: 0px;\">faucibus tristique lorem vel, vulputate ultrices augue. Nunc ac tortor sodales, \\</span></li><ol><li><span style=\"font-size: 1.1em; letter-spacing: 0px;\">condimentum sapien in, tempor quam.Â </span></li></ol></ol><p></p></div><blockquote style=\"margin: 0 0 0 40px; border: none; padding: 0px;\"><div style=\"margin: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\"><p style=\"margin-bottom: 15px;\"><span style=\"font-size: 1.1em; letter-spacing: 0px;\">Suspendisse mollis nunc ac ante vehicula rhoncus.Â </span></p></div></blockquote><blockquote style=\"margin: 0 0 0 40px; border: none; padding: 0px;\"><blockquote style=\"margin: 0 0 0 40px; border: none; padding: 0px;\"><div style=\"margin: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\"><p style=\"margin-bottom: 15px;\"><span style=\"font-size: 1.1em; letter-spacing: 0px;\">Morbi non ullamcorper turpis. Donec nisi massa, vestibulum in dui eu, vehicula hendrerit magna. Nunc vitae magna diam.</span></p></div></blockquote></blockquote><div style=\"margin: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\"><p style=\"margin-bottom: 15px;\">In sed maximus mauris. Proin laoreet aliquam mi. Nulla facilisi. Quisque mollis, est sit amet iaculis pellentesque, lectus felis scelerisque enim, vitae accumsan ipsum nisl ac diam.Â </p><p style=\"text-align: center; margin-bottom: 15px;\">Quisque sagittis volutpat ex, vitae scelerisque tortor viverra et. Donec leo leo, tempus non ullamcorper nec, fringilla sit amet metus. Proin et mauris eget est efficitur dapibus eu pellentesque elit. Fusce volutpat mi est, nec fringilla lorem tincidunt non.</p><p style=\"text-align: right; margin-bottom: 15px;\">Maecenas pulvinar orci et dolor accumsan vehicula. Suspendisse sit amet vehicula odio. Cras auctor et magna ut maximus. Aenean tortor enim, tempor vel dignissim tincidunt, facilisis porttitor augue. Pellentesque dolor magna, viverra venenatis eros non, gravida porta est. Aliquam at dolor et erat ultrices porttitor. Cras dui metus, lacinia quis massa et, scelerisque sodales leo. Nullam at magna faucibus, pretium mi sit amet, tincidunt ante. Phasellus eget sodales erat, gravida iaculis sapien. Nam sed orci sit amet neque venenatis consectetur.</p><p style=\"margin-bottom: 15px;\">Maecenas porta lobortis ante, sit amet rhoncus eros. Phasellus vehicula dolor eget est fermentum malesuada. Aenean in tempor mi, in accumsan massa. Pellentesque egestas vehicula faucibus. Donec placerat dapibus sapien eget vestibulum. Vestibulum sagittis gravida lorem dignissim facilisis. Vestibulum fringilla enim quis vulputate tempor. Nunc eget nisi risus. Praesent imperdiet eros a venenatis porta. Curabitur eget fringilla ex, at lacinia sem. Sed sed elementum nisl. Etiam sit amet ipsum ex. Suspendisse vestibulum erat a purus lobortis, volutpat laoreet leo sagittis.</p><div><br></div></div>', '31yosemite-wallpaper-for-1366x768-67-798.jpg', '2019-07-22 16:49:22', '2019-07-24 12:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL,
  `tempat` text NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `judul`, `waktu`, `tempat`, `konten`, `gambar`) VALUES
(1, 'Menanam Pohon di Pekarangan Sekolah', '2019-04-01 07:30:00', 'Sekolah Setia Budi', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis felis sit amet luctus ultrices. In hac habitasse platea dictumst. Ut tortor urna, fermentum at ultrices sit amet, placerat in odio. Curabitur id pulvinar massa. Pellentesque scelerisque tempor urna. Donec luctus nibh lorem, ut mollis ipsum fringilla ut. Nullam nec magna a massa commodo molestie. Integer ut iaculis purus, non luctus velit. Sed faucibus vulputate nibh consequat maximus. Maecenas id nisi lorem. Integer a dolor at elit interdum fermentum quis ornare augue. Nullam auctor nunc eget odio tincidunt sagittis. Ut tellus orci, ultricies ac justo eget, scelerisque bibendum elit. Aenean venenatis dui dui, a condimentum ligula vestibulum a.</div>', 'event-1.jpg'),
(2, 'Proyek Bercocok Tanam Dari Dini', '2019-04-16 09:00:00', 'Jl. Perintisan Lama, Lapangan Tembak, Blok D20.', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis felis sit amet luctus ultrices. In hac habitasse platea dictumst. Ut tortor urna, fermentum at ultrices sit amet, placerat in odio. Curabitur id pulvinar massa. Pellentesque scelerisque tempor urna. Donec luctus nibh lorem, ut mollis ipsum fringilla ut. Nullam nec magna a massa commodo molestie. Integer ut iaculis purus, non luctus velit. Sed faucibus vulputate nibh consequat maximus. Maecenas id nisi lorem. Integer a dolor at elit interdum fermentum quis ornare augue. Nullam auctor nunc eget odio tincidunt sagittis. Ut tellus orci, ultricies ac justo eget, scelerisque bibendum elit. Aenean venenatis dui dui, a condimentum ligula vestibulum a.</div>', 'event-2.jpg'),
(3, 'Program pembersihan Laut Manado', '2019-05-06 08:00:00', 'Laut Manado', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis felis sit amet luctus ultrices. In hac habitasse platea dictumst. Ut tortor urna, fermentum at ultrices sit amet, placerat in odio. Curabitur id pulvinar massa. Pellentesque scelerisque tempor urna. Donec luctus nibh lorem, ut mollis ipsum fringilla ut. Nullam nec magna a massa commodo molestie. Integer ut iaculis purus, non luctus velit. Sed faucibus vulputate nibh consequat maximus. Maecenas id nisi lorem. Integer a dolor at elit interdum fermentum quis ornare augue. Nullam auctor nunc eget odio tincidunt sagittis. Ut tellus orci, ultricies ac justo eget, scelerisque bibendum elit. Aenean venenatis dui dui, a condimentum ligula vestibulum a.</div>', 'event-3.jpg'),
(4, 'Pembenahan Selokan', '2019-06-22 08:00:00', 'Selokan Ciburui', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis felis sit amet luctus ultrices. In hac habitasse platea dictumst. Ut tortor urna, fermentum at ultrices sit amet, placerat in odio. Curabitur id pulvinar massa. Pellentesque scelerisque tempor urna. Donec luctus nibh lorem, ut mollis ipsum fringilla ut. Nullam nec magna a massa commodo molestie. Integer ut iaculis purus, non luctus velit. Sed faucibus vulputate nibh consequat maximus. Maecenas id nisi lorem. Integer a dolor at elit interdum fermentum quis ornare augue. Nullam auctor nunc eget odio tincidunt sagittis. Ut tellus orci, ultricies ac justo eget, scelerisque bibendum elit. Aenean venenatis dui dui, a condimentum ligula vestibulum a.</div>', 'event-4.jpg'),
(5, 'Program Kerjasama TNI: Penanaman 1000 Pohon', '2019-06-29 07:30:00', 'Gg. Putri, Bogor', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis felis sit amet luctus ultrices. In hac habitasse platea dictumst. Ut tortor urna, fermentum at ultrices sit amet, placerat in odio. Curabitur id pulvinar massa. Pellentesque scelerisque tempor urna. Donec luctus nibh lorem, ut mollis ipsum fringilla ut. Nullam nec magna a massa commodo molestie. Integer ut iaculis purus, non luctus velit. Sed faucibus vulputate nibh consequat maximus. Maecenas id nisi lorem. Integer a dolor at elit interdum fermentum quis ornare augue. Nullam auctor nunc eget odio tincidunt sagittis. Ut tellus orci, ultricies ac justo eget, scelerisque bibendum elit. Aenean venenatis dui dui, a condimentum ligula vestibulum a.</div>', 'event-5.jpg'),
(6, 'Pemeliharaan Lingkungan Periodik', '2019-07-01 09:00:00', 'Jl. Angsa Terbang, Kawasan Asri, Banjar Masin.', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis felis sit amet luctus ultrices. In hac habitasse platea dictumst. Ut tortor urna, fermentum at ultrices sit amet, placerat in odio. Curabitur id pulvinar massa. Pellentesque scelerisque tempor urna. Donec luctus nibh lorem, ut mollis ipsum fringilla ut. Nullam nec magna a massa commodo molestie. Integer ut iaculis purus, non luctus velit. Sed faucibus vulputate nibh consequat maximus. Maecenas id nisi lorem. Integer a dolor at elit interdum fermentum quis ornare augue. Nullam auctor nunc eget odio tincidunt sagittis. Ut tellus orci, ultricies ac justo eget, scelerisque bibendum elit. Aenean venenatis dui dui, a condimentum ligula vestibulum a.</div>', 'event-6.jpg'),
(7, 'Workshop Pemeliharaan Lingkungan Hidup', '2019-08-14 11:00:00', 'Jl. Trembesi, The Mansion Kemayoran, Lobby Fontana.', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis felis sit amet luctus ultrices. In hac habitasse platea dictumst. Ut tortor urna, fermentum at ultrices sit amet, placerat in odio. Curabitur id pulvinar massa. Pellentesque scelerisque tempor urna. Donec luctus nibh lorem, ut mollis ipsum fringilla ut. Nullam nec magna a massa commodo molestie. Integer ut iaculis purus, non luctus velit. Sed faucibus vulputate nibh consequat maximus. Maecenas id nisi lorem. Integer a dolor at elit interdum fermentum quis ornare augue. Nullam auctor nunc eget odio tincidunt sagittis. Ut tellus orci, ultricies ac justo eget, scelerisque bibendum elit. Aenean venenatis dui dui, a condimentum ligula vestibulum a.</div>', 'event-7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `partisipasi`
--

CREATE TABLE `partisipasi` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partisipasi`
--

INSERT INTO `partisipasi` (`id`, `event_id`, `user_id`) VALUES
(2, 6, 2),
(3, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `teks1` varchar(255) NOT NULL,
  `teks2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `gambar`, `teks1`, `teks2`) VALUES
(1, 'carousel-1.jpg', '<div>BERSAMA, KITA</div><div><b>LESTARIKAN LINGKUNGAN</b></div>', '<br>'),
(2, 'carousel-2.jpg', '<div>BANTU KAMI</div><div><b>SELAMATKAN MEREKA</b></div>', '<div>Sebelum semua <b>terlambat</b> dan <b>tidak tersisa</b></div>'),
(3, 'carousel-3.jpg', '<div>PARTISIPASI ANDA <b>DIPERLUKAN</b></div><div>Selamatkan mereka dari <b>BENCANA</b></div>', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(60) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `telepon`, `email`, `password`, `level`) VALUES
(1, 'Admin', '081122223333', 'admin@admin.com', '$2y$10$o.V8Jh1nFXts2J7Px8mqFe2bYZd24QjGu8JJy7XN8JUdD2bjQifFm', 1),
(2, 'June Bakri', '089777777777', 'june@mail.com', '$2y$10$tlwzAu1hZ0cpz51DSaVOBeknKIaUaywghQGMPC24H13BX6j8tm/nK', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partisipasi`
--
ALTER TABLE `partisipasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `partisipasi`
--
ALTER TABLE `partisipasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
