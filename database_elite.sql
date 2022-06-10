DROP DATABASE IF EXISTS Elite;
CREATE DATABASE Elite;

DROP user IF EXISTS 'elite_admin'@'localhost';
CREATE user 'elite_admin' @'localhost';
ALTER USER 'elite_admin'@'localhost' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON `elite`.* TO 'elite_admin'@'localhost' WITH GRANT OPTION;

USE Elite;


DROP TABLE IF EXISTS users_employee;

CREATE TABLE users_employee (
                              id INT NOT NULL auto_increment,
                              name VARCHAR(50),
                              surname VARCHAR(50),
                              email VARCHAR(50),
                              phone VARCHAR(50),
                              username VARCHAR(50),
                              password VARCHAR(50),
                              PRIMARY KEY(id)
);

INSERT INTO users_employee (name, surname, email, phone,username, password) VALUES ("Paola", "cs161020", "690000000", "cs161020@uniwa.gr", "paolaelite", "1234paola");

DROP TABLE IF EXISTS contact_data;

CREATE TABLE contact_data (
                              id INT NOT NULL auto_increment,
                              name VARCHAR(50),
                              surname VARCHAR(50),
                              email VARCHAR(50),
                              phone VARCHAR(50),
                              message TEXT ,
                              PRIMARY KEY(id)
);
