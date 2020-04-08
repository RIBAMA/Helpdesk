CREATE DATABASE IF NOT EXISTS record;
GRANT ALL PRIVILEGES ON record.* TO 'helpdesk'@'localhost' IDENTIFIED BY 'helpdesk';
USE record;

CREATE TABLE IF NOT EXISTS admin (
    id_admin INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(256) NOT NULL,
    email VARCHAR(256) NOT NULL,
    password VARCHAR(256) NOT NULL
);

CREATE TABLE IF NOT EXISTS client (
    id_client INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(256) NOT NULL,
    email VARCHAR(256) NOT NULL,
    password VARCHAR(256) NOT NULL
);

CREATE TABLE IF NOT EXISTS ticket (
    id_ticket INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    sender INT NOT NULL,
    day DATE NOT NULL,
    hour TIME NOT NULL,
    description TEXT,
    CONSTRAINT k_sender
    FOREIGN KEY  (sender)
    REFERENCES client(id_client)
);
