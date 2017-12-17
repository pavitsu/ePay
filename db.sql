SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
(13, 'Neil', 'Degrass', 'neil', 'Male', '1990-10-12', 'akakak', 'akakak', '', '121212', '123-123-1212', 'neil@hotmail.com', '$2y$10$EL5raX5YiMUR57XD/FexHeLLBQtMx/Aq3BObBnK6HbuUCqy/xJcbm', 1),
(15, 'Tim', 'Cook', 'Timmy', 'Male', '1970-10-05', 'Cupertino', 'CA USA', '', '121212', '010-101-1919', 'timapple@gmail.com', '$2y$10$zbkw7PWQz/ujNVXFbN0Xu.AomhSx0OLUUhMZixmxj4cMNG1UAz7xC', 1),
(16, 'Bell', 'Man', 'bellm', 'Male', '1970-10-05', 'Cupertino', 'CA USA', '', '121212', '0101011919', 'bellm@hotmail.com', '$2y$10$o02K9dbCZ1Lzcs.hi/.NUeaXjgigE5tDXAZMW0bQwZYTFbePG6zMi', 1),
(17, 'Neil', 'Bloomkamp', 'neilbloom', 'Male', '1985-12-02', 'Cape Town', 'South Africa', '', '39393', '1011911919', 'bloomkamp@gmail.com', '$2y$10$U7765kI2aMgwxzhMWzY8DumJEnYKndrHGYcIdS1VmB1V4gXDBqDWa', 1),
(18, 'Sarah', 'Marry', 'sarah', 'Female', '1998-02-02', 'ajajaj', 'ajajajaj', '', '1919', '1911911919', 'sarah@hotmail.com', '$2y$10$OQc8pvtPdAyndmKZPWDSLekeEehBtAFG30D10pkq9DZkfk7zYIwaC', 1),
(19, 'Chayanit', 'Lertvilairatanaphong', 'gift', 'Female', '1998-12-10', 'narathivat', 'thammasat', 'BKK', '12121', '0221234858', 'hellokitty@hotmail.com', '$2y$10$06lVgFbWE.6r1NbHszkJA.UdGp853Kynrb4PHIpeUi2YjcO22CtPK', 1),
(21, 'Micheal', 'Junior', 'junior', 'Male', '1990-10-12', '1234 Silicon Valley', 'South Africa', 'BKK', '10120', '0221234858', 'junior@hotmail.com', '$2y$10$JzB1vqZbgAbiw8LMkrvhQ.3ynXa83Ngx1q8rRUt3/B55fgVYPzjbC', 0),
(22, 'Hello', 'World', 'hello', 'Male', '1998-12-12', '1234', 'qwer', 'BKK', '12345', '1212323434', 'hello@gmail.com', '$2y$10$M74tT5ABdCMT74R1UYHqYeGp2cG8LBoOnzmi7g1.2OkCcxGS9touO', 0),
(23, 'Kitty', 'kitty', 'kitty', 'Male', '1212-12-12', 'sjsj', 'aksk', 'BKK', '10910', '2022022020', 'kitty@gmail.com', '$2y$10$HYn0BFmuoFQck4mpL/b0MePxmtGpjOmdfhZKd2TFf7NHsrk0F9rdO', 0),
(24, 'sdsdsad', 'dsfsdsfsd', 'dsfsdfs', 'Male', '0000-00-00', 'asdasdas', 'asdadasd', 'BKK', '23233', '1011911919', 'sdsadasdas@gmail.com', '$2y$10$S/94OjUj5C.KvaiYjCXFduvcAM0ty/MAmiB2itLXQ3t8l/JxJjYYy', 0),
(25, 'sfsdfdsf', 'dsfsdfsdf', 'dfsdfsdf', 'Male', '1995-04-12', 'slkdnskdn', 'asdksamd', 'BKK', '20202', '2922922929', 'kkkk@gmail.com', '$2y$10$8SyN0i/xxs0LsQC1akPaO./jRl2VGONLk9ocVgnZirV8L7aHuWJsK', 0),
(26, 'sdasdas', 'asdasdasd', 'adasdasd', 'Male', '0000-00-00', 'sdmklasmd', 'salmdlasdm', 'BKK', '22322', '2022022020', 'ebay@gmail.com', '$2y$10$atHUY4mb.fqlKf1OGGEqgup.YZfu0siFwKYsGx2FBboMoeqpROar6', 0),
(27, 'sadsadas', 'asdasdasd', 'asdasdas', 'Male', '0000-00-00', 'skanksand', 'lksndkasdn', 'BKK', '9292', '2022022020', 'sdasd@hotmail.com', '$2y$10$aq6waCAc5/.vxshtAGCgkumd0iec3rFjqTkYU8Ft556iJ2nKTh.Hi', 0),
(28, 'ghghfghfgh', 'ghfghfghfgh', 'fghfghfwer', 'Male', '0000-00-00', 'kasmdksadn', 'kasmdksmdk', 'BKK', '39932', '2902922929', 'eeee@gmail.com', '$2y$10$lmiWYTmoNe8eDwP7eTZ0B.GFemxUdBbJujOWpqQOOQ57PTzAFU7sG', 0),
(29, 'coffee', 'late', 'cappu', 'Male', '1995-10-10', 'sksksksks', 'alalalalal', 'BKK', '10101', '1001002020', 'late@gmail.com', '$2y$10$ykDcHyAvo8iuDFgz3tH/8.wjs1i6FpUcsLg019bWAFJ4SKHgDNxdO', 0);

