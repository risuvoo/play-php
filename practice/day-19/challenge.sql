
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
