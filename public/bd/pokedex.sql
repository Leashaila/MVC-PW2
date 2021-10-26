create database pokedex;
use pokedex;

create table usuario(id_usuario integer,
					 nombre_usuario varchar(40),
                     contraseña varchar(40),
                     primary key(id_usuario));
                     
insert into usuario(id_usuario,nombre_usuario,contraseña)
values(1,'Lea','lea123');


create table tipo(id_tipo integer,
					nombre_tipo varchar(40),
                    primary key(id_tipo));

create table pokemon(id_pokemon integer auto_increment,
						nombre_pokemon varchar(40),
                        descripcion varchar(40),
                        id_usuario integer,
                        id_tipo integer,
                        primary key(id_pokemon),
                        foreign key(id_usuario) references usuario(id_usuario),
                        foreign key(id_tipo) references tipo(id_tipo));