mysql -u root
create database practice_php;
grant all on practice_php.* to dbuser@localhost
identified by 'keymaeda2';
use practice_php;

create table fruits (
  id int not null auto_increment primary key,
  name varchar(255),
  price int
);

mysql -u dbuser -p practice_php;