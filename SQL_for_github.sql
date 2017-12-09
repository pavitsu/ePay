SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `cart` (
  `Item_ID` int(11) NOT NULL,
  `Image` varchar(32) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Price` double NOT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `customer` (
  `Customer_ID` int(11) NOT NULL,
  `Firstname` varchar(64) NOT NULL,
  `Lastname` varchar(64) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Gender` varchar(12) NOT NULL,
  `Birthday` date NOT NULL,
  `Address1` varchar(64) NOT NULL,
  `Address2` varchar(64) DEFAULT NULL,
  `City` varchar(32) DEFAULT NULL,
  `Zip` varchar(12) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `card` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `customer` (`Customer_ID`, `Firstname`, `Lastname`, `Username`, `Gender`, `Birthday`, `Address1`, `Address2`, `City`, `Zip`, `Phone`, `Email`, `Password`, `card`) VALUES
(5, 'Korn', 'Chotpitakkul', 'kornch', 'Male', '1997-01-09', '599/116 Klangkrung', 'Yannawa, Bangkok', '', '10120', '905496265', 'korn.chot@gmail.com', '$2y$10$dh2lQHuI4Cf2EadOpP2qTOa5FyLzZJW8FTt.U1svL/UUx70umj/uq', 1),
(6, 'Smith', 'Keera', 'smith', 'Male', '1996-02-12', 'Twin Town', 'THAMMASAT', '', '12120', '901231234', 'smith@gmail.com', '$2y$10$wQk05k/1FAebY2tq3dbJM.cQy.Scgv/I.yb0jvJ8cmY6oj7TZn/92', 0),
(9, 'Win', 'Chot', 'win', 'Male', '2312-12-12', 'CUPERTINO', 'CA', '', '12121', '090 549 6265', 'korn010@hotmail.com', '$2y$10$Gw4tUsTSjCn/5djxb8onBeqhCYOtE98Du8rOJrcg1i9oysQ0DZ3nu', 0),
(10, 'Saoirse', 'Ronan', 'Sao', 'Female', '1995-04-12', 'Dublin', 'Ireland', '', '12123', '1231233456', 'saoirse@icloud.com', '$2y$10$GYcvWrfh1l.ITitJxdfdaeqg//iT1kEebxT1.rp619fGiVbZUK6J2', 0),
(11, 'David', 'Copper', 'Dave', 'Male', '1200-12-12', 'asas', 'asasasas', '', '12121', '1231233456', 'davi@gmail.com', '$2y$10$wZteeOL9v9USO53LkXTKzeJ7e.IAQwQr9BcbcsK/e2L/hcECPVAZq', 0),
(12, 'Michio', 'Kaku', 'michi', 'Male', '1998-12-10', 'New York', 'USA', '', '12121', '1211211212', 'michi@hotmail.com', '$2y$10$1RmjDuQJb7f9u35zwZ/Dp.8vFQL4dA5HQy3aHjK6QW77fCmGvRnGS', 0),
(13, 'Neil', 'Degrass', 'neil', 'Male', '1990-10-12', 'akakak', 'akakak', '', '121212', '123-123-1212', 'neil@hotmail.com', '$2y$10$EL5raX5YiMUR57XD/FexHeLLBQtMx/Aq3BObBnK6HbuUCqy/xJcbm', 0),
(15, 'Tim', 'Cook', 'Timmy', 'Male', '1970-10-05', 'Cupertino', 'CA USA', '', '121212', '010-101-1919', 'timapple@gmail.com', '$2y$10$zbkw7PWQz/ujNVXFbN0Xu.AomhSx0OLUUhMZixmxj4cMNG1UAz7xC', 0),
(16, 'Bell', 'Man', 'bellm', 'Male', '1970-10-05', 'Cupertino', 'CA USA', '', '121212', '0101011919', 'bellm@hotmail.com', '$2y$10$o02K9dbCZ1Lzcs.hi/.NUeaXjgigE5tDXAZMW0bQwZYTFbePG6zMi', 0),
(17, 'Neil', 'Bloomkamp', 'neilbloom', 'Male', '1985-12-02', 'Cape Town', 'South Africa', '', '39393', '1011911919', 'bloomkamp@gmail.com', '$2y$10$U7765kI2aMgwxzhMWzY8DumJEnYKndrHGYcIdS1VmB1V4gXDBqDWa', 0),
(18, 'Sarah', 'Marry', 'sarah', 'Female', '1998-02-02', 'ajajaj', 'ajajajaj', '', '1919', '1911911919', 'sarah@hotmail.com', '$2y$10$OQc8pvtPdAyndmKZPWDSLekeEehBtAFG30D10pkq9DZkfk7zYIwaC', 1),
(19, 'Chayanit', 'Lertvilairatanaphong', 'gift', 'Female', '1998-12-10', 'narathivat', 'thammasat', 'BKK', '12121', '0221234858', 'hellokitty@hotmail.com', '$2y$10$06lVgFbWE.6r1NbHszkJA.UdGp853Kynrb4PHIpeUi2YjcO22CtPK', 1);

CREATE TABLE `payment` (
  `Card_ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `CNumber` varchar(16) NOT NULL,
  `CVV` varchar(3) NOT NULL,
  `ExpDate` date NOT NULL,
  `HolderName` varchar(32) NOT NULL,
  `IssueBank` varchar(32) NOT NULL,
  `Type` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `payment` (`Card_ID`, `Customer_ID`, `CNumber`, `CVV`, `ExpDate`, `HolderName`, `IssueBank`, `Type`) VALUES
(5, 19, '12121212', '121', '0000-00-00', 'Chayanit', 'BBl', 'VISA'),
(6, 19, '121212121212', '121', '0000-00-00', 'msdnsdn', 'BBl', 'VISA'),
(7, 19, '1212121212121212', '121', '0000-00-00', 'sndksfkd', 'BBl', 'VISA'),
(8, 18, '1212121212121212', '121', '0000-00-00', 'Sarah', 'BBl', 'VISA');
DELIMITER $$
CREATE TRIGGER `updatePaymentCustomer` AFTER INSERT ON `payment` FOR EACH ROW BEGIN
	UPDATE customer SET card = 1 WHERE Customer_ID = NEW.Customer_ID;
END
$$
DELIMITER ;

CREATE TABLE `product` (
  `Product_ID` int(11) NOT NULL,
  `Supplier_ID` int(11) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Type` varchar(16) NOT NULL,
  `Price` double NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Discount` int(11) DEFAULT NULL,
  `RefundAvailable` varchar(11) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `product` (`Product_ID`, `Supplier_ID`, `Image`, `Name`, `Description`, `Type`, `Price`, `Quantity`, `Discount`, `RefundAvailable`, `Date`) VALUES
(1, 5, '5a1fe6623d9f81.92133436.png', 'iMac', 'the best', 'CO', 55000, 8, 0, 'refundNo', NULL),
(2, 5, '5a1ff239cda893.33230456.jpg', 'WD', '1 TB', 'CO', 2200, 6, 0, 'refundYes', NULL),
(3, 5, '5a20343c684ea6.94870764.jpg', 'LG Ultrafine', 'Apple recommend', 'DS', 46000, 3, 0, 'refundNo', NULL);

CREATE TABLE `supplier` (
  `Supplier_ID` int(11) NOT NULL,
  `Firstname` varchar(32) NOT NULL,
  `Lastname` varchar(32) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Company` varchar(32) NOT NULL,
  `Address1` varchar(64) NOT NULL,
  `Address2` varchar(64) DEFAULT NULL,
  `City` varchar(32) NOT NULL,
  `Zip` int(12) NOT NULL,
  `Phone` int(12) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `supplier` (`Supplier_ID`, `Firstname`, `Lastname`, `Username`, `Company`, `Address1`, `Address2`, `City`, `Zip`, `Phone`, `Email`, `Password`) VALUES
(5, 'Mark', 'Zuck', 'makedadada', 'Facebook', '1234 Silicon Valley', 'CA', '', 123123, 2147483647, 'markdadada@hotmail.com', 'zxcvasdf'),
(6, 'Apple', 'Cherry', 'Mango', 'Apple', 'Cupertino', 'CA', '', 121212, 123121212, 'apple@gmail.com', '$2y$10$uVnU.SqcTTYYbgwDtPlGJOaByJorpxGwtdRhrHHuM/8qWzmhiS3sq'),
(7, 'Jony', 'Ive', 'babyive', 'Microcom', 'Cupertino', 'CA USA', '', 10120, 1231234123, 'ive@hotmail.com', '$2y$10$xARChcwA7LoSRPo60o6gre20xZxgRrZd6eePbNHkFUdC13Q8Btb4G');


ALTER TABLE `cart`
  ADD PRIMARY KEY (`Item_ID`);

ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

ALTER TABLE `payment`
  ADD PRIMARY KEY (`Card_ID`);

ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Supplier_ID`);


ALTER TABLE `cart`
  MODIFY `Item_ID` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
ALTER TABLE `payment`
  MODIFY `Card_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
ALTER TABLE `product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
ALTER TABLE `supplier`
  MODIFY `Supplier_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;