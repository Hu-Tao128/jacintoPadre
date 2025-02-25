create database tiendaon;

use tiendaon;

create table employee(
    code int not null primary key,
    password varchar(50) not null
);

insert into employee (code, password) values
(1, 'clave123'),
(2, 'segura456'),
(3, 'pass789'),
(4, 'admin2024'),
(5, 'miClave99');