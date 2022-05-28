DROP DATABASE IF EXISTS Elite;
CREATE DATABASE Elite;

DROP user IF EXISTS 'uniwa'@'localhost';
CREATE user 'uniwa' @'localhost';
ALTER USER 'uniwa'@'localhost' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON `elite`.* TO 'uniwa'@'localhost' WITH GRANT OPTION;

USE Elite;

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
