
create database practice_relation;
use practice_relation;

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

--================ Relationships & JOIN ==========================
SELECT * FROM posts;

-- INNER JOIN
SELECT *
FROM users
INNER JOIN posts
ON users.id = posts.user_id; -- ON হলো JOIN-এর matching condition

-- শুধু দরকারি Columns নেওয়া ( users.name, posts.title )
SELECT users.name, posts.title
FROM users
INNER JOIN posts
ON users.id = posts.user_id;

-- Alias
SELECT
    users.id AS user_id, -- Column Alias ( AS )
    posts.id AS post_id,
    users.name,
    posts.title
FROM users
INNER JOIN posts
ON users.id = posts.user_id;

SELECT
    u.name,
    p.title
FROM users AS u -- Table Alias ( AS )
INNER JOIN posts AS p
ON u.id = p.user_id;


-- LEFT JOIN
SELECT
    u.name,
    p.title
FROM users AS u
LEFT JOIN posts AS p
ON u.id = p.user_id;

-- RIGHT JOIN
SELECT *
FROM users
RIGHT JOIN posts
ON users.id = posts.user_id;

-- JOIN + WHERE
SELECT
    u.name,
    p.title
FROM users AS u
INNER JOIN posts AS p
ON u.id = p.user_id
WHERE u.name = 'userA';

-- JOIN + ORDER BY
SELECT
    u.name,
    p.title
FROM users AS u
INNER JOIN posts AS p
ON u.id = p.user_id
ORDER BY p.id DESC;

-- JOIN + LIMIT
SELECT
    u.name,
    p.title
FROM users AS u
INNER JOIN posts AS p
ON u.id = p.user_id
LIMIT 3;

-- JOIN + COUNT + GROUP BY
SELECT
    u.name,
    COUNT(p.id) AS total_posts
FROM users AS u
LEFT JOIN posts AS p
ON u.id = p.user_id
GROUP BY u.id, u.name;






















