-- Generation Time: Oct 08, 2021 at 03:52 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cvmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(5) NOT NULL,
  `AdminName` varchar(45) DEFAULT NULL,
  `UserName` char(45) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin user', 'admin', 7898799797, 'admin@gmail.com', 'admin', '2019-04-22 06:26:14'),
(2, 'DGs Office', '1dgsoffice', 1, 'dgoffice@rmrdc.com', 'dgs_office', '2021-10-08 13:52:00'),
(3, 'AGRICULTURE/AGRO-ALLIED', '1aarmd', 2, 'aarmd@rmrdc.com', 'aarmd@123', '2021-10-08 13:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblvisitor`
--

CREATE TABLE `tblvisitor` (
  `ID` int(5) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `TagNo` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `WhomtoMeet` varchar(120) DEFAULT NULL,
  `Department` varchar(120) DEFAULT NULL,
  `ReasontoMeet` varchar(120) DEFAULT NULL,
  `EnterDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `remark` varchar(255) DEFAULT NULL,
  `outtime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `imgName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvisitor`
--

INSERT INTO `tblvisitor` (`ID`, `FullName`, `TagNo`, `MobileNumber`, `Address`, `WhomtoMeet`, `Department`, `ReasontoMeet`, `EnterDate`, `remark`, `outtime`, `imgName`) VALUES
(1, 'ASLI', '123', 987, 'MAITAMA', 'DG', 'RMID', 'personal', '2021-10-06 09:45:59', 'DONE', '2021-10-06 09:46:23', 'upload/pic_20211006094535.jpeg '),
(2, 'salim ', '1234', 934243, 'Maitama', 'DG', 'RMID', 'offical', '2021-10-06 12:05:22', 'done', '2021-10-06 12:06:44', 'upload/pic_20211006120451.jpeg '),
(3, 'salim', '1234', 32423, 'maitama', 'DG', '', 'offical', '2021-10-06 21:22:00', NULL, NULL, '20copy/upload/pic_20211006212135.jpeg '),
(4, 'salim', '321', 801231, 'matata', 'DG', 'fast', 'personal', '2021-10-07 12:30:51', NULL, NULL, 'upload/pic_20211007123031.jpeg '),
(5, 'slim', '432', 8082342, 'apo', 'DG', '', 'personal', '2021-10-07 12:31:42', NULL, NULL, '20copy/upload/pic_20211007123117.jpeg '),
(6, 'jume', '97', 3412341234, 'mpo', 'DG', '', 'personal', '2021-10-07 12:53:43', NULL, NULL, '20copy/upload/pic_20211007125341.jpeg '),
(7, 'dase', '87', 3412341234, '5665', 'DG', 'RMID', 'personal', '2021-10-08 15:26:26', NULL, NULL, 'upload/pic_20211008152612.jpeg '),
(8, 'salim', '123', 34, 'uyoi', 'DG', 'AGRICULTURE AND AGRO-ALLIED RAW MATERIALS DEPARTMENT', 'personal', '2021-10-08 15:36:25', NULL, NULL, 'upload/pic_20211008153609.jpeg '),
(9, 'jume', '1234', 234123, 'ppo', 'qSqd', 'ADMINISTRATION AND HUMAN RESOURCE DEPARTMENT', 'personal', '2021-10-08 15:39:08', NULL, NULL, 'upload/pic_20211008153828.jpeg '),
(10, 'salim', '909', 2341254234, '987', 'DG', 'CHEMICALS AND PHARMACEUTICAL MATERIALS DEPARTMENT', 'personal', '2021-10-08 15:40:33', NULL, NULL, ' '),
(11, 'salim', '909', 2341254234, '987', 'DG', 'CHEMICALS AND PHARMACEUTICAL MATERIALS DEPARTMENT', 'personal', '2021-10-08 15:43:00', NULL, NULL, ' '),
(12, 'jlk', '1234', 97, 'i78', 'DG', 'DIRECTOR GENERALS OFFICE', '32', '2021-10-08 15:44:29', NULL, NULL, 'upload/pic_20211008154426.jpeg ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblvisitor`
--
ALTER TABLE `tblvisitor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblvisitor`
--
ALTER TABLE `tblvisitor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
