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
INSERT INTO users_employee (name, surname, email, phone,username, password) VALUES ("Nikos", "cs161127", "690000000", "cs161020@uniwa.gr", "nikoselite", "1234nikos");

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

drop table if exists room;

CREATE TABLE room (
                      room_num INT NOT NULL,
                      roomtype ENUM('Single', 'Deluxe', 'Superior') NOT NULL,
                      PRIMARY KEY (room_num)
)  ;

drop table if exists reservation;
CREATE TABLE reservation (
                             id INT NOT NULL auto_increment,
                             room_num INT NOT NULL,
                             date_checked_in DATE NOT NULL,
                             date_checked_out DATE NOT NULL,
                             name VARCHAR(50) NOT NULL,
                             surname VARCHAR(50) NOT NULL,
                             email VARCHAR(50) NOT NULL,
                             phone VARCHAR(50) NOT NULL,
                             PRIMARY KEY (id),
                             FOREIGN KEY (room_num) REFERENCES room(room_num)
) ;


INSERT INTO room (room_num, roomtype) VALUES (101, 'Single');
INSERT INTO room (room_num, roomtype) VALUES (102, 'Single');
INSERT INTO room (room_num, roomtype) VALUES (103, 'Single');
INSERT INTO room (room_num, roomtype) VALUES (111, 'Deluxe');
INSERT INTO room (room_num, roomtype) VALUES (112, 'Deluxe');
INSERT INTO room (room_num, roomtype) VALUES (113, 'Deluxe');
INSERT INTO room (room_num, roomtype) VALUES (114, 'Deluxe');
INSERT INTO room (room_num, roomtype) VALUES (115, 'Deluxe');
INSERT INTO room (room_num, roomtype) VALUES (116, 'Deluxe');
INSERT INTO room (room_num, roomtype) VALUES (121, 'Superior');
INSERT INTO room (room_num, roomtype) VALUES (122, 'Superior');

INSERT INTO reservation  VALUES (1, 102, '2022-05-29', '2014-05-31', 'Paola', 'Velasco','cs161020@uniwa.gr','69300000');
INSERT INTO reservation VALUES (2, 114, '2022-06-01', '2014-06-06', 'Nikos', 'Panagis','cs161142@uniwa.gr','69300005');
INSERT INTO reservation VALUES (3, 116, '2022-06-08', '2014-06-11', 'Maria', 'Velasco','cs161022@uniwa.gr','69300006');