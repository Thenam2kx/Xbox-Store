CREATE TABLE `Role` (
  `RoleID` varchar(10) PRIMARY KEY,
  `RoleName` varchar(20)
);

CREATE TABLE `User` (
  `UserID` varchar(10) PRIMARY KEY,
  `RoleID` varchar(10),
  `FullName` varchar(50),
  `Email` varchar(50),
  `Phone` varchar(15),
  `Gender` bit,
  `Password` varchar(50),
  `Status` bit,
  `Thumbnail` varchar(500),
  `Deleted` bit
);

CREATE TABLE `Products` (
  `ProductID` varchar(10) PRIMARY KEY,
  `CategoryID` varchar(10),
  `SupplierID` varchar(10),
  `ProductName` varchar(150),
  `UnitPrice` int,
  `UnitInStock` int,
  `UnitInOrder` int,
  `CreateAt` datetime,
  `UpdateAt` datetime,
  `Viewrs` int,
  `Description` longtext,
  `Deleted` bit
);

CREATE TABLE `Discount` (
  `DiscountID` PRIMARY KEY AUTO_INCREMENT,
  `ProductID` varchar(10),
  `DisPrice` int
);

CREATE TABLE `Category` (
  `CategoryID` varchar(10) PRIMARY KEY,
  `CategoryName` varchar(10),
  `Thumbnail` varchar(500),
  `Description` varchar(255)
);

CREATE TABLE `Reviews` (
  `ReviewsID` int PRIMARY KEY AUTO_INCREMENT,
  `ProductID` varchar(10),
  `Riviews` longtext
);

CREATE TABLE `Gallery` (
  `GalleryID` int PRIMARY KEY AUTO_INCREMENT,
  `ProductID` varchar(10),
  `Gallery` varchar(255)
);

CREATE TABLE `Supplier` (
  `SupplierID` varchar(10) PRIMARY KEY,
  `SupplierName` varchar(150),
  `phone` varchar(15),
  `Email` varchar(50),
  `Country` varchar(30),
  `City` varchar(30)
);

CREATE TABLE `Order` (
  `OrderID` varchar(10) PRIMARY KEY,
  `UserID` varchar(10),
  `Address` varchar(255),
  `ShippingFee` int,
  `OrderDate` datetime,
  `ShippedDate` datetime,
  `RequiredDate` datetime,
  `Status` bit,
  `Message` varchar(255)
);

CREATE TABLE `OrderDetail` (
  `OrderDetailID` int PRIMARY KEY AUTO_INCREMENT,
  `OrderID` varchar(10),
  `ProductID` varchar(10),
  `Quantity` int,
  `UnitPrice` int,
  `Discount` int
);

ALTER TABLE `Category` ADD FOREIGN KEY (`CategoryID`) REFERENCES `Products` (`CategoryID`);

ALTER TABLE `OrderDetail` ADD FOREIGN KEY (`ProductID`) REFERENCES `Products` (`ProductID`);

ALTER TABLE `OrderDetail` ADD FOREIGN KEY (`OrderID`) REFERENCES `Order` (`OrderID`);

ALTER TABLE `Order` ADD FOREIGN KEY (`UserID`) REFERENCES `User` (`UserID`);

ALTER TABLE `User` ADD FOREIGN KEY (`RoleID`) REFERENCES `Role` (`RoleID`);

ALTER TABLE `Products` ADD FOREIGN KEY (`SupplierID`) REFERENCES `Supplier` (`SupplierID`);

ALTER TABLE `Reviews` ADD FOREIGN KEY (`ProductID`) REFERENCES `Products` (`ProductID`);

ALTER TABLE `Discount` ADD FOREIGN KEY (`ProductID`) REFERENCES `Products` (`ProductID`);

ALTER TABLE `Gallery` ADD FOREIGN KEY (`ProductID`) REFERENCES `Products` (`ProductID`);
