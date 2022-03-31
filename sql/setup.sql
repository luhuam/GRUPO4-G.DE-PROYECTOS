DROP DATABASE IF EXISTS healthy2;
CREATE DATABASE healthy2;
USE healthy2;
CREATE TABLE usuario (
  id_user INT AUTO_INCREMENT PRIMARY KEY,
  name varchar(200) NOT NULL,
  password varchar(200) NOT NULL,
  email varchar(200) UNIQUE
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
CREATE TABLE inventario (
  id_inventory int AUTO_INCREMENT PRIMARY KEY,
  id_user int(11) NOT NULL,
  product varchar(200) NOT NULL,
  kind_product varchar(200) DEFAULT NULL,
  amount varchar(200) DEFAULT NULL,
  FOREIGN KEY (id_user) REFERENCES usuario (id_user)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
CREATE TABLE listaCompras (
  id_compra int AUTO_INCREMENT PRIMARY KEY,
  product varchar(200) NOT NULL,
  kind_product varchar(200) DEFAULT NULL,
  amount varchar(200) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
INSERT INTO
  usuario (name, password, email)
VALUES
  ("test", "test", "test@test.com");
INSERT INTO
  usuario (name, password, email)
VALUES
  ("test2", "test2", "test2@test.com");