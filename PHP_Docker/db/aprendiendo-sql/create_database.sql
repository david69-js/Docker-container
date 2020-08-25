/*
    Create my firts databae to learn more
*/


CREATE TABLE users(
id          int(11) NOT NULL AUTO_INCREMENT,
name        varchar(100) not null,
firts_name  varchar(255) default 'infante',
email       varchar(100) not null,
password    varchar(255),
PRIMARY KEY (id)
);