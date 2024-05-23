CREATE TABLE `User` (
  `UserID` int PRIMARY KEY AUTO_INCREMENT,
  `FullName` varchar(50),
  `Gender` bit,
  `Status` bit
);

CREATE TABLE `Products` (
  `ProductID` int PRIMARY KEY AUTO_INCREMENT,
  `CategoryID` varchar(20),
  `ProductName` varchar(50),
  `UnitPrice` int,
  `UnitInStock` int,
  `Discount` int,
  `Thumbnail` varchar(500),
  `Desc` longtext,
  `Rate` int
);

CREATE TABLE `Category` (
  `CategoryID` varchar(20) PRIMARY KEY,
  `Name` varchar(50)
);

ALTER TABLE `Products` ADD FOREIGN KEY (`CategoryID`) REFERENCES `Category` (`CategoryID`);
