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
  `Zip` int(12) NOT NULL,
  `Phone` int(12) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `customer` (`Customer_ID`, `Firstname`, `Lastname`, `Username`, `Gender`, `Birthday`, `Address1`, `Address2`, `Zip`, `Phone`, `Email`, `Password`) VALUES
(5, 'Korn', 'Chotpitakkul', 'kornch', 'Male', '1997-01-09', '599/116 Klangkrung', 'Yannawa, Bangkok', 10120, 905496265, 'korn.chot@gmail.com', '$2y$10$W5Wx1vQaC6IAJMsil/DT8O8ZEuhlZPsNBVCW8qzvUcbEIH6otjsJ6');

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
(3, 5, '5a20343c684ea6.94870764.jpg', 'LG Ultrafine', 'Apple recommend', 'DS', 46000, 3, 0, 'refundNo', NULL),
(4, 5, '5a203eb27548c4.72860060.png', 'Beats', 'Super Cool', 'AC', 16000, 100, 10, 'refundYes', NULL),
(5, 5, '5a203effcb4e73.40767676.jpeg', 'Air pods', 'Made by apple', 'AC', 6900, 50, 0, 'refundYes', NULL);

CREATE TABLE `supplier` (
  `Supplier_ID` int(11) NOT NULL,
  `Firstname` varchar(32) NOT NULL,
  `Lastname` varchar(32) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Company` varchar(32) NOT NULL,
  `Address1` varchar(64) NOT NULL,
  `Address2` varchar(64) DEFAULT NULL,
  `Zip` int(12) NOT NULL,
  `Phone` int(12) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `supplier` (`Supplier_ID`, `Firstname`, `Lastname`, `Username`, `Company`, `Address1`, `Address2`, `Zip`, `Phone`, `Email`, `Password`) VALUES
(5, 'Kevin', 'Mitnick', 'kevinmit', 'TerminalHacker', '1234 Kingkross', 'London', 123456, 21231234, 'kevinmitnick@outlook.com', '$2y$10$e.u5PK0f7sd5j4iF/YN.bucXkEeSsr7IbsS6SSbhjhR.9b5KBImBK');


ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Supplier_ID`);


ALTER TABLE `customer`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
ALTER TABLE `product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
ALTER TABLE `supplier`
  MODIFY `Supplier_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
