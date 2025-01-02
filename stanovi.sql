SET sql_notes = 0;
drop table if EXISTS stan;
drop table if EXISTS projekt;
drop table if EXISTS slika;
drop table if EXISTS slike;
CREATE DATABASE IF NOT EXISTS stanovi;
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
('2', 'prizemlje', '38.91', '0.00', 'dvosoban', '1', '0', '0'),
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
CREATE TABLE IF NOT EXISTS slika (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    ime varchar(255) NOT NULL,
    naslov varchar(255) NOT NULL
);
INSERT INTO `slika` (`ime`,`naslov`) VALUES 
('stan01.jpg', 'stan01'), 
('stan02.jpg', 'stan02'),
('stan03.jpg', 'stan03'),
('stan04.jpg', 'stan04'),
('stan05.jpg', 'stan05'),
('stan 06.jpg', 'stan 06'),
('stan 07.jpg', 'stan 07'),
('stan 08.jpg', 'stan 08'),
('stan 09.jpg', 'stan 09'),
('stan 10.jpg', 'stan 10'),
('stan 11.jpg', 'stan 11'),
('stan 12.jpg', 'stan 12'),
('stan 13.jpg', 'stan 13'),
('stan 14.jpg', 'stan 14'),
('stan 15.jpg', 'stan 15'),
('stan 16.jpg', 'stan 16'),
('stan 17.jpg', 'stan 17'),
('stan 18.jpg', 'stan 18'),
('stan 19.jpg', 'stan 19'),
('stan 20.jpg', 'stan 20'),
('stan 21.jpg', 'stan 21'),
('stan 22.jpg', 'stan 22'),
('stan 23.jpg', 'stan 23')
;
INSERT INTO `slika` (`ime`,`naslov`) VALUES 
('Vršačka 40 1.jpg', 'Vršačka 40 1'),
('Vršačka 40 2.jpg', 'Vršačka 40 2'),
('Vršačka 40 3.jpg', 'Vršačka 40 3'),
('Bul.JašeTomićabr.31A1.jpg', 'Bul.JašeTomićabr 31A 1'),
('Bul.JašeTomićabr.31A3.jpg', 'Bul.JašeTomićabr 31A 3'),
('Bul.JašeTomićabr.31A4.jpg', 'Bul.JašeTomićabr 31A 4'),
('Hadži Ruvimova br.65 1.jpg', 'Hadži Ruvimova 65 1'),
('Janka Veselinovića  2-4 1.jpg', 'Janka Veselinovića  2-4 1'),
('Janka Veselinovića  2-4 2.jpg', 'Janka Veselinovića  2-4 2'),
('Janka Veselinovića  2-4 3.jpg', 'Janka Veselinovića  2-4 3'),
('Đorđa Zličića br.6 1.jpg', 'Đorđa Zličića br.6 1'),
('Đorđa Zličića br.6 2.jpg', 'Đorđa Zličića br.6 2'),
('Đorđa Zličića br.6 3.jpg', 'Đorđa Zličića br.6 3'),
('Janka Čmelika 49 1.jpg', 'Janka Čmelika 49 1'),
('Janka Čmelika 49 2.jpg', 'Janka Čmelika 49 2'),
('Janka Čmelika br.56-58 3.jpg', 'Janka Čmelika br.56-58 3'),
('Janka Čmelika br.56-58 2.jpg', 'Janka Čmelika br.56-58 2'),
('Radoja Domanovića 11 1.jpg', 'Radoja Domanovića 11 1'),
('Radoja Domanovića 11 2.jpg', 'Radoja Domanovića 11 2'),
('noimage.png', 'noimage')
;

CREATE TABLE IF NOT EXISTS slike (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    slika_id INT,
    FOREIGN KEY (slika_id) REFERENCES stan(id),
    stan_id INT,
    FOREIGN KEY (stan_id) REFERENCES stan(id),
	proj_id INT,
	FOREIGN KEY (proj_id) REFERENCES projekat(id)
);
INSERT INTO `slike` (`slika_id`, `stan_id`, `proj_id`) VALUES 

(1, '1', NULL),
(2, '2', NULL),
(3, '3', NULL),
(4, '4', NULL),
(5, '5', NULL),
(6, '6', NULL),
(7, '7', NULL),
(8, '8', NULL),
(9, '9', NULL),
(10, '10', NULL),
(11, '11', NULL),
(12, '12', NULL),
(13, '13', NULL),
(14, '14', NULL),
(15, '15', NULL),
(16, '16', NULL),
(17, '17', NULL),
(18, '18', NULL),
(19, '19', NULL),
(20, '20', NULL),
(21, '21', NULL),
(22, '22', NULL),
(23, '23', NULL),
(24, NULL, '9'),
(25, NULL, '9'),
(26,NULL, '9'),
(27, NULL, '5'),
(28,NULL, '5'),
(29,NULL, '5'),
(30, NULL, '1'),
(31, NULL, '3'),
(32, NULL, '3'),
(33, NULL, '3'),
(34, NULL, '7'),
(35, NULL, '7'),
(36, NULL, '7'),
(37, NULL, '6'),
(38, NULL, '6'),
(39, NULL, '4'),
(40, NULL, '4'),
(41, NULL, '8'),
(42, NULL, '8'),
(43, NULL, '2')
;
SET sql_notes = 1;