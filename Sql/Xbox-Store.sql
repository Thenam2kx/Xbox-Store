CREATE TABLE `Role` (
  `RoleID` int PRIMARY KEY AUTO_INCREMENT,
  `RoleCode` bit,
  `RoleName` varchar(20)
);

CREATE TABLE `User` (
  `UserID` int PRIMARY KEY AUTO_INCREMENT,
  `RoleID` int,
  `FullName` varchar(50),
  `Email` varchar(50),
  `Phone` varchar(10),
  `Gender` bit,
  `Password` varchar(50),
  `Status` bit,
  `Thumbnail` varchar(500),
  `Deleted` bit
);

CREATE TABLE `Products` (
  `ProductID` int PRIMARY KEY AUTO_INCREMENT,
  `DiscountID` int,
  `CategoryID` int,
  `ReviewsID` int,
  `GalleryID` int,
  `SupplierID` int,
  `ProductName` varchar(255),
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
  `DiscountID` int PRIMARY KEY AUTO_INCREMENT,
  `DisPrice` int
);

CREATE TABLE `Category` (
  `CategoryID` int PRIMARY KEY AUTO_INCREMENT,
  `CategoryName` varchar(50),
  `Thumbnail` varchar(500),
  `Description` varchar(500)
);

CREATE TABLE `Reviews` (
  `ReviewsID` int PRIMARY KEY AUTO_INCREMENT,
  `Riviews` longtext
);

CREATE TABLE `Gallery` (
  `GalleryID` int PRIMARY KEY AUTO_INCREMENT,
  `Gallery` varchar(500)
);

CREATE TABLE `Supplier` (
  `SupplierID` int PRIMARY KEY AUTO_INCREMENT,
  `SupplierName` varchar(50),
  `phone` varchar(10),
  `Email` varchar(50),
  `Country` varchar(20),
  `City` varchar(20)
);

CREATE TABLE `Order` (
  `OrderID` int PRIMARY KEY AUTO_INCREMENT,
  `UserID` int,
  `Address` varchar(50),
  `ShippingFee` int,
  `OrderDate` datetime,
  `ShippedDate` datetime,
  `RequiredDate` datetime,
  `Status` bit,
  `Message` varchar(255)
);

CREATE TABLE `OrderDetail` (
  `OrderDetailID` int PRIMARY KEY AUTO_INCREMENT,
  `OrderID` int,
  `ProductID` int,
  `Quantity` int,
  `UnitPrice` int,
  `Discount` int
);

ALTER TABLE `Discount` ADD FOREIGN KEY (`DiscountID`) REFERENCES `Products` (`DiscountID`);

ALTER TABLE `Category` ADD FOREIGN KEY (`CategoryID`) REFERENCES `Products` (`CategoryID`);

ALTER TABLE `Reviews` ADD FOREIGN KEY (`ReviewsID`) REFERENCES `Products` (`ReviewsID`);

ALTER TABLE `Gallery` ADD FOREIGN KEY (`GalleryID`) REFERENCES `Products` (`GalleryID`);

ALTER TABLE `OrderDetail` ADD FOREIGN KEY (`ProductID`) REFERENCES `Products` (`ProductID`);

ALTER TABLE `OrderDetail` ADD FOREIGN KEY (`OrderID`) REFERENCES `Order` (`OrderID`);

ALTER TABLE `Order` ADD FOREIGN KEY (`UserID`) REFERENCES `User` (`UserID`);

ALTER TABLE `User` ADD FOREIGN KEY (`RoleID`) REFERENCES `Role` (`RoleID`);

ALTER TABLE `Products` ADD FOREIGN KEY (`SupplierID`) REFERENCES `Supplier` (`SupplierID`);
