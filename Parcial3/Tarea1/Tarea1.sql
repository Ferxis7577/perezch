create database dbejercicio;
use dbejercicio


create table usuario(
    `id` int NOT NULL AUTO_INCREMENT,
    `nombre` varchar(50) ,
    `apellido` varchar(50) ,
    `mail` varchar(50) NOT NULL,
    `pswrd` varchar(30) NOT NULL,
    PRIMARY KEY (id)
)

INSERT INTO usuario (nombre,apellido,mail,pswrd) 
VALUES('alexis','perez','alexis@mail.com','12345')