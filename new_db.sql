-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2026 at 05:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` varchar(50) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` varchar(20) NOT NULL,
  `post_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `rating` varchar(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `post_id`, `user_id`, `rating`, `title`, `description`, `date`) VALUES
('InogJ2yxpLrD9LxKZSRe', 'Vkw4bIPeqXC9xYxoIFgY', '7w3VyufosNWsuJU9cgmJ', '4', 'babalikan', 'good service', '2023-06-17'),
('3CVMqqFpVvEAx6ZWqQo3', 'Vkw4bIPeqXC9xYxoIFgY', 'dYLRPa0MwDX6Wl2kupL9', '2', 'Good taste', '', '2023-06-17'),
('q4K2pcgLeDNkFfV8wzab', 'YrEwKjIniWJmf5xasLtL', 'dYLRPa0MwDX6Wl2kupL9', '5', 'nice cafe', 'babalik kami', '2023-06-17'),
('xg2p6gykAXPYv7tIgbUb', 'Vkw4bIPeqXC9xYxoIFgY', 'WlL3MOPYnijoD1Mqr77b', '5', 'fef', 'efewfefesf', '2023-06-23'),
('Z9SqVKuE4yaFKrtiuSYz', 'Vkw4bIPeqXC9xYxoIFgY', 'Ea4tQj643L2adYvzE3kX', '4', 'awdawd', 'awdwad', '2023-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
('na7FdpyLaif0JohkDpG1', 'kim', 'kim@gmail.com', '$2y$10$t/yMhZnQHkVi2xlIuV/gTeZrMS2KFqAubrGwB64hZotg1UdqBUFbS', '3N8D4oHZYT34s3h7M16Q.jpg'),
('4i1snxPwXSN8MtivzC8e', 'echo', 'jennie@gmail.com', '$2y$10$6KrJb9LWdEtgm5m/Mh5k5etPMKK2gEBK0A5BI5TStxxmDfzEkyl6m', 'DhaXrayQZgf64GWlxXrH.jpg'),
('4goKI8vW4JSZHUbd4cbC', 'Boyet Bong', 'boyetbong@gmail.com', '$2y$10$KNRqttFM7c6Jt4r23PDRF.F9JgVfenRS58W5n0Ht4TDJ2jfAG0Sg6', ''),
('7w3VyufosNWsuJU9cgmJ', 'Chamber ', 'user_c@gmail.com', '$2y$10$G4fo8LQswIuhcrHDy70aMOwX1Yv8TwSbo9Y5DC.3Gk7lOQ51SjZ0q', 'S1yYIPeYoTttWkixuLQI.png'),
('dYLRPa0MwDX6Wl2kupL9', 'Mark Lee Tadeja', 'mark@gmail.com', '$2y$10$T6QaiOmHluG57O42ALfgu.jlZQvOOfGCrts4Xomtm0Jm8EuCaZree', 'eUb7CghR29UNOmwWX4RI.jpg'),
('WlL3MOPYnijoD1Mqr77b', 'Mark Lee Tadeja', 'user_g@gmail.com', '$2y$10$LODQMs3WNFAPtLdQWlNp8uNqUESK0ZCwPdCov2n3QyPKUDhrLk7T2', 'x8EFLO7Ba1yzNvW2Nkgn.png'),
('CMoEF4s2rUnM5gXZPFLR', 'Mark Lee Tadeja', 'marklee@gmail.com', '$2y$10$/2KicY6M2FiCzYmO0yA4xOt7N834mNQQMzkFEOHc5zazDxMZgFKt.', ''),
('Ea4tQj643L2adYvzE3kX', 'Sarah', 'sarah@gmail.com', '$2y$10$ElnBQ1r2sqZApFiO9wx44eSQBD5O0hEWQXiIznPsS22QGxlXk3Dby', ''),
('ACOHWpKIU945gavUqXVJ', 'Mark Lee Tadeja', 'dadejamarklee@gmail.com', '$2y$10$8l4bTU1Zorhlp8Tmf1E90.FZosztQ2dSgqouhdIPD4FJdeuP/PQkK', 'W56n04CdRIGMSuX0AMnm.jpg'),
('Ox8sJt6iFPxEACYrWaMq', 'Geraldine Nino', 'mica@gmail.com', '$2y$10$dM4LMrCIO6RxU7dR7/ng6.nZR4xh8ws3JTnQZy6WFutoma3a8Vts.', 'XJ0ey1vyIWRRwquiYrjP.png');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `title`, `location`, `phone`, `image`) VALUES
('Vkw4bIPeqXC9xYxoIFgY', 'Dagupan Boneless Bangus', 'Malimgas Public Market, Galvan St, Downtown Distri', '0919 712 6809', 'gc79ACmnQxJERgTCfA5H.jpg'),
('HiDb9EdeD60i5YSvUKqI', 'CBN Boneless Bangus', '09, National Highway, Bonuan, Dagupan City, 2400', '(075) 653 2139', 'zrSwSdyx5DGDQo7whlY8.jpg'),
('CRbTXMw324G1DvPZn8sv', 'MG Dagupan Boneless Bangus Production', '384P+2JP, Judge Jose de Venecia Ext, Dagupan, Pangasinan', '0912 148 1136', 'QehyfpQpX5l6hcp8C5Yc.png'),
('fapkiSjuhonETpqRs14N', 'Nick Ugaban Boneless Bangus', 'Dagupan Malimgas Public Market, Galvan St, Barangay 2&3, Dagupan, 2400 Pangasinan', '0946 316 6036', 'dOyoug2SAw7hx4gvVum9.png'),
('DwoKXRbhbWt4eQAhTl64', 'PEARL JAI KALESKES and PIGAR-PIGAR', '414 Carael Rd, Dagupan, 2417 Pangasinan', '0908 272 2001', 'km8tvmLN0UczKN54qP4A.png'),
('n9xsCp3eeYJmbXkvDf01', 'J&B Pigar-Pigar & Kaleskes', '289C+P8R, Dagupan - Binmaley Rd, Dagupan, Pangasinan', '09137126202', '0bVavSeMmtcAmOw1FQQm.png'),
('CklbUY80uGy4LNWRFJxr', 'Kaleskesan', 'Address: 28RR+VRG, Downtown District, Dagupan, Pangasinan', '0910 112 6809', 'v6KBlF5QVQMi03mtTy4m.jpg'),
('6uI9YiYZTcb3LNRGdeJO', 'Uson Pigar-Pigar Original', '289C+WJ5, Dagupan - Binmaley Rd, Dagupan, Pangasinan', '(075) 653 0812', 'vO6N7ValiqtzgYcUhyws.jpg'),
('IJ1YTjGS3ECKmErRx5at', 'EB PIGAR-PIGAR', '28RP+MP3, Galvan Street, cor Gomez Street, Barangay Galvan, Dagupan, 2400 Pangasinan', '0912 112 6751', 'iTgxu4elzam2jUKGn0ns.jpg'),
('3CM5WCB2uhNQVlP7uVyL', 'Great Taste Pigar Pigar Restaurant', 'Bonuan, Dagupan, Pangasinan', '0907 644 8867', 'EhxLFfYw7W51uE2Z9QZy.jpg'),
('JGhkpyhNafBKjCrL9M0t', 'Veronica Uson Pigar-pigar', '28FH+5F3, Dagupan, Pangasinan', '09932126301', 'eVltlJ8SzjWCbV44rufd.jpg'),
('cWFx0JBSJrlEXLwT3ONZ', 'San Carlos Mario Mango and Bioco Buying Station', 'W8FV+5RG, Palaris St, San Carlos City, Pangasinan', '0995 436 7554', '1pNp2959hxoLAGS9Ebfs.jpg'),
('pxe1JXdTyEBWIY74Tljg', 'San Carlos Thom and Crookies Bulaluhan Ihawan at i', '108 Dr. Martin P. Posadas Avenue, San Carlos City, 2420 Pangasinan', '0906 464 3217', 'ThE23H2pU0S7nnijADkL.jpg'),
('stiS7ZdqoEQSD6mE7ZRJ', 'San Carlos Roberto’s Backyard', 'Estanquero, San Carlos City, Pangasinan', ' 0918 497 0230', 's294adC0vXNfL6tcUEot.png'),
('FWLERWecGWle2SHpJ7bD', 'San Carlos Ground n&#39; Pound Garage Grill', '109 Gomez St, San Carlos City, Pangasinan', '0999 841 7547', 'Gg3Yu8I9o66lTdDUISVo.jpg'),
('VCQ0ltofm90dCea6tME8', 'Alaminos Jennelyn&#39;s Alaminos Longganisa', '#152 Poblacion Sadsaran Street, Alaminos City Pangasinan After CSI Alaminos,Infront Northpoint Devel', '0918 284 6543', 'wVabvQGMQqhdwWijrvhj.jpg'),
('YrEwKjIniWJmf5xasLtL', 'Alaminos Celia&#39;s Cafe', '4XWG+JFQ, SSS Bldg, 170, Alaminos, 2404 Pangasinan', '0926 008 7066', 'jRyvEjcSKGrZYF8yHeWS.jpg'),
('gTh2jiuSQLWbabCOoQKp', 'Alaminos Shimas Cafe and Restaurant', '5XHV+959, Alaminos - Lucap Rd, Alaminos, Pangasinan', '0919 232 0956', 'fMz7GujXnsKsJNpKttA9.jpg'),
('pk82oLV2I7QxW8Gl22Pj', 'Alaminos Eliana&#39;s Resto Grill', '4XPV+XQG, San Vicente, Alaminos, Pangasinan', '0968 206 7000', 'bmtUrTsAKwpM8vgxH8XC.jpg'),
('sluQUF9HpkZEMTSspDRF', 'Alaminos Daisy&#39;s Puto and Sari-Sari Store', '5X6V+J68, Sta. Maria, Alaminos, Pangasinan', '0947 575 0971', 'z3gVttK36yFJ20tckb2X.jpg'),
('QSLTGfFk49iFFzxRKRae', 'Alaminos Pasalubong Center Alaminos', 'San Jose Dr, Poblacion, Alaminos, 2404 Pangasinan', '0993 348 9038', 'GJvRo10tUyDr6GmH1pJm.jpg'),
('SwagjkGcmf4FpD4o70Jv', 'Alaminos Terraces Cafe', ' Ext, Santa Maria St, Alaminos, 2404 Pangasinan', '0945 604 0038', 'T89aDf8uwnlpFEuaE07f.jpg'),
('XeGkLJz6W8Al9A7SS9Ss', 'Alaminos Daisy&#39;s Puto and Sari-Sari Store', '5X6V+J68, Sta. Maria, Alaminos, Pangasinan', '0947 575 0971', 'qPvjFrQ6PC128EQg2QON.png'),
('AjrO63bNykrxArI76utg', 'Urdaneta R. GALINATO’S ', '17a Prov’l Road Bayaoas , Urdaneta City, Pangasinan', '0939 039 1210', 'XM6BbcxQxNzRM4HQjCAf.jpg'),
('TofD9aHkvC6kNjZcm7ZT', 'Urdaneta R. GALINATO’S ', '17a Prov’l Road Bayaoas , Urdaneta City, Pangasinan', '0939 039 1210', 'OTcOSr19QTMLFe3FDTYg.jpg'),
('JVNXfA01RgXhsqpo72G3', 'Urdaneta SmokeFish Tinapa Shop', 'Estrada St, Urdaneta, Pangasinan', '0945 841 8720', 'd8F3YeN89ZM2XGTM06SR.jpg'),
('mylpavbvcBUkpBpIaVxD', 'Urdaneta Lorena&#39;s Fish Products', 'Smoked and Dried Fish Section, Urdaneta Public Market, Urdaneta City, Pangasinan', ' 0995 399 0213', 'lXmntPbYjK0DQjbvav1V.jpg'),
('oCIVpdi4dKEQSNHGyD42', 'Urdaneta Aling Susan’s Tupig', 'Alexander St., Urdaneta City, Pangasinan, Urdaneta, 2428 Pangasinan', '0929 395 3836', '95Mb0llGeEvNw2JIV9hn.jpg'),
('sMgtMPXx90dRMu7rrVBC', 'Urdaneta Lumen Special Tupig', 'XHGC+24M, MacArthur Hwy, Urdaneta, Pangasinan', ' 0910 887 2972', '7b8haLJCg4vHsSvLsaR2.jpg'),
('DEA91GfGqnt9iJ30vjQr', 'Urdaneta Neri’s Special Tupig ', 'XHG8+CVM, National Highway,NH7, Urdaneta, 2428 Pangasinan', '0945 329 8940', '77S1aH0cAC72bsTSO8Sn.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
