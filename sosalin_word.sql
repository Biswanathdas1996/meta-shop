-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2022 at 12:29 PM
-- Server version: 5.7.40
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sosalin_word`
--

-- --------------------------------------------------------

--
-- Table structure for table `000_meta_product_table`
--

CREATE TABLE `000_meta_product_table` (
  `id` int(2) NOT NULL,
  `name` varchar(355) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(355) DEFAULT NULL,
  `img` varchar(355) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `rack` int(11) DEFAULT NULL,
  `glb_model` varchar(355) DEFAULT NULL,
  `tag` varchar(355) DEFAULT NULL,
  `scale` varchar(355) DEFAULT NULL,
  `rotation` varchar(355) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `111_meta_product_table`
--

CREATE TABLE `111_meta_product_table` (
  `id` int(2) NOT NULL,
  `name` varchar(355) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(355) DEFAULT NULL,
  `img` varchar(355) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `rack` int(11) DEFAULT NULL,
  `glb_model` varchar(355) DEFAULT NULL,
  `tag` varchar(355) DEFAULT NULL,
  `scale` varchar(355) DEFAULT NULL,
  `rotation` varchar(355) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `111_meta_product_table`
--

INSERT INTO `111_meta_product_table` (`id`, `name`, `price`, `description`, `img`, `qty`, `rack`, `glb_model`, `tag`, `scale`, `rotation`, `location_id`, `status`) VALUES
(1, 'KGF - Chapter 2 - Front row', 200, 'Nisi aut reiciendis ', NULL, 6, NULL, 'https://sosal.in/meta-console/control/pages/111/models/tropicana2.glb', 'tropicana2.glb', '5 5 5', '0 0 0', 3, 0),
(2, 'Tropicana Pomegranate Delight', 200, 'Nisi aut reiciendis ', NULL, 7, NULL, 'https://sosal.in/meta-console/control/pages/111/models/tropicana3.glb', 'tropicana3.glb', '5 5 5', '0 0 0', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `222_meta_product_table`
--

CREATE TABLE `222_meta_product_table` (
  `id` int(2) NOT NULL,
  `name` varchar(355) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(355) DEFAULT NULL,
  `img` varchar(355) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `rack` int(11) DEFAULT NULL,
  `glb_model` varchar(355) DEFAULT NULL,
  `tag` varchar(355) DEFAULT NULL,
  `scale` varchar(355) DEFAULT NULL,
  `rotation` varchar(355) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `333_meta_product_table`
--

CREATE TABLE `333_meta_product_table` (
  `id` int(2) NOT NULL,
  `name` varchar(355) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(355) DEFAULT NULL,
  `img` varchar(355) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `rack` int(11) DEFAULT NULL,
  `glb_model` varchar(355) DEFAULT NULL,
  `tag` varchar(355) DEFAULT NULL,
  `scale` varchar(355) DEFAULT NULL,
  `rotation` varchar(355) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `444_meta_product_table`
--

CREATE TABLE `444_meta_product_table` (
  `id` int(2) NOT NULL,
  `name` varchar(355) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(355) DEFAULT NULL,
  `img` varchar(355) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `rack` int(11) DEFAULT NULL,
  `glb_model` varchar(355) DEFAULT NULL,
  `tag` varchar(355) DEFAULT NULL,
  `scale` varchar(355) DEFAULT NULL,
  `rotation` varchar(355) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `555_meta_product_table`
--

CREATE TABLE `555_meta_product_table` (
  `id` int(2) NOT NULL,
  `name` varchar(355) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(355) DEFAULT NULL,
  `img` varchar(355) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `rack` int(11) DEFAULT NULL,
  `glb_model` varchar(355) DEFAULT NULL,
  `tag` varchar(355) DEFAULT NULL,
  `scale` varchar(355) DEFAULT NULL,
  `rotation` varchar(355) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `555_meta_product_table`
--

INSERT INTO `555_meta_product_table` (`id`, `name`, `price`, `description`, `img`, `qty`, `rack`, `glb_model`, `tag`, `scale`, `rotation`, `location_id`, `status`) VALUES
(1, 'Tropicana Pomegranate Delight', 200, 'tuitit', NULL, 5, NULL, 'https://sosal.in/meta-console/control/pages/555/models/tropicana2.glb', 'tropicana2.glb', '5 5 5', '0 0 0', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `666_meta_product_table`
--

CREATE TABLE `666_meta_product_table` (
  `id` int(2) NOT NULL,
  `name` varchar(355) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(355) DEFAULT NULL,
  `img` varchar(355) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `rack` int(11) DEFAULT NULL,
  `glb_model` varchar(355) DEFAULT NULL,
  `tag` varchar(355) DEFAULT NULL,
  `scale` varchar(355) DEFAULT NULL,
  `rotation` varchar(355) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `777_meta_product_table`
--

CREATE TABLE `777_meta_product_table` (
  `id` int(2) NOT NULL,
  `name` varchar(355) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(355) DEFAULT NULL,
  `img` varchar(355) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `rack` int(11) DEFAULT NULL,
  `glb_model` varchar(355) DEFAULT NULL,
  `tag` varchar(355) DEFAULT NULL,
  `scale` varchar(355) DEFAULT NULL,
  `rotation` varchar(355) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `888_meta_product_table`
--

CREATE TABLE `888_meta_product_table` (
  `id` int(2) NOT NULL,
  `name` varchar(355) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(355) DEFAULT NULL,
  `img` varchar(355) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `rack` int(11) DEFAULT NULL,
  `glb_model` varchar(355) DEFAULT NULL,
  `tag` varchar(355) DEFAULT NULL,
  `scale` varchar(355) DEFAULT NULL,
  `rotation` varchar(355) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `888_meta_product_table`
--

INSERT INTO `888_meta_product_table` (`id`, `name`, `price`, `description`, `img`, `qty`, `rack`, `glb_model`, `tag`, `scale`, `rotation`, `location_id`, `status`) VALUES
(1, 'Tropicana Pomegranate Delight', 200, 'Nisi aut reiciendis ', NULL, 4, NULL, 'https://sosal.in/meta-console/control/pages/888/models/Sparay.glb', 'Sparay.glb', '5 5 5', '0 0 0', 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `999_meta_product_table`
--

CREATE TABLE `999_meta_product_table` (
  `id` int(2) NOT NULL,
  `name` varchar(355) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(355) DEFAULT NULL,
  `img` varchar(355) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `rack` int(11) DEFAULT NULL,
  `glb_model` varchar(355) DEFAULT NULL,
  `tag` varchar(355) DEFAULT NULL,
  `scale` varchar(355) DEFAULT NULL,
  `rotation` varchar(355) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `1212_meta_product_table`
--

CREATE TABLE `1212_meta_product_table` (
  `id` int(2) NOT NULL,
  `name` varchar(355) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(355) DEFAULT NULL,
  `img` varchar(355) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `rack` int(11) DEFAULT NULL,
  `glb_model` varchar(355) DEFAULT NULL,
  `tag` varchar(355) DEFAULT NULL,
  `scale` varchar(355) DEFAULT NULL,
  `rotation` varchar(355) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `industry` varchar(355) DEFAULT NULL,
  `name` varchar(355) DEFAULT NULL,
  `address` varchar(355) DEFAULT NULL,
  `username` varchar(355) DEFAULT NULL,
  `password` varchar(355) DEFAULT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `industry`, `name`, `address`, `username`, `password`, `status`) VALUES
(1, 'FMCG', 'Shana Rivera', 'Sunt quis aut repreh', 'aaa', 'aaa', 1),
(2, 'Pharma', 'Murphy Perry', 'Doloribus magnam vol', 'ooo', 'ooo', 1),
(3, 'FMCG', 'Biswanath Das', 'Dignissimos aut sit ,721333', 'www', 'www', 1),
(4, 'Pharma', 'Ora Rojas', 'Et porro laboris und', 'zigif', 'Pa$$w0rd!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `blockchain` varchar(355) DEFAULT NULL,
  `network_id` int(11) NOT NULL,
  `network_name` varchar(355) DEFAULT NULL,
  `currency_symbol` varchar(355) DEFAULT NULL,
  `network_url` varchar(355) DEFAULT NULL,
  `ChainExplorerAPIKEY` varchar(350) DEFAULT NULL,
  `WalletPrivateKey` varchar(355) DEFAULT NULL,
  `InfuraProjectId` varchar(355) DEFAULT NULL,
  `InfuraNodeURL` varchar(355) DEFAULT NULL,
  `Web3Storage` varchar(355) DEFAULT NULL,
  `awsAccessKeyId` varchar(355) DEFAULT NULL,
  `awsSecretAccessKey` varchar(355) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `blockchain_base_api` varchar(355) DEFAULT NULL,
  `opensea_base_url` varchar(355) DEFAULT NULL,
  `ms_dynamics_base_url` varchar(355) DEFAULT NULL,
  `ms_dynamics_client_id` varchar(355) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `blockchain`, `network_id`, `network_name`, `currency_symbol`, `network_url`, `ChainExplorerAPIKEY`, `WalletPrivateKey`, `InfuraProjectId`, `InfuraNodeURL`, `Web3Storage`, `awsAccessKeyId`, `awsSecretAccessKey`, `status`, `blockchain_base_api`, `opensea_base_url`, `ms_dynamics_base_url`, `ms_dynamics_client_id`) VALUES
(1, 'Ethereum', 5, 'goerli', 'ETH', 'https://goerli.etherscan.io', 'WCVDU52748WW4F7EKDEDB89HKH41BIA4N2', '8c5948e0dbc4163b176ea8cfb7ca6a3d2e9c52d2d1df7c363fababb8f2eb6f42', '24022fda545f41beb59334bdbaf3ef32', 'https://goerli.infura.io/v3/24022fda545f41beb59334bdbaf3ef32', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJkaWQ6ZXRocjoweDEzMkRhNjE2N2U0OTY2Y2M2ODBlMjNlNzdjMmM5NjI2YWZFQjkyNzMiLCJpc3MiOiJ3ZWIzLXN0b3JhZ2UiLCJpYXQiOjE2NjAxOTIxNjI3MDEsIm5hbWUiOiJ0ZXN0In0.nrWyG-RPCty28GQLPOfjCacYoOoURarCyo6nh3t0QCY', NULL, NULL, 1, 'https://api-goerli.etherscan.io/api', 'https://testnets.opensea.io', 'https://dynamicswrapper.azurewebsites.net/api', '6599b26b-951b-4a5b-887c-4af57c57f63f'),
(2, 'Polygon', 80001, 'mumbai', 'MATIC', 'https://mumbai.polygonscan.com', 'G2FQ3WI7SWZDIEQE8CCCSZHJ1M97NXNYAE', '8c5948e0dbc4163b176ea8cfb7ca6a3d2e9c52d2d1df7c363fababb8f2eb6f42', NULL, '', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJkaWQ6ZXRocjoweDEzMkRhNjE2N2U0OTY2Y2M2ODBlMjNlNzdjMmM5NjI2YWZFQjkyNzMiLCJpc3MiOiJ3ZWIzLXN0b3JhZ2UiLCJpYXQiOjE2NjAxOTIxNjI3MDEsIm5hbWUiOiJ0ZXN0In0.nrWyG-RPCty28GQLPOfjCacYoOoURarCyo6nh3t0QCY', NULL, NULL, 0, 'https://api-testnet.polygonscan.com/api', 'https://testnets.opensea.io', 'https://dynamicswrapper.azurewebsites.net/api', '6599b26b-951b-4a5b-887c-4af57c57f63f'),
(3, 'pwcPrivetNetwork', 14333, 'pwcPrivetNetwork', 'ETH', 'https://goerli.etherscan.io', 'WCVDU52748WW4F7EKDEDB89HKH41BIA4N2', 'cf89a65abbe4cd80548d019aecb2927dacb52c04988905fd8e75dc8f982b391c', '', '', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJkaWQ6ZXRocjoweDEzMkRhNjE2N2U0OTY2Y2M2ODBlMjNlNzdjMmM5NjI2YWZFQjkyNzMiLCJpc3MiOiJ3ZWIzLXN0b3JhZ2UiLCJpYXQiOjE2NjAxOTIxNjI3MDEsIm5hbWUiOiJ0ZXN0In0.nrWyG-RPCty28GQLPOfjCacYoOoURarCyo6nh3t0QCY', NULL, NULL, 0, 'https://api-goerli.etherscan.io/api', 'https://testnets.opensea.io', 'https://dynamicswrapper.azurewebsites.net/api', '6599b26b-951b-4a5b-887c-4af57c57f63f');

-- --------------------------------------------------------

--
-- Table structure for table `ipfs`
--

CREATE TABLE `ipfs` (
  `id` int(11) NOT NULL,
  `data` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipfs`
