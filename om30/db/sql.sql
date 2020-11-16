create database om30;

use om30;

create table paciente (
	id int not null auto_increment,
    nome_paciente varchar(200) not null,
    nome_mae varchar(200) not null,
    data_nasc date not null,
    cpf char(11) not null,
    cns char(15) not null,
    foto varchar(200),
    primary key(id)
);

alter table paciente add column cep char(9) not null;
alter table paciente add column rua varchar(100);
alter table paciente add column bairro varchar(50);
alter table paciente add column cidade varchar(50);
alter table paciente add column uf char(2);
