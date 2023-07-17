-- phpMyAdmin SQL Dump
-- version 5.2.1
CREATE TABLE pago (
  id INT AUTO_INCREMENT PRIMARY KEY,
  card_number VARCHAR(16) NOT NULL,
  card_name VARCHAR(50) NOT NULL,
  expiry_date VARCHAR(10) NOT NULL,
  cvv VARCHAR(3) NOT NULL,
  delivery_option VARCHAR(50) DEFAULT NULL,
  address VARCHAR(100) DEFAULT NULL,
  home_address VARCHAR(100) DEFAULT NULL,
  first_name VARCHAR(50) NOT NULL,
  last_name VARCHAR(50) NOT NULL,
  amount DECIMAL(10,2) NOT NULL,
  delivery_instructions TEXT DEFAULT NULL,
  email VARCHAR(255) DEFAULT NULL,
  phone_number VARCHAR(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE productos
(
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(50) NOT NULL,
  descripcion varchar(100) NOT NULL,
  precio float NOT NULL, -- Posible Kaboom!!! 💣
  cantidad varchar(3) NOT NULL,
  cantidad_min int(11) NOT NULL,
  categorias varchar(50) NOT NULL,
  imagen longblob NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE user
(
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(50) NOT NULL,
  correo varchar(50) DEFAULT NULL,
  password varchar(16) DEFAULT NULL,
  telefono varchar(15) DEFAULT NULL COMMENT '\r\n',
  registro timestamp NULL DEFAULT current_timestamp() COMMENT 'CURRENT_TIMESTAMP',
  PRIMARY KEY (id)
);

CREATE TABLE usuarios (
  id int(6) NOT NULL AUTO_INCREMENT,
  nombre varchar(50) NOT NULL,
  apellido varchar(50) NOT NULL,
  email varchar(100) DEFAULT NULL,
  password varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
);