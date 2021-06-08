CREATE TABLE `Jedis`
( `id` INT NOT NULL AUTO_INCREMENT , `Jedi` VARCHAR(50) NOT NULL , `Rango` VARCHAR(50) NOT NULL , 
`ColorSable` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


insert into Jedis (Jedi,Rango,ColorSable)
values('Luke Skywalker','Maestro','Verde');

insert into Jedis (Jedi,Rango,ColorSable)
values('Darth Vader','Sith','Rango');

COMMIT;

