create database if not exists cadastrosect
default character set utf8
default collate utf8_general_ci

create table if not exists loginsect(
  Codigo int auto_increment,
  Nome varchar(80) not null,
  Email varchar(100) not null unique,
  CPF bigint(11) unsigned zerofill not null unique,
  primary key(Codigo)
) default character set utf8;
