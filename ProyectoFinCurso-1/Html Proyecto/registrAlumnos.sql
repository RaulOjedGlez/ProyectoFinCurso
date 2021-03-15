create database registroalumnos; 
use registroalumnos; 

create table alumnos (
    cial varchar(12) primary key,
    dni varchar(9),
    nombre varchar(50),
    apellido1 varchar(50),
    apellido2 varchar(50),
    curso varchar(50),
    fecha_nacimiento date,
    direccion varchar(50),
    persona_autorizada varchar(9)
);

create table profesores (
    dni varchar(9),
    nombre varchar(10),
    apellido1 varchar(50),
    apellido2 varchar(50),
    asignatura varchar(50),
    primary key(dni,asignatura)
);

create table cursos(
    id_curso AUTO_INCREMENT primary key,
    curso varchar(10),
    tutor varchar(9),
    turno varchar(10),
);

create table asignaturas(
    id_asignatura AUTO_INCREMENT primary key,
    siglas varchar(3),
    asignatura varchar(15),
    aula varchar(20),
    hora int,
    profesor varchar(9)
);

create table aulas(
    aula varchar(15) primary key,
    planta varchar(10),
    edificio varchar(10)
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
    nombre varchar(50),
    apellido1 varchar(50),
    apellido2 varchar(50),
    parentesco varchar(50),
    telefono int(9),
    alumno varchar(12),
);

create table usuarios (
    nombre varchar(50) primary key,
    pass varchar(50)
);

alter table profesores add foreign key(asignatura) references asignaturas(id_asignatura);
alter table registro_diario(alumno) references alumnos(cial);
alter table registro_diario(persona_autorizada) references persautos(dni);
alter table persautos(alumno) references alumnos(cial);
alter table asignaturas(profesor) references profesores(dni);