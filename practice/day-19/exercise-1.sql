
create database school_management;

create table students (
  id int primary key auto_increment,
  name varchar(200) not null,
  email varchar(150) not null,
  age int,
  created_at timestamp default current_timestamp
);

insert into students (
  name,
  email,
  age
) values 
  ("suvo","suvo@gmail.com", 20),
  ("moin","moin@gmail.com", 10),
  ("mariya","mariya@gmail.com", 30),
  ("sathi","sathi@gmail.com", 43),
  ("muzain","muzain@gmail.com", 20);