CREATE TABLE `payment` (
  `Card_ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `CNumber` varchar(16) NOT NULL,
  `CVV` varchar(3) NOT NULL,
  `ExpDate` varchar(16) NOT NULL,
  `HolderName` varchar(32) NOT NULL,
  `IssueBank` varchar(32) NOT NULL,
  `Type` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `payment` (`Card_ID`, `Customer_ID`, `CNumber`, `CVV`, `ExpDate`, `HolderName`, `IssueBank`, `Type`) VALUES
(5, 19, '213123123', '232', '0000-00-00', 'chayanit', 'BBl', 'VISA'),
(6, 19, '213123123', '232', '0000-00-00', 'chayanit', 'BBl', 'VISA'),
(7, 19, '213123123', '232', '0000-00-00', 'chayanit', 'BBl', 'VISA'),
(8, 18, '1212121212121212', '121', '0000-00-00', 'Sarah', 'BBl', 'VISA'),
(9, 17, '121212121212', '121', '0000-00-00', 'wdweweqweqw', 'BBl', 'VISA'),
(10, 15, '1212121245454545', '536', '0000-00-00', 'Timmy', 'BBl', 'VISA'),
(11, 16, '3904893284984', '121', '0000-00-00', 'sdlslkfmkmf', 'BBl', 'VISA'),
(12, 13, '13', '13', '0000-00-00', '13', 'BBl', 'VISA'),
(13, 5, '23423423423', '343', '3434-34', 'dfsdfdsf', 'BBl', 'VISA');
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
  `Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Discount` float NOT NULL,
  `RefundAvailable` varchar(11) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `product` (`Product_ID`, `Supplier_ID`, `Image`, `Name`, `Description`, `Type`, `Price`, `Quantity`, `Discount`, `RefundAvailable`, `Date`) VALUES
(1, 5, '5a1fe6623d9f81.92133436.png', 'iMac', 'the best', 'CO', 55000, 50, 1, 'refundNo', NULL),
(2, 5, '5a1ff239cda893.33230456.jpg', 'WD', '1 TB', 'CO', 2200, 99, 1, 'refundYes', NULL),
(3, 5, '5a20343c684ea6.94870764.jpg', 'LG Ultrafine', 'Apple recommend', 'DS', 6000, 17, 1, 'refundNo', NULL),
(7, 9, '5a2d8bd9caf357.68211682.jpeg', 'charger cable', 'apple certified', 'AC', 900, 77, 0.7, 'refundNo', '2017-12-11'),
(8, 9, '5a2d8bf9ea0e31.00655236.jpeg', 'Magic Mouse', 'Bade by apple', 'AC', 3500, 198, 1, 'refundYes', '2017-12-11'),
(9, 9, '5a3395e7e8fe56.87574773.jpg', 'iMac Pro', 'God power on your desk', 'CO', 240000, 90, 1, 'refundYes', '2017-12-15'),
(10, 9, '5a339e82d07634.91518191.png', 'Acer', 'Slim, Not Slow.', 'CO', 22000, 28, 1, 'refundYes', '2017-12-15'),
(11, 9, '5a33a16cbc3305.68165145.jpg', 'Dell XPS', 'Extreme Performance', 'CO', 42000, 37, 1, 'refundYes', '2017-12-15'),
(12, 9, '5a33a35d8a1907.27768628.jpg', 'Dell XPS', 'bla', 'CO', 43000, 23, 0.95, 'refundNo', '2017-12-15'),
(13, 9, '5a33a4133041c3.26216065.jpg', 'Dell', 'dsfdfsdsdf', 'CO', 40000, 26, 1, 'refundYes', '2017-12-15'),
(14, 9, '5a33a44144c088.90495501.png', 'Acer', 'dsfdsfdsffs', 'CO', 23232, 15, 1, 'refundYes', '2017-12-15'),
(16, 9, '5a33a7ab686044.88211022.png', 'Acer', 'Acer', 'CO', 22000, 92, 0.85, 'refundYes', '2017-12-15'),
(17, 9, '5a33c1169f0731.33741962.jpg', 'iMac', 'apple', 'CO', 200000, 1, 1, 'No', '2017-12-15');

CREATE TABLE `refund` (
  `Refund_ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `TDate` date NOT NULL,
  `TTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `refund` (`Refund_ID`, `Customer_ID`, `Product_ID`, `TDate`, `TTime`) VALUES
(1, 5, 11, '0000-00-00', '00:00:00'),
(2, 5, 1, '0000-00-00', '00:00:00'),
(3, 5, 12, '0000-00-00', '00:00:00'),
(4, 5, 9, '0000-00-00', '00:00:00'),
(5, 5, 1, '0000-00-00', '00:00:00'),
(6, 5, 17, '2017-12-15', '08:22:54'),
(7, 5, 12, '2017-12-15', '09:23:37');

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
(7, 'Jony', 'Ive', 'babyive', 'Microcom', 'Cupertino', 'CA USA', '', 10120, 1231234123, 'ive@hotmail.com', '$2y$10$xARChcwA7LoSRPo60o6gre20xZxgRrZd6eePbNHkFUdC13Q8Btb4G'),
(9, 'Purra', 'Singha', 'purra', 'Purra', 'sjsjsjs', 'sjsjsjsj', 'BKK', 12121, 1211211212, 'purra@hotmail.com', '$2y$10$PHuvIHDdy8roFd0ce/t8K.B7dSFRDTIMDHZbZf4KqzIZsiIPVljuO'),
(10, 'asdasdas', 'sadasdasd', 'asdasdasd', 'asdasdsad', 'aksmdksad', 'slmdsmd', 'BKK', 3232, 2022022020, 'ebay@gmail.com', '$2y$10$a.fm3DPLqMAQMmx6zS0OUeiCSD.ktxM/6NeSaYA7WiK2cmB8ZIX9q');

CREATE TABLE `transaction` (
  `Transaction_ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Supplier_ID` int(11) NOT NULL,
  `Product_ID` varchar(100) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `TDate` date NOT NULL,
  `TTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `transaction` (`Transaction_ID`, `Customer_ID`, `Supplier_ID`, `Product_ID`, `Amount`, `Total`, `TDate`, `TTime`) VALUES
(31, 5, 9, '16', 1, 18700, '2017-12-15', '03:17:31'),
(32, 5, 9, '8', 1, 3500, '2017-12-15', '03:17:31'),
(33, 5, 9, '7', 1, 630, '2017-12-15', '03:17:31'),
(34, 5, 9, '13', 2, 80000, '2017-12-15', '03:17:31'),
(35, 5, 9, '17', 1, 200000, '2017-12-15', '04:00:54'),
(36, 5, 9, '13', 1, 40000, '2017-12-15', '04:00:54'),
(37, 5, 9, '14', 1, 23232, '2017-12-15', '04:00:54'),
(38, 5, 9, '16', 1, 18700, '2017-12-15', '04:55:16'),
(39, 5, 9, '12', 1, 40850, '2017-12-15', '04:55:16'),
(40, 5, 9, '14', 1, 23232, '2017-12-15', '04:55:45'),
(41, 5, 9, '10', 1, 22000, '2017-12-15', '04:55:45'),
(42, 5, 9, '17', 1, 200000, '2017-12-15', '06:12:14'),
(43, 5, 9, '11', 1, 42000, '2017-12-15', '06:12:14'),
(44, 5, 9, '9', 1, 240000, '2017-12-15', '06:12:14'),
(45, 5, 9, '7', 1, 630, '2017-12-15', '06:12:14'),
(46, 5, 9, '14', 1, 23232, '2017-12-15', '08:51:17'),
(47, 5, 9, '16', 1, 18700, '2017-12-15', '08:51:17'),
(48, 5, 9, '9', 1, 240000, '2017-12-15', '08:51:17'),
(49, 5, 9, '17', 1, 200000, '2017-12-15', '09:11:57'),
(50, 5, 9, '17', 1, 200000, '2017-12-15', '09:12:40'),
(51, 5, 9, '12', 1, 40850, '2017-12-15', '09:12:40'),
(52, 5, 9, '9', 1, 240000, '2017-12-15', '09:12:40'),
(53, 5, 9, '17', 1, 200000, '2017-12-15', '09:14:47'),
(54, 5, 9, '16', 1, 18700, '2017-12-15', '09:14:47'),
(55, 5, 9, '14', 1, 23232, '2017-12-15', '09:14:47'),
(56, 5, 9, '13', 1, 40000, '2017-12-15', '09:14:47'),
(57, 5, 9, '9', 1, 240000, '2017-12-15', '09:14:47'),
(58, 5, 5, '3', 1, 6000, '2017-12-15', '09:14:47'),
(59, 5, 9, '8', 1, 3500, '2017-12-15', '09:14:47'),
(60, 5, 9, '17', 1, 200000, '2017-12-15', '09:16:19'),
(61, 5, 9, '14', 1, 23232, '2017-12-15', '09:16:19'),
(62, 19, 9, '7', 1, 630, '2017-12-15', '09:18:12'),
(63, 19, 5, '3', 1, 6000, '2017-12-15', '09:18:12'),
(64, 19, 9, '13', 1, 40000, '2017-12-15', '09:18:12'),
(65, 19, 9, '17', 1, 200000, '2017-12-15', '09:20:02'),
(66, 19, 9, '16', 1, 18700, '2017-12-15', '09:20:02'),
(67, 19, 9, '14', 1, 23232, '2017-12-15', '09:20:02'),
(68, 19, 9, '10', 1, 22000, '2017-12-15', '09:20:02'),
(69, 19, 9, '14', 1, 23232, '2017-12-15', '09:24:02'),
(70, 19, 9, '13', 1, 40000, '2017-12-15', '09:24:02');


ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

ALTER TABLE `payment`
  ADD PRIMARY KEY (`Card_ID`);

ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

ALTER TABLE `refund`
  ADD PRIMARY KEY (`Refund_ID`);

ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Supplier_ID`);

ALTER TABLE `transaction`
  ADD PRIMARY KEY (`Transaction_ID`);


ALTER TABLE `customer`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
ALTER TABLE `payment`
  MODIFY `Card_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
ALTER TABLE `product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
ALTER TABLE `refund`
  MODIFY `Refund_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
ALTER TABLE `supplier`
  MODIFY `Supplier_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
ALTER TABLE `transaction`
  MODIFY `Transaction_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;