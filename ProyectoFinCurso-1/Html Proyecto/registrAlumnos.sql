create database registroalumnos; 
use registroalumnos; 

create table alumnos (
    cial varchar(12) primary key,
    dni varchar(9),
    nombre varchar(50) not null,
    apellidos varchar(50) not null,
    curso varchar(50) not null
);

create table registro_diario(
    tipo varchar(10),
    motivo varchar(50),
    fecha datetime,
    alumno varchar(12),
    persona_autorizada varchar(9)
);

create table persautos (
    dni varchar(9) primary key,
    nombre varchar(50) not null,
    apellidos varchar(50) not null,
    parentesco varchar(50) not null,
    telefono int(9),
    alumno varchar(12),

);

create table usuarios (
    nombre varchar(50) primary key,
    pass varchar(50)
);

alter table persautos add foreign key (alumno) REFERENCES alumnos(cial);