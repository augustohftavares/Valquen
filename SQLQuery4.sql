CREATE TABLE users (
	id INT NOT NULL PRIMARY KEY,
	firstName VARCHAR(35) NOT NULL,
	lastName VARCHAR(35) NOT NULL,
	email VARCHAR(89) NOT NULL UNIQUE,
	phone VARCHAR(15) NOT NULL UNIQUE,
	registeredAt DATETIME NOT NULL,
	lastLogin DATETIME NULL DEFAULT NULL,
	userDescription VARCHAR(200) NULL,
	intro TEXT NULL DEFAULT NULL,
	admin TINYINT NOT NULL DEFAULT 0,
	vendor TINYINT NOT NULL DEFAULT 0
);

CREATE TABLE products (
	id INT PRIMARY KEY
	userId INT NOT NULL,
	title VARCHAR(75) NOT NULL,
	price FLOAT NOT NULL DEFAULT 0,
	discount FLOAT NOT NULL DEFAULT 0,
	quantity INT NOT NULL DEFAULT 0,
	createdAt DATETIME NOT NULL,
	details TEXT NULL DEFAULT NULL
);