--

INSERT INTO `ipfs` (`id`, `data`) VALUES
(1, 'eyIxIjp7Im5hbWUiOiJSZXF1ZXN0ZWQiLCJwb3NpdGlvbiI6IjEiLCJpdGVtcyI6W119LCIyIjp7Im5hbWUiOiJUbyBkbyIsInBvc2l0aW9uIjoiMiIsIml0ZW1zIjpbXX0sIjMiOnsibmFtZSI6IkluIFByb2dyZXNzIiwicG9zaXRpb24iOiIzIiwiaXRlbXMiOltdfSwiNCI6eyJuYW1lIjoiRG9uZSIsInBvc2l0aW9uIjoiNCIsIml0ZW1zIjpbXX0sIjUiOnsibmFtZSI6IkNsb3NlZCIsInBvc2l0aW9uIjoiNSIsIml0ZW1zIjpbXX19'),
(2, 'IjxwPkVvcywgcmVwdWRpYW5kYWUgaXN0LjwvcD4i'),
(3, 'IjxwPlZlbCB2ZWxpdCByZXJ1bSBlbGlnLjwvcD4i'),
(4, 'eyJpZCI6IjVjMzJmYjg2LTQwMmYtNGNhZC1hMjllLWU4MjllZmI2NmFlYiIsIm5hbWUiOiJDb25zZWN0ZXR1ciByZXByZWhlbiIsInR5cGUiOiJidWciLCJwcmlvcml0eSI6ImNyaXRpY2FsIiwic3Rvcnlwb2ludCI6MTAsImRlc2NyaXB0aW9uIjoiaHR0cHM6Ly9zb3NhbC5pbi9lbmRwb2ludHMvaXBmcy9mZXRjaC1pcGZzLnBocD9pZD0yIiwiQUMiOiJodHRwczovL3Nvc2FsLmluL2VuZHBvaW50cy9pcGZzL2ZldGNoLWlwZnMucGhwP2lkPTMiLCJsaW5rZWRTdG9yaWVzIjoibnVsbCIsInRhc2tzIjoiW10ifQ=='),
(5, 'eyIxIjp7Im5hbWUiOiJSZXF1ZXN0ZWQiLCJwb3NpdGlvbiI6IjEiLCJpdGVtcyI6W3siaW5kZXgiOiIwIiwiaWQiOiI1YzMyZmI4Ni00MDJmLTRjYWQtYTI5ZS1lODI5ZWZiNjZhZWIiLCJzcHJpbnRJZCI6IjAiLCJhYmlMaW5rIjoiaHR0cHM6Ly9zb3NhbC5pbi9lbmRwb2ludHMvaXBmcy9mZXRjaC1pcGZzLnBocD9pZD00Iiwib3duZXIiOiIiLCJyZXBvdGVyIjoiNjIxZTFjNzctNTllMS00YTM0LTgwZTItNDMxMTM4MjZmNjE3IiwicG9zaXRpb24iOiIxIiwidHJhY2tpbmciOiJbe1widGltZVwiOlwiMjAyMi0xMC0xNFQwNzo1MjoyMi45MTFaXCIsXCJzdGF0dXNcIjpcImJ1ZyBjcmVhdGVkIHdpdGggY3JpdGljYWwgcHJpb3JpdHkgJiAxMCBzdG9yeXBvaW50IG9uIFNwcmludC11bmRlZmluZWRcIixcInVwZGF0ZWRCeVwiOlwiNjIxZTFjNzctNTllMS00YTM0LTgwZTItNDMxMTM4MjZmNjE3XCJ9LHtcInRpbWVcIjpcIjIwMjItMTAtMTRUMDc6NTM6MjQuMzg4WlwiLFwic3RhdHVzXCI6XCI8ZGl2IGNsYXNzPVxcXCJ0cmFjay1kaXZcXFwiPlRpY2tldCBhZGRlZCB0byBTcHJpbnQtMCA8aW1nIGNsYXNzPVxcXCJ0cmFjay1pbWctcHJvZmlsZVxcXCIgc3R5bGU9XFxcImJvcmRlci1yYWRpdXM6IDUwJTsgbWFyZ2luOjVweDtcXFwiIHNyYz1cXFwiaHR0cHM6Ly9iYWZ5YmVpZDN3YmhneWNtd2tmdGpibmdrYWpnYmkzaWtpc2tvM3QzeHplbmV4am1odHQycXc1bWttNC5pcGZzLmR3ZWIubGluay8xMmFiYzUxMzgwNzA1MDMuNjIxNjRjNmI4MDgyNi5qcGdcXFwiIGhlaWdodD1cXFwiMzBweFxcXCIgd2lkdGg9XFxcIjMwcHhcXFwiIC8+IDxiPlRlbXBvcmEgbW9sZXN0aWFzIG1pPC9iPjwvZGl2PlwiLFwidXBkYXRlZEJ5XCI6XCI2MjFlMWM3Ny01OWUxLTRhMzQtODBlMi00MzExMzgyNmY2MTdcIn1dIn1dfSwiMiI6eyJuYW1lIjoiVG8gZG8iLCJwb3NpdGlvbiI6IjIiLCJpdGVtcyI6W119LCIzIjp7Im5hbWUiOiJJbiBQcm9ncmVzcyIsInBvc2l0aW9uIjoiMyIsIml0ZW1zIjpbXX0sIjQiOnsibmFtZSI6IkRvbmUiLCJwb3NpdGlvbiI6IjQiLCJpdGVtcyI6W119LCI1Ijp7Im5hbWUiOiJDbG9zZWQiLCJwb3NpdGlvbiI6IjUiLCJpdGVtcyI6W119fQ=='),
(6, 'eyIxIjp7Im5hbWUiOiJSZXF1ZXN0ZWQiLCJwb3NpdGlvbiI6IjEiLCJpdGVtcyI6W119LCIyIjp7Im5hbWUiOiJUbyBkbyIsInBvc2l0aW9uIjoiMiIsIml0ZW1zIjpbeyJpbmRleCI6IjAiLCJpZCI6IjVjMzJmYjg2LTQwMmYtNGNhZC1hMjllLWU4MjllZmI2NmFlYiIsInNwcmludElkIjoiMCIsImFiaUxpbmsiOiJodHRwczovL3Nvc2FsLmluL2VuZHBvaW50cy9pcGZzL2ZldGNoLWlwZnMucGhwP2lkPTQiLCJvd25lciI6IiIsInJlcG90ZXIiOiI2MjFlMWM3Ny01OWUxLTRhMzQtODBlMi00MzExMzgyNmY2MTciLCJwb3NpdGlvbiI6IjEiLCJ0cmFja2luZyI6Ilt7XCJ0aW1lXCI6XCIyMDIyLTEwLTE0VDA3OjUyOjIyLjkxMVpcIixcInN0YXR1c1wiOlwiYnVnIGNyZWF0ZWQgd2l0aCBjcml0aWNhbCBwcmlvcml0eSAmIDEwIHN0b3J5cG9pbnQgb24gU3ByaW50LXVuZGVmaW5lZFwiLFwidXBkYXRlZEJ5XCI6XCI2MjFlMWM3Ny01OWUxLTRhMzQtODBlMi00MzExMzgyNmY2MTdcIn0se1widGltZVwiOlwiMjAyMi0xMC0xNFQwNzo1MzoyNC4zODhaXCIsXCJzdGF0dXNcIjpcIjxkaXYgY2xhc3M9XFxcInRyYWNrLWRpdlxcXCI+VGlja2V0IGFkZGVkIHRvIFNwcmludC0wIDxpbWcgY2xhc3M9XFxcInRyYWNrLWltZy1wcm9maWxlXFxcIiBzdHlsZT1cXFwiYm9yZGVyLXJhZGl1czogNTAlOyBtYXJnaW46NXB4O1xcXCIgc3JjPVxcXCJodHRwczovL2JhZnliZWlkM3diaGd5Y213a2Z0amJuZ2thamdiaTNpa2lza28zdDN4emVuZXhqbWh0dDJxdzVta200LmlwZnMuZHdlYi5saW5rLzEyYWJjNTEzODA3MDUwMy42MjE2NGM2YjgwODI2LmpwZ1xcXCIgaGVpZ2h0PVxcXCIzMHB4XFxcIiB3aWR0aD1cXFwiMzBweFxcXCIgLz4gPGI+VGVtcG9yYSBtb2xlc3RpYXMgbWk8L2I+PC9kaXY+XCIsXCJ1cGRhdGVkQnlcIjpcIjYyMWUxYzc3LTU5ZTEtNGEzNC04MGUyLTQzMTEzODI2ZjYxN1wifV0ifV19LCIzIjp7Im5hbWUiOiJJbiBQcm9ncmVzcyIsInBvc2l0aW9uIjoiMyIsIml0ZW1zIjpbXX0sIjQiOnsibmFtZSI6IkRvbmUiLCJwb3NpdGlvbiI6IjQiLCJpdGVtcyI6W119LCI1Ijp7Im5hbWUiOiJDbG9zZWQiLCJwb3NpdGlvbiI6IjUiLCJpdGVtcyI6W119fQ=='),
(7, 'eyJpZCI6IjVjMzJmYjg2LTQwMmYtNGNhZC1hMjllLWU4MjllZmI2NmFlYiIsIm5hbWUiOiJDb25zZWN0ZXR1ciByZXByZWhlbiIsInR5cGUiOiJidWciLCJwcmlvcml0eSI6ImNyaXRpY2FsIiwic3Rvcnlwb2ludCI6MTAsImRlc2NyaXB0aW9uIjoiaHR0cHM6Ly9zb3NhbC5pbi9lbmRwb2ludHMvaXBmcy9mZXRjaC1pcGZzLnBocD9pZD0yIiwiQUMiOiJodHRwczovL3Nvc2FsLmluL2VuZHBvaW50cy9pcGZzL2ZldGNoLWlwZnMucGhwP2lkPTMiLCJsaW5rZWRTdG9yaWVzIjoibnVsbCIsInRhc2tzIjoiW3tcInRyYWl0X3R5cGVcIjpcIlF1aSBpdXN0byBxdWFlIHZlbGl0XCIsXCJvd25lclwiOlwiNjIxZTFjNzctNTllMS00YTM0LTgwZTItNDMxMTM4MjZmNjE3XCIsXCJzdGF0dXNcIjpcImlucHJvZ3Jlc3NcIn1dIn0='),
(8, 'eyIxIjp7Im5hbWUiOiJSZXF1ZXN0ZWQiLCJwb3NpdGlvbiI6IjEiLCJpdGVtcyI6W119LCIyIjp7Im5hbWUiOiJUbyBkbyIsInBvc2l0aW9uIjoiMiIsIml0ZW1zIjpbXX0sIjMiOnsibmFtZSI6IkluIFByb2dyZXNzIiwicG9zaXRpb24iOiIzIiwiaXRlbXMiOltdfSwiNCI6eyJuYW1lIjoiRG9uZSIsInBvc2l0aW9uIjoiNCIsIml0ZW1zIjpbXX0sIjUiOnsibmFtZSI6IkNsb3NlZCIsInBvc2l0aW9uIjoiNSIsIml0ZW1zIjpbXX19'),
(9, 'eyIxIjp7Im5hbWUiOiJSZXF1ZXN0ZWQiLCJwb3NpdGlvbiI6IjEiLCJpdGVtcyI6W119LCIyIjp7Im5hbWUiOiJUbyBkbyIsInBvc2l0aW9uIjoiMiIsIml0ZW1zIjpbXX0sIjMiOnsibmFtZSI6IkluIFByb2dyZXNzIiwicG9zaXRpb24iOiIzIiwiaXRlbXMiOlt7ImluZGV4IjoiMCIsImlkIjoiNWMzMmZiODYtNDAyZi00Y2FkLWEyOWUtZTgyOWVmYjY2YWViIiwic3ByaW50SWQiOiIwIiwiYWJpTGluayI6Imh0dHBzOi8vc29zYWwuaW4vZW5kcG9pbnRzL2lwZnMvZmV0Y2gtaXBmcy5waHA/aWQ9NCIsIm93bmVyIjoiIiwicmVwb3RlciI6IjYyMWUxYzc3LTU5ZTEtNGEzNC04MGUyLTQzMTEzODI2ZjYxNyIsInBvc2l0aW9uIjoiMSIsInRyYWNraW5nIjoiW3tcInRpbWVcIjpcIjIwMjItMTAtMTRUMDc6NTI6MjIuOTExWlwiLFwic3RhdHVzXCI6XCJidWcgY3JlYXRlZCB3aXRoIGNyaXRpY2FsIHByaW9yaXR5ICYgMTAgc3Rvcnlwb2ludCBvbiBTcHJpbnQtdW5kZWZpbmVkXCIsXCJ1cGRhdGVkQnlcIjpcIjYyMWUxYzc3LTU5ZTEtNGEzNC04MGUyLTQzMTEzODI2ZjYxN1wifSx7XCJ0aW1lXCI6XCIyMDIyLTEwLTE0VDA3OjUzOjI0LjM4OFpcIixcInN0YXR1c1wiOlwiPGRpdiBjbGFzcz1cXFwidHJhY2stZGl2XFxcIj5UaWNrZXQgYWRkZWQgdG8gU3ByaW50LTAgPGltZyBjbGFzcz1cXFwidHJhY2staW1nLXByb2ZpbGVcXFwiIHN0eWxlPVxcXCJib3JkZXItcmFkaXVzOiA1MCU7IG1hcmdpbjo1cHg7XFxcIiBzcmM9XFxcImh0dHBzOi8vYmFmeWJlaWQzd2JoZ3ljbXdrZnRqYm5na2FqZ2JpM2lraXNrbzN0M3h6ZW5leGptaHR0MnF3NW1rbTQuaXBmcy5kd2ViLmxpbmsvMTJhYmM1MTM4MDcwNTAzLjYyMTY0YzZiODA4MjYuanBnXFxcIiBoZWlnaHQ9XFxcIjMwcHhcXFwiIHdpZHRoPVxcXCIzMHB4XFxcIiAvPiA8Yj5UZW1wb3JhIG1vbGVzdGlhcyBtaTwvYj48L2Rpdj5cIixcInVwZGF0ZWRCeVwiOlwiNjIxZTFjNzctNTllMS00YTM0LTgwZTItNDMxMTM4MjZmNjE3XCJ9XSJ9XX0sIjQiOnsibmFtZSI6IkRvbmUiLCJwb3NpdGlvbiI6IjQiLCJpdGVtcyI6W119LCI1Ijp7Im5hbWUiOiJDbG9zZWQiLCJwb3NpdGlvbiI6IjUiLCJpdGVtcyI6W119fQ=='),
(10, 'IjxwPnRlc3Q8L3A+Ig=='),
(11, 'IjxwPnRlc3Q8L3A+Ig=='),
(12, 'eyJpZCI6ImFiMzkwZGExLWIwY2EtNGYzMy1hZTE0LTQwODhjNDY1YTI3NiIsIm5hbWUiOiJUZXN0IiwidHlwZSI6InN0b3J5IiwicHJpb3JpdHkiOiJsb3ciLCJzdG9yeXBvaW50IjoyLCJkZXNjcmlwdGlvbiI6Imh0dHBzOi8vc29zYWwuaW4vZW5kcG9pbnRzL2lwZnMvZmV0Y2gtaXBmcy5waHA/aWQ9MTAiLCJBQyI6Imh0dHBzOi8vc29zYWwuaW4vZW5kcG9pbnRzL2lwZnMvZmV0Y2gtaXBmcy5waHA/aWQ9MTEiLCJsaW5rZWRTdG9yaWVzIjoiW3tcImluZGV4XCI6XCIwXCIsXCJpZFwiOlwiNWMzMmZiODYtNDAyZi00Y2FkLWEyOWUtZTgyOWVmYjY2YWViXCJ9XSIsInRhc2tzIjoiW3tcInRyYWl0X3R5cGVcIjpcInRyZXN0XCIsXCJ2YWx1ZVwiOlwidzIzXCJ9XSJ9'),
(13, 'eyIxIjp7Im5hbWUiOiJSZXF1ZXN0ZWQiLCJwb3NpdGlvbiI6IjEiLCJpdGVtcyI6W119LCIyIjp7Im5hbWUiOiJUbyBkbyIsInBvc2l0aW9uIjoiMiIsIml0ZW1zIjpbeyJpbmRleCI6IjAiLCJpZCI6IjVjMzJmYjg2LTQwMmYtNGNhZC1hMjllLWU4MjllZmI2NmFlYiIsInNwcmludElkIjoiMCIsImFiaUxpbmsiOiJodHRwczovL3Nvc2FsLmluL2VuZHBvaW50cy9pcGZzL2ZldGNoLWlwZnMucGhwP2lkPTQiLCJvd25lciI6IiIsInJlcG90ZXIiOiI2MjFlMWM3Ny01OWUxLTRhMzQtODBlMi00MzExMzgyNmY2MTciLCJwb3NpdGlvbiI6IjEiLCJ0cmFja2luZyI6Ilt7XCJ0aW1lXCI6XCIyMDIyLTEwLTE0VDA3OjUyOjIyLjkxMVpcIixcInN0YXR1c1wiOlwiYnVnIGNyZWF0ZWQgd2l0aCBjcml0aWNhbCBwcmlvcml0eSAmIDEwIHN0b3J5cG9pbnQgb24gU3ByaW50LXVuZGVmaW5lZFwiLFwidXBkYXRlZEJ5XCI6XCI2MjFlMWM3Ny01OWUxLTRhMzQtODBlMi00MzExMzgyNmY2MTdcIn0se1widGltZVwiOlwiMjAyMi0xMC0xNFQwNzo1MzoyNC4zODhaXCIsXCJzdGF0dXNcIjpcIjxkaXYgY2xhc3M9XFxcInRyYWNrLWRpdlxcXCI+VGlja2V0IGFkZGVkIHRvIFNwcmludC0wIDxpbWcgY2xhc3M9XFxcInRyYWNrLWltZy1wcm9maWxlXFxcIiBzdHlsZT1cXFwiYm9yZGVyLXJhZGl1czogNTAlOyBtYXJnaW46NXB4O1xcXCIgc3JjPVxcXCJodHRwczovL2JhZnliZWlkM3diaGd5Y213a2Z0amJuZ2thamdiaTNpa2lza28zdDN4emVuZXhqbWh0dDJxdzVta200LmlwZnMuZHdlYi5saW5rLzEyYWJjNTEzODA3MDUwMy42MjE2NGM2YjgwODI2LmpwZ1xcXCIgaGVpZ2h0PVxcXCIzMHB4XFxcIiB3aWR0aD1cXFwiMzBweFxcXCIgLz4gPGI+VGVtcG9yYSBtb2xlc3RpYXMgbWk8L2I+PC9kaXY+XCIsXCJ1cGRhdGVkQnlcIjpcIjYyMWUxYzc3LTU5ZTEtNGEzNC04MGUyLTQzMTEzODI2ZjYxN1wifV0ifV19LCIzIjp7Im5hbWUiOiJJbiBQcm9ncmVzcyIsInBvc2l0aW9uIjoiMyIsIml0ZW1zIjpbXX0sIjQiOnsibmFtZSI6IkRvbmUiLCJwb3NpdGlvbiI6IjQiLCJpdGVtcyI6W119LCI1Ijp7Im5hbWUiOiJDbG9zZWQiLCJwb3NpdGlvbiI6IjUiLCJpdGVtcyI6W119fQ=='),
(14, 'IjxwPlwiPC9wPjxwPlZlbCB2ZWxpdCByZXJ1bSBlbGlnLjwvcD48cD5va2trazwvcD48cD5cIjwvcD4i'),
(15, 'eyJpZCI6IjVjMzJmYjg2LTQwMmYtNGNhZC1hMjllLWU4MjllZmI2NmFlYiIsIm5hbWUiOiJDb25zZWN0ZXR1ciByZXByZWhlbiIsInR5cGUiOiJidWciLCJwcmlvcml0eSI6ImNyaXRpY2FsIiwic3Rvcnlwb2ludCI6MTAsImRlc2NyaXB0aW9uIjoiaHR0cHM6Ly9zb3NhbC5pbi9lbmRwb2ludHMvaXBmcy9mZXRjaC1pcGZzLnBocD9pZD0yIiwiQUMiOiJodHRwczovL3Nvc2FsLmluL2VuZHBvaW50cy9pcGZzL2ZldGNoLWlwZnMucGhwP2lkPTE0IiwibGlua2VkU3RvcmllcyI6Im51bGwiLCJ0YXNrcyI6Ilt7XCJ0cmFpdF90eXBlXCI6XCJRdWkgaXVzdG8gcXVhZSB2ZWxpdFwiLFwib3duZXJcIjpcIjYyMWUxYzc3LTU5ZTEtNGEzNC04MGUyLTQzMTEzODI2ZjYxN1wiLFwic3RhdHVzXCI6XCJpbnByb2dyZXNzXCJ9XSJ9');

