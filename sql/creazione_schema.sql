DROP DATABASE IF EXISTS ecommerce_pokemon;
CREATE DATABASE ecommerce_pokemon;
USE ecommerce_pokemon;

CREATE TABLE  users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usr_nome VARCHAR(50) NOT NULL,
    usr_email VARCHAR(100) UNIQUE,
    usr_password VARCHAR(100),
  
);
CREATE TABLE amdins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    adm_nome VARCHAR(50) NOT NULL,
    adm_email VARCHAR(100) UNIQUE,
    adm_password VARCHAR(100),
  
);