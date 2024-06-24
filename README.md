# Database

Create database ebook;

create table signup (
    UserID INT PRIMARY KEY AUTO_INCREMENT,
    UserName VARCHAR(50),
    UserPhone bigint(20),
    UserEmail VARCHAR(20),
    UserPass VARCHAR(20),
    UserGender VARCHAR(40),
    UserImg VARCHAR(50)
);