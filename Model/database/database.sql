CREATE DATABASE DATA_PHP IF NOT EXIST;

USE DATA_PHP;


-- CREATE TABLE users
CREATE TABLE users(
    id int primary key,
    name varchar(255)

);

INSERT INTO users(id, name) VALUES (1, 'khoa')