USE almacen2;

CREATE TABLE usuarios (
  nombre VARCHAR(50),
  email VARCHAR(50),
  usuario VARCHAR(50),
  password VARCHAR(20),
  primary key(usuario)
);

CREATE TABLE productos (
  id INT auto_increment,
  nombre VARCHAR(50),
  precio DECIMAL(10,2),
  inventario INT,
  primary key(id)
);

CREATE TABLE ordenes (
  id INT auto_increment,
  nombreCliente VARCHAR(50),
  emailCliente VARCHAR(50),
  totalCuenta DECIMAL(10,2),
  fecha DATETIME DEFAULT(now()),
  primary key (id)
);

INSERT INTO usuarios (nombre, email, usuario, password)
VALUES ('Admin', 'admin@example.com', 'admin', 'admin123');

INSERT INTO usuarios (nombre, email, usuario, password)
VALUES ('Usuario Aleatorio', 'usuario@example.com', 'usuarioaleatorio', 'usuario123');
