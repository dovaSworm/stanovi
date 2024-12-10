SET sql_notes = 0;
CREATE DATABASE IF NOT EXISTS stanovi;
USE stanovi;
create table IF NOT EXISTS users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    ime VARCHAR(100) NOT NULL,
    sifra VARCHAR(120) NOT NULL,
    uloga char (20)
);
CREATE TABLE IF NOT EXISTS stan (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    adresa varchar(255),
    kvadratura DECIMAL(10, 2),
    cena DECIMAL(20, 2),
    vlasnik varchar(255),
    uknjizen boolean
);

CREATE TABLE IF NOT EXISTS slike (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    naziv varchar(255) NOT NULL,
    stan_id INT NOT NULL,
    FOREIGN KEY (stan_id) REFERENCES stan(id)
);
INSERT INTO users (ime, sifra, uloga) VALUES (
    'dova', 'dova', 'admin'
);
SET sql_notes = 1;