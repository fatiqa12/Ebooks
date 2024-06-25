# Database


## Attempt 1
Create database ebook;

## Attempt 2

create table signup (
    UserID INT PRIMARY KEY AUTO_INCREMENT,
    UserName VARCHAR(50),
    UserPhone bigint(20),
    UserEmail VARCHAR(20),
    UserPass VARCHAR(20),
    UserGender VARCHAR(40),
    UserImg VARCHAR(50)
);

create table customers(
	CustomerId INT PRIMARY KEY AUTO_INCREMENT,
	CustomerName VARCHAR(225),
	CustomerPhone VARCHAR(225),
	CustomerEmail VARCHAR(225),
	CustomerPassword VARCHAR(225),
	CustomerAddress VARCHAR(225),
	CustomerImg VARCHAR(225)
);

create table books (
	BookID INT PRIMARY KEY AUTO_INCREMENT,
	BookName VARCHAR(225),
	AuthorName VARCHAR(225),
	BookDescription TEXT,
    BookCategory VARCHAR(225),
	BookPrice DECIMAL,
	BookPublishDate DATE,
	BookType VARCHAR(225),
	BookImg VARCHAR(225)
);

CREATE table competitions (
	CompetitionId INT PRIMARY KEY AUTO_INCREMENT,
	CompetitionType VARCHAR(225),
	CompetitonStartTime DATETIME,
	CompetitonEndTime DATETIME,
	CompetitionDate DATE
);

CREATE TABLE deliveries (
	OrderId INT PRIMARY KEY AUTO_INCREMENT,
	customerid INT(9),
    customlocation VARCHAR(225),
    FOREIGN KEY (customerid) REFERENCES customers(CustomerId)
);

CREATE TABLE aorders(
    aorderid INT PRIMARY KEY AUTO_INCREMENT,
	customerId INT(9),
    quantity INT(9),
    orderstatus VARCHAR(225),
    FOREIGN KEY (customerid) REFERENCES customers(CustomerId)
);

## Attempt 3

INSERT INTO signup VALUES (NULL, "Subhan", 300, "subhan@gmail.com", "subhan", "male", NULL);
