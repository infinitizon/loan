-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 11, 2020 at 08:07 AM
-- Server version: 10.2.33-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `countrym_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `reply_ticket`
--

CREATE TABLE `reply_ticket` (
  `id` int(11) NOT NULL,
  `ticket_id` text NOT NULL,
  `user_id` text NOT NULL,
  `message` text NOT NULL,
  `user` text NOT NULL,
  `attachs` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `support_ticket`
--

CREATE TABLE `support_ticket` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `priority` text NOT NULL,
  `subject` text NOT NULL,
  `msg` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `attachs` text NOT NULL,
  `depart` text NOT NULL,
  `is_open` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `acc_no` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `balance` double NOT NULL,
  `pin` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`id`, `user_id`, `acc_no`, `type`, `balance`, `pin`, `status`, `bdate`) VALUES
(1, 1, '8043190301', 'Short Term', 44000, 1234, 'ACTIVE', '2020-03-24 08:13:09'),
(3, 3, '5180525491', '--- Select Loan Type ----', 0, 1244, 'INACTIVE', '2020-04-07 09:29:54'),
(4, 4, '5003903000', 'Long Term', 0, 2020, 'ACTIVE', '2020-05-29 05:16:42'),
(7, 7, '8733041514', 'Short Term', 55000, 2906, 'INACTIVE', '2020-06-21 06:07:35'),
(8, 8, '6635692274', 'Long Term', 100000, 2906, 'INACTIVE', '2020-06-29 12:25:26'),
(10, 10, '2470922673', '--- Select Loan Type ----', 25000, 9081, 'INACTIVE', '2020-08-11 19:16:18'),
(12, 12, '1930304415', 'Long Term', 250000, 3213, 'INACTIVE', '2020-08-18 16:50:58'),
(13, 13, '8928388813', 'Long Term', 70000, 1699, 'INACTIVE', '2020-09-07 14:13:43'),
(14, 14, '5655279056', 'Short Term', 1500000, 7121, 'ACTIVE', '2020-09-07 14:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE `tbl_address` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `marital` varchar(50) NOT NULL,
  `occupation` varchar(40) NOT NULL,
  `company` varchar(40) NOT NULL,
  `empduration` varchar(80) NOT NULL,
  `emplphone` varchar(80) NOT NULL,
  `monthlyincome` varchar(40) NOT NULL,
  `purpose` varchar(40) NOT NULL,
  `loancategory` varchar(40) NOT NULL,
  `lamount` varchar(40) NOT NULL,
  `repayment` varchar(40) NOT NULL,
  `homeowner` varchar(40) NOT NULL,
  `creditstatus` varchar(40) NOT NULL,
  `taxid` varchar(40) NOT NULL,
  `ssn` varchar(40) NOT NULL,
  `loandate` varchar(40) NOT NULL,
  `zipcode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`id`, `user_id`, `address`, `city`, `state`, `country`, `marital`, `occupation`, `company`, `empduration`, `emplphone`, `monthlyincome`, `purpose`, `loancategory`, `lamount`, `repayment`, `homeowner`, `creditstatus`, `taxid`, `ssn`, `loandate`, `zipcode`) VALUES
