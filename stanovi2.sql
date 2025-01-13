SET sql_notes = 0;
-- USE u407970145_stanovi;
USE stanovi;
create table IF NOT EXISTS users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    ime VARCHAR(100) NOT NULL,
    sifra VARCHAR(120) NOT NULL,
    uloga char (20)
);
INSERT INTO users (ime, sifra, uloga) VALUES (
    'dova', 'dova', 'ADMIN'
);
CREATE TABLE IF NOT EXISTS stan (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    broj varchar(8),
	sprat varchar(255),
    kvadratura DECIMAL(10, 2),
    cena DECIMAL(20, 2),
    tip varchar(255),
    slobodan boolean,
	rezervisano boolean,
	prodato boolean
);
INSERT INTO `stan` (`broj`, `sprat`, `kvadratura`, `cena`, `tip`, `slobodan`, `rezervisano`, `prodato`) VALUES 
('1', 'prizemlje', '26.71', '0.00', 'garsonjera', '1', '0', '0'),
('2', 'prizemlje', '40.11', '0.00', 'dvosoban', '1', '0', '0'),
('3', 'prizemlje', '29.16', '0.00', 'dvosoban', '1', '0', '0'),
('4', 'prizemlje', '36.56', '0.00', 'dvosoban', '1', '0', '0'),
('5', 'prizemlje', '42.48', '0.00', 'dvosoban', '1', '0', '0'),
('6', '1', '42.48', '0.00', 'dvosoban', '1', '0', '0'),
('7', '1', '40.87', '0.00', 'dvosoban', '1', '0', '0'),
('8', '1', '41.13', '0.00', 'dvosoban', '1', '0', '0'),
('9', '1', '40.48', '0.00', 'dvosoban', '1', '0', '0'),
('10', '1', '42.49', '0.00', 'dvosoban', '1', '0', '0'),
('11', '1', '59.29', '0.00', 'trosoban', '1', '0', '0'),
('12', '2', '42.38', '0.00', 'dvosoban', '1', '0', '0'),
('13', '2', '40.87', '0.00', 'dvosoban', '1', '0', '0'),
('14', '2', '41.13', '0.00', 'dvosoban', '1', '0', '0'),
('15', '2', '40.48', '0.00', 'dvosoban', '1', '0', '0'),
('16', '2', '42.49', '0.00', 'dvosoban', '1', '0', '0'),
('17', '2', '59.26', '0.00', 'trosoban', '1', '0', '0'),
('18', '3', '42.38', '0.00', 'dvosoban', '1', '0', '0'),
('19', '3', '40.87', '0.00', 'dvosoban', '1', '0', '0'),
('20', '3', '41.13', '0.00', 'dvosoban', '1', '0', '0'),
('21', '3', '40.48', '0.00', 'dvosoban', '1', '0', '0'),
('22', '3', '42.49', '0.00', 'dvosoban', '1', '0', '0'),
('23', '3', '59.26', '0.00', 'dvosoban', '1', '0', '0')
;
CREATE TABLE IF NOT EXISTS projekt (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    adresa varchar(255),
	naziv varchar(255),
	objekat varchar(255),
	lokacija varchar(255),
	tipovi varchar(255),
	parking varchar(255),
	prostorije varchar(255),
	novi BOOLEAN,
	stanova INT,
    garaza INT, 
	parkinga INT,
    poslovni INT,
    godina INT
);
INSERT INTO `projekt` (`id`, `adresa`, `naziv`, `objekat`, `lokacija`, `tipovi`, `parking`, `prostorije`, `novi`, `stanova`, `garaza`, `parkinga`, `poslovni`, `godina`) VALUES
(1, 'Hadži Ruvimova 65', 'Hadži Ruvimova', 'Zgrada sa 57 stanova,5 poslovnih prostora i 6 garaža', 'lokacija', 'tipovi', 'parging', 'prostorije', 0, 67, 2, 0, 2, 2003),
(2, 'Hadži Ruvimova 59-61', 'Hadži Ruvimova', 'Zgrada sa 67 stanova, 6 poslovnih prostora i 2 garaže', 'Hadži Ruvimova 59-61', 'Hadži Ruvimova 59-61', 'Hadži Ruvimova 59-61', 'Hadži Ruvimova 59-61', 0, 67, 2, 0, 6, 2005),
(3,'Janka Veselinovića 2-4', 'Janka Veselinovića', 'Zgrada sa 98 stanova, 10 poslovnih prostora i 3 garaže', 'lokacija', 'tipovi', 'parging', 'prostorije', '0', '98', '3', '0', '10', '2008'),
(4, 'Janka Čmelika 56-58', 'Janka Čmelika', 'Zgrada sa 90 stana, 5 poslovna prostora i 15  garaža', 'lokacija', 'tipovi', 'parging', 'prostorije', 0, 90, 15, 0, 3, 2009),
(5, 'Stjepana Mitrova Ljubiše 10-12', 'Stjepana Mitrova Ljubiše', 'Zgrada sa 74 stana i 15 garaža u suterenu i 3 poslovna prostora', 'lokacija', 'tipovi', 'parging', 'prostorije', 0, 74, 15, 0, 3, 2011),
(6, 'Janka Čmelika 49', 'Janka Čmelika', 'Zgrada sa 41 stanom, 1 poslovnim prostorom i 6 garaža', 'lokacija', 'tipovi', 'parging', 'prostorije', 0, 41, 6, 0, 1, 2016),
(7, 'Đorđa Zličića 6', 'Đorđa Zličića', 'Zgrada sa 47 stanova i u suterenu 17 garažnih mesta i 6 garaža', 'lokacija', 'tipovi', 'parging', 'prostorije', 0, 47, 6, 17, 0, 2018),
(8, 'Radoja Domanovića 11', 'Radoja Domanovića', '', 'lokacija', 'tipovi', 'parging', 'prostorije', 0, 0, 0, 0, 0, 2020),
(9, 'Vršačka 40', 'Vršačka', '', 'lokacija', 'tipovi', 'parging', 'prostorije', 0, 0, 0, 0, 0, 2023);


