create table usuarios (id int(8) auto_increment primary key, nombre varchar(32), clave varchar(64), tipo int(2));
create table libros (id int(8) auto_increment primary key, nombre varchar(128), autor varchar(64), isbn varchar(13), puntuacion int(8), genero varchar(64));

insert into usuarios (nombre, clave, tipo) values ('Yusef', md5('1234'), 1);

insert into libros (nombre, autor, isbn, puntuacion, genero) values ('El Hobbit', 'J.R.R. Tolkien', '9781234567890', 4, 'Fantasia');
insert into libros (nombre, autor, isbn, puntuacion, genero) values ('1984', 'George Orwell', '9788499890944', 5, 'Novela');
insert into libros (nombre, autor, isbn, puntuacion, genero) values ('Dune', 'Frank Herbert', '9788497596824', 3, 'Ciencia ficcion');
