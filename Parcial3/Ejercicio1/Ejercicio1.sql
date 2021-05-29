create database perezch;
use perezch


create table jedi(
    id int NOT NULL AUTO_INCREMENT,
    nombre varchar(50) NOT NULL ,
    apellido varchar(50) NOT NULL,
    rango varchar(40),
    colorsable varchar(15),
    PRIMARY KEY (id)
)

INSERT INTO jedi (nombre,apellido,rango,colorsable) 
VALUES('Luke','Skywalker','Maestro Jedi','verde')

INSERT INTO jedi (nombre,apellido,rango,colorsable) 
VALUES('Ahsoka','Tano','No Jedi','blanco')