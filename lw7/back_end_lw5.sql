CREATE DATABASE [rental]
USE [rental]
GO

--2.
CREATE TABLE [dvd]
(
	dvd_id INT IDENTITY PRIMARY KEY,
	title VARCHAR (100),
	production_year DATE
)

CREATE TABLE [customer]
(
	customer_id INT IDENTITY PRIMARY KEY,
	first_name VARCHAR (100),
	last_name VARCHAR (100),
	passport_code SMALLINT,
	registration_date DATE
)

CREATE TABLE [offer]
(
	offer_id INT IDENTITY PRIMARY KEY,
	dvd_id INT,
	customer_id INT,
	offer_date DATE,
	return_date DATE
)

ALTER TABLE [offer]
WITH CHECK ADD CONSTRAINT FK_offer_dvd
FOREIGN KEY (dvd_id)
REFERENCES  [dvd] (dvd_id)
GO

ALTER TABLE [offer]
WITH CHECK ADD CONSTRAINT FK_offer_customer
FOREIGN KEY (customer_id)
REFERENCES  [customer] (customer_id)
GO

--3.
INSERT INTO [dvd] 
	(title, production_year) 
VALUES 
	('Alice in Wonderland', '10-12-2010'),
	('Inception', '10-01-2010'),
	('Titanic', '11-18-1997'),
	('Avatar', '12-17-2009'),
	('Avengers: Endgame', '04-22-2019'),
	('Tron', '12-16-2010')

INSERT INTO [customer] 
	(first_name, last_name, passport_code, registration_date) 
VALUES 
	('John', 'Rassel', '213243', '01-05-2018'),
	('Oliver', 'Tree', '787898', '02-20-2019'),
	('Olivia', 'Waterson', '198230', '02-15-2019'),
	('Patric', 'Grey' , '424290', '01-25-2019')

INSERT INTO [offer]
	(dvd_id, customer_id, offer_date, return_date)
VALUES
	(1, 2, '06-05-2018', '07-05-2018'),
	(2, 3, '04-20-2019', NULL),
	(3, 4, '03-01-2019', '05-10-2019'),
	(4, 5, '05-15-2019', NULL)

--4.
SELECT 
	title, 
	production_year
FROM [dvd]
WHERE YEAR([dvd].production_year) = '2010'
ORDER BY title ASC

--5.
SELECT 
	[customer].first_name, 
	[customer].last_name,
	offer_date,
	[dvd].title
FROM [offer]
LEFT JOIN [dvd] ON [offer].dvd_id = [dvd].dvd_id
LEFT JOIN [customer] ON [offer].customer_id = [customer].customer_id
WHERE offer.return_date IS NULL

--6.
SELECT 
	[customer].first_name, [customer].last_name,[dvd].title, [offer].offer_date
FROM [offer]
	LEFT JOIN [customer] ON [offer].customer_id = [customer].customer_id
	LEFT JOIN [dvd] ON [offer].dvd_id = [dvd].dvd_id
	WHERE YEAR([offer_date]) = '2019'