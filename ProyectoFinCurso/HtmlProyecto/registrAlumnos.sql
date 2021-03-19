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
    asignatura varchar(3),
    primary key(dni,asignatura)
);

create table cursos(
    id_curso int AUTO_INCREMENT,
    curso varchar(10),
    tutor varchar(9),
    turno varchar(10),
    primary key (id_curso)
);

create table asignaturas(
    siglas varchar(3),
    asignatura varchar(15),
    aula varchar(20),
    hora int,
    profesor varchar(9),
    primary key (siglas)
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
    alumno varchar(12)
);

create table usuarios (
    nombre varchar(50) primary key,
    pass varchar(50)
);

alter table profesores add foreign key(asignatura) references asignaturas(siglas);
alter table registro_diario add foreign key (alumno) references alumnos(cial);
alter table registro_diario add foreign key (persona_autorizada) references persautos(dni);
alter table persautos add foreign key (alumno) references alumnos(cial);
alter table asignaturas add foreign key(profesor) references profesores(dni);

insert into alumnos values("11111111C","54112233A","camaleon","apellido1","apellido2","curso","20-10-2000","mi casa","54173914J");
insert into persautos values ("54173914J", "Camaleoff", "apellido1", "apellido2", "su puta madre", "666666666", "11111111C");