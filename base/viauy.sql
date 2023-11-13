CREATE DATABASE viauy;
USE viauy;

CREATE TABLE cliente (
  ci INT(8) PRIMARY KEY,
  nombre VARCHAR(45) not null,
  apellido VARCHAR(45) not null,
  celular INT(9) not null,
  mail VARCHAR(40) UNIQUE not null
);

CREATE TABLE empresa (
  rut BIGINT(15) PRIMARY KEY,
  nombre_empresa VARCHAR(20)not null,
  correo_empresa VARCHAR(40)not null,
  contrasena_empresa VARCHAR(20)not null,
  precio_por_km INT(3) not null
);

CREATE TABLE lineas (
  nro_linea INT(3) PRIMARY KEY,
  km INT(5) not null /*total de km recorrido*/
);

CREATE TABLE vehiculos (
  matricula VARCHAR(7) PRIMARY KEY,
  bano ENUM('Si', 'No'),
  wifi ENUM('Si', 'No'),
  aire ENUM('Si', 'No'),
  cant_asientos INT(2) not null,
  rut BIGINT(15),
  FOREIGN KEY (rut) REFERENCES empresa(rut)
);

CREATE TABLE pasajes (
  codigo INT PRIMARY KEY AUTO_INCREMENT,
  fecha_ida DATE not null,
  fecha_vuelta DATE not null,
  hora_de_partida TIME not null,
  nro_asiento INT(2) not null,
  asientos_disponibles ENUM('reservado', 'libre') DEFAULT 'libre',
  ci INT(8),
  rut BIGINT(15),
  FOREIGN KEY (ci) REFERENCES cliente(ci),
  FOREIGN KEY (rut) REFERENCES empresa(rut)
  );

CREATE TABLE compra (
  id INT PRIMARY KEY AUTO_INCREMENT,
  fecha_compra DATE not null,
  ci INT(8),
  codigo INT,
  FOREIGN KEY (ci) REFERENCES cliente(ci),
  FOREIGN KEY (codigo) REFERENCES pasajes(codigo)
);


CREATE TABLE viajes (
  cod_viaje INT PRIMARY KEY AUTO_INCREMENT,
  origen VARCHAR(30) not null,
  destino VARCHAR(30) not null,
  demora TIME not null,
  nro_linea INT(3),
  rut BIGINT(15),
  FOREIGN KEY (nro_linea) REFERENCES lineas(nro_linea),
  FOREIGN KEY (rut) REFERENCES empresa(rut)
);


-- Insertar datos en la tabla cliente
INSERT INTO cliente (ci, nombre, apellido, celular, mail) VALUES
(1, 'Juan', 'Perez', 123456789, 'juan@example.com'),
(2, 'Maria', 'Gomez', 987654321, 'maria@example.com'),
(3, 'Carlos', 'Lopez', 555555555, 'carlos@example.com'),
(4, 'Ana', 'Rodriguez', 333333333, 'ana@example.com'),
(5, 'Pedro', 'Martinez', 444444444, 'pedro@example.com');

-- Insertar datos en la tabla empresa
INSERT INTO empresa (rut, nombre_empresa, correo_empresa, contrasena_empresa, precio_por_km) VALUES
(123456789012345, 'Transporte Rápido', 'info@transporterapido.com', 'contraseña123', 10),
(987654321098765, 'Viajes Seguros', 'info@viajesseguros.com', 'clave456', 12),
(111111111111111, 'Express Viajes', 'info@expressviajes.com', 'pass789', 8),
(222222222222222, 'Turismo Veloz', 'info@turismoveloz.com', 'password321', 15),
(333333333333333, 'Viajes Relax', 'info@viajesrelax.com', 'securepass', 14);

-- Insertar datos en la tabla lineas
INSERT INTO lineas (nro_linea, km) VALUES
(1, 500),
(2, 700),
(3, 600),
(4, 800),
(5, 900);

-- Insertar datos en la tabla vehiculos
INSERT INTO vehiculos (matricula, bano, wifi, aire, cant_asientos, rut) VALUES
('ABC123', 'Si', 'No', 'Si', 40, 123456789012345),
('XYZ789', 'No', 'Si', 'No', 30, 987654321098765),
('DEF456', 'Si', 'Si', 'No', 50, 111111111111111),
('GHI789', 'No', 'No', 'Si', 35, 222222222222222),
('JKL012', 'Si', 'Si', 'Si', 60, 333333333333333);

-- Insertar datos en la tabla pasajes
INSERT INTO pasajes (fecha_ida, fecha_vuelta, hora_de_partida, nro_asiento, ci, rut) VALUES
('2023-11-15', '2023-11-20', '08:00:00', 15, 1, 123456789012345),
('2023-12-01', '2023-12-05', '12:30:00', 20, 2, 987654321098765),
('2023-11-25', '2023-11-30', '10:00:00', 10, 3, 111111111111111),
('2023-11-18', '2023-11-22', '15:45:00', 25, 4, 222222222222222),
('2023-11-22', '2023-11-27', '11:15:00', 30, 5, 333333333333333);

-- Insertar datos en la tabla compra
INSERT INTO compra (fecha_compra, ci, codigo) VALUES
('2023-11-14', 1, 1),
('2023-11-30', 2, 2),
('2023-11-24', 3, 3),
('2023-11-17', 4, 4),
('2023-11-21', 5, 5);

-- Insertar datos en la tabla viajes
INSERT INTO viajes (origen, destino, demora, nro_linea, rut) VALUES
('Ciudad A', 'Ciudad B', '02:30:00', 1, 123456789012345),
('Ciudad C', 'Ciudad D', '03:15:00', 2, 987654321098765),
('Ciudad E', 'Ciudad F', '01:45:00', 3, 111111111111111),
('Ciudad G', 'Ciudad H', '02:00:00', 4, 222222222222222),
('Ciudad I', 'Ciudad J', '04:00:00', 5, 333333333333333);