-- --------------------------------------------------------

--
-- Table structure for table `meta_shop_lists`
--

CREATE TABLE `meta_shop_lists` (
  `id` int(11) NOT NULL,
  `name` varchar(355) DEFAULT NULL,
  `link` varchar(355) DEFAULT NULL,
  `shop_env_model` varchar(355) DEFAULT NULL,
  `stand_qty` int(11) DEFAULT NULL,
  `is_ice_cream_stall` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta_shop_lists`
--

INSERT INTO `meta_shop_lists` (`id`, `name`, `link`, `shop_env_model`, `stand_qty`, `is_ice_cream_stall`, `user_id`) VALUES
(2, '111', 'https://sosal.in/meta-console/control/pages/111', 'https://sosal.in/meta-console/control/common_models/shop.glb', 2, 1, 1),
(3, '222', 'https://sosal.in/meta-console/control/pages/222', 'https://sosal.in/meta-console/control/common_models/shop_2.glb', NULL, NULL, 1),
(4, '333', 'https://sosal.in/meta-console/control/pages/333', 'https://sosal.in/meta-console/control/common_models/shop.glb', NULL, NULL, 1),
(5, '444', 'https://sosal.in/meta-console/control/pages/444', 'https://sosal.in/meta-console/control/common_models/shop.glb', NULL, NULL, 1),
(6, '555', 'https://sosal.in/meta-console/control/pages/555', 'https://sosal.in/meta-console/control/common_models/shop.glb', NULL, NULL, 1),
(7, '666', 'https://sosal.in/meta-console/control/pages/666', 'https://sosal.in/meta-console/control/common_models/shop_2.glb', 1, NULL, 1),
(8, '777', 'https://sosal.in/meta-console/control/pages/777', 'https://sosal.in/meta-console/control/common_models/shop.glb', 1, NULL, 1),
(9, '888', 'https://sosal.in/meta-console/control/pages/888', 'https://sosal.in/meta-console/control/common_models/shop.glb', 1, NULL, 2),
(10, '999', 'https://sosal.in/meta-console/control/pages/999', 'https://sosal.in/meta-console/control/common_models/shop.glb', 2, 1, 1),
(11, '000', 'https://sosal.in/meta-console/control/pages/000', 'https://sosal.in/meta-console/control/common_models/shop.glb', 2, 1, 1),
(12, '1212', 'https://sosal.in/meta-console/control/pages/1212', 'https://sosal.in/meta-console/control/common_models/shop.glb', 2, 1, 2),
(13, 'shop1', 'https://sosal.in/meta-console/control/pages/shop1', 'https://sosal.in/meta-console/control/common_models/shop.glb', 2, 1, 3),
(14, 'shop2', 'https://sosal.in/meta-console/control/pages/shop2', 'https://sosal.in/meta-console/control/common_models/shop.glb', 1, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `meta_shop_orders`
--

CREATE TABLE `meta_shop_orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(355) DEFAULT NULL,
  `db_name` varchar(355) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `address` longtext,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta_shop_orders`
--

INSERT INTO `meta_shop_orders` (`id`, `order_id`, `db_name`, `product_id`, `qty`, `address`, `status`) VALUES
(4, 'order_KrEjaqV03iE1vT', '111_meta_product_table', 1, 1, 'Godrej Genesis\nUnit No. 1604 (16th Floor) & Unit Nos. 1701, 1702 (17th Floor)\nPlot No X1, Block EP & GP, Sector-V, Salt Lake City\nKolkata â€“ 700 091, West Bengal', 0),
(5, 'order_KrEpgNe9jLQJbo', '111_meta_product_table', 1, 1, 'Godrej Genesis\nUnit No. 1604 (16th Floor) & Unit Nos. 1701, 1702 (17th Floor)\nPlot No X1, Block EP & GP, Sector-V, Salt Lake City\nKolkata â€“ 700 091, West Bengal', 0),
(6, 'order_KrEpgNe9jLQJbo', '111_meta_product_table', 2, 1, 'Godrej Genesis\nUnit No. 1604 (16th Floor) & Unit Nos. 1701, 1702 (17th Floor)\nPlot No X1, Block EP & GP, Sector-V, Salt Lake City\nKolkata â€“ 700 091, West Bengal', 0),
(7, 'order_KrIZvnLpblr6fn', 'shop2_meta_product_table', 1, 1, 'Godrej Genesis\nUnit No. 1604 (16th Floor) & Unit Nos. 1701, 1702 (17th Floor)\nPlot No X1, Block EP & GP, Sector-V, Salt Lake City\nKolkata â€“ 700 091, West Bengal', 0),
(8, 'order_KrIZvnLpblr6fn', 'shop2_meta_product_table', 2, 1, 'Godrej Genesis\nUnit No. 1604 (16th Floor) & Unit Nos. 1701, 1702 (17th Floor)\nPlot No X1, Block EP & GP, Sector-V, Salt Lake City\nKolkata â€“ 700 091, West Bengal', 0),
(9, 'order_KrIhYK3WWXkSh3', 'shop2_meta_product_table', 2, 1, 'Godrej Genesis\nUnit No. 1604 (16th Floor) & Unit Nos. 1701, 1702 (17th Floor)\nPlot No X1, Block EP & GP, Sector-V, Salt Lake City\nKolkata â€“ 700 091, West Bengal', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nft_mall_metaverce`
--

CREATE TABLE `nft_mall_metaverce` (
  `id` int(11) NOT NULL,
  `category` varchar(355) DEFAULT NULL,
  `token_id` varchar(355) DEFAULT NULL,
  `image_link` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nft_mall_metaverce`
--

INSERT INTO `nft_mall_metaverce` (`id`, `category`, `token_id`, `image_link`) VALUES
(1, 'art', '1', 'https://bafybeigg44klnhddhbubffntnqbccskdhts5yceqxqtt76k4kmqvvhdfoi.ipfs.dweb.link/blog2.jpeg'),
(2, 'music', '2', 'https://bafybeictbun4i3wxkfcp2ei7ogh4kajptkyeie6jdjo62gdjy5thw4bqou.ipfs.dweb.link/art_nft.jpeg'),
(3, 'art', '3', 'https://bafybeidic2zeiswpmrzwhvdalncpvl5fuyqa7seyzkc7tf2nkptjmsceia.ipfs.dweb.link/blog1.png'),
(4, 'sports', '4', 'https://bafybeigl6jlbtdmgck4unc44k4vcd5iziz6px5bq32iplwxghx6semsp2q.ipfs.dweb.link/bull.png'),
(5, 'art', '5', 'https://bafybeidrygbmakbv7nuy6axi4iwrclcwzqwdv32n6tkvmzsawbithvrbuy.ipfs.dweb.link/coolimg.png'),
(6, 'art', '6', 'https://bafybeiaaflycuvjclqjmgegpvzbrw4hzmlc2d32gm4di2d3xttrtk4bjw4.ipfs.dweb.link/images.jpg'),
(9, 'sports', '9', 'https://bafybeichym4p6lp2m5gufhczq2lsdkwztv5ysydpagq3setuz35wj5jw64.ipfs.dweb.link/EldhosePaul.jpg'),
(10, 'sports', '10', 'https://bafybeieswdgc3bylktnum3tfoenneltxv67qcep3apiemmp2j5tvqf35ki.ipfs.dweb.link/Ravi-Dahiya-1024x682.jpg'),
(11, 'Heritage', '22', 'https://bafybeif5cjgwuocbghndnvloy5hx74w5nh24mr6azuwvuj4steul36ltyi.ipfs.dweb.link/token22.png'),
(12, 'Heritage', '23', 'https://bafybeienecdzv7fkr57oncdfe4mcgqv4mu35ha3dle3buzijnepnxdft44.ipfs.dweb.link/token23.png'),
(15, 'Heritage', '24', 'https://bafybeic4hisl4ny6iqzkrlzu6fl7vjxijjvxxomjr2qbwlxhzrdaim3z7q.ipfs.dweb.link/token20.png'),
(16, 'Heritage', '25', 'https://bafybeicctpcqu2ajwrbppidxxt7i6mrifvkhwzedz24gxerywyckpvzjji.ipfs.dweb.link/token19.jpg'),
(17, 'Heritage', '26', 'https://bafybeiglp5t7xkvy625gn57bxw32mwkg5vgpqcvwee4dd37xdawwqz73ly.ipfs.dweb.link/token18.jpg'),
(20, 'sports', '11', 'https://bafybeia5ci5wo6wvxljxp4k6tbh6eyy2aemgafso2x7wpnydqguqpgukju.ipfs.dweb.link/shikhar-dhawan.jpg'),
(21, 'sports', '12', 'https://bafybeicjy4vqcnur6l7zp5ijtpkyat3gcbjoq7ydfas4iylfr2gdztclua.ipfs.dweb.link/RohitSharma.jfif'),
(22, 'sports', '14', 'https://bafybeiefdd4vrrxicwxzk6npcjubyur754bkd2wxjqtpwy4tpvrojrarsm.ipfs.dweb.link/token7.jpg'),
(23, 'sports', '15', 'https://bafybeic7ovq2xtr7uzbuejzlsfzm2uhnocwbao4t3t3lwmunypllt7q7cu.ipfs.dweb.link/token8.jpg'),
(24, 'sports', '16', 'https://bafybeifvexrn2wtbk25jhovmd4bsjl7ahht65ulunazx2t7mjkfzewrcli.ipfs.dweb.link/Token9.jpg'),
(25, 'sports', '17', 'https://bafybeidsvz34nvakffsqyrqnlifuyp5xllyxtd72k4wrwh676qchqemziq.ipfs.dweb.link/token14.jpg'),
(26, 'sports', '18', 'https://bafybeiazpyvxvy3g4aq7423kuathqod3s5niwfwvgnniebsjj7spkdn64m.ipfs.dweb.link/token15.jpg'),
(27, 'sports', '19', 'https://bafybeicdwyjjojtf7jqg7zjkawv42izc6mliwhtfvpsuuo26fg3w4ydxba.ipfs.dweb.link/token17.png'),
(28, 'sports', '20', 'https://bafybeifcqvmletwsuptp7kjvta6x4wvl4ctfsxttaygt7kiz2aynmjg7iy.ipfs.dweb.link/token23.jpg'),
(29, 'sports', '21', 'https://bafybeigyzqyccalneuayggvxcrwlftddsezhp75f5wnrmcbyqoie4i3oc4.ipfs.dweb.link/token24.jpg'),
(30, 'art', '28', 'https://bafybeifz3uweoolwubff3jfazrnjxfowg3nayy22wq6btul54zsqnnt6ve.ipfs.dweb.link/images.jpg'),
(31, 'art', '29', 'https://bafybeicxbfgej5s7eo3ef43cd2ncnkjkdw46xp6cycx2tagvoomr4qykaq.ipfs.dweb.link/digital-art-enzo-tommasi.jpg'),
(32, 'art', '30', 'https://bafybeigaiqi4gj645anbvs3j7axkvscnpbv4n26smhuhjhfiezafgpmsle.ipfs.dweb.link/f538ac150154279.Y3JvcCw5MDAsNzAzLDAsNDI3.jpg'),
(35, 'art', '32', 'https://bafybeihe2rqcniczaeugfiaaqwjtzn5kwr2opjbygqnxishjpp2wqeuhw4.ipfs.dweb.link/7d6d56af8d391af5ae82824d5a281552.jpg'),
(36, 'art', '33', 'https://bafybeig33fy3kuivhznah2he7tkhkujne4ftt7l3dpw7c45qadgrtfpu3a.ipfs.dweb.link/c1da42b65b43c1c08cc4c8372633fe59.jpg'),
(37, 'sports', '34', 'https://bafybeiarlx6m4sdaqsx647oeuju6rt4y5j2ngwwezbbldtlxmtuwsqdorm.ipfs.dweb.link/Spirit_Of_Sports_-_Digital_Art_-_Soccer_Superstars_-_Cristiano_Ronaldo_9157e1c9-da31-4405-b91e-0bc124007dd7.png'),
(38, 'music', '35', 'https://bafybeif53tkt3yzarqj3f6kxpeenbfivlj36gmut5kgll7spkqvmzwz76a.ipfs.dweb.link/marshmello.jpg'),
(39, 'music', '36', 'https://bafybeiffkd7uzsjptnzw4wfuytktixajztfho67h4fk6ctzuikl2odexme.ipfs.dweb.link/170px-Rihanna_concert_in_Washington_DC_(cropped).jpg'),
(40, 'music', '37', 'https://bafybeieoi3bilivy6nitasblaeaeomf2ypqzd3bodfggvozavb2ww4aff4.ipfs.dweb.link/1120a2678bab482998b8c3a8c5f016ca.jpg'),
(41, 'art', '31', 'https://bafybeid3ziyngspfruuzbnoyhzgkabjotsv4jpwoouimfbqsqjpxe6ayb4.ipfs.dweb.link/digital-painting-portrait-actors-images-actresses---actress-paintings.jpg'),
(42, 'sports', '38', 'https://bafybeie4zuw7dl3bbo3mroep7ob4phru3za4liikghihra4krk3ldw2t4a.ipfs.dweb.link/tennis-artwork.jpg'),
(43, 'sports', '39', 'https://bafybeidklwm4qcc7cjrrbbdn7dvdq6pnzajr3x6vcmty56exn5xufmcfmi.ipfs.dweb.link/tennis3.jpg'),
(44, 'art', '40', 'https://bafybeibbwu525ba7t3th2joj7g3nnkiicez5faayzkonfxdnftpepduoj4.ipfs.dweb.link/MA1.jpg'),
(45, 'sports', '41', 'https://bafybeifctbqhz3zkcinrtuppcneg6binieiipgsh73zwcr53vbydcaeyxi.ipfs.dweb.link/football1.jpg'),
(46, 'sports', '42', 'https://bafybeigi53ljvsrbbgvcft4w2nqrmb2d52rnxo7i4fg4227ptx4ajx3s3y.ipfs.dweb.link/sports1.jpeg'),
(50, 'art', '43', 'https://bafybeidytn5v3uqoyobvit4cbxgb2umwiyeyv7aanfsizlnm5xvu26hvoq.ipfs.dweb.link/India Painting.jpeg'),
(51, 'music', '44', 'https://bafybeiebfpohd5guj7ejluogal7gijowvsjljq37l5ylrpfsmxs7drfxim.ipfs.dweb.link/1.jpeg'),
(52, 'music', '45', 'https://bafybeiazpooxjwl3xwuugtf35oqkcnm6uw5tj4hi5rqw2biijcynq4cgmm.ipfs.dweb.link/music-850x478.jpg.optimal.jpg'),
(53, 'music', '46', 'https://bafybeigdquzw64rbpiyohyeqo4fuzygvgf6qkij5p4n2v36f63hkgy6s4y.ipfs.dweb.link/images.jpeg'),
(54, 'art', '47', 'https://bafybeic6zrqjaredgpq5h7vdlywulquwzvkk4zueb3qb4wxxh2v6tujs64.ipfs.dweb.link/parrot1.jpeg'),
(55, 'art', '48', 'https://bafybeiabjohjl6yrxcj6ul4c6qrqlgjy5vo24ojosghl7xt3cfzjbbrq2u.ipfs.dweb.link/cow1.jpeg'),
(56, 'art', '49', 'https://bafybeifsyy6km2njmzhbih2opxs2na4lgbc3spxxzclkajrkayna5lt36m.ipfs.dweb.link/1F5PHEJ4-2022-new-crocodile-lighter-outdoor.jpg'),
(57, 'art', '50', 'https://bafybeihi6y35hiznywxtrijhgbxhky3ejlilxxbegcxatoi7vgmmn7xvnm.ipfs.dweb.link/tree.jpeg'),
(58, 'music', '51', 'https://bafybeibvjjs2f4gk63s5yqapvuroohpowl5q5gnfiqpnsb4a3qhz5bgiae.ipfs.dweb.link/images.jpg'),
(59, 'art', '52', 'https://bafybeiczrac2p47gvmngtw5ggvyyl5mqra4ti5ltmqcm72m6zux6uk263u.ipfs.dweb.link/unnamed.jpg'),
(60, 'art', '53', 'https://bafybeifornv2itwmgxcqalpf5xvnykrjmilcev7frwnuhuvcnjoecl62jq.ipfs.dweb.link/nature1.jpeg'),
(61, 'art', '54', 'https://bafybeigfb3inczqnfvvlfsbkgu2we2q2dcnbbc5p6qx5uh3hsws4h5aary.ipfs.dweb.link/kids.jpeg'),
(62, 'art', '55', 'https://bafybeic6r3nuakhafrntqvvag7orpn76t24grdr43ke5xedppsbz7mzhce.ipfs.dweb.link/butterfly.jpg'),
(63, 'music', '56', 'https://bafybeiepovfmwflwlnnoctzuznpvlxxurdntgwcdpnhc2r6wa3jyek6v2a.ipfs.dweb.link/sunflower.jpeg'),
(64, 'sports', '57', 'https://bafybeidd2ytwkxninvzsc3sfanmcaljqcnsvkwrnkcevy4nvjrqcfhj7qa.ipfs.dweb.link/Cup2022.jfif'),
(71, 'art', '58', 'https://bafybeigbucahfqoibzgifyf5wz4rknbvj5ycdfwqkuf3rs4dykwxqszeqe.ipfs.dweb.link/painting 2.jpeg'),
(72, 'sports', '59', 'https://bafybeid22kyfefqbbqvsieg3ybaoxqe4naonopxkl5mwo63sqlzvagen3m.ipfs.dweb.link/football1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `shop1_meta_product_table`
--

CREATE TABLE `shop1_meta_product_table` (
  `id` int(2) NOT NULL,
  `name` varchar(355) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(355) DEFAULT NULL,
  `img` varchar(355) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `rack` int(11) DEFAULT NULL,
  `glb_model` varchar(355) DEFAULT NULL,
  `tag` varchar(355) DEFAULT NULL,
  `scale` varchar(355) DEFAULT NULL,
  `rotation` varchar(355) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop1_meta_product_table`
--

INSERT INTO `shop1_meta_product_table` (`id`, `name`, `price`, `description`, `img`, `qty`, `rack`, `glb_model`, `tag`, `scale`, `rotation`, `location_id`, `status`) VALUES
(1, 'Tropicana Pomegranate Delight', 200, 'Nisi aut reiciendis ', NULL, 5, NULL, 'https://sosal.in/meta-console/control/pages/shop1/models/tropicana1.glb', 'tropicana1.glb', '5 5 5', '0 0 0', 1, 0),
(2, 'KGF - Chapter 2 - Front row', 200, 'Nisi aut reiciendis ', NULL, 5, NULL, 'https://sosal.in/meta-console/control/pages/shop1/models/tropicana3.glb', 'tropicana3.glb', '5 5 5', '0 0 0', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop2_meta_product_table`
--

CREATE TABLE `shop2_meta_product_table` (
  `id` int(2) NOT NULL,
  `name` varchar(355) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(355) DEFAULT NULL,
  `img` varchar(355) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `rack` int(11) DEFAULT NULL,
  `glb_model` varchar(355) DEFAULT NULL,
  `tag` varchar(355) DEFAULT NULL,
  `scale` varchar(355) DEFAULT NULL,
  `rotation` varchar(355) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop2_meta_product_table`
--

INSERT INTO `shop2_meta_product_table` (`id`, `name`, `price`, `description`, `img`, `qty`, `rack`, `glb_model`, `tag`, `scale`, `rotation`, `location_id`, `status`) VALUES
(1, 'Tropicana Pomegranate Delight', 200, 'Nisi aut reiciendis ', NULL, 5, NULL, 'https://sosal.in/meta-console/control/pages/shop2/models/tropicana3.glb', 'tropicana3.glb', '5 5 5', '0 0 0', 9, 0),
(2, 'Tropicana ', 500, 'Officia aut dolorem ', NULL, 4, NULL, 'https://sosal.in/meta-console/control/pages/shop2/models/tropicana1.glb', 'tropicana1.glb', '5 5 5', '0 0 0', 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_meta_products`
--

CREATE TABLE `shop_meta_products` (
  `id` int(11) NOT NULL,
  `name` varchar(355) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `desc` varchar(355) DEFAULT NULL,
  `img` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `rack` int(11) DEFAULT NULL,
  `glb_model` varchar(355) DEFAULT NULL,
  `tag` varchar(355) DEFAULT NULL,
  `scale` varchar(355) DEFAULT NULL,
  `rotation` varchar(355) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_meta_products`
--

INSERT INTO `shop_meta_products` (`id`, `name`, `price`, `desc`, `img`, `qty`, `rack`, `glb_model`, `tag`, `scale`, `rotation`, `location_id`, `status`) VALUES
(1, 'Tropicana ', 200, 'Nisi aut reiciendis ', 0, 4, 0, 'https://sosal.in/shop/models/pwc_new_item.glb', 'pwc_new_item.glb', '5 5 5', '0 0 0', 5, 0),
(2, 'Tropicana mango juice', 200, 'Streax Hair Serum is vitalized with Walnut Oil to give your hair the instant shine and smoothness which helps you Shine All Day! Streax hair serum is crafted\r\n', 11, 5, 1, 'https://sosal.in/shop/models/tropicana2.glb', 'tropicana2', '4.5 4.5 4.5', '0 180 0', 2, 0),
(3, 'Real mango juice', 200, 'Streax Hair Serum is vitalized with Walnut Oil to give your hair the instant shine and smoothness which helps you Shine All Day! Streax hair serum is crafted\r\n', 11, 7, 1, 'https://sosal.in/shop/models/tropicana3.glb', 'tropicana3', '4.5 4.5 4.5', '0 180 0', 3, 0),
(4, 'Red Wine', 2000, 'Streax Hair Serum is vitalized with Walnut Oil to give your hair the instant shine and smoothness which helps you Shine All Day! Streax hair serum is crafted\r\n', 11, 8, 1, 'https://sosal.in/shop/models/wine.glb', 'wineBottol', '5 6 5', '0 180 0', 4, 0),
(5, 'Lays - Potato chips', 20, 'Streax Hair Serum is vitalized with Walnut Oil to give your hair the instant shine and smoothness which helps you Shine All Day! Streax hair serum is crafted\r\n', 11, 8, 1, 'https://sosal.in/shop/models/laysChips.glb', 'laysChips', '1.3 1.3 1.3', '0 225 0', 5, 0),
(6, 'Amul Milk', 75, 'Streax Hair Serum is vitalized with Walnut Oil to give your hair the instant shine and smoothness which helps you Shine All Day! Streax hair serum is crafted\r\n', 11, 5, 1, 'https://sosal.in/shop/models/amoul.glb', 'amoul', '3 3 3', '0 0 0', 6, 0),
(7, 'Datol', 75, 'Streax Hair Serum is vitalized with Walnut Oil to give your hair the instant shine and smoothness which helps you Shine All Day! Streax hair serum is crafted\r\n', 11, 8, 1, 'https://sosal.in/shop/models/greenBottol.glb', 'greenBottol', '9 9 9', '0 0 0', 7, 0),
(8, 'Leap bum', 75, 'Streax Hair Serum is vitalized with Walnut Oil to give your hair the instant shine and smoothness which helps you Shine All Day! Streax hair serum is crafted\r\n', 11, 8, 1, 'https://sosal.in/shop/models/lipBam.glb', 'lipBam', '6 6 6', '0 180 0', 11, 0),
(9, 'Darmi cool power', 75, 'Streax Hair Serum is vitalized with Walnut Oil to give your hair the instant shine and smoothness which helps you Shine All Day! Streax hair serum is crafted\r\n', 11, 8, 1, 'https://sosal.in/shop/models/blueBottol.glb', 'blueBottol', '6 6 6', '0 180 0', 12, 0),
(10, 'Face wash', 100, 'Streax Hair Serum is vitalized with Walnut Oil to give your hair the instant shine and smoothness which helps you Shine All Day! Streax hair serum is crafted\r\n', 11, 8, 1, 'https://sosal.in/shop/models/faceWash.glb', 'faceWash', '5 5 5', '0 180 0', 10, 0),
(11, 'Hair gel', 100, 'Streax Hair Serum is vitalized with Walnut Oil to give your hair the instant shine and smoothness which helps you Shine All Day! Streax hair serum is crafted\r\n', 11, 8, 1, 'https://sosal.in/shop/models/Sparay.glb', 'Sparay', '6 6 6', '0 180 0', 8, 0),
(12, 'Shampoo', 100, 'Streax Hair Serum is vitalized with Walnut Oil to give your hair the instant shine and smoothness which helps you Shine All Day! Streax hair serum is crafted\r\n', 11, 7, 1, 'https://sosal.in/shop/models/shampooBottol.glb', 'shampooBottol', '6 6 6', '0 180 0', 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_meta_products_loocation`
--

CREATE TABLE `shop_meta_products_loocation` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `position_x` varchar(355) DEFAULT NULL,
  `position_y` varchar(355) NOT NULL,
  `position_z` varchar(355) NOT NULL,
  `zoom_y` varchar(355) NOT NULL DEFAULT '0',
  `zoom_z` varchar(355) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_meta_products_loocation`
--

INSERT INTO `shop_meta_products_loocation` (`id`, `product_id`, `position_x`, `position_y`, `position_z`, `zoom_y`, `zoom_z`) VALUES
(1, 1, '', '3.3', '10.5', '2.5', '11.5'),
(2, 2, '', '2', '10.5', '2.5', '11.5'),
(3, 3, '', '0.5', '10.5', '2.5', '11.5'),
(4, 4, '', '3.3', '9.5', '2.5', '8'),
(5, 5, '', '2', '9', '2.5', '8'),
(6, 6, '', '0.5', '9', '2.5', '8'),
(7, 7, '', '0.5', '0.5', '2.5', '2'),
(8, 8, '', '2', '0.5', '2.5', '2'),
(9, 9, '', '3.3', '0.5', '2.5', '2'),
(10, 10, '', '0.5', '-0.5', '2.5', '-2'),
(11, 11, '', '2', '-0.5', '2.5', '-2'),
(12, 12, '', '3.3', '-0.5', '2.5', '-2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `000_meta_product_table`
--
ALTER TABLE `000_meta_product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `111_meta_product_table`
--
ALTER TABLE `111_meta_product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `222_meta_product_table`
--
ALTER TABLE `222_meta_product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `333_meta_product_table`
--
ALTER TABLE `333_meta_product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `444_meta_product_table`
--
ALTER TABLE `444_meta_product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `555_meta_product_table`
--
ALTER TABLE `555_meta_product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `666_meta_product_table`
--
ALTER TABLE `666_meta_product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `777_meta_product_table`
--
ALTER TABLE `777_meta_product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `888_meta_product_table`
--
ALTER TABLE `888_meta_product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `999_meta_product_table`
--
ALTER TABLE `999_meta_product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `1212_meta_product_table`
--
ALTER TABLE `1212_meta_product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipfs`
--
ALTER TABLE `ipfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_shop_lists`
--
ALTER TABLE `meta_shop_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_shop_orders`
--
ALTER TABLE `meta_shop_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nft_mall_metaverce`
--
ALTER TABLE `nft_mall_metaverce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop1_meta_product_table`
--
ALTER TABLE `shop1_meta_product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop2_meta_product_table`
--
ALTER TABLE `shop2_meta_product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_meta_products`
--
ALTER TABLE `shop_meta_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_meta_products_loocation`
--
ALTER TABLE `shop_meta_products_loocation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `000_meta_product_table`
--
ALTER TABLE `000_meta_product_table`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `111_meta_product_table`
--
ALTER TABLE `111_meta_product_table`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `222_meta_product_table`
--
ALTER TABLE `222_meta_product_table`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `333_meta_product_table`
--
ALTER TABLE `333_meta_product_table`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `444_meta_product_table`
--
ALTER TABLE `444_meta_product_table`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `555_meta_product_table`
--
ALTER TABLE `555_meta_product_table`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `666_meta_product_table`
--
ALTER TABLE `666_meta_product_table`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `777_meta_product_table`
--
ALTER TABLE `777_meta_product_table`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `888_meta_product_table`
--
ALTER TABLE `888_meta_product_table`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `999_meta_product_table`
--
ALTER TABLE `999_meta_product_table`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `1212_meta_product_table`
--
ALTER TABLE `1212_meta_product_table`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ipfs`
--
ALTER TABLE `ipfs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `meta_shop_lists`
--
ALTER TABLE `meta_shop_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `meta_shop_orders`
--
ALTER TABLE `meta_shop_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nft_mall_metaverce`
--
ALTER TABLE `nft_mall_metaverce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `shop1_meta_product_table`
--
ALTER TABLE `shop1_meta_product_table`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shop2_meta_product_table`
--
ALTER TABLE `shop2_meta_product_table`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shop_meta_products`
--
ALTER TABLE `shop_meta_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shop_meta_products_loocation`
--
ALTER TABLE `shop_meta_products_loocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
