DROP DATABASE IF EXISTS Infonete;
CREATE DATABASE Infonete;
USE Infonete;


CREATE TABLE localizacion (id_localizacion int primary key auto_increment, nombre varchar(30));
CREATE TABLE usuario (dni int primary key, 
						apellido varchar(30), 
                        nombre varchar(30), 
                        password varchar(30), 
                        correo varchar(30), 
                        fk_localizacion int, 
                        foreign key(fk_localizacion) references localizacion(id_localizacion))
                        ;
/* CREATE TABLE lector (dni int primary key); ver si conviene -- usuario podría tener un atributo que especifique si es lector, contenidista, administrador, etc*/

CREATE TABLE diario (id_diario int primary key auto_increment, 
						nombre varchar(30), 
                        fecha date, 
                        fk_localizacion int, 
                        foreign key(fk_localizacion) references localizacion(id_localizacion));
                        
CREATE TABLE suscripto_a (id_suscripcion int primary key auto_increment, 
						fecha date, 
                        fk_diario int, 
                        fk_usuario int, 
                        foreign key(fk_diario) references diario(id_diario), 
                        foreign key(fk_usuario) references usuario(dni));