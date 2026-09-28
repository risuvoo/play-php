-- exercise 1
select u.name as username, p.title as post_title from users as u inner join posts as p on u.id = p.user_id;

-- exercise 2
select u.name as username, p.title as post_title from users as u inner join posts as p on u.id = p.user_id where p.user_id = 1;

-- exercise 3
select u.name as username, p.title as post_title from users as u left join posts as p on u.id=p.user_id;

-- exercise 4
select u.name as username, p.title as post_title from users as u left join posts as p on u.id = p.user_id where u.name = 'userA';

-- exercise 5
select p.title as post_title from users as u left join posts as p on u.id = p.user_id order by p.id desc;

-- Challenge
select u.name as username, p.title as post_title from users as u inner join posts as p on u.id = p.user_id;
select u.name as username, p.title as post_title from users as u left join posts as p on u.id = p.user_id;
select u.name as username, count(p.id) as total_count_post from users as u left join posts as p on u.id = p.user_id group by u.id, u.name;
select u.name as username, count(p.id) as total_count_post from users as u left join posts as p on u.id = p.user_id group by u.id, u.name having count(p.id) > 1;
select u.id as "User ID", u.name as "User Name", u.email as "User Email", p.id as "Post ID", p.title as "Post Title" from users as u inner join posts as p on u.id = p.user_id order by p.id desc;