(1, 1, 'rues  32 street', 'broklyn', 'New York', 'United States of America', 'Single', 'web designer', 'paul web design', '5 years', '+10928394837', '800', 'baby loan', 'Construction  Loan', '7000', '5 Years', 'on', '738', '28887849940940', '7737338383', '03/24/20', 34556),
(3, 3, '200 Smith St', 'Sheridan', 'Wyoming', 'United States of America', 'Other', 'Retired', 'Work national', '10 years', '3023002838', '12,306', 'To help me sustain on covid-19', 'Personal Loan', '', '1 Year', 'on', '651', '453 13 2195', '453 13 2195', '04/07/20', 82801),
(4, 4, '24', 'NY', 'NEWYORK', 'United States of America', 'Married', 'BOY', 'JAN', '14 YEARS', '45678904', '23456', 'BUSNESS', 'Business Loan', '100,000', '6 Year', 'on', 'GOOD', '1234567', '2345677', '05/29/20', 10001),
(7, 7, '3502 East Gore Blvd Apt 10101A Lawton, OK 73501', 'Oklahoma', 'United States', 'United States of America', 'Divorced', 'Military Retired', '', '', '', '4000', 'Personal', 'Personal Loan', '55,000', '3 Years', 'on', '500', '', '211547848', '06/21/20', 73501),
(8, 8, 'San Rafael', 'Garden Grove', 'California', 'United States of America', 'Divorced', 'International Real Estate Services', 'International Real Estate Services', '10 Years', '506-4700-5549', '2,2500.00', 'Personal', 'Personal Loan', '100,000', '15 Years', 'on', '', '', '', '06/29/20', 92644),
(10, 10, '2117 S 61st Ave, Yakima, WA 98903, USA', 'Yakima', 'Washington', 'United States of America', 'Married', 'Operator', 'Pexco Aero', '16 Years', '', '3,500', 'Personal Loan', 'Personal Loan', '25,000', '8 Years', 'on', 'Good', '', '520-70-6623', '08/11/20', 98903),
(12, 12, '41 Mazique Lane, Natchez, MS 39120', 'Natchez', 'Mississippi', 'United States of America', 'Single', '', '', '', '', '2325', 'Business', 'Business Loan', '250,000', '15 Years', 'on', 'Average', '', '587743213', '08/18/20', 39120),
(13, 13, 'Taarsbakken3230 GrÃ¦sted, Denmark', 'Copenhagen', 'Denmark', 'Denmark', 'Other', 'Nurse', 'Design Management, Fredensborg Kommune', '', '+45 60201699', '7,000.00', 'Business', 'Business Loan', '70,000', '7 Years', 'on', 'Good', '', '', '09/07/20', 63230),
(14, 14, 'KjÃ¦rgÃ¥rdsvej 10 6740 Bramming, Denmark', 'Bramming', 'Denmark', 'Denmark', 'Other', 'Director', 'Am Entreprise Aps', '', '+4540147121', '60,000', 'Business', 'Business Loan', '1,500,000', '2 Years', 'on', 'Good', '', '', '09/07/20', 6740);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `id` int(10) NOT NULL,
  `tx_no` varchar(20) NOT NULL,
  `tx_type` varchar(10) NOT NULL,
  `amount` double NOT NULL,
  `date` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `to_accno` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tdate` varchar(40) NOT NULL,
  `comments` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`id`, `tx_no`, `tx_type`, `amount`, `date`, `description`, `to_accno`, `status`, `tdate`, `comments`) VALUES
(1, 'TX1', 'credit', 44000, '2020-03-25 23:18:35', ' Aproved', '8043190301', 'SUCCESS', '02/02/1999', 'Aproved'),
(2, 'TX2', 'credit', 20000, '2020-04-01 21:01:21', ' Loan Funds', '5543584014', 'SUCCESS', '03/31/2020', 'Loan Funds'),
(3, 'TX3', 'credit', 30000, '2020-06-15 05:28:00', ' Loan Credit Funds', '2726493849', 'SUCCESS', '6/15/2020', 'Loan Credit Funds'),
(4, 'TX4', 'credit', 55000, '2020-06-21 06:00:30', ' Loan Payment Funds', '4800938542', 'SUCCESS', '6/20/2020', 'Loan Payment Funds'),
(5, 'TX5', 'credit', 55000, '2020-06-21 06:08:40', ' Loan Payment Funds', '8733041514', 'SUCCESS', '6/20/2020', 'Loan Payment Funds'),
(6, 'TX6', 'credit', 100000, '2020-06-29 12:37:13', ' Loan Credit Funds', '6635692274', 'SUCCESS', '6/26/2020', 'Loan Credit Funds'),
(7, 'TX7', 'credit', 20000, '2020-07-07 15:39:57', ' Loan Credit Funds', '4875157901', 'SUCCESS', '6/7/2020', 'Loan Credit Funds'),
(8, 'TX8', 'credit', 25000, '2020-08-11 19:28:25', ' Credit Fund', '2470922673', 'SUCCESS', '8/10/2020', 'Credit Fund'),
(9, 'TX9', 'credit', 250000, '2020-08-18 16:56:39', ' Credit Loan Funds', '1930304415', 'SUCCESS', '7/18/2020', 'Credit Loan Funds'),
(10, 'TX10', 'credit', 70000, '2020-09-07 14:20:16', ' Loan credit Fund', '8928388813', 'SUCCESS', '09/04/2020', 'Loan credit Fund'),
(11, 'TX11', 'credit', 1500000, '2020-09-07 14:40:13', ' Loan credit funds.', '5655279056', 'SUCCESS', '09/05/2020', 'Loan credit funds.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `due` varchar(100) NOT NULL,
  `loanstat` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `is_active` varchar(10) NOT NULL,
  `utype` varchar(10) NOT NULL,
  `pics` varchar(200) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `fname`, `lname`, `pwd`, `email`, `due`, `loanstat`, `phone`, `gender`, `dob`, `is_active`, `utype`, `pics`, `bdate`) VALUES
(1, 'Nodenna', 'Finan', '*16F5FAB66256E4FCC4CB7E3EB00F352735479D5F', 'paulbolashagy@gmail.com', '1998-09-04', 'Approved', '0928394837', 'male', '1879-02-02', 'FALSE', 'USER', '', '2020-03-24 08:13:09'),
(3, 'Mary', 'Haire', '*68E6BA969A778DC7EBD5901454ABC9C8ED66AA94', 'Cullenjackson09@gmail.com', 'No Data', 'Pending', '8044101035', 'female', '1957-10-30', 'FALSE', 'USER', '', '2020-04-07 09:29:54'),
(4, 'kenzo', 'kan', '*67CCB3E4C7D082F59E21B16E36C6655A938EBABE', 'patrickbunto0@gmail.com', 'No Data', 'Pending', '456789076', 'male', '1979-12-03', 'TRUE', 'USER', '', '2020-05-29 05:16:42'),
(7, 'John', 'Cramer', '*5FD9410E6D42ED5515326EAB8D16FC3F2EBF5CBB', '4eyedjac56a@gmail.com', '2020-08-27', 'Approved', '(580) 278-2906', 'male', '1962-01-14', 'FALSE', 'USER', '', '2020-06-21 06:07:35'),
(8, 'Irene', 'Weintraut', '*BA5831FF6D7A2883B7805B52A5F35242CAEE9D90', 'iweintraut5@aol.com', '2020-12-29', 'Approved', '714-482-5010', 'female', '1953-05-05', 'FALSE', 'USER', '', '2020-06-29 12:25:26'),
(10, 'David`', 'Wayne Griffith', '*ADECD086E888EF0AB058BCA241B13C60971BCE33', 'griffit2x14@gmail.com', 'No Data', 'Pending', '509-985-9081', 'male', '', 'FALSE', 'USER', '', '2020-08-11 19:16:18'),
(12, 'Vera W', 'Bailey', '*867F77D6374C553B86BBCEC1E963CB9031FE3EFD', 'baileyhere@hotmail.com', 'No Data', 'Pending', '(678) 643-3966', 'female', '1950-11-30', 'TRUE', 'USER', '', '2020-08-18 16:50:58'),
(13, 'Katrin', 'Hammerich Lacart', '*A135DC9A9E5BFB28DE2C75B8A801C438D4676478', 'katrin6@live.dk', '2020-10-07', 'Pending', '+4560201699', 'female', '1965-12-11', 'FALSE', 'USER', '', '2020-09-07 14:13:43'),
(14, 'Allan', 'Frank Madsen', '*C9DF99BC19B1E68154C466C46D9B46C83C4CFE9B', 'am@am-u.dk', '2020-10-07', 'Pending', '+4522200008', 'male', '1967-12-09', 'TRUE', 'USER', '', '2020-09-07 14:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `__reply_ticket`
--

CREATE TABLE `__reply_ticket` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `msg_id` text NOT NULL,
  `message` text NOT NULL,
  `user` text NOT NULL,
  `attachs` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reply_ticket`
--
ALTER TABLE `reply_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_ticket`
--
ALTER TABLE `support_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `__reply_ticket`
--
ALTER TABLE `__reply_ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reply_ticket`
--
ALTER TABLE `reply_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_ticket`
--
ALTER TABLE `support_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `__reply_ticket`
--
ALTER TABLE `__reply_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
