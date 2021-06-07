
create database perezcha;
use perezcha;


CREATE TABLE `usuarios`. 
( `idusuario` INT NOT NULL AUTO_INCREMENT , `nombreusuario` VARCHAR(50) NOT NULL , `correo` VARCHAR(50) NOT NULL , 
`pswrd` VARCHAR(50) NOT NULL , PRIMARY KEY (`idusuario`)) ENGINE = InnoDB;


select * from usuarios;

insert into usuarios (idUsuario,nombreUsuario,correo,pswrd)
values('Alexis','alexis12@hotmail.com','$2y$10$sG16Y76/VgkFewuoakzYme9r4BBU8A5q0pBRYSZb..a9vIIgJXBHi')-- password: 12345

insert into usuarios (idUsuario,nombreUsuario,correo,pswrd)
values('Gerardo','gerardop@hotmail.com','$2y$10$XzpAUljtMiZXkUasD2aKA.I4P6nrPQ/lgar2wYEOo9m09dHie12wq')-- password: pinedaz

insert into usuarios (idUsuario,nombreUsuario,correo,pswrd)
values('Javier','javier@hotmail.com','$2y$10$cDtxeqMIOGr3A0Fjj/MPZ.SfdYFPefxmSdPMGgeAgsoWC3f/mMkX6')-- password: 54321

Commit;

