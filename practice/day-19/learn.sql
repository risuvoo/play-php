--  Database & SQL Fundamentals

create database task_manager;

use task_manager;

create table users(
  id int primary key auto_increment,
  name varchar(100) not null,
  email varchar(150) not null,
  create_at timestamp default current_timestamp
);


insert into users (
  name,
  email
) values (
  'Suvo',
  'rafiqulislamsuvobd@gmail.com'
);

insert into users (
  name,
  email
) values (
  'Rahim',
  'rahim@example.com'
);

select * from users;

select name from users;

select name, email from users;

select * from users where id = 1;

select email from users where email = 'rafiqulislamsuvobd@gmail.com';

update users set name = "Suvo Ahmed" where id = 1;

delete from users where id = 2;

delete from users;

select * from users;


-- ex 1:
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
  ("moin","moin@gmail.com", 20),
  ("mariya","mariya@gmail.com", 20),
  ("sathi","sathi@gmail.com", 20),
  ("muzain","muzain@gmail.com", 20);


-- ex 2:
select * from students;

select name, email from students;

select * from students where id = 3;

select * from students where age>20;

select * from students where email = 'mariya@gmail.com';


-- ex 3:
update students set name = 'moin khan' where id = 2;

update students set age = 40 where id = 3;

delete from students where id = 5;

select * from students;

-- challenge:
create table users(
  id int primary key auto_increment,
  name varchar(200) not null,
  email varchar(150) not null,
  phone varchar(100),
  created_at timestamp default current_timestamp
);


create table posts(
  id int primary key auto_increment,
  user_id int not null,
  title varchar(255) not null,
  foreign key (user_id) references users(id) on delete cascade on update cascade
);

insert into users(
  name,
  email
) values 
("userA","usera@gmail.com"),
("userB","userb@gmail.com"),
("userC","userc@gmail.com"),
("userD","userd@gmail.com"),
("userE","usere@gmail.com");

insert into posts(
  user_id,
  title
) values 
(1,"lorem ipsum1"),
(2,"lorem ipsum2"),
(2,"lorem ipsum2"),
(1,"lorem ipsum1"),
(3,"lorem ipsum3");



