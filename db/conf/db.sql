
USE movieStar;

CREATE TABLE users (
	id int(11) unsigned auto_increment primary key,
	name varchar(100) not null,
	lastname varchar(100) not null,
	email varchar(200) not null,
	password varchar(200) not null,
	image varchar(200) not null,
	token varchar(200) not null,
	bio text
);

create table movies (
	id int(11) unsigned auto_increment primary key,
	title  varchar(100) not null,
	description text,
	image varchar(200) not null,
	trailer varchar(150),
	category varchar(50),
	length varchar(50),
	users_id int(11) unsigned
);

CREATE table reviews (
	id int(11) unsigned auto_increment primary key,
	rating int,
	review text,
	users_id int(11) unsigned,
	movies_id int(11) unsigned
);

ALTER table movies add foreign key(users_id) references users(id)
ALTER table reviews add foreign key(users_id) references users(id)
ALTER table reviews add foreign key(movies_id) references movies(id)
