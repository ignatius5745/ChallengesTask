
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `full_name` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `users`
--

CREATE TABLE `forms` (
  `form_id` VARCHAR(50) NOT NULL , 
    `owner` VARCHAR(50) NOT NULL , 
    `Date` DATE NOT NULL , 
    `Status` VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `FormsDetail`
--

CREATE TABLE `formsdetail` (
  `form_id` VARCHAR(50) NOT NULL ,
    `name` VARCHAR(50) NOT NULL ,
    `gender` VARCHAR(1) NOT NULL ,
    `Address` VARCHAR(50) NOT NULL ,
    `country` VARCHAR(255) NOT NULL ,
    `file1` MEDIUMBLOB NOT NULL ,
    `file2` MEDIUMBLOB NOT NULL ,
    `Description` VARCHAR(255) NOT NULL ,
    `Reason` VARCHAR(255) NOT NULL ,
    `file1verify` TINYINT NOT NULL ,
    `file2verify` TINYINT NOT NULL ,
    `approve` TINYINT NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`full_name`, `password`, `role`) VALUES
('admin', '1234', 'admin'),
('manager', '1234', 'manager'),
('user1', '1234', 'employee'),
('user2', '1234', 'employee'),
('user3', '1234', 'employee');
--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`form_id`, `owner`, `Date`, `Status`) VALUES
('1', 'user1', '2019/12/16', 'Approved'),
('2', 'user1', '2019/12/16', 'Pending'),
('3', 'user1', '2019/12/16', 'Not Approved'),
('4', 'user2', '2019/12/16', 'Approved'),
('5', 'user2', '2019/12/16', 'Pending'),
('6', 'user2', '2019/12/16', 'Not Approved'),
('7', 'user3', '2019/12/16', 'Approved'),
('8', 'user3', '2019/12/16', 'Pending'),
('9', 'user3', '2019/12/16', 'Not Approved');

--
-- Dumping data for table `forms`
--

INSERT INTO `formsdetail` (`form_id`, `name`, `gender`, `Address`, `country`, `file1`, `file2`, `Description`, `Reason`, `file1verify`, `file2verify`, `approve`) VALUES
('1', 'user1', 'M', 'Jalan Kenny Hill', 'Malaysia', 'index.php', 'logout.php', 'testing', 'testing', '0', '1', '1'),
('2', 'user1', 'F', 'Jalan Swinburne', 'China', 'index.php', 'logout.php', 'testing', 'testing', '1', '1', '1'),
('3', 'user1', 'M', 'Jalan Kenny Hill', 'Indonesia', 'index.php', 'logout.php', 'testing', 'testing', '0', '0', '0'),
('4', 'user2', 'M', 'Jalan Kenny Hill', 'Indonesia', 'index.php', 'logout.php', 'testing', 'testing', '0', '0', '0'),
('5', 'user2', 'M', 'Jalan Kenny Hill', 'Malaysia', 'index.php', 'logout.php', 'testing', 'testing', '0', '0', '0'),
('6', 'user2', 'M', 'Jalan Kenny Hill', 'Malaysia', 'index.php', 'logout.php', 'testing', 'testing', '0', '0', '0'),
('7', 'user3', 'M', 'Jalan Kenny Hill', 'Indonesia', 'index.php', 'logout.php', 'testing', 'testing', '0', '0', '0'),
('8', 'user3', 'M', 'Jalan Kenny Hill', 'Malaysia', 'index.php', 'logout.php', 'testing', 'testing', '0', '0', '0'),
('9', 'user3', 'M', 'Jalan Kenny Hill', 'China', 'index.php', 'logout.php', 'testing', 'testing', '0', '0', '0');




ALTER TABLE `users`
  ADD PRIMARY KEY (`full_name`);
  
ALTER TABLE `forms`
  ADD PRIMARY KEY (`form_id`);
  
ALTER TABLE `formsdetail`
  ADD PRIMARY KEY (`form_id`);