CREATE TABLE IF NOT EXISTS slike (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    slika varchar(255) NOT NULL,
    stan_id INT,
    FOREIGN KEY (stan_id) REFERENCES stan(id),
	proj_id INT,
	FOREIGN KEY (proj_id) REFERENCES projekt(id)
);
INSERT INTO `slike` (`id`, `slika`, `stan_id`, `proj_id`) VALUES 

(1,'stan01.jpg',  '1', NULL),
(2,'stan02.jpg',  '2', NULL),
(3, 'stan03.jpg', '3', NULL),
(4,'stan04.jpg',  '4', NULL),
(5,'stan05.jpg',  '5', NULL),
(6,'stan 06.jpg',  '6', NULL),
(7,'stan 07.jpg',  '7', NULL),
(8, 'stan 08.jpg', '8', NULL),
(9, 'stan 09.jpg', '9', NULL),
(10,'stan 10.jpg',  '10', NULL),
(11,'stan 11.jpg',  '11', NULL),
(12, 'stan 12.jpg', '12', NULL),
(13,'stan 13.jpg',  '13', NULL),
(14,'stan 14.jpg',  '14', NULL),
(15, 'stan 15.jpg', '15', NULL),
(16, 'stan 16.jpg', '16', NULL),
(17,'stan 17.jpg',  '17', NULL),
(18,'stan 18.jpg',  '18', NULL),
(19,'stan 19.jpg',  '19', NULL),
(20, 'stan 20.jpg', '20', NULL),
(21,'stan 21.jpg',  '21', NULL),
(22,'stan 22.jpg',  '22', NULL),
(23,'stan 23.jpg',  '23', NULL),
(24,'Vrsacka401.jpg', NULL, '9'),
(25,'Vrsacka402.jpg', NULL, '9'),
(26,'Vrsacka403.jpg',NULL, '9'),
(27,'Bul.JaseTomica31A1.jpg', NULL, '5'),
(28,'Bul.JaseTomica31A3.jpg', NULL, '5'),
(29,'Bul.JaseTomica31A4.jpg', NULL, '5'),
(30, 'HadziRuvimova651.jpg', NULL, '1'),
(31,'JankaVeselinovica2-41.jpg',  NULL, '3'),
(32, 'JankaVeselinovica2-42.jpg', NULL, '3'),
(33,'JankaVeselinovica2-43.jpg',  NULL, '3'),
(34, 'djordjaZlicica61.jpg', NULL, '7'),
(35, 'djordjaZlicica62.jpg', NULL, '7'),
(36,'djordjaZlicica63.jpg',  NULL, '7'),
(37,'Jankacmelika491.jpg',  NULL, '6'),
(38,'Jankacmelika492.jpg',  NULL, '6'),
(39,'jankacmelika56-583.jpg',  NULL, '4'),
(40,'jankacmelika56-582.jpg', NULL, '4'),
(41,'RadojaDomanovica111.jpg',  NULL, '8'),
(42, 'RadojaDomanovica112.jpg', NULL, '8'),
(43,'HadziRuvimova59-61.jpg',  NULL, '2'),
(44,'HadziRuvimova59-612.jpg',  NULL, '2')
;
SET sql_notes = 1;