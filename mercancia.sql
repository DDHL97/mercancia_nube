
use t97bvexsdrc2901u;
create table productos(
	id_producto int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	producto varchar(40) NOT NULL,
	descripcion varchar(400) NOT NULL,
	existencias int(11) NOT NULL,
	precio_compra double(11,2) NOT NULL,
	precio_venta double(11,2) NOT NULL
);

insert into productos(producto,descripcion,existencias,precio_compra,precio_venta) values ('Computadora','maquina bonita',13,600.50,650.70);
insert into productos(producto,descripcion,existencias,precio_compra,precio_venta) values ('Mouse','mickey mouse',13,100.50,150.30);
insert into productos(producto,descripcion,existencias,precio_compra,precio_venta) values ('CPU','velocidad luz :v',23,750.00,820.00);
