CREATE DATABASE usuarios;
USE usuarios;
CREATE TABLE registros(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    nombre VARCHAR(50) COMMENT 'nombre',
    email VARCHAR(80) COMMENT 'email',
    telefono CHAR(10) COMMENT 'phone',
    contrasenia VARCHAR(30) COMMENT 'password',
    rol VARCHAR(13) COMMENT 'rol'
) COMMENT 'Almacena Datos de Usuarios';

ALTER TABLE registros
    ADD lectura CHAR(2) COMMENT 'ver';

ALTER TABLE registros
    ADD escritura CHAR(2) COMMENT 'editar';

ALTER TABLE registros
    ADD status CHAR(2) COMMENT 'estado';

SELECT * FROM registros;

INSERT INTO registros (nombre, email, telefono, contrasenia, rol) VALUES('John Smith', 'moydutogno@gufum.com', '7714984515', 'qwerty000', 'Cliente');
INSERT INTO registros (nombre, email, telefono, contrasenia, rol) VALUES('Jona Rodri', 'JonaRod@gmail.com', '7711460284', 'qwerty000', 'Administrador');
INSERT INTO registros (nombre, email, telefono, contrasenia, rol) VALUES('Juan Perez', 'JuanPer3z@gmail.com', '7713751632', 'qwerty000', 'Vendedor');

SELECT id,email,contrasenia,rol FROM registros WHERE email = 'moydutogno@gufum.com';

SELECT rol FROM registros WHERE email = 'JuanPer3z@gmail.com';



DROP TABLE registros;